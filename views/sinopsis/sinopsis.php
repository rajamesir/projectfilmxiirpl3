<?php

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
            <h1> Review Film 69 </h1>
            <p>Review Paling Akurat Sepanjang Masa</p>
        </div>

        <nav>
            <div style="display: flex">
                <ul>
                    <li><a href="https://lk21official.art/despicable-me-2010/">Tonton Filmnya Disini!</a></li>
                    <li><a href="#tutut">Pembukaan</a></li>
                    <li><a href="#maot">Sinopsis</a></li>
                    <li><a href="#hehe">Character</a></li>
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
             <h1 class="card" align="center">Sinopsis belum tersedia</h1>
             <?php   
            }else{
            foreach ($sin->tampil($_GET['id']) as $s) {
                
            
             ?><p hidden><?= $s->id_sinopsis ?></p>
             <p hidden><?= $s->id_barang ?></p>

            <article id="tutut" class="card">
            <center>
                <h2>Pembukaan</h2>
                <img src="geg.jpg" class="featured-image">
                <p><?= $s->pembukaan ?><br><br>
                <?= $s->pembukaan_lagi ?>
</p>
                <a href="#oma">Balik Ke Atas</a>
              </center>
            </article>
            <article id="maot" class="card">
            <center>
                <h2>Sinopsis Film</h2>
                <img src="tiis.jpg" class="featured-image">

                <p><?= $s->sinopsis ?><br>

<br><img src="minon.jpg" class="featured-image"><br>
<?= $s->sinopsis_lagi ?>                </p>
                <a href="#oma">Balik Ke Atas</a>
                </center>
            </article>



           
            <article id="hehehehaw" class="card">
            <center>
                <h2>Penutup</h2>
                <p>Nah, itulah review saya untuk film satu ini. Kemungkinan Anda pernah membaca atau mendengar review seperti ini, tapi percayalah, review ini dari sudut pandang saya dan <em>research</em> saya &#128077;. Demikian review saya kali ini. Mohon maaf bila ada kesalahan kata. Wassalamualaikum warohmatullahi wabarokatuh.</p>
                <a href="#oma">Balik Ke Atas</a> <br>
                <a href="komedi.html">Kembali ke menu utama</a>
              </center>
            </article>
        </div>
        <?php
    }
}
         ?>

            <aside class="aside-right">
                <article class="profile card">
                    
                    <header>
                        <h2>DETAIL</h2>

                        
                        <figure>
                        <center>
                            <img src="kaka.jpg" class="profile img">
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
                                <th>Tanggal rilis: 9 Juli 2010</th>
                                <!-- <td>GURU</td> -->
                            </tr>
                            <tr>
                                <th>Genre: Animation, Comedy, Family
</th>
                                <!-- <td>LAKI-LAKI</td> -->
                            </tr>
                            <tr>
                                <th>Durasi:
95 menit
</th>
                                <!-- <td>27</td> -->
                            </tr>
                            <tr>
                                <th>Sutradara:
Pierre Coffin, Chris Renaud
</th>
                                <!-- <td>+62</td> -->
                            </tr>
                            <tr>
                                <th>Studio:
Universal Pictures, Illumination Entertainment
</th>
                                <!-- <td>+62</td> -->
                            </tr>
                        </table>
                        </center>
                    </section>
                </article>
            </aside>

    </main>
<audio controls autoplay loop>
    <source src="y2mate.com - Despicable Me Happy Gru OST Introduction scene.mp3" type="audio/mpeg">
</audio>
    <footer>
        <marquee direction=left>Copyright goes to >----> XIRPL3-32 Wirakupling69</marquee>
    </footer>
</body>

</html>