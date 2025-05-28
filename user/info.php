<?php
ini_set('display_errors', 0);
session_start();
if (isset($_GET['error'])) {
  $error_message = $_GET['error'];
  // Display error message
}
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
    <!--css -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/style.default.7acfaf01.css" id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../css/all.min.css"/>
    <link rel="stylesheet" href="../css/paint.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <style>
      .email_error{
      color: black;
      background-color:#ffff;
      padding:10px;
      display:none;
      transform: translatY(-20px);
      margin-bottom:20;
      font-size:14;
    }
    </style>
    <?php
    if($error_message != null){
      ?> 
      <style> .email_error{display:block}</style> 
      <?php 
    }
    ?>
  </head>
  <body>
  <header class="header header-absolute">
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg bg-white navbar-sticky navbar-airy navbar-light  bg-hover-white bg-fixed-white navbar-hover-light navbar-fixed-light">
  <?php
    require_once "../classes/connect.php";
    $database = Connect::getInstance();
$conn = $database->getConnection();
    $ID=$_SESSION['id'];
    $up=mysqli_query($conn,"select * from users where id=$ID");
    $data=mysqli_fetch_array($up);
    
    ?>

<?php 
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


    <section id="title" class="position-relative py-3 py-lg-7 overflow-hidden " style="padding: 12% 0 5% 0;text-align: center;">
          <div class="title  pt-6" >
            <h1 class="hero-heading mb-0" style="color: #000000;">Profile</h1>
          </div>
      </section>
  
  


<section>
    <div class="container"><div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="block mb-5">
                <div class="block-header">
                    <strong class="text-uppercase">Change your password</strong>
                </div>
                <div class="block-body">
                    <form action='../classes/edit.php' method='post'>
                        <div class="row">
                            <div class="col-sm-6"><div class="mb-4">
                            <?php if($error_messageold != null){
                                    echo "<label class='form-label form-label text-danger' for='password_2'>
                                    $error_messageold
                                    </label>";}
                                  else{
                                    echo" <label class='form-label form-label' for='password_2'>
                                    Old Password
                                    </label>";
                                  }
                                    ?>
                                <input name='old' type="password" id="password_old" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="form-label form-label" for="password_1">New password</label>
                                <input name='new' type="password" id="password_1" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                            <?php if($error_message != null){
                                    echo "<label class='form-label form-label text-danger' for='password_2'>
                                    $error_message
                                    </label>";}
                                  else{
                                    echo" <label class='form-label form-label' for='password_2'>
                                    Retype new password
                                    </label>";
                                  }
                                    ?>
                                <input name='new2' type="password" id="password_2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                    
                        <button type="submit" name='pass' class="btn btn-dark"><i class="fa-solid fa-floppy-disk"></i>Change password</button>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="block mb-5">
            <div class="block-header">
                <strong class="text-uppercase">Personal details</strong>
            </div>
            <div class="block-body">
                <form action='../classes/edit.php' method='post'>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="form-label form-label" for="firstname">Name</label>
                                <input name='name' type="text" id="firstname" class="form-control" value='<?php echo $data['name']?>'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="form-label form-label" for="address">address</label>
                                <input name='address' type="text" id="address" class="form-control" value='<?php echo $data['address']?>'>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="form-label form-label" for="phone">Telephone</label>
                                <input name='phone' type="text" id="phone" class="form-control" value='<?php echo $data['phone']?>'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="form-label form-label" for="email">Email</label>
                                <input name='email' type="text" id="email" class="form-control" value='<?php echo $data['email']?>'>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-outline-dark" name='info'><i class="fa-solid fa-floppy-disk"></i>Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="mb-5 col-xl-3 col-lg-4">
        <div class="customer-sidebar card border-0">
            <div class="customer-profile">
                <a class="d-inline-block" href="#">
                    <img class="img-fluid rounded-circle customer-image" src="../img/DVTWFMHZ_avatar_small_square.jpg" alt="Customer Profile Image">
                </a>
                    <h5 class="text-uppercase"><?php echo $_SESSION['name'] ?></h5>
                    <p class="text-muted text-sm mb-0">Ostrava, Czech Republic</p>
                </div>
            </div>
        </div>
    </div>
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
