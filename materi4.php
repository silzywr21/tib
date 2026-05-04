<?php

function salam()
{
    echo "Assalamualaikum";
}
salam();

function tambah(int $a, int $b)
{
    $jumlah = $a + $b;
    echo $jumlah; 
}
tambah(4, 6);

?>

<form method= "POST">
    <input type="number" name="angka1">
    <input type="number" name="angka2">
    <input type="submit" name="kirim">Kirim</buttom> 
</form>

<?php

if (isset($_POST['kirim'])) {
    $angka1 = $_POST['angka1'];
    $angka1 = $_POST['angka2'];
    tambah($angka1, $angka2);
    echo "<br><br>";
    kali($angka1, $angka2);
}
?>
