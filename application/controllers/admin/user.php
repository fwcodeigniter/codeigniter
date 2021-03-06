<?php 
	if (!defined('BASEPATH')) exit('Không cho phép điều hướng này');
	/**
	* 
	*/
	class User extends My_Controller
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
		//Hàm load trang chủ
		public function index()
		{
			$data['user'] = $this->user_model->get_list();
			$data['base_url'] = base_url();
			$this->load->view('layouts/headeradmin_View',$data);
			$this->load->view('admin/user_View',$data);
			$this->load->view('layouts/footer_View',$data);
		}
		public function add()
		{
			$dulieu = array('name'=>$this->input->post('txtName'));
			if ($this->user_model->create($dulieu)) {
				$data['result'] = TRUE;
			}
			else
			{
				$data['result'] = FALSE;
			}
			$data['base_url'] = base_url();
			redirect($data['base_url'].'admin/user');
		}
		public function drop($id = '')
		{
			if ($id!='') {
				if ($this->user_model->delete($id)) {
					$data['result'] = 1;
				}
				else
				{
					$data['result'] = 0;
				}
			}
			else
			{
				$data['result'] = -1;
			}
			
			$data['base_url'] = base_url();
			redirect($data['base_url'].'admin/user');
		}
		public function update($id = '')
		{
			$dulieu = array('name'=>$this->input->post('txtName'));
			if ($this->user_model->update($id, $dulieu)) {
				$data['result'] = TRUE;
			}
			else
			{
				$data['result'] = FALSE;
			}
			$data['base_url'] = base_url();
			redirect($data['base_url'].'admin/user');
		}
	}
 ?>