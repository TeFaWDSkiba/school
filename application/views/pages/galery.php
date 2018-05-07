<div class="content">
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
</div>