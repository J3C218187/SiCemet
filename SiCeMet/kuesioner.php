<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<title>Kuesioner</title>
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
						<button class="btn dropdown-toggle" type="button" idS="dropdownMenuButton" 
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
							style="color: black;" >
						  Metodologi
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						  <a class="dropdown-item" href="detail_Incremental.php">Incremental</a>
						  <a class="dropdown-item" href="detail_Prototyping.php">Prototyping</a>
						  <a class="dropdown-item" href="detail_RAD.php">Rad</a>
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

	<header>
		<div class="container" style="background-color: rgba(72,61,139,0.3);">
			<h2 class="text-center" style="margin-top: 100px;"><br>Kenali Proyek Anda</h2><br><br>
				<form class="form" method="post">
				<table>
                    <tr>
						<th colspan="2" class="kriteria-title">Kebutuhan Awal</th>
							<td></td>
                            <td><input type="radio" class="btn btn-secondary" name="kebutuhan" id="jls" value="jls" required="true">
                            <label class="dua" for="jls">Dapat Dijelaskan</label></td>
							
                            <td><input type="radio" name="kebutuhan" id="no_jls" value="no_jls" required="true">
                            <label class="dua" for="no_jls">Belum Jelas</label></td>
                    </tr>
                    <tr>
						<th colspan="2" class="kriteria-title">Kompleksitas</th>
							<td></td>
                            <td><input type="radio" name="kompleksitas" id="sdrhn" value="sdrhn" required="true">
                            <label class="tiga" for="sdrhn">Sederhana</label></td>

                            <td><input type="radio" name="kompleksitas" id="kmplks" value="kmplks" required="true">
                            <label class="tiga" for="kmplks">Kompleks</label></td>

                            <td><input type="radio" name="kompleksitas" id="s_kmplks" value="s_kmplks" required="true">
                            <label class="tiga" for="s_kmplks">Sangat Kompleks</label></td>
                    </tr>
                    <tr>
						<th colspan="2" class="kriteria-title">Waktu Delivery</th>
							<td></td>
                            <td><input type="radio" name="waktu" id="0" value="0" required="true">
                            <label class="empat" for="0">< 1 Bulan</label></td>

                            <td><input type="radio" name="waktu" id="1" value="1" required="true">
                            <label class="empat" for="1">1 - 3 Bulan</label></td>
                            
                            <td><input type="radio" name="waktu" id="2" value="2" required="true">
                            <label class="empat" for="2">4 - 6 Bulan</label></td>
                            
                            <td><input type="radio" name="waktu" id="3" value="3" required="true">
                            <label class="empat" for="3">6 - 12 Bulan</label></td>
                    </tr>
                    <tr>
						<th colspan="2" class="kriteria-title">Jumlah Tim (SDM)</th>
							<td></td>
                            <td><input type="radio" name="tim" id="dikit" value="dikit" required="true">
                            <label class="dua" for="dikit">< 12 Orang</label></td>

                            <td><input type="radio" name="tim" id="byk" value="byk" required="true">
                            <label class="dua" for="byk">> 12 Orang</label></td>
                    </tr>
                    <tr>
						<th colspan="2" class="kriteria-title">Keterampilan Tim</th>
							<td></td>
                            <td><input type="radio" name="keterampilan" id="bgs" value="bgs" required="true">
                            <label class="tiga" for="bgs">Berpengalaman</label></td>

                            <td><input type="radio" name="keterampilan" id="biasa" value="biasa" required="true">
                            <label class="tiga" for="biasa">Campuran</label></td>

                            <td><input type="radio" name="keterampilan" id="krg" value="krg" required="true">
                            <label class="tiga" for="krg">Tidak Berpengalaman</label></td>
                    </tr>
                    <tr>
						<th colspan="2" class="kriteria-title">Klien Terlibat Langsung</th>
							<td></td>
                            <td><input type="radio" name="klien" id="ya" value="ya" required="true">
                            <label class="dua" for="ya">Terlibat</label></td>

                            <td><input type="radio" name="klien" id="tdk" value="tdk" required="true">
                            <label class="dua" for="tdk">Tidak Terlibat</label></td>
					</tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
                    <tr>
						<td></td>
                        <td><input class="btn btn-primary" type="submit" name="submit" value="Cek Metodologi"></td>
						<td><input class="btn btn-primary" type="reset" value="Bersihkan"></td>
                    </tr>

                </table><br>
				</form>
		</div>
		<div class="container" style="background-color: rgba(72,61,139,0.3);">
			<h2 class="text-center" style="margin-top: 50px;"><br>Metodologi yang Sesuai Kriteria Anda</h2><br><br>
				<form class="form" method="post">
				<table style="width: 100%;">
							<?php
							if(isset($_POST['submit'])){
								$kebutuhan 		= $_POST['kebutuhan'];
								$kompleksitas 	= $_POST['kompleksitas'];
								$waktu 			= $_POST['waktu'];
								$tim 			= $_POST['tim'];
								$keterampilan 	= $_POST['keterampilan'];
								$klien 			= $_POST['klien'];

								include('function.php');
								$hasil = Analisis($kebutuhan, $kompleksitas, $waktu, $tim, $keterampilan, $klien);
								foreach($hasil as $key => $value){
								echo '
								<div class="p-3 mb-2 d-flex justify-content-end align-items-center bg-white text-dark">
									<h4 class="mr-auto">'.$key.'</h4>
									<a href="detail_'.$key.'.php" class="btn btn-outline-info">
										Lihat Detail
									</a>
								</div>
								';}
							}
							?>
				</table>
		<br>
		<a href="kuesioner.php" class="btn btn-outline-primary active" type="reset"role="button" aria-pressed="true">Bersihkan</a>
				</form>
			</div>
	</header>
	
	<footer>
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
				<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
			</ul>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-6">
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
				<div class="col-lg-3 col-md-6 col-6">
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
				<div class="col-lg-3 col-md-6 col-6">
					<div class="item date">
						<h4 class="text-uppercase">resent posts</h4>
						<p><a href="#">01/03/2019</a></p>
						<p><a href="#">08/05/2019</a></p>
						<p><a href="#">01/03/2019</a></p>
						<p><a href="#">08/05/2019</a></p>
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