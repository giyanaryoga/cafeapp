<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-10 mx-5">
            <h1 class="mb-4"><?= $title; ?></h1>
            <form action="/role/update/<?= $role['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="name_role" class="col-sm-2 col-form-label">Nama Role:</label>
                    <div class="col-sm-10">
                        <input type="name_role" class="form-control" id="name_role" name="name_role" value="<?= (old('name_role')) ? old('name_role') : $role['name_role'] ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>