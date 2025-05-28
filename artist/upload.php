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
    <style>
      #drop-area{
        width: 500px;
        height: 300px;
        background: #fff;
        text-align: center;
        border-radius: 20px;
      }
      #img-view{
        width: 100%;
        height: 100%;
        padding: 20px;
        border-radius: 20px;
        border: 2px dashed #bbb5ff;
        background: #f7f8ff;
        background-position: center;
        background-size: cover;
      }
      #img-view img{
        width: 100px;
        margin-bottom: 8px;
      }
      #img-view span{
        display: block;
        font-size: 12px;
        color: #777;
        margin-top: 8px;
      }
    </style>
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
          <h1 class="hero-heading mb-0" style="color: #000000;">Upload Artwork</h1>
        </div>
    </section>



    <section>
      <div class="container mb-5">
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5 mb-md-0">
            <form action="../classes/insert.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-4">
                    <label class="form-label" for="title">Title *</label>
                    <input  class="form-control"  type="text"  name="title" id="title" placeholder="Enter title" required="required">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="price">Price *</label>
                    <input class="form-control" type="text" name="price" id="Price" placeholder="Price" required="required">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="floatingImage">Upload your Art Work *</label>
                    <input class="form-control" type="file" name="image" placeholder="Image" required="required">
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="mb-4">
                        <label class="form-label" for="Width">Width *</label>
                        <input class="form-control" type="text" name="Width" id="Width" placeholder="Width" required="required">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="mb-4">
                        <label class="form-label" for="Height">Height *</label>
                        <input class="form-control" type="text" name="Height" id="Height" placeholder="Height" required="required">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="mb-4">
                        <label class="form-label" for="Depth">Depth *</label>
                        <input class="form-control" type="text" name="Depth" id="Depth" placeholder="Depth" required="required">
                      </div>
                    </div>
                  </div>

          <div class="mb-4 d-flex justify-content-between">
            <div class="form-check form-check-inline "  required>
              <input class="form-check-input" type="radio" name="type" id="Radios1" value="1" >
              <label class="form-check-label" for="Radios1">
                Photography
              </label>
            </div>
            <div class="form-check form-check-inline" required>
              <input class="form-check-input" type="radio" name="type" id="Radios2" value="2">
              <label class="form-check-label" for="Radios2">
                Painting
              </label>
            </div>
            <div class="form-check form-check-inline" required>
              <input class="form-check-input" type="radio" name="type" id="Radios3" value="3" >
              <label class="form-check-label" for="Radios3">
                Sculptures
              </label>
            </div>
            <div class="form-check form-check-inline" required>
              <input class="form-check-input" type="radio" name="type" id="Radios4" value="4" >
              <label class="form-check-label" for="Radios4">
                Drawing
              </label>
            </div>
            <div class="form-check form-check-inline" required>
              <input class="form-check-input" type="radio" name="type" id="Radios4" value="5" >
              <label class="form-check-label" for="Radios4">Mixed media</label>
              </div>
              
              <br>
            </div>
                <input class="w-100 btn btn-lg btn-outline-dark" type="submit" name="upload" value="upload">
            
                </div>
                
              </form>
            </div>
          
        </div>
      </div>
    </section>
  
  
  
    
  
  




<footer class="main-footer">
  <!-- Copyright section of the footer-->
  <div class="py-4 fw-light bg-white text-gray-300">
    
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
