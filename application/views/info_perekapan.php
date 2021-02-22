<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Data Perekapan
    </div>
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <a href="<?= base_url('perekapan'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>

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
                    <th>Jumlah Poin</th>
                    <th>Keterangan</th>

                </tr>


                <?php
                function keterangan($sanksi, $totalPelanggaran)
                {
                    foreach ($sanksi as $value) {
                        if ($totalPelanggaran <= $value->poin_sanksi) {
                            return $value->jenis_sanksi;
                        }
                    }
                    return '-';
                }
                $no = 1;
                foreach ($perekapan as $pn) : ?>
                    <tr>
                        <td width="20px"><?php echo $no++ ?></td>
                        <td><?php echo $pn->id_siswa; ?></td>
                        <td><?php echo $pn->nama_siswa ?></td>
                        <td><?php echo $pn->jenis_kelamin ?></td>
                        <td><?php echo $pn->kelas ?></td>
                        <td><?php echo $pn->nama_jurusan ?></td>
                        <td>
                            <?php echo $pn->total_pelanggaran ?>
                        </td>
                        <td>
                            <?php
                            echo keterangan($sanksi,  $pn->total_pelanggaran);

                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>



            </table>
        </div>
    </div>
</div>