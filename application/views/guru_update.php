<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Update Data Guru

    </div>
    <?php foreach ($guru as $gr) : ?>
        <form method="get" action="<?= base_url('guru/update_aksi') ?>">
            <div class="card shadow mb-4">
                <div class="card-header py-3">

                    <a href="<?= base_url('guru'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col">
                            <label>NIP</label>

                            <input readonly required type="text" name="id_guru" class="form-control" value="<?php echo $gr->id_guru ?>">

                        </div>
                        <div class="col">
                            <label>Nama Guru</label>
                            <input type="text" name="nama_guru" class="form-control" value="<?php echo $gr->nama_guru ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?php echo $gr->alamat ?>">
                        </div>
                        <div class="col">
                            <label>Golongan</label>
                            <input type="text" name="golongan" class="form-control" value="<?php echo $gr->golongan ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-4">
                            <label>Spesialis</label>
                            <input type="text" name="spesialis" class="form-control" value="<?php echo $gr->spesialis ?>">
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