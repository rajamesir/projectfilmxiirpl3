<?php

   include_once 'C_koneksi.php';
class C_sinopsis{

    public function tampil($id_barang) {

       $conn = new C_koneksi();

        $sql = "SELECT * FROM sinopsis WHERE id_barang = '$id_barang'";

        $query = mysqli_query($conn->conn(),$sql);

        while ($q = mysqli_fetch_object($query)) {

            $hasil[] = $q;
        }
            if (empty($hasil)) {
                echo "";
            }else{
        return $hasil;
    }
    }

    public function tambah_barang($id_sinopsis, $id_barang, $pembukaan, $pembukaan_lagi, $gambar, $gambar_lagi, $sinopsis, $sinopsis_lagi, $poster){

        $conn = new C_koneksi();

        $sql = "INSERT INTO sinopsis VALUES ($id_sinopsis, $id_barang, '$pembukaan', '$pembukaan_lagi', '$gambar', '$gambar_lagi', '$sinopsis', '$sinopsis_lagi', '$poster')";
        // var_dump($sql);
        $query = mysqli_query($conn->conn(), $sql);
        var_dump($sql);

        if ($query) {
            echo "<script>alert('Sinopsis berhasil ditambahkan');window.location='../views/V_barang.php'</script>";
            
        }else {
            echo "Ajirlah";
            
        }

    }

    // public function tambah($id=0,$nama,$qty,$harga,$nama_photo) {

    //     $conn = new C_koneksi();

    //     $sql = "INSERT INTO barang VALUES ($id,'$nama','$qty','$harga','$nama_photo')";
    //     var_dump($sql);

    //    $query = mysqli_query($conn->conn(),$sql);

    //      //$sql = "INSERT INTO barang VALUES ('$id','$nama','$qty','$harga','$photo')";
    //      //var_dump($sql);

    //     // $query = mysqli_query($conn->conn(), $sql);
    //     var_dump($query);

    //     if ($query) {
    //         echo "<script>alert('Data berhasil ditambahkan ke tabel');window.location='../views/V_barang.php'</script>";
    //     }else{
    //         echo "Selalu Gagal ";
    //     }
    // }


    public function update ($id_sinopsis, $id_barang, $pembukaan, $pembukaan_lagi, $gambar, $gambar_lagi, $sinopsis, $sinopsis_lagi, $poster) {

        $conn = new C_koneksi();

        $sql = "UPDATE `sinopsis` SET `id_barang` = '$id_barang', `pembukaan` = '$pembukaan', `pembukaan_lagi` = '$pembukaan_lagi', `gambar` = '$gambar', `gambar_lagi` = '$gambar_lagi', `sinopsis` = '$sinopsis', `sinopsis_lagi` = '$sinopsis_lagi', `poster` = '$poster' WHERE `id_sinopsis` = '$id_sinopsis'";

        $query = mysqli_query($conn->conn(), $sql);
        

        if ($query) {
            echo "<script>alert('Sinopsis berhasil diubah :D');window.location='../views/sinopsis/sinopsis.php'</script>";

        }else {
            echo "<script>alert('Data gagal diubah');window.location='../views/V_barang.php'</script>";
        }
    }
    public function delete($id_sinopsis){
        $conn = new C_koneksi();
        
        $sql = "DELETE FROM sinopsis WHERE id_sinopsis = '$id_sinopsis'";

        $query = mysqli_query($conn->conn(), $sql);

        header("Location:../views/V_barang.php");

    }
    
 

}
?>