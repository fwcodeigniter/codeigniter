<?php 
	if (!defined('BASEPATH')) exit('Không cho phép điều hướng này');
	/**
	* 
	*/
	class Signin extends MY_Controller
	{
		function __construct() 
		{
			//Gọi đến hàm khởi tạo của cha
			parent::__construct();
			$this->load->model('user_model');
			$this->load->database();
		}
		//Hàm load trang chủ
		public function index()
		{
			$user = $this->user_model->get_list();
			print_r($user);
		}
	}
 ?>