<?php
echo "Hello Word";





echo "<br><br>=================================";

$nilai = 11;
$nilai2 = 12;
$nilai3 = 5;

$hasil = $nilai * $nilai2 - $nilai3;

echo "hasil dari $nilai x $nilai2 - $nilai3 adalah $hasil";

echo "<br><br>=================================";

if($hasil >= 100) {
    echo "nilai anda lebih dari 100";
} else if ($hasil < 100){
     echo "nilai anda kurang dari 100";
} else {
    echo "<br>Nilai anda kosong";
}
?>