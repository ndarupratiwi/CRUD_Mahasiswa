<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DataMahasiswa.xls");
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row text-center">
            <h2 class="m-0 font-weight-bold text-primary" style="color: primary;">DATA MAHASISWA</h2>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Lengkap</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No. Telephone</th>
                            <th>Jurusan</th>
                            <th>Program Studi</th>
                            <th>Foto</th>
                        </tr>
                    </thead>

                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $row) {
                    ?>

                        <tbody>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row->nim ?></td>
                                <td><?php echo $row->nama ?></td>
                                <td><?php echo $row->ttl ?></td>
                                <td><?php echo $row->jenkel ?></td>
                                <td><?php echo $row->agama ?></td>
                                <td><?php echo $row->alamat ?></td>
                                <td><?php echo $row->email ?></td>
                                <td><?php echo $row->no_hp ?></td>
                                <td><?php echo $row->jurusan ?></td>
                                <td><?php echo $row->prodi ?></td>
                                <td><img src="<?php echo base_url('uploads/' . $row->foto) ?>" alt="" width="50" height="50"></td>
                            </tr>

                        <?php
                    }
                        ?>

                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>