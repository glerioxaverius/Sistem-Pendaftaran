<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])) {

	// cek akun
	$cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".htmlspecialchars($_POST['user'])."' AND password = '".md5(htmlspecialchars($_POST['pass']))."' ");

	if(mysqli_num_rows($cek) > 0){
		$a = mysqli_fetch_object($cek);

		$_SESSION['stat_login'] = true;
		$_SESSION['id'] = $a->id_admin;
		$_SESSION['nama'] = $a->nm_admin;
		echo '<script>window.location="beranda.php"</script>';
	} else {
		echo '<script>alert("Username atau Password salah")</script>';
	}

}
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

	<section class="main-login">
		<div class="box-login">
			<h2>Login Admin</h2>
			<!-- Form Login -->
			<form action="" method="post">
				<div class="box">
					<table>
						<tr>
							<td>Username</td>
							<td>:</td>
							<td>
								<input type="text" name="user" class="input-control">
							</td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td>
								<input type="password" name="pass" class="input-control">
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<input type="submit" name="login" class="btn-login" value="login">
							</td>
						</tr>
					</table>
				</div>
			</form>
		</div>
	</section>

</body>
</html>