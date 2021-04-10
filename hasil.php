<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png"  href="img/user_male_52px.png">
	<title> Hitung Nilai Akhir</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form>
	<div class="Etang">
		<h2> Hitung Nilai Akhir</h2><br>
<?php 

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$kd = $_POST['kd'];
$matkul = $_POST['matkul'];
$tugas = $_POST['tugas'];
$quiz = $_POST['quiz'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

$nilai_tugas = $tugas * 0.2;
$nilai_quiz = $quiz * 0.2;
$nilai_uts = $uts * 0.3;
$nilai_uas = $uas * 0.3;

$nilai_akhir = $nilai_tugas + $nilai_quiz + $nilai_uts + $nilai_uas;


echo "<br>";
echo "<table width = 500>
<tr>
<td>NIM</td>
<td>:</td>
<td>$nim</td>
</tr>
<tr>
<td>Nama</td>
<td>:</td>
<td>$nama</td>
</tr>
<tr>
<td>Kelas</td>
<td>:</td>
<td>$kelas</td>
</tr>
<tr>
<td>Nama Mata Kuliah</td>
<td>:</td>
<td>$matkul</td>
</tr>
<tr>
<td>Kode Mata Kuliah</td>
<td>:</td>
<td>$kd</td>
</tr>
<tr>
<td>Nilai Akhir</td>
<td>:</td>
<td>$nilai_akhir</td>
</tr>
</table>";
?>

<div class="input-group">
	<button type="button" onclick="history.back();">Kembali</button>
</div>
</body>
</html>