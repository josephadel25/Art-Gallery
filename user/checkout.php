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
      <?php 
              session_start();  
              require "../classes/connect.php";
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
      <li class="breadcrumb-item text-black active">cart</li>
    </ul>
      <div class="title" >
        <h1 class="hero-heading mb-0" style="color: #000000;">SHOPPING CART</h1>
      </div>
  </section>
  <?php
                $conn = mysqli_connect("localhost", "root", "", "artgallery");
                $userID = $_SESSION['id'];
                
                // Select artworks that are in the cart of the current user
                $query = "SELECT artworks.*, users.name AS artist_name, cart.id AS cart_id
          FROM artworks 
          JOIN cart ON artworks.id = cart.artid 
          JOIN users ON artworks.artistid = users.id 
          WHERE cart.userid = $userID";
                $result = mysqli_query($conn, $query);
                $sum = 0;
                $count = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $sum += $row['price'];
                    $count +=1;
                }
                ?>

<section>
      <div class="container">
        <div class="row">
        <div class="col-lg-8">
            <ul class="custom-nav nav nav-pills mb-5">
              <li class="nav-item w-50"><a class="nav-link text-sm active" href="checkout.php">Payment Method </a></li>
              <li class="nav-item w-50"><a class="nav-link text-sm " href="checkout1.php">Order Review</a></li>
            </ul>
            <div class="mb-5">
              <div id="accordion" role="tablist">
                <div class="block mb-3">
                  <div class="block-header" id="headingOne" role="tab"><strong><a class="accordion-link" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Credit Card</a></strong></div>
                  <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="block-body">
                      <form action="#">
                        <div class="row">
                          <div class="mb-4 col-md-6">
                            <label class="form-label" for="card-name">Name on Card</label>
                            <input class="form-control" type="text" name="card-name" placeholder="Name on card" id="card-name">
                          </div>
                          <div class="mb-4 col-md-6">
                            <label class="form-label" for="card-number">Card Number</label>
                            <input class="form-control" type="text" name="card-number" placeholder="Card number" id="card-number">
                          </div>
                          <div class="mb-4 col-md-4">
                            <label class="form-label" for="expiry-date">Expiry Date</label>
                            <input class="form-control" type="text" name="expiry-date" placeholder="MM/YY" id="expiry-date">
                          </div>
                          <div class="mb-4 col-md-4">
                            <label class="form-label" for="cvv">CVC/CVV</label>
                            <input class="form-control" type="text" name="cvv" placeholder="123" id="cvv">
                          </div>
                          <div class="mb-4 col-md-4">
                            <label class="form-label" for="zip">ZIP</label>
                            <input class="form-control" type="text" name="zip" placeholder="123" id="zip">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="block mb-3">
                  <div class="block-header" id="headingTwo" role="tab"><strong><a class="accordion-link collapsed" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Paypal</a></strong></div>
                  <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="block-body py-5 d-flex align-items-center">
                      <input type="radio" name="shippping" id="payment-method-1">
                      <label class="ms-3" for="payment-method-1"><strong class="d-block text-uppercase mb-2"> Pay with PayPal</strong>
                      <span class="text-muted text-sm">choose using Patpal method to complete your payment.</span></label>
                    </div>
                  </div>
                </div>
                <div class="block mb-3">
                  <div class="block-header" id="headingThree" role="tab"><strong><a class="accordion-link collapsed" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Pay on delivery</a></strong></div>
                  <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="block-body py-5 d-flex align-items-center">
                      <input type="radio" name="shippping" id="payment-method-2">
                      <label class="ms-3" for="payment-method-2"><strong class="d-block text-uppercase mb-2"> Pay on delivery</strong>
                      <span class="text-muted text-sm">choose to pay on delivery method to complete your payment.</span></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-5 d-flex justify-content-between flex-column flex-lg-row"><a class="btn btn-link text-muted" href="cart.php"> <i class="fa fa-angle-left me-2"></i>Back to Cart</a><a class="btn btn-dark" href="checkout1.php">Continue to order review<i class="fa fa-angle-right ms-2"></i></a></div>
          </div>

        <div class="col-lg-4 ">
          <div class="block mb-5">
            <div class="block-header">
              <h6 class="text-uppercase mb-0">Order Summary</h6>
            </div>
            <div class="block-body bg-light pt-1">
              <ul class="order-summary mb-0 list-unstyled">
                <li class="order-summary-item"><span>Order Subtotal </span><span><?php echo $sum.".00$"?></span></li>
                <li class="order-summary-item"><span>Shipping and handling</span><span><?php echo $sum*0.1.".00$"?></span></li>
                <li class="order-summary-item"><span>Tax</span><span>0.00$</span></li>
                <li class="order-summary-item border-0"><span>Total</span><strong class="order-summary-total"><?php echo $sum+$sum*0.1.".00$"?></strong></li>
              </ul>
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
