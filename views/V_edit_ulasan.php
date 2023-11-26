<?php
//session_start();
//modular memanggil file dari folder tampleate
include_once 'template/header.php';

include_once 'template/topbar.php';
include_once '../controllers/C_barang.php';
$barang = new C_barang();
include_once '../controllers/C_ulasan.php';
$review = new C_ulasan();
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
                            <h1 align = 'center' class="h4 text-gray-900 mb-4">Ekspresikan Pendapatmu</h1>
                            <p>Note: Ada baiknya jika anda tonton dulu filmnya, supaya anda paham apa yang akan direview</p>
                        </div>
                            <hr>
                        <form align = 'center' action="../routers/R_ulasan.php?aksi=update" method="POST" class="user" enctype ="multipart/form-data">

                        <!--untuk menampung inputan id user -->
                            <?php foreach($review->edit($_GET['id']) as $b){ ?>
                                <input type="text" class="form-control form-control-user"
                                    placeholder="Id" name="id_ulasan" value="<?= $b->id_ulasan?>" hidden>
                                    <input type="text" class="form-control form-control-user"
                                    value="<?= $b->id_barang?>" name="id_barang" hidden>
                                    <table align = 'center'>
                        
                            <!--untuk menampung nama dari user-->
                          <tr>
                           <tr> <td>Film yang direview</td><td>:</td> <td align="center"><pre><img src="<?= "../assets/img/" . $b->photo;?>" alt="<?= $b->nama_barang?>" width="150" height="195"><br><?= $b->nama_barang?></pre>
                                  <?php  } ?>
                                </td>  </tr>
                          
                            <!--untuk menampung email dari user-->
                            
                        <tr>   <td>Ulasan Anda</td><td>:</td> <td><textarea name="ulasan" cols="20" rows="3" id="qty"
                                    placeholder="" value="<?= $b->ulasan ?>"></textarea>
</td></tr>

                            <!--untuk menampung password dari user-->
                            <tr><td>Rating Anda</td><td>:</td> 
                                <td><select
                                    placeholder="Rating" name="rating">
                                    <?php $no;
                                    for ($no=1; $no <= 10 ; $no++) { 
                                    
                                     ?>
                                    <option value="<?= $no ?> Dari 10"><?= $no ?> Dari 10</option><?php } ?>
                                </select>
</td></tr>

                           <tr>
                               <td> <input type="text" class="form-control form-control-user"
                                    placeholder="Tanggal Masuk" name="id_user" value="<?= $_SESSION['data']['id'] ?>" hidden>
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
