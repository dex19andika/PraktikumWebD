<?php 
require 'koneksi.php';

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Tentang | Universitas Udayana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#add8e6">
	<div class="tubuh">
		<div class="kepala">
			<div class="logo"><img src="logo.png" width="100%" height="100%"></div>
			<div class="judul">
				<font style="font-size: 28px; font-weight: bold;">Universitas Udayana</font><br>
				<font style="font-size: 16px; font-weight: bold;">Jalan Raya Kampus Unud, Jimbaran,</font><br>
				<font style="font-size: 16px; font-weight: bold;">Badung, Bali | (0361) 701954</font>
			</div>
		</div>
		<div id="navbar">
			<nav>
				<ul>
					<li><a href="index.html">Beranda</a></li>
					<li><a href="tentang.html">Tentang</a></li>
					<li><a href="profil.html">Profil</a></li>
					<li><a href="kontak.html">Kontak</a></li>
				</ul>
			</nav>
		</div>
		<img src="kampus.png" class="gambar_kampus">
		<div class="pembukaan">
			<font style="font-size:20px; font-weight:bold;">Sejarah Universitas Udayana</font><br>
			<p style="margin-top: 5px;">Cikal bakal Unud adalah Fakultas Sastra Udayana cabang Universitas Airlangga yang diresmikan oleh P. J. M. Presiden Republik Indonesia Ir. Soekarno, dibuka oleh J. M. Menteri P.P dan K. Prof. DR. Priyono pada tanggal 29 September 1958 sebagaimana tertulis pada Prasasti di Fakultas Sastra Jalan Nias Denpasar. Universitas Udayana secara sah berdiri pada tanggal 17 Agustus 1962 dan merupakan perguruan tinggi negeri tertua di daerah Provinsi Bali. Sebelumnya, sejak tanggal 29 September 1958 di Bali sudah berdiri sebuah Fakultas yang bernama Fakultas Sastra Udayana sebagai cabang dari Universitas Airlangga Surabaya. Fakultas Sastra Udayana inilah yang merupakan embrio dari pada berdirinya Universitas Udayana. Berdasarkan Surat Keputusan Menteri PTIPNo.104/1962, tanggal 9 Agustus 1962, Universitas Udayana secara syah berdiri sejak tanggal 17 Agustus 1962. Tetapi oleh karena hari lahir Universitas Udayana jatuh bersamaan dengan hari Proklamasi Kemerdekaan RepublikIndonesia maka perayaan Hari Ulang Tahun Universitas Udayana dialihkan menjadi tanggal 29 September dengan mengambil tanggal peresmian Fakultas Sastra yang telah berdiri sejak tahun 1958.</p>
		</div>
	</div>

	<h2>UNIVERSITAS UDAYANA</h1>
            <h4>Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung-Bali-803611</h4>
            <h4>Phone Number: +62 (361) 701954, 704845</h4>
            <h4>Fax: +62 (361) 701907</h4>
            <h4>Email: info@unud.ac.id</h4>
    </div>

</body>
</html>