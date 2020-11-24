<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>SiCemet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light text-capitalize" 
            style="background-color: rgba(211,211,211,0.3);">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="imgs/logo.png" alt="Logo SiCeMet" /></a>
                <a class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#show-menu" aria-controls="navbarSupportedContent" 
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </a>

                <div class="collapse navbar-collapse" id="show-menu">
                <ul class="navbar-nav ml-auto" style="margin-top: 3px;">
                    <div class="nav-item active">
                        <a class="nav-link" href="index.php">Beranda <span class="sr-only"></span></a>
                    </div>
                    <div class="dropdown" style="margin-top: 3px;">
                        <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="color: white;">
                            Metodologi </a>
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
        
    <header id="home" style="margin-top: 3px;">
        <div class="overlay">
            <div class="container">
                <div>
                    <h1><span>Tentukan</span><br>Metode yang Tepat</h1>
                    <p>Kami akan membantu anda untuk menemukan metode pengembangan yang tepat untuk proyek anda. Anda
                        cukup mengisi beberapa kriteria di bawah ini dan hasilnya akan bisa membantu anda menyelesaikan
                        proyek dengan efisien.</p>
                    <button><a href="kuesioner.php" class="text-uppercase">Kenali Proyek Anda</a></button>
                </div>
            </div>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script>
        $(function () {

            'use strict';

            var winH = $(window).height();

            $('header').height(winH);

            $('header .container > div').css('top', (winH / 2) - ($('header .container > div').height() / 2));

            $('.navbar ul li a.search').on('click', function (e) {
                e.preventDefault();
            });
            $('.navbar a.search').on('click', function () {
                $('.navbar form').fadeToggle();
            });

            $('.navbar ul.navbar-nav li a').on('click', function (e) {

                var getAttr = $(this).attr('href');

                e.preventDefault();
                $('php').animate({ scrollTop: $(getAttr).offset().top }, 1000);
            });
        })
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>