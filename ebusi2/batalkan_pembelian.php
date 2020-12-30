<?php
session_start();
include 'koneksi/koneksi.php';
$id_pbl = $_GET['id'];
$koneksi->query("UPDATE tb_pembelian SET status_pembelian='Pesanan Dibatalkan' WHERE id_pembelian='$id_pbl'");
echo "<script type='text/javascript'>alert('Pesanan Dibatalkan'); location.href=\"riwayat.php\"; </script>";
?>