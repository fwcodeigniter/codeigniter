<?php 
	if (!defined('BASEPATH')) exit('Không cho phép điều hướng này');
	/**
	* 
	*/
	class Home extends CI_Controller
	{
		function __construct() 
		{
			//Gọi đến hàm khởi tạo của cha
			parent::__construct();
			//Load thư viện Url
			$this->load->helper('url');
		}
		//Hàm load trang chủ
		public function index()
		{
			$data = array('base_url'=> base_url());
			//Load view trang chủ lên
			$this->load->view('layouts/header_View',$data);
			$this->load->view('layouts/slider_View',$data);
			$this->load->view('layouts/left_siderbar_View',$data);
			$this->load->view('layouts/home_View',$data);
			$this->load->view('layouts/footer_View',$data);
		}
	}
 ?>