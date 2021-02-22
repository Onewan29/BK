<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <img class="image" border="0" src="<?php echo base_url('assets/img/kop.png') ?>" width="100%">
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <?php if ($this->session->userdata('level') == ('admin')) { ?>


                <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
                    Tambah Data
                </button>
            <?php } ?>
            <h6 class="m-0 font-weight-bold text-primary">Kelas & Jurusan | <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="myTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Kode Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Nama Jurusan</th>
                            <th width="11%">Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($kj as $jrs) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $jrs->id_KJ ?></td>
                                <td><?php echo $jrs->Kelas ?></td>
                                <td><?php echo $jrs->nama_jurusan ?></td>
                                <td>
                                    <?php echo anchor('jurusan/info_KJ/' . $jrs->id_KJ, '<div class="btn btn-sm btn-outline-info"><i class="fa fa-info"></i></div> ');
                                    if ($this->session->userdata('level') == 'admin') {
                                        # code...
                                    ?>

                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editmodal<?php echo $jrs->id_KJ ?>"><i class="fas fa-edit"></i>
                                        </button>


                                    <?php echo anchor('jurusan/delete/' . $jrs->id_KJ, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ');
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
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data Kelas & Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('jurusan/input_aksi'); ?>
                <div class="form-group">

                    <label>Kode</label>
                    <input required type="text" name="id_KJ" class="form-control">

                    <label>Nama jurusan</label>
                    <select required name="nama_jurusan" class="form-control">
                        <option value="">-- Pilih Jurusan </option>
                        <option>Ilmu Pengetahuan Alam</option>
                        <option>Ilmu Pengetahuan Sosial</option>
                    </select>

                    <label>Nama kelas</label>
                    <select required name="kelas" class="form-control">
                        <option value="">-- Pilih Kelas </option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
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
foreach ($kj as $jrs) : $no++; ?>
    <div class="modal fade" id="editmodal<?php echo $jrs->id_KJ ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Update Sanksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('jurusan/update_aksi/' . $jrs->id_KJ); ?>
                    <div class="form-group">
                        <label>Kode</label>

                        <input readonly type="text" name="id_KJ" class="form-control" value="<?php echo $jrs->id_KJ ?>">


                        <label>Nama Jurusan</label>

                        <select name="nama_jurusan" class="form-control" value="<?php echo $jrs->nama_jurusan ?>">

                            <option value="Ilmu Pengetahuan Alam" <?= $jrs->nama_jurusan == "Ilmu Pengetahuan Alam" ? "selected" : "" ?>>Ilmu Pengetahuan Alam</option>
                            <option value="Ilmu Pengetahuan Sosial" <?= $jrs->nama_jurusan == "Ilmu Pengetahuan Sosial" ? "selected" : "" ?>>Ilmu Pengetahuan Sosial</option>
                        </select>


                        <label>Kelas</label>
                        <select name="Kelas" class="form-control" value="<?php echo $jrs->Kelas ?>">
                            <option value="10" <?= $jrs->Kelas == "10" ? "selected" : "" ?>>10</option>
                            <option value="11" <?= $jrs->Kelas == "11" ? "selected" : "" ?>>11</option>
                            <option value="12" <?= $jrs->Kelas == "12" ? "selected" : "" ?>>12</option>
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