<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <img class="image" border="0" src="<?php echo base_url('assets/img/kop.png') ?>" width="100%">
    </div>



    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">Data Konsultasi | <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a> </h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="myTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Tanggal</th>
                            <th>Catatan</th>

                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($konsultasi as $sk) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $sk->id_siswa ?></td>
                                <td><?php echo $sk->nama_siswa ?></td>
                                <td><?php echo $sk->tanggal ?></td>
                                <td><?php echo $sk->catatan ?></td>


                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->