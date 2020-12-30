<?php
include '../koneksi/koneksi.php';
//menyimpan data kedalam variabel

$id_admin       = $_POST['id_admin'];
$email         = $_POST['email'];
$nama_depan    = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$alamat        = $_POST['alamat'];
$info_kontak   = $_POST['info_kontak'];
$tgl = $_POST['tgl_buat'];
$username = $_POST['username'];
$password = $_POST['password'];
$foto_admin = $_POST['foto_admin'];


//query SQL untuk  data
$query="UPDATE tb_admin SET email='$email', username='$username', password='$password',  nama_depan='$nama_depan', nama_belakang='$nama_belakang', alamat='$alamat', info_kontak='$info_kontak', foto_admin='$foto_admin', tgl_buat='$tgl'  where id_admin='$id_admin'";
mysqli_query($koneksi, $query);

    if($query){
       header("location:index.php?halaman=data_profil");
    }else{
        header("location:index.php?halaman=data_produk");
    }


?>