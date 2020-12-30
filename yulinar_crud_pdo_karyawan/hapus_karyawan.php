<?php
include 'koneksi.php';
$query = "DELETE FROM karyawan WHERE id_karyawan='$_GET[id]'";
$data = $koneksi->prepare($query);
$data->execute();

echo "<script type='text/javascript'>location.href=\"index.php\"; </script>";
?>