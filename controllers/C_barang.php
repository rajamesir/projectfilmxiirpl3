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

    public function tambah($id,$nama_barang,$harga,$photo) {
        $sql = "INSERT INTO barang VALUES
        ('$id','$nama','$sqt','$harga','$photo'";
    }
    public function edit($id) {
        $sql ="SELECT * FROM barang WHERE id= '$id'";

    }
    public function update ($id, $data) {
        $sql = "UPDATE barang SET nama_barang = '$nama', qty = '$qty', harga = '$harga', photo = '$photo' WHERE id = '$id'";
    
    }
    public function delete(){
        $sql = "DELETE FROM Barang WHERE id = '$id'";
    }

}
?>