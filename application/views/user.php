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
            <h6 class="m-0 font-weight-bold text-primary">Data User | <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a> </h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="myTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama User</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th width="11%">Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($tabel_user as $u) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $u->Username ?></td>
                                <td><?php echo $u->password ?></td>
                                <td><?php echo $u->level ?></td>

                                <td>
                                    <?php if ($this->session->userdata('level') == 'admin') {
                                    ?>
                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editmodal<?php echo $u->id_user ?>"><i class="fas fa-edit"></i>
                                        </button>

                                    <?php
                                        echo anchor('user/delete/' . $u->id_user, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ');
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
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('user/input_aksi'); ?>
                <div class="form-group">
                    <label>Nama User</label>
                    <input required type="text" class="form-control " name="Username">

                    </input>

                    <label>Password</label>
                    <input required type="password" name="password" class="form-control" id="show_user">
                    <input type="checkbox" class="form-checkbox"> Show Password
                    <br>
                    <label>Level</label>
                    <select type="text" name="level" class="form-control">
                        <option>Admin</option>
                        <option>User</option>

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
foreach ($tabel_user as $u) : $no++; ?>
    <div class="modal fade" id="editmodal<?php echo $u->id_user ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('user/update_aksi/' . $u->id_user); ?>
                    <div class="form-group">

                        <label>Nama User</label>
                        <input required type="text" name="Username" class="form-control" value="<?php echo $u->Username ?>">

                        <label>Password</label>
                        <input required type="password" name="password" class="form-control" id="show1_user" value="<?php echo $u->password ?>">
                        <input type="checkbox" class="form-checkbox"> Show Password
                        <br>


                        <label>Level</label>
                        <select name="level" class="form-control" value="<?php echo $u->level ?>">
                            <option value="Admin" <?= $u->level == "Admin" ? "selected" : "" ?>>Admin</option>
                            <option value="User" <?= $u->level == "User" ? "selected" : "" ?>>User</option>


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