<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<title>Spiral</title>
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
	
		<h2 align="center" style="margin-top: 90px;"> Metodologi Spiral</h2>
		<br>
		<ol>
			<b><li>Alur Metodologi</li></b>
				<img src="imgs/spiral.jpg" class="img-fluid" alt="Responsive image">
			<b><li>Penjelasan</li></b>
				<p>
					Metode Spiral merupakan model proses perangkat lunak evolusioner yang memadukan sifat iteratif dari prototyping dengan aspek terkontrol dan sistematis dari 
					model waterfall. Hal ini memberikan potensi untuk pengembangan versi perangkat lunak yang semakin lengkap. Model spiral adalah pendekatan realistis untuk 
					pengembangan sistem dan perangkat lunak skala besar. Karena perangkat lunak berkembang seiring proses berlangsung, pengembang dan pelanggan lebih memahami dan 
					bereaksi terhadap risiko di setiap tingkat evolusi. Adapun tahapan-tahapan spiral terdiri dari (1) Tahap Liason, (2) Tahap Perencanaan, (3) Tahap Analisis Resiko,
					(4) Tahap Rekayasa, (5) Tahap Konstruksi dan Pelepasan, dan (6) Tahap Evaluasi.
				</p>
			<b><li>Kelebihan</li></b>
				<ul>
					<li>Sangat mempertimbangkan resiko kemungkinan munculnya kesalahan sehingga sangat dapat diandalkan untuk pengembangan perangkat lunak skala besar</li>
					<li>Pendekatan model ini dilakukan melalui tahapan-tahapan yang sangat baik dengan menggabungkan model waterfall ditambah dengan pengulangan-pengulangan 
					sehingga lebih realistis untuk mencerminkan keadaan sebenarnya</li>
					<li>Baik pengembang maupun pemakai dapat cepat mengetahui letak kekurangan dan kesalahan dari sistem karena proses-prosesnya dapat diamati dengan baik</li>
				</ul>
			<b><li>Kekurangan</li></b>
				<ul>
					<li>Waktu yang dibutuhkan untuk mengembangkan perangkat lunak cukup panjang demikian juga biaya yang besar</li>
					<li>Sangat tergantung kepada tenaga ahli yang dapat memperkirakan resiko</li>
					<li>Terdapat pula kesulitan untuk mengontrol proses. Sampai saat ini, karena masih relatif baru, belum ada bukti apakah metode ini cukup handal untuk diterapkan</li>
					<li>Meyakinkan konsumen (khusunya dalam situasi kontrak) bahwa pendekatan evolusioner bisa dikontrol</li>
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