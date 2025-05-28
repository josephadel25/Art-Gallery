<?php ini_set('display_errors', 0); ?>
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
    <?php session_start();?>
    <header class="header header-absolute">
      <div><div class="top-bar">
        <div class="container-fluid">
          <div class="d-flex align-items-center row">
            <div class="d-none d-sm-block col-sm-7">
              <a class="navbar-brand d-flex  justify-content-start jusc" href="../index.php">
                <img src="../img/android-chrome-192x192.png" height="30">
                <div class="p-2 topbar-text" >DON'T TOUCH IT'S ART</div>
              </a>
            </div>
              </div></div></div></div>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg bg-white navbar-sticky navbar-airy navbar-light  bg-hover-white bg-fixed-white navbar-hover-light navbar-fixed-light">
        <div class="container-fluid d-flex align-items-center justify-content-between">  
          <a class="navbar-brand d-flex align-items-center justify-content-between" href="studio.php">
            <img src="../img/android-chrome-192x192.png" height="40">
            <div class="logo">
              <span class="top">DON'T</span>
              <span class="bottom">TOUCH IT'S ART</span>
            </div>            
          </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
          <div class="collapse navbar-collapse navbar-toggler-right" id="navbarCollapse">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item position-static"><a class="nav-link" href="studio.php">Manage Artwork</a></li>
              <li class="nav-item position-static"><a class="nav-link" href="upload.php">Upload Work</a></li>
              <li class="nav-item position-static"><a class="nav-link "href="dashboard.php">Sales Dashboard</a></li>
              <li class="nav-item position-static"><a class="nav-link" href="follower.php">Followers</a></li>
            </ul>
            <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
              

            </div>
          </div>
        </div>
      </nav>
      <!-- /Navbar -->
    </header>



    <section id="title" class="position-relative py-3 py-lg-7 overflow-hidden " style="padding: 12% 0 5% 0;text-align: center;">
          <div class="title  pt-6" >
            <h1 class="hero-heading mb-0" style="color: #000000;">YOUR WORKS</h1>
          </div>
      </section>
  
      <main>
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "artgallery");
                session_start();
                $ID = $_SESSION['id'];
                $result = mysqli_query($conn, "SELECT artworks.*, users.name as name FROM artworks LEFT JOIN users ON artworks.artistid = users.id WHERE artworks.artistid LIKE $ID");

                while ($row = mysqli_fetch_array($result)) {
                    echo "
                    <div class='col-xl-3 col-lg-4 col-sm-6'>
                        <div class='product'>
                            <div class='product-image'>
                                <img class='img-fluid' src='../$row[image]' alt='product'>
                                <div class='product-hover-overlay'>
                                    <a class='product-hover-overlay-link' href='detail.php'></a>
                                    <div class='product-hover-overlay-buttons'>
                                    <div class='btn-group'>
                                        <form method='GET' action='../classes/delete.php'>
                                          <input type='hidden' name='name' value='$row[id]'>
                                          <button name'del' class='btn btn-outline-dark btn-product-left d-none d-sm-inline-block' type='submit'><i class='fa-solid fa-trash'></i></button>
                                        </form>
                                        <form method='GET' action='update.php'>
                                          <input type='hidden' name='EDIT' value='$row[id]'>
                                          <button class='btn btn-outline-dark btn-product-right d-none d-sm-inline-block' type='submit'><i class='fa-solid fa-pen-to-square'></i></button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class='py-4'>
                                <h3 class='h6 text-uppercase mb-1 text-dark'>$row[title]</h3>
                                <p class='text-muted text-sm mb-1'>Paintings, $row[width] W x $row[height] H x $row[depth] D in</p>
                                <div class='d-flex align-items-center justify-content-between py-4'>
                                    <h6 class='text-uppercase mb-1'><a class='text-dark' href='profile.php'>$row[name]</a></h6>
                                    <span class='text-muted'>$row[price]$</span>
                                </div>
                            </div>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </div>
</main>







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
