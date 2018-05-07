<?php
function limit_words($string, $word_limit) {
	$string = strip_tags($string);
	$words = explode(' ', strip_tags($string));
	$return = trim(implode(' ', array_slice($words, 0, $word_limit)));
	if(strlen($return) < strlen($string)){
	$return .= '...';
	}
	return $return;
}
?>
<div class="content">
<h2 class="judul">Related Post</h2>
<div class="row">
	<?php foreach ($articles as $article): ?>
		<div class="col-sm-4" id="post" onclick='lihat(<?php echo "$article->slug"; ?>)'>
			<article class="card card-body">
				<div class="image">
					<img src="<?php echo base_url('resources/img/') ?><?php echo $article->gambar ?>" alt="">
				</div>
				<div class="texty">
					<div class="title">
						<a href="<?php echo base_url('post/').$article->slug; ?>" style="font-size:21px;"><?php echo $article->judul; ?>
					</div>
					</a>
					<div class="isi">
						<p><?= htmlspecialchars_decode(limit_words($article->konten,15))?></p>
					</div>
				</div>
			</article>
		</div>
	<?php endforeach ?>
	 <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
	<script>
		function lihat (slug) {
			console.log(slug);
		}
		function login () {
			window.location.href="<?php echo base_url('login'); ?>"
		}
	</script>
	<?php echo $this->pagination->create_links(); ?>
</div><br>
<div class="add-story">
	<p>Saya punya <span >sebuah cerita?</span></p>
	<button onclick="login()">Tambahkan + </i> </button>
	<script>
		function login () {
			window.location.href="<?php echo base_url('login'); ?>"
		}
	</script>
	</div>
</div>