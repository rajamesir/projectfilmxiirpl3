<?php
include_once '../controllers/C_ulasan.php';
$review = new C_ulasan();

if ($_GET['aksi'] == 'tambah') {
    $id_ulasan = $_POST['id_ulasan'];
    $id_barang = $_POST['id_barang'];
    $id_user = $_POST['id_user'];
    $ulasan = $_POST['ulasan'];
    $rating = $_POST['rating'];

    $review->tambah_barang($id_ulasan = 0, $id_barang, $id_user, $ulasan, $rating);
    

   
}elseif ($_GET['aksi'] == 'update') {
    $id_ulasan = $_POST['id_ulasan'];
    $id_barang = $_POST['id_barang'];
    $id_user = $_POST['id_user'];
    $ulasan = $_POST['ulasan'];
    $rating = $_POST['rating'];

    $review->update($id_ulasan, $id_barang, $id_user, $ulasan, $rating);
    




}elseif ($_GET['aksi'] == 'hapus') {
    $id_ulasan = $_GET['id'];

    $review->delete($id_ulasan);
}
?>