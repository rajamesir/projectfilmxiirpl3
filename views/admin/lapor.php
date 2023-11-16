<?php
include_once '../controllers/C_barang.php';

$barang = new C_barang();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Barang </title> 
</head>
<body>
<center><h2>Daftar Barang</h2></center>

<table border = "1" style="width: 100%;">
<thead>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>QTY</th>
    <th>Harga</th>
    <th>Gambar</th>
</tr>
</thead>
<tbody>
    <?php $no = 1; foreach ($barang->tampil() as $b) { ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $b->nama_barang ?></td>
        <td><?= $b->qty ?></td>
        <td><?= $b->harga ?></td>
        <td>
            <div style="display: flex; justify-content:center; align-items:center;">
                <img src="<?= "../assets/img/".$b->photo ?>" alt="<?= $b->nama ?>" width="100" height="160">
            </div>
        </td>
    </tr>
    <?php } ?>
</tbody>
</table>

<script>
    window.print();
</script>
</body>
</html>