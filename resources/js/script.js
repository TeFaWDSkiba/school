$(document).ready(function() {
	$('.page-scroll').on('click', function () {
	console.log('ok');
	});
	// close icon
	$('#close').on('click',function(){
		$('#target').removeClass('tampil');
		console.log('ok');
	});
	// tampil ubah password
	var htmlubahpassword = '<div class="card card-body"><div class="form-row"><div class="col"><label for="password">Password</label><input type="password" id="pass" name="password"  class="form-control" value="" required></div><div class="col"><label for="password">Retype Password</label><input type="password" id="repass"  class="form-control" value="" nma="repassword" required></div></div></div>';
	$('#btnubahpassword').on('click', function(){
		$('#ubahpassword').html(htmlubahpassword);
		console.log('ok');
	});
})
function tampilpost () {
	$('#createpost').hide();
}