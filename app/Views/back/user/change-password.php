<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-10 mx-5">
            <h1 class="mb-4"><?= $title; ?></h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('pesan-gagal')) : ?>
                <div class="alert alert-warning" role="alert">
                    <?= session()->getFlashdata('pesan-gagal'); ?>
                </div>
            <?php endif; ?>
            <form action="/user/update/change-password/<?= $user['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="username" value="<?= $user['username']; ?>">
                <div class="row mb-3">
                    <label for="current_password" class="col-sm-2 col-form-label">Current Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="current_password" value="<?= old('current_password') ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('current_password'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="new_password1" class="col-sm-2 col-form-label">New Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="new_password1" value="<?= old('new_password1') ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('new_password1'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="new_password2" class="col-sm-2 col-form-label">Confirm Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="new_password2" value="<?= old('new_password2') ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('new_password2'); ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Change Password</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>