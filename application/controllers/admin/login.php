<?php 
	if (!defined('BASEPATH')) exit('Không cho phép điều hướng này');
	/**
	* 
	*/
	class Login extends MY_Controller
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
			$this->load->view('layouts/header_View',$data);
			$this->load->view('admin/login_View',$data);
			$this->load->view('layouts/footer_View',$data);
		}
	}
 ?>