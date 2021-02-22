<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Data Pelanggaran
    </div>
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <a href="<?= base_url('pelanggaran'); ?>" class="btn btn-outline-primary"> <i class="fas fa-backward"></i> Kembali</a>
            <a href="<?= base_url('pelanggaran/cetak_siswa'); ?>" target="_blank" class="btn btn-outline-warning"> <i class="fas fa-print"></i></a>

        </div>


        <div class="card-header py-3">

            <table class="table table-bordered table-striped table-hover">
                <tbody>
                    <?php

                    foreach ($pelanggaran as $pn) : ?>

                        <tr>
                            <th>NIS</th>
                            <td><?php echo $pn->id_siswa ?></td>
                        </tr>
                        <tr>
                            <th>Nama Siswa</th>
                            <td><?php echo $pn->nama_siswa ?></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td><?php echo $pn->kelas ?></td>
                        </tr>
                        <tr>
                            <th>Jurusan</th>
                            <td><?php echo $pn->nama_jurusan ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td><?php echo $pn->jenis_kelamin ?></td>
                        </tr>
                        <tr>
                            <th>NIP Guru BK</th>
                            <td><?php echo $pn->id_guru ?></td>
                        </tr>
                        <tr>
                            <th>Nama Guru BK</th>
                            <td><?php echo $pn->nama_guru ?></td>
                        </tr>
                        <tr>
                            <th>Nama Tatib</th>
                            <td><?php echo $pn->tatib ?></td>
                        </tr>

                        <tr>
                            <th>Bentuk Pelanggaran</th>
                            <td><?php echo $pn->bentuk_pelanggaran ?></td>
                        </tr>

                        <tr>
                            <th>Bobot Pelanggaran</th>
                            <td><?php echo $pn->bobot ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td><?php echo $pn->tanggal ?></td>
                        </tr>
                        <tr>
                            <th>Tahun Ajaran</th>
                            <td><?php echo $pn->thn_ajaran ?></td>
                        </tr>
                        <tr>
                            <th>Semester</th>
                            <td><?php echo $pn->semester ?></td>
                        </tr>
                        <tr>
                            <th>Catatan</th>
                            <td><?php echo $pn->catatan ?></td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>