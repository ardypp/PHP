<?php
$isian = $_POST['kata'];
$kata = "Kemot moba adalah pemain mobile legend dari top global tik tok.";
$karakter = strlen($isian);
$urutan = strpos($kata, $isian);
$cari=explode(" ", $isian);
$cek = count($cari);
?>
<html>
<head>
	<title>Hasil</title>
</head>
<body>
	<center>
<p>
	<?php for ($i=0; $i<$cek; $i++) {
	if ($isian == $cari[$i])
	{
		echo "<font color=green> $cari[$i]</font> ";
	}
	else{
		echo "$cari[$i]";
	}
}
?>
</p>
<table border="1" width="20%">
	<tr>
			<th colspan="2"><h1>Hasil Kata</h1></th>
	</tr>
	<tr>
		<td>Kata :</td>
		<td><?= "$isian"; ?></td>
	</tr>
	<tr>
		<td>Jumlah Karakter :</td>
		<td><?= "$karakter"; ?></td>
	</tr>
	<tr>
		<td>Urutan :</td>
	<td><?= "ke-$urutan";?></td>
	</tr>
</table>
</center>
</body>
</html>
