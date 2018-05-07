<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('MSchool');
		$this->load->helper('url');
		$this->load->library('pagination');
	}
	public function index()
	{
		$data['page'] = $this->MSchool->getSetPage('home')->result();
		$data['articles'] = $this->MSchool->getArticles()->result();
		$data['gambar'] = $this->MSchool->getData('tb_images','untuk','galery')->result();
		$this->load->view('template_part/header',$data);
		$this->load->view('template_part/nav',$data);
		$this->load->view('template_part/slide',$data);
		$this->load->view('pages/home',$data);
		$this->load->view('template_part/footer',$data);
	}
	public function galery()
	{
		$data['page'] = $this->MSchool->getSetPage('galery')->result();
		$data['gambar'] = $this->MSchool->getData('tb_images','untuk','galery')->result();
		$this->load->view('template_part/header',$data);
		$this->load->view('template_part/nav');
		$this->load->view('template_part/slide',$data);
		$this->load->view('pages/galery',$data);
		$this->load->view('template_part/footer');
	}
	public function edukatif()
	{
		$data['page'] = $this->MSchool->getSetPage('edukatif')->result();
		$data['articles'] = $this->MSchool->getArticles()->result();
		$this->load->view('template_part/header',$data);
		$this->load->view('template_part/nav');
		$this->load->view('template_part/slide',$data);
		$this->load->view('pages/edukatif',$data);
		$this->load->view('template_part/footer');
	}
	public function login()
	{
		if (!$this->session->userdata('masuk')) {
			$login = $this->load->view('pages/login');
			return $login;
		} else {
			redirect('acount?user='.$this->session->userdata('ses_id'));
		}
	}
	public function acount()
	{
		if ($this->session->userdata('masuk')) {
			$data['page'] = $this->MSchool->getSetPage('acount')->result();
			$data['profil'] = $this->MSchool->getProfil($this->session->userdata('ses_id'))->row_array();
			$data['categorys'] = $this->MSchool->getDatas('tb_categorys')->result();
			$result['pages'] = $this->MSchool->getSetPage('acount');
			$this->load->view('template_part/header',$data);
			$this->load->view('template_part/nav',$data);
			$this->load->view('template_part/slide',$result);
			$this->load->view('pages/acount',$data);
			$this->load->view('template_part/footer',$data);	
		} else {
			redirect('home');
		}
	}
	public function registrasi()
	{
		$this->load->view('pages/registrasi');
	}
	public function prosesregis()
	{
		$nama = htmlspecialchars($this->input->post('nama'));
		$ttl = htmlspecialchars($this->input->post('ttl'));
		$jenis_kelamin = htmlspecialchars($this->input->post('jenis_kelamin'));
		$username = htmlspecialchars($this->input->post('username'));
		$password = $this->input->post('password');
		$repassword = $this->input->post('repassword');
		$cek_username = $this->MSchool->getData('tb_users','username',$username);
		if ($cek_username->num_rows() > 0) {
			$msg = ["pesan" => "Username sudah terdaftar"];
			echo json_encode($msg);
		} elseif ($password !== $repassword) {
			$msg = ["pesan" => "Password tidak sama"];
			echo json_encode($msg);
		} else {
			$password = password_hash($password, PASSWORD_DEFAULT);
			$datalogin = [
				"username" => $username,
				"password" => $password,
				"akses" => "user"
			];
			$pushdata = $this->MSchool->input('tb_users',$datalogin);
			$datauser = $this->MSchool->getData('tb_users','username',$username)->row_array();
			$photo = "";
			if ($jenis_kelamin == "Laki-laki") {
				$photo = "male.png";
			} else {
				$photo = "female.png";
			}
			$dataprofil = [
			"nama_lengkap" => $nama,
			"tl" => $ttl,
			"jenis_kelamin" => $jenis_kelamin,
			"id_user" => $datauser['id'],
			"photo" => $photo
			];
			$this->MSchool->input('tb_profil',$dataprofil);
			$msg = ["pesan" => "Pendaftaran Berhasil"];
			echo json_encode($msg);
		}
	}
	public function profil()
	{
		$data['profil'] = $this->MSchool->getProfil($this->session->userdata('ses_id'))->row_array();
		return $this->load->view('components/profil',$data);
	}
	public function data_profil()
	{
		$result = $this->MSchool->getProfil($this->session->userdata('ses_id'))->result();
		echo json_encode($result);
	}
	
	public function postuser()
	{
		$data['articles'] = $this->MSchool->getData('tb_articles','author',$this->session->userdata('ses_id'))->result();
		$view = $this->load->view('components/listPost', $data);
		return $view;
	}
	public function readpost($slug)
	{
		// $this->load->library('pagination');
		// $data_artikel = $this->db->get("tb_articles");
		// $config['total_rows']=$data_artikel->num_rows();
		// $config['per_page']=3;
		// $config['base_url'] = base_url().'post';
		// $config['per_page'] = 1;
		// $from = $this->uri->segment(3);
		// $this->pagination->initialize($config);


		$data['articles']=$this->MSchool->getArticles()->result();
		$data['artikel'] = $this->MSchool->getArticle($slug)->row_array();
		$this->load->view('pages/post',$data);
	}
	public function relatedpost()
	{           
        $data['pagination'] = $this->pagination->create_links();
		$data['articles'] = $this->MSchool->getRelated(3,1)->result();

		// $data['articles'] = $this->MSchool->getArticles()->result();
		return $this->load->view('components/related', $data);
	}
	public function createpost()
	{
		$data['categorys'] = $this->MSchool->getDatas('tb_categorys')->result();
		$view = $this->load->view('components/createPost', $data);
		return $view;
	}
	public function gambar()
	{
		$data['gambar'] = $this->MSchool->getData('tb_images','uploaded_by',$this->session->userdata('ses_id'))->result();
		return $this->load->view('components/uploadgambar',$data);
	}
	public function editpost()
	{
		$id = $this->input->get('id');
		$data['artikel'] = $this->MSchool->getEditArticle($id)->row_array();
		return $this->load->view('components/editPost', $data);
	}
	public function hapuspost()
	{
		$id = $this->input->get('id');
		$this->MSchool->delete('tb_articles','id_art',$id);
		$msg = ["pesan" => "data berhasil di hapus"];
		echo json_encode($msg);
	}
	public function caption()
	{
		return $this->load->view('components/caption');
	}
}

/* End of file School.php */
/* Location: ./application/controllers/School.php */