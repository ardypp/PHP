<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$a=$_POST["isi"];
$b=$_POST["dasmad1"];
$rr="<b><font color=blue>$b</b></font>";
$r2=$_POST["dasmad2"];
$rr2="<b><font color=red>$r2</b></font>";
$sebelum=str_replace($b, $rr2, $a);
$sesudah=str_replace($b, $rr, $a);
echo "Kalimat asli : <br><br>$sesudah<br><br>";

echo "Kalimat setelah diubah : <br><br>$sebelum";
?>
	<form method=post action="replace.html">
		<table border=0>
			<tr>
				<td><input type=submit value=back></td>
			</tr>
			</form>
</body>
</html>