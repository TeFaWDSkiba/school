<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {

	public function index()
	{
		$data = ['title' => 'Home'];
		$this->load->view('template_part/header',$data);
		$this->load->view('template_part/nav');
		// contain
		$this->load->view('template_part/footer');
	}

}

/* End of file School.php */
/* Location: ./application/controllers/School.php */