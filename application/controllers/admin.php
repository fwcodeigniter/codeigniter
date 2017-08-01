<?php 
	if (!defined('BASEPATH')) exit('Không cho phép điều hướng này');
	/**
	* 
	*/
	class Admin extends MY_Controller
	{
		function __construct() 
		{
			//Gọi đến hàm khởi tạo của cha
			parent::__construct();
		}
		//Hàm load trang chủ
		public function index()
		{
			$data['base_url'] = base_url();
			//Load view trang chủ lên
			redirect($data['base_url'].'admin/dashboard');
		}
	}
 ?>