<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-10 mx-5">
            <h1 class="mb-4"><?= $title; ?></h1>
            <form action="/admin/user/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="username" class="col-sm-3 col-form-label">Username:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" autofocus value="<?= old('username'); ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-3 col-form-label">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" value="<?= old('password'); ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password_conf" class="col-sm-3 col-form-label">Re-Type Password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control <?= ($validation->hasError('password_conf')) ? 'is-invalid' : ''; ?>" id="password_conf" name="password_conf" value="<?= old('password_conf'); ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('password_conf'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-3 col-form-label">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" value="<?= old('email'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-3 col-form-label">Nama:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" value="<?= old('name'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="role" class="col-sm-3 col-form-label">Role:</label>
                    <div class="col-sm-8">
                        <select class="form-select form-control <?= ($validation->hasError('role')) ? 'is-invalid' : ''; ?>" aria-label="Default select example" name="role">
                            <option value="">Pilih Role</option>
                            <?php $i = 1; ?>
                            <?php foreach ($role as $role) : ?>
                                <option value="<?= $role['id'] ?>"><?= $role['name_role']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('role'); ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-lg-2">Tambah</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>