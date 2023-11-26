<?php

   include_once 'C_koneksi.php';
class C_ulasan{

    public function tampil() {

       $conn = new C_koneksi();

        $sql = "SELECT * FROM ulasan JOIN user ON ulasan.id_user = user.id JOIN produk ON ulasan.id_barang = produk.id ORDER BY id_ulasan DESC;";

        $query = mysqli_query($conn->conn(),$sql);

        while ($q = mysqli_fetch_object($query)) {

            $hasil[] = $q;
        }if (empty($hasil)) {
            echo "";
        }else{

        return $hasil;
    }
}

    public function tambah_barang($id_ulasan, $id_barang, $id_user, $ulasan, $rating){

        $conn = new C_koneksi();
        $sql = "INSERT INTO ulasan VALUES ($id_ulasan, $id_barang, $id_user, '$ulasan', '$rating')";
        // $sql = " INSERT INTO barang VALUES ($id_ulasan, '$nama', '$qty', '$harga', '$nama_photo')";
        // var_dump($sql);
        $query = mysqli_query($conn->conn(), $sql);
        
        // var_dump($sql);
        if ($query) {
            echo "<script>alert('Data berhasil ditambahkan ke tabel');window.location='../views/V_barang_user.php'</script>";
            
        }else {
            echo "<script>alert('Ada kesalahan. Coba lagi');window.location='../views/V_barang_user.php'</script>";
            
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

    public function edit($id_ulasan) {
        $conn = new C_koneksi();

        $sql ="SELECT * FROM ulasan JOIN produk ON ulasan.id_barang = produk.id WHERE id_ulasan = '$id_ulasan'";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {
            
            $hasil[] = $q;
        }
        if (empty($hasil)) {
            echo "Kosong";
        }else {
            return $hasil;
        }
    }

    public function update ($id_ulasan, $id_barang, $id_user, $ulasan, $rating) {

        $conn = new C_koneksi();

        $sql = "UPDATE `ulasan` SET `id_barang` = '$id_barang', `id_user` = '$id_user', `ulasan` = '$ulasan', `rating` = '$rating' WHERE `id_ulasan` = '$id_ulasan'";

        $query = mysqli_query($conn->conn(), $sql);
        

        if ($query) {
            echo "<script>alert('Ulasan berhasil terupdate');window.location='../views/V_barang_user.php'</script>";
            var_dump($sql);

        }else {
            echo "<script>alert('Dataa gagal diubah');window.location='../views/V_barang_user.php'</script>";
        }
    }
    public function delete($id_ulasan){
        $conn = new C_koneksi();
        
        $sql = "DELETE FROM ulasan WHERE id_ulasan = $id_ulasan;";

        $query = mysqli_query($conn->conn(), $sql);

        header("Location:../views/V_barang_user.php");

    }
    public function tampil_user() {
        $conn = new C_koneksi();

        $sql ="SELECT * from ulasan inner join user on ulasan.id_user = user.id JOIN produk ON ulasan.id_barang = produk.id order by id_ulasan desc";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {

            $hasil[] = $q;
        }

        return $hasil;
    }
    public function tampil_film($id_barang) {
        $conn = new C_koneksi();

        $sql ="SELECT * FROM ulasan JOIN user ON ulasan.id_user = user.id JOIN produk ON ulasan.id_barang = produk.id WHERE id_barang = '$id_barang';";

        $query = mysqli_query($conn->conn(), $sql);

        while ($q = mysqli_fetch_object($query)) {
            
            $hasil[] = $q;
        }
        if (empty($hasil)) {
            echo "Kosong";
        }else {
            return $hasil;
        }
    }
}
?>