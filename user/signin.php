<?php
ini_set('display_errors', 0);
session_start();
if (isset($_GET['errorold'])) {
  $error_messageold = $_GET['errorold'];
  // Display error message
}
?>
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
    <link rel="stylesheet" href="fonts/hkgrotesk/stylesheet.2e9c9834.css">
    <!--css -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/style.default.7acfaf01.css" id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../css/all.min.css"/>
    <link rel="stylesheet" href="../css/fontawesome.min.css">
  </head>
  <body>
  <header class="header header-absolute">
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg bg-white navbar-sticky navbar-airy navbar-light  bg-hover-white bg-fixed-white navbar-hover-light navbar-fixed-light">
      <?php  
              require_once "../classes/connect.php";
              $database = Connect::getInstance();
$conn = $database->getConnection();
              $id = $_SESSION['id'];
              $sql = "SELECT category FROM users WHERE id='$id'";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              if(isset($_SESSION['name']) && $row['category']==1) {
                include  "artist_header.php";
              } 
              else if(isset($_SESSION['name']) && $row['category']==0){
                include "user_header.php" ;
              }
              else {
                  include "header.php" ;
              }
            ?>



    <section id="title" class="position-relative py-3 py-lg-7 overflow-hidden" style="padding: 12% 0 5% 0;text-align: center;">
      <ul class="breadcrumb justify-content-center no-border mb-0">
        <li class="breadcrumb-item"><a class="text-black" href="../index.php">Home</a></li>
        <li class="breadcrumb-item text-black active">signin</li>
      </ul>
        <div class="title" >
          <h1 class="hero-heading mb-0" style="color: #000000;">CUSTOMER ZONE</h1>
        </div>
    </section>
  

    


  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="block">
            <div class="block-header">
              <h6 class="text-uppercase mb-0">Login</h6>
            </div>
            <div class="block-body">
            <?php if($error_messageold != null){
                                    echo "<p class='lead text-danger'>$error_messageold</p>
                                    
                                    ";}
                                  else{
                                    echo" <p class='lead'>Already our customer?</p>";
                                  }
                                    ?>
              
              <hr>
              <form action="../classes/signin.php" method="post">
                <div class="mb-4">
                  <label class="form-label" for="email1">Email</label>
                  <input class="form-control" id="email1" type="text" name="email">
                </div>
                <div class="mb-4">
                  <label class="form-label" for="password1">Password</label>
                  <input class="form-control" id="password1" type="password" name="password">
                </div>
                <div class="mb-4 text-center">
                  <button class="btn btn-outline-dark" type="submit" name="login"><i class="fa fa-sign-in-alt me-2"></i> Log in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>


  


<footer class="main-footer">
  <!-- Main block - menus, subscribe form-->
  <div class="py-6 bg-gray-300 text-muted"> 
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="fw-bold text-uppercase text-lg text-dark mb-3">Don't Touch It's <span class="text-primary">Art</span></div>
          <p>Discover new art and collections added weekly by our curators.</p>
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank" title="facebook"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank" title="pinterest"><i class="fab fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a class="text-muted text-primary-hover" href="#" target="_blank" title="vimeo"><i class="fab fa-vimeo"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
          <h6 class="text-uppercase text-dark mb-3">For Buyers</h6>
          <ul class="list-unstyled">
            <li> <a class="text-muted" href="#">Art Advisory Services</a></li>
            <li> <a class="text-muted" href="#">Return Policy</a></li>
            <li> <a class="text-muted" href="#">Testimonials</a></li>
            <li> <a class="text-muted" href="#">Buyer FAQ</a></li>
            <li> <a class="text-muted" href="#">Art Prints</a></li>
            <li> <a class="text-muted" href="#">Curator’s Circle</a></li>
            <li> <a class="text-muted" href="#">Catalog</a></li>
            <li> <a class="text-muted" href="#">Gift Card</a></li>
            <li> <a class="text-muted" href="#">Commissions</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
          <h6 class="text-uppercase text-dark mb-3">Top Categories</h6>
          <ul class="list-unstyled">
            <li> <a class="text-muted" href="#">Photography</a></li>
            <li> <a class="text-muted" href="#">Collage</a></li>
            <li> <a class="text-muted" href="#">Sculptures</a></li>
            <li> <a class="text-muted" href="#">Drawings</a></li>
            <li> <a class="text-muted" href="#">Paintings</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h6 class="text-uppercase text-dark mb-3">ART DIGEST</h6>
          <p class="mb-3">Discover new art and collections added weekly by our curators.</p>
          <form action="#" id="newsletter-form">
            <div class="input-group mb-3">
              <input class="form-control bg-transparent border-secondary border-end-0" type="email" placeholder="Your Email Address" aria-label="Your Email Address">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary border-start-0" type="submit"> <i class="fa fa-paper-plane text-lg text-dark"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
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
 <!-- /Footer end-->
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
