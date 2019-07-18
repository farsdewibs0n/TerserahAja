<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ruang Masalah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">



  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target="#site-navbar" data-offset="200">

  <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Ruang Masalah</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      
      <div class="collapse navbar-collapse" id="site-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#section-about" class="nav-link">Aturan</a></li>
          <li class="nav-item"><a href="#section-news" class="nav-link">Curhatan</a></li>
          <?php
            if($_SESSION['nama'] == ''){
              echo '<li class="nav-item"><a href="Login/login.php" class="nav-link">Login</a></li>';
            } else {
              echo '<li class="nav-item"><a href="Login/auth.php?action=logout" class="nav-link">' . $_SESSION['nama']  .'</a></li>';
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="site-cover" style="background-image: url(images/qbg_3.jpg); background-attachment: fixed" id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center site-vh-100">
        <div class="col-md-12">
          <h1 class="site-heading site-animate mb-3">"Welcome To Ruang Masalah"</h1>
          <h2 class="h5 site-subheading mb-5 site-animate">Selesaikan masalah dengan mudah</h2>
          <p><a href="https://colorlib.com/" target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">Curhat dong</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="site-section" id="section-about">
    <div class="container">
      <div class="row">
        <div class="col-md-5 site-animate mb-5">
          <h4 class="site-sub-title">Wajib Baca!!!</h4>
          <h2 class="site-primary-title display-4">Aturan
          </h2>
          <p></p>Bagi yang ingin curhat :
          <li>
            Curhat yang ditulis harus jelas dan lengkap
          <li>
            Sebisa mungkin jangan menggunakan singkatan.

            <p></p>Bagi yang mau komentar / kasih solusi:
          <li>
            Baca dulu semua isi curhatnya
          <li>
            Berikan komentar yang berguna</p>
          </li>

          <p><a href="#" class="btn btn-secondary btn-lg">Learn More About Us</a></p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
          <img src="images/b.jpg" alt="Free Template by colorlib.com" class="img-fluid">

        </div>
  </section>
  <!-- END section -->

  <section class="site-section bg-light" id="section-news">
    <div class="container">

      <div class="row">
        <div class="col-md-12 text-center mb-5 site-animate">
          <h2 class="display-4">Curhatan</h2>`
          <div class="row justify-content-center">
            <div class="col-md-7">
              <p class="lead">"Kita memiliki kemampuan untuk membuat hidup jadi apa yang diinginkan. Tetapi konsekuensi
                dari itu adalah kita harus bersedia untuk memberikan semua yang diperlukan untuk melakukannya.”</p>
            </div>
          </div>
        </div>
        <!-- Mulai Curhat -->
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'bunda');
        $query = mysqli_query($conn, "SELECT * FROM curhatan");

        while ($data = mysqli_fetch_assoc($query)) :
          echo '
              <div class="ml-5">
                <div class="card ml-4 mb-4" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">' . $data['judul_curhat'] .'</h5>
                    <p class="card-text">' . $data['isi_curhat'] . ' <a href="#">Selanjutnya</a></p>
                  </div>
                  <hr class="mb-2">
                  <div class="row ml-1">
                    <div class="col-md-2 mt-2">
                      <div style="width: 35px; height: 35px; background-image: url(images/anon.png); border-radius: 50%; background-size: cover;"></div>
                    </div>
                    <div class="col-md-9 mt-1">
                      <font>Anonymous</font>
                      <p style="font-size: 11px; color:grey;">' . $data['tanggal'] .  '</p>
                    </div>
                  </div>
                </div>
              </div>';
        endwhile;


        ?>
      </div>
    </div>
  </section>
  <!-- END section -->




  <footer class="site-footer site-bg-dark site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4 site-animate">
              <h2 class="site-heading-2">About Us</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit
                expedita amet. Sed labore ipsum vel dolore, quis, culpa et magni autem sequi facere eos tenetur, ex?</p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3 site-animate">
              <div class="site-footer-widget mb-4">
                <h2 class="site-heading-2">Ruang Masalah</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">Term</a></li>
                  <li><a href="#" class="py-2 d-block">Curhatan</a></li>

                  
                </ul>
              </div>
            </div>


            <div class="row site-animate">
              <div class="col-md-12 text-center">
                <div class="site-footer-widget mb-4">
                  <ul class="site-footer-social list-unstyled ">
                    <li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-12 text-center">
                <p>&copy;
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script> All rights reserved | This project is made
                  with <i class="icon-heart" aria-hidden="true"></i>, sweat and tears by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
              </div>
            </div>
          </div>
  </footer>




  <!-- Modal -->
  <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="bg-image" style="background-image: url(images/d.jpg);"></div>
            </div>
            <div class="col-lg-12 p-5">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <small>CLOSE </small><span aria-hidden="true">&times;</span>
              </button>

              <form action="insert.php" method="post">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="judul" placeholder="Judul"><br>
                    <textarea name="curhat" placeholder="yuk curhat disini..." rows="9" class="form-control"></textarea>
                    <br>
                  </div>
                </div>
                <div class="row pr-4">
                  <div class="col-md-10"></div>
                  <div class="col-md-2">
                    <!-- Button trigger modal -->
                    <button type="submit" name="klik" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                      Kirim
                    </button>
                </form>



                    <!-- loader -->
                    <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


                    <script src="js/jquery.min.js"></script>
                    <script src="js/popper.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <script src="js/jquery.easing.1.3.js"></script>
                    <script src="js/jquery.waypoints.min.js"></script>
                    <script src="js/owl.carousel.min.js"></script>
                    <script src="js/jquery.magnific-popup.min.js"></script>

                    <script src="js/bootstrap-datepicker.js"></script>
                    <script src="js/jquery.timepicker.min.js"></script>

                    <script src="js/jquery.animateNumber.min.js"></script>


                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
                    <script src="js/google-map.js"></script>

                    <script src="js/main.js"></script>


</body>

</html>