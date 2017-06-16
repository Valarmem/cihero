<?defined('BASEPATH') OR exit('no direct script access allowed');

/**
*
*/
class News extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('pagination');
	}

	public function index()
	{
		$per_page = 10;
		$table = 'zhuanti_detail';
		$page = $this->uri->segment(3);
		$offset = $page == false?0:($per_page * ($page - 1)); // 计算偏移量


		$this->db->select('det_title,det_descript');
		$this->db->from($table);
		$this->db->where('det_title != ""');

		$total = $this->db->count_all_results('', false);
		$this->db->limit($per_page,$offset);
		$list = $this->db->get()->result_array();

		// var_dump($list);
		$this->load->view('news/index');
	}

	public function article() {
		$this->load->view('news/article');
	}

	public function search() {
		$this->load->view('news/search');
	}

	public function search_result() {
		$this->load->view('news/search_result');
	}

	public function putjson() {
		$per_page = 5;
		$table = 'articles';
		// $table = 'zhuanti_detail';
		$page = $_GET['page'];
		$offset = $page == false?0:($per_page * ($page - 1)); // 计算偏移量
		// $this->db->select('det_title,det_descript');
		$this->db->select('*');
		$this->db->from($table);
		// $this->db->where('det_title != ""');

		$total = $this->db->count_all_results('', false);
		$this->db->limit($per_page,$offset);
		$list = $this->db->get()->result_array();
		// $list = [1,2];
		echo json_encode($list);
	}
}
