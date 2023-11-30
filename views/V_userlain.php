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
                            <h5 class="m-0 font-weight-bold text-primary">User lain juga mengulas</h6>
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
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        if (empty($review->tampil())) { ?>

                                        <tr>
                                            <td colspan = "8">
                                                <h3 align="center">Belum ada yang mengulas</h3 >
                                            </td>
                                        </tr>

                                        <?php
                                        } else {
                                        $nomor = 1;

                                        foreach ($review->tampil() as $r){


                                        ?>
        
                                        <tr>
                                            <td align = "center"><?php echo $nomor++?></td>
                                            <td align = "center"><img src="<?= "../assets/img/" . $r->photo;?>" alt="<?= $r->nama_barang?>" width="150" height="225"><br>
                                                <?= $r->nama_barang ?></td>
                                            <td align = "center"><?= $r->ulasan ?></td>
                                            <td align = "center"><?= $r->rating ?></td>
                                            <td align = "center"><img class="img-profile rounded-circle" src="../assets/img/<?=$r->photo_user ?>" width = "40"><?= $r->nama ?></td>
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
                                            
                                        </tr>
                                    </tfoot>
                                </table>
                                <hr>

                            </div>
<?php
    include_once 'template/footer.php';
?>
