           <!-- Area Chart -->
           <div class="col-xl-12 col-lg-7">
             <div class="card shadow mb-4 mt-3">
           

               <!-- Card Body -->
               <div class="card-body">
                 <form method="post">
                  <h5 class="m-0 font-weight-bold text-primary">Update Profile Admin</h5><hr>
                   <div class="form-group">
                     <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Anda" required>
                   </div>

                   <div class="form-group">
                     <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username Anda" required>
                   </div>

                    <div class="form-group">
                     <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Anda" required>
                   </div>

                   <div class="form-group">
                     <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password Anda" required>
                   </div>

                    <div class="form-group">
                    <div class="radio"> 
                        <label> <input type="radio" name="jenis_kelamin" value="L"> Laki-Laki</label>
                        <label> <input type="radio" name="jenis_kelamin" value="P"> Perempuan</label>
                    </div>  
                   </div>

                   <div class="form-group">
                      <select class="form-control" name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Khonghucu">Khonghucu</option>
                      </select>
                    </div>
                   

                   <div class="form-group">
                   <textarea class="form-control" name="biografi"></textarea>
                   </div>

                   <button type="submit" class="btn btn-success" name="submit">Tambah</button>
                   <hr>
                   
                 </form>
               </div>

             </div>
           </div>