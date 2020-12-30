<?php
session_start();
include '../koneksi/koneksi.php';
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
ob_start();

?>

<!-- Halaman edit isi laporan-->

    </<!DOCTYPE html>
    <html>
    <head>
        <title></title>
         </head>
    <body>
    <h3 align="center">Kebun Inovasi Polije</h3>
    <h5 align="center">Jl. Mastrip Kotak Pos 164</h5>
    <h5 align="center">Kabupaten Jember</h5><hr><br>



    <h4 align="center">Laporan Data User</h4>
    <center>
    <table border="1" cellpadding="10" cellspacing="0">
                      
                        <tr align="center">
                          <th>No</th>
                          <th>Nama Lengkap</th>
                          <th>Email</th>
                          <th>Username</th>
                          <th>Kontak</th>
                          <th>Alamat</th>
                        </tr>

                        <?php 
                        include '../koneksi/koneksi.php';
                        $no = '1';
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_user");
                        while($row = mysqli_fetch_array($data)){ ?>

                          <tr align="center">
                            <td><?php echo $no++; ?></td>
                             <td><?php echo $row['nama_depan']. ' ' . $row['nama_belakang']; ?></td>
                             <td><?php echo $row['email']; ?></td>
                             <td><?php echo $row['username']; ?></td>
                             <td><?php echo $row['info_kontak']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                          </tr>
                        <?php } ?>
                      
                    </table>
                    </center>
                    <br><br><br><br><br><br>
                    <?php 
                    $tanggal = date("d M yy");
                    ?>
                    <h6 align="right"> Jember, <?php echo $tanggal; ?> </h6>
                    <h6 align="right">Penanggung Jawab,</h6><br>
                    <br><br>
                    <h6 align="right"><?php echo $_SESSION['superadmin']['nama_depan'] . ' ' . $_SESSION['superadmin']['nama_belakang']; ?></h6>
    </html>
    

<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output();
?>