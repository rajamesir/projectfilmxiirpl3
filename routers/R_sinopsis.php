<?php
include_once '../controllers/C_sinopsis.php';
$barang = new C_sinopsis();

if ($_GET['aksi'] == 'tambah') {
    $id_sinopsis = $_POST['id_sinopsis'];
    $id_barang = $_POST['id_barang'];
    $pembukaan = $_POST['pembukaan'];
    $pembukaan_lagi = $_POST['pembukaan_lagi'];
    //ekstensi yang diperbolehkan hanya jpg dan png
     $ekstensi_boleh = array('png','jpg','jpeg');

     $gambar = $_FILES['gambar']['name'];
 
     $y = explode('.', $gambar);

     $extend = strtolower(end($y));
    //endapatkan ukurran 
     $size = $_FILES ['gambar']['size'];

    //untuk mendapatkan tempory file yang di uplod
     $file_tempe = $_FILES['gambar']['tmp_name']; 

     //menegecek ekstensi yang di buat
     if(in_array($extend,$ekstensi_boleh) === true){

        if( $size < 1044070){
            move_uploaded_file($file_tempe,'../assets/img/'. $gambar);

            echo "Kerja bagus";

        }
        else{
            echo"EKSTENSI GAMBAR TERLALU BESAR";
            
        }
     }else{
        echo"EKSTENSI TIDAK DIPERBOLEHKAN";
     }
    $boleh = array('png','jpg','jpeg');

     $gambar_lagi = $_FILES['gambar_lagi']['name'];
 
     $z = explode('.', $gambar);

     $extended = strtolower(end($z));
    //endapatkan ukurran 
     $badag = $_FILES ['gambar_lagi']['size'];

    //untuk mendapatkan tempory file yang di uplod
     $file_tahu = $_FILES['gambar_lagi']['tmp_name']; 

     //menegecek ekstensi yang di buat
     if(in_array($extended,$boleh) === true){

        if( $badag < 1044070){
            move_uploaded_file($file_tahu,'../assets/img/'. $gambar_lagi);

            echo "Kerja bagus lagi";

        }
        else{
            echo"EKSTENSI GAMBAR TERLALU BESAR";
            
        }
     }else{
        echo"EKSTENSI TIDAK DIPERBOLEHKAN";
     }
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
            $barang->tambah_barang($id_sinopsis = 0, $id_barang, $pembukaan, $pembukaan_lagi, $gambar, $gambar_lagi, $sinopsis, $sinopsis_lagi, $poster);

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
    $id_sinopsis = $_GET['id'];

    $barang->delete($id_sinopsis);
}
?>