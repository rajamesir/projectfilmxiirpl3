<?php
//session_start();
//modular memanggil file dari folder tampleate
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';

include_once '../controllers/C_barang.php';

$barang = new C_barang();
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
                            <h1 class="h4 text-gray-900 mb-4">Edit Barang</h1>
                        </div>

                        <form action="../routers/R_barang.php?aksi=update" method="POST" class="user" enctype ="multipart/form-data">
                            <?php foreach($barang->edit($_GET['id']) as $b){?>
                            <!--untuk menampung inputan id user -->
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    placeholder="Id" name="id" value ="<?= $b->id ?>" hidden>
                            </div>
                            <!--untuk menampung nama dari user-->
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    placeholder="Nama Barang" name="nama" value ="<?= $b->nama_barang ?>">
                            </div>
                            <!--untuk menampung email dari user-->
                            <div class="form-group">
                               <p>Tanggal :</p> <input type="date" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Quantity" name="qty" value ="<?= $b->qty ?>">
                            </div>

                            <!--untuk menampung password dari user-->
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="password"
                                    placeholder="Harga" name="harga"value ="<?= $b->harga ?>">
                            </div>

                            <!--untuk menampung nama dari user-->
                            <div class="form-group">
                                <input type="file" class="form-control form-control-user" id="photo"
                                    value="<?= $b->nama_photo ?>" name="photo" hidden>
                            </div>
                           
                            <div class="input-field">
                                <input type="file" value="Choose File" id="photo" name="photo">
                            </div>

                            <div class="input-field">
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Edit" id="register" name="register">
                            </div>

                            <?php 
                            }
                            ?>

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
