<div class="container wrapper-elite" style="margin-bottom: 40px;">
	<div class="row">
		<div class="col-sm-3">
				<div class="side-menu card">
					<div class="side-head card-header">
						Menu
					</div>
					<div class="card-body">
						 <div class="list-group rounded-0" id="list-tab" role="tablist">
						      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" onclick="profil()">Profil</a>
						      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" onclick="post()">Post</a>
						      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" onclick="galery()">Galery</a>
						</div>
					</div>
				</div>
		</div>
		<div class="col-sm-9">
			<div class="card card-body" id="content" style="position: relative;">
				<!-- content -->
				<h1>Selamat Datang di web schol <strong style="color: #407fc3;"><?php echo $this->session->userdata('ses_id'); ?></strong></h1>
			</div>
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