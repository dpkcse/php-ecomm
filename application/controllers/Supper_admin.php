<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supper_admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url', 'text'));
		$akt_user_id = $this->session->userdata('id');
		if ($akt_user_id == NULL ) {
			redirect('login');
		}
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data = array();
		$data['title'] = "Dashboard";
		$data['count'] = $this->admin_model->countRecords();
		$data['admin_main_content'] = $this->load->view('admin/pages/dashboard',$data,true);
		$this->load->view('admin/admin_master',$data );
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$sdata = array();
		$sdata['message'] = "You are sucessfully logout !";
		$this->session->set_userdata($sdata);
		redirect('/login');
	}

				/***********************************/
				/*     *****  Category  *****      */
				/***********************************/


	public function add_category()
	{
		$data = array();
		$data['title'] = "Add Category";
		$data['get_menu'] = $this->admin_model->getAllMenus();
		$data['admin_main_content'] = $this->load->view('admin/pages/add_category',$data ,true);
		$this->load->view('admin/admin_master',$data );
	}

	public function save_category()
	{
		$data=array();
		$data['category_name']			= $this->input->post('category_name',true);
		$data['category_image']			= $this->save_category_img();
		$data['menu_id']				= $this->input->post('menu_id',true);	
		$data['category_description']	= $this->input->post('category_description',true);	
		$data['publication_status']		= $this->input->post('publication_status',true);

		$this->admin_model->save_category($data);
		$this->session->set_flashdata('msg', 'Category added successfully!');
		redirect('add-category');
	}


	public function manage_categories()
	{
		$data = array();
		$data['title'] = "Manage Categories";
		$data['all_category_info'] = $this->admin_model->all_category_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/manage_categories',$data,true);
		$this->load->view('admin/admin_master',$data );
	}


	public function unpublish_category($category_id)
	{
		$this->admin_model->unpublish_category($category_id);
		redirect('manage-categories');
	}

	public function publish_category($category_id)
	{
		$this->admin_model->publish_category($category_id);
		redirect('manage-categories');
	}

	public function edit_category($category_id)
	{
		$data = array();
		$data['title'] = "Edit Categories";
		$data['category_info'] = $this->admin_model->select_category_by_id($category_id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit_category',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_category()
	{	
		$category_id = $this->input->post('category_id', True);

		// $data= array();
		// $data['category_name']			= $this->input->post('category_name',true);
		// $data['category_description']	= $this->input->post('category_description',true);
		// $data['publication_status'] 	= $this->input->post('publication_status', True);
		// $data['category_image'] 		= $category_image;

		if ($_FILES['category_image']['name'] == '' || $_FILES['category_image']['size'] == '0')
		{
  			$category_image = $this->input->post('category_old_image', True);
  			$this->admin_model->update_category_info($category_image,$category_id);
  			$this->session->set_flashdata('msg', 'Update category Information Sucessfully');
  			redirect('manage-categories');
		}
		  else
  		{
  			$category_image = $this->save_category_img();
  			$this->admin_model->update_category_info($category_image,$category_id);
  			unlink( $this->input->post('category_old_image', True));
  			$this->session->set_flashdata('msg', 'Update category Information Sucessfully');
  			redirect('manage-categories');
  		}

	}

	private function save_category_img()
	{
		$config['upload_path'] = 'upload/category/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 1024;
		// $config['max_width'] = 1024;
		// $config['max_height'] = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('category_image')) {
			$data = $this->upload->data();
			$image_path = $config['upload_path'].$data['file_name'];
			return $image_path;
		}else{
			$error = $this->upload->display_errors();
			print_r($error);
		}
	}

	public function delete_category($category_id)
	{
		$this->admin_model->delete_category($category_id);
		$this->admin_model->delete_manufacturebyCate($category_id);
		$this->admin_model->delete_productbyCate($category_id);
		redirect('manage-categories');
	}


				/***********************************/
				/*  *****  Manufacturer  *****     */
				/***********************************/

	

	public function add_manufacture()
	{
		$data = array();
		$data['title'] = "Add Manufacture";
		$data['publish_category_info'] = $this->admin_model->select_all_publish_category_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/add_manufacture',$data,true);
		$this->load->view('admin/admin_master',$data );
	}

	public function save_manufacture()
	{
		$data=array();
		$data['category_id']				= $this->input->post('category_id',true);
		$data['manufacture_name']			= $this->input->post('manufacture_name',true);
		$data['manufacture_image']			= $this->save_manufacture_img();
		$data['manufacture_description']	= $this->input->post('manufacture_description',true);
		$data['publication_status']			= $this->input->post('publication_status',true);

		$this->admin_model->save_manufacture($data);
		$this->session->set_flashdata('msg', 'Save Manufacture Information Sucessfully!');
		redirect('add-manufacture');
	}

	private function save_manufacture_img()
	{
		$config['upload_path'] = 'upload/subcategory/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 1024;
		// $config['max_width'] = 1024;
		// $config['max_height'] = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('manufacture_image')) {
			$data = $this->upload->data();
			$image_path = $config['upload_path'].$data['file_name'];
			return $image_path;
		}else{
			$error = $this->upload->display_errors();
			print_r($error);
		}
	}

	public function manage_manufacture()
	{
		$data = array();
		$data['title'] = "Manage Manufacture";
		$data['all_manufacture_info'] = $this->admin_model->all_manufacture_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/manage_manufacture',$data,true);
		$this->load->view('admin/admin_master',$data );
	}

	public function unpublish_manufacture($manufacture_id)
	{
		$this->admin_model->unpublish_manufacture($manufacture_id);
		redirect('manage-manufacture');
	}

	public function publish_manufacture($manufacture_id)
	{
		$this->admin_model->publish_manufacture($manufacture_id);
		redirect('manage-manufacture');
	}

	public function edit_manufacture($manufacture_id)
	{
		$data = array();
		$data['title'] = "Edit Manufacture";
		$data['publish_category_info'] = $this->admin_model->select_all_publish_category_info();
		$data['select_manufacture_by_id'] = $this->admin_model->select_manufacture_by_id($manufacture_id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit_manufacture',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_manufacture()
	{

		if ($_FILES['manufacture_image']['name'] == '' || $_FILES['manufacture_image']['size'] == '0') {

  			$manufacture_image = $this->input->post('manufacture_old_image', True);
  			$this->admin_model->update_manufacture_info($manufacture_image);
  			$sdata = array();
  			$sdata['message'] = "Update Manufacture Information Sucessfully";
  			$this->session->set_userdata($sdata);
  			$manufacture_id = $this->input->post('manufacture_id', True);
  			redirect('manage-manufacture');
  		}else
  		{

  			$manufacture_image = $this->save_manufacture_img();
  			$this->admin_model->update_manufacture_info($manufacture_image);
  			unlink( $this->input->post('manufacture_old_image', True));
  			$sdata = array();
  			$sdata['message'] = "Update Manufacture Information Sucessfully";
  			$this->session->set_userdata($sdata);
  			$manufacture_id = $this->input->post('manufacture_id', True);
  			redirect('manage-manufacture');
  		}


	}

	public function delete_manufacture($manufacture_id)
	{
		$this->admin_model->delete_manufacture($manufacture_id);
		$this->admin_model->delete_productbyManu($manufacture_id);
		redirect('manage-manufacture');
	}

	public function getSubCateBy_category()
	{
		if($this->input->post('category_id'))
		{
			echo $this->admin_model->getSubCateBy_category($this->input->post('category_id'));
		}
	}

				/***********************************/
				/*  *****  		Product  *****     */
				/***********************************/



	public function add_product()
	{
		$data = array();
		$data['title'] = "Add Product";
		$data['publish_category_info'] = $this->admin_model->select_all_publish_category_info();
		$data['publish_brand_info'] = $this->admin_model->get_all_brands();
		$data['publish_manufacture_info'] = $this->admin_model->select_all_publish_manufacture_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/add_product',$data,true);
		$this->load->view('admin/admin_master',$data );
	}


	public function save_product()
	{
		$data=array(
			'brand_id' 					=> $this->input->post('brand_id',true),
			'product_name' 				=> $this->input->post('product_name',true),
			'category_id' 				=> $this->input->post('category_id',true),
			'manufacture_id' 			=> $this->input->post('manufacture_id',true),
			'product_model'				=> $this->input->post('product_model',true),
			'pro_label'					=> $this->input->post('pro_label',true),
			'product_for' 				=> $this->input->post('product_for',true),
			'product_short_description' => $this->input->post('product_short_description',true),
			'product_long_description'  => $this->input->post('product_long_description',true),
			'product_price' 			=> $this->input->post('product_price',true),
			'product_new_price' 		=> $this->input->post('product_new_price',true),
			'product_quantity' 			=> $this->input->post('product_quantity',true),
		);

			$config = array(
				'upload_path'	=> 'upload/products/',
				'allowed_types' => 'gif|jpg|png|jpeg',
				'max_size'		=> 1024,
			);

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('product_image')) {
					$error =  $this->upload->display_errors();
			}else {
					$img1 =  $this->upload->data();
					$data['product_image'] = $config['upload_path'].$img1['file_name'];
			}
			if ( ! $this->upload->do_upload('product_image2')) {
					$error =  $this->upload->display_errors();
			}else {
					$img2 =  $this->upload->data();
					$data['product_img2'] = $config['upload_path'].$img2['file_name'];
			}
			if ( ! $this->upload->do_upload('product_image3')) {
					$error =  $this->upload->display_errors();
			}else {
					$img3 =  $this->upload->data();
					$data['product_img3'] = $config['upload_path'].$img3['file_name'];
			}
			if ( ! $this->upload->do_upload('product_image4')) {
					$error =  $this->upload->display_errors();
			}else {
					$img4 =  $this->upload->data();
					$data['product_img4'] = $config['upload_path'].$img4['file_name'];
			}
			if ( ! $this->upload->do_upload('product_image5')) {
					$error =  $this->upload->display_errors();
			}else {
					$img5 =  $this->upload->data();
					$data['product_img5'] = $config['upload_path'].$img5['file_name'];
			}

		$is_featured = $this->input->post('is_featured',true);

		if ($is_featured== "on")
		{
			$data['is_featured'] = 1;
		}
		else
		{
			$data['is_featured'] = 0;
		}
		$data['publication_status']	= $this->input->post('publication_status',true);

		$this->admin_model->save_product_info($data);
		$this->session->set_flashdata('msg', 'Product added Sucessfully!');
		redirect('add-product');
	}

	public function manage_product()
	{
		$data = array();
		$data['title'] = "Manage Product";
		$data['all_product_info'] = $this->admin_model->all_product_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/manage_product',$data,true);
		$this->load->view('admin/admin_master',$data );
	}

	public function unpublish_new($product_id)
	{
		$this->admin_model->unpublish_new($product_id);
		redirect('manage-product');
	}

	public function publish_new($product_id)
	{
		$this->admin_model->publish_new($product_id);
		redirect('manage-product');
	}

	public function unpublish_hot($product_id)
	{
		$this->admin_model->unpublish_hot($product_id);
		redirect('manage-product');
	}

	public function publish_sale($product_id)
	{
		$this->admin_model->publish_sale($product_id);
		redirect('manage-product');
	}

	public function unpublish_sale($product_id)
	{
		$this->admin_model->unpublish_sale($product_id);
		redirect('manage-product');
	}

	public function publish_hot($product_id)
	{
		$this->admin_model->publish_hot($product_id);
		redirect('manage-product');
	}

	public function unpublish_product($product_id)
	{
		$this->admin_model->unpublish_product($product_id);
		$sdata = array();
		$sdata['message'] = "Save unpublish Product Sucessfully!";
		$this->session->set_userdata($sdata);
		redirect('manage-product');
	}

	public function publish_product($product_id)
	{
		$this->admin_model->publish_product($product_id);
		$sdata = array();
		$sdata['message'] = "Save publish Product Sucessfully!";
		$this->session->set_userdata($sdata);
		redirect('manage-product');
	}

	public function delete_product($product_id)
	{
		$sdata = array();
		$sdata['message'] = "Delete  Product Sucessfully!";
		$this->session->set_userdata($sdata);
		$this->admin_model->delete_product($product_id);
		redirect('manage-product');
	}

	public function edit_product($product_id)
	{
		$data = array();
		$data['title'] = "Edit Product";
		$data['publish_category_info'] = $this->admin_model->select_all_publish_category_info();
		$data['publish_manufacture_info'] = $this->admin_model->select_all_publish_manufacture_info();
		$data['product_info'] = $this->admin_model->product_info_by_id($product_id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit_product',$data,true);
		$this->load->view('admin/admin_master',$data);
	}

	public function update_product()
	{
		$product_id = $this->input->post('product_id', True);

		if ($_FILES['product_image']['name'] == '' || $_FILES['product_image']['size'] == '0') {

  			$product_image = $this->input->post('product_old_image', True);
  			$this->admin_model->update_product($product_image, $product_id);
  			$this->session->set_flashdata('msg','Product updated Sucessfully');
  			redirect('manage-product');
  		}else {
  			$product_image = $this->upload_product_img();
  			$this->admin_model->update_product($product_image, $product_id);
  			unlink( $this->input->post('product_old_image', True));
  			$this->session->set_flashdata('msg','Product updated Sucessfully');
  			redirect('manage-product');
  		}
	}

	public function upload_product_img()
	{
		$config = array(
			'upload_path' 	=> 'upload/products/',
			'allowed_types' => 'jpg|png|jpeg',
			'max_size' 		=> 1024,
			// 'max_width' 	=> 1024,
			// 'max_height' 	=> 768
		);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('product_image')) {
			$error =  $this->upload->display_errors();
		}else {
			$img1 =  $this->upload->data();
			$image_path = $config['upload_path'].$img1['file_name'];
			return $image_path;
		}
		// if ( ! $this->upload->do_upload('product_image2')) {
		// 		$error =  $this->upload->display_errors();
		// }else {
		// 		$img2 =  $this->upload->data();
		// 		$data['product_img2'] = $config['upload_path'].$img2['file_name'];
		// }
		// if ( ! $this->upload->do_upload('product_image3')) {
		// 		$error =  $this->upload->display_errors();
		// }else {
		// 		$img3 =  $this->upload->data();
		// 		$data['product_img3'] = $config['upload_path'].$img3['file_name'];
		// }
		// if ( ! $this->upload->do_upload('product_image4')) {
		// 		$error =  $this->upload->display_errors();
		// }else {
		// 		$img4 =  $this->upload->data();
		// 		$data['product_img4'] = $config['upload_path'].$img4['file_name'];
		// }
		// if ( ! $this->upload->do_upload('product_image5')) {
		// 		$error =  $this->upload->display_errors();
		// }else {
		// 		$img5 =  $this->upload->data();
		// 		$data['product_img5'] = $config['upload_path'].$img5['file_name'];
		// }
	}

					/***********************************/
					/*  *****      Brand     *****     */
					/***********************************/

	public function add_brand()
	{
		$data = array();
		$data["title"] = "Brands";
		$data['brand_info_list'] = $this->admin_model->get_all_brands();
		$data["admin_main_content"] = $this->load->view('admin/pages/brand', $data, true);
		$this->load->view('admin/admin_master', $data);
	}

	public function save_brand()
	{
		$data = array();
		$data['brand_name'] = $this->input->post('brandname',true);
		if ($_FILES['brandlogo']['name'] != '') {
			# code...
			$config = array(
				'upload_path' 	=> 'upload/brand/',
				'allowed_types' => 'jpg|png|jpeg',
				'max_size' 		=> 1024,
				'file_name' 	=> time().'_'.$_FILES['brandlogo']['name'],
			);

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('brandlogo')) {
				$err =  $this->upload->display_errors();
				$this->session->set_flashdata('err', $err);
			}else {
				$logo =  $this->upload->data();
				$data['brand_logo'] = $config['upload_path'].$logo['file_name'];
				$this->admin_model->save_brand($data);
				$this->session->set_flashdata('msg','Brand added successfully!');
			}
		}
		redirect('brands');
	}


	public function delete_brand($brand_id)
	{
		$result = $this->admin_model->delete_brand($brand_id);
		$path = $result->brand_logo;
		unlink($path);
		$this->admin_model->delete_brand($brand_id);
		$this->admin_model->delete_productBy_brand($brand_id);

		redirect('brands');
	}

	public function edit_brand($brand_id)
	{
		$data = array();
		$data['title'] = "Edit Brand";
		$data['brand_by_id'] = $this->admin_model->get_brandBy_id($brand_id);
		$data['brand_info_list'] = $this->admin_model->get_all_brands();
		$data["admin_main_content"] = $this->load->view('admin/pages/brand', $data, true);
		$this->load->view('admin/admin_master', $data);
	}

	public function update_brand()
	{
		$id = $this->input->post('brand_id', True);
		if ($_FILES['new_brandlogo']['name'] == '' || $_FILES['new_brandlogo']['size'] == '0')
		{
			$data= array(
				'brand_id' => $this->input->post('brand_id', True),
				'brand_logo' => $this->input->post('old_brandlogo', True),
				'brand_name' => $this->input->post('brandname',true)
			);
			$res = $this->admin_model->update_brand($data, $id);
			if($res){
				$data['message'] = "Update brand Successfully!";
				$this->session->set_userdata($data);
			}
			redirect('brands');
		}else{
			$config = array(
				'upload_path' 	=> 'upload/brand/',
				'allowed_types' => 'jpg|png|jpeg',
				'max_size' 		=> 1024,
				'file_name' 	=> time().'_'.$_FILES['new_brandlogo']['name'],
			);

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('new_brandlogo')) {
				$myerror = array('error' =>  $this->upload->display_errors());
				$this->session->set_userdata($myerror);
				print_r($myerror);
			}else {
				unlink( $this->input->post('old_brandlogo', True));
				$logo =  $this->upload->data();
				$data = array(
					'brand_id' => $this->input->post('brand_id', True),
					'brand_name' => $this->input->post('brandname',true),
					'brand_logo' => $config['upload_path'].$logo['file_name']
				);
				$this->admin_model->update_brand($data, $id);
				redirect('brands');
			}
		}
	}

	public function show_customers()
	{
		$data = array();
		$data['title'] = "Customers";
		$data['customer_list'] = $this->admin_model->get_customers();
		$data["admin_main_content"] = $this->load->view('admin/pages/customers', $data, true);
		$this->load->view('admin/admin_master', $data);
	}
	public function main_menu()
	{
		$data = array();
		$data['title'] = "Main Menu";
		$data['total_menu'] = $this->admin_model->getAllMenus();
		$data["admin_main_content"] = $this->load->view('admin/pages/main_menu', $data, true);
		$this->load->view('admin/admin_master', $data);
	}

	public function addMenu_Item()
	{
		$data = array(
			'item_name' => $this->input->post('itemname',true),
			'fa_class' => $this->input->post('fa_class',true),
			'status' => $this->input->post('item_status',true),
			'has_link' => $this->input->post('haslink',true)
		);
		$this->admin_model->addMenu_Item($data);
		//Loading View
		$this->session->set_flashdata('msg', 'Menu Added Successfully!');
		redirect('main-menu');
	}

	public function delete_menu($id)
	{
		$this->admin_model->delete_menu($id);
		redirect('main-menu');
	}

	public function inactive_menu($id)
	{
		$this->admin_model->inactive_menu($id);
		redirect('main-menu');
	}

	public function active_menu($id)
	{
		$this->admin_model->active_menu($id);
		redirect('main-menu');
	}

	public function add_slide()
	{
		$data = array();
		$data['title'] = 'Add Slider';
		$data["admin_main_content"] = $this->load->view('admin/pages/add_slide', $data, true);
		$this->load->view('admin/admin_master', $data);
	}

	public function save_slide()
	{
		$data = array();
		$data['short_title'] = $this->input->post('short_title',true);
		$data['long_title'] = $this->input->post('long_title',true);
		$data['slide_desc'] = $this->input->post('slide_desc',true);
		if ($_FILES['slide_img']['name'] != '') {
			# code...
			$config = array(
				'upload_path' 	=> 'upload/slider/',
				'allowed_types' => 'jpg|png|jpeg',
				'max_size' 		=> 2048,
				'file_name' 	=> time().'_'.$_FILES['slide_img']['name'],
			);

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('slide_img')) {
				$err = $this->upload->display_errors();
				$this->session->set_flashdata('err', $err);
			}else {
				$img =  $this->upload->data();
				$data['slide_img'] = $config['upload_path'].$img['file_name'];
				$this->admin_model->save_slide($data);
				$this->session->set_flashdata('msg', 'Slider image added Successfully!');
			}
		}
		redirect('add-slide');
	}

	public function slide_gallery()
	{
		$data = array();
		$data['title'] = 'Slide Gallery';
		$data['each_slide_img'] = $this->admin_model->slide_gallery();
		$data["admin_main_content"] = $this->load->view('admin/pages/slide_gallery', $data, true);
		$this->load->view('admin/admin_master', $data);
	}

}
