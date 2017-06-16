<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article_model');
		$this->load->model('Category_model');
	}

	public function index()
	{
		$articles = $this->Article_model->getArticles();
		$categories = $this->Category_model->getCategories();
		$category_arr = [];
		foreach ($categories as $value) {
			$category_arr[$value['id']]=$value['name'];
		}
		if ($this->input->post('empty')) {
			$this->Article_model->emptyAll();
			redirect();
			exit;
		}
		$this->load->view('article/home',['articles'=>$articles,'categories'=>$category_arr]);
	}

	public function create()
	{
		$data['categories'] = $this->Category_model->getCategories();
		$data['post'] = $this->input->post();
		if ($data['post']) {
			$data['post']['user_id'] = mt_rand(1,7);
			if($this->Article_model->createArticles($data['post']))	{
				redirect('article/index');
				exit;
			}
		}

		$this->load->view('article/create',$data);
	}

	public function edit()
	{
		$data['categories'] = $this->Category_model->getCategories();
		$id = $this->input->get('id');
		$data['post'] = $this->Article_model->getArticleById($id);
		if ($this->input->post()) {
			$data['post'] = $this->input->post();
			$data['post']['user_id'] = mt_rand(1,7);
			$data['post']['id'] = $id;
			$this->Article_model->editArticle($data['post']);
			// redirect('article/show?id='.$id);
		}
		$this->load->view('article/edit',$data);
	}

	public function show()
	{
		$id = $this->input->get('id');
		$article = $this->Article_model->getArticleById($id);
		$category = $this->Category_model->getCategoryById($article['category_id']);
		$this->load->view('article/show',['article'=>$article,'category'=>$category]);
	}

	public function delete()
	{
		$id = $this->input->post('id');
		if($this->Article_model->delArticle($id)){
			redirect('article/index');
		}
	}

	public function export()
	{
		$id = $this->input->get('id');
		$this->Article_model->exportArticle($id);
	}


}
