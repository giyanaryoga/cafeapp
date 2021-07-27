<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="mb-4"><?= $title; ?></h1>
            <form action="/admin/kategori/save" method="post" class="d-inline">
                <?= csrf_field(); ?>
                <div class="row">
                    <label for="name" class="col-sm-2 col-form-label">Nama Kategori:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" autofocus value="<?= old('name'); ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary my-1">Tambah</button>
            </form>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kategori as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $k['name']; ?></td>
                            <td><a href="/admin/kategori/edit/<?= $k['id']; ?>" class="btn btn-warning">Edit</a>
                                <form action="/admin/kategori/delete/<?= $k['id']; ?>" method="POST" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>