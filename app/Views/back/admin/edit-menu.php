<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-10 mx-5">
            <h1 class="mb-4"><?= $title; ?></h1>
            <form action="/admin/menu/update/<?= $menu['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $menu['slug']; ?>">
                <input type="hidden" name="gambarLama" value="<?= $menu['gambar']; ?>">
                <div class="row mb-3">
                    <label for="namaMenu" class="col-sm-2 col-form-label">Nama Menu:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('namaMenu')) ? 'is-invalid' : ''; ?>" id="namaMenu" name="namaMenu" autofocus value="<?= (old('namaMenu')) ? old('namaMenu') : $menu['namaMenu'] ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('namaMenu'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori:</label>
                    <div class="col-sm-10">
                        <select class="form-select form-control" aria-label="Default select example" name="id_kategori">
                            <option value="<?= $menu['id_kategori']; ?>" selected><?= $menu['id_kategori']; ?> - </option>
                            <option value="1">Food</option>
                            <option value="2">Coffee</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= (old('harga')) ? old('harga') : $menu['harga'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar:</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $menu['gambar']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" aria-describedby="inputGroupFileAddon03" onchange="previewImg()">
                            <label class="custom-file-label" for="gambar"><?= $menu['gambar']; ?></label>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="status" class="col-sm-2 col-form-label">Status:</label>
                    <div class="col-sm-10">
                        <select class="form-select form-control" aria-label="Default select example" name="id_status">
                            <option value="<?= $menu['id_status']; ?>" selected><?= $menu['id_status']; ?> - </option>
                            <option value="1">Aktif</option>
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