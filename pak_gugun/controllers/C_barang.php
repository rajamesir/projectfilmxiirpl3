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
 
         return $hasil;
     }

    public function tambah_barang($id, $nama_barang, $qty, $jenis, $nama_photo, $tgl_keluar, $id_pemilik){

        $conn = new C_koneksi();

        $sql = "INSERT INTO `barang`(`id_inventory`, `nama_barang`, `jumlah_barang`, `jenis_barang`, `tanggal_masuk`, `tanggal_keluar`, `id_pemilik`) VALUES ($id, '$nama_barang', '$qty', '$jenis', '$nama_photo', '$tgl_keluar', $id_pemilik)";
        // var_dump($sql);
        $query = mysqli_query($conn->conn(), $sql);
        

        if ($query) {
            echo "<script>alert('Data berhasil ditambahkan ke tabel');window.location='../views/V_inventory.php'</script>";
            
        }else {
            echo "Selalu Gagal ";
            
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

    public function edit($id) {
        $conn = new C_koneksi();

        $sql ="SELECT * FROM barang WHERE id_inventory = '$id'";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {

            $hasil[] = $q;
        }

        return $hasil;
    }

    public function update ($id, $nama_barang, $qty, $jenis, $nama_photo, $tgl_keluar, $id_pemilik) {

        $conn = new C_koneksi();

        $sql = "UPDATE `barang` SET `nama_barang` = '$nama_barang', `jumlah_barang` = '$qty', `jenis_barang` = '$jenis', `tanggal_masuk` = '$nama_photo', `tanggal_keluar` = '$tgl_keluar' 'id_pemilik' = '$id_pemilik' WHERE `id_inventory` = '$id'";

        $query = mysqli_query($conn->conn(), $sql);
        

        if ($query) {
            echo "<script>alert('Data berhasil ditambahkan ke tabel');window.location='../views/V_barang.php'</script>";

        }else {
            echo "Dataa gagal diubah";
        }
    }
    public function delete($id){
        $conn = new C_koneksi();
        
        $sql = "DELETE FROM barang WHERE id_inventory = '$id'";

        $query = mysqli_query($conn->conn(), $sql);

        header("Location:../views/V_inventory.php");

    }

}
?>