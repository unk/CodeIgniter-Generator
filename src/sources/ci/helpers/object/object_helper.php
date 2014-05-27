<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
////////////////////////////////////////////////////////////////////////////////
//
//  Copyright 2005-2013 The GrotesQ
//  All Rights Reserved.
//
////////////////////////////////////////////////////////////////////////////////

/**
 * Author: Kim Naram a.k.a. Unknown (unknown@grotesq.com)
 * Date: 2013. 11. 11.
 * Time: 오후 10:55
 */

if ( ! function_exists( 'object_to_array' ) )
{
	/**
	 * @param $object
	 * @return array
	 */
	function object_to_array( $object )
	{
		if( is_object( $object ) )
		{
			$object = get_object_vars( $object );
		}

		if( is_array( $object ) )
		{
			return array_map( __FUNCTION__, $object );
		}
		else
		{
			return $object;
		}
	}
}

if ( ! function_exists( 'array_to_object' ) )
{
	/**
	 * @param $array
	 * @return object
	 */
	function array_to_object( $array )
	{
		if( is_array( $array ) )
		{
			return (object) array_map( __FUNCTION__, $array );
		}
		else
		{
			return $array;
		}
	}
}