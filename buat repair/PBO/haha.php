<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <title>Belajar PHP MySQL</title>
   <style>
   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:300px;
      margin:auto; }
   table th {
      font-weight:bold;
      padding:10px;
      color:#fff;
      background-color:#2A72BA;
      border-top:1px black solid;
      border-bottom:1px black solid;}
   table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      text-align:center; }         
   tr:nth-child(even) {
     background-color: #DFEBF8; }
   </style>
</head>
<body>
   <h3>Penyajian Data MySQL dalam bentuk tabel HTML dengan CSS</h3>
<table>
<tr>
   <th>NIM</th>
   <th>Nama</th>
   <th>Umur</th>
</tr>
<?php
$link=mysql_connect('localhost','root','');
   
if (!$link)
{
   die("Koneksi dengan MySQL gagal");
}
   
$result=mysql_query('USE woomy');
if (!$result)
{
   die("Database woomy gagal digunakan");
}
 
$result=mysql_query('SELECT * FROM toko');

while ($row=mysql_fetch_array($result))
{
   echo "<tr>";
   echo "<td>".$row['id_toko']."</td>";
   echo "<td>".$row['nama_toko']."</td>";
   echo "<td>".$row['jenis_toko']."</td>";   
   echo "</tr>";
}
?>
</table> 
</body>
</html>