<?php
/**
 * Created by PhpStorm.
 * User: Kim Naram a.k.a. Unknown (naram.kim@dmajor.kr)
 * Date: 2014. 2. 4.
 * Time: 오후 3:33
 * To change this template use File | Settings | File Templates.
 */

/**
 * Get Video ID
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists( 'get_video_id' ) )
{
	function get_video_id( $str )
	{
		if( substr( $str, 0, 4 ) == 'http' )
		{
			if( strpos( $str, 'youtu.be' ) )
			{
				return array_pop( explode( '/', $str ) );
			}
			else if( strpos( $str, '/embed/' ) )
			{
				return array_pop( explode( '/', $str ) );
			}
			else if( strpos( $str, '/v/' ) )
			{
				return array_pop( explode( '/', $str ) );
			}
			else
			{
				$params = explode( '&', array_shift( explode( '#', array_pop( explode( '?', $str ) ) ) ) );
				foreach( $params as $data )
				{
					$arr = explode( '=', $data );
					if( $arr[ 0 ] == 'v' )
					{
						return $arr[ 1 ];
					}
				}
			}
		}
		else
		{
			return $str;
		}

		return '';
	}
}

/**
 * Get Thumbnail URL
 *
 * @param $url_or_id
 * @param $type
 * @return string
 */
if ( ! function_exists( 'get_yt_thumb' ) )
{
	function get_yt_thumb( $url_or_id, $type )
	{
		switch( $type )
		{
			case '0' :
				return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/0.jpg';
				break;
			case '1' :
				return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/1.jpg';
				break;
			case '2' :
				return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/2.jpg';
				break;
			case '3' :
				return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/3.jpg';
				break;
			case 'hq' :
				return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/hqdefault.jpg';
				break;
			case 'mq' :
				return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/mqdefault.jpg';
				break;
			case 'sd' :
				return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/sddefault.jpg';
				break;
			case 'maxres' :
				return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/maxresdefault.jpg';
				break;
			default :
				return '//img.youtube.com/vi/'.get_video_id( $url_or_id ).'/default.jpg';
		}
	}
}

/**
 * Get Thumbnail URL 0
 *
 * @param $url_or_id
 * @return string
 */
if ( ! function_exists( 'get_yt_thumb_0' ) )
{
	function get_yt_thumb_0( $url_or_id )
	{
		return get_yt_thumb( $url_or_id, '0' );
	}
}

/**
 * Get Thumbnail URL 1
 *
 * @param $url_or_id
 * @return string
 */
if ( ! function_exists( 'get_yt_thumb_1' ) )
{
	function get_yt_thumb_1( $url_or_id )
	{
		return get_yt_thumb( $url_or_id, '1' );
	}
}

/**
 * Get Thumbnail URL 2
 *
 * @param $url_or_id
 * @return string
 */
if ( ! function_exists( 'get_yt_thumb_2' ) )
{
	function get_yt_thumb_2( $url_or_id )
	{
		return get_yt_thumb( $url_or_id, '2' );
	}
}

/**
 * Get Thumbnail URL 3
 *
 * @param $url_or_id
 * @return string
 */
if ( ! function_exists( 'get_yt_thumb_3' ) )
{
	function get_yt_thumb_3( $url_or_id )
	{
		return get_yt_thumb( $url_or_id, '3' );
	}
}

/**
 * Get Thumbnail URL HQ
 *
 * @param $url_or_id
 * @return string
 */
if ( ! function_exists( 'get_yt_thumb_hq' ) )
{
	function get_yt_thumb_hq( $url_or_id )
	{
		return get_yt_thumb( $url_or_id, 'hq' );
	}
}

/**
 * Get Thumbnail URL MQ
 *
 * @param $url_or_id
 * @return string
 */
if ( ! function_exists( 'get_yt_thumb_mq' ) )
{
	function get_yt_thumb_mq( $url_or_id )
	{
		return get_yt_thumb( $url_or_id, 'mq' );
	}
}

/**
 * Get Thumbnail URL SD
 *
 * @param $url_or_id
 * @return string
 */
if ( ! function_exists( 'get_yt_thumb_sd' ) )
{
	function get_yt_thumb_sd( $url_or_id )
	{
		return get_yt_thumb( $url_or_id, 'sd' );
	}
}

/**
 * Get Thumbnail URL Max Resolution
 *
 * @param $url_or_id
 * @return string
 */
if ( ! function_exists( 'get_yt_thumb_maxres' ) )
{
	function get_yt_thumb_maxres( $url_or_id )
	{
		return get_yt_thumb( $url_or_id, 'maxres' );
	}
}