<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>


<div class="container mt-5">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) :  ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Kontrak</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach ($karyawan as $row) :  ?>
                        <tr>
                            <th scope="row"><?= $nomor++; ?></th>
                            <td><?= $row["nama_pegawai"]; ?></td>
                            <td><?= $row["lama"]; ?></td>
                            <td><?= $row["nama_jebatan"]; ?></td>
                            <td>
                                <a href="/edit/<?= $row["id_pegawai"]; ?>" class="btn btn-sm btn-success badge">Edit</a>
                                <form action="/<?= $row["id_pegawai"]; ?>" method="POST" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-danger badge" onclick="return confirm('Yakin?')">Hapus</button>
                                </form>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="/home/create" class="btn btn-primary rounded-pill">Tambah data karyawan</a>
        </div>

    </div>
</div>


<?= $this->endSection('content'); ?>