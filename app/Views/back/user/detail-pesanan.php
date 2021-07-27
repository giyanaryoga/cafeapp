<?= $this->extend('back/template/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="mb-4"><?= $title; ?></h2>
            <div class="mb-3" style="max-width: 540px;">
                <div class="row">
                    <!-- Menampilkan database customer, pesanan dan detail_pesan dan status pesanan -->
                    <div class="col-md-8">
                        <div class="body">
                            <!-- <h5 class="title"><b>Email: </b><?= $customer['email']; ?></h5> -->
                            <p class="text"><b>Tanggal: </b><?= $customer['name']; ?></p>
                            <p class="text"><b>Nama Konsumen: </b><?= $customer['name']; ?></p>
                            <p class="text"><b>No Meja: </b><?= $customer['name']; ?></p>
                            <p class="text"><b>Detail Pesanan: </b></p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Menu</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Harga</th>
                                        <!-- total = quantity * harga -->
                                        <th scope="col">Total</th>
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
                                            <td>total harga</td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <p class="text"><b>Status Pesanan: </b><?= $customer['no_hp']; ?></p>
                            <!-- jumlah harga = total harga dari banyaknya menu yang dipesan -->
                            <p class="text"><b>Jumlah Harga: </b><?= $customer['id_meja']; ?></p>
                            <br><br>
                            <a href="/user/pesanan">Kembali...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>