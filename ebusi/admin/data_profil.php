<?php
include '../koneksi/koneksi.php';
$id_admin = $data_user_admin['id_admin'];
$email = $data_user_admin['email'];
$nama_depan = $data_user_admin['nama_depan'];
$nama_belakang = $data_user_admin['nama_belakang'];
$alamat = $data_user_admin['alamat'];
$info_kontak = $data_user_admin['info_kontak'];
$foto_admin = $data_user_admin['foto_admin'];
$tgl = $data_user_admin['tgl_buat'];
$username = $data_user_admin['username'];
$password = $data_user_admin['password'];


?>
   <!-- Card Header Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
       <h6 class="m-0 font-weight-bold text-primary">Data Profil</h6><br>
                    
       <div class="dropdown no-arrow">
          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          </a>
       </div>
   </div>

<!-- Card Foto -->
<div class="card-body">
 <div class="row">
 <div class="col-lg-4">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Foto Profil</h6>
    </div>

     <div class="card-body">
     <!-- Foto -->
      <div class="foto position-relative ">
       <form action="update_profil_admin.php" method="POST" enctype="multipart/form-data">
        <center><img src="gambar/profil_admin/<?=$foto_admin?>" height='200px' width='200px' class="img-thumbnail" alt="foto">
        <div class="btn-foto">   
         <a class="btn btn-light text-dark px-1" data-toggle="modal" data-target="#Modal-foto-profil" role="button"><i class="fa fa-edit"></i></a>   
         </div> 
       </center>
               
        </form>
      </div>                        
      </div>
   </div>
  </div>

<!-- Data Profil -->
<div class="col-lg-8">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
     <h6 class="m-0 font-weight-bold text-primary">Data Diri</h6>                                                            
   </div>

  <div class="card-body">                     
    <form method="post" action="update_profil_admin.php">
      <div class="form-row">

      <div class="form-group col-md-6">
        <label>Nama Depan</label>
        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username Anda" value="<?php echo($nama_depan); ?>" required>
      </div>

      <div class="form-group col-md-6">
        <label>Nama Belakang</label>
          <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username Anda" value="<?php echo($nama_belakang); ?>" required>
      </div>

       <div class="form-group col-md-8">
         <label>Alamat Email</label>
           <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Anda" value="<?php echo($email); ?>" required>
       </div>

        <div class="form-group col-md-4">
          <label>Info Kontak</label>
            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Anda" value="<?php echo($info_kontak); ?>" required>
        </div>

         <div class="form-group col-md-12">
           <label>Alamat</label>
            <textarea class="form-control" name="nutrisi_manfaat" required><?php echo($alamat);?></textarea>
         </div>
      </div>
      

     <button type="submit" class="btn btn-success" name="submit">Simpan Perubahan</button>
     <hr>
                                   
    </form>
   </div>
  </div>
</div>
<!-- Modal Foto -->
<div class="modal fade" id="Modal-foto-profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Foto Profil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
        <img src="gambar/profil_admin/<?=$foto_admin?>" width="200" class="rounded mx-auto d-block m-3">
        <p>Format file .jpg/.png/.jpeg</p> <p>Ukuran Maksimum 3mb</p>
        
          <form action="update_fotoprofil_admin.php" method="POST" enctype="multipart/form-data">
              <div class="input-group mb-3">
                  <input type="hidden" name="id_admin" value="<?=$id_admin?>">
                  <input type="file" id="inputGroupFile02" name="file">
              </div>
              <br>
              <div class="modal-footer">
                <input type="submit"  class="btn btn-primary" name="post_foto_admin" value="Unggah">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                
              </div>
          </form>    
        </div>  
    </div>
  </div>
</div>
</div>
</div>
    