<div class="container-fluid">
    <div class="profil_mahasiswa">
        <div class="tambah_mahasiswa bg-primary font-weight-bold text-center mx-auto" style="height: 50px; width:70%;">
            <center>
                <h1 class="text-white font-weight-bold"><img src="<?php echo base_url('assets/image/student.png') ?>" width="5%" height="5%" alt="">Form Data Mahasiswa</h1>
            </center>
        </div>
        <div class="row my-5 mx-5">
            <?php
            foreach ($mahasiswa as $row) {
            ?>
                <div class="col-sm-4">
                    <img src="<?php echo base_url('uploads/' . $row->foto) ?>" width="250" height="250" alt="">
                </div>
                <div class=" col-sm-8">
                    <form style="color: black;">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="nim" class="col-form-label">NIM</label>
                            </div>
                            <div class="col-sm-8">
                                <p><?php echo $row->nim; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="nama" class="col-form-label">Nama</label>
                            </div>
                            <div class="col-sm-8">
                                <p><?php echo $row->nama; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="ttl" class="col-form-label">Tempat, Tanggal Lahir</label>
                            </div>
                            <div class="col-sm-8">
                                <p><?php echo $row->ttl; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="jenkel" class="col-form-label">Jenis Kelamin</label>
                            </div>
                            <div class="col-sm-8">
                                <p><?php echo $row->jenkel; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="agama" class="col-form-label">Agama</label>
                            </div>
                            <div class="col-sm-8">
                                <p><?php echo $row->agama; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="alamat" class="col-form-label">Alamat</label>
                            </div>
                            <div class="col-sm-8">
                                <p><?php echo $row->alamat; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="email" class="col-form-label">Email</label>
                            </div>
                            <div class="col-sm-8">
                                <p><?php echo $row->email; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="no_hp" class="col-form-label">No Telephone</label>
                            </div>
                            <div class="col-sm-8">
                                <p><?php echo $row->no_hp; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="jurusan" class="col-form-label">Jurusan</label>
                            </div>
                            <div class="col-sm-8">
                                <p><?php echo $row->jurusan; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="prodi" class="col-form-label">Program Studi</label>
                            </div>
                            <div class="col-sm-8">
                                <p><?php echo $row->prodi; ?></p>
                            </div>
                        </div>

                    </form>
                </div>
            <?php
            }
            ?>
            <!-- Button Back -->
            <div class="back text-left">
                <a class="btn btn-primary" style="font-weight: bold;" href="<?php echo site_url('crud/data_mahasiswa') ?>">KEMBALI</a>

            </div>

        </div>
    </div>
</div>