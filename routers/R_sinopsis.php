<?php
include_once '../controllers/C_sinopsis.php';
$barang = new C_sinopsis();

if ($_GET['aksi'] == 'tambah') {
    $id_sinopsis = $_POST['id_sinopsis'];
    $id_barang = $_POST['id_barang'];
    $pembukaan = $_POST['pembukaan'];
    $pembukaan_lagi = $_POST['pembukaan_lagi'];
    $gambar = $_POST['gambar'];
    $gambar_lagi = $_POST['gambar_lagi'];
    $sinopsis = $_POST['sinopsis'];
    $sinopsis_lagi = $_POST['sinopsis_lagi'];

     //ekstensi yang diperbolehkan hanya jpg dan png
     $ekstensi_diperbolehkan = array('png','jpg','jpeg');

     $poster = $_FILES['poster']['name'];
 
     $x = explode('.', $poster);

     $ekstensi = strtolower(end($x));
    //endapatkan ukurran 
     $ukuran = $_FILES ['poster']['size'];

    //untuk mendapatkan tempory file yang di uplod
     $file_tmp = $_FILES['poster']['tmp_name']; 

     //menegecek ekstensi yang di buat
     if(in_array($ekstensi,$ekstensi_diperbolehkan) === true){

        if( $ukuran < 1044070){
            move_uploaded_file($file_tmp,'../assets/img/'. $poster);

            // $query = $barang->tambah($id=0, $nama, $qty, $harga, $nama_photo);
            $barang->tambah_barang($id_sinopsis, $id_barang, $pembukaan, $pembukaan_lagi, $gambar, $gambar_lagi, $sinopsis, $sinopsis_lagi, $poster);

        }
        else{
            echo"EKSTENSI GAMBAR TERLALU BESAR";
            
        }
     }else{
        echo"EKSTENSI TIDAK DIPERBOLEHKAN";
     }
 
    

   
}elseif ($_GET['aksi'] == 'update') {
    $id_sinopsis = $_POST['id_sinopsis'];
    $id_barang = $_POST['id_barang'];
    $pembukaan = $_POST['pembukaan'];
    $pembukaan_lagi = $_POST['pembukaan_lagi'];
    $gambar = $_POST['gambar'];
    $gambar_lagi = $_POST['gambar_lagi'];
    $sinopsis = $_POST['sinopsis'];
    $sinopsis_lagi = $_POST['sinopsis_lagi'];

     //ekstensi yang diperbolehkan hanya jpg dan png
     $ekstensi_diperbolehkan = array('png','jpg','jpeg');

     $poster = $_FILES['poster']['name'];
 
     $x = explode('.', $poster);

     $ekstensi = strtolower(end($x));
    //endapatkan ukurran 
     $ukuran = $_FILES ['poster']['size'];

    //untuk mendapatkan tempory file yang di uplod
     $file_tmp = $_FILES['poster']['tmp_name']; 

     //menegecek ekstensi yang di buat
     if(in_array($ekstensi,$ekstensi_diperbolehkan) === true){

        if( $ukuran < 1044070){
            move_uploaded_file($file_tmp,'../assets/img/'. $poster);

            // $query = $barang->tambah($id=0, $nama, $qty, $harga, $nama_photo);
            $barang->update($id_sinopsis, $id_barang, $pembukaan, $pembukaan_lagi, $gambar, $gambar_lagi, $sinopsis, $sinopsis_lagi, $poster);

        }
        else{
            echo"EKSTENSI GAMBAR TERLALU BESAR";
            
        }
     }else{
        echo"EKSTENSI TIDAK DIPERBOLEHKAN";
     }
 
    

   
}elseif ($_GET['aksi'] == 'hapus') {
    $id_sinopsis = $_GET['id_sinopsis'];

    $barang->delete($id_sinopsis);
}
?>