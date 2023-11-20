<?php

   include_once 'C_koneksi.php';
class C_barang{

    public function tampil() {

       $conn = new C_koneksi();

        $sql = "SELECT * FROM produk ORDER BY id DESC";

        $query = mysqli_query($conn->conn(),$sql);

        while ($q = mysqli_fetch_object($query)) {

            $hasil[] = $q;
        }

        return $hasil;
    }

    public function tambah_barang($id, $nama, $qty, $harga, $nama_photo){

        $conn = new C_koneksi();

        $sql = "INSERT INTO produk VALUES ($id, '$nama', '$qty', '$harga', '$nama_photo')";
        // var_dump($sql);
        $query = mysqli_query($conn->conn(), $sql);
        var_dump($sql);
        var_dump($query);
        if ($query) {
            echo "<script>alert('Data berhasil ditambahkan ke tabel');window.location='../views/V_barang.php'</script>";
            
        }else {
            echo "Selalu Gagal ";
            
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

    public function edit($id) {
        $conn = new C_koneksi();

        $sql ="SELECT * FROM produk WHERE id = '$id'";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {

            $hasil[] = $q;
        }

        return $hasil;
    }

    public function update ($id, $nama, $qty, $harga, $nama_photo) {

        $conn = new C_koneksi();

        $sql = "UPDATE `produk` SET `nama_barang` = '$nama', `qty` = '$qty', `harga` = '$harga', `photo` = '$nama_photo' WHERE `id` = '$id'";

        $query = mysqli_query($conn->conn(), $sql);
        

        if ($query) {
            echo "<script>alert('Data berhasil ditambahkan ke tabel');window.location='../views/V_barang.php'</script>";

        }else {
            echo "Dataa gagal diubah";
        }
    }
    public function delete($id){
        $conn = new C_koneksi();
        
        $sql = "DELETE FROM produk WHERE id = '$id'";

        $query = mysqli_query($conn->conn(), $sql);

        header("Location:../views/V_barang.php");

    }
    public function tampil_film_review() {

        $conn = new C_koneksi();
 
         $sql = "SELECT * FROM produk JOIN ulasan ON ulasan.id_barang = produk.id WHERE `id` = '$id';";
 
         $query = mysqli_query($conn->conn(),$sql);
 
         while ($q = mysqli_fetch_object($query)) {
 
             $hasil[] = $q;
         }
 
         return $hasil;
     }
 

}
?>