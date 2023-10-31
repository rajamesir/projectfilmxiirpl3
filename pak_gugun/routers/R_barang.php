<?php
include_once '../controllers/C_barang.php';
$barang = new C_barang();

if ($_GET['aksi'] == 'tambah') {
    $id_inventory= $_POST['id'];
    $nama_barang = $_POST['nama'];
    $jumlah_barang = $_POST['qty'];
    $jenis_barang = $_POST['harga'];
    $tanggal_masuk = $_POST['masuk'];
    $tanggal_keluar = $_POST['keluar'];
    $id_pemilik = $_POST['id'];

    $barang->tambah_barang($id_inventory = 0, $nama_barang, $jumlah_barang, $jenis_barang, $tanggal_masuk, $tanggal_keluar, $id_pemilik);
            
            
}elseif ($_GET['aksi'] == 'update') {
    $id_inventory = $_POST['id'];
    $nama_barang = $_POST['nama'];
    $jumlah_barang = $_POST['qty'];
    $jenis_barang = $_POST['harga'];
    $tanggal_masuk = $_POST['masuk'];
    $tanggal_keluar = $_POST['keluar'];
    $id_pemilik = $_POST['id'];

    $barang->update($id_inventory, $nama_barang, $jumlah_barang, $jenis_barang, $tanggal_masuk, $tanggal_keluar, $id_pemilik);
   


}elseif ($_GET['aksi'] == 'hapus') {
    $id_inventory = $_GET['id'];

    $barang->delete($id_inventory);
}
?>