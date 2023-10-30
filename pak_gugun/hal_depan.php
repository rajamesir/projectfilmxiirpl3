<?php
session_start();

?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Selamat Datang <?= $_SESSION['data'] ['nama'] ?>, dan role kamu disini sebagai <?= 
                    $_SESSION['data'] ['role']?>
                    </h1>
                </div>

    <h2><a href="views/V_pemilik.php">Pemilik</a> | <a href="views/V_inventory.php">Inventory</a></h2>
</body>

</html>