<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Update Konsultasi

    </div>
    <?php foreach ($konsultasi as $sk) : ?>
        <form method="get" action="<?= base_url('konsul/update_aksi') ?>">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="<?= base_url('konsul'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>
                </div>
                <div class="card-body">

                    <div class="col">
                        <label>NIS Siswa</label>
                        <input type="hidden" name="id_konsultasi" value="<?php echo $sk->id_konsultasi ?>">
                        <input readonly required type="text" name="id_siswa" class="form-control" value="<?php echo $sk->id_siswa ?>">

                    </div>

                    <div class="col">
                        <label>NIP</label>
                        <input readonly required type="text" name="id_guru" class="form-control" value="<?php echo $sk->id_guru ?>">

                    </div>

                    <div class="col">
                        <label>Kelas</label>

                        <select required name="kelas" id="kelas" class="form-control" value="<?php echo $sk->kelas ?>">
                            <option value="<?= $sk->kelas ?>" <?= $sk->kelas == "10" ? "selected" : "" ?>>10</option>
                            <option value="<?= $sk->kelas ?>" <?= $sk->kelas == "11" ? "selected" : "" ?>>11</option>
                            <option value="<?= $sk->kelas ?>" <?= $sk->kelas == "12" ? "selected" : "" ?>>12</option>

                        </select>

                    </div>

                    <div class="col">
                        <label>Jurusan</label>
                        <select required name="jurusan" class="form-control" value="<?php echo $sk->jurusan ?>">
                            <option value="<?= $sk->jurusan ?>" <?= $sk->jurusan == "Ilmu Pengetahuan Alam" ? "selected" : "" ?>>Ilmu Pengetahuan Alam</option>
                            <option value="<?= $sk->jurusan ?>" <?= $sk->jurusan == "Ilmu Pengetahuan Sosial" ? "selected" : "" ?>>Ilmu Pengetahuan Sosial</option>
                        </select>
                    </div>


                    <div class="col">
                        <label>Semester</label>
                        <select required class="form-control form-control" name="id_perekapan" value="<?php echo $sk->id_perekapan ?>">

                            <?php foreach ($perekapan as $pk) : ?>
                                <option value="<?= $pk->id_perekapan ?>"><?= $pk->semester ?></option>
                            <?php endforeach ?>


                        </select>


                    </div>

                    <div class="col">
                        <label>Tanggal</label>
                        <input required type="date" name="tanggal" class="form-control" value="<?php echo $sk->tanggal ?>">
                    </div>

                    <div class="col">
                        <label>Catatan</label>
                        <textarea class="form-control" name="catatan" id="exampleFormControlTextarea1" rows="3" value="<?php echo $sk->catatan ?>">

                            </textarea>

                    </div>
                </div>
                <div class="card-header py-3">
                    <button type="submit" class="btn btn-outline-success">Simpan</button>
                    <button type="reset" class="btn btn-outline-danger">Batal</button>
                </div>
            </div>

</div>

</form>
<?php endforeach; ?>
</div>