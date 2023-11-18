<?php
echo "Hahaha Acumalaka";
echo "<br/>";
for ($i=1; $i <= 5; $i++) { 
	echo "<tr>";
	for ($j=1; $j <= 5; $j++) { 
		echo "<td> $i, $j <td>";
	}
	echo "<tr>";
}
echo "<br/>";
$a = 15;
$b = 4;

$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";

$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

$supri = 42;
$icikiwir = 70;
$sumbul = 78;
$surya = 60;

$jumlah = $supri + $icikiwir + $sumbul;
echo "Jumlah semua kelereng ada $jumlah";
echo "<br/>";
$ciradija = 4;
$bagi = $jumlah / $ciradija;
echo "Hasil ke cika, rara, dinda, jahra masing masing $bagi";
echo "<br/>";
$m = 5 + 64;
echo "haha lihat $m";
echo "<br/>";
$t = 200;
if ($t < 50) {
	echo "ANJAY BENER";
}else if ($t > 200) {
	echo "SIP LAH BRO";
}else {
	echo "APA SALAAH!!!!!!!";
}
echo "<br/>";
echo "Apa kamu lapar?? ";
$tanya = false;
$jawab = $tanya ? "AING LAPARR AJIG!" : "Teu nuhun nggeus sebeuh";
echo "$jawab";
echo "<br/>";
$u = 70;
$u--;
echo "$u";
echo "<br/>";
$surya = 12;
$paloh = 18;
$anies = 41;
$ganjar = 29;
$kelereng = $surya + $paloh + $anies + $ganjar;
echo "Jumlah kelereng ada $kelereng<br/>";
$bagikeun = 5;
$dibagi = $kelereng / $bagikeun;
echo "kelereng yang dibagikan ke rusdi, icikiwir, acumalaka, latto, dan mixue masing masing $dibagi";
echo "<br/>";
$pop = 89 + 32;
echo "Tes tes halo aku $pop";