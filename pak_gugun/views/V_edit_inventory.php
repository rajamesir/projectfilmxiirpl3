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
                            <h1 align="center" class="h4 text-gray-900 mb-4">Edit Barang</h1> <hr>
                        </div>

                        <form align = 'center' action="../routers/R_barang.php?aksi=update" method="POST" class="user" enctype ="multipart/form-data">
                            <?php foreach ($barang->edit($_GET['id']) as $b){ ?>
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
                                  
                                </select>
</td></tr>
                            <?php } } ?>
                            <tr><td></td><td></td><td>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Edit" id="register" name="register">
                            </td>
                            </tr>
                                    </table>
                            
                        </form> 
                        
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

