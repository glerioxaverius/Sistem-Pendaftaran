<?php
session_start();
include 'koneksi.php';
if($_SESSION['stat_login'] != true) {
	echo '<script>window.location="login.php"</script>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran Online | Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Pacifico&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<!-- Header -->
	<header>
		<h1><a href="beranda.php">Admin</a></h1>
		<ul>
			<li><a href="beranda.php">Beranda</a><li>
			<li><a href="data-peserta.php">Data Peserta</a><li>
			<li><a href="keluar.php">Keluar</a><li>
		</ul>
	</header>

	<section class="content">
		<h2>Beranda</h2>
		<div class="box">
			<h3><?php echo $_SESSION['nama'] ?>, Selamat Datang</h3>
		</div>
	</section>

</body>
</html>