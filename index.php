<?php 
 ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.default.7acfaf01.css" id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <style>

  </style>
  </head>
  <body>
  <?php 
              session_start();  
              require "classes/connect.php";
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


    
    <!-- Hero Section-->
    <section class="home-full-slider-wrapper mb-2">
      <!-- Hero Slider-->
      <div class="owl-carousel owl-theme owl-dots-modern home-full-slider">
        <div class="item home-full-item" style="background: #f8d5cf;"><img class="bg-image" src="img/pexels-егор-белов-11802168.jpg" alt="">
          <div class="container-fluid h-100 py-5">
            <div class="row align-items-center h-100">
              <div class="col-lg-8 col-xl-6 mx-auto text-white text-center position-relative">
                <h5 class="text-uppercase text-white fw-light mb-4 letter-spacing-5"> Just arrived</h5>
                <h1 class="mb-5 display-2 fw-bold text-serif">New This Week</h1>
                <p class="lead mb-4">Discover New Art Our Curators Love Every Week</p>
                <p> <a class="btn btn-light" href="#last">Start Exploring</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="item home-full-item bg-dark dark-overlay"><img class="bg-image" src="img/pexels-suzy-hazelwood-3004909.jpg" alt="">
          <div class="container-fluid h-100">
            <div class="row align-items-center h-100">
              <div class="col-lg-8 col-xl-6 mx-auto text-white text-center overlay-content">
                <h1 class="mb-4 display-2 text-uppercase fw-bold">Discover Art You Love</h1>
                <p class="lead mb-5">Browse Curated Collection Updated Daily</p>
                <p> <a class="btn btn-light" href="user/category.php">Shop Collection</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="item home-full-item"><img class="bg-image" src="img/pexels-pixabay-460736.jpg" alt="">
          <div class="container-fluid h-100">
            <div class="row align-items-center h-100">
              <div class="col-lg-8 col-xl-8 mx-auto text-white text-center overlay-content">
                <h3 class="mb-4 display-2 text-uppercase fw-bold">Get Recommendations</h1>
                <p class="lead mb-5">Work with an Art Advisor to Find Your Perfect Artwork</p>
                <p> <a class="btn btn-light" href="user/category.php">Get Started</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section>
      <div class="container-fluid g-2">
        <div class="row g-2">
          <div class="col-md-6">
            <div class="card border-0 text-white text-center"><img class="card-img" src="img/pexels-photo-3724836.jpeg" alt="Card image">
              <div class="card-img-overlay d-flex align-items-center"> 
                <div class="w-100 py-3">
                  <h2 class="display-3 fw-bold mb-4">Bestsellers</h2><a class="btn btn-light" href="#best">Shop The Collection</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card border-0 text-white text-center"><img class="card-img" src="img/pexels-una-laurencic-20967.jpg" alt="Card image">
              <div class="card-img-overlay d-flex align-items-center"> 
                <div class="w-100 py-3">
                  <h2 class="display-3 fw-bold mb-4">New arrivals</h2><a class="btn btn-light" href="#last">Start Exploring</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-0 text-center text-white"><img class="card-img" src="img/pexels-judit-agusti-aranda-2362469.jpg" alt="Card image">
              <div class="card-img-overlay d-flex align-items-center"> 
                <div class="w-100">
                  <h2 class="display-4 mb-4">Sculptures</h2><a class="btn btn-link text-white" href="user/Sculptures.php">Shop now <i class="fa-arrow-right fa ms-2"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-0 text-center text-white"><img class="card-img" src="img/pexels-brett-sayles-6424244.jpg" alt="Card image">
              <div class="card-img-overlay d-flex align-items-center"> 
                <div class="w-100">
                  <h2 class="display-4 mb-4">Drawings</h2><a class="btn btn-link text-white" href="user/Drawings.php">Shop now <i class="fa-arrow-right fa ms-2"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-0 text-center text-white"><img class="card-img" src="img/pexels-tiana-2956376.jpg" alt="Card image">
              <div class="card-img-overlay d-flex align-items-center"> 
                <div class="w-100">
                  <h2 class="display-4 mb-4">Paintings</h2><a class="btn btn-link text-white" href="user/painting.php">Shop now <i class="fa-arrow-right fa ms-2"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>


      <section class="pt-6 pb-5" id="last">
        <div class="container">
          <div class="row">
            <div class="col-xl-8 mx-auto text-center mb-5">
              <h2 class="text-uppercase">Latest arrivals</h2>
            </div>
          </div>
          <div class="row">
            <!-- product-->
            <div class="col-lg-3 col-md-4 col-6">
              <div class="product">
                <div class="product-image">
                  <img class="img-fluid" src="img/7775797-JAIUAEPB-6.jpg" alt="product">
                  <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="user/detail.php"></a>
                    <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="user/detail.php"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Waterlilies 599</p>
                  <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="user/detail.php">jingshen you</a></h3><span class="text-muted">$4000.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-lg-3 col-md-4 col-6">
              <div class="product">
                <div class="product-image">
                  <img class="img-fluid" src="img/8451519-GXDXTRRT-6.jpg" alt="product">
                  <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="user/detail.php"></a>
                    <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="user/detail.php"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Waterlilies 599</p>
                  <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="user/detail.php">jingshen you</a></h3><span class="text-muted">$4000.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-lg-3 col-md-4 col-6">
              <div class="product">
                <div class="product-image">
                  <img class="img-fluid" src="img/9483647-LQIQHXIJ-6.jpg" alt="product">
                  <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="user/detail.php"></a>
                    <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="user/detail.php"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Waterlilies 599</p>
                  <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="user/detail.php">jingshen you</a></h3><span class="text-muted">$4000.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-lg-3 col-md-4 col-6">
              <div class="product">
                <div class="product-image">
                  <img class="img-fluid" src="img/6856222-HSC00001-6.jpg" alt="product">
                  <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="user/detail.php"></a>
                    <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="user/detail.php"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                    </div>
                  </div>
                </div>
                <div class="py-2">
                  <p class="text-muted text-sm mb-1">Waterlilies 599</p>
                  <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="user/detail.php">jingshen you</a></h3><span class="text-muted">$4000.00</span>
                </div>
              </div>
            </div>
            <!-- /product-->
          </div>
        </div>
      </section>









    <section class="py-6 position-relative light-overlay"  id="best">
      <img class="bg-image" src="img/hp-hero-slide1-03252024-large.jpg" alt="">
      <div class="container" >
        <div class="overlay-content text-center text-dark p-6" >
          <p class="text-uppercase fw-bold mb-1 letter-spacing-5">Featured Collections                </p>
          <h3 class="display-1 fw-bold text-serif mb-4">Bestsellers</h3><a class="btn btn-dark" href="user/category.php">Shop Now</a>
        </div>
      </div>
    </section>



    <section class="position-relative py-6 mb-4" >
      <div class="container position-relative" >
        <div class="row g-0" >
          <div class="col-lg-7" style="background: url(img/1712683894855.jpeg) no-repeat center center ; background-size: cover;">
          </div>
          <div class="col-lg-5"  style="background-color: #F9F9F9;">
            <div class=" p-6 d-flex align-items-center justify-content-center" style="flex-direction: column;">
              <h3 class="mb-3 text-serif">Find Art You Love</h3>
              <p class="text-muted">“At Don't Touch It's Art, we make it our mission to help you discover and buy from the best emerging artists around the world. Whether you’re looking to discover a new artist, add a statement piece to your home, or commemorate an important life event, Saatchi Art is your portal to thousands of original works by today’s top artists.”</p>
              <img src="img/w-sig-black.png" alt="" width="50%">
              <p class="text-muted pt-2">Chief Curator & VP, Art Advisory</p>
              <a class="btn btn-link text-dark p-0 pt-2" href="#">WORK WITH ART ADVISOR  <i class="fa fa-long-arrow-alt-right"></i></a>
            </div>
          </div>
          
        </div>
      </div>
    </section>


    <!-- Footer-->
    <footer class="main-footer">
      <!-- Services block-->
      <div class="bg-gray-100 text-dark-700 py-6">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 service-column">
              
              
              <div class="service-text">
                <h6 class="text-uppercase">Global Selection</h6>
                <p class="text-muted fw-light text-sm mb-0">Explore an unparalleled selection of paintings, photography, sculpture, and more by thousands of artists from around the world.</p>
              </div>
            </div>
            <div class="col-lg-4 service-column">
              
              
              <div class="service-text">
                <h6 class="text-uppercase">Satisfaction Guaranteed</h6>
                <p class="text-muted fw-light text-sm mb-0">Our 14-day satisfaction guarantee allows you to buy with confidence. If you’re not satisfied with your purchase, return it and we’ll help you find a work you love.</p>
              </div>
            </div>
            <div class="col-lg-4 service-column">
              
              <div class="service-text">
                <h6 class="text-uppercase">Complimentary Art Advisory Services</h6>
                <p class="text-muted fw-light text-sm mb-0">Our personalized art advisory service gives you access to your own expert curator, free of charge.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
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
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript Bundle (Popper.js included)-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Owl Carousel-->
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel2.thumbs.min.js"></script>
    <!-- NoUI Slider (price slider)-->
    <script src="js/nouislider.min.js"></script>
    <!-- Smooth scrolling-->
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <!-- Lightbox gallery-->
    <script src="js/glightbox.min.js"> </script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="js/ofi.min.js"></script>
    <script>var basePath = '';</script>
    <script src="js/theme.30e7c8f9.js"></script>
  </body>
</html>



