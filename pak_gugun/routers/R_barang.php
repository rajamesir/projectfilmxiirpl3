<?php
include_once '../controllers/C_barang.php';
$barang = new C_barang();

if ($_GET['aksi'] == 'tambah') {
    $id = $_POST['id'];
    $nama_barang = $_POST['nama'];
    $qty = $_POST['qty'];
    $jenis = $_POST['harga'];
    $nama_photo = $_POST['masuk'];
    $tgl_keluar = $_POST['keluar'];
    $id_pemilik = $_POST['pemilik'];

    $barang->tambah_barang($id = 0, $nama_barang, $qty, $jenis, $nama_photo, $tgl_keluar, $id_pemilik);
            
            
}elseif ($_GET['aksi'] == 'update') {
    $id = $_POST['id'];
    $nama_barang = $_POST['nama'];
    $qty = $_POST['qty'];
    $jenis = $_POST['harga'];
    $nama_photo = $_POST['masuk'];
    $tgl_keluar = $_POST['keluar'];
    $id_pemilik = $_POST['pemilik'];

    $barang->update($id, $nama_barang, $qty, $jenis, $nama_photo, $tgl_keluar, $id_pemilik);
   


}elseif ($_GET['aksi'] == 'hapus') {
    $id = $_GET['id'];

    $barang->delete($id);
}
?>