<!-- Content -->
	<div class="wrapper-elite" id="relatedContent">
		
	</div>
	<!-- Galery -->
	<div class="wrapper-elite galeri">
		<div class=" wrapper">
			<h2 class="judul">Galery Inspiratif</h2>
			<p>Berikut ini merupakan beberapa foto tentang Education With technology<br>Anda bisa Melihat dan Menambahkan</p><br>
			<div class="row">
				<?php foreach ($gambar as $gmb): ?>
					<div class="col-sm-3">
						<div class="galery-img">
							<img src="resources/img/<?php echo $gmb->gambar; ?>" alt="<?php echo $gmb->nama_gambar; ?>">
							<div class="capt-img">
								<a href="#" class="suka"><i class="icon ion-thumbsup"></i></a>
								<a href="#" class="tidak-suka"><i class="icon ion-thumbsdown"></i></a>
								<a href="#" class="unduh"><i class="icon ion-ios-download"></i></a>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<div class="add-story">
				<p>Tambahkan Sebuah Gambar</p>
				<button onclick="login()">Upload   <i class="icon ion-camera"></i></button>
				<script>
					function login () {
						window.location.href="<?php echo base_url('login'); ?>"
					}
					
				</script>
			</div>
		</div>
	</div>
	<!-- contact -->
	<div class="wrapper-elite contact" id="contact">
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
