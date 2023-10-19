<?php
//session_start();
//modular memanggil file dari folder tampleate

include_once '../controllers/C_barang.php';
$barang = new C_barang();
include_once '../controllers/C_pemilik.php';
$pemilik = new C_pemilik();
?>          

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 align = 'center' class="h4 text-gray-900 mb-4">Daftar Inventory</h1>
                        </div>
                            <hr>
                        <form align = 'center' action="../routers/R_barang.php?aksi=tambah" method="POST" class="user" enctype ="multipart/form-data">

                        <!--untuk menampung inputan id user -->
            
                                <input type="text" class="form-control form-control-user"
                                    placeholder="Id" name="id" hidden>
                                    <table align = 'center'>
                        
                            <!--untuk menampung nama dari user-->
                          <tr>
                           <tr> <td>Nama Barang</td><td>:</td> <td><input type="text" class="form-control form-control-user"
                                    placeholder="Nama Barang" name="nama"></td>  </tr>
                          
                            <!--untuk menampung email dari user-->
                            
                        <tr>    <td>Jumlah Barang</td><td>:</td> <td><input type="text" class="form-control form-control-user" id="qty"
                                    placeholder="Jumlah Barang" name="qty">
</td></tr>

                            <!--untuk menampung password dari user-->
                            <tr><td>Jenis Barang</td><td>:</td> 
                                <td><input type="text" class="form-control form-control-user"
                                    placeholder="Jenis Barang" name="harga">
</td></tr>

                           <tr> <td>Tanggal Masuk</td><td>:</td> 
                               <td> <input type="date" class="form-control form-control-user"
                                    placeholder="Tanggal Masuk" name="masuk">
</td></tr>

                           <tr> <td>Tanggal Keluar</td><td>:</td> 
                                <td><input type="date" class="form-control form-control-user"
                                    placeholder="Tanggal Keluar" name="keluar">
</td></tr>

                           <tr> <td>Nama Pemilik</td><td>:</td> 
                              <td>  <select class="form-control form-control-user"
                                    placeholder="Nama Pemilik" name="pemilik">
                                    <option value="?">siapa?</option>
                                    <?php foreach ($pemilik->tampil() as $p){ ?>
                                <option value="<?= $p->id_pemilik; ?>"><?= $p->nama_pemilik; ?></option>
                                  <?php  }?>
                                </select>
</td></tr>

                            <!--untuk menampung nama dari user-->
                            <!-- <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="photo"
                                    placeholder="photo" name="role" hidden>
                            </div> -->

                            <tr></tr><td><td></td></td><td><div class="input-field">
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Submit" id="" name="tambah">
                            </div></td>
                            </tr>
                        </form>
                        <hr>
                        <div class="table-responsive">
                                <table rules="all" border="1" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Jenis</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Keluar</th>
                                            <th>Nama Pemilik</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        if (empty($barang->tampil())) { ?>

                                        <tr>
                                            <td colspan = "8">
                                                <h1>HAHHHH KOSOOONG</h1>
                                            </td>
                                        </tr>

                                        <?php
                                        } else {
                                        $nomor = 1;

                                        foreach ($barang->tampil() as $b){

                                        ?>
        
                                        <tr>
                                            <td align = "center"><?php echo $nomor++?></td>
                                            <td align = "center"><?= $b->nama_barang?></td>
                                            <td align = "center"><?= $b->jumlah_barang?></td>
                                            <td align = "center"><?= $b->jenis_barang?></td>
                                            <td align = "center"><?= $b->tanggal_masuk?></td>
                                            <td align = "center"><?= $b->tanggal_keluar?></td>
                                            <td align = "center"><?= $p->nama_pemilik?></td>
                                            <!-- tanda tanya setelah nama file berarti mempunyai fungsi yang sama dengan get-->
                                            <td align = 'center'><a href="V_edit_inventory.php?id=<?= $b->id_inventory ?> "class="btn btn-primary btn-icon-split">
                                        <span class="text">Edit</span>
                                    </a>
                                    <a onclick="return confirm('Apakah anda yakin data mau dihapus?')" href="../routers/R_barang.php?id=<?= $b->id_inventory ?>&aksi=hapus" class="btn btn-danger btn-icon-split">
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
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Jenis</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Keluar</th>
                                            <th>Nama Pemilik</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <hr>
                                <h4 align = "center"><a href="V_pemilik.php">Pemilik</a> | <a href="../index.php">Home</a></h4>
                            </div>

                        
                
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../assets/js/sb-admin-2.min.js"></script>

</body>

