<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Data Siswa
    </div>

    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('jurusan'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>
        </div>
        <div class="card-header py-3">


            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>

                </tr>
                <?php
                $no = 1;
                foreach ($kj as $sw) : ?>
                    <tr>
                        <td width="20px"><?php echo $no++ ?></td>
                        <td><?php echo $sw->id_siswa ?></td>
                        <td><?php echo $sw->nama_siswa ?></td>
                        <td><?php echo $sw->jenis_kelamin ?></td>
                        <td><?php echo $sw->Kelas ?></td>
                        <td><?php echo $sw->nama_jurusan ?></td>


                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>