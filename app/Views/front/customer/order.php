<?= $this->extend('front/template/index'); ?>

<?= $this->section('page'); ?>
<!-- Page Content-->
<div class="container px-4 px-lg-5 pt-5">
    <div class="mt-3"></div>
    <div class="row">
        <div class="col">
            <div class="d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <h3>Selamat datang (nama customer)</h3>
                </div>
                <div class="ms-auto p-2 bd-highlight">
                    <a href="" class="btn btn-warning col-lg-2">Order (total menu yang dipesan)</a>
                </div>
            </div>
            <div class="row mb-3">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori Menu:</label>
                <div class="col-sm-9">
                    <select class="form-select form-control" aria-label="Default select example" name="id_kategori">
                        <option selected>Pilih Kategori</option>
                        <option value="1">Food</option>
                        <option value="2">Coffee</option>
                    </select>
                </div>
            </div>
            <!-- Mulai foreach -->
            <div class="row row-cols-1 row-cols-md-5 g-4 mb-2">
                <div class="col">
                    <div class="card h-100">
                        <img src="/img/default.jpg" class="card-img-top foto-menu" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Judul Menu</h6>
                            <p class="card-text">Harga</p>
                            <div class="position-relative mt-5">
                                <div class="position-absolute end-0 bottom-50">
                                    <a href="" class="btn btn-primary col-lg-2">Pilih</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- endforeach -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>