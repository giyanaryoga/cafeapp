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
                            <h5 class="card-title"><b>Email: </b><?= $customer['email']; ?></h5>
                            <p class="card-text"><b>Nama: </b><?= $customer['name']; ?></p>
                            <p class="card-text"><b>No HP: </b><?= $customer['no_hp']; ?></p>
                            <p class="card-text"><b>Meja: </b><?= $customer['id_meja']; ?></p>
                            <br><br>
                            <a href="/user/customer">Kembali...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>