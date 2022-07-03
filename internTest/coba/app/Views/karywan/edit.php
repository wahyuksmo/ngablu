<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>



<div class="container mt-5">
    <div class="row">
        <div class="col">
            <form action="/home/update/<?= $data["id_pegawai"]; ?>" method="POST">
                <?= csrf_field(); ?>

                <input type="hidden" name="id" value="<?= $data["id_pegawai"]; ?>">
                
                <div class="mb-3">
                    <label for="">Jabatan </label>
                    <select class="form-select" name="jabatan" required>
                        <option selected>Pilih Jabatan</option>
                        <?php foreach($karyawan as $kar) :  ?>
                        <option value="<?= $kar["id_jabatan"]; ?>"><?= $kar["nama_jebatan"]; ?></option>
                        <?php endforeach; ?>
                    </select>
    
                </div>

                <div class="mb-3">
                    <label for="">Kontrak  </label>
                    <select class="form-select" name="kontrak" required>
                        <option selected>Pilih Kontrak</option>
                        <?php foreach($kontrak as $kon) :  ?>
                        <option value="<?= $kon["id_kontrak"]; ?>"><?= $kon["lama"]; ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= $data["nama_pegawai"]; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>