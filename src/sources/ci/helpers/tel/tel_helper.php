<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * Telephone Number Format Helper for Code Igniter 2.1.0 or newer
 *
 * @package		GrotesQ
 * @author		Unknown GrotesQ
 * @copyright	Copyright (c) 2003 - 2013, The GrotesQ
 * @link		http://grotesq.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Tel Minify
 *
 * If you input '02-123-1234',
 * you get '021231234'
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists( 'tel_minify' ) )
{
	function tel_minify( $number )
	{
		$tel_no = preg_replace( '/[^\d\n]+/', '', $number ); 
		if( substr( $tel_no, 0, 1 ) != "0" && strlen( $tel_no ) > 8 )
		{
			$tel_no = "0".$tel_no;
		}
		return $tel_no;
	}
}

// ------------------------------------------------------------------------

/**
 * Tel Beautify
 *
 * If you input '021231234',
 * you get '02-123-1234'
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists( 'tel_beautify' ) )
{
	function tel_beautify( $number )
	{
		return preg_replace( "/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/", "$1-$2-$3", $number );
	}
}

// ------------------------------------------------------------------------

/* End of file tel_helper.php */
/* Location: ./application/helpers/tel_helper.php */