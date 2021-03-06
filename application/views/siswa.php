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
            <h6 class="m-0 font-weight-bold text-primary">Data Siswa | <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="myTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th width="11%">Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($siswa as $sw) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $sw->id_siswa; ?></td>
                                <td><?php echo $sw->nama_siswa; ?></td>
                                <td><?php echo $sw->jenis_kelamin; ?></td>
                                <td><?php echo $sw->Kelas; ?></td>
                                <td><?php echo $sw->nama_jurusan; ?></td>
                                <td>
                                    <?php echo anchor('siswa/info_siswa/' . $sw->id_siswa, '<div class="btn btn-sm btn-outline-info "><i class="fa fa-info"></i></div> ');
                                    if ($this->session->userdata('level') == 'admin') {
                                    ?>
                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editmodal<?php echo $sw->id_siswa ?>"><i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" data-siswa="<?= $sw->id_siswa; ?>" class="btn btn-outline-primary" data-toggle="modal" data-target="#kelas_modal"><i class="fas fa-book"></i>
                                        </button>
                                    <?php echo anchor('siswa/delete/' . $sw->id_siswa, '<div class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></div> ');
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
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <?php echo form_open_multipart('siswa/input_aksi'); ?>
                <div class="card shadow mb-4">
                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
                    </a>

                    <div class="collapse show" id="collapseCardExample">
                        <div class="card-body">

                            <div class="form-row">
                                <div class="col">
                                    <label>NIS</label>
                                    <input required type="text" name="id_siswa" class="form-control">

                                    <label>Nama Siswa</label>
                                    <input required type="text" name="nama_siswa" class="form-control">

                                    <label>Password</label>

                                    <input required type="password" name="password" class="form-control" id="show">
                                    <input type="checkbox" class="form-checkbox"> Show Password
                                    <br>

                                    <label>Jenis Kelamin</label>
                                    <select required class="form-control" name="jenis_kelamin">
                                        <option value="">-- Pilih Jenis Kelamin </option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>

                                    <label>Tahun Masuk</label>
                                    <select required class="form-control form-control" name="thn_masuk">
                                        <option value="">-- Pilih Tahun Masuk </option>
                                        <?php foreach ($perekapan as $pk) : ?>
                                            <option value="<?= $pk->id_perekapan ?>"><?= $pk->thn_ajaran . ' ' . $pk->semester ?></option>
                                        <?php endforeach ?>
                                    </select>

                                    <label>Kode Kelas</label>
                                    <select name="id_KJ" id="id_KJ" class="form-control">
                                        <option value="">-- Pilih Kelas </option>
                                        <?php
                                        foreach ($kelas as $valueKelas) {
                                        ?>
                                            <option data-kelas="<?= $valueKelas->Kelas ?>" data-jurusan="<?= $valueKelas->nama_jurusan ?>" value="<?= $valueKelas->id_KJ ?>"> <?= "$valueKelas->Kelas $valueKelas->nama_jurusan"  ?></option>
                                        <?php }
                                        ?>
                                    </select>

                                    <label>Nama Kelas</label>
                                    <input required readonly type="text" name="kelas" id="Kelas" class="form-control">

                                    <label>Nama Jurusan</label>
                                    <input required readonly type="text" name="nama_jurusan" id="nama_jurusan" class="form-control">

                                    <label>Nilai Rata-Rata Raport</label>
                                    <input type="text" name="nilai_raport" class="form-control">

                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control">

                                    <label>Nomor HP</label>
                                    <input type="number" name="nohp" class="form-control">

                                    <label>TTL</label>
                                    <input required type="date" name="ttl" class="form-control">

                                    <label>Tempat Lahir</label>
                                    <input required type="text" name="tempat_lahir" class="form-control">

                                    <label>Tinggal Dengan</label>
                                    <input type="text" name="tinggal" class="form-control">

                                    <label>Hoby</label>
                                    <input type="text" name="hoby" class="form-control">

                                    <label>Prestasi</label>
                                    <input type="text" name="prestasi" class="form-control">

                                    <label>Cita-cita</label>
                                    <input type="text" name="cita-cita" class="form-control">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">Data Orang Tua</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseCardExample1">
                        <div class="card-body">

                            <div class="form-row">
                                <div class="col">
                                    <label>Nama Ayah</label>
                                    <input type="text" name="nama_ayah" class="form-control">

                                    <label>Password</label>

                                    <input required type="password" name="password_ortu" class="form-control" id="show1">
                                    <input type="checkbox" class="form-checkbox"> Show Password
                                    <br>
                                    <label>Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control">

                                    <label>Alamat Orangtua</label>
                                    <input type="text" name="alamat_ortu" class="form-control">

                                    <label>Pekerjaan Ayah</label>
                                    <input type="text" name="pekerjaan_ayah" class="form-control">

                                    <label>Pendidikan Ayah</label>
                                    <input type="text" name="pendidikan_ayah" class="form-control">

                                    <label>Nomor HP Ayah</label>
                                    <input type="number" name="nohp_ayah" class="form-control">

                                    <label>Pekerjaan Ibu</label>
                                    <input type="text" name="pekerjaan_ibu" class="form-control">

                                    <label>Pendidikan Terakhir Ibu</label>
                                    <input type="text" name="pendidikan_ibu" class="form-control">

                                    <label>Nomor HP Ibu</label>
                                    <input type="number" name="nohp_ibu" class="form-control">



                                </div>
                            </div>
                        </div>
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
</div>

<div class="modal fade" id="kelas_modal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('histori_kelas/input_aksi'); ?>
                <div class="card shadow mb-4">
                    <a href="#form_kelas" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="form_kelas">
                        <h6 class="m-0 font-weight-bold text-primary">Form Kelas</h6>
                    </a>
                    <div class="collapse show" id="form_kelas">
                        <div class="card-body">
                            <input readonly type="hidden" name="nis" id="nis_kelas">
                            <input readonly type="hidden" name="id_histori" value="" id="id_histori">
                            <label>Tahun Ajaran</label>
                            <select id="tahun_ajaran" required class="form-control form-control" name="tahun_ajaran">
                                <option value="">-- Pilih Tahun Masuk </option>
                                <?php foreach ($perekapan as $pk) : ?>
                                    <option value="<?= $pk->id_perekapan ?>"><?= $pk->thn_ajaran . ' ' . $pk->semester ?></option>
                                <?php endforeach ?>
                            </select>
                            <label>Kelas</label>
                            <select name="id_KJ" id="id_kelas" class="form-control">
                                <option value="">-- Pilih Kelas </option>
                                <?php
                                foreach ($kelas as $valueKelas) {
                                ?>
                                    <option data-kelas="<?= $valueKelas->Kelas ?>" data-jurusan="<?= $valueKelas->nama_jurusan ?>" value="<?= $valueKelas->id_KJ ?>"> <?= "$valueKelas->Kelas $valueKelas->nama_jurusan"  ?></option>
                                <?php }
                                ?>
                            </select>
                            <button id="btn_simpan_kelas" type="submit" class="btn btn-primary mt-2">simpan</button>
                        </div>
                    </div>
                </div>
                <?php echo form_close() ?>

                <div class="card shadow mb-4">
                    <a href="#tbl_histori_kelas" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="tbl_histori_kelas">
                        <h6 class="m-0 font-weight-bold text-primary">Histori Kelas</h6>
                    </a>
                    <div class="collapse show" id="tbl_histori_kelas">
                        <div class="card-body">
                            <div id="tabel_histori"></div>
                        </div>
                    </div>
                </div>

                <?php echo form_open_multipart('siswa/input_kelulusan'); ?>
                <div class="card shadow mb-4">
                    <a href="#form_kelulusan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="form_kelulusan">
                        <h6 class="m-0 font-weight-bold text-primary">Form Kelulusan</h6>
                    </a>
                    <div class="collapse show" id="form_kelulusan">
                        <div class="card-body">
                            <input type="hidden" name="nis" id="nis_kelas">
                            <label>Tahun Ajaran</label>
                            <select required class="form-control form-control" id="tahun_lulus" name="tahun_lulus">
                                <option value="">-- Pilih Tahun Masuk </option>
                                <?php foreach ($perekapan as $pk) : ?>
                                    <option value="<?= $pk->id_perekapan ?>"><?= $pk->thn_ajaran . ' ' . $pk->semester ?></option>
                                <?php endforeach ?>
                            </select>
                            <button id="btn_kelulusan" type="submit" class="">Lulus</button>
                        </div>
                    </div>
                </div>
                <?php echo form_close() ?>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-outline-danger">Batal</button>
                    <button type="submit" class="btn btn-outline-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$no = 0;
foreach ($siswa as $sw) { ?>
    <div class="modal fade" id="editmodal<?php echo $sw->id_siswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Update Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <?php echo form_open_multipart('siswa/update_aksi'); ?>
                    <div class="card shadow mb-4">
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
                        </a>

                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">

                                <div class="form-row">
                                    <div class="col">
                                        <label>NIS</label>
                                        <input readonly name="id_siswa" class="form-control" value="<?php echo $sw->id_siswa ?>">

                                        <label>Nama Siswa</label>
                                        <input required type=" text" name="nama_siswa" class="form-control" value="<?php echo $sw->nama_siswa ?>">

                                        <label>Password</label>
                                        <input required type="password" name="password" class="form-control" id="show_update" value="<?php echo $sw->password ?>">
                                        <input type="checkbox" class="form-checkbox"> Show Password
                                        <br>

                                        <label>Jenis Kelamin</label>
                                        <select required class="form-control" name="jenis_kelamin" value="<?php echo $sw->jenis_kelamin ?>">

                                            <option value="Laki-Laki" <?= $sw->jenis_kelamin == "Laki-Laki" ? "selected" : "" ?>>Laki-Laki</option>
                                            <option value="Perempuan" <?= $sw->jenis_kelamin == "Perempuan" ? "selected" : "" ?>>Perempuan</option>
                                        </select>

                                        <label>Kode Kelas</label>

                                        <input required type="text" name="id_KJ" id="id_KJ" class="form-control" onkeyup="isi_otomatis()" value="<?php echo $sw->id_KJ ?>">

                                        <label>Nama Kelas</label>
                                        <input required type="text" name="kelas" id="Kelas" class="form-control" value="<?php echo $sw->Kelas ?>">

                                        <label>Nama Jurusan</label>
                                        <input required type="text" name="nama_jurusan" id="nama_jurusan" class="form-control" value="<?php echo $sw->nama_jurusan ?>">

                                        <label>Nilai Rata-Rata Raport</label>
                                        <input type="text" name="nilai_raport" class="form-control" value="<?php echo $sw->nilai_raport ?>">

                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="<?php echo $sw->alamat ?>">

                                        <label>Nomor HP</label>
                                        <input type="number" name="nohp" class="form-control" value="<?php echo $sw->nohp ?>">

                                        <label>TTL</label>
                                        <input required type="date" name="ttl" class="form-control" value="<?php echo $sw->ttl ?>">

                                        <label>Tempat Lahir</label>
                                        <input required type="text" name="tempat_lahir" class="form-control" value="<?php echo $sw->tempat_lahir ?>">

                                        <label>Tinggal Dengan</label>
                                        <input type="text" name="tinggal" class="form-control" value="<?php echo $sw->tinggal ?>">

                                        <label>Hoby</label>
                                        <input type="text" name="hoby" class="form-control" value="<?php echo $sw->hoby ?>">

                                        <label>Prestasi</label>
                                        <input type="text" name="prestasi" class="form-control" value="<?php echo $sw->prestasi ?>">

                                        <label>Cita-cita</label>
                                        <input type="text" name="cita-cita" class="form-control" value="<?php echo $sw->cita_cita ?>">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Data Orang Tua</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample1">
                            <div class="card-body">

                                <div class="form-row">
                                    <div class="col">
                                        <label>Nama Ayah</label>
                                        <input type="text" name="nama_ayah" class="form-control" value="<?php echo $sw->nama_ayah ?>">
                                        <label>Password</label>
                                        <input required type="password" name="password_ortu" class="form-control" id="show1_update" value=" <?php echo $sw->password_ortu ?>">
                                        <input type="checkbox" class="form-checkbox"> Show Password
                                        <br>


                                        <label>Nama Ibu</label>
                                        <input type="text" name="nama_ibu" class="form-control" value="<?php echo $sw->nama_ibu ?>">

                                        <label>Alamat Orangtua</label>
                                        <input type="text" name="alamat_ortu" class="form-control" value="<?php echo $sw->alamat_ortu ?>">

                                        <label>Pekerjaan Ayah</label>
                                        <input type="text" name="pekerjaan_ayah" class="form-control" value="<?php echo $sw->pekerjaan_ayah ?>">

                                        <label>Pendidikan Ayah</label>
                                        <input type="text" name="pendidikan_ayah" class="form-control" value="<?php echo $sw->pendidikan_ayah ?>">

                                        <label>Nomor HP Ayah</label>
                                        <input type="number" name="nohp_ayah" class="form-control" value="<?php echo $sw->nohp_ayah ?>">

                                        <label>Pekerjaan Ibu</label>
                                        <input type="text" name="pekerjaan_ibu" class="form-control" value="<?php echo $sw->pekerjaan_ibu ?>">

                                        <label>Pendidikan Terakhir Ibu</label>
                                        <input type="text" name="pendidikan_ibu" class="form-control" value="<?php echo $sw->pendidikan_ibu ?>">

                                        <label>Nomor HP Ibu</label>
                                        <input type="number" name="nohp_ibu" class="form-control" value="<?php echo $sw->nohp_ibu ?>">



                                    </div>
                                </div>
                            </div>
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
    </div>
<?php
    $no++;
} ?>