<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="mb-4"><?= $title; ?></h1>
            <form action="" method="post">
                <div class="row mb-3">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal:</label>
                    <div class="col-sm-10">
                        <input type="tanggal" class="form-control" id="tanggal" name="tanggal" value="<?= $title; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="invoice" class="col-sm-2 col-form-label">Invoice:</label>
                    <div class="col-sm-10">
                        <input type="invoice" class="form-control" id="invoice" name="invoice" value="<?= $title; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="customer" class="col-sm-2 col-form-label">Nama Konsumen:</label>
                    <div class="col-sm-10">
                        <input type="nama_customer" class="form-control" id="nama_customer" name="nama_customer" value="<?= $title; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_meja" class="col-sm-2 col-form-label">No Meja:</label>
                    <div class="col-sm-10">
                        <input type="nomor" class="form-control" id="nomor" name="nomor" value="<?= $title; ?>">
                    </div>
                </div>
                <!-- Detail pesanan yang dipesan -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Menu</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah Harga</th>
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
                                <td>jumlah harga</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="row mb-3">
                    <label for="total_harga" class="col-sm-2 col-form-label">Total Harga:</label>
                    <div class="col-sm-10">
                        <input type="total_harga" class="form-control" id="total_harga" name="total_harga" value="<?= $title; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ppn" class="col-sm-2 col-form-label">PPN:</label>
                    <div class="col-sm-10">
                        <input type="ppn" class="form-control" id="ppn" name="ppn" value="<?= $title; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="bayar" class="col-sm-2 col-form-label">Bayar:</label>
                    <div class="col-sm-10">
                        <input type="bayar" class="form-control" id="bayar" name="bayar" value="<?= $title; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kembalian" class="col-sm-2 col-form-label">Kembali:</label>
                    <div class="col-sm-10">
                        <input type="kembalian" class="form-control" id="kembalian" name="kembalian" value="<?= $title; ?>">
                    </div>
                </div>
                <!-- kembali ke halaman pesanan -->
                <button type="submit" class="btn btn-primary">Kembali</button>
                <!-- menyimpan atau mengedit status pesanan dan disimpan di table transaksi -->
                <button type="submit" class="btn btn-primary">Save/Paid</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>