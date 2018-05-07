<div class="row">
	<div class="col-sm-12">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		  Upload
		</button>

		<!-- modal upload gambar -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Upload gambar kamu</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <form action="<?php echo base_url('upload/gambar'); ?>" enctype="multipart/form-data" method="post">
			      <div class="modal-body">
			        	<input type="text" name="untuk" hidden value="galery">
			        	<div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <span class="input-group-text">Upload</span>
						  </div>
						  <div class="custom-file">
						    <input type="file" class="custom-file-input" id="inputGroupFile01" name="gambar" onchange="readURL(this);">
						    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
						  </div>
						</div>
						<img id="gambar" src="<?php echo base_url('resources/img/blank.JPEG') ?>" alt="your image" class="uploadimg" />
			      </div>
			      <div class="modal-footer">
			        <button type="submit" class="btn btn-primary">Upload</button>
			         </form>
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="row">
			<?php foreach ($gambar as $gmb): ?>
				<div class="col-sm-3">
					<div class="galery-img">
						<img src="<?php echo base_url('resources/img/').$gmb->gambar; ?>" alt="<?php echo $gmb->nama_gambar; ?>" style="width: 100%;height:200px;">
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

<script>
 function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#gambar')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>