<?= $this->extend('admin/layout') ?>

<?= $this->section('title') ?>
Tambah Katalog
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <form action="<?= url_to('input_katalog'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_katalog">Nama Katalog</label>
                        <input type="text" class="form-control" id="nama_katalog" name="nama_katalog" value="<?= old('nama_katalog'); ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="<?= old('harga'); ?>" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="editor" name="deskripsi">
                        <?= old('deskripsi'); ?>
                          </textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-select form-control" name="status" id="status" value="">
                                    <option value="" selected disabled hidden>Pilih status</option>
                                    <option value="p">Publish</option>
                                    <option value="d">Draft</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="gambar" class="d-block">Gambar</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar" value="<?= old('gambar'); ?>" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="<?= url_to('tampil_katalog'); ?>" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>