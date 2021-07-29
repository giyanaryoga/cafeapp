<?= $this->extend('front/template/index'); ?>

<?= $this->section('page'); ?>
<!-- Page Content-->
<div class="container px-4 px-lg-5 pt-4">
    <h1 class="text-gray-900 mt-5 text-center">Data Konsumen</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p class="pt-3">*) Mohon dapat diisi email yang aktif</p>
            <div class="card o-hidden border-1 my-4">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg text-left position-relative">
                            <div class="p-5">
                                <div class="text-center">
                                </div>
                                <form action="" method="post">
                                    <?= csrf_field() ?>
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-2 col-form-label"><b>Nama</b></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-2 col-form-label"><b>Email *</b></label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" name="email" value="<?= old('email'); ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="no_hp" class="col-sm-2 col-form-label"><b>No Hp</b></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= old('no_hp'); ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="no_kursi" class="col-sm-2 col-form-label"><b>No kursi</b></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="no_kursi" name="no_kursi" value="<?= old('no_kursi'); ?>">
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 d-sm-flex justify-content-md-end">
                                        <!-- <button type="submit" class="btn btn-primary">Ok</button> -->
                                        <a href="" class="btn btn-primary col-lg-2">Ok</a>
                                        <a href="" class="btn btn-primary col-lg-2">Clear</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>