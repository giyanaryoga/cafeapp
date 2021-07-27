<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="mb-4"><?= $title; ?></h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($customer as $cst) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $cst['email']; ?></td>
                            <td><?= $cst['name']; ?></td>
                            <td><?= $cst['no_hp']; ?></td>
                            <td><a href="/user/customer/<?= $cst['id']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>