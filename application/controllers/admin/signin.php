<?php 
	if (!defined('BASEPATH')) exit('Không cho phép điều hướng này');
	/**
	* 
	*/
	class Signin extends My_Controller
	{
		function __construct() 
		{
			//Gọi đến hàm khởi tạo của cha
			parent::__construct();
			//load model
			$this->load->model('user_model');
			//load Database
			$this->load->database();
		}
		//Hàm check user/pass
		public function index()
		{
			$data['base_url'] = base_url();
			$data['user'] = $this->user_model->get_list();
			$dulieu = array('user_name'=>$this->input->post('txtUser'),
							'user_pass'=>$this->input->post('txtPass'));
			$isLogin = 0;

			
			foreach ($data['user'] as $key => $value) {
				if (($value->user_name == $dulieu['user_name'])&&($value->user_pass == $dulieu['user_pass'])) {
					$isLogin = 1;
					$activeuser = array('id' => $value->id,
											'user_name' => $value->user_name,
											'user_pass' => $value->user_pass,
											'user_dname' => $value->user_dname,
											'user_phone' => $value->user_phone,
											'user_email' => $value->user_email,
											'user_permission' => $value->user_permission);
					$this->session->set_userdata($activeuser);
					break;
				}
				if (($value->user_name == $dulieu['user_name'])&&($value->user_pass != $dulieu['user_pass'])) {
					$isLogin = 2;
					
					break;
				}
			}
			if ($isLogin == 1) {
				if ($this->session->userdata['user_permission']) {
					redirect($data['base_url'].'home');
				}
				else
				{
					redirect($data['base_url'].'admin/dashboard');
				}
			}
			else if ($isLogin == 2) {
				redirect($data['base_url'].'admin/login/fail/0');
			}
			else
			{
				redirect($data['base_url'].'admin/login/fail/1');
			}
		}
		public function add()
		{
			$data['base_url'] = base_url();
			$data['user'] = $this->user_model->get_list();
			$dulieu = array('user_name'=>$this->input->post('txtUser'),
							'user_pass'=>$this->input->post('txtPass'),
							'user_email'=>$this->input->post('txtEmail'),
							'user_phone'=>$this->input->post('txtPhone'),
							'user_dname'=>$this->input->post('txtUser'),
							'user_permission'=> 1);
			$isDouble = 0;
			foreach ($data['user'] as $key => $value) {
				if ($value->user_name == $dulieu['user_name']) {
					$isDouble = 1;
					break;
				}
			}
			if ($isDouble == 1) {
				redirect($data['base_url'].'admin/login/fail/2');
			}
			if ($this->user_model->create($dulieu)) {
				redirect($data['base_url'].'admin/login/success');
			}
			else
			{
				redirect($data['base_url'].'admin/login/fail/3');
			}
			
			
		}
	}