<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<title>Incremental</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
  </head>
  <body>
	<nav class="navbar navbar-expand-lg navbar-light text-capitalize" style="background-color: rgba(211, 211, 211, 0.5);">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="imgs/logo.png" alt="#" /></a>
			<a class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</a>

			<div class="collapse navbar-collapse" id="show-menu">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Beranda <span class="sr-only"></span></a>
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
	<div style="background-color: lightblue;">
		<h2 align="center" style="margin-top: 85px;" > Metodologi Incremental </h2>
	<br>
	<ol>
		<b><li>Alur Metodologi</li></b>
			<img src="imgs/incremental.jpg" class="img-fluid" alt="Responsive image">
		<b><li>Penjelasan</li></b>
			<p>
				Model incremental adalah metode pengembangan perangkat lunak di mana produk dirancang, diimplementasikan, dan diuji secara bertahap hingga produk selesai. 
				Model ini menggabungkan elemen-elemen model waterfall dengan filosofi iteratif dari prototyping. Adapun tahapan-tahapan incremental terdiri dari (1) Komunikasi,
				(2) Perencanaan, (3) Pemodelan, (4) Konstruksi, dan (5) Penyebaran.
			</p>
		<b><li>Kelebihan</li></b>
			<ul>
				<li>Menghasilkan perangkat lunak yang berfungsi dengan cepat dan lebih awal selama siklus hidup perangkat lunak</li>
				<li>Lebih fleksibel dan lebih murah untuk mengubah ruang lingkup dan kebutuhan, sehingga menurunkan biaya pengiriman awal</li>
				<li>Model ini lebih mudah untuk melakukan pengujjian dan debug selama iterasi yang lebih kecil</li>
				<li>Pelanggan dapat merespons masing-masing build</li>
			</ul>
		<b><li>Kekurangan</li></b>
			<ul>
				<li>Membutuhkan desain dan rencana yang baik</li>
				<li>Membutuhkan definisi keseluruhan sistem yang lengkap sebelum dipecah menjadi beberapa increment</li>
				<li>Total biayanya lebih banyak dari pada model waterfall</li>
			</ul>
	</ol>
	</div>
	<a href="kuesioner.php" class="btn btn-outline-primary btn-lg active" role="button" aria-pressed="true">Cek Metodologi Lagi</a>

	<footer style="margin-top: auto;">
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
	
	<!-- <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(function () {
			
			'use strict';
			
			var winH = $(window).height();
			
			$('header').height(winH);  
			
			$('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
			
			$('.navbar ul li a.search').on('click', function (e) {
				e.preventDefault();
			});
			$('.navbar a.search').on('click', function () {
				$('.navbar form').fadeToggle();
			});
			
			$('.navbar ul.navbar-nav li a').on('click', function (e) {
				
				var getAttr = $(this).attr('href');
				
				e.preventDefault();
				$('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
			});
		})
	</script>
	 -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
