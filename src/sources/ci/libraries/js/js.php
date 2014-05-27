<?php
////////////////////////////////////////////////////////////////////////////////
//
//  Copyright 2005-2013 The GrotesQ
//  All Rights Reserved.
//
////////////////////////////////////////////////////////////////////////////////

/**
 * Author: Kim Naram a.k.a. Unknown (unknown@grotesq.com)
 * Date: 13. 7. 8.
 * Time: 오후 5:05
 */

class Js
{
	public function __construct()
	{

	}

	/**
	 * Create open tags
	 *
	 * @access  private
	 * @param   none
	 * @return  none
	 */
	private function _start_script()
	{
		echo '<meta charset="utf-8">';
		echo '<script type="text/javascript">';
		$this->is_init = TRUE;
	}

	/**
	 * Create end tag
	 *
	 * @access  private
	 * @param   none
	 * @return  none
	 */
	private function _end_script()
	{
		echo '</script>';
	}

	/**
	 * Alert
	 *
	 * @access  public
	 * @param   string
	 * @return  none
	 */
	public function alert( $message )
	{
		$this->_start_script();
		echo "alert( \"$message\" );";
		$this->_end_script();
	}

	/**
	 * History back
	 *
	 * @access  public
	 * @param   none
	 * @return  none
	 */
	public function back()
	{
		$this->_start_script();
		echo "window.history.back();";
		$this->_end_script();
	}

	/**
	 * Window location redirect
	 *
	 * @access  public
	 * @param   string
	 * @return  none
	 *
	 */
	public function redirect( $path )
	{
		$this->_start_script();
		echo "window.location.href = \"$path\"";
		$this->_end_script();
	}

	/**
	 * Alert and back
	 *
	 * @access  public
	 * @param   string
	 * @return  none
	 */
	public function alert_and_back( $message )
	{
		$this->alert( $message );
		$this->back();

	}

	/**
	 * Alert and redirect
	 *
	 * @access  public
	 * @param   string
	 * @param   string
	 * @return  none
	 */
	public function alert_and_redirect( $message, $path )
	{
		$this->alert( $message );
		$this->redirect( $path );
	}
}