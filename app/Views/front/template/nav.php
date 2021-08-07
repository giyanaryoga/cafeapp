<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="<?= base_url(); ?>">Gya Cafe</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= base_url(); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>/order">Order</a></li>
                <!-- Login ke backend -->
                <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>/login">|</a></li>
            </ul>
        </div>
    </div>
</nav>