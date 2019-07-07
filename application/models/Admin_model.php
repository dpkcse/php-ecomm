<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


	public function check_admin_info($email,$password)
	{
		$this->db->select('*');
		$this->db->from('akt_users');
		$this->db->where('email',$email);
		$this->db->where('password',md5($password));
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}
	
	public function check_customar_info($email,$password)
	{
		$this->db->select('*');
		$this->db->from('tbl_customers');
		$this->db->where('customer_email',$email);
		$this->db->where('customer_password',md5($password));
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}



	public function register_new_admin($data)
	{
		$this->db->insert('akt_users', $data);
	}
				/***********************************/
				/*     *****  Category  *****      */
				/***********************************/

	public function save_category($data)
	{
		$this->db->insert('tbl_category',$data);
	}

	public function all_category_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->order_by("category_id", "desc");
		$query_result 	= $this->db->get();
		$category_info 	= $query_result->result();
		return $category_info;
	}


	public function unpublish_category($category_id)
	{
		$this->db->set('publication_status',0);
		$this->db->where('category_id',$category_id);
		$this->db->update('tbl_category');
	}


	public function publish_category($category_id)
	{
		$this->db->set('publication_status',1);
		$this->db->where('category_id',$category_id);
		$this->db->update('tbl_category');
	}


	public function select_category_by_id($category_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('category_id',$category_id);
		$query_result 	= $this->db->get();
		$result 		= $query_result->row();
		return $result;
	}

	public function select_all_publish_category_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('publication_status',1);
		$result	= $this->db->get()->result();
		return $result;
	}

	public function update_category_info($category_image, $category_id)
	{

		$data= array();
		$data['category_name']			= $this->input->post('category_name',true);
		$data['category_description']	= $this->input->post('category_description',true);
		$data['publication_status'] 	= $this->input->post('publication_status', True);
		$data['category_image'] 		= $category_image;

		$this->db->where('category_id',$category_id);
		$this->db->update('tbl_category',$data);

	}

	public function delete_category($category_id)
	{
		$this->db->where('category_id',$category_id);
		$this->db->delete('tbl_category');

	}

	public function get_customers()
	{
		$this->db->select('*');
		$this->db->from('tbl_customers');
		$query_result	= $this->db->get();
		$result 		= $query_result->result();
		return $result;
	} 

				/***********************************/
				/*  *****  Manufacturer  *****     */
				/***********************************/


	public function	save_manufacture($data)
	{
		$this->db->insert('tbl_manufacture',$data);

	}

	public function all_manufacture_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_manufacture');
		$this->db->order_by("manufacture_id", "desc");
		$query_result 		= $this->db->get()->result();
		return $query_result;
	}


	public function select_all_publish_manufacture_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_manufacture');
		$this->db->where('publication_status',1);
		$query_result 	= $this->db->get();
		$result 		= $query_result->result();
		return $result;
	}

	public function unpublish_manufacture($manufacture_id)
	{
		$this->db->set('publication_status',0);
		$this->db->where('manufacture_id',$manufacture_id);
		$this->db->update('tbl_manufacture');
	}

	public function publish_manufacture($manufacture_id)
	{
		$this->db->set('publication_status',1);
		$this->db->where('manufacture_id',$manufacture_id);
		$this->db->update('tbl_manufacture');
	}


	public function select_manufacture_by_id($manufacture_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_manufacture');
		$this->db->where('manufacture_id',$manufacture_id);
		$query_result 	= $this->db->get();
		$result 		= $query_result->row();
		return $result;
	}

	public function update_manufacture_info($manufacture_image)
	{
		$data = array();
		$manufacture_id						= $this->input->post('manufacture_id',true);
		$data['category_id']				= $this->input->post('category_id',true);
		$data['manufacture_name']			= $this->input->post('manufacture_name',true);
		$data['manufacture_image'] 			= $manufacture_image;
		$data['manufacture_description']	= $this->input->post('manufacture_description',true);
		$data['publication_status']			= $this->input->post('publication_status',true);
		$this->db->where('manufacture_id',$manufacture_id);
		$this->db->update('tbl_manufacture',$data);
	}

	public function delete_manufacture($manufacture_id)
	{
		$this->db->where('manufacture_id',$manufacture_id);
		$this->db->delete('tbl_manufacture');
	}

	public function delete_manufacturebyCate($category_id)
	{
		$this->db->where('category_id',$category_id);
		$this->db->delete('tbl_manufacture');
	}

	// /Dependent select option

	public function getSubCateBy_category($category_id)
	{
		$this->db->where('category_id', $category_id);
		$this->db->order_by('manufacture_name ', 'ASC');
		$query = $this->db->get('tbl_manufacture');
		$subCate_query =  $query->result();
		$output = '<option disabled selected>Please select</option>';

		foreach($subCate_query as $row)
		{
			$output .= '<option value="'.$row->manufacture_id.'">'.$row->manufacture_name.'</option>';
		}
		return $output;
	}

	public function save_product_info($data)
	{
		$this->db->insert('tbl_product',$data);
	}


	public function all_product_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->order_by("product_id", "desc");
		$query_result = $this->db->get();
		$product_info = $query_result->result();
		return $product_info;
	}

	public function unpublish_new($product_id)
	{
		$this->db->set('pro_label',NULL);
		$this->db->where('product_id',$product_id);
		$this->db->update('tbl_product');
	}

	public function publish_new($product_id)
	{
		$this->db->set('pro_label','New');
		$this->db->where('product_id',$product_id);
		$this->db->update('tbl_product');
	}

	public function unpublish_hot($product_id)
	{
		$this->db->set('pro_label',NULL);
		$this->db->where('product_id',$product_id);
		$this->db->update('tbl_product');
	}

	public function publish_hot($product_id)
	{
		$this->db->set('pro_label','Hot');
		$this->db->where('product_id',$product_id);
		$this->db->update('tbl_product');
	}

	public function unpublish_sale($product_id)
	{
		$this->db->set('pro_label',NULL);
		$this->db->where('product_id',$product_id);
		$this->db->update('tbl_product');
	}

	public function publish_sale($product_id)
	{
		$this->db->set('pro_label','Sale');
		$this->db->where('product_id',$product_id);
		$this->db->update('tbl_product');
	}

	public function unpublish_product($product_id)
	{
		$this->db->set('publication_status',0);
		$this->db->where('product_id',$product_id);
		$this->db->update('tbl_product');
	}

	public function publish_product($product_id)
	{
		$this->db->set('publication_status',1);
		$this->db->where('product_id',$product_id);
		$this->db->update('tbl_product');
	}

	public function delete_product($product_id)
	{
		$this->db->where('product_id',$product_id);
		$this->db->delete('tbl_product');
	}

	public function delete_productbyCate($category_id)
	{
		$this->db->where('category_id',$category_id);
		$this->db->delete('tbl_product');
	}
	public function delete_productbyManu($manufacture_id)
	{
		$this->db->where('manufacture_id',$manufacture_id);
		$this->db->delete('tbl_product');
	}

	public function product_info_by_id($product_id){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('product_id',$product_id);
		$query_result 	= $this->db->get();
		$result 		= $query_result->row();
		return $result;
	}

	public function update_product($product_image, $product_id)
	{
		$data = array();
		$data['product_name']		 		= $this->input->post('product_name', True);
		$data['category_id'] 				= $this->input->post('category_id', True);
		$data['manufacture_id']				= $this->input->post('manufacture_id', True);
		$data['product_model']				= $this->input->post('product_model', True);
		$data['product_short_description'] 	= $this->input->post('product_short_description', True);
		$data['product_long_description'] 	= $this->input->post('product_long_description', True);
		$data['product_price'] 				= $this->input->post('product_price', True);
		$data['product_new_price'] 			= $this->input->post('product_new_price', True);
		$data['product_quantity'] 			= $this->input->post('product_quantity', True);
		$data['publication_status'] 		= $this->input->post('publication_status', True);
		$data['product_image'] 				= $product_image;
		$is_featured 						= $this->input->post('is_featured', TRUE);
		if ($is_featured == NULL) {
			$data['is_featured'] = 0;
		}
		elseif($is_featured == 'on'){
			$data['is_featured'] = 1;
		}

		$this->db->where('product_id', $product_id);
		$this->db->update('tbl_product', $data);
	}

	public function product_details($product_id){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('product_id',$product_id);
		$query_result 	= $this->db->get();
		$result 		= $query_result->row();
		return $result;
	}

	public function save_brand($data)
	{
		$this->db->insert('tbl_brand', $data);
	}

	public function get_all_brands()
	{
		$this->db->select('*');
		$this->db->from('tbl_brand');
		$this->db->order_by("brand_id", "desc");
		$query_result 	= $this->db->get()->result();
		return $query_result;
	}
	public function get_brandBy_id($brand_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_brand');
		$this->db->where('brand_id',$brand_id);
		$query_result 	= $this->db->get()->result();
		return $query_result;
	}

	public function update_brand($data, $id)
	{
		$this->db->where('brand_id',$id);
		$this->db->update('tbl_brand',$data);
	}
	
	public function delete_brand($brand_id)
	{
		$this->db->select('brand_logo');
		$this->db->from('tbl_brand');
		$this->db->where('brand_id',$brand_id);
		$query_result = $this->db->get();
		$data = $query_result->row();

		$this->db->where('brand_id', $brand_id);
		$delete_result = $this->db->delete('tbl_brand');
		if($delete_result){
			return $data;
		}else{
			return false;
		}
	}

	public function delete_productBy_brand($brand_id)
	{
		$this->db->where('brand_id', $brand_id);
		$this->db->delete('tbl_product');
	}

	  /*****                *****/
	  /*****	 CUSTOMERS	 *****/
	  /*****                *****/

	public function register_new_customer()
	{
		$data['customer_name'] 		= $this->input->post('customer_name', True);
		$data['customer_email'] 			= $this->input->post('customer_email', True);
		$data['customer_password'] 		= md5($this->input->post('customer_password', True));
		$data['customer_image'] 			= 'user.jpg';
		$data['customer_phone'] 	= $this->input->post('customer_phone', True);

		$this->db->insert('tbl_customers', $data);
	}
	
	public function create_wishlist($custid,$proid){
		$data['customer_id'] = $custid;
		$data['product_id'] = $proid;
		$this->db->insert('tbl_wishlist', $data);
	}
	public function getWishList($custid){
		$this->db->select('*');
		$this->db->from('tbl_wishlist');
		$this->db->where('customer_id',$custid);
		$query_result 	= $this->db->get();
		$wishlist 	= $query_result->result();
		return $wishlist;
	}
	public function removeWishlist($proid,$custid){
		$this->db->where('customer_id',$custid);
		$this->db->where('product_id',$proid);
		$this->db->delete('tbl_wishlist');
		return 'success';
	}

	public function all_brand_info()
	{
		$this->db->select('*');
		$this->db->from('tbl_brand');
		$query_result 	= $this->db->get();
		$brand 	= $query_result->result();
		return $brand;
	}
	public function getsearchResult($searchVal)
	{
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->like('product_name', $searchVal);
		$this->db->or_like('product_id', $searchVal);
		$this->db->or_like('product_model', $searchVal);
		$this->db->or_like('product_model', $searchVal);
		$query_result 	= $this->db->get();
		$brand 	= $query_result->result();
		return $brand;
	}
	// count all records 
	public function countRecords() {
		$this->db->select('count(*) as count');
		$this->db->from('tbl_product');
		$query1 = $this->db->get();
		$data['all_product_count'] = $query1->result();

		$this->db->select('count(*) as count');
		$this->db->from('tbl_category');
		$query2 = $this->db->get();
		$data['all_category_count'] = $query2->result();

		$this->db->select('count(*) as count');
		$this->db->from('tbl_manufacture');
		$query3 = $this->db->get();
		$data['all_subcategory_count'] = $query3->result();

		$this->db->select('count(*) as count');
		$this->db->from('tbl_orders');
		$query4 = $this->db->get();
		$data['all_orders_count'] = $query4->result();

		return $data;
	}

	public function addMenu_Item($data)
	{
		$this->db->insert('main_menu', $data);
	}

	public function getAllMenus()
	{
		$this->db->select('*');
		$this->db->from('main_menu');
		$query = $this->db->get()->result();
		return $query;
	}

	public function delete_menu($id)
	{
		$this->db->where('id', $id);
		$delete_result = $this->db->delete('main_menu');
		if($delete_result){
			return $data;
		}else{
			return false;
		}
	}

	public function inactive_menu($id)
	{
		$this->db->set('status', 0);
		$this->db->where('id',$id);
		$this->db->update('main_menu');
	}

	public function active_menu($id)
	{
		$this->db->set('status', 1);
		$this->db->where('id',$id);
		$this->db->update('main_menu');
	}

	public function save_slide($data)
	{
		$this->db->insert('tbl_slider', $data);
	}

	public function slide_gallery()
	{
		$this->db->select('*');
		$this->db->from('tbl_slider');
		$query = $this->db->get()->result();
		return $query;
	}
}
