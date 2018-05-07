<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MSchool');
		$this->load->helper('url');
	}
	public function updateProfil($value='')
	{
		$namalengkap = htmlspecialchars($this->input->post('nama_lengkap'));
		$tgllahir = htmlspecialchars($this->input->post('tgllahir'));
		$alamat = htmlspecialchars($this->input->post('alamat'));
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$username = $this->input->post('username');
		$tentang = htmlspecialchars($this->input->post('tentang'));
		$id = $this->input->post('id_prof');
		if (isset($_POST['password'])) {
			$password = $this->input->post('password');
			$repassword = $this->input->post('repassword');
			if ($password !== $repassword) {
				$msg = ["pesan" => "Passwor tidak sama"];
				echo json_encode($msg);
			} else {
				$password = password_hash($password,PASSWORD_DEFAULT);
				$data = [
				"password" => $password
				];
				$pushed = $this->MSchool->update('tb_users','username',$username,$data);
			}
		}
		$dataprofil = [
			"nama_lengkap" => $namalengkap,
			"tl" => $tgllahir,
			"alamat" => $alamat,
			"jenis_kelamin" => $jenis_kelamin,
			"tentang" => $tentang
		];
		$push = $this->MSchool->update('tb_profil','id_prof',$id,$dataprofil);
		if ($push==true) {
			$msg = ["pesan" => "Data berhasil di update"];
			echo json_encode($msg);
		}
	}
	public function createpost()
	{
		$judul = htmlspecialchars($this->input->post('judul'));
		$content = htmlspecialchars($this->input->post('content'));
		$uploaded_by = $this->session->userdata('ses_id');
		$gambar = $_FILES['gambar']['name'];
    	$untuk = $this->input->post('untuk');
		//Buat slug
        $judul=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '', $judul); //filter karakter unik dan replace dengan kosong ('')
        $trim=trim($judul); // hilangkan spasi berlebihan dengan fungsi trim
        $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
        $slug=$pre_slug.'.html'; // tambahkan ektensi .html pada slug
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
	                echo json_encode($error);
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
				$data = [
					"judul" => $judul,
					"konten" => $content,
					"id_cat" => 1,
					"author" => $uploaded_by,
					"status" => 1,
					"set_gambar" => $nama_gambar,
					"slug" => $slug
				];
				$this->MSchool->input('tb_articles',$data);
				redirect('acount?user='.$uploaded_by);
	        }
	    } else {
	    	$data = [
			"judul" => $judul,
			"konten" => $content,
			"id_cat" => 1,
			"author" => $uploaded_by,
			"status" => 1,
			"$slug" =>$slug
		];
		$this->MSchool->input('tb_articles',$data);
		redirect('acount?user='.$uploaded_by);
	    }	
		$msg = ["pesan" => "berhasil"];
		echo json_encode($msg);
	}
	public function updatepost()
	{
		$judul = htmlspecialchars($this->input->post('judul'));
		$content = htmlspecialchars($this->input->post('content'));
		$uploaded_by = $this->session->userdata('ses_id');
		$gambar = $_FILES['gambar']['name'];
    	$untuk = $this->input->post('untuk');
    	$nama_gambar="";
    	$id = $this->input->post('id');
    	echo date_default_timezone_set("Asia/Jakarta");
    	$time = date('Y:m:d h:m:s');
    	echo $time;
    	$judul=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '', $judul); //filter karakter unik dan replace dengan kosong ('')
        $trim=trim($judul); // hilangkan spasi berlebihan dengan fungsi trim
        $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
        $slug=$pre_slug.'.html'; // tambahkan ektensi .html pada slug
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
	                echo json_encode($error);
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
				$data = [
					"judul" => $judul,
					"konten" => $content,
					"set_gambar" => $nama_gambar,
					"updated_at" => $time,
					"slug" => $slug
				];
				$this->MSchool->update('tb_articles','id_art',$id,$data);
	        }
	        $msg = ["pesan" => "berhasil"];
			echo json_encode($msg);
			redirect("acount?user=.$this->session->userdata('ses_id')");
	    } else {
	    	$data = [
			"judul" => $judul,
			"konten" => $content,
			"updated_at" => $time,
			"slug" => $slug
			];
			$this->MSchool->update('tb_articles','id_art',$id,$data);
			$msg = ["pesan" => "berhasil"];
			echo json_encode($msg);
			redirect("acount?user=".$uploaded_by);
	    }	
	}

}

/* End of file Input.php */
/* Location: ./application/controllers/Input.php */