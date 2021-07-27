<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-10 mx-5">
            <h1 class="mb-4"><?= $title; ?></h1>
            <form action="/meja/update/<?= $meja['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nomor" class="col-sm-2 col-form-label">Nomor:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nomor" name="nomor" autofocus value="<?= (old('nomor')) ? old('nomor') : $meja['nomor'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi:</label>
                    <div class="col-sm-10">
                        <input type="deskripsi" class="form-control" id="deskripsi" name="deskripsi" value="<?= (old('deskripsi')) ? old('deskripsi') : $user['deskripsi'] ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>