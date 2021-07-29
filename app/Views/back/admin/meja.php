<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="mb-4"><?= $title; ?></h1>
            <form action="/admin/meja/save" method="post" class="d-inline">
                <?= csrf_field(); ?>
                <div class="row">
                    <label for="nomor" class="col-sm-2 col-form-label">Nomor Meja:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nomor" name="nomor" autofocus value="<?= old('nomor'); ?>">
                    </div>
                </div>
                <div class="row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" autofocus value="<?= old('deskripsi'); ?>">
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
                        <th scope="col">Nomor Meja</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($meja as $mj) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $mj['name']; ?></td>
                            <td><a href="/admin/meja/edit/<?= $mj['id']; ?>" class="btn btn-warning col-lg-2">Edit</a>
                                <form action="/admin/meja/delete/<?= $mj['id']; ?>" method="POST" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger col-lg-2" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
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