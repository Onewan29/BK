<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Update Data Siswa

    </div>
    <?php foreach ($siswa as $sw) : ?>
        <form method="get" action="<?= base_url('siswa/update_aksi/'); ?>">
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
                                            <input readonly type="text" name="id_siswa" class="form-control" value="<?php echo $sw->id_siswa ?>">

                                        </div>

                                        <div class="col">
                                            <label>Nama Siswa</label>
                                            <input type="text" name="nama_siswa" class="form-control" value="<?php echo $sw->nama_siswa ?>">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin" value="<?php echo $sw->jenis_kelamin ?>">
                                                <option value="<?= $sw->jenis_kelamin ?>" <?= $sw->jenis_kelamin == "Laki-Laki" ? "selected" : "" ?>>Laki-Laki</option>
                                                <option value="<?= $sw->jenis_kelamin ?>" <?= $sw->jenis_kelamin == "Perempuan" ? "selected" : "" ?>>Perempuan</option>
                                            </select>

                                        </div>

                                        <div class="col">
                                            <label>Kode Kelas</label>
                                            <input name="id_KJ" id="id_KJ" class="form-control" onkeyup="isi_otomatis()" value="<?php echo $sw->id_KJ ?>">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label>Nama Kelas</label>
                                            <input name="kelas" id="Kelas" class="form-control" value="<?php echo $sw->Kelas ?>">
                                        </div>
                                        <div class="col">
                                            <label>Nama Jurusan</label>
                                            <input name="nama_jurusan" id="nama_jurusan" class="form-control" value="<?php echo $sw->nama_jurusan ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label>Nilai Rata-Rata Raport</label>
                                            <input type="text" name="nilai_raport" class="form-control" value="<?php echo $sw->nilai_raport ?>">

                                        </div>

                                        <div class="col">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" class="form-control" value="<?php echo $sw->alamat ?>">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label>Nomor HP</label>
                                            <input type="number" name="nohp" class="form-control" value="<?php echo $sw->nohp ?>">

                                        </div>


                                        <div class="col">
                                            <label>TTL</label>
                                            <input type="date" name="ttl" class="form-control" value="<?php echo $sw->ttl ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $sw->tempat_lahir ?>">

                                        </div>


                                        <div class="col">
                                            <label>Tinggal Dengan</label>
                                            <input type="text" name="tinggal" class="form-control" value="<?php echo $sw->tinggal ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label>Hoby</label>
                                            <input type="text" name="hoby" class="form-control" value="<?php echo $sw->hoby ?>">


                                        </div>

                                        <div class="col">
                                            <label>Prestasi</label>
                                            <input type="text" name="prestasi" class="form-control" value="<?php echo $sw->prestasi ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-6">
                                            <label>Cita-cita</label>
                                            <input type="text" name="cita-cita" class="form-control" value="<?php echo $sw->cita_cita ?>">

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
                                            <input type="text" name="nama_ayah" class="form-control" value="<?php echo $sw->nama_ayah ?>">

                                        </div>
                                        <div class="col">
                                            <label>Nama Ibu</label>
                                            <input type="text" name="nama_ibu" class="form-control" value="<?php echo $sw->nama_ibu ?>">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label>Alamat Orangtua</label>
                                            <input type="text" name="alamat_ortu" class="form-control" value="<?php echo $sw->alamat_ortu ?>">

                                        </div>
                                        <div class="col">
                                            <label>Pekerjaan Ayah</label>
                                            <input type="text" name="pekerjaan_ayah" class="form-control" value="<?php echo $sw->pekerjaan_ayah ?>">

                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col">
                                            <label>Pendidikan Ayah</label>
                                            <input type="text" name="pendidikan_ayah" class="form-control" value="<?php echo $sw->pendidikan_ayah ?>">

                                        </div>
                                        <div class="col">
                                            <label>Nomor HP Ayah</label>
                                            <input type="number" name="nohp_ayah" class="form-control" value="<?php echo $sw->nohp_ayah ?>">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label>Pekerjaan Ibu</label>
                                            <input type="text" name="pekerjaan_ibu" class="form-control" value="<?php echo $sw->pekerjaan_ibu ?>">

                                        </div>
                                        <div class="col">
                                            <label>Pendidikan Terakhir Ibu</label>
                                            <input type="text" name="pendidikan_ibu" class="form-control" value="<?php echo $sw->pendidikan_ibu ?>">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-6">
                                            <label>Nomor HP Ibu</label>
                                            <input type="number" name="nohp_ibu" class="form-control" value="<?php echo $sw->nohp_ibu ?>">

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
    <?php endforeach; ?>
</div>