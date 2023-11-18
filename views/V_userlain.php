<?php
//session_start();
//modular memanggil file dari folder tampleate
$halaman = "Barang";
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
include_once '../controllers/C_barang.php';
$barang = new C_barang();
include_once '../controllers/C_ulasan.php';
$review = new C_ulasan();
?>              
<div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary">Tabel Ulasan Anda</h6>
                        </div>
                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Film</th>
                                            <th>Ulasan</th>
                                            <th>Rating</th>
                                            <th>Diulas Oleh</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        if (empty($review->tampil())) { ?>

                                        <tr>
                                            <td colspan = "8">
                                                <h1 align="center">HAHHHH KOSOOONG</h1>
                                            </td>
                                        </tr>

                                        <?php
                                        } else {
                                        $nomor = 1;

                                        foreach ($review->tampil() as $r){


                                        ?>
        
                                        <tr>
                                            <td align = "center"><?php echo $nomor++?></td>
                                            <td align = "center"><img src="<?= "../assets/img/" . $r->photo;?>" alt="<?= $r->nama_barang?>" width="150" height="195"><br>
                                                <?= $r->nama_barang ?></td>
                                            <td align = "center"><?= $r->ulasan ?></td>
                                            <td align = "center"><?= $r->rating ?></td>
                                            <td align = "center"><?= $r->nama ?></td>
                                            <td align = 'center'><a href="V_edit_inventory.php?id=<?= $r->id_ulasan ?> "class="btn btn-primary btn-icon-split">
                                        <span class="text">Edit</span>
                                    </a>
                                    <a onclick="return confirm('Apakah anda yakin data mau dihapus?')" href="../routers/R_ulasan.php?id=<?= $r->id_ulasan ?>&aksi=hapus" class="btn btn-danger btn-icon-split">
                                        <span class="text">Hapus</span>
                                    </a>
                                </td>
                                        </tr>
                                    
                                        <?php }
                                        } ?>
                                        
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                            <th>No</th>
                                            <th>Judul Film</th>
                                            <th>Ulasan</th>
                                            <th>Rating</th>
                                            <th>Diulas Oleh</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <hr>
                                <h4 align = "center"><a href="V_pemilik.php">Pemilik</a> | <a href="../index.php">Home</a></h4>
                            </div>
<?php
    include_once 'template/footer.php';
?>
