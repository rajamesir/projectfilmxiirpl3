<?php
include_once '../controllers/C_user.php';

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
        
         //memanggil method/fungsi register ke dalam r_login
         $login->register($id, $nama, $email, $pass, $role);
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