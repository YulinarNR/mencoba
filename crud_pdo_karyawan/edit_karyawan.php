<?php
include 'koneksi.php';
$query = "SELECT * FROM karyawan WHERE id_karyawan='$_GET[id]'";
$data = $koneksi->prepare($query);
$data->execute();

$karyawan = $data->fetch(PDO::FETCH_OBJ);
?>

      <!-- Area Chart -->
           <div class="col-xl-12 col-lg-7">
             <div class="card shadow mb-4 mt-3">
              <!-- Card Header Dropdown -->
               <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Edit Data Karyawan</h6>
                 <div class="dropdown no-arrow">
                   <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                   </a>
                 </div>
               </div>

               <!-- Card Body -->
               <div class="card-body">
                 <form method="post">
                  <!-- Awal form row -->
                  <div class="form-row">
                   <div class="form-group col-md-4">
                    <label>Nama Lengkap</label>
                    <input type="hidden" name="id_karyawan" value="<?php echo $karyawan->id_karyawan?>">
                     <input type="text" class="form-control" name="nama" value="<?php echo $karyawan->nama ?>" required>
                   </div>

                   <div class="form-group col-md-4">
                    <label>Alamat Email</label>
                      <input type="email" name="email" class="form-control" value="<?php echo $karyawan->email ?>">
                     
                   </div>

                    <div class="form-group col-md-4">
                      <label>Tanggal Lahir</label>
                     <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $karyawan->tgl_lahir ?>" required>
                   </div>
                   </div> <!-- Akhir form row -->

                   <div class="form-row"><!-- Awal Form Row -->
                   <div class="form-group col-md-4">
                    <label>Telepon</label>
                     <input type="text" class="form-control form-control-user" name="telp" value="<?php echo $karyawan->telp ?>" required>
                   </div>

                    <div class="form-group col-md-4">
                      <label>Alamat</label>
                    <textarea name="alamat" class="form-control" required><?php echo $karyawan->alamat ?></textarea>
                   </div>
                   </div>  <!-- Ahir Form Row -->




                   <button type="submit" class="btn btn-success" name="ubah"><i class="fas fa-save"></i> Ubah</button>
                   <hr>
                   
                 </form>
                 <p>&nbsp;</p>
               </div>

             </div>
           </div>

<?php
include 'koneksi.php';
if (isset($_POST['ubah'])) {
  
$query = "UPDATE karyawan SET nama='$_POST[nama]', email='$_POST[email]', tgl_lahir='$_POST[tgl_lahir]', telp='$_POST[telp]', alamat='$_POST[alamat]' WHERE id_karyawan = '$_POST[id_karyawan]'";
$data = $koneksi->prepare($query); //menyiapakan query SQL 
$data->execute();          //menjalankan perintah query  SQL

echo "<script type='text/javascript'>location.href=\"index.php\"; </script>";
}
?>

