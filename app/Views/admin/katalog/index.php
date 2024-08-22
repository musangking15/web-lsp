<?= $this->extend('admin/layout') ?>

<?= $this->section('title') ?>
Katalog
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card"></div>
<div class="card-header">
    <a href="<?= url_to('tambah_katalog'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
</div>
<div class="card-body">
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($katalog as $row) : ?>
                <tr>
                    <td><img src="<?= base_url() ?>gambar/<?= $row['gambar']; ?>" width="100" height="100"></td>
                    <td><?= $row['nama_katalog']; ?></td>
                    <td>Rp <?= number_format($row['harga'], '0', ',', '.') ?></td>
                    <td>
                        <?php if ($row['status'] == 'p') : ?>
                            Publish
                        <?php else : ?>
                            Draft
                        <?php endif ?>
                    </td>
                    <td>
                        <a href="<?= url_to('edit_katalog', $row['katalog_id']); ?>" class="btn btn-icon btn-round btn-warning"><i class="fa fa-pen"></i></a>
                        <form action="<?= url_to('hapus_katalog', $row['katalog_id']); ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-icon btn-round btn-danger" onclick="return confirm('apakah anda yakin ?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</div>
<?= $this->endSection() ?>