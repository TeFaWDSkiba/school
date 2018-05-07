var baseUrl = window.location.protocol+"//"+window.location.host+"/";

// Load Login
function loadlogin() {
	$('#target').addClass('tampil');
	$.ajax({
		url: baseUrl+"school/login",
		type: "POST",
		dataType: "html",
		success: function (response) {
			$('#target').html(response);
		}
	})
}
// Proses Login

// ambil data profil
function profil() {
	$.ajax({
		url:baseUrl+"school/school/profil",
		type:"POST",
		dataType: "html",
		beforeSend: function () {
			var loading = '<div class="loading"><img src="'+baseUrl+'school/resources/img/loading.gif" alt=""></div>';
			$('#content').html(loading);
		},
		success: function (response) {
			$('#content').html(response);
			dataProfil();
		}
	})
}
function dataProfil () {
	$.ajax({
			url: baseUrl+"school/profil",
			type: "POST",
			dataType: "JSON",
			success: function (data) {
				$('#nama_lengkap').val(data[0].nama_lengkap);
				$('#tgllahir').val(data[0].tl);
				$('#alamat').val(data[0].alamat);
				$('#username').val(data[0].username);
				$('#pass').val(data[0].password);
				$('#jenis_kelamin').val(data[0].jenis_kelamin).change();
				$('#tentang').val(data[0].tentang);
				$('#id_prof').val(data[0].id_prof);
		}
	});
	$('#profil').fadeIn();
}
// proses pemgirman data
$('#formprofil').submit(function(e){
	e.preventDefault();
	var data = $('#formprofil').serialize();
	$.ajax({
		url: baseUrl+"school/profilupdate",
		type: "POST",
		data: data,
		dataType: "JSON",
		success: function(data){
			alert(data.pesan);
		}
	})
})
// pendaftaran
$('#formpendaftaran').submit(function (e) {
	e.preventDefault();
	var data = $('#formpendaftaran').serialize();
	$.ajax({
		url: baseUrl+"school/school/prosesregis",
		type:"POST",
		data: data,
		dataType: "JSON",
		beforeSend: function () {
			
		},
		success: function (response) {
			if (response.pesan == "Pendaftaran Berhasil") {
				window.location.href=baseUrl+"school/login";
			}
		}
	})
})
// login 
$('#formlogin').submit(function(e){
	e.preventDefault();
	var data = $('#formlogin').serialize();
	console.log(data);
	$.ajax({
		url: baseUrl+"school/login/auth",
		type: "POST",
		data: data,
		dataType: "JSON",
		beforeSend: function () {
			$('#loading').addClass('tampil');
		},
		success: function (response) {
			$('#loading').removeClass('tampil');
			if (response.pesan=="login berhasil") {
				window.location.href=baseUrl+"school/acount?user="+$('#username').val();
			} else {
				$('.msg').text(response.pesan);
				$('.msg').fadeIn();
			}
		}
	})
})
// Post
// load post
function post () {
	$.ajax({
		url:baseUrl+"school/school/postuser",
		type:"POST",
		dataType: "html",
		beforeSend: function () {
			var loading = '<div class="loading"><img src="'+baseUrl+'school/resources/img/loading.gif" alt=""></div>';
			$('#content').html(loading);
		},
		success: function (response) {
			$('#content').html(response);
			tampil('#listpost');
		}
	})
}
function tampil (id) {
	$(id).fadeIn();
}
function makePost () {
	$.ajax({
		url:baseUrl+"school/school/createpost",
		type:"POST",
		dataType: "html",
		beforeSend: function () {
			var loading = '<div class="loading"><img src="'+baseUrl+'school/resources/img/loading.gif" alt=""></div>';
			$('#content').html(loading);
		},
		success: function (response) {
			$('#content').html(response);
			$('#createpost').fadeIn();
		}
	})
}
function galery () {
	$.ajax({
		url:baseUrl+"school/school/gambar",
		type:"POST",
		dataType: "html",
		beforeSend: function () {
			var loading = '<div class="loading"><img src="'+baseUrl+'school/resources/img/loading.gif" alt=""></div>';
			$('#content').html(loading);
		},
		success: function (response) {
			$('#content').html(response);
			// $('#createpost').fadeIn();
		}
	})
}
related();
function related () {
	$.ajax({
		url:baseUrl+"school/school/relatedpost",
		type:"POST",
		dataType:"html",
		beforeSend: function () {
			/* body... */
		},
		success: function (response) {
			$('#relatedContent').html(response);
		}
	})
}