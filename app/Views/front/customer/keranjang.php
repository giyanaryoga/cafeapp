<?= $this->extend('front/template/index'); ?>

<?= $this->section('page'); ?>
<!-- Page Content-->
<div class="container px-4 px-lg-5 pt-5">
    <div class="mt-3"></div>
    <div class="row">
        <div class="col">
            <div class="d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <h3>Invoice</h3>
                </div>
                <div class="ms-auto p-2 bd-highlight">
                    <h3>Tanggal</h3>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_customer" class="col-sm-2 col-form-label"><b>Nama</b></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="name" name="name" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_kursi" class="col-sm-2 col-form-label"><b>No Kursi</b></label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="no_kursi" name="no_kursi" value="">
                </div>
            </div>
            <form action="" method="post">
                <!-- foreach -->
                <hr>
                <div class="card w-100 border-0">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="p-2 flex-fill">
                                <label for="id">1</label>
                            </div>
                            <div class="p-2 flex-fill">
                                <h5 class="card-title">Nama Menu</h5>
                                <p>Harga</p>
                            </div>
                            <div class="p-2 flex-fill">
                                <input type="text" class="form-control mb-2 w-50" placeholder="Qty">
                                <textarea class="form-control w-75" id="exampleFormControlTextarea1" rows="2" placeholder="Note"></textarea>
                            </div>
                            <div class="p-2 flex-fill">
                                <p class="card-text">Total Harga</p>
                            </div>
                            <div class="p-2 flex-fill">
                                <p class="card-text">Action</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- endforeach -->
                <button type="button" class="btn btn-primary col-lg-4">Pesan Sekarang</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>