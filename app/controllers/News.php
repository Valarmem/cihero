<?php
defined('BASEPATH') or exit('no direct access allowed');

class News extends CI_Controller
{
  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->view('news/index');
  }

  public function article() {
    $this->load->view('news/article');
  }

  public function search() {
    $this->load->view('news/search');
  }
}
