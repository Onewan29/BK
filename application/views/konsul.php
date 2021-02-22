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
                            <th>Jurusan</th>
                            <th>Kelas</th>
                            <th>Catatan</th>
                            <th width="11%">Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($konsultasi as $sk) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $sk->id_siswa ?></td>
                                <td><?php echo $sk->nama_siswa ?></td>
                                <td><?php echo $sk->nama_jurusan ?></td>
                                <td><?php echo $sk->kelas ?></td>
                                <td><?php echo $sk->catatan ?></td>
                                <td>
                                    <?php echo anchor('konsul/info_konsul/' . $sk->id_konsultasi, '<div class="btn btn-sm btn-outline-info "><i class="fa fa-info"></i></div> ');
                                    if ($this->session->userdata('level') == 'admin') {
                                    ?>

                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-konsul="<?= $sk->id_konsultasi ?>" data-target="#editmodal"><i class="fas fa-edit"></i>
                                        </button>

                                    <?php
                                        echo anchor('konsul/delete/' . $sk->id_konsultasi, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ');
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
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data Konsultasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('konsul/input_aksi'); ?>
                <div class="form-group">
                    <label>NIS</label>
                    <select required class="form-control " name="id_siswa">

                        <option value="">-- Pilih NIS </option>
                        <?php foreach ($siswa as $sw) : ?>

                            <option value="<?= $sw->id_siswa ?>"><?= $sw->id_siswa ?>-<?= $sw->nama_siswa ?></option>
                        <?php endforeach; ?>
                    </select>


                    <label>NIP</label>
                    <select required class="form-control form-control" name="id_guru">
                        <option value="">-- Pilih NIP </option>
                        <?php foreach ($guru as $gr) : ?>
                            <option value="<?= $gr->id_guru ?>"><?= $gr->id_guru ?>-<?= $gr->nama_guru ?></option>
                        <?php endforeach; ?>

                    </select>

                    <label>Kode Kelas</label>
                    <select name="id_KJ" id="id_KJ" class="form-control">
                        <?php
                        foreach ($kelas as $valueKelas) {
                        ?>
                            <option data-kelas="<?= $valueKelas->Kelas ?>" data-jurusan="<?= $valueKelas->nama_jurusan ?>" value="<?= $valueKelas->id_KJ ?>"> <?= "$valueKelas->Kelas $valueKelas->nama_jurusan" ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <!-- <input required type="text" name="id_KJ" id="id_KJ" class="form-control" onkeyup="isi_otomatis()"> -->

                    <label>Nama Kelas</label>
                    <input required type="text" class="form-control" name="kelas" id="Kelas" readonly>
                    </input>
                    <label>Nama Jurusan</label>
                    <input required type="text" class="form-control " id="nama_jurusan" name="nama_jurusan" readonly>
                    </input>
                    <label>Semester</label>
                    <select name="id_perekapan" class="form-control">
                        <option value="">-- Pilih Semester </option>
                        <?php foreach ($perekapan as $pk) : ?>
                            <option value="<?= $pk->id_perekapan ?>"><?= $pk->thn_ajaran . ' ' . $pk->semester ?></option>
                        <?php endforeach ?>
                    </select>
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                    <label>Catatan</label>
                    <textarea class="form-control" name="catatan" id="exampleFormControlTextarea1" rows="3"></textarea>
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

<?php
// $no = 0;
// foreach ($konsultasi as $sk) :
//     $no++;
?>
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Update Sanksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('konsul/update_aksi/' . $sk->id_konsultasi); ?>
                <div class="form-group">
                    <label>NIS</label>
                    <input required type="text" name="id_siswa" class="form-control" value="<?php echo $sk->id_siswa ?>">


                    <label>NIP</label>
                    <input required type="text" name="id_guru" class="form-control" value="<?php echo $sk->id_guru ?>">

                    <label>Kode Kelas</label>
                    <!-- <input required type="text" name="id_KJ" id="id_KJ_update" class="form-control" onkeyup="isi_otomatis_update()" value="<?php echo $sw->id_KJ ?>"> -->
                    <select name="id_KJ" id="id_KJ_update" class="form-control">
                        <?php
                        $selected = '';
                        foreach ($kelas as $valueKelas) {
                            if ($valueKelas->Kelas == $sk->kelas && $valueKelas->nama_jurusan == $sk->nama_jurusan) {
                                $selected = 'selected';
                            }
                        ?>
                            <option data-kelas="<?= $valueKelas->Kelas ?>" data-jurusan="<?= $valueKelas->nama_jurusan ?>" value="<?= $valueKelas->id_KJ ?>" <?= $selected ?>> <?= "$valueKelas->Kelas $valueKelas->nama_jurusan"  ?></option>
                        <?php }
                        ?>
                    </select>

                    <label>Nama Kelas</label>

                    <input readonly name="kelas" id="Kelas_update" class="form-control" value="<?php echo $sk->kelas ?>">

                    </input>
                    <label>Nama Jurusan</label>
                    <input readonly name="nama_jurusan" id="nama_jurusan_update" class="form-control" value="<?php echo $sk->nama_jurusan ?>">

                    </input>

                    <label>Semester</label>
                    <select required class="form-control form-control" name="id_perekapan" value="<?php echo $sk->id_perekapan ?>">
                        <option value="">-- Pilih Semester </option>
                        <?php foreach ($perekapan as $pk) : ?>
                            <option value="<?= $pk->id_perekapan ?>"><?= $pk->thn_ajaran . ' ' . $pk->semester ?></option>
                        <?php endforeach ?>
                    </select>



                    <label>Tanggal</label>
                    <input required type="date" name="tanggal" class="form-control" value="<?php echo $sk->tanggal ?>">

                    <label>Catatan</label>
                    <textarea class="form-control" name="catatan" id="exampleFormControlTextarea1" rows="3"><?php echo $sk->catatan ?>

                            </textarea>


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
<?php
// endforeach;
?>