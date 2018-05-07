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
<div class="wrapper-elite">
	<div class="container">
		<div class="card card-body">
			<div class="row">
				<?php foreach ($articles as $article): ?>
					<div class="col-sm-4" id="post" onclick='lihat(<?php echo "$article->slug"; ?>)'>
						<article class="card card-body">
							<div class="image">
								<img src="<?php echo base_url('resources/img/') ?><?php echo $article->gambar ?>" alt="">
							</div>
							<div class="texty">
								<a href="<?php echo base_url('post/').$article->slug; ?>"><?php echo $article->judul; ?></a>
								<p><?=  htmlspecialchars_decode(limit_words($article->konten,15)) ?></p>
							</div>
						</article>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>