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
		}
		//Hàm load trang chủ
		public function index()
		{
			//Load view trang chủ lên
			$this->load->view('layouts/header');
			$this->load->view('layouts/home');
			$this->load->view('layouts/footer');
		}
	}
 ?>