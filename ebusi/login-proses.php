<?php
include 'koneksi/koneksi.php';
session_start(); //memulai session
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//fungsi login
	$query = mysqli_query($koneksi, "SELECT * FROM tb_user where username = '$username' AND password = '$password'");
	if (mysqli_num_rows($query) !== 0) { //apabila  data tidak kosong dan isi data cocok maka akan menjalankan 
		//mysqli_fetch_array : pengambilan data MySql
		$user = mysqli_fetch_array($query);

		$level = $user['id_level'];
		$username = $user['username'];

		$_SESSION['username'] = $username;
		// $_SESSION['login_in'] = $username;
		if ($level == 1) {
			$_SESSION['id_user'] = $user['id_user'];
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "Login";
			$_SESSION['id_level'] = "1";
			
			echo "<script type='text/javascript'>alert('Selamat Datang $username'); location.href=\"admin/index.php\"; </script>";


		} elseif ($level == 2){
			$id_murid = $user['id_user'];
			//Menampilkan semua data yang mempunyai nilai sama dan berhubungan antar tabel
			$murid = mysqli_query($koneksi, "SELECT * FROM tb_murid INNER JOIN tb_user ON tb_murid.id_user = tb_user.id_user WHERE tb_user.id_user = $id_murid;");
			$data = mysqli_fetch_array($murid);
			$_SESSION['id_murid'] = $id_murid;
			$_SESSION['username'] = $username;
			$_SESSION['kelas'] = $data['id_kelas'];
			$_SESSION['status'] = "Login";
			$_SESSION['id_level'] = "2";
			
			echo "<script type='text/javascript'>alert('Selamat Datang $username'); location.href=\"murid/index.php\"; </script>";

		}


	} else {
		echo "<script type='text/javascript'>alert('Login Gagal, Username atau password salah'); location.href=\"index.php\"; </script>";


	}
} else {
	echo "<script type='text/javascript'>alert('Silahkan login terlebih dahulu'); location.href=\"index.php\"; </script>";

}
?>