<?php 
	if (!defined('BASEPATH')) exit('Không cho phép điều hướng này');
	/**
	* 
	*/
	class Dashboard extends MY_Controller
	{
		function __construct() 
		{
			//Gọi đến hàm khởi tạo của cha
			parent::__construct();
		}
		//Hàm load trang chủ
		public function index()
		{
			$data = array('base_url'=> base_url());
			//Load view trang chủ lên
			$this->load->view('admin/dashboard_View',$data);
		}
	}
 ?>