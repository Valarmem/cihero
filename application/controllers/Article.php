<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article_model');
	}

	public function index()
	{
		$id = $this->input->get('id');
		$article = $this->Article_model->getArticle($id);
		// print_r($article);
		$this->load->view('home',$article);
	}

	public function export()
	{
		$id = $this->input->get('id');
		$this->Article_model->exportArticle($id);
	}


}
