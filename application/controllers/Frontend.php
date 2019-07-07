<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
    }


	public function index()
	{
		$data = array();
		$data['title'] = "index";
		$data['total_menu'] = $this->admin_model->getAllMenus();
        $data['all_category_info'] = $this->admin_model->all_category_info();
        $data['all_product_info'] = $this->admin_model->all_product_info();
        $data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
        $data['all_brand'] = $this->admin_model->all_brand_info();
        $data['frondend_main_content'] = $this->load->view('frontend/pages/home',$data,true);
		$this->load->view('frontend/index', $data);
	}

	public function product_details($product_id)
	{
		$data = array();
		$data['title'] = "product view";
		$data['total_menu'] = $this->admin_model->getAllMenus();
        $data['all_category_info'] = $this->admin_model->all_category_info();
		$data['all_product_info'] = $this->admin_model->all_product_info();
		$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
		$data['product_details'] = $this->admin_model->product_details($product_id);
		$data['all_brand'] = $this->admin_model->all_brand_info();
        $data['frondend_main_content'] = $this->load->view('frontend/pages/product_details',$data,true);
		$this->load->view('frontend/index', $data);
	}

	public function manufacture_view($manufacture_id)
	{
		$data = array();
		$data['title'] = "manufacture_view";
		$data['total_menu'] = $this->admin_model->getAllMenus();
        $data['manufacture_view_id'] = $manufacture_id;
        $data['all_category_info'] = $this->admin_model->all_category_info();
		$data['all_product_info'] = $this->admin_model->all_product_info();
		$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
		$data['all_brand'] = $this->admin_model->all_brand_info();
        $data['frondend_main_content'] = $this->load->view('frontend/pages/manufacture_view',$data,true);
		$this->load->view('frontend/index', $data);
	}
	public function category_view($category_id)
	{
		$data = array();
		$data['title'] = "category_view";
		$data['total_menu'] = $this->admin_model->getAllMenus();
        $data['category_view_id'] = $category_id;
        $data['all_category_info'] = $this->admin_model->all_category_info();
		$data['all_product_info'] = $this->admin_model->all_product_info();
		$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
		$data['all_brand'] = $this->admin_model->all_brand_info();
        $data['frondend_main_content'] = $this->load->view('frontend/pages/category_view',$data,true);
		$this->load->view('frontend/index', $data);
	}
	public function shopping_cart()
	{
		$data = array();
		$data['title'] = "shopping_cart";
		$data['total_menu'] = $this->admin_model->getAllMenus();
        $data['all_category_info'] = $this->admin_model->all_category_info();
		$data['all_product_info'] = $this->admin_model->all_product_info();
		$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
		$data['all_brand'] = $this->admin_model->all_brand_info();
        $data['frondend_main_content'] = $this->load->view('frontend/pages/cart',$data,true);
		$this->load->view('frontend/index', $data);
	}
	public function frontend_users()
	{
		if($this->session->userdata('customer_id') == null){
			$data = array();
			$data['title'] = "frontend_users";
			$data['total_menu'] = $this->admin_model->getAllMenus();
	        $data['all_category_info'] = $this->admin_model->all_category_info();
			$data['all_product_info'] = $this->admin_model->all_product_info();
			$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
			$data['all_brand'] = $this->admin_model->all_brand_info();
	        $data['frondend_main_content'] = $this->load->view('frontend/pages/login_register',$data,true);
			$this->load->view('frontend/index', $data);
			
		}else{
			redirect('/');
		}
	}
	public function sign_up_customer()
	{
		$this->form_validation->set_rules(
            'customer_name', 'Name', 'trim|required|max_length[255]',
            array(
                'required'      => 'You have not provided %s.'
            )
        );
		$this->form_validation->set_rules(
            'customer_email', 'Email Address', 'trim|required|max_length[255]|is_unique[tbl_customers.customer_email]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );
		$this->form_validation->set_rules(
            'customer_password', 'Password', 'trim|required|min_length[6]',
            array(
                'required'      => 'You have not provided %s.'
            )
        );

		
		if ($this->form_validation->run()) {
			$this->admin_model->register_new_customer();

			$sdata = array();
			$email = $this->input->post('customer_email', true);
	        $password = $this->input->post('customer_password', true);

	        $result = $this->admin_model->check_customar_info($email, $password);

			$sdata['customer_id'] = $result->customer_id;
            $sdata['customer_name'] = $result->customer_name;
            $sdata['customer_email'] = $result->customer_email;
            $sdata['customer_phone'] = $result->customer_phone;
            $sdata['customer_image'] = $result->customer_image;
            $this->session->set_userdata($sdata);
            redirect('/');
        }else{
			$data = array();
			$data['title'] = "frontend_users";
			$data['total_menu'] = $this->admin_model->getAllMenus();
	        $data['all_category_info'] = $this->admin_model->all_category_info();
			$data['all_product_info'] = $this->admin_model->all_product_info();
			$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
			$data['all_brand'] = $this->admin_model->all_brand_info();
	        $data['frondend_main_content'] = $this->load->view('frontend/pages/login_register',$data,true);
			$this->load->view('frontend/index', $data);
		}
	}
	public function frontend_users_singout()
	{
		session_destroy();
		redirect('/sign-in');
	}

	public function sign_in_customer()
	{
		$sdata = array();

		$email = $this->input->post('frontend_user_email', true);
	    $password = $this->input->post('frontend_user_password', true);
	    
	    $result = $this->admin_model->check_customar_info($email, $password);

	    if($result == null){
	    	$sdata['message'] = "Your Password Invalid";
	    	$this->session->set_userdata($sdata);
	    	redirect('/sign-in');
	    }else{
	    	$sdata['customer_id'] = $result->customer_id;
	        $sdata['customer_name'] = $result->customer_name;
	        $sdata['customer_email'] = $result->customer_email;
	        $sdata['customer_phone'] = $result->customer_phone;
	        $sdata['customer_image'] = $result->customer_image;
	        $this->session->set_userdata($sdata);

	        redirect('/');
	    }

	}

	public function user_wishList()
	{

		if($this->session->userdata('customer_id') == null){
			redirect('/sign-in');
		}else{
			$data = array();
			$data['title'] = "customer_wishlist";
			$data['total_menu'] = $this->admin_model->getAllMenus();
	        $data['all_category_info'] = $this->admin_model->all_category_info();
			$data['all_product_info'] = $this->admin_model->all_product_info();
			$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
			$data['all_brand'] = $this->admin_model->all_brand_info();
	        $data['frondend_main_content'] = $this->load->view('frontend/pages/wish_list',$data,true);
			$this->load->view('frontend/index', $data);
			
		}
	}

	public function createWishlist(){
		$this->admin_model->create_wishlist($this->input->post('userId'),$this->input->post('productId'));
		return 'success';
	}
	public function getCustomerWishList(){
		$data =  $this->admin_model->getWishList($this->input->post('userId'));
		echo json_encode($data);
		return $data;
	}
	public function removeCustomerWishlist(){
		$data =  $this->admin_model->removeWishlist($this->input->post('productId'),$this->input->post('customerId'));
		$data = 'success';
		echo $data;
		return $data;
	}

	public function customer_search()
	{
		$data = array();
		$data['title'] = "search page";
		$data['total_menu'] = $this->admin_model->getAllMenus();
        $data['all_category_info'] = $this->admin_model->all_category_info();
		$data['all_product_info'] = $this->admin_model->all_product_info();
		$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
		$data['search_result'] = $this->admin_model->getsearchResult($this->input->post('search_value'));
		$data['search_value'] = $this->input->post('search_value');
		$data['all_brand'] = $this->admin_model->all_brand_info();
        $data['frondend_main_content'] = $this->load->view('frontend/pages/search',$data,true);
		$this->load->view('frontend/index', $data);
	}

	public function contact(){
		$data = array();
		$data['title'] = "Contact";
		$data['total_menu'] = $this->admin_model->getAllMenus();
        $data['all_category_info'] = $this->admin_model->all_category_info();
		$data['all_product_info'] = $this->admin_model->all_product_info();
		$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
		$data['all_brand'] = $this->admin_model->all_brand_info();
        $data['frondend_main_content'] = $this->load->view('frontend/pages/contact',$data,true);
		$this->load->view('frontend/index', $data);
	}

}
