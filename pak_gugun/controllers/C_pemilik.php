<?php

   include_once 'C_koneksi.php';
class C_pemilik{

    public function tampil() {

       $conn = new C_koneksi();

        $sql = "SELECT * FROM pemilik_barang ORDER BY id_pemilik DESC";
        // $sql = "SELECT * FROM barang JOIN pemilik_barang ON barang.id_pemilik = pemilik_barang.id_pemilik ORDER BY id_inventory DESC";

        $query = mysqli_query($conn->conn(),$sql);

        while ($q = mysqli_fetch_object($query)) {

            $hasil[] = $q;
        }

        return $hasil;
    }

    public function tambah_barang($id_pemilik, $nama, $jk, $tgl_lahir){

        $conn = new C_koneksi();

        $sql = "INSERT INTO `pemilik_barang`(`id_pemilik`, `nama_pemilik`, `jk_pemilik`, `tanggal_lahir`) VALUES ($id_pemilik, '$nama', '$jk', '$tgl_lahir')";
        // var_dump($sql);
        $query = mysqli_query($conn->conn(), $sql);
        

        if ($query) {
            echo "<script>alert('Berhasill!!');window.location='../views/V_pemilik.php'</script>";
            
        }else {
            echo "<script>alert('Kau masukkan apa ni??!!');window.location='../views/V_pemilik.php'</script>";
            
        }

    }

    // public function tambah($id=0,$nama_barang,$qty,$jenis,$nama_photo) {

    //     $conn = new C_koneksi();

    //     $sql = "INSERT INTO barang VALUES ($id,'$nama','$qty','$jenis','$nama_photo')";
    //     var_dump($sql);

    //    $query = mysqli_query($conn->conn(),$sql);

    //      //$sql = "INSERT INTO barang VALUES ('$id','$nama','$qty','$jenis','$photo')";
    //      //var_dump($sql);

    //     // $query = mysqli_query($conn->conn(), $sql);
    //     var_dump($query);

    //     if ($query) {
    //         echo "<script>alert('Data berhasil ditambahkan ke tabel');window.location='../views/V_barang.php'</script>";
    //     }else{
    //         echo "Selalu Gagal ";
    //     }
    // }

    public function edit($id_pemilik) {
        $conn = new C_koneksi();

        $sql ="SELECT * FROM pemilik_barang WHERE id_pemilik = '$id_pemilik'";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {

            $hasil[] = $q;
        }

        return $hasil;
    }

    public function update ($id_pemilik, $nama, $jk, $tgl_lahir) {

        $conn = new C_koneksi();

        $sql = "UPDATE `pemilik_barang` SET `nama_pemilik` = '$nama', `jk_pemilik` = '$jk', `tgl_lahir` = '$tgl_lahir' WHERE `id_pemilik` = '$id_pemilik'";

        $query = mysqli_query($conn->conn(), $sql);
        

        if ($query) {
            echo "<script>alert('Data berhasil ditambahkan ke tabel');window.location='../views/V_pemilik.php'</script>";

        }else {
            echo "Dataa gagal diubah";
        }
    }
    public function delete($id_pemilik){
        $conn = new C_koneksi();
        
        $sql = "DELETE FROM pemilik_barang WHERE `pemilik_barang`.`id_pemilik` = '$id_pemilik'";

        $query = mysqli_query($conn->conn(), $sql);

        header("Location: ../views/V_pemilik.php");

    }

}
?>