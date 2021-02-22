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
            <h6 class="m-0 font-weight-bold text-primary">Data Wali Kelas | <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="myTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Kode Jurusan</th>
                            <th>Nama Guru</th>

                            <?php if ($this->session->userdata('level') == 'admin') { ?>
                                <th>Password</th>
                                <th width="11%">Aksi</th>
                            <?php } ?>

                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($tabel_walikelas as $tws) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $tws->nip ?></td>
                                <td><?php echo $tws->id_KJ ?></td>
                                <td><?php echo $tws->nama_walikelas ?></td>

                                <?php if ($this->session->userdata('level') == 'admin') { ?>
                                    <td><?php echo $tws->password ?></td>
                                    <td>

                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editmodal<?php echo $tws->id_walikelas ?>"><i class="fas fa-edit"></i>
                                        </button>

                                        <?php echo anchor('wali_kelas/delete/' . $tws->id_walikelas, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> '); ?>
                                    </td>
                                <?php } ?>
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
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data Wali Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('wali_kelas/input_aksi'); ?>
                <div class="form-group">
                    <label>NIP</label>
                    <input required type="text" name="nip" class="form-control">
                    <label>Kode Jurusan</label>
                    <select required class="form-control" name="id_KJ">
                        <option value="">-- Pilih Kode Jurusan </option>
                        <?php foreach ($kelas as $jrs) : ?>
                            <option value="<?= $jrs->id_KJ ?>"><?= $jrs->id_KJ ?>-<?= $jrs->nama_jurusan ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>Nama Walikelas</label>
                    <input required type="text" name="nama_walikelas" class="form-control">
                    <label>Password</label>
                    <input required type="password" name="password" class="form-control" id="show">
                    <input type="checkbox" class="form-checkbox"> Show Password
                    <br>

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
foreach ($tabel_walikelas as $tws) : $no++; ?>
    <div class="modal fade" id="editmodal<?php echo $tws->id_walikelas ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Update Wali Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('wali_kelas/update_aksi/' . $tws->id_walikelas); ?>
                    <div class="form-group">
                        <label>NIP</label>
                        <input name="nip" class="form-control" value="<?php echo $tws->nip ?>">
                        <label>Nama Walikelas</label>
                        <input name="nama_walikelas" class="form-control" value="<?php echo $tws->nama_walikelas ?>">
                        <label>Kode Jurusan</label>
                        <input name="id_KJ" class="form-control" value="<?php echo $tws->id_KJ ?>">
                        <label>Password</label>
                        <input required type="password" name="password" class="form-control" id="show_update" value="<?php echo $tws->password ?>">
                        <input type="checkbox" class="form-checkbox"> Show Password
                        <br>
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