<?php 
	if (!defined('BASEPATH')) exit('Không cho phép điều hướng này');
	/**
	* 
	*/
	class MY_Controller extends CI_Controller
	{
		var $data = array();
		function __construct() 
		{
			//Gọi đến hàm khởi tạo của cha
			parent::__construct();
			//xử lý controller
			$control = $this->uri->segment(1);
			$control = strtolower($control);
			switch ($control) {
				case 'admin':
					# code...
					break;
				
				default:
					# code...
					break;
			}
		}
	}
 ?>