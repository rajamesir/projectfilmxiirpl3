<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?= $_SESSION['data'] ['nama'] ?><sup><?= $_SESSION['data'] ['role'] ?></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <?php if($_SESSION['data']['role'] == 'admin'){ ?>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard Admin</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
               
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="V_barang.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Table Admin</span></a>
            </li>
            <hr>
            <li class="nav-item active">
                <a class="nav-link" href="V_laporan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="V_barang.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Transaksi</span></a>
            </li>
        <?php }elseif($_SESSION['data']['role'] == 'user') {
           ?>
           <li class="nav-item active">
                <a class="nav-link" href="home_user.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="V_barang_user.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Film-Film</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="V_barang.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Contact</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="V_barang.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>About</span></a>
            </li>
            <!-- Divider -->
        <?php } ?>
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
