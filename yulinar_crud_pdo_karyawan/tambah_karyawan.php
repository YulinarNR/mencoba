           <!-- Area Chart -->
           <div class="col-xl-12 col-lg-7">
             <div class="card shadow mb-4 mt-3">
              <!-- Card Header Dropdown -->
               <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Tambah Data Karyawan</h6>
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
                     <input type="text" class="form-control" name="nama" required>
                   </div>

                   <div class="form-group col-md-4">
                    <label>Alamat Email</label>
                     <input type="email" name="email" class="form-control" required>
                   </div>

                    <div class="form-group col-md-4">
                      <label>Tanggal Lahir</label>
                     <input type="date" class="form-control" name="tgl_lahir" required>
                   </div>
                   </div> <!-- Akhir form row -->

                   <div class="form-row"><!-- Awal Form Row -->
                   <div class="form-group col-md-4">
                    <label>Telepon</label>
                     <input type="text" class="form-control form-control-user" name="telp" required>
                   </div>

                    <div class="form-group col-md-4">
                      <label>Alamat</label>
                    <textarea name="alamat" class="form-control" required></textarea>
                   </div>
                   </div>  <!-- Ahir Form Row -->




                   <button type="submit" class="btn btn-success" name="save"><i class="fas fa-save"></i> Simpan</button>
                   <hr>
                   
                 </form>
                 <p>&nbsp;</p>
               </div>

             </div>
           </div>

<?php
include 'koneksi.php';
if (isset($_POST['save'])) {
  
$query = "INSERT INTO karyawan VALUES('','$_POST[nama]','$_POST[email]','$_POST[tgl_lahir]','$_POST[telp]','$_POST[alamat]')";
$data = $koneksi->prepare($query); //menyiapakan query SQL 
$data->execute();          //menjalankan perintah query  SQL

echo "<script type='text/javascript'>location.href=\"index.php\"; </script>";
}
?>