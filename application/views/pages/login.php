<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		<link rel="stylesheet" href="<?php echo base_url('resources/css/login.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('resources/bootstrap/css/bootstrap.min.css'); ?>">
	</head>
	<body>
		<div class="box">
			<div class="msg">
				<span style="position: absolute; right: 0;">&times;</span>
				<!-- pesan -->
			</div>
				<div class="gambar"><img src="<?php echo base_url('resources/img/avatar/user-login.png'); ?>" alt="user-login"></div>
				<h3>User Login</h3>
			<form action="" class="login" id="formlogin">	
				<input type="text" name="username" class="isian" placeholder="Username" id="username"><br>
				<input type="password" name="password" class="isian" placeholder="Password"><br>
				<button type="submit" class="tombol">Login<img src="<?php echo base_url('resources/img/loading.gif'); ?>" id="loading" alt="loading" width="35px"></button>
			</form>
			<span class="register">
				<p>Belum Punya Akun?</p>
				<a href="<?php echo base_url('registrasi'); ?>">Daftar</a>
			</span>
		</div>
		<script src="<?php echo base_url('resources/js/jquery-3.3.1.min.js'); ?>"></script>
		<script src="<?php echo base_url('resources/bootstrap/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('resources/js/schoolajax.js'); ?>"></script>
		<script src="<?php echo base_url('resources/js/script.js'); ?>"></script>
	</body>
</html>