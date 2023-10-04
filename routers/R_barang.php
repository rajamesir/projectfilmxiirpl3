<?php
include_once '../controllers/C_barang.php';
$barang = new C_barang();

if ($_GET['aksi'] == 'tambah') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

     //ekstensi yang diperbolehkan hanya jpg dan png
     $ekstensi_diperbolehkan = array('png','jpg','jpeg');

     $nama_photo = $_FILES['photo']['name'];
 
     $x = explode('.', $nama_photo);

     $ekstensi = strtolower(end($x));
    //endapatkan ukurran 
     $ukuran = $_FILES ['photo']['size'];

    //untuk mendapatkan tempory file yang di uplod
     $file_tmp = $_FILES['photo']['tmp_name']; 

     //menegecek ekstensi yang di buat
     if(in_array($ekstensi,$ekstensi_diperbolehkan) === true){

        if( $ukuran < 1044070){
            move_uploaded_file($file_tmp,'../assets/img/'. $nama_photo);

            // $query = $barang->tambah($id=0, $nama, $qty, $harga, $nama_photo);
            $barang->tambah_barang($id = 0, $nama, $qty, $harga, $nama_photo);

        }
        else{
            echo"EKSTENSI GAMBAR TERLALU BESAR";
            
        }
     }else{
        echo"EKSTENSI TIDAK DIPERBOLEHKAN";
     }
 
    

   
}elseif ($_GET['aksi'] == 'update') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

     //ekstensi yang diperbolehkan hanya jpg dan png
     $ekstensi_diperbolehkan = array('png','jpg','jpeg');

     $nama_photo = $_FILES['photo']['name'];
 
     $x = explode('.', $nama_photo);

     $ekstensi = strtolower(end($x));
    //endapatkan ukurran 
     $ukuran = $_FILES ['photo']['size'];

    //untuk mendapatkan tempory file yang di uplod
     $file_tmp = $_FILES['photo']['tmp_name']; 

     //menegecek ekstensi yang di buat
     if(in_array($ekstensi,$ekstensi_diperbolehkan) === true){

        if( $ukuran < 1044070){
            move_uploaded_file($file_tmp,'../assets/img/'. $nama_photo);

            // $query = $barang->tambah($id=0, $nama, $qty, $harga, $nama_photo);
            $barang->update($id, $nama, $qty, $harga, $nama_photo);

        }
        else{
            echo"EKSTENSI GAMBAR TERLALU BESAR";
            
        }
     }else{
        echo"EKSTENSI TIDAK DIPERBOLEHKAN";
     }



}elseif ($_GET['aksi'] == 'hapus') {
    $id = $_GET['id'];

    $barang->delete($id);
}
?>