<html>
<head>
<title>Program Diskon</title>
</head>

<body>

<form method="post">
Besar Pembelian :
<input type="text" name="total_beli">
<input type="submit" value="Hitung Diskon">
</form>

<?php

if (isset($_POST['total_beli'])) {

$total_beli = $_POST['total_beli'];

if ($total_beli >= 200000) {
    $diskon = 0.1;
} elseif ($total_beli >= 100000) {
    $diskon = 0.05;
} else {
    $diskon = 0.01;
}

$nilai_diskon = $diskon * $total_beli;
$pembayaran = $total_beli - $nilai_diskon;

echo "<br>Diskon = $nilai_diskon";
echo "<br>Pembayaran = $pembayaran";

}

?>

</body>
</html>
