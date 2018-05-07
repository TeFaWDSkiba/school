<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resgistrasi extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/registrasi', $data);
	}

}

/* End of file Resgistrasi.php */
/* Location: ./application/controllers/Resgistrasi.php */