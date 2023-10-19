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
                            <h1 align = 'center' class="h4 text-gray-900 mb-4">Daftar Pemilik</h1>
                        </div>
                            <hr>
                        <form align = 'center' action="../routers/R_pemilik.php?aksi=tambah" method="POST" class="user" enctype ="multipart/form-data">

                        <!--untuk menampung inputan id user -->
            
                                <input type="text" class="form-control form-control-user"
                                    placeholder="Id" name="pemilik" hidden>
                                    <table align = 'center'>
                        
                            <!--untuk menampung nama dari user-->
                          <tr>
                           <tr> <td>Nama Pemilik</td><td>:</td> <td><input type="text" class="form-control form-control-user"
                                    placeholder="Nama Pemilik" name="nama_pemilik"></td>  </tr>
                          
                            <!--untuk menampung email dari user-->
                            
                        <tr>    <td>Jenis Kelamin</td><td>:</td> <td><select class="form-control form-control-user" id="qty"
                                    placeholder="Jenis Kelamin" name="jk_pemilik">
                                    <option value="apa">Pilih Jenis</option>
                                    <option value="Laki Laki">Laki laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
</td></tr>

                            <!--untuk menampung password dari user-->
                            <tr><td>Tanggal Lahir</td><td>:</td> 
                                <td><input type="date" class="form-control form-control-user"
                                    placeholder="Tanggal Lahir" name="tgl_lahir">
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
                                            <th>Nama Pemilik</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
                                        $nomor = 1;

                                        foreach ($pemilik->tampil() as $p){

                                        ?>
        
                                        <tr>
                                            <td align = "center"><?php echo $nomor++?></td>
                                            <td align = "center"><?= $p->nama_pemilik?></td>
                                            <td align = "center"><?= $p->jk_pemilik?></td>
                                            <td align = "center"><?= $p->tanggal_lahir?></td>
                                            <!-- tanda tanya setelah nama file berarti mempunyai fungsi yang sama dengan get-->
                                            <td align = 'center'><a href="V_edit_pemilik.php?id=<?= $p->id_inventory ?> "class="btn btn-primary btn-icon-split">
                                        <span class="text">Edit</span>
                                    </a>
                                    <a onclick="return confirm('Apakah anda yakin data mau dihapus?')" href="../routers/R_pemilik.php?id=<?= $p->id_pemilik ?>&aksi=hapus" class="btn btn-danger btn-icon-split">
                                        <span class="text">Hapus</span>
                                    </a>
                                </td>
                                        </tr>
                                    
                                        <?php } ?>
                                        
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama Pemilik</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <br>
                                <br>
                                <hr>
                                <hr>
                                <h4 align = "center"><a href="V_inventory.php">Inventory</a> | <a href="../index.php">Home</a></h4>
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

