<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Update Jurusan

    </div>
    <?php foreach ($kj as $jrs) : ?>
        <form method="get" action="<?= base_url('jurusan/update_aksi') ?>">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="<?= base_url('jurusan'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col">
                            <label>Kode</label>

                            <input readonly type="text" name="id_KJ" class="form-control" value="<?php echo $jrs->id_KJ ?>">

                        </div>
                        <div class="col">
                            <label>Nama Jurusan</label>

                            <select name="nama_jurusan" class="form-control" value="<?php echo $jrs->nama_jurusan ?>">
                                <option> </option>
                                <option value="<?= $jrs->nama_jurusan ?>" <?= $jrs->nama_jurusan == "Ilmu Pengetahuan Alam" ? "selected" : "" ?>>Ilmu Pengetahuan Alam</option>
                                <option value="<?= $jrs->nama_jurusan ?>" <?= $jrs->nama_jurusan == "Ilmu Pengetahuan Sosial" ? "selected" : "" ?>>Ilmu Pengetahuan Sosial</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-4">
                            <label>Kelas</label>
                            <select name="Kelas" class="form-control" value="<?php echo $jrs->Kelas ?>">
                                <option value="<?= $jrs->Kelas ?>" <?= $jrs->Kelas == "10" ? "selected" : "" ?>>10</option>
                                <option value="<?= $jrs->Kelas ?>" <?= $jrs->Kelas == "11" ? "selected" : "" ?>>11</option>
                                <option value="<?= $jrs->Kelas ?>" <?= $jrs->Kelas == "12" ? "selected" : "" ?>>12</option>
                            </select>
                        </div>
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