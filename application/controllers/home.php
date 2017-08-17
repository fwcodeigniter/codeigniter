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
			$this->load->model('category_model');
			$this->load->model('brand_model');
			$this->load->model('product_model');
			//load Database
			$this->load->database();
		}
		//Hàm load trang chủ
		public function index()
		{
			$data['category'] = $this->category_model->get_list();
			$data['product'] = $this->product_model->get_list();
			$data['brand'] = $this->brand_model->get_list();
			$data['pro_count'] = $this->product_model->get_pro_count_by_brand();
			if (isset($this->session->userdata['activeuser'])) {
				$data['activeuser'] = $this->session->userdata['activeuser'];
			}
			
			$data['base_url'] = base_url();
			//Load view trang chủ lên
			$this->load->view('layouts/header_View',$data);
			$this->load->view('layouts/slider_View',$data);
			$this->load->view('layouts/left_siderbar_View',$data);
			$this->load->view('layouts/home_View',$data);
			$this->load->view('layouts/footer_View',$data);
		}
	}
 ?>