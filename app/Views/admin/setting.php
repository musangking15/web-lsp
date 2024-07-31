<?= $this->extend('admin/layout') ?>

<?= $this->section('title') ?>
Setting
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <form action="<?= url_to('ubah'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="setting_id" value="<?= $setting['setting_id']; ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $setting['email']; ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="<?= $setting['phone']; ?>" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="5">
                        <?= $setting['alamat']; ?>
                          </textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="logo" class="d-block">Logo</label>
                        <input type="file" class="form-control-file" id="logo" name="logo" />
                        <div class="mt-3">
                            <img src="<?= base_url() ?>logo/<?= $setting['logo']; ?>" width="100" height="100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="<?= url_to('beranda'); ?>" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>