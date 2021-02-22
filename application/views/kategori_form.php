<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Input Kategori Pelanggaran

    </div>
    <form method="post" action="<?php echo base_url('kategori/input_aksi') ?>">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?= base_url('kategori'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col">
                        <label>Kode Kategori</label>
                        <input required type="text" name="id_kp" placeholder="Masukan Kode Kategori" class="form-control">
                        <?php echo form_error('id_kp', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                    <div class="col">
                        <label>Nama Tatib</label>
                        <input type="text" name="tatib" placeholder="Masukan Tatib" class="form-control">
                        <?php echo form_error('tatib', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label>Bentuk Pelanggaran</label>
                        <input type="text" name="bentuk_pelanggaran" placeholder="Masukan Bentuk Pelanggaran" class="form-control">
                        <?php echo form_error('bentuk_pelanggaran', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                    <div class="col">
                        <label>Bobot</label>
                        <input type="number" name="bobot" placeholder="Masukan Bobot" class="form-control">
                        <?php echo form_error('bobot', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" placeholder="Masukan Keterangan" class="form-control">
                        <?php echo form_error('keterangan', ' <div class="text-danger small" ml-3> ') ?>
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
</div>