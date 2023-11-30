<?php
//modular memanggil file dari folder tampleate
$halaman = "Barang";
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
include_once '../controllers/C_barang.php';
$barang = new C_barang();


?>              
            <div class = "row">
                <div class = "col-lg-2"></div>
                <div class = "col-lg-9">
                <a href="V_tambah_barang.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                        <span class="text"><i class = "fas fa-plus fa-sm text-white-50"></i></span><span>Tambah Film</span>
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
                                            <th>Film</th>
                                            <th>Tanggal Release</th>
                                            <th>Sinopsis</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        if (empty($barang->tampil())) {
                                        ?>
                                        <tr>
                                            <td style=" border: none;"><td style=" border: none;">
                                                <p></p>
                                            </td><td align="right" style=" border: none;">
                                                <p>Film Belum Tersedia</p>
                                            </td></td>
                                        </tr>
                                        <?php    
                                        }else{
                                        $nomor = 1;

                                        foreach ($barang->tampil() as $b){

                                        ?>
        
                                        <tr>
                                            <!-- <-- yang ada di dalam $b itu nama kolom dari tabel di database -->
                                            <td><?php echo $nomor++?></td>
                                            <td align="center"><?= $b->nama_barang?></td>
                                            <td><?= $b->qty?></td>
                                            <td><a href="sinopsis/sinopsis.php?id=<?= $b->id ?>" class="btn btn-success btn-icon-split"> <span class="text"><?= $b->harga?></span></a>
                                                <a href="V_tambah_sinopsis.php?id=<?= $b->id ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                                        <span class="text"><i class = "fas fa-plus fa-sm text-white-50"></i></span><span>Tambah Sinopsis</span>
                                    </a> 
                                            </td>
                                            <td>
                                            <div style="display: flex ; justify-content: center; align-items: center;">
                                                <img src="<?= "../assets/img/" . $b->photo;?>" alt="<?= $b->nama_barang?>" width="100" height="160">
                                        </div></td>
                                            <!-- tanda tanya setelah nama file berarti mempunyai fungsi yang sama dengan get-->
                                            <td align = 'center'><a href="V_edit_barang.php?id=<?= $b->id ?> "class="btn btn-primary btn-icon-split">
                                        <span class="text">Edit</span>
                                    </a>
                                    <a onclick="return confirm('Apakah anda yakin data mau dihapus?')" href="../routers/R_barang.php?id=<?= $b->id ?>&aksi=hapus" class="btn btn-danger btn-icon-split">
                                        <span class="text">Hapus</span>
                                    </a>
                                </td>
                                
                                        </tr>
                                    
                                        <?php } } ?>
                                        
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal Release</th>
                                            <th>Sinopsis</th>
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
