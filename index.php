<?php
  $page = 'Home';
  include('inc/header.php'); 
  ?>
<body>
  <main class="main-container">
    <!-- header -->
    <!--<header class="header">-->
    <!--    <nav class="navbar navbar-expand-sm navbar-dark  stickyhead">-->
    <!--        <div class="container-fluid">-->
    <!--          <a class="navbar-brand" href="index.php">-->
    <!--            <img class="logo" src="assets/img/main-logo.png" alt="logo">-->
    <!--          </a>-->
    <!--          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">-->
    <!--            <span class="navbar-toggler-icon"></span>-->
    <!--          </button>-->
    <!--          <div class="collapse navbar-collapse justify-content-end gap-4 collapse-mob" id="collapsibleNavbar">-->
    <!--            <ul class="navbar-nav menu-container">-->
    <!--              <li class="nav-item menu-list head-menu">-->
    <!--                <a class="nav-link text-dark nested-menu" href="product-listing.php">Painting</a>-->
    <!--              </li>-->
    <!--              <li class="nav-item menu-list head-menu">-->
    <!--                <a class="nav-link text-dark paint nested-menu" href="#">Drawing</a>-->
    <!--              </li>-->
    <!--              <li class="nav-item menu-list head-menu">-->
    <!--                <a class="nav-link text-dark nested-menu" href="#">Prints</a>-->
    <!--              </li>    -->
    <!--              <li class="nav-item menu-list head-menu">-->
    <!--                <a class="nav-link text-dark nested-menu" href="#">Photography</a>-->
    <!--              </li>    -->
    <!--                  <div class="head-inp-wrap position-relative">-->
    <!--              <input type="text" class="header-main-search" placeholder="Search"/>-->
    <!--                  <svg viewBox="0 0 24 24">-->
    <!--                      <path fill=currentColor d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />-->
    <!--                  </svg>-->
    <!--              </div>-->
    <!--            </ul>-->
    <!--          <form class="d-flex sign-in-btn gap-2 position-relative align-items-center">-->
    <!--                <span class="visi-hddn-mob position-relative">-->
    <!--                 <a href="cart.php">-->
    <!--                <svg viewBox="0 0 24 24">-->
    <!--                    <path d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z" />-->
    <!--                </svg>-->
    <!--                    </a>-->
    <!--<span class="items-added rounded-circle position-absolute fw-bold">0</span>-->
    <!--           </span>-->
    <!--                <a href="signin.php">-->
    <!--                  <button class="btn btn-dark rounded-pill py-1 px-4 zoom" type="button">Log In</button>-->
    <!--                </a>-->
    <!--            </form>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </nav>-->
    <!--</header>-->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <?php
    $totalSlides = mysqli_num_rows($Slider); // Total number of slides
    $activeIndex = 0; // Initialize active slide index
    while ($row = mysqli_fetch_array($Slider)) {
      $activeClass = ($activeIndex === 0) ? 'active' : ''; // Set 'active' class for the first slide
      echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="' . $activeIndex . '" class="' . $activeClass . '" aria-label="Slide ' . ($activeIndex + 1) . '"></button>';
      $activeIndex++;
    }
    ?>
  </div>
  <div class="carousel-inner">
    <?php
    mysqli_data_seek($Slider, 0); // Reset the result pointer to the beginning
    $activeIndex = 0; // Reset active slide index
    while ($row = mysqli_fetch_array($Slider)) {
      $activeClass = ($activeIndex === 0) ? 'active' : ''; // Set 'active' class for the first slide
      ?>
      <div class="carousel-item <?php echo $activeClass; ?>">
        <img src="admin/assets/images/banner/<?=$row['Image'];?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <div class="btn-plus-content">
            <h1 class="text-black"><?=$row['Title'];?></h1>
            <button class="btn-shop rounded-pill fw-norma bg-black text-white" type="button">Shop Now</button>
          </div>
        </div>
      </div>
      <?php
      $activeIndex++;
    }
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-black" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    <div class="">
      <!-- Second section -->
      <!--<section class="second-section">-->
      <!--    <div class="container">-->
      <!--        <div class="row">-->
      <!--            <div class="col-md-6">-->
      <!--                <div class="btn-plus-content">-->
      <!--                    <h1 class=" ">Savor the Pure Bliss of Art</h1>-->
      <!--                <button class="btn-shop rounded-pill fw-norma  bg-black text-white" type="button">Shop Now</button>-->
      <!--                </div>-->
      <!--            </div>-->
      <!--            <div class="col-md-6">-->
      <!--            </div>-->
      <!--        </div>-->
      <!--    </div>-->
      <!--</section>-->
      <div class="contain-wrapper">
        <!-- Section Third  (Buy Original Painting)  -->
        <section class="third-sec paintings_section">
          <div class="separator d-flex align-items-center text-center justify-content-center my-4 gap-4">
            <h2 class="fw-bold">Buy Original paintings</h2>
          </div>
          <div class="row row-mob justify-content-center top-rw">
            <div class="col-md-3 w-left">
              <div class="image-box-zoom rounded">
                <a href="product.php" class="">
                <img class="mb-2 w-100 " src="assets/img/buy-paintings-2.jpg" alt="buy paintings img">  
                </a> 
                <div class="bg-white d-flex p-2 justify-content-between prize-size_wrapper rounded-3">
                  <p class="text-black">Canvas size 24x24</p>
                  <p class="text-black">₹ 48,000</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 w-left">
              <div class="image-box-zoom rounded">
                <a href="product.html" class="">
                <img class="mb-2 w-100 " src="assets/img/buy-paintings-2.jpg" alt="buy paintings img">  
                </a> 
              </div>
              <div class="bg-white d-flex p-2 justify-content-between prize-size_wrapper rounded-3">
                <p class="text-black">Canvas size 24x24</p>
                <p class="text-black">₹ 48,000</p>
              </div>
            </div>
            <div class="col-md-3 w-left">
              <div class="image-box-zoom rounded">
                <a href="product.html" class="">
                <img class="mb-2 w-100 img-m2" src="assets/img/mangoes.jpg" alt="buy paintings img">  
                </a> 
              </div>
              <div class="bg-white d-flex p-2 justify-content-between prize-size_wrapper rounded-3">
                <p class="text-black">Canvas size 24x24</p>
                <p class="text-black">₹ 48,000</p>
              </div>
            </div>
            <div class="col-md-6 w-right">
              <img class="big-img-bp rw-img-2 w-100" src="assets/img/buy-paintings-3.jpg" alt="buy paintings img">
            </div>
          </div>
          <div class="row mt-4 row-mob  justify-content-center">
            <div class="col-md-6 w-right">
              <img class="big-img-bp w-100 rw-img-2" src="assets/img/buddhaimg.jpg" alt="buy paintings img">            
            </div>
            <div class="col-md-3 w-left">
              <div class="image-box-zoom rounded">
                <a href="product.html" class="">
                <img class="mb-2 w-100 " src="assets/img/buy-paintings-2.jpg" alt="buy paintings img">  
                </a> 
              </div>
              <div class="bg-white d-flex p-2 justify-content-between prize-size_wrapper rounded-3">
                <p class="text-black">Canvas size 24x24</p>
                <p class="text-black">₹ 48,000</p>
              </div>
            </div>
            <div class="col-md-3 w-left">
              <div class="image-box-zoom rounded">
                <a href="product.html" class="">
                <img class="mb-2 w-100 " src="assets/img/flowimg.jpg" alt="buy paintings img">  
                </a> 
              </div>
              <div class="bg-white d-flex p-2 justify-content-between prize-size_wrapper rounded-3">
                <p class="text-black">Canvas size 24x24</p>
                <p class="text-black">₹ 48,000</p>
              </div>
            </div>
            <div class="col-md-3 w-left">
              <div class="image-box-zoom rounded">
                <a href="product.html" class="">
                <img class="mb-2 w-100 " src="assets/img/flowimg.jpg" alt="buy paintings img">  
                </a> 
              </div>
              <div class="bg-white d-flex p-2 justify-content-between prize-size_wrapper rounded-3">
                <p class="text-black">Canvas size 24x24</p>
                <p class="text-black">₹ 48,000</p>
              </div>
            </div>
          </div>
          <div class="my-3 text-center">
            <button class="btn-view-more rounded-pill text-white py-1 px-4" type="button">View More</button>
          </div>
        </section>
        <!-- Fourth section (shop by style) -->
        <section class="fourth-sec shop-style-wrapper">
          <div class="separator d-flex align-items-center text-center justify-content-center my-4 gap-4">
            <h2 class="fw-bold">Shop By Style</h2>
          </div>
          <div class="container-fluid">
            <div class="row row-mob w-mob  justify-content-center shop-rw">
              <div class="col-md-3 thumbnail">
                <img class=" left-rw-img" src="assets/img/bg-img.jpg"  alt="shop by choice img">
              </div>
              <div class="col-md-9 right-col-shop">
                <div class="row text-center row-mob  ">
                  <div class="col-md-4 mb-1 thumbnail">
                    <div class="btn-shop-bs">
                      <svg class="cart-fav-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                      </svg>
                      <svg class="cart-like-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M9,20A2,2 0 0,1 7,22A2,2 0 0,1 5,20A2,2 0 0,1 7,18A2,2 0 0,1 9,20M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18M7.2,14.63C7.19,14.67 7.19,14.71 7.2,14.75A0.25,0.25 0 0,0 7.45,15H19V17H7A2,2 0 0,1 5,15C5,14.65 5.07,14.31 5.24,14L6.6,11.59L3,4H1V2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,12C16.94,12.62 16.27,13 15.55,13H8.1L7.2,14.63M9,9.5H13V11.5L16,8.5L13,5.5V7.5H9V9.5Z" />
                      </svg>
                      <a href="shop-now.html" class="text-white">
                        Shop Now 
                        <svg   viewBox="0 0 24 24">
                          <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                        </svg>
                      </a>
                    </div>
                    <img class="" src="assets/img/catimg.jpg" alt="shop by choice img">
                  </div>
                  <div class="col-md-4 mb-1 thumbnail">
                    <div class="btn-shop-bs">
                      <svg class="cart-fav-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                      </svg>
                      <svg class="cart-like-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M9,20A2,2 0 0,1 7,22A2,2 0 0,1 5,20A2,2 0 0,1 7,18A2,2 0 0,1 9,20M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18M7.2,14.63C7.19,14.67 7.19,14.71 7.2,14.75A0.25,0.25 0 0,0 7.45,15H19V17H7A2,2 0 0,1 5,15C5,14.65 5.07,14.31 5.24,14L6.6,11.59L3,4H1V2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,12C16.94,12.62 16.27,13 15.55,13H8.1L7.2,14.63M9,9.5H13V11.5L16,8.5L13,5.5V7.5H9V9.5Z" />
                      </svg>
                      Shop Now 
                      <svg   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                      </svg>
                    </div>
                    <img class="" src="assets/img/shop-style-img-3.jpg" alt="shop by choice img">
                  </div>
                  <div class="col-md-4 mb-1 thumbnail">
                    <div class="btn-shop-bs">
                      <svg class="cart-fav-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                      </svg>
                      <svg class="cart-like-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M9,20A2,2 0 0,1 7,22A2,2 0 0,1 5,20A2,2 0 0,1 7,18A2,2 0 0,1 9,20M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18M7.2,14.63C7.19,14.67 7.19,14.71 7.2,14.75A0.25,0.25 0 0,0 7.45,15H19V17H7A2,2 0 0,1 5,15C5,14.65 5.07,14.31 5.24,14L6.6,11.59L3,4H1V2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,12C16.94,12.62 16.27,13 15.55,13H8.1L7.2,14.63M9,9.5H13V11.5L16,8.5L13,5.5V7.5H9V9.5Z" />
                      </svg>
                      Shop Now 
                      <svg   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                      </svg>
                    </div>
                    <img class="" src="assets/img/shop-style-img-4.jpg" alt="shop by choice img">
                  </div>
                  <div class="col-md-4 mb-1  thumbnail">
                    <div class="btn-shop-bs">
                      <svg class="cart-fav-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                      </svg>
                      <svg class="cart-like-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M9,20A2,2 0 0,1 7,22A2,2 0 0,1 5,20A2,2 0 0,1 7,18A2,2 0 0,1 9,20M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18M7.2,14.63C7.19,14.67 7.19,14.71 7.2,14.75A0.25,0.25 0 0,0 7.45,15H19V17H7A2,2 0 0,1 5,15C5,14.65 5.07,14.31 5.24,14L6.6,11.59L3,4H1V2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,12C16.94,12.62 16.27,13 15.55,13H8.1L7.2,14.63M9,9.5H13V11.5L16,8.5L13,5.5V7.5H9V9.5Z" />
                      </svg>
                      Shop Now 
                      <svg   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                      </svg>
                    </div>
                    <img class="" src="assets/img/shop-style-img-5.jpg" alt="shop by choice img">
                  </div>
                  <div class="col-md-4  thumbnail">
                    <div class="btn-shop-bs">
                      <svg class="cart-fav-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                      </svg>
                      <svg class="cart-like-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M9,20A2,2 0 0,1 7,22A2,2 0 0,1 5,20A2,2 0 0,1 7,18A2,2 0 0,1 9,20M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18M7.2,14.63C7.19,14.67 7.19,14.71 7.2,14.75A0.25,0.25 0 0,0 7.45,15H19V17H7A2,2 0 0,1 5,15C5,14.65 5.07,14.31 5.24,14L6.6,11.59L3,4H1V2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,12C16.94,12.62 16.27,13 15.55,13H8.1L7.2,14.63M9,9.5H13V11.5L16,8.5L13,5.5V7.5H9V9.5Z" />
                      </svg>
                      Shop Now 
                      <svg   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                      </svg>
                    </div>
                    <img class="" src="assets/img/shop-style-img-6.jpg" alt="shop by choice img">
                  </div>
                  <div class="col-md-4  thumbnail">
                    <div class="btn-shop-bs">
                      <svg class="cart-fav-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                      </svg>
                      <svg class="cart-like-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M9,20A2,2 0 0,1 7,22A2,2 0 0,1 5,20A2,2 0 0,1 7,18A2,2 0 0,1 9,20M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18M7.2,14.63C7.19,14.67 7.19,14.71 7.2,14.75A0.25,0.25 0 0,0 7.45,15H19V17H7A2,2 0 0,1 5,15C5,14.65 5.07,14.31 5.24,14L6.6,11.59L3,4H1V2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,12C16.94,12.62 16.27,13 15.55,13H8.1L7.2,14.63M9,9.5H13V11.5L16,8.5L13,5.5V7.5H9V9.5Z" />
                      </svg>
                      Shop Now 
                      <svg   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                      </svg>
                    </div>
                    <img class="" src="assets/img/shop-style-img-7.jpg" alt="shop by choice img">
                  </div>
                  <div class="col-md-4 thumbnail">
                    <div class="btn-shop-bs">
                      <svg class="cart-fav-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                      </svg>
                      <svg class="cart-like-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M9,20A2,2 0 0,1 7,22A2,2 0 0,1 5,20A2,2 0 0,1 7,18A2,2 0 0,1 9,20M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18M7.2,14.63C7.19,14.67 7.19,14.71 7.2,14.75A0.25,0.25 0 0,0 7.45,15H19V17H7A2,2 0 0,1 5,15C5,14.65 5.07,14.31 5.24,14L6.6,11.59L3,4H1V2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,12C16.94,12.62 16.27,13 15.55,13H8.1L7.2,14.63M9,9.5H13V11.5L16,8.5L13,5.5V7.5H9V9.5Z" />
                      </svg>
                      <a href="shop-now.html" class="text-white">
                        Shop Now 
                        <svg   viewBox="0 0 24 24">
                          <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                        </svg>
                      </a>
                    </div>
                    <img class="" src="assets/img/catimg.jpg" alt="shop by choice img">
                  </div>
                  <div class="col-md-4 thumbnail">
                    <div class="btn-shop-bs">
                      <svg class="cart-fav-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                      </svg>
                      <svg class="cart-like-svg"   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M9,20A2,2 0 0,1 7,22A2,2 0 0,1 5,20A2,2 0 0,1 7,18A2,2 0 0,1 9,20M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18M7.2,14.63C7.19,14.67 7.19,14.71 7.2,14.75A0.25,0.25 0 0,0 7.45,15H19V17H7A2,2 0 0,1 5,15C5,14.65 5.07,14.31 5.24,14L6.6,11.59L3,4H1V2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,12C16.94,12.62 16.27,13 15.55,13H8.1L7.2,14.63M9,9.5H13V11.5L16,8.5L13,5.5V7.5H9V9.5Z" />
                      </svg>
                      Shop Now 
                      <svg   viewBox="0 0 24 24">
                        <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                      </svg>
                    </div>
                    <img class="" src="assets/img/shop-style-img-4.jpg" alt="shop by choice img">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- fifth section (explore category) -->
        <section class="fifth-sec explore-category">
          <div class="separator d-flex align-items-center text-center justify-content-center my-4 gap-4">
            <h2 class="fw-bold">Explore By category</h2>
          </div>
         <div class="row text-center explored_row">
  <?php while($row = mysqli_fetch_array($Category)){ ?>
    <div class="col-md-3 explore-col">
      <div class="explore-container my-2">
        <a class="category-link" href="category.php?id=<?=$row['id'];?>" > <!-- Add the style attribute to change the text color -->
          <img class="rounded-circle" src="admin/assets/images/categoryimages/<?=$row['Category_image'];?>" alt="">
          <p class="fw-bold mt-1"><?=$row['Category_name'];?></p>
          <p>10 Original Paintings</p>
        </a>
      </div>
    </div>
  <?php } ?>
</div>


        </section>
        <!-- Sixth section (Sell Your Paintings) -->
        <section class="sixth-section sell-paintings_wrapper" style="background-image: url(assets/img/paint-background-7vcv1im8f40vi9to.jpg);">
          <div class="know-more-content">
            <h2 class="text-white fw-bold">Sell Your Paintings</h2>
            <h2 class="ml-5 text-white sell-art fw-bold">Other Art Online</h2>
            <p class="py-2 title text-white">Gallerist.in is an online platform for promoting quality art created by artists worldwide.
              With a simple registration process, we allow you to sell paintings as many as you goose,
              with the freedom of putting up the price you want. Marketing team at Gallerist.in supports
              an artist to sell art online by various promotional methods including socialfnedia
              marketing & Google search.
            </p>
          </div>
          <div class="col-md-6">
          </div>
          <button class="btn-know-more btn-hover color-1 border-dark text-dark px-4 py-2 rounded-pill" type="button">KNOW MORE</button>
        </section>
        <!-- SEVENTH SECTION (aboutus section)-->
       <section class="seventh-section aboutus-sec my-4">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6">
                <img class="w-100" src="admin/assets/images/aboutus/<?=$AboutUs['image'];?>" alt="about us image">
              </div>
              <div class="col-md-6">
                <h2 class="text-center fw-bold"><?=$AboutUs['title'];?></h2>
                <p class="text-center py-2"><?=$AboutUs['content'];?>
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-- EIGHT SECTION (why choose us section)-->
        <section class="eight-section whyus-sec my-4">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6">
                <h2 class="text-center fw-bold"><?=$WhyChooseUs['heading'];?></h2>
                <p class="text-center py-2 title-choose"><?=$WhyChooseUs['sub_heading'];?></p>
                <div class="row text-center rt-row-choose-us">
                  <div class="col-md-3 choose-col">
                    <img class="w-100" src="admin/assets/images/<?=$WhyChooseUs['image1'];?>" alt="choose us img">
                    <p class="choose-us-heading"><?=$WhyChooseUs['title1'];?></p>
                    <p class="chhose-us-titles"><?=$WhyChooseUs['content1'];?></p>
                  </div>
                  <div class="col-md-3 choose-col">
                    <img class="w-100" src="admin/assets/images/<?=$WhyChooseUs['image2'];?>" alt="choose us img">
                    <p class="choose-us-heading"><?=$WhyChooseUs['title2'];?></p>
                    <p class="chhose-us-titles"><?=$WhyChooseUs['content2'];?></p>
                  </div>
                  <div class="col-md-3 choose-col">
                    <img class="w-100" src="admin/assets/images/<?=$WhyChooseUs['image3'];?>" alt="choose us img">
                    <p class="choose-us-heading"><?=$WhyChooseUs['title3'];?></p>
                    <p class="chhose-us-titles"><?=$WhyChooseUs['content3'];?></p>
                  </div>
                  <div class="col-md-3 choose-col">
                    <img class="w-100" src="admin/assets/images/<?=$WhyChooseUs['image4'];?>" alt="choose us img">
                    <p class="choose-us-heading"><?=$WhyChooseUs['title4'];?></p>
                    <p class="chhose-us-titles"><?=$WhyChooseUs['content4'];?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 choose-col-rt">
                <img class="w-100" src="admin/assets/images/<?=$WhyChooseUs['left_image'];?>" alt="about us image">
              </div>
            </div>
          </div>
        </section>
        <!-- NINTH SECTION (MEET THE ARTIST)-->
        <section class="ninth-section artist-sec my-4">
          <div class="container">
            <div class="py-4">
              <h2 class="text-center fw-bold">Meet Our Artist</h2>
            </div>
            <div class="row text-center sss">
              <div class="col-md-3 artist-col">
                <div class="artist-wrapper text-center">
                  <img class="w-100" src="assets/img/artist-1.jpg" alt="artst img">
                </div>
                <p class="m-0 py-1 fw-bold">Mahesh Soundatte</p>
                <p class="m-0">Ichalkaranji | India</p>
              </div>
              <div class="col-md-3 artist-col">
                <div class="artist-wrapper text-center">
                  <img class="w-100" src="assets/img/artist-2.jpg" alt="artst img">
                </div>
                <p class="m-0 py-1 fw-bold">Rupatan Naskar</p>
                <p class="m-0">KOLKATA | India</p>
              </div>
              <div class="col-md-3 artist-col">
                <div class="artist-wrapper text-center">
                  <img class="w-100" src="assets/img/artist-3.jpg" alt="artst img">
                </div>
                <p class="m-0 py-1 fw-bold">Shiv Kumar Soni</p>
                <p class="m-0">Jaipur | India</p>
              </div>
              <div class="col-md-3 artist-col">
                <div class="artist-wrapper text-center">
                  <img class="w-100" src="assets/img/artist-4.jpg" alt="artst img">
                </div>
                <p class="m-0 py-1 fw-bold">Doyel Chitrankan</p>
                <p class="m-0">Ichalkaranji | India</p>
              </div>
            </div>
          </div>
        </section>
        <!-- tenth section -->
        <section class="tenth-secion p-3">
          <div class="py-4">
            <h2 class="text-center fw-bold">Testimonial</h2>
          </div>
          <div class="row text-center">
            <div class="col-md-3 testim-col">
              <div class="">
                <img class="w-100" src="assets/img/testimonial-img-1.jpg" alt="testimonial image">
              </div>
              <div class="bottom-wrapper my-3  rounded">
                <div class="d-flex bottom-wrapper-fx gap-2">
                  <img class="rounded-circle" src="assets/img/artist-2.jpg" alt="">
                  <div class="bottom-content text-start">
                    <h4 class="fw-bold">Perfectly Packed</h4>
                    <p class="feed-time fw-bold mb-1">By Pia Rampal | Posted on 8 May 2023</p>
                    <p class="feed-back m-0"> Received a very elegant painting by Bhaskar 
                      C - perfect packed , thanks
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 testim-col">
              <div class=" ">
                <img class="w-100" src="assets/img/testimonial-img-2.jpg" alt="testimonial image">
              </div>
              <div class="bottom-wrapper my-3  rounded">
                <div class="d-flex bottom-wrapper-fx gap-2">
                  <img class="rounded-circle" src="assets/img/artist-4.jpg" alt="">
                  <div class="bottom-content text-start">
                    <h4 class="fw-bold">Perfectly Packed</h4>
                    <p class="feed-time fw-bold mb-1">By Pia Rampal | Posted on 8 May 2023</p>
                    <p class="feed-back m-0"> Received a very elegant painting by Bhaskar 
                      C - perfect packed , thanks
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 testim-col">
              <div class=" ">
                <img class="w-100" src="assets/img/testimonial-img-3.jpg" alt="testimonial image">
              </div>
              <div class="bottom-wrapper my-3  rounded">
                <div class="d-flex bottom-wrapper-fx gap-2">
                  <img class="rounded-circle" src="assets/img/artist-2.jpg" alt="">
                  <div class="bottom-content text-start">
                    <h4 class="fw-bold">Perfectly Packed</h4>
                    <p class="feed-time fw-bold mb-1">By Pia Rampal | Posted on 8 May 2023</p>
                    <p class="feed-back m-0"> Received a very elegant painting by Bhaskar 
                      C - perfect packed , thanks
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 testim-col">
              <div class=" ">
                <img class="w-100" src="assets/img/testimonial-img-3.jpg" alt="testimonial image">
              </div>
              <div class="bottom-wrapper my-3  rounded">
                <div class="d-flex bottom-wrapper-fx gap-2">
                  <img class="rounded-circle" src="assets/img/artist-2.jpg" alt="">
                  <div class="bottom-content text-start">
                    <h4 class="fw-bold">Perfectly Packed</h4>
                    <p class="feed-time fw-bold mb-1">By Pia Rampal | Posted on 8 May 2023</p>
                    <p class="feed-back m-0"> Received a very elegant painting by Bhaskar 
                      C - perfect packed , thanks
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
        <!-- footer -->
        <?php
          include('inc/footer.php'); 
          ?>
    </div>
  </main>
  <script>
    // sticky header js
    $(function() {
    $(window).on("scroll", function() {
       if($(window).scrollTop() > 50) {
           $(".stickyhead").addClass("activee");
       } else {
           //remove the background property so it comes transparent again (defined in your css)
          $(".stickyhead").removeClass("activee");
       }
    });
    });
    
    
    
    // function openSearch() {
    //   document.getElementById("myOverlay").style.display = "block";
    // }
    
    // function closeSearch() {
    //   document.getElementById("myOverlay").style.display = "none";
    // }
  </script>
</body>
</html>