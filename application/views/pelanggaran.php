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
            <h6 class="m-0 font-weight-bold text-primary">Data Pelanggaran | <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Nama Guru</th>
                            <th>Bentuk Pelanggaran</th>
                            <th>Bobot</th>
                            <th>Catatan</th>
                            <th width="11%">Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pelanggaran as $pn) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $pn->id_siswa ?></td>
                                <td><?php echo $pn->nama_siswa ?></td>
                                <td><?php echo $pn->nama_guru ?></td>
                                <td><?php echo $pn->bentuk_pelanggaran ?></td>
                                <td><?php echo $pn->bobot ?></td>
                                <td><?php echo $pn->catatan ?></td>
                                <td>
                                    <?php echo anchor('pelanggaran/info_pelanggaran/' . $pn->id_pelanggaran, '<div class="btn btn-sm btn-outline-info "><i class="fa fa-info"></i></div> ');
                                    if ($this->session->userdata('level') == 'admin') {
                                    ?>
                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-pelanggaran="<?= $pn->id_pelanggaran ?>" data-target="#editmodalpelanggaran"><i class="fas fa-edit"></i></button>
                                        <!-- <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editmodal<?php echo $pn->id_pelanggaran ?>"><i class="fas fa-edit"></i></button> -->
                                    <?php echo anchor('pelanggaran/delete/' . $pn->id_pelanggaran, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ');
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
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data Pelanggaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('pelanggaran/input_aksi'); ?>
                <div class="form-group">

                    <label>NIS</label>
                    <select required name="id_siswa" id="nis_siswa" class="form-control">
                        <option value="">-- Pilih NIS </option>
                        <?php foreach ($siswa as $sw) : ?>
                            <option value="<?= $sw->id_siswa; ?>"><?= $sw->id_siswa; ?>-<?= $sw->nama_siswa; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>Kode Kelas</label>
                    <!-- <input required type="text" id="id_KJ" name="id_KJ" class="form-control" onkeyup="isi_otomatis()"> -->
                    <select name="id_KJ" id="id_KJ" class="form-control">
                        <option>pilih kelas</option>
                        <?php
                        foreach ($kelas as $valueKelas) {
                        ?>
                            <option data-kelas="<?= $valueKelas->Kelas ?>" data-jurusan="<?= $valueKelas->nama_jurusan ?>" value="<?= $valueKelas->id_KJ ?>"> <?= "$valueKelas->Kelas $valueKelas->nama_jurusan"  ?></option>
                        <?php }
                        ?>
                    </select>
                    <label>Nama Kelas</label>
                    <input readonly type="text" name="kelas" id="Kelas" class="form-control">

                    </input>
                    <label>Nama Jurusan</label>
                    <input readonly type="text" name="nama_jurusan" id="nama_jurusan" class="form-control">

                    </input>
                    <label>NIP Guru</label>
                    <select required name="id_guru" class="form-control">
                        <option value="">-- Pilih NIP </option>
                        <?php foreach ($guru as $gr) : ?>
                            <option value="<?= $gr->id_guru; ?>"><?= $gr->id_guru; ?>-<?= $gr->nama_guru; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>Kategori Pelanggaran</label>
                    <select required name="id_kp" class="form-control form-control">
                        <option value="">-- Pilih Kategori Pelanggaran </option>
                        <?php foreach ($pr as $kp) : ?>
                            <option value="<?= $kp->id_kp; ?>"><?= $kp->id_kp; ?>-<?= $kp->bentuk_pelanggaran; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>Kode Perekapan</label>
                    <select required name="id_perekapan" class="form-control form-control">
                        <option value="">-- Pilih Kode Perekapan </option>
                        <?php foreach ($perekapan as $rp) : ?>
                            <option value="<?= $rp->id_perekapan; ?>"><?= $rp->id_perekapan; ?>-<?= $rp->semester; ?>-<?= $rp->thn_ajaran; ?> </option>
                        <?php endforeach; ?>
                    </select>
                    <label>Tanggal</label>
                    <input required type="date" name="tanggal" class="form-control">
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

<div class="modal fade" id="editmodalpelanggaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Update Pelanggaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('pelanggaran/update_aksi'); ?>
                <div class="form-group">
                    <input type="hidden" name="id_pelanggaran" id="id_pelanggaran">
                    <label>NIS</label>
                    <select required class="form-control" id="id_siswa" name="id_siswa">
                        <?php foreach ($siswa as $sw) : ?>
                            <option value="<?= $sw->id_siswa ?>" <?= $pn->id_siswa == $sw->id_siswa ? "selected" : "" ?>><?= $sw->id_siswa ?>-<?= $sw->nama_siswa ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>Kode Kelas</label>
                    <select name="id_KJ" id="id_kj_update" class="form-control">
                        <option value="pilih Kelas"></option>
                    </select>
                    <!-- <input required type="text" name="id_KJ" id="id_KJ_update" class="form-control" onkeyup="isi_otomatis_update()" value="<?= $pn->id_KJ ?>"> -->
                    <label>Kelas</label>
                    <input required readonly type="text" class="form-control " id="Kelas_update" name="kelas">
                    </input>
                    <label>Jurusan</label>
                    <input required readonly type="text" class="form-control" id="nama_jurusan_update" name="nama_jurusan">
                    <label>NIP Guru</label>
                    <select required class="form-control form-control" id="id_guru" name="id_guru">
                        <?php foreach ($guru as $gr) : ?>
                            <option value="<?= $gr->id_guru ?>"><?= $gr->id_guru ?>-<?= $gr->nama_guru ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>Kategori Pelanggaran</label>
                    <select required class="form-control form-control" name="id_kp" id="id_kp">
                        <?php foreach ($pr as $kp) : ?>
                            <option value="<?= $kp->id_kp ?>" <?= $pn->id_kp == $kp->id_kp ? "selected" : "" ?>><?= $kp->id_kp ?>-<?= $kp->bentuk_pelanggaran ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>Kode Perekapan</label>
                    <select required class="form-control form-control" id="id_perekapan" name="id_perekapan">
                        <?php foreach ($perekapan as $rp) : ?>
                            <option value="<?= $rp->id_perekapan ?>"><?= $rp->id_perekapan ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label>Tanggal</label>
                    <input required type="date" id="tanggal" name="tanggal" class="form-control">
                    <?php echo form_error('tanggal', ' <div class="text-danger small" ml-3> ') ?>
                    <label>Catatan</label>
                    <textarea class="form-control" id="catatan" name="catatan" id="exampleFormControlTextarea1" rows="3">
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