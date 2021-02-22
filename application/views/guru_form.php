<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Input Data Guru

    </div>
    <form method="post" action="<?php echo base_url('guru/input_aksi') ?>">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?= base_url('guru'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>

            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col">
                    
                        <label>NIP</label>
                        <input required type="text" name="id_guru" placeholder="Masukan NIP" class="form-control">
                        <?php echo form_error('id_guru', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                    <div class="col">
                        <label>Nama Guru</label>
                        <input type="text" name="nama_guru" placeholder="Masukan Nama Guru" class="form-control">
                        <?php echo form_error('nama_guru', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label>Alamat</label>
                        <input type="text" name="alamat" placeholder="Masukan Alamat" class="form-control">
                        <?php echo form_error('alamat', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                    <div class="col">
                        <label>Golongan</label>
                        <input type="text" name="golongan" placeholder="Masukan Golongan" class="form-control">
                        <?php echo form_error('golongan', ' <div class="text-danger small" ml-3> ') ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label>Spesialis</label>
                        <input type="text" name="spesialis" placeholder="Masukan Spesialisasi" class="form-control">
                        <?php echo form_error('spesialis', ' <div class="text-danger small" ml-3> ') ?>
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