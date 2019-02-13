<?php 

class Model_products extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/* get the brand data */
	public function getProductData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM products where id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM products ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getActiveProductData()
	{
		$sql = "SELECT * FROM products WHERE availability = ? ORDER BY id DESC";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}

	public function create()
	{

		$user_id = $this->session->userdata('id');
		$bill_no = 'BILPR-'.strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 4));
    	$data = array(
    		'bill_no' => $bill_no,
    		'customer_name' => $this->input->post('customer_name'),
    		'customer_address' => $this->input->post('customer_address'),
    		'customer_phone' => $this->input->post('customer_phone'),
    		'date_time' => strtotime(date('Y-m-d h:i:sa')),
    		'name' => $this->input->post('product_name'),
        	'sku' => $this->input->post('sku'),
        	'price' => $this->input->post('price'),
        	'qty' => $this->input->post('qty'),
        	'description' => $this->input->post('description'),
        	'attribute_value_id' => json_encode($this->input->post('attributes_value_id')),
        	'brand_id' => json_encode($this->input->post('brands')),
        	'category_id' => json_encode($this->input->post('category')),
            'store_id' => $this->input->post('store'),
        	'availability' => $this->input->post('availability'),
    		'user_id' => $user_id
    	);

		if($data) {
			$insert = $this->db->insert('products', $data);
			return ($insert == true) ? true : false;
		}
	}

	public function update($id)
	{
		if($id) {
			$user_id = $this->session->userdata('id');
			$bill_no = 'BILPR-'.strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 4));
			$data = array(
	    		'bill_no' => $bill_no,
	    		'customer_name' => $this->input->post('customer_name'),
	    		'customer_address' => $this->input->post('customer_address'),
	    		'customer_phone' => $this->input->post('customer_phone'),
	    		'date_time' => strtotime(date('Y-m-d h:i:sa')),
	    		'name' => $this->input->post('product_name'),
	        	'sku' => $this->input->post('sku'),
	        	'price' => $this->input->post('price'),
	        	'qty' => $this->input->post('qty'),
	        	'description' => $this->input->post('description'),
	        	'attribute_value_id' => json_encode($this->input->post('attributes_value_id')),
	        	'brand_id' => json_encode($this->input->post('brands')),
	        	'category_id' => json_encode($this->input->post('category')),
	            'store_id' => $this->input->post('store'),
	        	'availability' => $this->input->post('availability'),
	    		'user_id' => $user_id
	    	);
			if($data && $id) {
				$this->db->where('id', $id);
				$update = $this->db->update('products', $data);
				return ($update == true) ? true : false;
			}
		}	
	}

	public function remove($id)
	{
		if($id) {
			$this->db->where('id', $id);
			$delete = $this->db->delete('products');
			return ($delete == true) ? true : false;
		}
	}

	public function countTotalProducts()
	{
		$sql = "SELECT * FROM products";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

}