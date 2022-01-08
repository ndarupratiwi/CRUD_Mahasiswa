 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="edit_mahasiswa bg-primary font-weight-bold text-center mx-auto" style="height: 50px; width:70%;">
         <center>
             <h1 class="text-white font-weight-bold"><img src="<?php echo base_url('assets/image/student.png') ?>" width="5%" height="5%" alt="">Edit Data Mahasiswa</h1>
         </center>
     </div>

     <div class="form-edit-mahasiswa mt-5 offset-sm-1" style="color: black; font-size:large;">
         <?php
            foreach ($editmahasiswa as $row) {
            ?>
             <form method="POST" class="mahasiswa" action="<?php echo base_url('crud/update_mahasiswa'); ?>" enctype="multipart/form-data">
                 <div class="form-row">
                     <div class="col-sm-5">
                         <label for="nim" class="col-form-label">NIM :</label>
                         <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $row->id; ?>">
                         <input type="text" id="nim" name="nim" class="form-control" value="<?php echo $row->nim; ?>">
                     </div>
                     <div class="col-sm-5">
                         <label for="nama" class="col-form-label">Nama :</label>
                         <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $row->nama; ?>">
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="col-sm-5">
                         <label for="ttl" class="col-form-label">Tempat, Tanggal Lahir :</label>
                         <input type="text" id="ttl" name="ttl" class="form-control" value="<?php echo $row->ttl; ?>">
                     </div>
                     <div class="col-sm-5">
                         <label for="jenkel" class="col-form-label">Jenis Kelamin :</label>
                         <select class="form-control" id="jenkel" name="jenkel" value="<?php echo $row->jenkel; ?>">
                             <option value="1" <?php if (($row->jenkel) == 'Laki-laki') {
                                                    echo "selected";
                                                } ?>>Laki-laki</option>
                             <option value="2" <?php if (($row->jenkel) == 'Perempuan') {
                                                    echo "selected";
                                                } ?>>Perempuan</option>
                         </select>
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="col-sm-5">
                         <label for="agama" class="col-form-label">Agama :</label>
                         <select class="form-control" id="agama" name="agama" value="<?php echo $row->agama; ?>">
                             <option value="1" <?php if (($row->agama) == 'Islam') {
                                                    echo "selected";
                                                } ?>>Islam</option>
                             <option value="2" <?php if (($row->agama) == 'Kristen') {
                                                    echo "selected";
                                                } ?>>Kristen</option>
                             <option value="3" <?php if (($row->agama) == 'Katolik') {
                                                    echo "selected";
                                                } ?>>Katolik</option>
                             <option value="4" <?php if (($row->agama) == 'Hindu') {
                                                    echo "selected";
                                                } ?>>Hindu</option>
                             <option value="5" <?php if (($row->agama) == 'Buddha') {
                                                    echo "selected";
                                                } ?>>Buddha</option>
                             <option value="6" <?php if (($row->agama) == 'Konghucu') {
                                                    echo "selected";
                                                } ?>>Konghucu</option>
                         </select>
                     </div>
                     <div class="col-sm-5">
                         <label for="alamat" class="col-form-label">Alamat :</label>
                         <input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $row->alamat; ?>">
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="col-sm-5">
                         <label for="email" class="col-form-label">Email :</label>
                         <input type="email" id="email" name="email" class="form-control" value="<?php echo $row->email; ?>">
                     </div>
                     <div class="col-sm-5">
                         <label for="no_hp" class="col-form-label">No HP :</label>
                         <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?php echo $row->no_hp; ?>">
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="col-sm-5">
                         <label for="jurusan" class="col-form-label">Jurusan :</label>
                         <input type="text" id="jurusan" name="jurusan" class="form-control" value="<?php echo $row->jurusan; ?>">
                     </div>
                     <div class="col-sm-5">
                         <label for="prodi" class="col-form-label">Program Studi :</label>
                         <input type="text" id="prodi" name="prodi" class="form-control" value="<?php echo $row->prodi; ?>">
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="foto">Foto</label>
                     <img src="<?php echo base_url('uploads/'); ?><?php echo $row->foto; ?>" width="150" height="150" alt="" class="mt-2 ml-5">
                     <input type="file" class="form-control-file" id="foto" name="foto" value="<?php echo $row->foto; ?>">
                     <p>Format foto harus jpg, jpeg, atau png. Max size 2 MB.</p>
                 </div>
                 <!-- Buttom -->
                 <div class="form-group text-center" style="margin-right: 100px;">
                     <button type="submit" class="btn btn-primary" style="font-weight: bold;">UPDATE</button>
                 </div>
             </form>
         <?php } ?>
     </div>
 </div>
 <!-- /.container-fluid -->