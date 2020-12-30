<?php
include 'koneksi/koneksi.php';
session_start(); //memulai session
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//fungsi login
	$q = mysqli_query($koneksi, "SELECT * FROM tb_admin where username = '$username' AND password = '$password'");
	$r = mysqli_fetch_array($q);

	$q2 = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'");
	$row = mysqli_fetch_array($q2);

	if (mysqli_num_rows($q) == 1) { //apabila  data tidak kosong dan isi data cocok maka akan menjalankan 
		//mysqli_fetch_array : pengambilan data MySql
		
			$_SESSION['id_admin'] = $r['id_admin'];
			$_SESSION['username'] = $r['username'];
			$_SESSION['status'] = "Login";
			$_SESSION['id_level'] = "1";
			
			echo "<script type='text/javascript'>alert('Selamat Datang $username'); location.href=\"admin/index.php\"; </script>";

	} elseif (mysqli_num_rows($q2) == 1) {
			$_SESSION['id_user'] = $row['id_user'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['status'] = "Login";
			$_SESSION['id_level'] = "2";
			
			echo "<script type='text/javascript'>alert('Selamat Datang $username'); </script>";
			header('location:index.php?pesan=berhasil');

		} else {
		echo "<script type='text/javascript'>alert('Login Gagal, Username atau password salah'); location.href=\"index.php\"; </script>";


	}
} else {
	echo "<script type='text/javascript'>alert('Silahkan login terlebih dahulu'); location.href=\"index.php\"; </script>";

}
?>