<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Informasi Konsultasi
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('konsul'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>
            <a href="<?= base_url('konsul/cetak_siswa'); ?>" class="btn btn-outline-warning"><i class="fas fa-print"></i> </a>
        </div>



        <div class="card-header py-3">

            <table class="table table-bordered table-striped table-hover">
                <tbody>
                    <?php
                    foreach ($konsultasi as $sk) : ?>

                        <tr>

                            <th width="200px">NIS</th>
                            <td><?php echo $sk->id_siswa; ?></td>
                        </tr>
                        <tr>
                            <th>Nama Siswa</th>
                            <td><?php echo $sk->nama_siswa ?></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td><?php echo $sk->kelas ?></td>
                        </tr>
                        <tr>
                            <th>Jurusan</th>
                            <td><?php echo $sk->nama_jurusan ?></td>
                        </tr>

                        <tr>
                            <th>Jenis Kelamin</th>
                            <td><?php echo $sk->jenis_kelamin ?></td>
                        </tr>
                        <tr>
                            <th>NIP Guru BK</th>
                            <td><?php echo $sk->id_guru ?></td>
                        </tr>
                        <tr>
                            <th>Nama Guru BK</th>
                            <td><?php echo $sk->nama_guru ?></td>
                        </tr>
                        <tr>
                            <th>Tahun Ajaran</th>
                            <td><?php echo $sk->thn_ajaran ?></td>
                        </tr>
                        <tr>
                            <th>Semester</th>
                            <td><?php echo $sk->semester ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td><?php echo $sk->tanggal ?></td>
                        </tr>
                        <tr>
                            <th>Catatan</th>
                            <td><?php echo $sk->catatan ?></td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>