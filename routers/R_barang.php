<?php
include_once '../controllers/C_barang.php';
$barang = new C_barang();

if ($_GET['aksi'] == 'tambah') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

    $barang->tambah($id=0, $nama, $qty, $harga,'');
}
elseif ($_GET['aksi'] == 'update'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

    $barang->update($id, $nama, $qty, $harga, '');



}elseif ($_GET['aksi'] == 'hapus') {
    $id = $_GET['id'];

    $barang->delete($id);
}
?>