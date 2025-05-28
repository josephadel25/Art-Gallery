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
    <?php
    require "../classes/connect.php";
    $database = Connect::getInstance();
$conn = $database->getConnection();
    $ID=$_GET['EDIT'];
    $up=mysqli_query($conn,"select * from artworks where id=$ID");
    $data=mysqli_fetch_array($up);
    ?>

    
<section>
      <div class="container mb-5">
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5 mb-md-0">
            <form action="../classes/edit.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-4">
                    <label class="form-label" for="title">Title *</label>
                    <input value='<?php echo $data['title']?>'  class="form-control"  type="text"  name="title" id="title" placeholder="Enter title" required="required">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="price">Price *</label>
                    <input value='<?php echo $data['price']?>' class="form-control" type="text" name="price" id="Price" placeholder="Price" required="required">
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="mb-4">
                        <label class="form-label" for="Width">Width *</label>
                        <input value='<?php echo $data['width']?>' class="form-control" type="text" name="width" id="Width" placeholder="Width" required="required">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="mb-4">
                        <label class="form-label" for="Height">Height *</label>
                        <input value='<?php echo $data['height']?>' class="form-control" type="text" name="height" id="Height" placeholder="Height" required="required">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="mb-4">
                        <label class="form-label" for="Depth">Depth *</label>
                        <input value='<?php echo $data['depth']?>' class="form-control" type="text" name="depth" id="Depth" placeholder="Depth" required="required">
                      </div>
                    </div>
                    <input type='hidden' name='id' value='<?php echo $ID?>'>
                  </div>
                      <div class="mb-4">
                      <input class="w-100 btn btn-lg btn-outline-dark" type="submit" name="update" value="Confirm">
                      </div>
            </div>
            
                
            
                </div>
                
              </form>
            </div>
          
        </div>
      </div>
    </section>


  

</body>
</html>