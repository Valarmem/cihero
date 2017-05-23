<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Game_model');
	}

	public function index() {
		$users = $this->Game_model->getUserList();
		$this->load->view('game/index',['users'=>$users]);
	}

}