<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-10 mx-5">
            <h1 class="mb-4"><?= $title; ?></h1>
            <form action="/menu/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="namaMenu" class="col-sm-2 col-form-label">Nama Menu:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('namaMenu')) ? 'is-invalid' : ''; ?>" id="namaMenu" name="namaMenu" autofocus value="<?= old('namaMenu'); ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('namaMenu'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori:</label>
                    <div class="col-sm-10">
                        <select class="form-select form-control" aria-label="Default select example" name="id_kategori">
                            <option selected>Pilih Kategori</option>
                            <option value="1">Food</option>
                            <option value="2">Coffee</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= old('harga'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="gambar" name="gambar" value="<?= old('gambar'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="status" class="col-sm-2 col-form-label">Status:</label>
                    <div class="col-sm-10">
                        <select class="form-select form-control" aria-label="Default select example" name="id_status">
                            <option selected>Pilih Status</option>
                            <option value="1">Aktif</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>