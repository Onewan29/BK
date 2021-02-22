<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Update Bentuk Pelanggaran

    </div>
    <?php foreach ($kp as $krs) : ?>
        <form method="get" action="<?= base_url('kategori/update_aksi') ?>">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="<?= base_url('kategori'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="form-row">

                        <label>Kode Kategori</label>

                        <input readonly name="id_kp" class="form-control" value="<?php echo $krs->id_kp ?>">


                        <label>Nama Tatib</label>

                        <input readonly name="tatib" class="form-control" value="<?php echo $krs->tatib ?>">


                        <label>Bentuk Pelanggaran</label>

                        <input type="text" name="bentuk_pelanggaran" class="form-control" value="<?php echo $krs->bentuk_pelanggaran ?>">


                        <label>Bobot</label>
                        <input type="text" name="bobot" class="form-control" value="<?php echo $krs->bobot ?>">

                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" value="<?php echo $krs->keterangan ?>">
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
<?php endforeach; ?>
</div>