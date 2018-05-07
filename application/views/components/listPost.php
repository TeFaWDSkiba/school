<div class="row">
	<div class="col-sm-12">
		<button type="button" class="btn btn-primary pull-right" onclick="tambahpost()">Tambah Post</button>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="table-resposive">
			<table class="table table-hover table-borderless" id="listpost">
				<thead>
					<th>Judul</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php foreach ($articles as $article): ?>
						<tr>
							<td><?php echo $article->judul; ?></td>
							<td>
								<button type="button" class="btn btn-warning btn-sm" id="edit" onclick="editpost(<?php echo $article->id_art; ?>)">Edit</button>
								<button type="button" class="btn btn-danger btn-sm" id="hapus" onclick="hapuspost(<?php echo $article->id_art; ?>)">Hapus</button>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>	
		</div>
	</div>
</div>
<script>
	function tambahpost () {
		$.ajax({
			url:"<?php echo base_url('school/createpost'); ?>",
			type:"POST",
			dataType: "html",
			beforeSend: function () {
				/* body... */
			},
			success: function (response) {
				$('#content').html(response);
			}
		})
	}
	function editpost (id) {
		$.ajax({
			url:"<?php echo base_url('school/editpost'); ?>",
			type:"get",
			data:"id="+id,
			dataType: "html",
			beforeSend: function () {
				/* body... */
			},
			success: function (response) {
				$('#content').html(response);
			}
		})
	}
	function hapuspost (id) {
		$.ajax({
			url:"<?php echo base_url('school/hapuspost'); ?>",
			type:"get",
			data:"id="+id,
			dataType: "html",
			beforeSend: function () {
				/* body... */
			},
			success: function (response) {
				if (response.pesan=="data berhasil di hapus") {
					alert("data berhasil di hapus");
				}
				post();
			}
		})
	}
</script>