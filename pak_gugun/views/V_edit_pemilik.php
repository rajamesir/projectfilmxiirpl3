<?php
//session_start();
//modular memanggil file dari folder tampleate

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

                        <form align = 'center' action="../routers/R_pemilik.php?aksi=update" method="POST" class="user" enctype ="multipart/form-data">
                            <?php foreach($pemilik->edit($_GET['id']) as $p){ ?>
                        <!--untuk menampung inputan id user -->
            
                                <input type="text" class="form-control form-control-user"
                                    placeholder="Id" name="id" value="<?= $p->id_pemilik ?>" hidden>
                                    <table align = 'center'>
                        
                            <!--untuk menampung nama dari user-->
                          <tr>
                           <tr> <td>Nama Pemilik</td><td>:</td> <td><input type="text" class="form-control form-control-user"
                                    placeholder="Nama Pemilik" name="nama_pemilik" value="<?= $p->nama_pemilik?>"></td>  </tr>
                          
                            <!--untuk menampung email dari user-->
                            
                        <tr>    <td>Jenis Kelamin</td><td>:</td> <td><select class="form-control form-control-user" id="qty"
                                    placeholder="Jumlah Barang" name="jk_pemilik">
                                    <option value = Laki-Laki>Laki-Laki</option>
                                    <option value = Perempuan>Perempuan</option>
                                    
</td></tr>

                            <!--untuk menampung password dari user-->
                            <tr><td>Tanggal Lahir</td><td>:</td> 
                                <td><input type="date" class="form-control form-control-user"
                                    placeholder="Jenis Barang" name="tgl_lahir" value="<?= $p->tanggal_lahir?>">
</td></tr>

                           

                            <tr></tr><td><td></td></td><td><div class="input-field">
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Submit" id="" name="update">
                            </div></td><hr>
                            </tr>
                                    </table>
                            <?php } ?>
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

