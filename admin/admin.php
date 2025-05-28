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
          </div>
          <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
                <div class="nav-item"><a class="navbar-icon-link" href="../classes/logout.php"> 
                  <i class="fa-solid fa-user-tie"></i><span class="text-sm ms-2 ms-lg-0 text-uppercase text-sm fw-bold d-none d-sm-inline d-lg-none">Profile</span></a>
                </div>
  
              </div>
        </div>
      </nav>
      <!-- /Navbar -->
    </header>



  

    <section id="title" class="position-relative py-3 py-lg-7 overflow-hidden " style="padding: 12% 0 5% 0;text-align: center;">
        <div class="title  pt-6" >
          <h1 class="hero-heading mb-0" style="color: #000000;">Artists</h1>
        </div>
    </section>




    <section style="text-align: center;padding-top: 3%; padding-bottom: 3%;">
      <div class="container">
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">name</th>
                      <th scope="col">email</th>
                      <th scope="col">works</th>
                      <th scope="col">manage</th>
                  </tr>
              </thead>
              <tbody>
              <?php
require "../classes/connect.php";
$database = Connect::getInstance();
$conn = $database->getConnection();
$sql = "SELECT users.*, COUNT(artworks.id) AS num_of_works FROM users LEFT JOIN artworks ON users.id = artworks.artistid where users.category='1' GROUP BY users.id ";
$result = mysqli_query($conn, $sql);

$i = 1;
while ($row = mysqli_fetch_array($result)) {
    echo "
        <tr>
            <th scope='row'>$i</th>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[num_of_works]</td>
            <td>
            
                <form method='post' action='../classes/delete.php'>
                    <button type='submit' name='delete' value='$row[id]' class='btn btn-md btn-outline-danger'>Delete</button>
                </form>

            </td>
        </tr>";
    $i += 1;
}
?>

              </tbody>
          </table>
      </div>
  </section>








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
