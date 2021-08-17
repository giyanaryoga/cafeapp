<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-10 mx-5">
            <h1 class="mb-4"><?= $title; ?></h1>
            <form action="/admin/user/update/<?= $user['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="password" value="<?= $user['password']; ?>">
                <div class="row mb-3">
                    <label for="username" class="col-sm-2 col-form-label">Username:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" autofocus value="<?= (old('username')) ? old('username') : $user['username'] ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="<?= (old('email')) ? old('email') : $user['email'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nama:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= (old('name')) ? old('name') : $user['name'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="role" class="col-sm-2 col-form-label">Role:</label>
                    <div class="col-sm-10">
                        <select class="form-select form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" aria-label="Default select example" name="role">
                            <option value="">Pilih Role</option>
                            <?php $i = 1; ?>
                            <?php foreach ($role as $role) : ?>
                                <option value="<?= $role['id'] ?>" <?= ($user['id_role'] == $role['id']) ? 'selected' : '' ?>><?= $role['name_role']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-lg-2">Edit</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>