<?php 
	session_start();
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PMB UBJ | Administrator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<!-- bagian header -->
	<header>
		<h1><a href="beranda.php">Admin PMB UBJ</a></h1>
		<ul>
			<li><a href="beranda.php">Beranda</a></li>
			<li><a href="data-peserta.php">Data Peserta</a></li>
			<li><a href="keluar.php">Logout</a></li>
		</ul>
	</header>

	<!-- bagian content -->
	<section class="content">
		<h2>Beranda</h2>
		<div class="box">
			<h3><?php echo $_SESSION['nama'] ?>, Selamat Datang di PMB UBJ.</h3>
		</div>
	</section>

</body>
</html>