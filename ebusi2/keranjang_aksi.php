<?php
session_start();
include 'koneksi/koneksi.php';
$id_produk = $_GET['id'];

// kondisi
// $data = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_produk='$id_produk'");
// $row = mysqli_fetch_assoc($data);
// if ($row['stok']==0) {
// 	echo "<script>alert('Stok Produk Habis');</script>";
// 	echo "<script>location.href=\"index.php#team\"; </script>";
// 	exit;
// }


//Jika sdh ada produk itu di keranjang maka produk itu jumlahnya di +1
if (isset($_SESSION['keranjang'][$id_produk])) {
	$_SESSION['keranjang'][$id_produk] += 1;
}

// selain itu blm ad d krnjgn, maka produk itu dianggap beli 1
else {
	$_SESSION['keranjang'][$id_produk] = 1;
}


// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

//larikan ke keranjang
echo "<script>alert('produk telah ditambahkan ke keranjang');</script>";
echo "<script>location='keranjang.php';</script>";
?>