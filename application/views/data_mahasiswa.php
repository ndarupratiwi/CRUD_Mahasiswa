 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="mb-2 font-weight-bold" style="color: #1B4F72;">DATA MAHASISWA</h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <?php echo $this->session->flashdata('message'); ?>
         <div class="card-header py-3">
             <div class="menu" style="text-align: right;">
                 <a onclick="return confirm('Apakah Anda yakin untuk download?')" href="<?php echo base_url('Crud/download') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mx-2" style="width: 150px;"><img src="<?php echo base_url('assets/image/download.png') ?>" width="15%" height="15%" alt=""> Data Mahasiswa</a>
                 <a href="<?php echo base_url('Crud/tambah_mahasiswa') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-5" style="width: 150px;"> <img src="<?php echo base_url('assets/image/add.png') ?>" width="15%" height="15%" alt=""> Mahasiswa</a>
             </div>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr class="text-center">
                             <th>No</th>
                             <th>NIM</th>
                             <th>Nama</th>
                             <th>Jurusan</th>
                             <th>Foto</th>
                             <th style="width: 200px;">Aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            $nomor = 1;
                            foreach ($mahasiswa as $row) {
                            ?>
                             <tr>
                                 <td><?php echo $nomor++; ?></td>
                                 <td><?php echo $row->nim; ?></td>
                                 <td><?php echo $row->nama; ?></td>
                                 <td><?php echo $row->jurusan; ?></td>
                                 <td><?php echo $row->email; ?></td>
                                 <td class="text-center">
                                     <a class="profil mr-2" href="<?php echo base_url('Crud/profil/' . $row->id); ?>"><img src="<?php echo base_url('assets/image/information.png') ?>" width="10%" height="10%" alt=""></a>
                                     <a class="edit mr-2" href="<?php echo base_url('Crud/edit_mahasiswa/' . $row->id); ?>"><img src="<?php echo base_url('assets/image/edit.png') ?>" width="10%" height="10%" alt=""></a>
                                     <a onclick="return confirm('Apakah Anda yakin untuk hapus data?')" class="hapus" href="<?php echo base_url('Crud/delete_mahasiswa/' . $row->id); ?>"><img src="<?php echo base_url('assets/image/delete.png') ?>" width="10%" height="10%" alt=""></a>
                                 </td>
                             </tr>
                         <?php } ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->