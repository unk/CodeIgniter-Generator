<?php
////////////////////////////////////////////////////////////////////////////////
//
//  Copyright 2005-2013 The GrotesQ
//  All Rights Reserved.
//
////////////////////////////////////////////////////////////////////////////////

/**
 * Author: Kim Naram a.k.a. Unknown (unknown@grotesq.com)
 * Date: 2013. 11. 17.
 * Time: 오후 4:11
 */

if ( ! function_exists( 'set_json_content' ) )
{
	/**
	 *
	 */
	function set_json_content()
	{
		header( "content-type:text/json; charset=utf-8" );
	}
}