<?php
//session_start();
//modular memanggil file dari folder tampleate
$halaman = "Barang";
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
include_once '../controllers/C_barang.php';
$barang = new C_barang();
?>              
            <div class = "rows-
                <a href="tambah_barang.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                        <span class="text"><i class = "fas fa-plus fa-sm text-white-50"></i></span><span>Tambah Data</span>
                                    </a>          
                <!-- /.container-fluid -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Barang</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        $nomor = 1;

                                        foreach ($barang->tampil() as $b){

                                        ?>

                                        <tr>
                                            <td><?php echo $nomor++?></td>
                                            <td><?= $b->nama_barang?></td>
                                            <td><?= $b->qty?></td>
                                            <td><?= $b->harga?></td>
                                            <td><?= $b->photo?></td>
                                            <td align = 'center'><a href="#" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </a>
                                </td>
                                        </tr>
                                    
                                        <?php } ?>
                                        
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

<?php
    include_once 'template/footer.php';
?>
