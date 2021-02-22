<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Input Data Pelanggaran

    </div>
    <form method="post" action="<?php echo base_url('pelanggaran/input_aksi') ?>">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?= base_url('pelanggaran'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>

            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col">
                        <label>Kode Pelanggaran</label>
                        <input required type="text" name="id_pelanggaran" placeholder="Masukan Kode Pelanggaran" class="form-control">
                        <?php echo form_error('id_pelanggaran', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                    <div class="col">
                        <label>NIS Siswa</label>
                        <select required class="form-control form-control" name="id_siswa">
                            <option>
                                <?php foreach ($ws as $sw) : ?>
                            <option value="<?= $sw->id_siswa ?>"><?= $sw->id_siswa ?>-<?= $sw->nama_siswa ?></option>
                        <?php endforeach; ?>
                        </select>

                        <?php echo form_error('id_siswa', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label>Nama Kelas</label>
                        <select name="kelas" class="form-control">
                            <option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </select>
                        <?php echo form_error('kelas', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                    <div class="col">
                        <label>Nama Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option>
                            <option>Ilmu Pengetahuan Alam</option>
                            <option>Ilmu Pengetahuan Sosial</option>
                        </select>
                        <?php echo form_error('jurusan', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label>NIP Guru</label>
                        <select required class="form-control form-control" name="id_guru">
                            <option>
                                <?php foreach ($rg as $gr) : ?>
                            <option value="<?= $gr->id_guru ?>"><?= $gr->id_guru ?>-<?= $gr->nama_guru ?></option>
                        <?php endforeach; ?>

                        </select>
                        <?php echo form_error('id_guru', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                    <div class="col">
                        <label>Kategori Pelanggaran </label>
                        <select required class="form-control form-control" name="id_kp">
                            <option>
                                <?php foreach ($pk as $kp) : ?>
                            <option value="<?= $kp->id_kp ?>"><?= $kp->bentuk_pelanggaran ?></option>
                        <?php endforeach; ?>
                        </select>
                        <?php echo form_error('id_kp', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label>Kode Perekapan</label>
                        <select required class="form-control form-control" name="id_perekapan">
                            <option>
                                <?php foreach ($tr as $rp) : ?>
                            <option value="<?= $rp->id_perekapan ?>"><?= $rp->id_perekapan ?>-<?= $rp->semester ?>-<?= $rp->thn_ajaran ?></option>
                        <?php endforeach; ?>
                        </select>
                        <?php echo form_error('id_perekapan', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                    <div class="col">
                        <label>Tanggal</label>
                        <input required type="date" name="tanggal" class="form-control">
                        <?php echo form_error('tanggal', ' <div class="text-danger small" ml-3> ') ?>
                    </div>

                </div>
                <div class="from-row">

                    <label>Catatan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <?php echo form_error('catatan', ' <div class="text-danger small" ml-3> ') ?>

                </div>
            </div>
            <div class="card-header py-3">
                <button type="submit" class="btn btn-outline-success">Simpan</button>
                <button type="reset" class="btn btn-outline-danger">Batal</button>
            </div>
        </div>

</div>

</form>
</div>