<?php
class Category_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getCategories() {

		return $this->db->select('*')->from('category')->get()->result_array();
	}

	public function getCategoryById($id) {
		return $this->db->select('*')->where('id',$id)->from('category')->get()->row_array();
	}

	/*public function getCategoryById($id) {
		return $this->db->select(*)->where('id',$id)->
	}*/

	public function addCategory($data) {
		$info['name'] = $data;
		return $this->db->insert('category',$info);
	}

	public function delCategory($id) {
		// return $this->db->delete('category',['id'=>$id]);
		return $this->db->where('id',$id)->delete('category');
	}
}