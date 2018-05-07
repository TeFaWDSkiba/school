<html>
	<head>
		<link rel="stylesheet" href="<?php echo  base_url('resources/css/registrasi.css'); ?>">
		<meta name="viewport" content="width=device-width" initial-scale="1">
		<link rel="stylesheet" href="<?php echo  base_url('resources/font-awesome-4.7.0/css/font-awesome.css'); ?>">
	</head>
	<body>
		<div class="wrapper bg-atas">
			<h1>Get a good Experience</h1>
		</div>
		<div class="wrapper bg-bawah">
			<div class="tulisan">
				<h1>Selamat Datang di <b></i>Web School</b></h1><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus consectetur a, itaque explicabo iusto provident nam repellendus quisquam qui distinctio, nostrum quaerat, voluptatibus incidunt, quas quae dicta. Quibusdam, neque sunt! Ada beberapa kelebihan jika anda mendaftar sebagai user:
					<ol type="1">
					<li>Anda dapat menambahkan cerita secara penuh dan sebanyak banyaknya</li>
					<li>Anda dapat mengupload gambar berapapun</li>
					<li>Menambahkan kami fitur</li>
					<li>Membalas komentar secara langsung</li>
				</ol></p>
			</div>
			<div class="box">
				<div class="caption">
					<h3 class="judul">Registration For New User</h3>
					<p>Isi sesuai data diri anda dengan seksama ! </p><br>
				</div>
				<form action="" class="registrasi" id="formpendaftaran">
					<table>
						<tr>
							<td><span>Nama Lengkap</span></td>
							<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
							<td><input type="text" class="isian nama" name="nama" required></td>
						</tr>
						<tr>
							<td><span>Tanggal Lahir</span></td>
							<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
							<td><input type="date" class="isian ttl" name="ttl" required></td>
						</tr>
						<tr>
							<td><span>Jenis Kelamin</span></td>
							<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
							<td>
								<select name="jenis_kelamin" class="isian">
									<option value="">---Gender---</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</td>
						</tr>	
						<tr>
							<td><span>Username</span></td>
							<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
							<td><input type="text" class="isian username" name="username" required></td>
						</tr>
						<tr>
							<td><span>Password</span></td>
							<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
							<td><input type="password" class="isian password" name="password" required></td>
						</tr>
						<tr>
							<td><span>Retype Password</span></td>
							<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
							<td><input type="password" class="isian password" name="repassword" required></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><button class="tombol" type="submit" name="daftar">Registrasi</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div><br>
		<!-- <div class="wrapper bg-footer">
			Copyright &copy; 2018 Sk1ba Web Designer | All Right Reserved
		</div> -->
		<script src="<?php echo base_url('resources/js/jquery-3.3.1.min.js'); ?>"></script>
		<script src="<?php echo base_url('resources/bootstrap/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('resources/js/schoolajax.js'); ?>"></script>
		<script src="<?php echo base_url('resources/js/script.js'); ?>"></script>
	</body>
</html>