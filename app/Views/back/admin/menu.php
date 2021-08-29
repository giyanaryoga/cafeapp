<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="mb-4"><?= $title; ?></h1>
            <!-- searching menu berdasarkan kategori menggunakan select input-->
            <div class="input-group">
                <select class="custom-select" id="search-kategori">
                    <option selected>Cari berdasarkan kategori...</option>
                    <option value="1">Coffee</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Cari</button>
                </div>
            </div>
            <a href="/admin/menu/create" class="btn btn-primary my-1 col-lg-2">Tambah data</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (3 * ($current - 1)); ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $m['gambar']; ?>" class="foto"></td>
                            <td><?= $m['namaMenu']; ?></td>
                            <td><?= $m['harga']; ?></td>
                            <td><a href="/admin/menu/<?= $m['slug']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('menu', 'pagination'); ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>