<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Model {

	public function getDatas($table)
	{
		return $this->db->get($table);
	}
	public function getUsers()
	{
		return $this->db->get('tb_users');
	}
	public function getArticles()
	{
		$this->db->select('*');
		$this->db->from('tb_articles');
		$this->db->join('tb_categorys', 'tb_articles.id_cat = tb_categorys.id_cat', 'inner');
		return $this->db->get();
	}

}

/* End of file School.php */
/* Location: ./application/models/School.php */