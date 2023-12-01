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
                <div class="sidebar-brand-text mx-3"><?= $_SESSION['data'] ['nama'] ?> <sup><?= $_SESSION['data'] ['role'] ?></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <?php if($_SESSION['data']['role'] == 'admin') { ?>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Tables -->
            <li class="nav-item active">
             <a class="nav-link" href="V_barang.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tabel Film</span></a>
                    
            </li>  
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="V_ulasan_user.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Ulasan dari User</span></a>
                    
            </li>  

            <?php }elseif($_SESSION['data']['role'] == 'user') { ?>
            <li class="nav-item">
                <a class="nav-link" href="home_user.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="V_barang_user.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tabel Film Kita</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="V_userlain.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Ulasan User Lain</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="contact.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Contact</span></a>
            </li>
            

            <?php } ?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
