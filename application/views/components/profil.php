<section class="profil sembunyi" id="profil">
	<div class="photo">
		<img src="<?php echo base_url(); ?>resources/img/avatar/<?php echo $profil['photo']; ?>" alt="gambar" style="max-width: 190px; min-height: 190px;">
	</div>
	<form action="" id="formprofil">
		<input type="text" value="" id="id_prof" name="id_prof" hidden>
		<div class="form-group">
			<label for="nama_lengkap">Nama Lengkap</label>
			<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="" required>
		</div>
		<div class="form-group">
			<label for="tgllahir">Tanggal Lahir</label>
			<input type="date" class="form-control" id="tgllahir" name="tgllahir" value="" required>
		</div>
		<div class="form-group">
			<label for="jeniskelamin">Jenis Kelamin</label>
			<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>
			<input type="text" class="form-control" id="alamat" name="alamat" value="" required>
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" id="username" name="username" value="" readonly>
		</div>
		<div class="form-group">
			<button class="btn btn-sm btn-warning" type="button" data-toggle="collapse" data-target="#ubahpassword" role="button" aria-expanded="false" aria-controls="ubahpassword" id="btnubahpassword">Ubah Password</button>
			<div class="collapse" id="ubahpassword">
				<!-- ubah pasword -->
			</div>
		</div>
		<div class="form-gruop">
			<label for="tentang">Tentang Saya</label>
			<textarea name="tentang" id="tentang" rows="3" class="form-control"></textarea>
		</div>
		<div class="form-group" style="margin:15px 0;">
			<button class="btn btn-success" type="submit">Simpan</button>
		</div>
	</form>
</section>
<script src="<?php echo base_url('resources/js/schoolajax.js'); ?>"></script>
<script src="<?php echo base_url('resources/js/script.js'); ?>"></script>
