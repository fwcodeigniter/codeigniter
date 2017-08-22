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
		//Action Category cho phép load sản phẩm theo category
		public function category($cat_id = 0)
		{
			$data['base_url'] = base_url(); //Lấy thư mục gốc
			if ($cat_id == 0) {
				redirect($data['base_url']); //Nếu không có cat_id tự động chuyển về trang chủ
			}
			else //Nếu có cat_id truyền vào thì đọc trong database lấy danh sách sản phẩm theo id
			{
				$data['category'] = $this->category_model->get_list(); //Hàm lấy danh sách category
				$data['brand'] = $this->brand_model->get_list(); //Hàm lấy danh sách Brand
				$data['pro_count'] = $this->product_model->get_pro_count_by_brand(); //Hàm đếm product theo Brand
				$data['active_cat'] = $cat_id;
				$input = array(); //tạo mảng chứa thông tin cần truy vấn
				$input['where'] = array('cat_id' => $cat_id);
//				var_dump($input['where']);
				$data['product'] = $this->product_model->get_list($input); //Hàm lấy danh sách sản phẩm theo cat_id
			}
//			Load view trang chủ lên
			$this->load->view('layouts/header_View',$data);
			$this->load->view('layouts/slider_View',$data);
			$this->load->view('layouts/left_siderbar_View',$data);
			$this->load->view('category_View',$data);
			$this->load->view('layouts/footer_View',$data);
		}
                //Action cho phép ghi dữ liệu lên cart
                public function addtocart()
                {
                        //Mảng lưu thông tin giỏ hàng
                        $cart = array( 
                            'id' => $this->input->post('txtId'),
                            'qty' => 1,
                            'price' => $this->input->post('txtPrice'),
                            'name' => $this->input->post('txtName')
                        );
                        $cart['name'] = str_replace('(', '', $cart['name']);
                        $cart['name'] = str_replace(')', '', $cart['name']);
                        $cart['name'] = str_replace('/', '.', $cart['name']);
                        //Ghi dữ liệu vào giỏ hàng
                        $this->cart->insert($cart);
                        //Lấy số lượng hàng trong giỏ hàng
                        $cart_num = $this->cart->total_items();
                        $this->session->set_userdata('cart_num',$cart_num);
//                        Chuyển về trang trước
                        redirect($_SERVER['HTTP_REFERER']);
                }
	}
 ?>