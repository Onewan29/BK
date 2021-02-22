<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Input Data Siswa

    </div>
    <form method="post" action="<?php echo base_url('siswa/input_aksi') ?>">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?= base_url('siswa'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- Collapsable Card Example -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">

                                <div class="form-row">
                                    <div class="col">
                                        <label>NIS</label>
                                        <input required type="text" name="id_siswa" placeholder="Masukan NIS" class="form-control">
                                        <?php echo form_error('id_siswa', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>

                                    <div class="col">
                                        <label>Nama Siswa</label>
                                        <input type="text" name="nama_siswa" placeholder="Masukan Nama Siswa" class="form-control">
                                        <?php echo form_error('nama_siswa', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option>
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                        <?php echo form_error('jenis_kelamin', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>

                                    <div class="col">
                                        <label>Kode Kelas</label>

                                        <input type="text" name="id_KJ" id="id_KJ" class="form-control" onkeyup="isi_otomatis()">
                                        <?php echo form_error('id_KJ', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label>Nama Kelas</label>
                                        <input type="text" name="kelas" id="Kelas" class="form-control">
                                        <?php echo form_error('kelas', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                    <div class="col">
                                        <label>Nama Jurusan</label>
                                        <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control">
                                        <?php echo form_error('nama_jurusan', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label>Nilai Rata-Rata Raport</label>
                                        <input type="text" name="nilai_raport" placeholder="Nilai Rata-Rata Raport" class="form-control">
                                        <?php echo form_error('nilai_raport', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                    <div class="col">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" placeholder="Masukan Alamat" class="form-control">
                                        <?php echo form_error('alamat', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label>Nomor HP</label>
                                        <input type="number" name="nohp" placeholder="Masukan Nomor HP" class="form-control">
                                        <?php echo form_error('nohp', ' <div class="text-danger small" ml-3> ') ?>

                                    </div>

                                    <div class="col">
                                        <label>TTL</label>
                                        <input type="date" name="ttl" class="form-control">
                                        <?php echo form_error('ttl', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" placeholder="Masukan Lokasi Lahir" class="form-control">
                                        <?php echo form_error('tempat_lahir', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>


                                    <div class="col">
                                        <label>Tinggal Dengan</label>
                                        <input type="text" name="tinggal" placeholder="Tinggal Bersama Siapa" class="form-control">
                                        <?php echo form_error('tinggal', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label>Hoby</label>
                                        <input type="text" name="hoby" placeholder="Masukan Hoby" class="form-control">
                                        <?php echo form_error('hoby', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>


                                    <div class="col">
                                        <label>Prestasi</label>
                                        <input type="text" name="prestasi" placeholder="Prestasi Akademik/non Akademik" class="form-control">
                                        <?php echo form_error('prestasi', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <label>Cita-cita</label>
                                        <input type="text" name="cita-cita" placeholder="Masukan cita-cita" class="form-control">
                                        <?php echo form_error('cita-cita', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>



                <div class="col-md-6">
                    <!-- Collapsable Card Example -->
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
                                        <input type="text" name="nama_ayah" placeholder="Nama Ayah" class="form-control">
                                        <?php echo form_error('nama_ayah', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                    <div class="col">
                                        <label>Nama Ibu</label>
                                        <input type="text" name="nama_ibu" placeholder="Nama Ibu" class="form-control">
                                        <?php echo form_error('nama_ibu', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label>Alamat Orangtua</label>
                                        <input type="text" name="alamat_ortu" placeholder="alamat Orangtua" class="form-control">
                                        <?php echo form_error('alamat_ortu', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                    <div class="col">
                                        <label>Pekerjaan Ayah</label>
                                        <input type="text" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" class="form-control">
                                        <?php echo form_error('pekerjaan_ayah', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col">
                                        <label>Pendidikan Ayah</label>
                                        <input type="text" name="pendidikan_ayah" placeholder="Pendidikan Terakhir Ayah" class="form-control">
                                        <?php echo form_error('pendidikan_ayah', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                    <div class="col">
                                        <label>Nomor HP Ayah</label>
                                        <input type="number" name="nohp_ayah" placeholder="Nomor HP Ayah" class="form-control">
                                        <?php echo form_error('nohp_ayah', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label>Pekerjaan Ibu</label>
                                        <input type="text" name="pekerjaan_ibu" placeholder="pekerjaan ibu" class="form-control">
                                        <?php echo form_error('Pekerjaan_ibu', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                    <div class="col">
                                        <label>Pendidikan Terakhir Ibu</label>
                                        <input type="text" name="pendidikan_ibu" placeholder="Pendidikan Terakhir Ibu" class="form-control">
                                        <?php echo form_error('pendidikan_ibu', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <label>Nomor HP Ibu</label>
                                        <input type="number" name="nohp_ibu" placeholder="Nomor HP Ibu" class="form-control">
                                        <?php echo form_error('nohp_ibu', ' <div class="text-danger small" ml-3> ') ?>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-header py-3">
                <button type="submit" class="btn btn-outline-success">Simpan</button>
                <button type="reset" class="btn btn-outline-danger">Batal</button>

            </div>
        </div>
    </form>

</div>