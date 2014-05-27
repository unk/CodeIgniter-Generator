<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Author: Lee SeungYeop a.k.a. Nekoromancer (nekoromancer@gmail.com)
 * Date: 2014. 3. 13.
 * Time: PM 19:08
 */

function pw_gen( $plain_input = null, $detail = false )
{
	if( !$plain_input )
	{
		show_error( '1st parameter( plain text to crypt ) must be required', 500 );
	}

	$version = phpversion();
	$version = (int)(preg_replace('/\./', '', $version));

	if( $version < 530 ) 
	{
		show_error( 'Sorry, but You need PHP5 >= 5.3.0 to using Password helper.', 500 );
	}
	else if( $version >= 550 )
	{
		$salt = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
		$options = array('salt' => $salt);
		$hash = password_hash($plain_input, PASSWORD_BCRYPT, $options);

		if( $detail )
		{
			$result = array('result'=>$hash,
							'php_version'=>phpversion(),
							'crypted_by'=>'BCRYPT');

			return $result;
		}
		else
		{
			return $hash;
		}
	}
	else if( $version < 532 )
	{
		$charSet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#%^&*?';
		$salt = '';

		for( $i = 0; $i < 8; $i++ )
		{
			$salt .= $charSet{mt_rand(0, (strlen($charSet) - 1))};
		}

		$hash = crypt($plain_input, '$1$'.$salt.'$');

		if( $detail )
		{
			$result = array('result'=>$hash,
							'php_version'=>phpversion(),
							'crypted_by'=>'MD5');

			return $result;
		}
		else
		{
			return $hash;
		}
	}
	else
	{
		$charSet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#%^&*?';
		$salt = '';

		for( $i = 0; $i < 16; $i++ )
		{
			$salt .= $charSet{mt_rand(0, (strlen($charSet) - 1))};
		}

		$hash = crypt($plain_input, '$5$rounds=9000$'.$salt.'$');

		if( $detail )
		{
			$result = array('result'=>$hash,
							'php_version'=>phpversion(),
							'crypted_by'=>'SHA256');

			return $result;
		}
		else
		{
			return $hash;
		}
	}
}

function pw_verify( $plain_input, $hash )
{
	if( preg_match('/^\$2y\$/', $hash) )
	{
		if( password_verify( $plain_input, $hash ) )
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		$_temp = explode('$', $hash);
		array_shift( $_temp );
		array_pop( $_temp );

		$header = '$'.implode('$', $_temp).'$';
		$userinput = crypt( $plain_input, $header );

		if( $userinput === $hash )
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}