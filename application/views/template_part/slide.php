<!-- slider -->
		<div class="wrapper-elite">
			<div class="slidy">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="<?php echo base_url("resources/img/slide/1.png") ?>" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="<?php echo base_url("resources/img/slide/2.png")?>" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="<?php echo base_url("resources/img/slide/3.png")?>" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			<div id="caption">
				<?php 
					$halaman=$_SERVER['REQUEST_URI'];
					if ($halaman=='/school/home') { ?>
						<div class="caption">
						<div class="desc">
							<h2>Education With <span class="biru">Technology</span></h2>
							<p>Pembelajaran dengan Teknologi merupakan sebuah pemanfaatan teknologi untuk menunjang suatu proses pembelajaran. Dalam hal in ada banyak teknologi yang digunakan. Dan ada beberapa kelebihan dari metode pembelajaran ini.</p>
						</div>
							<button class="tombol">Pelajari Lebih Lanjut</button>
						</div>

					<?php }
				 ?>
			</div>
		</div>