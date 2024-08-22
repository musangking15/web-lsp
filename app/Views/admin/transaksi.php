<?= $this->extend('admin/layout') ?>

<?= $this->section('title') ?>
Transaksi
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status Pesanan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transaksi as $row) : ?>
                    <tr>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['nama_katalog']; ?></td>
                        <td><?= $row['tanggal']; ?></td>
                        <td>
                            <?php if ($row['status_pesanan'] == 2) : ?>
                                <button class="btn btn-sm btn-round btn-success" disabled>Pesanan diterima</button>
                            <?php elseif ($row['status_pesanan'] == 3) : ?>
                                <button class="btn btn-sm btn-round btn-danger" disabled>Pesanan ditolak</button>
                            <?php else : ?>
                                <button class="btn btn-sm btn-round btn-secondary" disabled>Menunggu persetujuan</button>
                            <?php endif ?>
                        </td>
                        <td>
                            <?php if ($row['status_pesanan'] == 2 || $row['status_pesanan'] == 3) : ?>
                                <form action="<?= url_to('delete', $row['transaksi_id']); ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-sm btn-outline-warning" onclick="return confirm('apakah anda yakin ?')">Delete</i></button>
                                </form>
                            <?php else : ?>
                                <form action="<?= url_to('approved', $row['transaksi_id']); ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <button class="btn btn-sm btn-outline-success" type="submit">Approved</i></button>
                                </form>
                                <form action="<?= url_to('rejected', $row['transaksi_id']); ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <button class="btn btn-sm btn-outline-danger">Rejected</i></button>
                                </form>
                                <form action="<?= url_to('delete', $row['transaksi_id']); ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-sm btn-outline-warning" onclick="return confirm('apakah anda yakin ?')">Delete</i></button>
                                </form>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>