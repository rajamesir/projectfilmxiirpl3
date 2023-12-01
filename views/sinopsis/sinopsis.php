<?php
session_start();
include_once '../../controllers/C_sinopsis.php';
$sin = new C_sinopsis();
include_once '../../controllers/C_barang.php';
$barang = new C_barang();
?>
<html>

<head>
    <title> Movie Review</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>


    <header>
        <div class="jumbotron">
            <h1> Base03 RPL </h1>
            <p>Web film Paling Akurat Sepanjang Masa</p>
        </div>

        <nav>
            <div style="display: flex">
                <ul>
                    <li><a href="https://lk21official.art/despicable-me-2010/">Tonton Filmnya Disini!</a></li>
                    <li><a href="#tutut">Pembukaan</a></li>
                    <li><a href="#maot">Sinopsis</a></li>
                    <li><a href="#hehehehaw">Penutup</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main id="oma">
        <div id="content">
            <?php 
            if (empty($sin->tampil($_GET['id']))) {
             ?>
             <h1 align="center">Sinopsis belum tersedia</h1>
             <h2>Merasa bosan? Sini, dengarkan lagu ini dulu<br><audio controls autoplay loop>
    <source src="../../assets/img/AUD-20231103-WA0003.mp3" type="audio/mpeg">
</audio></h2>
             <?php   
            }else{
            foreach ($sin->tampil($_GET['id']) as $s) {
                
            
             ?><p hidden><?= $s->id_sinopsis ?></p>
             <p hidden><?= $s->id_barang ?></p>

            <article id="tutut" class="card">
            <center>
                <h2>Pembukaan</h2>
                <img src="<?="../../assets/img/" . $s->poster ?>" class="featured-image">
                <p><?= $s->pembukaan ?><br><br>
                <?= $s->pembukaan_lagi ?>
</p>
              </center>
            </article>
            <article id="maot" class="card">
            <center>
                <h2>Sinopsis Film</h2>
                <img src="<?="../../assets/img/" . $s->gambar ?>" class="featured-image">

                <p><?= $s->sinopsis ?><br>

<br><img src="<?="../../assets/img/" . $s->gambar_lagi ?>" class="featured-image"><br>
<?= $s->sinopsis_lagi ?>                </p>
                
                </center>
            </article>



           
            <article id="hehehehaw" class="card">
            <center>
                <h2>Penutup</h2>
                <p>Nah, itulah review saya untuk film satu ini. Kemungkinan Anda pernah membaca atau mendengar review seperti ini, tapi percayalah, review ini dari sudut pandang saya dan <em>research</em> saya &#128077;. Demikian review saya kali ini. Mohon maaf bila ada kesalahan kata. Wassalamualaikum warohmatullahi wabarokatuh.</p>
                <br><?php if ($_SESSION['data']['role'] == 'admin') {
    ?>
     <a onclick="return confirm('Apakah anda yakin data mau dihapus?')" href="../../routers/R_sinopsis.php?id=<?=$s->id_sinopsis?>&aksi=hapus" class="btn btn-danger btn-icon-split">
                                        <span class="text"><i class = "fas fa-plus fa-sm text-white-50"></i></span><span>Hapus Sinopsis</span>
                                    </a><br><a href="../V_barang.php"class="btn btn-primary btn-icon-split">Kembali ke tabel</a><?php }else { ?>
                <a href="../V_barang_user.php"class="btn btn-primary btn-icon-split">Kembali</a><?php }
                ?>
              </center>
            </article>
        </div>
        
                                <?php }
    }

         
            if (!empty($sin->tampil($_GET['id']))) {
                
        ?>
             
            <aside class="aside-right">
                <article class="profile card">
                    
                    <header>
                        <h2>DETAIL WEB</h2>

                        
                        <figure>
                        <center>
                            <img src="../../assets/img/2.png" class="profile img">
                            <figcaption></figcaption>
                            <br>
                            </center>
                        </figure>

                        
                    </header>


                    <section>
                        <center>
                        <!-- <h3>Informasi Lainnya</h3> -->
                        <table>
                            <tr>
                                <th>Tanggal dibuat: 1 Desember 2023</th>
                                <!-- <td>GURU</td> -->
                            </tr>
                            
                            
                            <tr>
                                <th>Developer:
Anisa Rizqy Rinjany, Fasya Syabila, Yasir Mubarok, Muhammad Andri Purnama
</th>
                                <!-- <td>+62</td> -->
                            </tr>
                            <tr>
                                <th>Kelas: XII RPL 3
</th>
                                <!-- <td>+62</td> -->
                            </tr>
                        </table>
                        </center>
                    </section>
                </article>
            </aside>
<?php

}?>
    </main>

    <footer>
        <marquee direction=left>Copyright goes to >----> XIRPL3-32 Wirakupling69</marquee>
    </footer>
</body>

</html>