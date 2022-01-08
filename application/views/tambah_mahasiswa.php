 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="tambah_mahasiswa bg-primary font-weight-bold text-center mx-auto" style="height: 50px; width:70%;">
         <center>
             <h1 class="text-white font-weight-bold"><img src="<?php echo base_url('assets/image/student.png') ?>" width="5%" height="5%" alt="">Form Data Mahasiswa</h1>
         </center>
     </div>

     <div class="form-tambah-mahasiswa mt-5 offset-sm-1" style="color: black; font-size:large;">
         <form method="POST" class="mahasiswa" action="<?php echo base_url('crud/input_mahasiswa'); ?>" enctype="multipart/form-data">
             <div class="alert" style="width: 80%;">
                 <?php echo $this->session->flashdata('message'); ?>
             </div>
             <div class="form-row">
                 <div class="col-sm-5">
                     <label for="nim" class="col-form-label">NIM :</label>
                     <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" autofocus required>
                 </div>
                 <div class="col-sm-5">
                     <label for="nama" class="col-form-label">Nama :</label>
                     <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                 </div>
             </div>
             <div class="form-row">
                 <div class="col-sm-5">
                     <label for="ttl" class="col-form-label">Tempat, Tanggal Lahir :</label>
                     <input type="text" id="ttl" name="ttl" class="form-control" placeholder="Tempat, Tanggal Lahir" required>
                 </div>
                 <div class="col-sm-5">
                     <label for="jenkel" class="col-form-label">Jenis Kelamin :</label>
                     <select class="form-control" id="jenkel" name="jenkel" required>
                         <option value="0">Pilih Jenis Kelamin</option>
                         <option value="1">Laki-Laki</option>
                         <option value="2">Perempuan</option>
                     </select>
                 </div>
             </div>
             <div class="form-row">
                 <div class="col-sm-5">
                     <label for="agama" class="col-form-label">Agama :</label>
                     <select class="form-control" id="agama" name="agama" required>
                         <option value="0">Pilih Agama</option>
                         <option value="1">Islam</option>
                         <option value="2">Kristen</option>
                         <option value="3">Katolik</option>
                         <option value="4">Hindu</option>
                         <option value="5">Buddha</option>
                         <option value="6">Konghucu</option>
                     </select>
                 </div>
                 <div class="col-sm-5">
                     <label for="alamat" class="col-form-label">Alamat :</label>
                     <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" required>
                 </div>
             </div>
             <div class="form-row">
                 <div class="col-sm-5">
                     <label for="email" class="col-form-label">Email :</label>
                     <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                 </div>
                 <div class="col-sm-5">
                     <label for="no_hp" class="col-form-label">No HP :</label>
                     <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="Nomor Telephone" required>
                 </div>
             </div>
             <div class="form-row">
                 <div class="col-sm-5">
                     <label for="jurusan" class="col-form-label">Jurusan :</label>
                     <input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Fakultas/Jurusan" required>
                 </div>
                 <div class="col-sm-5">
                     <label for="prodi" class="col-form-label">Program Studi :</label>
                     <input type="text" id="prodi" name="prodi" class="form-control" placeholder="Program Studi" required>
                 </div>
             </div>
             <div class="form-group">
                 <label for="foto">Foto</label>
                 <input type="file" class="form-control-file" id="foto" name="foto" required>
                 <p>Format foto harus jpg, jpeg, atau png. Max size 2 MB.</p>
             </div>
             <div class="buttom col-sm-12 my-5 text-center mx-auto">
                 <button type="reset" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm mr-5" style="font-weight: bold;">Reset</button>
                 <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="kirim" name="kirim" value="kirim" style="font-weight: bold;">Submit</button>
             </div>
         </form>
     </div>
 </div>
 <!-- /.container-fluid -->