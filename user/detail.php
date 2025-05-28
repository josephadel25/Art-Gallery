<?php 
 ini_set('display_errors', 0);
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
    <link rel="stylesheet" href="../css/paint.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
  </head>
  <body>
  <header class="header header-absolute">
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg bg-white navbar-sticky navbar-airy navbar-light  bg-hover-white bg-fixed-white navbar-hover-light navbar-fixed-light">
      <?php 
              session_start();  
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
    
    <section id="title" style="padding: 3% 0 5% 0;text-align: center;">
        <div class="title" >
        </div>
    </section>


    <?php

if($_GET['veiw'] !=null){
  $_SESSION['view']=$_GET['veiw'];
  $ID=$_SESSION['view'];
}else{
  $ID=$_SESSION['view'];
}
  
  
                
$result = mysqli_query($conn, "SELECT artworks.*, users.name AS name 
FROM artworks 
LEFT JOIN users ON artworks.artistid = users.id 
WHERE artworks.id = $ID");
$result2 = mysqli_query($conn, "SELECT * FROM review WHERE artid LIKE $ID");
$count_reviews = mysqli_num_rows($result2);

                
                while ($row = mysqli_fetch_array($result)) {
                  $_SESSION['profile']=$row['artistid'];
                  $des=$row["price"]+100;
                    echo "

                    <section class='product-details'>
                    <div class='container-fluid'>
                      <div class='row'>
                        <div class='col-lg-6 py-3 order-2 order-lg-1'>
                          <div class='owl-carousel owl-theme owl-dots-modern detail-full' data-slider-id='1'>
                            <div class='detail-full-item' style='background: center center url(../$row[image]) no-repeat; background-size: cover;'>     </div>
                            
                          </div>
                        </div>
                        <div class='d-flex align-items-center col-lg-6 col-xl-5 ps-lg-5 mb-5 order-1 order-lg-2'>
                          <div>
                            <h1 class='mb-4'>$row[title]</h1>
                            <div class='d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4'>
                              <ul class='list-inline mb-2 mb-sm-0'>
                                <li class='list-inline-item h4 fw-light mb-0'>$row[price]</li>
                                <li class='list-inline-item text-muted fw-light'> 
                                  <del>$$des.00</del>
                                </li>
                              </ul>
                              <div class='d-flex align-items-center'>
                                <ul class='list-inline me-2 mb-0'>
                                  <li class='list-inline-item me-0'><i class='fa fa-star text-primary'></i></li>
                                  <li class='list-inline-item me-0'><i class='fa fa-star text-primary'></i></li>
                                  <li class='list-inline-item me-0'><i class='fa fa-star text-primary'></i></li>
                                  <li class='list-inline-item me-0'><i class='fa fa-star text-primary'></i></li>
                                  <li class='list-inline-item me-0'><i class='fa fa-star text-gray-300'></i></li>
                                </ul><span class='text-muted text-uppercase text-sm'>$count_reviews reviews</span>
                              </div>
                            </div>
                            <p class='mb-4 text-muted'>$row[title] is the artists favourite flower and It represents elegance in the Chinese culture. It grows in dirty silt but is very beautiful and clean, so it represents a spirit in orient culture. Due to long distance from China, the painting will be rolled in a tube for shipping, without framing or stretching.</p>
                            <form action='#'>
                              <div class='row'>
                                <div class='col-sm-6 col-lg-12 detail-option '>
                                    <p class='text-muted'>Painting, Oil on Canvas</p>
                                  </div>
                                <div class='col-sm-6 col-lg-12 detail-option mb-3'>
                                  <p class=' text-muted'>Size: $row[width] W x $row[height] H x $row[depth] D in</p>
                                </div>
                                <div class='col-12 detail-option mb-3'>
                                    <div class='review'>
                                        <div class='d-flex align-items-center'>
                                            <div class='flex-shrink-0 text-center me-4'>
                                                <img class='review-image' src='../img/WQITIGBV_avatar_small_square.jpg' alt='Han Solo'>
                                            </div>
                                            <div>
                                                <h5 class='mt-2 mb-1'>$row[name]</h5>
                                                <p class='text-muted'>England</p>
                                            </div>
                                            
                                        </div>
                                          <p class='text-muted'>$row[name] is a contemporary Chinese artist who paints magnificent landscapes and abstract works. Jinsheng finds inspiration in his everyday surroundings, and many of his paintings depict the plants and flowers growing in his garden. All of his canvases, whether figurative or abstract, are immensely rich in colour and detail. There is an expressive quality to Jinsheng’s work that suggests a heartfelt connection between artist and subject. The artist's father, also a painter, taught Jinsheng how to paint at a young age. The artist has worked as a professional painter since graduating from art school in 1999.</p>
                                          <div class='mb-2'>
                                      
                                          <a class='btn btn-outline-dark' href='profile.php'>View Profile</a>
                                        </div>
                                      </div>
                              </div>
                              <ul class='list-inline'>
                                
                                <li class='list-inline-item'>
                                        <form method='GET' action='../classes/insert.php'>
                                          <input type='hidden' name='value' value=$row[id]>
                                          <button name='cart' class='btn btn-dark mb-1' type='submit'><i class='fa fa-shopping-cart me-2'></i>Add to Cart</button>
                                        </form>
                                    
                                <li class='list-inline-item'>
                                <form method='post' action='../classes/insert.php'>
                                <input type='hidden' name='value' value=$row[id]>
                                <button name='fav'  class='btn btn-outline-secondary mb-1' type='submit'><i class='far fa-heart me-2'></i>Add to wishlist</button>
                                </form>
                                    
                                    <li class='list-inline-item'>
                                    <a class='btn btn-dark mb-1' href='#'> <i class='fa-solid fa-share me-2'></i>Refer a Freind</a></li>
                              </ul>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>";
                }
?>





      <section class="my-5">
        <div class="container">
          <header class="text-center">
            <h6 class="text-uppercase mb-5">You might also like</h6>
          </header>
          <div class="row">
            <!-- product-->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product">
                  <div class="product-image">
                    <img class="img-fluid" src="../img/7775797-JAIUAEPB-6.jpg" alt="product">
                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.php"></a>
                      <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="detail.php"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="py-2">
                    <p class="text-muted text-sm mb-1">Waterlilies 599</p>
                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.php">jingshen you</a></h3><span class="text-muted">$4000.00</span>
                  </div>
                </div>
              </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product">
                  <div class="product-image">
                    <img class="img-fluid" src="../img/8451519-GXDXTRRT-6.jpg" alt="product">
                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.php"></a>
                      <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="detail.php"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="py-2">
                    <p class="text-muted text-sm mb-1">Waterlilies 599</p>
                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.php">jingshen you</a></h3><span class="text-muted">$4000.00</span>
                  </div>
                </div>
              </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product">
                  <div class="product-image">
                    <img class="img-fluid" src="../img/9483647-LQIQHXIJ-6.jpg" alt="product">
                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.php"></a>
                      <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="detail.php"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="py-2">
                    <p class="text-muted text-sm mb-1">Waterlilies 599</p>
                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.php">jingshen you</a></h3><span class="text-muted">$4000.00</span>
                  </div>
                </div>
              </div>
            <!-- /product-->
            <!-- product-->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="product">
                  <div class="product-image">
                    <img class="img-fluid" src="../img/6856222-HSC00001-6.jpg" alt="product">
                    <div class="product-hover-overlay"><a class="product-hover-overlay-link" href="detail.php"></a>
                      <div class="product-hover-overlay-buttons"><a class="btn btn-dark btn-buy" href="detail.php"><i class="fa-search fa"></i><span class="btn-buy-label ms-2">View</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="py-2">
                    <p class="text-muted text-sm mb-1">Waterlilies 599</p>
                    <h3 class="h6 text-uppercase mb-1"><a class="text-dark" href="detail.php">jingshen you</a></h3><span class="text-muted">$4000.00</span>
                  </div>
                </div>
              </div>
            <!-- /product-->
          </div>
        </div>
      </section>




      <section class="mt-5">
        <div class="container">
            <div class="tab-pane" id="reviews" role="tabpanel">
              <div class="row mb-5">
                <div class="col-lg-10 col-xl-9">
                <?php
$result1 = mysqli_query($conn, "SELECT * FROM review WHERE artid LIKE $ID");
$i = 0;
while (($row = mysqli_fetch_array($result1)) && ($i < 4)) {
    $s = $row['rating'];
    echo "
    <div class='review d-flex'>
        <div>
            <h5 class='mt-2 mb-1'>$row[name]</h5>
            <div class='mb-2'>";
    for ($x = $s; $x >= 1; $x--) {
        echo "<i class='fa fa-xs fa-star text-warning'></i>";
    }
    for ($x = $s; $x < 5; $x++) {
      echo "<i class='fa fa-xs fa-star text-gray-200'></i>";
  }
    echo "
            </div>
            <p class='text-muted'>$row[review]</p>
        </div>
    </div>";
    $i += 1;
} 
?>

                  <div class="py-5 px-3">
                    <h5 class="text-uppercase mb-4">Leave a review</h5>
                    <form class="form" id="contact-form" method="post" action="reveiw.php">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="mb-4">
                            <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name" required="required">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb-4">
                            <select class="custom-select focus-shadow-0" name="rating" id="rating">
                              <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</option>
                              <option value="4">&#9733;&#9733;&#9733;&#9733;&#9734; (4/5)</option>
                              <option value="3">&#9733;&#9733;&#9733;&#9734;&#9734; (3/5)</option>
                              <option value="2">&#9733;&#9733;&#9734;&#9734;&#9734; (2/5)</option>
                              <option value="1">&#9733;&#9734;&#9734;&#9734;&#9734; (1/5)</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <input class="form-control" type="email" name="email" id="email" placeholder="Enter your  email" required="required">
                    
                      <?php
                      echo"
                        <input type='hidden' name='artid' value='$ID'>"
                    ?>
                      </div>
                      <div class="mb-4">
                        <textarea class="form-control" rows="4" name="review" id="review" placeholder="Enter your review" required="required"></textarea>
                      </div>
                      <button class="btn btn-outline-dark" type="submit">Post review</button>
                    </form>
                  </div>
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
