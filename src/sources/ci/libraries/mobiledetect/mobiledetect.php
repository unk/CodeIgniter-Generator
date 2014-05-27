<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH."/third_party/mobiledetect.core.php";

class MobileDetect extends MobileDetectCore
{
	//protected $ci;
	
	var $device_type;
	
	public function __construct()
	{
		parent::__construct();
        //$this->ci =& get_instance();
        
        $this->device_type = ( $this->isMobile() ? ( $this->isTablet() ? "tablet" : "phone" ) : "web" );
	}
	
	/**
	 *	return device type string
	 *	@return "web", "phone" or "tablet"
	 */
	public function get_device_type()
	{
		return $this->device_type;
	}
}

/* End of file Mobile_detect.php */
/* Location: ./application/libraries/Mobile_detect.php */
