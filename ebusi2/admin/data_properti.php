<div class="row mt-5 no-gutters">

 <div class="col-md-12">
<!-- gmbr produkny -->

       <div class="cont">
            <!-- start item -->
              <?php $ambil = $koneksi->query("SELECT * FROM setting");
              $pecah= $ambil->fetch_assoc();
              ?>
                <h4 class="text-center font-weight-bold m-4"><?php echo $pecah['tittle'];?></h4>
            <div class="item">
             <div class="row">     
              <?php $ambil = $koneksi->query("SELECT * FROM properti");?>
              <?php while($perproperti = $ambil->fetch_assoc()){?>
              
               <div class="card mr-4 ml-4" style="width: 16rem;">
               <div class="card-body bg-white"> 
                  <div class="card-image"> 
                     <a href="detail.php?id=<?php echo $perproperti['id_properti'];?>">
                        <img src="foto_properti/<?php echo $perproperti['foto'];?>" class="responsive-img" width="400">
                     </a>
                  </div> 
</div>
                  

                  <div class="card-action center">

                    <p><?php echo $perproperti['tipe'];?><br>
                      <?php echo $perproperti['judul'];?>
                    </p>
                     <form action="" method="post">
                        
                        <a href="detail.php?id=<?php echo $perproperti['id_properti'];?>" class="waves-effect waves-light btn blue white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Lihat Detail">
                           <i class="fa fa-search-plus"></i>
                        </a>

                        
                       <a href="https://wa.me/6285211156867" class="waves-effect waves-light btn green white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Lihat Detail">
                           <i class="fa fa-whatsapp"></i>
                        </a>

                     </form>
                  </div>
               </div>
            
             <?php } ?>
         </div>
      </div>
</div>


</div>
</div>