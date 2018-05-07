<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MSchool');
		$this->load->helper('url');
	}
	public function auth()
	{
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars($this->input->post('password'));
		$cek_user = $this->MSchool->getUser($username);
		if ($cek_user->num_rows() > 0) {
			$data = $cek_user->row_array();
			if (password_verify($password,$data['password'])) {
				$this->session->set_userdata('masuk',TRUE);
				if ($data['akses']=='admin') {
					$this->session->set_userdata('akses',$data['akses']);
					$this->session->set_userdata('ses_id',$data['username']);
					$msg = ["pesan" => "login berhasil"];
					echo json_encode($msg);
				} else {
					$this->session->set_userdata('akses',$data['akses']);
					$this->session->set_userdata('ses_id',$data['username']);
					$msg = ["pesan" => "login berhasil"];
					echo json_encode($msg);
				}
			} else {
				$msg = ["pesan" => "password salah"];
				echo json_encode($msg);
			}
		} else {
			$msg = ["pesan" => "Username salah"];
			echo json_encode($msg);
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */