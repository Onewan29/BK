<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Input Konsultasi

    </div>
    <form method="post" action="<?php echo base_url('konsul/input_aksi') ?>">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?= base_url('konsul'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>
            </div>
            <div class="card-body">

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
                <div class="col">
                    <label>NIP</label>
                    <select required class="form-control form-control" name="id_guru">
                        <option>
                            <?php foreach ($rg as $gr) : ?>
                        <option value="<?= $gr->id_guru ?>"><?= $gr->id_guru ?>-<?= $gr->nama_guru ?></option>
                    <?php endforeach; ?>

                    </select>
                    <?php echo form_error('id_guru', ' <div class="text-danger small" ml-3> ') ?>
                </div>


                <div class="col">
                    <label>Kelas</label>
                    <select required class="form-control form-control" name="kelas">
                        <option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <?php echo form_error('kelas', ' <div class="text-danger small" ml-3> ') ?>
                </div>
                <div class="col">
                    <label>Jurusan</label>
                    <select required class="form-control form-control" name="jurusan">
                        <option>
                        <option>Ilmu Pengetahuan Alam</option>
                        <option>Ilmu Pengetahuan Sosial</option>
                    </select>
                    <?php echo form_error('jurusan', ' <div class="text-danger small" ml-3> ') ?>
                </div>


                <div class="col">
                    <label>Semester</label>
                    <select name="id_perekapan" class="form-control">
                        <option>
                            <?php foreach ($perekapan as $pk) : ?>
                        <option value="<?= $pk->id_perekapan ?>"><?= $pk->semester ?></option>
                    <?php endforeach ?>
                    </select>
                    <?php echo form_error('id_perekapan', ' <div class="text-danger small" ml-3> ') ?>
                </div>

                <div class="col">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                    <?php echo form_error('tanggal', ' <div class="text-danger small" ml-3> ') ?>
                </div>


                <div class="col">
                    <label>Catatan</label>
                    <textarea class="form-control" name="catatan" id="exampleFormControlTextarea1" rows="3"></textarea>

                    <?php echo form_error('catatan', ' <div class="text-danger small" ml-3> ') ?>
                </div>

            </div>
            <div class="card-header py-3">
                <button type="submit" class="btn btn-outline-success">Simpan</button>
                <button type="reset" class="btn btn-outline-danger">Batal</button>
            </div>
        </div>
</div>

</div>

</form>
</div>