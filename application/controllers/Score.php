<?php
defined('BASEPATH') or exit('No direct script allowed');

class Score extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Score_model');
		$this->load->helper('form');
	}

	public function index() {
		$list = $this->Score_model->getList();
		$this->load->view('score/index',['list'=>$list]);
	}

	public function edit($id) {
		if(!is_numeric($id)) {
			show_404();
		}
		$info = $this->Score_model->getInfoById($id);
		$this->Score_model->editScore($info);
		$this->load->view('score/edit');
	}

	public function createBatch() {
		$subjects = ['Math','Chinese','English','Java','PHP','C++','C','Ecomic'];
		$score = mt_rand(60,100);
		$user_id = mt_rand(1,7);
		echo $subjects[mt_rand(0,count($subjects)-1)];
		// $this->db->createBatch();
	}

	public function updateScore() {



		// $data = $this->Score_model->updateScore();
		$data = $this->Score_model->set();
		var_dump($data['result']);

		echo "<table border=1 cellspacing=0 cellpadding=0 withd='80%''>
				<tr><th>条件</th><td>结果</td></tr>
				<tr><th>结果</th><td>%%%%%%%</td></tr>
				<tr><th>语句</th><td>{$data['query']}</td></tr>
				<tr><th>影响行数</th><td style='color:red;'>{$data['affected']}</td></tr>
			</table>";
	}

	public function helper() {
		$this->load->helper('date');
		$datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
		$time = time();
		echo mdate($datestring, $time);
	}

	public function create() {
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        // $this->form_validation->set_rules('username', 'Username', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required',
        //     array('required' => 'You must provide a %s.')
        // );
        // $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        // $this->form_validation->set_rules('email', 'Email', 'required');

        $config = array(
		    array(
		        'field' => 'username',
		        'label' => 'Username',
		        'rules' => 'required'
		    ),
		    array(
		        'field' => 'password',
		        'label' => 'Password',
		        'rules' => 'required',
		        'errors' => array(
		            'required' => 'You must provide a %s.',
		        ),
		    ),
		    array(
		        'field' => 'passconf',
		        'label' => 'Password Confirmation',
		        'rules' => 'required'
		    ),
		    array(
		        'field' => 'email',
		        'label' => 'Email',
		        'rules' => 'required'
		    )
		);
		$this->form_validation->set_rules($config);


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('score/create');
        }
        else
        {
            $this->load->view('score/formsuccess');
        }
	}

}