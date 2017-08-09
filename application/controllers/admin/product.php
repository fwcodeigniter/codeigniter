<?php 
	if (!defined('BASEPATH')) exit('Không cho phép điều hướng này');
	/**
	* 
	*/
	class Product extends My_Controller
	{
		function __construct() 
		{
			//Gọi đến hàm khởi tạo của cha
			parent::__construct();
			//load model
			$this->load->model('product_model');
			$this->load->model('category_model');
			$this->load->model('brand_model');
			//load Database
			$this->load->database();
		}
		//Hàm load trang chủ
		public function index()
		{
			$data['brand'] = $this->brand_model->get_list();
			$data['category'] = $this->category_model->get_list();
			$data['product'] = $this->product_model->get_list();
			$data['base_url'] = base_url();
			$this->load->view('layouts/headeradmin_View',$data);
			$this->load->view('admin/product_View',$data);
			$this->load->view('layouts/footer_View',$data);
		}
		public function add()
		{
			$data['base_url'] = base_url();
			$dulieu = array('name'=>$this->input->post('txtName'),
							'price'=>$this->input->post('txtPrice'),
							'inventory'=>$this->input->post('txtInventory'),
							'cat_id'=>$this->input->post('txtCat'),
							'brand_id'=>$this->input->post('txtBrand'),);
			//upload file
			$config = array();
			$config['upload_path'] = $data['base_url'].'public/images/products'; //thu mục chứa hình
			$config['allowed_types'] = 'jpg|png|gif'; //Loại file cho phép
			$config['file_name'] = time();
			//end upload file
			if ($this->product_model->create($dulieu)) {
				$data['result'] = TRUE;
			}
			else
			{
				$data['result'] = FALSE;
			}
			redirect($data['base_url'].'admin/category');
		}
		public function drop($id = '')
		{
			if ($id!='') {
				if ($this->product_model->delete($id)) {
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
			redirect($data['base_url'].'admin/product');
		}
		public function update($id = '')
		{
			$dulieu = array('name'=>$this->input->post('txtName'));
			if ($this->product_model->update($id, $dulieu)) {
				$data['result'] = TRUE;
			}
			else
			{
				$data['result'] = FALSE;
			}
			$data['base_url'] = base_url();
			redirect($data['base_url'].'admin/product');
		}
	}
 ?>