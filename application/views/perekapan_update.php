<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Update Perekapan

    </div>
    <?php foreach ($perekapan as $pk) : ?>
        <form method="get" action="<?= base_url('perekapan/update_aksi') ?>">
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <a href="<?= base_url('perekapan'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col">
                            <label>Kode Perekapan</label>

                            <input readonly required type="text" name="id_perekapan" class="form-control" value="<?php echo $pk->id_perekapan ?>">

                        </div>
                        <div class="col">
                            <label>Tahun Ajaran</label>
                            <input type="text" name="thn_ajaran" class="form-control" value="<?php echo $pk->thn_ajaran ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-3">
                            <select class="form-control" name="semester" value="<?php echo $pk->semester ?>">
                                <option value="<?= $pk->semester ?>" <?= $pk->semester == "Ganjil" ? "selected" : "" ?>>Ganjil</option>
                                <option value="<?= $pk->semester ?>" <?= $pk->semester == "Genap" ? "selected" : "" ?>>Genap</option>

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