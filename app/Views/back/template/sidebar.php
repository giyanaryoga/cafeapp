<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>/user">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-mug-hot"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Gya Cafe</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <?php if (session()->get('role') == 1) { ?>
        <!-- Menu saat role Admin -->
        <!-- Heading -->
        <div class="sidebar-heading">
            Menu Admin
        </div>
        <!-- Nav Item - My Profile -->
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-user"></i>
                <span>My Profile</span>
            </a>
        </li>
        <!-- Nav Item - Edit Profile -->
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-user-edit"></i>
                <span>User</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-user-edit"></i>
                <span>Kategori Menu</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-user-edit"></i>
                <span>Menu</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-user-edit"></i>
                <span>Transaksi</span>
            </a>
        </li>
    <?php } ?>
    <?php if (session()->get('role') == 2) { ?>
        <!-- Menu saat role User -->
        <!-- Heading -->
        <div class="sidebar-heading">
            Menu User
        </div>
        <!-- Nav Item - My Profile -->
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-user"></i>
                <span>My Profile</span>
            </a>
        </li>
        <!-- Nav Item - Edit Profile -->
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-user-edit"></i>
                <span>Pemesanan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-user-edit"></i>
                <span>Pembayaran</span>
            </a>
        </li>
    <?php } ?>
    <!-- Logout dan toogle -->
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>