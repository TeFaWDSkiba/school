<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<title><?php echo $artikel['judul']; ?></title>
	<link rel="stylesheet" href="<?php echo base_url('resources/css/costum.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('resources/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('resources/ionicons-2.0.1/css/ionicons.min.css') ?>">
</head>
<body>	
	<!-- header -->
   <!-- header -->
    <div class="wrapper-elite header">
      <div class="wrapper menusaya">

        <nav class="navbar navbar-expand-lg navbar-light  sticky-top">
        <a class="navbar-brand" href="<?php echo base_url('home'); ?>"><strong>School</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse kekanan" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('edukatif'); ?>">Laman Edukatif</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('galery')?>">Gallery Inspiratif</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <?php if ($this->session->userdata('masuk')): ?>
              <li class="nav-item dropdown" style="z-index: 9999;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $this->session->userdata('ses_id'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?php echo base_url('acount?user='.$this->session->userdata('ses_id')) ?>">Dasboard</a>
                  <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">Logout</a>
                </div>
              </li>
            <?php else: ?>
              <li class="nav-item dropdown" style="z-index: 9999;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?php echo base_url('registrasi'); ?>">Daftar</a>
                  <a class="dropdown-item" href="<?php echo base_url('login'); ?>">login</a>
                </div>
              </li>
            <?php endif ?>
          </ul>
        </div>
      </nav>
      </div>
    </div>
    <!-- slider -->
		<div class="wrapper-elite">
			<div class="slidy">
				<div class="img"><img src="<?php echo base_url('resources/img/20180505000605.jpg') ?>" alt="gambar"></div>
			</div>
		</div>
	<div class="wrapper-elite konten">
		<div class="wrapper">
			<h2 ><?php echo $artikel['judul']; ?></h2>
			<span class="keterangan"><i class="icon ion-ios-paper"></i><?php echo $artikel['nama_kategory']; ?></span>
			<span class="keterangan"><i class="icon ion-android-create"></i><?php echo $artikel['author']; ?></span>
			<span class="keterangan"><i class="icon ion-android-calendar"></i><?php echo date('d F Y', strtotime($artikel['created_at'])); ?></span>
			<div class="gambar" style="margin: 20px auto;border-radius: 10px;overflow: hidden;">
				<img src="<?php echo base_url('resources/img/'.$artikel['gambar']); ?>" alt="">
			</div>
			<!-- content -->
			<?php echo htmlspecialchars_decode($artikel['konten']); ?>

			<span class="share">Share On : </span>
			<i class="icon ion-social-facebook sosmed"></i>
			<i class="icon ion-social-instagram sosmed"></i>
			<i class="icon ion-social-whatsapp sosmed"></i>
			<i class="icon ion-social-youtube sosmed"></i>
		</div>
	</div>
	<!-- related post -->
	<div class="wrapper-elite" id="relatedContent">
		
				<div class="add-story">
				<p>Saya punya <span >sebuah cerita?</span></p>
				<button type="button" onclick="login()">Tambahkan + </i> </button>
				</div>
		</div>
	</div>
	<!-- contact -->
	<div class="wrapper-elite contact">
		<div class=" wrapper">
			<h2 class="judul">Contact Us</h2>
			<p>Jika anda ingin menghunbungi kami silahkan hubungi kami <br>Anda bisa menggunakan Alamat di bawah</p><br>
			<div class="row">
				<div class="col-sm-4 ketiga">
					<h3>Hubungi kami Setiap Saat</h3>
					<p>Jika anda menghubungi kami dengan senang hati akan kami jawab pertanyaan yang anda ajukan sebisa kami. Atau anda juga bisa datang langsung ke tempat kami salah satunya di SMK N 1 Badegan Jl.Suyudonoo no.1 Badeegan POnorogo.</p>
					<i class="icon ion-social-facebook"></i>
					<i class="icon ion-social-instagram"></i>
					<i class="icon ion-social-whatsapp"></i>
					<i class="icon ion-social-twitter"></i>
					<i class="icon ion-social-youtube"></i>
				</div>
				<div class="col-sm-4 ketiga">
					<h3>Contact Info</h3>
					<ul class="con-info">
						<li><i class="icon ion-home"></i>&nbsp;Gedung Smkn 1 Badegan | Jalan Suyudono No.1 Badegan Ponorogo ,Jawa Timur,Indonesia</li><hr>
						<li><i class="icon ion-android-call"></i>&nbsp;+6285728240797</li><hr>
						<li><i class="icon ion-android-mail"></i>&nbsp;Skiba.web@gmail.com</li><hr>
					</ul>
				</div>
				<div class="col-sm-4 ketiga">
					<h3>Kirim Pesan</h3>
					<form action="" class="con-form">
						<input type="text" placeholder="Masukkan Nama">
						<input type="text" class="isian" placeholder="Email Anda">
						<input type="text" class="isian" placeholder="Subjek">
						<textarea placeholder="Masukkan Pesan" class="teks-area"></textarea>
						<button class="tombol">Kirim Pesan</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="wrapper-elite">
		<div class="footy">
			<div class="cpr">Copyright &copy; Sk1ba Web Designer | All Right Reserved</div>
		</div>
	</div>
	<script src="<?php echo base_url('resources/js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?php echo base_url('resources/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/js/schoolajax.js'); ?>"></script>
<script src="<?php echo base_url('resources/js/script.js'); ?>"></script>
</body>
</html>