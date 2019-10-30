<?php
$a = 1234567890;
$b = 'abcDEF';

echo "<br>Nilai Awal : \na = $a\nb = '$b'</br>"
swap ($a, $b);
echo "<br>nilai setelah di swap : \na = '$a'\nb = $b</br>"

function swap ($&Nilai1, $&Nilai2) {
	$temp = $Nilai1;
	$Nilai1 = $Nilai2;
	$Nilai2 = $temp;

}  
?>