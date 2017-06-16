<?php


class Article_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		return $this->load->view();
	}

	public function getArticles()
	{
		$this->db->select('*');
		$this->db->from('articles');
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function getArticleByid($id) {
		return $this->db->from('articles')->where('id',$id)->get()->row_array();
	}

	public function createArticles($data)
	{
		$info = [
			'title'		  => $data['title'],
			'content'	  => $data['content'],
			'user_id'	  => $data['user_id'],
			'category_id' => $data['category_id'],
			];
		return $this->db->insert('articles',$data);

	}

	public function editArticle($data)
	{
		$info = [
			'id'		  => $data['id'],
			'title'		  => $data['title'],
			'content'	  => $data['content'],
			'user_id'	  => $data['user_id'],
			'category_id' => $data['category_id'],
		];
		$this->db->update('articles', $info, "id = ".$info['id']);
		// UPDATE `articles` SET `id` = '12', `title` = 'test', `content` = 'testsfdfdfs是滴是滴', `user_id` = 6, `category_id` = '12' WHERE `id` = 12
		// $this->db->replace('articles',$info);
		// REPLACE INTO `articles` (`id`, `title`, `content`, `user_id`, `category_id`) VALUES ('12', 'test', 'testsfdfdfs是滴是滴', 4, '12')
		print_r($this->db->last_query());
		// return $this->db->update('articles', $info, "id = ".$info['id']);
		// return $this->db->replace('articles',$info);
	}


	public function delArticle($id)
	{
		return $this->db->where('id',$id)->delete('articles');
	}

	public function emptyAll() {
		$this->db->empty_table('articles'); // Produces: DELETE FROM mytable

		// $this->db->from('mytable');
		// $this->db->truncate();

		// // or

		// $this->db->truncate('mytable');
	}

	public function exportArticle($id)
	{
		$this->db->select('*');
		$this->db->from('articles');
		$this->db->where('id',$id);

		$result = $this->db->get()->result_array();
		if (!$result) {
			return false;
		}

		$this->load->library('PHPExcel');
		$this->load->library('PHPExcel/IOFactory');

		$phpExcel = new PHPExcel();
		$phpExcel->getProperties()->setCreator("Maarten Balliauw")
                                	     ->setLastModifiedBy("Maarten Balliauw")
                                	     ->setTitle("Office 2007 XLSX Test Document")
                                	     ->setSubject("Office 2007 XLSX Test Document")
                                	     ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
                                	     ->setKeywords("office 2007 openxml php")
                                	     ->setCategory("Test result file");


		// 将表字段加入到第一行
		$phpExcel->setActiveSheetIndex(0)
    	                ->setCellValue('A1','ID' )
    	                ->setCellValue('B1','标题')
    	                ->setCellValue('C1','用户id')
    	                ->setCellValue('D1','内容');

		// 获取表内数据
		$col = 2;
		foreach ($result as $item) {
			$phpExcel->setActiveSheetIndex(0)
	                    ->setCellValue("A$col", date('Y-m-d',$item['id']))
	                    ->setCellValue("B$col", $item['title'])
	                    ->setCellValue("C$col", $item['user_id'])
	                    ->setCellValue("D$col", $item['content']);
			$col++;
		}

		$phpExcel->getActiveSheet()->setTitle("访问排行");
		$phpExcel->setActiveSheetIndex(0);

		$phpWriter = IOFactory::createWriter($phpExcel,'Excel5');

		// 下载文件
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Article_'.date('dMy').'.xls');
		header('Cache-Control:max-age=0');

		$phpWriter->save('php://output');
		exit;
	}



}