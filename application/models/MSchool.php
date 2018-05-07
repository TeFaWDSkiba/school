<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSchool extends CI_Model {

	public function getDatas($table)
	{
		return $this->db->get($table);
	}
	public function getData($table,$field,$where)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field, $where);
		return $this->db->get();
	}
	public function getUsers()
	{
		return $this->db->get('tb_users');
	}
	public function getUser($username)
	{
		$query = $this->db->query("SELECT username,password,akses FROM tb_users WHERE username='$username' LIMIT 1");
		return $query;
	}
	public function getProfil($username)
	{
		$this->db->select('*');
		$this->db->from('tb_profil');
		$this->db->join('tb_users', 'tb_profil.id_user = tb_users.id', 'inner');
		$this->db->where('username', $username);
		return $this->db->get();
	}
	public function getArticles()
	{
		$this->db->select('*');
		$this->db->from('tb_articles');
		$this->db->join('tb_categorys', 'tb_articles.id_cat = tb_categorys.id_cat', 'left');
		$this->db->join('tb_images', 'tb_articles.set_gambar = tb_images.nama_gambar', 'left');
		return $this->db->get();
	}
	public function getArticle($slug)
	{
		$this->db->select('*');
		$this->db->from('tb_articles');
		$this->db->join('tb_images', 'tb_articles.set_gambar = tb_images.nama_gambar', 'left');
		$this->db->join('tb_categorys', 'tb_articles.id_cat = tb_categorys.id_cat', 'left');
		$this->db->where('slug', $slug);
		return $this->db->get();
	}
	public function getRelated($limit,$offset)
	{

		$this->db->select('judul,konten,slug,gambar,nama_gambar');
		$this->db->from('tb_articles');
		$this->db->join('tb_images', 'tb_articles.set_gambar = tb_images.nama_gambar', 'left');
		$this->db->limit($limit);
		return $this->db->get();
	}
	public function getEditArticle($id)
	{
		$this->db->select('*');
		$this->db->from('tb_articles');
		$this->db->join('tb_images', 'tb_articles.set_gambar = tb_images.nama_gambar', 'left');
		$this->db->join('tb_categorys', 'tb_articles.id_cat = tb_categorys.id_cat', 'left');
		$this->db->where('id_art', $id);
		return $this->db->get();
	}
	public function getSetPage($halaman)
	{
		$this->db->select('id_sp,halaman,judul,keterangan,nama_gambar,gambar');
		$this->db->from('tb_setpages');
		$this->db->join('tb_images', 'tb_setpages.setgambar = tb_images.nama_gambar', 'left');
		$this->db->where('halaman', $halaman);
		return $this->db->get();
	}
	// Input 
	public function input($table,$data)
	{
		$this->db->insert($table, $data);
	}
	// Update
	public function update($table,$field,$where,$data)
	{
		$this->db->where($field, $where);
		$this->db->update($table, $data);
		return true;
	}
	// hapus
	public function delete($table,$field,$where)
	{
		$this->db->where($field, $where);
		$this->db->delete($table);
		return true;
	}

}

/* End of file School.php */
/* Location: ./application/models/School.php */