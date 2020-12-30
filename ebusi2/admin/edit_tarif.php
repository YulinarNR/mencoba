<?php
include '../koneksi/koneksi.php';
$id_ongkir = $_GET['id_ongkir'];
$nama_kota = $_GET['nama_kota'];
$tarif = $_GET['tarif'];
$tgl_input = $_GET['tgl_input'];
//query update
$query = "UPDATE tb_ongkir SET nama_kota='$nama_kota',tarif='$tarif',tgl_input='$tgl_input' WHERE id_ongkir='$id_ongkir' ";
if (mysqli_query($koneksi, $query)) {
    # credirect ke page index
    header("location:index.php?data_tarif_pengiriman.php");    
}
else{
    echo "ERROR, data gagal diupdate". mysqli_error();
}
?>
