<header class="header header-absolute">
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg bg-transparent navbar-sticky navbar-airy navbar-dark bg-hover-white bg-fixed-white navbar-hover-light navbar-fixed-light">
        <div class="container-fluid">  
          <a class="navbar-brand d-flex align-items-center justify-content-center" href="index.php">
            <img src="img/android-chrome-192x192.png" height="40">
            <div class="logo">
              <span class="top">DON'T</span>
              <span class="bottom">TOUCH IT'S ART</span>
            </div>            
          </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item position-static"><a class="nav-link" href="user/Photography.php">Photography</a></li>
              <li class="nav-item position-static"><a class="nav-link "href="user/painting.php">Paintings</a></li>
              <li class="nav-item position-static"><a class="nav-link" href="user/Sculptures.php">Sculptures</a></li>
              <li class="nav-item position-static"><a class="nav-link" href="user/Drawings.php">Drawings</a></li>
              <li class="nav-item position-static"><a class="nav-link" href="user/Mixed Media.php">Mixed Media</a></li>
              <li class="nav-item"><a class="nav-link" href="user/contact.php">Contact</a></li>
            </ul>

            <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
              <!-- Search Button-->
              <div class="nav-item navbar-icon-link" data-bs-toggle="search">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
              <!-- User Not Logged - link to login page-->
              <div class="nav-item dropdown">
                <a class="navbar-icon-link " id="homeDropdownMenuLink" href="../index.php" data-bs-target="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo"<span class='text-sm ms-2 ms-lg-0 text-uppercase text-sm fw-bold '>".$_SESSION['name']."</span>";?><span class="text-sm ms-2 ms-lg-0 text-uppercase text-sm fw-bold d-none d-sm-inline d-lg-none">Sign In</span></a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-menu-end p-2" aria-labelledby="homeDropdownMenuLink">
                <a class="dropdown-item" href="user/info.php">Profile</a>
                <hr>
                  <a class="dropdown-item" href="classes/logout.php">Log Out</a></div>
              </div>
              <div class="nav-item"><a class="navbar-icon-link" href="artist/studio.php"> 
                <i class="fa-brands fa-artstation"></i><span class="text-sm ms-2 ms-lg-0 text-uppercase text-sm fw-bold d-none d-sm-inline d-lg-none">Stdio</span></a>
              </div>
              <div class="nav-item"><a class="navbar-icon-link" href="user/gift.php"> 
                <i class="fa-solid fa-gift" ></i><span class="text-sm ms-2 ms-lg-0 text-uppercase text-sm fw-bold d-none d-sm-inline d-lg-none">Egift</span></a>
              </div>
              <div class="nav-item"><a class="navbar-icon-link" href="user/favorite.php"> 
                <i class="fa-regular fa-heart"></i><span class="text-sm ms-2 ms-lg-0 text-uppercase text-sm fw-bold d-none d-sm-inline d-lg-none">Favorite</span></a>
              </div>
              <!-- Cart -->
              <div class="nav-item"><a class="navbar-icon-link" href="user/cart.php"> 
                <i class="fa-solid fa-cart-shopping" ></i><span class="text-sm ms-2 ms-lg-0 text-uppercase text-sm fw-bold d-none d-sm-inline d-lg-none">View cart</span></a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- /Navbar -->

      
      <div class="search-area-wrapper">
    <div class="search-area d-flex align-items-center justify-content-center">
        <div class="close-btn">
            <i class="fa-solid fa-xmark fa-lg svg-icon svg-icon-light w-3rem h-3rem"></i>
        </div>
        <form method="post" class="search-area-form" action="user/category.php">
            <div class="mb-4 position-relative">
                <input class="search-area-input" type="search" name="search" id="search" placeholder="What are you looking for?">
                <button class="search-area-button me-6" type="submit">
                    <i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>
                </button>
                <div class="search-area-button dropdown me-4" style="border: none;">
                    <select class="form-select w-auto" id="homeDropdownMenuLink" name="category" style="border: none;padding: 8px 30px 0px 0px;">
                        <option class="w-auto border-0" style="border: none;" value="art"><h3>Art</h3></option>
                        <option class="w-auto border-0" style="border: none;" value="artist"><h3>Artist</h3></option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>
      <!-- /Fullscreen search area-->
    </header>