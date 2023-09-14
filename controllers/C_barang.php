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
        $sql = "INSERT INTO barang VALUES
        ('$id','$nama','$qty','$harga','$photo')";

        $conn = new C_koneksi();

        $query = mysqli_query($conn->conn(), $sql);
        if ($query) {
            echo "Data berhasil ditambahkan ke tabel";
        }else{
            echo "Data gagal anjir";
        }
    }
    public function edit($id) {
        $conn = new C_koneksi();

        $sql ="SELECT * FROM barang WHERE id= '$id'";
        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {
            
            $hasil[] = $q;
        }

        return $hasil;
    }
    public function update ($id, $data) {

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
        $sql = "DELETE FROM Barang WHERE id = '$id'";
    }

}
?>