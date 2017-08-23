<?php

Class Cart extends MY_Controller {

    function __construct() {
        parent::__construct();
        //load model
       $this->load->library('cart');
       
        //load Database
//       $this->load->database();
       
    }

 function add()
    {
      $carts = array( array ('id'    => 1,
                            'qty'   => 10,
                            'price' => 6290000,
                            'name'  => 'Laptop Asus E402SA '),
                            
                      array ('id'    => 2,
                            'qty'   => 2,
                            'price' => 12900000,
                            'name'  => 'Laptop Dell Inspiron 3467'),
        );
        //goi phương thức thêm vào giỏ hàng
        $this->cart->insert($carts);
     
   /*  //   lay ra san pham muon them vao gio hang
        $this->load->model('product_model');
        $id = $this->uri->rsegment(3);
        $id = $this->product_model->get_info($id);
        if(!$product_info)
        {
            redirect();
        }
        //tong so san pham
        $qty = 1;
        $price = $product->price;
        if($product->discount > 0)
        {
            $price = $product->price - $product->discount;
        }
        
        //thong tin them vao gio hang
        $data = array();
        $data['id'] = $product->id;
        $data['qty'] = $qty;
        $data['name'] = $product->name;

        $data['price'] = $price;
        $this->cart->insert($data);*/
        
        //chuyen sang trang danh sach san pham trong gio hang
        redirect(base_url('cart'));
     
    }
    
    function index() {
        $carts = $this->cart->contents();
        $this->data['carts'] = $carts;
        $total_items = $this->cart->total_items();
        $this->data['total_items'] = $total_items;
        // load view
        $this->data['temp'] = 'site/cart/index';
        $this->data['base_url'] = base_url();
        $this->load->view('layouts/header_View', $this->data);
        $this->load->view('site/cart/index', $this->data);
        $this->load->view('layouts/footer_View', $this->data);
    }

    function update() {
     
        // load ra danh sach san pham trong thu vien
        $carts = $this->cart->contents();
        foreach ($carts as $key => $row) {
            $data['rowid'] = array();
            $data['rowid'] = $key;
            $data['qty'] = $this->input->post('qty_' . $row['id']);
            $this->cart->update($data);
        }
        redirect(base_url('cart'));
    }

    function del() {
     
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        // load ra sanh sach san pham
        $carts = $this->cart->contents();
        if ($id > 0) {
            foreach ($carts as $key => $row) {
                if ($row['id'] == $id) {
                    $data['rowid'] = array();
                    $data['rowid'] = $key;
                    $data['qty'] = 0;
                    $this->cart->update($data);
                }
            }
        } else {
            $this->cart->destroy();
        }
        redirect(base_url('cart'));
    }

}
