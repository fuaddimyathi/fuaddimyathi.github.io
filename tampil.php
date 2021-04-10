<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png"  href="img/user_male_52px.png">
	<title>Hitung Nilai Akhir</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form action="hasil.php" method="post">
<form>
	<div class="Etang">
		<h2>Hitung Nilai Akhir</h2><br>
		<form>
			<table>
				<tr>
					<td>NIM</td>
					<td><input type="text" name="nim" size="18" required=""></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" size="30" required=""></td>
				</tr>
					<td>Kelas</td>
					<td><input type="radio" name="kelas" value="TI-A" required="">TI-A
						<input type="radio" name="kelas" value="TI-B" required="">TI-B
						<input type="radio" name="kelas" value="TI-C" required="">TI-C
						<input type="radio" name="kelas" value="TI-D" required="">TI-D
						<input type="radio" name="kelas" value="TI-E" required="">TI-E
				</td>
				</tr>
				<tr>
					<td>Kode Mata Kuliah</td>
					<td>
						<select name="kd" placeholder="" required="">
						<option></option>
						<option value="FT3005">FT3005</option>
						<option value="FT3008">FT3008</option>
						<option value="FT3109">FT3109</option>
						<option value="FT3112">FT3112</option>
						<option value="IF4004">IF4004</option>
						<option value="IF4006">IF4006</option>
						<option value="ST1017">ST1017</option>
					</select>
					</td>
				</tr>	
					<td>Nama Mata Kuliah</td>				
					<td>
						<select name="matkul"  required="">
						<option></option>
						<option value="Grafika Komputer">Grafika Komputer</option>
						<option value="Interaksi Manusia dan Komputer">Interaksi Manusia dan Komputer</option>
						<option value="Jaringan Komputer">Jaringan Komputer</option>
						<option value="Management Proyek Perangkat Lunak">Management Proyek Perangkat Lunak</option>
						<option value="Pendidikan Pancasila">Pendidikan Pancasila</option>
						<option value="Pengembangan Aplikasi Berbasis Web">Pengembangan Aplikasi Berbasis Web</option>
						<option value="Teori Bahasa Formal dan Automata">Teori Bahasa Formal dan Automata</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>Nilai Tugas</td>
					<td><input type="number" name="tugas" size="12" required=""></td>
				</tr>
				<tr>
					<td>Nilai Quiz</td>
					<td><input type="number" name="quiz" size="12"  required=""></td>
				</tr>
				<tr>
					<td>Nilai UTS</td>
					<td><input type="number" name="uts" size="12" required=""></td>
				</tr>
				<tr>
					<td>Nilai UAS</td>
					<td><input type="number" name="uas" size="12"  required=""></td>
				</tr>				
			</table>	
		</form><br><br>

				<div class="input-group">
			<input type="submit" value="Hitung">
		</div>
		<div class="input-group">
			<input type="reset" value="Ulang">
		</div>
</body>
</html>