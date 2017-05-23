<?php

class Game_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getUserList() {
		$this->db->select('user1 as user,count(*) as counted',false);
		$this->db->from('game');
		$this->db->group_by('user');
		$query1 = $this->db->get_compiled_select();

		$this->db->select('user2 as user,count(*) as counted',false);
		$this->db->from('game');
		$this->db->group_by('user');
		$query2 = $this->db->get_compiled_select();

		$this->db->select('user3 as user,count(*) as counted',false);
		$this->db->from('game');
		$this->db->group_by('user');
		$query3 = $this->db->get_compiled_select();

		$this->db->select('user4 as user,count(*) as counted',false);
		$this->db->from('game');
		$this->db->group_by('user');
		$query4 = $this->db->get_compiled_select();

		$select_query = $query1.' UNION ALL '.$query2.' UNION ALL '.$query3.' UNION ALL '.$query4;

		$query = $this->db->query('SELECT user,sum(counted) as counted FROM( '.$select_query.' )AS B GROUP BY user ORDER BY counted');

		$result = $query->result_array();

		// var_dump($info);
		// $this->db->join('user');

		// $result = $this->db->get()->result_array();
		return $result;
	}
}