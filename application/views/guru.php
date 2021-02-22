<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <img class="image" border="0" src="<?php echo base_url('assets/img/kop.png') ?>" width="100%">
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <?php if ($this->session->userdata('level') == 'admin') {
            ?>
                <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
                    Tambah Data
                </button>
            <?php } ?>
            <h6 class="m-0 font-weight-bold text-primary">Data Guru | <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="myTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Alamat</th>
                            <th>Golongan</th>
                            <th>Spesialisasi</th>
                            <?php if ($this->session->userdata('level') == 'admin') {
                                # code...
                            ?>
                                <th width="11%">Aksi</th>
                            <?php } ?>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($guru as $gr) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $gr->id_guru ?></td>
                                <td><?php echo $gr->nama_guru ?></td>
                                <td><?php echo $gr->alamat ?></td>
                                <td><?php echo $gr->golongan ?></td>
                                <td><?php echo $gr->spesialis ?></td>
                                <?php if ($this->session->userdata('level') == 'admin') {
                                    # code...
                                ?>
                                    <td>

                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editmodal<?php echo $gr->id_guru ?>"><i class="fas fa-edit"></i>
                                        </button>

                                    <?php echo anchor('guru/delete/' . $gr->id_guru, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ');
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


<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('guru/input_aksi'); ?>
                <div class="form-group">

                    <label>NIP</label>
                    <input required type="text" name="id_guru" class="form-control">

                    <label>Nama Guru</label>
                    <input type="text" name="nama_guru" class="form-control">

                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">

                    <label>Golongan</label>
                    <input type="text" name="golongan" class="form-control">

                    <label>Spesialis</label>
                    <input type="text" name="spesialis" class="form-control">

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
foreach ($guru as $gr) : $no++; ?>
    <div class="modal fade" id="editmodal<?php echo $gr->id_guru ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Update Sanksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('guru/update_aksi/' . $gr->id_guru); ?>
                    <div class="form-group">

                        <label>NIP</label>

                        <input readonly name="id_guru" class="form-control" value="<?php echo $gr->id_guru ?>">


                        <label>Nama Guru</label>
                        <input type="text" name="nama_guru" class="form-control" value="<?php echo $gr->nama_guru ?>">

                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $gr->alamat ?>">

                        <label>Golongan</label>
                        <input type="text" name="golongan" class="form-control" value="<?php echo $gr->golongan ?>">

                        <label>Spesialis</label>
                        <input type="text" name="spesialis" class="form-control" value="<?php echo $gr->spesialis ?>">

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