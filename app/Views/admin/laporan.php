<?= $this->extend('admin/layout') ?>

<?= $this->section('title') ?>
Laporan
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
                    <th scope="col">Total Biaya</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transaksi as $row) : ?>
                    <tr>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['nama_katalog']; ?></td>
                        <td><?= $row['tanggal']; ?></td>
                        <td>Rp <?= number_format($row['harga'], '0', ',', '.'); ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>