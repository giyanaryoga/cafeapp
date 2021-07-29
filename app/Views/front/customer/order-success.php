<?= $this->extend('front/template/index'); ?>

<?= $this->section('page'); ?>
<!-- Page Content-->
<div class="container px-4 px-lg-5 pt-5">
    <div class="mt-3"></div>
    <div class="row">
        <div class="col">
            <div class="row mb-3">
                <label for="nama_customer" class="col-sm-2 col-form-label"><b>Invoice</b></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="name" name="name" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_customer" class="col-sm-2 col-form-label"><b>Tanggal</b></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="name" name="name" value="">
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
            <div class="row mb-3">
                <label for="no_kursi" class="col-sm-2 col-form-label"><b>Total Harga</b></label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="no_kursi" name="no_kursi" value="">
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Sub Total</th>
                        <th scope="col">Note</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="position-relative mt-5">
                <div class="position-absolute end-0 bottom-50">
                    <a href="" class="btn btn-primary col-lg-2">Proccess</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>