<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Data Perekapan

    </div>
    <form method="post" action="<?php echo base_url('perekapan/input_aksi') ?>">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?= base_url('perekapan'); ?>" class="btn btn-outline-primary"><i class="fas fa-backward"></i> Kembali</a>
            </div>
            <div class="card-body">

                <div class="col">
                    <label>Kode Perekapan</label>
                    <input required type="text" name="id_perekapan" placeholder="Masukan Kode Perekapan" class="form-control">
                    <?php echo form_error('id_perekapan', ' <div class="text-danger small" ml-3> ') ?>
                </div>

                <div class="col">
                    <label>Tahun Ajaran</label>
                    <input type="text" name="thn_ajaran" placeholder="Masukan Tahun Ajaran" class="form-control">
                    <?php echo form_error('thn_ajaran', ' <div class="text-danger small" ml-3> ') ?>
                </div>


                <div class="col">
                    <label>Semester</label>
                    <select class="form-control" name="semester">
                        <option>
                        <option>Ganjil</option>
                        <option>Genap</option>
                    </select>
                    <?php echo form_error('semester', ' <div class="text-danger small" ml-3> ') ?>
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