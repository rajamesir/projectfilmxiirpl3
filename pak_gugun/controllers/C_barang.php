<?php

   include_once 'C_koneksi.php';
class C_barang{

    public function tampil() {

        $conn = new C_koneksi();
 
         // $sql = "SELECT * FROM pemilik_barang ORDER BY id_pemilik DESC";
         $sql = "SELECT * FROM barang JOIN pemilik_barang ON barang.id_pemilik = pemilik_barang.id_pemilik ORDER BY id_inventory DESC";
 
         $query = mysqli_query($conn->conn(),$sql);
 
         while ($q = mysqli_fetch_object($query)) {
 
             $hasil[] = $q;
         }


         if (empty($hasil)) {
            echo "<h2>Tabel tidak ada isinya</h2>";
     } else {
        return $hasil;
     }
    }

    public function tambah_barang($id_inventory, $nama_barang, $jumlah_barang, $jenis_barang, $tanggal_masuk, $tanggal_keluar, $id_pemilik){

        $conn = new C_koneksi();

        $sql = "INSERT INTO `barang`(`id_inventory`, `nama_barang`, `jumlah_barang`, `jenis_barang`, `tanggal_masuk`, `tanggal_keluar`, `id_pemilik`) VALUES ($id_inventory, '$nama_barang', '$jumlah_barang', '$jenis_barang', '$tanggal_masuk', '$tanggal_keluar', $id_pemilik)";
        // var_dump($sql);
        $query = mysqli_query($conn->conn(), $sql);
        

        if ($query) {
            echo "<script>alert('Data berhasil ditambahkan ke tabel');window.location='../views/V_inventory.php'</script>";
            
        }else {
            echo "Selalu Gagal ";
            
        }

    }

    // public function tambah($id=0,$nama_barang,$jumlah_barang,$jenis_barang,$tanggal_masuk) {

    //     $conn = new C_koneksi();

    //     $sql = "INSERT INTO barang VALUES ($id,'$nama','$jumlah_barang','$jenis_barang','$tanggal_masuk')";
    //     var_dump($sql);

    //    $query = mysqli_query($conn->conn(),$sql);

    //      //$sql = "INSERT INTO barang VALUES ('$id','$nama','$jumlah_barang','$jenis_barang','$photo')";
    //      //var_dump($sql);

    //     // $query = mysqli_query($conn->conn(), $sql);
    //     var_dump($query);

    //     if ($query) {
    //         echo "<script>alert('Data berhasil ditambahkan ke tabel');window.location='../views/V_barang.php'</script>";
    //     }else{
    //         echo "Selalu Gagal ";
    //     }
    // }

    public function edit($id_inventory) {
        $conn = new C_koneksi();

        $sql ="SELECT * FROM barang WHERE id_inventory = '$id_inventory'";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {

            $hasil[] = $q;
        }

        return $hasil;
    }

    public function update ($id_inventory, $nama_barang, $jumlah_barang, $jenis_barang, $tanggal_masuk, $tanggal_keluar, $id_pemilik) {

        $conn = new C_koneksi();

        $sql = "UPDATE `barang` SET `nama_barang` = '$nama_barang', `jumlah_barang` = '$jumlah_barang', `jenis_barang` = '$jenis_barang', `tanggal_masuk` = '$tanggal_masuk', `tanggal_keluar` = '$tanggal_keluar' 'id_pemilik' = '$id_pemilik' WHERE `id_inventory` = '$id_inventory'";

        $query = mysqli_query($conn->conn(), $sql);
        

        if ($query) {
            echo "<script>alert('Data berhasil ditambahkan ke tabel');window.location='../views/V_barang.php'</script>";

        }else {
            echo "Dataa gagal diubah";
        }
    }
    public function delete($id_inventory){
        $conn = new C_koneksi();
        
        $sql = "DELETE FROM barang WHERE id_inventory = '$id_inventory'";

        $query = mysqli_query($conn->conn(), $sql);

        header("Location:../views/V_inventory.php");

    }

}
?>