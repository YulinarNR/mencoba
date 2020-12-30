           <!-- Area Chart -->
           <div class="col-xl-12 col-lg-7">
             <div class="card shadow mb-4 mt-3">
           

               <!-- Card Body -->
               <div class="card-body">
                 <form method="post">
                  <h5 class="m-0 font-weight-bold text-primary">Data Karyawan</h5> <hr>

                  <a  href="index.php?halaman=tambah_karyawan" class="btn btn-primary pull-right"><i class="fas fa-plus-circle"></i> Tambah Data</a> <br /><br />

                  <div class="table-responsive">
                    <table class="table datatables table-striped table-hover table-bordered nowrap">
                      <thead>
                        <tr align="center">
                          <th>No</th>
                          <th>Nama Lengkap</th>
                          <th>Alamat Email</th>
                          <th>Tanggal Lahir</th>
                          <th>Telepon</th>
                          <th>Alamat</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php 
                        include 'koneksi.php';
                        $no = '1';
                        $query = "SELECT * FROM karyawan";
						$data = $koneksi->prepare($query);
						$data->execute();

						while($karyawan = $data->fetch(PDO::FETCH_OBJ)){ ?>

                          <tr align="center">
                            <td><?php echo $no++; ?></td>
                             <td><?php echo $karyawan->nama ?></td>
                             <td><?php echo $karyawan->email ?></td>
                             <td><?php echo $karyawan->tgl_lahir ?></td>
                             <td><?php echo $karyawan->telp ?></td>
                             <td><?php echo $karyawan->alamat ?></td>
                                                       
                             <td>
                             <a href="index.php?halaman=edit_karyawan&id=<?php echo $karyawan->id_karyawan ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                              <a href="index.php?halaman=hapus_karyawan&id=<?php echo $karyawan->id_karyawan ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                           </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                   
                 </form>
               </div>

             </div>
           </div>