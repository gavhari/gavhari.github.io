<!DOCTYPE html>
<html>
<head>
	<title>Tugas PHP Gabe Siringoringo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('bg-01.jpg');">
	<?php 
	//jika menerima POST 'hitung'
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<h1 style="text-align:center; color: #21b09d; font-weight: normal; text-shadow: 1px 1px;">Pemrograman Aplikasi Web</h1>
	<p style="text-align:center; color: #eee;">
		Gabe Siringoringo<br>
		185150301111033
	</p>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<a class="brand" href="https://gavhari.github.io">Gabe Siringoringo</a>
		<form method="post" action="index.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">*</option>
				<option value="bagi">:</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>
