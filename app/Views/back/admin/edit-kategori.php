<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-10 mx-5">
            <h1 class="mb-4"><?= $title; ?></h1>
            <form action="/admin/kategori/update/<?= $kategori['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nama Kategori:</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="name" name="nama_kategori" value="<?= (old('namaKategori')) ? old('namaKategori') : $kategori['namaKategori'] ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-lg-2">Edit</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>