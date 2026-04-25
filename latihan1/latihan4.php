<html>
<head>
<title>Switch Hari</title>
</head>

<body>

<?php

$nama_hari = date("l");

switch ($nama_hari) {

case "Sunday":
echo "Minggu <br>";
echo "Waktu untuk istirahat";
break;

case "Monday":
echo "Senin <br>";
echo "Meeting awal minggu jam 08.00";
break;

case "Tuesday":
echo "Selasa <br>";
echo "Pembukaan Workshop Diklat";
break;

case "Wednesday":
echo "Rabu <br>";
echo "Seminar Launching Windows Vista di UKDW";
break;

case "Thursday":
echo "Kamis <br>";
echo "Pertemuan dengan Mahasiswa";
break;

case "Friday":
echo "Jum'at <br>";
echo "Jogging bersama";
break;

default:
echo "Sabtu <br>";
echo "Survey harga ke Dusit Mangga Dua";

}

?>

</body>
</html>