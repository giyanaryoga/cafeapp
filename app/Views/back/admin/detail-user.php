<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="mb-4"><?= $title; ?></h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><b><?= $user['username']; ?></b></h5>
                            <p class="card-text"><b>Email: </b><?= $user['email']; ?></p>
                            <p class="card-text"><b>Nama: </b><?= $user['name']; ?></p>
                            <p class="card-text"><b>Role: </b><?= $user['id_role']; ?></p>
                            <!-- <p class="card-text"><small class="text-muted"></small></p> -->
                            <a href="/admin/user/edit/<?= $user['id']; ?>" class="btn btn-warning col-lg-2">Edit</a>
                            <form action="/admin/user/delete/<?= $user['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger col-lg-2" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
                            </form>
                            <br><br>
                            <a href="/admin/user">Kembali...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>