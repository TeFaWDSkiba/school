<form action="<?php echo base_url('input/updatepost'); ?>" enctype="multipart/form-data" method="POST" id="formartikel" class="" id="createpost">
	<input type="text" value="<?php echo $artikel['id_art']; ?>" name="id" hidden>
	<div class="form-group">
		<label for="judul">Judul</label>
		<input type="text" name="judul" id="judul" value="<?php echo $artikel['judul']; ?>" class="form-control">
	</div>
	<div class="form-group">
		<textarea name="content" id="content1"><?php echo $artikel['konten']; ?></textarea>
	</div>
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text">Upload</span>
	  </div>
	  <div class="custom-file">
	    <input type="file" class="custom-file-input" id="inputGroupFile01" name="gambar" onchange="readURL(this);">
	    <label class="custom-file-label" for="inputGroupFile01">Pilih Gamabar Untuk Thumbnail</label>
	  </div>
	  <img id="gambar" src="<?php echo base_url('resources/img/'.$artikel['gambar']); ?>" alt="<?php echo $artikel['nama_gambar']; ?>" class="uploadimg" />
	</div>
	<input type="text" name="untuk" value="post" hidden>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'content1' );
</script>