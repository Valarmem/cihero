<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library('pagination');

	}

	public function test() {
		$per_page = 10;
		$table = 'zhuanti_detail';
		$page = $this->uri->segment(3);
		$offset = $page == false?0:($per_page * ($page - 1)); // 计算偏移量


		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('det_title != ""');

		$total = $this->db->count_all_results('', false);
		$this->db->limit($per_page,$offset);
		$list = $this->db->get()->result_array();

		$config['use_page_numbers'] = TRUE;
		$config['base_url'] = 'http://yx.ci.com/index.php/test/test/';
		$config['total_rows'] = $total;
		$config['per_page'] = $per_page;
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '<p>';
    	$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config);
		$link = $this->pagination->create_links();

		// $this->load->view('test/test',['list'=>$list,'link'=>$link]);
		$this->load->view('test/test1');
	}

	public function test1() {
		$per_page = 10;
		$table = 'articles';
		$page = $this->uri->segment(3);
		$offset = $page == false?0:($per_page * ($page - 1)); // 计算偏移量


		$this->db->select('*');
		$this->db->from($table);

		$total = $this->db->count_all_results('', false);
		$this->db->limit($per_page,$offset);
		$list = $this->db->get()->result_array();

		$config['use_page_numbers'] = TRUE;
		$config['base_url'] = 'http://yx.ci.com/index.php/test/test/';
		$config['total_rows'] = $total;
		$config['per_page'] = $per_page;
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '<p>';
    	$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config);
		$link = $this->pagination->create_links();

		// $this->load->view('test/test',['list'=>$list,'link'=>$link]);
		$this->load->view('test/test1');
	}

	public function putjson() {
		$per_page = 5;
		$table = 'articles';
		$page = $_GET['page'];
		$offset = $page == false?0:($per_page * ($page - 1)); // 计算偏移量
		// $this->db->select('det_title,det_descript');
		$this->db->select('*');
		$this->db->from($table);
		// $this->db->where('det_title != ""');

		$total = $this->db->count_all_results('', false);
		$this->db->limit($per_page,$offset);
		$list = $this->db->get()->result_array();
		echo json_encode($list);
	}
}