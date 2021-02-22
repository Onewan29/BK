<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <img class="image" border="0" src="<?php echo base_url('assets/img/kop.png') ?>" width="100%">
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
                Tambah Data
            </button>
            <h6 class="m-0 font-weight-bold text-primary">Data Sanksi | <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="myTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Sanksi Yang Dikenakan</th>
                            <th>Jumlah Poin Sanksi</th>

                            <th width="11%">Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($tabel_sanksi as $ss) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $ss->jenis_sanksi ?></td>
                                <td><?php echo $ss->poin_sanksi ?></td>
                                <td>

                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editmodal<?php echo $ss->id_sanksi ?>"><i class="fas fa-edit"></i>
                                    </button>

                                    <?php echo anchor('sanksi/delete/' . $ss->id_sanksi, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> '); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data Sanksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('sanksi/input_aksi'); ?>
                <div class="form-group">
                    <label>Sanksi Yang Dikenakan</label>
                    <input required type="text" name="jenis_sanksi" class="form-control">
                    <label>Jumlah Point Sanksi</label>
                    <input required type="text" name="poin_sanksi" class="form-control">


                </div>

            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-outline-danger">Batal</button>
                <button type="submit" class="btn btn-outline-success">Simpan</button>

            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

<?php $no = 0;
foreach ($tabel_sanksi as $ss) : $no++; ?>
    <div class="modal fade" id="editmodal<?php echo $ss->id_sanksi ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Update Sanksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('sanksi/update_aksi/' . $ss->id_sanksi); ?>
                    <div class="form-group">
                        <label>Sanksi Yang Dikenakan</label>
                        <input name="jenis_sanksi" class="form-control" value="<?php echo $ss->jenis_sanksi ?>">
                        <label>Jumlah Poin Sanksi</label>
                        <input name="poin_sanksi" class="form-control" value="<?php echo $ss->poin_sanksi ?>">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-outline-danger">Batal</button>
                    <button type="submit" class="btn btn-outline-success">Simpan</button>

                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>