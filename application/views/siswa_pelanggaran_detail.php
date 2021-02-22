<div class="container-fluid">
    <div class="card shadow mb-4">
        <img class="image" border="0" src="<?php echo base_url('assets/img/kop.png') ?>" width="100%">
    </div>



    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">Data Pelanggaran | <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a> </h6>

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
                    <th width="11%">Aksi</th>
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
                $kp = '';
                $total = 0;
                foreach ($pelanggaran as $pn) :
                ?>
                    <tr>
                        <td width="20px"><?php echo $no++ ?></td>
                        <td><?php echo $pn->id_siswa; ?></td>
                        <td><?php echo $pn->nama_siswa ?></td>
                        <td><?php echo $pn->jenis_kelamin ?></td>
                        <td><?php echo $pn->kelas ?></td>
                        <td><?php echo $pn->nama_jurusan ?></td>
                        <td><?php echo $pn->jumlah_poin ?></td>
                        <td>
                            <?php
                            echo keterangan($sanksi,  $pn->jumlah_poin);
                            ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-kp="<?= $pn->id_perekapan ?>">Detail Pelanggaran</button>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>



            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Pelanggaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="datapelanggaran" class="table table-bordered">
                </table>
            </div>
        </div>
    </div>
</div>