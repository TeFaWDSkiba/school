<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('MSchool');
                $this->load->helper(array('form', 'url'));
        }
    public function gambar()
    {
    	$gambar = $_FILES['gambar']['name'];
    	$uploaded_by = $this->session->userdata('ses_id');
    	$untuk = $this->input->post('untuk');
    	$nama_gambar="";
    	if (!empty($gambar)) {
    		$config['upload_path'] = './resources/img';
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['max_size'] = 2000;
	        $config['max_width'] = 5000;
	        $config['max_height'] = 5000;
	        $config['encrypt_name']	= TRUE;

	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('gambar'))
	        {
	                $error = array('error' => $this->upload->display_errors());
	                // $this->load->('acount',$error);
	                var_dump($error);
	        }
	        else
	        {
	            $gambar = $this->upload->data('file_name');
	            $nama_gambar = explode(".", $gambar);
	            $nama_gambar = $nama_gambar[0];
	            $data = [
	         		"nama_gambar" => $nama_gambar,
	            	"gambar" => $gambar,
	            	"uploaded_by" => $uploaded_by,
	            	"untuk" => $untuk
	            ];
	            $this->MSchool->input('tb_images',$data);
	            redirect('acount?user='.$this->session->userdata('ses_id'));
	        }	
    	}
    }

}

/* End of file Upload.php */
/* Location: ./application/controllers/Upload.php */