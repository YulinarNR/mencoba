<?php
session_start();
include 'koneksi/koneksi.php';
$id_pbl = $_GET['id'];
$koneksi->query("UPDATE tb_pembelian SET status_pembelian='SELESAI' WHERE id_pembelian='$id_pbl'");
echo "<script type='text/javascript'>alert('Terimakasih!! Pesanan Telah Selesai'); location.href=\"riwayat.php\"; </script>";
?>