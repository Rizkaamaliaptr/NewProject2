<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>mywebsite</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Pertemuan 1--Sistem pakar</h1>
		</div>
		<div id="sidebar">
			<h3>Navigasi</h3>
			<ul id="navmenu">
				<li><a href="index.php" class="selected">profil</a></li>
				<li><a href="?module=galeri#pos">galeri</a></li>
				<li><a href="?module=jadwal#pos">jadwal pelajaran</a></li>
			</ul>
		</div>
		<div id="page">
			<?php if (isset($_GET['module'])) 
			include "konten/$_GET[module].php";
			else
			include "konten/home.php";?> 
		</div>
	</div>
</body>