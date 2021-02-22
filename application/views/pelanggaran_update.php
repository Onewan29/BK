<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Update Data Pelanggaran

    </div>
    <?php foreach ($pelanggaran as $pn) : ?>
        <form method="get" action="<?= base_url('pelanggaran/update_aksi') ?>">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="<?= base_url('pelanggaran'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col">
                            <label>Kode Pelanggaran</label>

                            <input readonly required type="text" name="id_pelanggaran" class="form-control" value="<?php echo $pn->id_pelanggaran ?>">

                        </div>
                        <div class="col">
                            <label>NIS Siswa</label>

                            <select required class="form-control form-control" name="id_siswa" value="<?php echo $pn->id_siswa ?>">

                                <?php foreach ($ws as $sw) : ?>
                                    <option value="<?= $sw->id_siswa ?>" <?= $pn->id_siswa == $sw->id_siswa ? "selected" : "" ?>><?= $sw->id_siswa ?>-<?= $sw->nama_siswa ?></option>

                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label>Kelas</label>

                            <select required class="form-control form-control" name="kelas" value="<?php echo $pn->kelas ?>">
                                <option value="<?= $pn->kelas ?>" <?= $pn->kelas == "10" ? "selected" : "" ?>>10</option>
                                <option value="<?= $pn->kelas ?>" <?= $pn->kelas == "11" ? "selected" : "" ?>>11</option>
                                <option value="<?= $pn->kelas ?>" <?= $pn->kelas == "12" ? "selected" : "" ?>>12</option>


                            </select>
                        </div>
                        <div class="col">
                            <label>Jurusan</label>

                            <select required class="form-control form-control" name="jurusan" value="<?php echo $pn->jurusan ?>">
                                <option value="<?= $pn->jurusan ?>" <?= $pn->jurusan == "Ilmu Pengetahuan Alam" ? "selected" : "" ?>>Ilmu Pengetahuan Alam</option>
                                <option value="<?= $pn->jurusan ?>" <?= $pn->jurusan == "Ilmu Pengetahuan Sosial" ? "selected" : "" ?>>Ilmu Pengetahuan Sosial</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label>NIP Guru</label>

                            <select required class="form-control form-control" name="id_guru" value="<?php echo $pn->id_guru ?>">

                                <?php foreach ($rg as $gr) : ?>
                                    <option value="<?= $gr->id_guru ?>" <?= $pn->id_guru == $gr->id_guru ? "selected" : "" ?>><?= $gr->id_guru ?>-<?= $gr->nama_guru ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="col">
                            <label>Kategori Pelanggaran</label>

                            <select required class="form-control form-control" name="id_kp" value="<?php echo $pn->id_kp ?>">

                                <?php foreach ($pk as $kp) : ?>
                                    <option value="<?= $kp->id_kp ?>" <?= $pn->id_kp == $kp->id_kp ? "selected" : "" ?>><?= $kp->bentuk_pelanggaran ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label>Kode Perekapan</label>

                            <select required class="form-control form-control" name="id_perekapan" value="<?php echo $pn->id_perekapan ?>">

                                <?php foreach ($tr as $rp) : ?>
                                    <option value="<?= $rp->id_perekapan ?>" <?= $pn->id_perekapan == $rp->id_perekapan ? "selected" : "" ?>><?= $rp->id_perekapan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <label>Tanggal</label>
                            <input required type="date" name="tanggal" class="form-control" value="<?php echo $pn->tanggal ?>">
                            <?php echo form_error('tanggal', ' <div class="text-danger small" ml-3> ') ?>
                        </div>
                    </div>
                    <div class="from-row">
                        <label>Catatan</label>
                        <textarea class="form-control" name="catatan" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pn->catatan ?>">

                            </textarea>

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