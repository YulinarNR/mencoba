<?php
	function lengkap($data){
	include 'koneksi/koneksi.php';
	$nama_depan = $data['nama_depan'];
	$nama_belakang = $data['nama_belakang'];
	$alamat = $data['alamat'];
	$info_kontak = $data['info_kontak'];
	$username = strtolower(stripcslashes($data['username']));
	$email = strtolower(stripcslashes($data['email']));
	$password = mysqli_real_escape_string($koneksi, $data['password']);

	//lengkapi data user
	mysqli_query($koneksi, "INSERT INTO tb_user VALUES('', '','','','','','$alamat','$info_kontak','','','2')");

	return mysqli_affected_rows($koneksi);
	   echo "<script>alert('Data telah diubah');</script>";
   echo "<meta http-equiv='refresh' content='1;url=lengkapi_datauser.php'>";
}


?>