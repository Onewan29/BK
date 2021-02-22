<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <img class="image" border="0" src="<?php echo base_url('assets/img/kop.png') ?>" width="100%">
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <?php if ($this->session->userdata('level') == 'admin') { ?>


                <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
                    Tambah Data
                </button>
            <?php } ?>
            <h6 class="m-0 font-weight-bold text-primary">Data Perekapan | <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="myTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Kode Perekapan</th>
                            <th>Tahun Ajaran</th>
                            <th>Semester</th>
                            <th width="11%">Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($perekapan as $pk) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $pk->id_perekapan ?></td>
                                <td><?php echo $pk->thn_ajaran ?></td>
                                <td><?php echo $pk->semester ?></td>
                                <td>
                                    <?php echo anchor('perekapan/info_perekapan/' . $pk->id_perekapan, '<div class="btn btn-sm btn-outline-info "><i class="fa fa-info"></i></div> ');
                                    if ($this->session->userdata('level') == 'admin') {
                                        # code...
                                    ?>

                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editmodal<?php echo $pk->id_perekapan ?>"><i class="fas fa-edit"></i>
                                        </button>

                                    <?php echo anchor('perekapan/delete/' . $pk->id_perekapan, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ');
                                    } ?>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data Perekapan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('perekapan/input_aksi'); ?>
                <div class="form-group">
                    <label>Kode Perekapan</label>
                    <input required type="text" name="id_perekapan" class="form-control">

                    <label>Tahun Ajaran</label>
                    <input type="text" name="thn_ajaran" class="form-control">

                    <label>Semester</label>
                    <select name="semester" class="form-control">
                        <option value="">-- Pilih Semester</option>
                        <option>Ganjil</option>
                        <option>Genap</option>
                    </select>
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
foreach ($perekapan as $pk) : $no++; ?>
    <div class="modal fade" id="editmodal<?php echo $pk->id_perekapan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Update Perekapan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('perekapan/update_aksi'); ?>
                    <div class="form-group">
                        <label>Kode Perekapan</label>
                        <input readonly name="id_perekapan" class="form-control" value="<?php echo $pk->id_perekapan ?>">

                        <label>Tahun Ajaran</label>
                        <input type="text" name="thn_ajaran" class="form-control" value="<?php echo $pk->thn_ajaran ?>">

                        <label>Semester</label>

                        <select class="form-control" name="semester" value="<?php echo $pk->semester ?>">
                            <option value="Ganjil" <?= $pk->semester == "Ganjil" ? "selected" : "" ?>>Ganjil</option>
                            <option value="Genap" <?= $pk->semester == "Genap" ? "selected" : "" ?>>Genap</option>

                        </select>



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