<?php
class Score_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->dbforge();
	}

	public function getList() {
		return $this->db->select('*')->from('score')
				 ->join('user','user.id=score.user_id','left')->get()
				 ->result_array();
	}

	public function getInfoById($id) {
		$info = $this->db->where('id',$id)->get('score')->row_array();
		return $info;
	}

	public function editScore($data) {
		var_dump($data);
		$this->db->set('score', 'score+100',false);
		$this->db->where('id', $data['id']);
		$this->db->update('score');
		var_dump($this->db->last_query());
	}

	public function createBatch() {
		$data = array(
		   array(
		      'title' => 'My title' ,
		      'name' => 'My Name 2' ,
		      'date' => 'My date 2'
		   ),
		   array(
		      'title' => 'Another title' ,
		      'name' => 'Another Name 2' ,
		      'date' => 'Another date 2'
		   )
		);

		$this->db->update_batch('mytable', $data, 'title');

		// Produces:
		// UPDATE `mytable` SET `name` = CASE
		// WHEN `title` = 'My title' THEN 'My Name 2'
		// WHEN `title` = 'Another title' THEN 'Another Name 2'
		// ELSE `name` END,
		// `date` = CASE
		// WHEN `title` = 'My title' THEN 'My date 2'
		// WHEN `title` = 'Another title' THEN 'Another date 2'
		// ELSE `date` END
		// WHERE `title` IN ('My title','Another title')
	}

	public function updateScore() {
		$full_credit =100;
		$subject = 'math';
		$data['score'] = $full_credit;


		$query = $this->db->update('score', $data, array('score>' => $full_credit,'subject'=>$subject));
		// $res['query'] = $this->db->last_query();

		return $this->testSql($query);
	}

	public function set() {
		$data=array('username'=>'jack',	'email'=>'qq' );
		$sql = $this->db->select('username')->distinct()->select('email')->get('user')->result_array();

		// $sql = $this->db->count_all_results('user');

		$array = $this->generateArray(80);
		// $sql = $this->db->insert_batch('user',$array);

		// $sql = $this->db->truncate('user');
		// $sql = $this->db->empty_table('user');





		return $this->testSql($sql);
	}

	public function testSql($sql) {
		$res['result'] = $sql;
		$res['query'] = $this->db->last_query();
		$res['affected'] = $this->db->affected_rows();
		return $res;
	}

	public function generateArray($num=1,$select='') {
		// 二维数组
		if ($num>1) {
			$stack = array();
			for ($i=0; $i < $num ; $i++) {
				array_push($stack,	['username' => 'jack','email' => $this->generate_chars(6).'@'.$this->generate_chars(3).'.cn',					 	'password' => $this->generate_chars(10)] );
				// array_push($stack,	['username' => 'jeiRd'.$i,'email' =>'Q76qQ'.$i.'@qq.com','password' => $this->generate_chars(10)] );
				// array_push($stack,	['username' => 'jeiRd'.$i,'email' =>$this->generate_chars(6).'@qq.com','password' => $this->generate_chars(10)] );
			}
			return $stack;
			exit;
		}
		if ($select==1) {
			$array = array(
			    'username' => 'jeiRd',
			    'email' => 'Q76qQ@qq.com',
			    'password' => $this->generate_chars(10)
				);
			return $array;
			exit;
		}
		$array = array(
		    'username' => $this->generate_chars(5),
		    'email' => $this->generate_chars(5).'@qq.com',
		    'password' => $this->generate_chars(10)
		);
		return $array;
	}

	public function randnum($min,$max) {
		return mt_rand($min,$min);
	}

	function create_password($pw_length = 10)
	{
		$randpwd = '';
		for ($i=0; $i < $pw_length; $i++) {
			$randpwd .= chr(mt_rand(33,126));
		}
		return $randpwd;
	}

	function generate_chars( $length = 8 ) {
		// 密码字符集，可任意添加你需要的字符
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567891234567890';
		$password = '';
		for ($i=0; $i < $length; $i++) {
			// $password .= substr($chars, mt_rand(0,strlen($chars)-1),1);
			$password .= $chars[ mt_rand(0,strlen($chars)-1) ];
		}
		return $password;
	}

}

