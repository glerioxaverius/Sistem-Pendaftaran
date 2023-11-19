<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Pacifico&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<!-- Box Formulir -->
	<section class="box-formulir">
		<h2>Pendaftaran Berhasil</h2>

		<div class="box">
			<h4>Kode Pendaftaran Anda adalah <?php echo $_GET['id'] ?></h4>
			<a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetak">Cetak Bukti Daftar</a>
		</div>			

	</section>
</body>
</html>