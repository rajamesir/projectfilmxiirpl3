<?php
include_once '../controllers/C_pemilik.php';
$pemilik = new C_pemilik();

if ($_GET['aksi'] == 'tambah') {
    $id_pemilik = $_POST['pemilik'];
    $nama = $_POST['nama_pemilik'];
    $jk = $_POST['jk_pemilik'];
    $tgl_lahir = $_POST['tgl_lahir'];

    $pemilik->tambah_barang($id_pemilik = 0, $nama, $jk, $tgl_lahir);
            
            
}elseif ($_GET['aksi'] == 'update') {
    $id_pemilik = $_POST['pemilik'];
    $nama = $_POST['nama_pemilik'];
    $jk = $_POST['jk_pemilik'];
    $tgl_lahir = $_POST['tgl_lahir'];

    $pemilik->update($id_pemilik, $nama, $jk, $tgl_lahir);
   


}elseif ($_GET['aksi'] == 'hapus') {
    $id_pemilik = $_GET['pemilik'];

    $pemilik->delete($id_pemilik);
}
?>