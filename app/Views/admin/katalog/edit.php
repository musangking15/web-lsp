<?= $this->extend('admin/layout') ?>

<?= $this->section('title') ?>
Edit Katalog
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <form action="<?= url_to('update_katalog', $katalog['katalog_id']); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="katalog_id" value="<?= $katalog['katalog_id']; ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_katalog">Nama Katalog</label>
                        <input type="text" class="form-control" id="nama_katalog" name="nama_katalog" value="<?= $katalog['nama_katalog']; ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="<?= $katalog['harga']; ?>" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="editor" name="deskripsi">
                            <?= $katalog['deskripsi']; ?>
                        </textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-select form-control" name="status" id="status">
                                    <option value="p" <?php $katalog['status'] == 'p' ? 'selected' : '' ?>>
                                        Publish
                                    </option>
                                    <option value="d" <?php $katalog['status'] == 'd' ? 'selected' : '' ?>>
                                        Draft
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="gambar" class="d-block">Gambar</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar" />
                                <div class="mt-3">
                                    <img src="<?= base_url() ?>gambar/<?= $katalog['gambar']; ?>" width="100" height="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="<?= url_to('tampil_katalog'); ?>" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>


<?= $this->endSection() ?>