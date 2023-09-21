<?php

   include_once 'C_koneksi.php';
class C_barang{

    public function tampil() {

       $conn = new C_koneksi();

        $sql = "SELECT * FROM barang ORDER BY id DESC";

        $query = mysqli_query($conn->conn(),$sql);

        while ($q = mysqli_fetch_object($query)) {

            $hasil[] = $q;
        }

        return $hasil;
    }

    public function tambah($id,$nama,$qty,$harga,$photo) {

        $conn = new C_koneksi();

        $sql = "INSERT INTO barang VALUES ('$id','$nama','$qty','$harga','$photo')";

        $query = mysqli_query($conn->conn(), $sql);

        // $sql = "INSERT INTO barang VALUES ('$id','$nama','$qty','$harga','$photo')";
        // var_dump($sql);

        // $query = mysqli_query($conn->conn(), $sql);
        // var_dump($query);

        if ($query) {
            echo "<script>alert('Data berhasil ditambahkan ke tabel');window.location='../views/V_barang.php'</script>";
        }else{
            echo "<script>alert('Data gagal ditambahkan');window.location='../views/V_tambah_barang.php'</script>";
        }
    }
    public function edit($id) {
        $conn = new C_koneksi();

        $sql ="SELECT * FROM barang WHERE id = '$id'";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {

            $hasil[] = $q;
        }

        return $hasil;
    }

    public function update ($id, $nama, $qty, $harga, $photo) {

        $conn = new C_koneksi();

        $sql = "UPDATE barang SET nama_barang = '$nama', qty = '$qty', harga = '$harga', photo = '$photo' WHERE id = '$id'";

        $query = mysqli_query($conn->conn(), $sql);


        if ($query) {
            echo "<script>alert('Data berhasil diubah');window.location='../views/V_barang.php'</script>";

        }else {
            echo "Dataa gagal diubah";
        }
    }
    public function delete(){
        $conn = new C_koneksi();
        
        $sql = "DELETE FROM Barang WHERE id = '$id'";

        mysqli_query($conn->conn(), $sql);

        header("Location:../views/V_barang.php");

    }

}
?>