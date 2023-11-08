<?php
include_once '../controllers/C_login.php';

$login = new C_login();

    //untuk mengecek apakah action pada form register mengirimkan aksi register
    //tanda tanya aksi klo di pindah ke role akan jadi dolar get
    if ($_GET['aksi'] == 'register') {
        
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        //hash password = enskripsi password
        //agar pass nya aman sehingga defeloper tidak mengetahui pass yg di inputkna
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $role = $_POST['role'];
        
             //ekstensi yang diperbolehkan hanya jpg dan png
     $ekstensi_diperbolehkan = array('png','jpg','jpeg');

     $photo = $_FILES['photo_user']['name'];
 
     $x = explode('.', $photo);

     $ekstensi = strtolower(end($x));
    //endapatkan ukurran 
     $ukuran = $_FILES ['photo_user']['size'];

    //untuk mendapatkan tempory file yang di uplod
     $file_tmp = $_FILES['photo_user']['tmp_name']; 

     //menegecek ekstensi yang di buat
     if(in_array($ekstensi,$ekstensi_diperbolehkan) === true){

        if( $ukuran < 1044070){
            move_uploaded_file($file_tmp,'../assets/img/'. $photo);

            // $query = $barang->tambah($id=0, $nama, $qty, $harga, $nama_photo);
            $login->register($id, $nama, $email, $pass, $role, $photo);

        }
        else{
            echo"EKSTENSI GAMBAR TERLALU BESAR";
            
        }
     }else{
        echo"EKSTENSI TIDAK DIPERBOLEHKAN";
     }
    }

    elseif ($_GET['aksi'] == 'login') {

        $email = $_POST['email'];
        $pass = $_POST['password'];

        //memanggil method login
        $login->login($email, $pass);

    } elseif ($_GET['aksi'] == 'logout') {
        $login->logout();
    }
?>