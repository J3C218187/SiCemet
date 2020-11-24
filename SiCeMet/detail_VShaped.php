<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<title>Vshaped</title>
	<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light text-capitalize" style="background-color: rgba(211, 211, 211, 0.5);">
		<div class="container">
			<a class="navbar-brand" href="index.php"><img src="imgs/logo.png" alt="#" /></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="show-menu">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
					</li>
					<div class="dropdown" style="margin-top: 2px;">
						<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" 
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
							style="color: black;" >
						  Metodologi
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						  <a class="dropdown-item" href="detail_Incremental.php">Incremental</a>
						  <a class="dropdown-item" href="detail_Prototyping.php">Prototyping</a>
						  <a class="dropdown-item" href="detail_RAD.php">RAD</a>
						  <a class="dropdown-item" href="detail_Scrum.php">Scrum</a>
						  <a class="dropdown-item" href="detail_Spiral.php">Spiral</a>
						  <a class="dropdown-item" href="detail_VShaped.php">Vshaped</a>
						  <a class="dropdown-item" href="detail_XP.php">XP</a>
						</div>
					  </div>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="far fa-user"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="far fa-heart"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<h2 align="center" style="margin-top: 90px;"> Metodologi VShaped </h2>
	<br>
	<ol>
		<b><li>Alur Metodologi</li></b><br>
			<img src="imgs/vshaped.jpg" class="img-fluid" alt="Responsive image">
		<b><li>Penjelasan</li></b>
			<p>
				Model V Shaped merupakan perluasan dari waterfall model  dan didasarkan pada asosiasi dari fase pengujian untuk setiap tahap pengembangan yang sesuai. 
				Ini berarti bahwa untuk setiap fase tunggal dalam siklus pengembangan, ada tahap pengujian terkait langsung. Ini adalah model yang sangat disiplin dan 
				tahap berikutnya dimulai setelah selesainya tahap sebelumnya. Adapun tahapan-tahapan verifikasi vshaped terdiri dari (1) Bussiness Requirement Analysis, 
				(2) System Desain, (3) Architectural Design, (4) Module Design, (5) Coding Phase. Sedangkan tahapan-tahapan validasi vshaped terdiri dari (1) Unit Testing, 
				(2) Integration Testing, (3) System Design, dan (4) Acceptance Testing.
			</p>
		<b><li>Kelebihan</li></b>
			<ul>
				<li>Ini adalah model yang sangat disiplin dan tahapannya selesai satu per satu</li>
				<li>Sederhana serta mudah dimengerti dan digunakan</li>
				<li>Mudah dikelola karena setiap fase memiliki spesifik kiriman dan proses review</li>
				<li>Dilakukannya verifikasi dan validasi pada tahap-tahap awal pengembangannya, sehingga user dapat terlibat dalam pembuatannya</li>
			</ul>
		<b><li>Kekurangan</li></b>
			<ul>
				<li>Tidak cocok untuk proyek-proyek yang kompleks dan berorientasi objek</li>
				<li>Tidak cocok untuk proyek-proyek dimana persyaratan beresiko tinggi</li>
				<li>Tidak cocok untuk proyek-proyek yang lama dan berkelanjutan</li>
				<li>Setelah aplikasi dalam tahap pengujian, sulit untuk kembali dan mengubah fungsionalitas</li>
			</ul>
	</ol>
	<a href="kuesioner.php" class="btn btn-outline-primary btn-lg active" role="button" aria-pressed="true">Cek Metodologi Lagi</a>

	<footer style="margin-top: -15px auto;">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
				<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
			</ul>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="item">
						<h4 class="text-uppercase">Contact us</h4>
						<p class="address">
							123 Second Street Fifth <br>
							Avenue,<br>
							Manhattan, New York<br>
							+987 654 3210
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="item">
						<h4 class="text-uppercase">additional links</h4>
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Terms and conditions</a></li>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="item date">
						<h4 class="text-uppercase">resent posts</h4>
						<p><a href="#">01/03/2019</a></p>
						<p><a href="#">08/05/2019</a></p>
						<p><a href="#">01/03/2019</a></p>
						<p><a href="#">08/05/2019</a></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="item">
						<h4 class="text-uppercase">newsletter</h4>
						<form>
							<input type="text" placeholder="Name">
							<input type="email" placeholder="Email">
							<input type="submit" value="Submit">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright text-center">
			<p>&#169 Copyright 2020</a></p>
		</div>
	</footer>
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>