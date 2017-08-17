<?php

Class Cart extends MY_Controller {

    function __construct() {
        parent::__construct();
        //load model
       $this->load->library('cart');
       
        //load Database
       $this->load->database();
       
    }

 function add()
    {

    
    {
        //lay ra san pham muon them vao gio hang
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
        $data['id'] = $product->id_product;
        $data['qty'] = $qty;
        $data['name'] = url_title($product->name);
        $data['image']  = $product->image;
        $data['price'] = $price;
        $this->cart->insert($data);
        
        //chuyen sang trang danh sach san pham trong gio hang
        redirect(base_url('site/cart/index'));
    }
    
    function index() {
        $carts = $this->cart->contents();
        $this->data['carts'] = $carts;
        $total_items = $this->cart->total_items();
        $this->data['total_items'] = $total_items;
        // load view
        $this->data['temp'] = 'site/cart/index';
     
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
}