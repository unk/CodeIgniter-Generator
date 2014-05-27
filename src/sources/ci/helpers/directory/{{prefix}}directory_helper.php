<?php
/**
 * Created by PhpStorm.
 * User: Kim Naram a.k.a. Unknown (naram.kim@dmajor.kr)
 * Date: 2013. 12. 5.
 * Time: 오전 11:40
 * To change this template use File | Settings | File Templates.
 */

/**
 * Create a Directory for upload
 *
 * @access	public
 * @param	string
 * @return	string
 */
if( ! function_exists( 'create_directory' ) )
{
	function create_directory( $target_dir )
	{
		$len = strlen( $target_dir );
		if( $target_dir[ $len - 1 ] == "/" )
		{
			$target_dir = substr( $target_dir, 0, $len - 1 );
		}
		$target_dir .= "/".date( "Y" )."/".date( "m" );

		if( create_path( $target_dir ) )
		{
			return $target_dir;
		}
		else
		{
			return false;
		}
	}
}

/**
 * Create a Directory for upload
 *
 * @access	public
 * @param	string
 * @return	string
 */
if( ! function_exists( 'create_path' ) )
{
	function create_path( $target_path )
	{
		$path = "";

		$len = strlen( $target_path );
		if( $target_path[ $len - 1 ] == "/" )
		{
			$target_path = substr( $target_path, 0, $len - 1 );
		}
		if( substr( $target_path, 0, 2 ) == "./" )
		{
			$path .= ".";
			$target_path = substr( $target_path, 2, $len - 2 );
		}

		$target = explode( "/", $target_path );
		$len = count( $target );
		for( $i = 0; $i < $len; $i++ )
		{
			$path .= "/";
			$path .= $target[ $i ];

			if( !is_dir( $path ) )
			{
				if( !@mkdir( $path ) )
				{
					return false;
				};
			}
		}
		return $path;
	}
}