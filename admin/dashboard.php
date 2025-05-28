<?php ini_set('display_errors', 0);?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Don't Touch It's Art</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <!--css -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/style.default.7acfaf01.css" id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../css/all.min.css"/>
    <link rel="stylesheet" href="../css/paint.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
  </head>
  <body>
    <header class="header header-absolute">
      
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg bg-white navbar-sticky navbar-airy navbar-light  bg-hover-white bg-fixed-white navbar-hover-light navbar-fixed-light">
        <div class="container-fluid d-flex align-items-center justify-content-between">  
          <a class="navbar-brand d-flex align-items-center justify-content-between" href="admin.php">
            <img src="../img/android-chrome-192x192.png" height="40">
            <div class="logo">
              <span class="top">DON'T</span>
              <span class="bottom">TOUCH IT'S ART</span>
            </div>            
          </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
          <div class="collapse navbar-collapse navbar-toggler-right" id="navbarCollapse">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item position-static"><a class="nav-link" href="admin.php">Manage Artist</a></li>
              <li class="nav-item position-static"><a class="nav-link" href="message.php">Message</a></li>
              <li class="nav-item position-static"><a class="nav-link "href="dashboard.php">Sales Dashboard</a></li>
            </ul>
            <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
                <div class="nav-item"><a class="navbar-icon-link" href="../classes/logout.php"> 
                  <i class="fa-solid fa-user-tie"></i><span class="text-sm ms-2 ms-lg-0 text-uppercase text-sm fw-bold d-none d-sm-inline d-lg-none">Profile</span></a>
                </div>
  
              </div>
          </div>
        </div>
      </nav>
      <!-- /Navbar -->
    </header>




    <section id="title" class="position-relative py-3 py-lg-7 overflow-hidden " style="padding: 12% 0 5% 0;text-align: center;">
        <div class="title  pt-6" >
          <h1 class="hero-heading mb-0" style="color: #000000;">Dashboard</h1>
        </div>
    </section>


    <?php
                $conn = mysqli_connect("localhost", "root", "", "artgallery");
                $results = mysqli_query($conn, "SELECT * FROM artworks");
                $arts = mysqli_num_rows($results);
                $resultd = mysqli_query($conn, "SELECT * FROM users");
                $users = mysqli_num_rows($resultd);
                $resulte = mysqli_query($conn, "SELECT * FROM users where category='1'");
                $artists = mysqli_num_rows($resulte);
                $result = mysqli_query($conn, "SELECT SUM(price) AS total FROM checkout");
                $row = mysqli_fetch_assoc($result);
                $total= $row['total'];
                ?>
                <div class="m-5 d-flex justify-content-between flex-column flex-lg-row">
          <a class="btn btn-dark" href="checkout.php">Download Report <i class="fa-solid fa-circle-down"></i></a></div>
<div class="m-3 row">
    <div class="mb-4 col-lg-3 col-sm-6">
        <div class="h-100 card">
            <div class="d-flex align-items-center justify-content-between card-body">
                <div><h4 class="fw-normal text-red" style="color: #ff0000;">$<?php echo"$total"; ?></h4>
                <p class="subtitle text-sm text-muted mb-0" style="color: #ff0000;">Earnings</p>
            </div>
            <div class="flex-shrink-0 ms-3">
            <i class="fa-solid fa-gauge svg-icon text-red fa-xl" style="color: #ff0000;"></i>
                </div>
            </div>
            <div class="py-3 bg-red-light card-footer">
                <div class="align-items-center text-red row">
                    <div class="col-10">
                        <p class="mb-0" style="color: #ff0000;">20% increase</p>
                </div>
                <div class="text-end col-2">
                <i class="fa-solid fa-caret-up" style="color: #ff0000;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-4 col-lg-3 col-sm-6">
        <div class="h-100 card">
            <div class="d-flex align-items-center justify-content-between card-body">
                <div>
                    <h4 class="fw-normal text-blue" style="color: #064ecb;"><?php echo"$artists"; ?></h4>
                    <p class="subtitle text-sm text-muted mb-0" style="color: #064ecb;">Artists</p>
                </div>
                <div class="flex-shrink-0 ms-3">
                
                        <i class="svg-icon text-blue fa-solid fa-user-tie fa-xl" style="color: #064ecb;"></i>
                    </div>
                </div>
                <div class="py-3 bg-blue-light card-footer">
                    <div class="align-items-center text-blue row">
                        <div class="col-10">
                            <p class="mb-0" style="color: #064ecb;">3% increase</p>
                        </div>
                        <div class="text-end col-2">
                        <i class="fa-solid fa-caret-up" style="color: #064ecb;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4 col-lg-3 col-sm-6">
            <div class="h-100 card">
                <div class="d-flex align-items-center justify-content-between card-body">
                    <div>
                        <h4 class="fw-normal " style="color: #8e02cf;"><?php echo"$arts"; ?></h4>
                        <p class="subtitle text-sm  mb-0" style="color: #8e02cf;">Artworks</p>
                    </div>
                    <div class="flex-shrink-0 ms-3">
                        <i class="svg-icon  fa-solid fa-palette fa-xl" style="color: #8e02cf;"></i>
                        </div>
                    </div>
                    <div class="py-3 bg-primary-light card-footer">
                        <div class="align-items-center  row">
                            <div class="col-10">
                                <p class="mb-0" style="color: #8e02cf;">10% increase</p>
                            </div>
                            <div class="text-end col-2">
                            <i class="fa-solid fa-caret-up" style="color: #8e02cf;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4 col-lg-3 col-sm-6">
                <div class="h-100 card">
                    <div class="d-flex align-items-center justify-content-between card-body">
                        <div>
                            <h4 class="fw-normal text-green" style="color: #00b30c;"><?php echo"$users"; ?></h4>
                            <p class="subtitle text-sm text-muted mb-0" style="color: #00b30c;">Customers</p>
                        </div>
                        <div class="flex-shrink-0 ms-3">
                        <i class="svg-icon text-green fa-solid fa-users fa-xl" style="color: #00b30c;"></i>
                            </div>
                            
                        </div>
                        <div class="py-3 bg-green-light card-footer">
                            <div class="align-items-center text-green row">
                                <div class="col-10">
                                    <p class="mb-0" style="color: #00b30c;">5% increase</p>
                                </div>
                                <div class="text-end col-2">
                                <i class="fa-solid fa-caret-up" style="color: #00b30c;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>








<footer class="main-footer">
  <!-- Copyright section of the footer-->
  <div class="py-4 fw-light bg-gray-800 text-gray-300">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-start">
          <p class="mb-md-0">&copy; 2024 Don't Touch It's <span class="text-primary">Art</span>.  All rights reserved.</p>
        </div>
        <div class="col-md-6">
          <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-end">
            <li class="list-inline-item"><img class="w-2rem" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/visa.svg" alt="..."></li>
            <li class="list-inline-item"><img class="w-2rem" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/mastercard.svg" alt="..."></li>
            <li class="list-inline-item"><img class="w-2rem" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/paypal.svg" alt="..."></li>
            <li class="list-inline-item"><img class="w-2rem" src="https://d19m59y37dris4.cloudfront.net/sell/2-0-1/img/western-union.svg" alt="..."></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
    <!-- jQuery-->
    <script src="../js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript Bundle (Popper.js included)-->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- Owl Carousel-->
    <script src="../js/owl.carousel.js"></script>
    <script src="../js/owl.carousel2.thumbs.min.js"></script>
    <!-- NoUI Slider (price slider)-->
    <script src="../js/nouislider.min.js"></script>
    <!-- Smooth scrolling-->
    <script src="../js/smooth-scroll.polyfills.min.js"></script>
    <!-- Lightbox gallery-->
    <script src="../js/glightbox.min.js"> </script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="../js/ofi.min.js"></script>
    <script>var basePath = '';</script>
    <script src="../js/theme.30e7c8f9.js"></script>
    </body>

</html>
