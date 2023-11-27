<?php
//session_start();
//modular memanggil file dari folder tampleate
$halaman = "Barang";
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
include_once '../controllers/C_barang.php';
$sin = new C_barang;
?>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Sinopsis untuk Film</h6>
                        </div>
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambahkan Barang Anda</h1>
                        </div>

                        <form action="../routers/R_sinopsis.php?aksi=tambah" method="POST" class="user" enctype ="multipart/form-data">

                        <!--untuk menampung inputan id user -->
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    placeholder="Id" name="id_sinopsis" hidden>
                            </div>
                            <!--untuk menampung nama dari user-->
                            
                            <!--untuk menampung email dari user-->
                            <table align = 'center'>
                            <?php foreach($sin->edit($_GET['id']) as $s){ ?>        
                            <input type="text" class="form-control form-control-user"
                                    value="<?= $s->id?>" name="id_barang" hidden>
                                    
                        
                            <!--untuk menampung nama dari user-->
                          <tr>
                           <tr> <td>Film yang disinopsiskan</td><td>:</td> <td align="center"><pre><img src="<?= "../assets/img/" . $s->photo;?>" alt="<?= $s->nama_barang?>" width="150" height="195"><br><?= $s->nama_barang?></pre>
                                  <?php  } ?>
                                </td>  </tr>
                        
                            <div class="form-group"><tr>
                               <td>Tanggal Release</td><td>:</td> <td><input type="text"
                                    placeholder="Pembukaan 1" name="pembukaan"></td></tr>
                            </div>

                            <!--untuk menampung password dari user-->
                            <div class="form-group"><tr><td>Tanggal Release</td><td>:</td>
                              <td><input type="text" placeholder="Pembukaan 2" name="pembukaan_lagi"></td></tr>
                            </div>

                            <!--untuk menampung nama dari user-->
                            <!-- <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="photo"
                                    placeholder="photo" name="role" hidden>
                            </div> -->
                           
                            <div class="input-field"><tr>
                               <td>Gambar 1</td><td>:</td> <td><input type="file" value="Choose file" id="photo" name="gambar"></td></tr>
                            </div>
                            <div class="input-field"><tr>
                               <td>Gambar 2</td><td>:</td> <td><input type="file" value="Choose file" id="photo" name="gambar_lagi"></td></tr>
                            </div>
                            <div class="form-group"><tr>
                               <td>Tanggal Release</td><td>:</td> <td><input type="text"
                                    placeholder="Sinopsis 1" name="sinopsis"></td></tr>
                            </div>

                            <!--untuk menampung password dari user-->
                            <div class="form-group"><tr><td>Tanggal Release</td><td>:</td>
                              <td><input type="text" placeholder="Sinopsis 2" name="sinopsis_lagi"></td></tr>
                            </div>
                            <div class="input-field"><tr>
                               <td>Poster</td><td>:</td> <td><input type="file" value="Choose file" id="photo" name="poster"></td></tr>
                            </div>
                            </table>

                            <div class="input-field">
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Tambahkan" id="" name="tambah">
                            </div>

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

<?php
    include_once 'template/footer.php';
?>
