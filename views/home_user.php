

<?php
//session_start();
//modular memanggil file dari folder tampleate
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
include_once '../controllers/C_barang.php';
$barang = new C_barang();

?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 align="center" class="h3 mb-2 text-gray-800">Selamat Datang <?= $_SESSION['data'] ['nama'] ?>, kamu disini sebagai <?= 
                    $_SESSION['data'] ['role']?>
                    </h1>
                    
                </div>
                <br>
                <div class="card-header py-3">
                            <h3 align="center" class="m-0 font-weight-bold text-primary">Film Yang Tersedia</h3>
                        </div>
<?php foreach ($barang->tampil() as $b) {
                                                 ?>
                        <div align="center" class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <img src="../assets/img/<?=$b->photo?>" alt="<?= $b->nama_barang?>" width="150" height="240"></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$b->nama_barang?><br><br><a href="V_ulas.php?id=<?= $b->id ?> "class="btn btn-info btn-icon-split">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        <span class="text">Ulas</span></a></div>
                                    

                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
    <?php } ?>

    <br><br><br><br><br><br><br><br><br>  <br><br><br><br><br><br><br><br><br>  <br><br><br><br><br><br><br><br><br> <br><br><br><br>            <!-- /.container-fluid -->
<?php
    include_once 'template/footer.php';
?>