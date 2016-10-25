<!DOCTYPE HTML>
<html>
	<head>
		<title>i-Sukan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Pengenalan</a></li>
							<li><a href="#one">Borang Pinjaman Online</a></li>
							<li><a href="#two">Semak Status Pinjaman</a></li>
							<li><a href="#three">Hubungi Kami</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>i - Sukan</h1>
							<p>Sistem Online Pinjaman dan Tempahan Alatan <br />
							Sukan / Kebudayaan / Kokurikulum</p>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Borang Pinjaman Online</h2>
									<p>Pelajar yang ingin menempah atau meminjam alatan sukan<br>
									sila daftar melalui link dibawah.</p>
									<ul class="actions">
										<li><a href="pinjam.php" class="button">Tempah</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<html>
<center>
<h2>Status Semakan Pinjaman Alatan Sukan</h2>

<p>Senarai pelajar yang memohon dan status pinjaman.<br>
Pelajar yang memohon dan telah diluluskan sila ke Pusat Sukan mengikut tarikh<br>
yang telah ditempah untuk mengambil alatan.</p>

<?php

include('dbconnect.php');

$sql = "SELECT `nama_penuh`,`no_pendaftaran`,`status` FROM peminjam";

$result = mysqli_query($connection,$sql);
echo "<table border=\"1\"><tr><td>Nama Penuh</td><td>No. Pendaftaran</td><td>Status Pinjaman</td></tr>";
while ($res = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	echo "<tr>
	<td>".$res['nama_penuh']."</td>
	<td>".$res['no_pendaftaran']."</td>
	<td>".$res['status']."</td>
	</tr>";
	}
echo "</table>";
mysqli_close($connection);

?>
</center>
</html>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Hubungi Kami</h2>
								<section>
									<ul class="contact">
										<li>
											<h3>Alamat</h3>
											<span>POLITEKNIK BALIK PULAU<br>
												Pinang Nirai, Mukim E,<br>
												11000 Balik Pulau,<br>
												Pulau Pinang</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="http://www.pbu.edu.my/">polibalikpulau@pbu.edu.my</a>
										</li>
										<li>
											<h3>Telefon</h3>
											<span>04-868 9000</span>
										</li>
									</ul>
								</section>

						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy;Nigga. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>