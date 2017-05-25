<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Category_model');
	}

	public function index() {
		$data['categories'] = $this->Category_model->getCategories();
		$this->load->view('category/index',$data);
		$category_name = $this->input->post('name');
		if ($category_name) {
			$this->Category_model->addCategory($category_name);
			redirect('/category/index');
		}
	}

	public function delete() {
		$id = $this->input->post('id');
		if($this->Category_model->delCategory($id))	{
			redirect('/category/index');
			exit;
		}
		echo "删除失败";
		exit;
	}

}