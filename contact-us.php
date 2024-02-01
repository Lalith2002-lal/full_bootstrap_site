<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="contactus.css">
    <!-- <link rel="stylesheet" href="navbar.css"> -->
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
         <!-- Include Font Awesome via CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>

<body>

    <!-- Banner section start -->

<section class="banner">
    <div class="container-fluid land col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12 p-0">
        <!-- Video Background -->
        <video autoplay muted loop id="landVideo" preload="none" poster="assets/images/home/homepage-banner-coffee-pouring-small-cup.jpg">
            <source src="assets/videos/barista answering call.mp4" type="video/mp4">
        </video>
        <!--Nav Starts-->
        <nav class="navbar navbar-expand-lg  ">
            <div class="container">
        
              <!-- Logo on the left for both desktop and mobile -->
              <a class="navbar-brand" href="homepage.html">
                <img class="main-logo" src="assets/png/Dropbox-Coffee-logo-white.png" alt="">
              </a>
        
    
    
              <!-- Off-canvas toggler button on the right for mobile -->
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Replace the default toggler icon with the provided SVG -->
                <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="23" viewBox="0 0 28 23"
                  fill="none">
                  <path d="M24 5.5L2 5.5" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                  <path d="M24 17.5L2 17.5" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </button>
        
              <!-- Off-canvas navigation -->
              <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarNav" aria-labelledby="navbarNavLabel">
        
                <div class="offcanvas-body">
                  <div class="menu-top">
                    <!-- Navigation links -->
                    <ul class="navbar-nav menu-body">
                      <li class="nav-item header-main">
                        <a class="nav-link header-items nav-text caudex" href="about-us.html">ABOUT US</a>
                      </li>
                      <li class="nav-item dropdown product-icon header-main">
                        <a class="nav-link header-items " href="#" id="submenuDropdown" role="button"
                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="nav-text caudex">PRODUCTS</span> &nbsp;<i class='fas fa-angle-down arrow '
                            style='font-size:16px'></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="submenuDropdown">
                          <a class="dropdown-item" href="products.html" style="color:#111;"><span
                              class="dropdown-text caudex">COFFEE FOR BUSINESS</span></a>
                          <a class="dropdown-item" href="#" style="color:#111;"><span class="dropdown-text caudex">CAFÉ
                              SOLUTIONS</span></a>
                          <a class="dropdown-item" href="#" style="color:#111;"><span
                              class="dropdown-text caudex">COFFEE BEANS</span></a>
                        </div>
                      </li>
                      <li class="nav-item header-main">
                        <a class="nav-link header-items nav-text caudex" href="blog.html">BLOGS</a>
                      </li>
                      <li class="nav-item header-main">
                        <a class="nav-link header-items nav-text caudex" href="contact-us.php">CONTACT US</a>
                      </li>
                    </ul>
                    <!-- Close button -->
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                      aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-footer">
                    <div class="menu-bottom">
                      <div class="footer-description">
                        <h6> <b> How can we help you? </b></h6>
                        <p><span class="menu-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span></p>
                      </div>
                      <div class="footer-contact-social">
                        <p class="footer-bottom"><img src="assets/icons/black/Call - 24px.svg" alt=""><span
                            class="footer-contact menu-p">+61 418 345 578</span></p>
                        <p class="footer-bottom"><img src="assets/icons/black/Mail - 24px.svg" alt=""><span
                            class="footer-email menu-p">info@dropboxcoffee.com.au</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        
              <!-- Navigation links on the left -->
              <div class="navbar-nav nav-content" id="navbarNav">
                <ul class="navbar-nav toggle-down-links d-md-flex align-items-md-center">
                  <li class="nav-item header-main">
                    <a class="nav-link header-items nav-text caudex" href="about-us.html">ABOUT US</a>
                  </li>
                  <li class="nav-item dropdown product-icon header-main">
                    <a class="nav-link header-items " href="#" id="submenuDropdown" role="button"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="nav-text caudex">PRODUCTS</span> &nbsp;<i class='fas fa-angle-down arrow '
                        style='font-size:16px'></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="submenuDropdown">
                      <a class="dropdown-item caudex" href="products.html" ><span
                          class="dropdown-text">COFFEE FOR
                          BUISNESS</span></a>
                      <a class="dropdown-item caudex" href="#" ><span class="dropdown-text">CAFÉ
                          SOLUTIONS</span></a>
                      <a class="dropdown-item caudex" href="#"><span class="dropdown-text">COFFEE
                          BEANS</span></a>
                    </div>
                  </li>
                </ul>
              </div>
        
              <!-- Navigation links on the right -->
              <div class="navbar-nav nav-content justify-content-end" id="navbarNav">
                <ul class="navbar-nav d-md-flex align-items-md-center">
                  <li class="nav-item header-main">
                    <a class="nav-link header-items nav-text caudex" href="blog.html">BLOGS</a>
                  </li>
                  <li class="nav-item header-main">
                    <a class="nav-link header-items nav-text caudex" href="contact-us.php">CONTACT US</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <!--Nav ends-->

        <!-- Text on the Left Side -->
        
<div class="container">
    <div class="row">
        <div class="text-overlay B_heading col-xl-6 col-lg-6 col-md-6 col-xs-6 col-10">
            <h1 class="hero-header">Contact us</h1>
            <p class="contact-us-banner">Indulge in the pinnacle of coffee expertise – our bestseller reigns as the ultimate brew maestro,
                delivering
                unrivaled flavor sophistication.</p>
                
                
            <div class="b-link"><a href="homepage.html">HOME</a> <span>/</span> <a href="contact-us.php">CONTACT US</a>
            </div>
        </div>
    </div>
</div>
        
    </div>
</section>
   

    <!-- Banner section End -->

    <!--Marquee Starts-->
    <div class="elementor-widget-container">
        <div class="lody">
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <h3>
                            <img decoding="async" src="assets/icons/brown/bxs_coffee-bean - 24px.svg" />ELEVATE YOUR
                            COFFEE EXPERIENCE
                        </h3>
                    </div>
                    <div class="slide">
                        <h3>
                            ELEVATE YOUR COFFEE EXPERIENCE<img decoding="async"
                                src="assets/icons/brown/bxs_coffee-bean - 24px.svg" />
                        </h3>
                    </div>
                    <div class="slide">
                        <h3>
                            ELEVATE YOUR COFFEE EXPERIENCE<img decoding="async"
                                src="assets/icons/brown/bxs_coffee-bean - 24px.svg" />
                        </h3>
                    </div>
                    <div class="slide">
                        <h3>
                            ELEVATE YOUR COFFEE EXPERIENCE<img decoding="async"
                                src="assets/icons/brown/bxs_coffee-bean - 24px.svg" />
                        </h3>
                    </div>
                    <div class="slide">
                        <h3>
                            ELEVATE YOUR COFFEE EXPERIENCE<img decoding="async"
                                src="assets/icons/brown/bxs_coffee-bean - 24px.svg" />
                        </h3>
                    </div>
                    <div class="slide">
                        <h3>
                            ELEVATE YOUR COFFEE EXPERIENCE<img decoding="async"
                                src="assets/icons/brown/bxs_coffee-bean - 24px.svg" />
                        </h3>
                    </div>
                    <div class="slide">
                        <h3>
                            ELEVATE YOUR COFFEE EXPERIENCE<img decoding="async"
                                src="assets/icons/brown/bxs_coffee-bean - 24px.svg" />
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Marquee Ends-->

    <!-- form section start-->
    <!-- <div class="container">
        <div class="row">
            <div class="col new-2">
                <div class="form-one">
                    <div>
                        <h1 class="mb-4">Get In Touch</h1>
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tincidunt tellus. Fusce
                            tincidunt felis non lectus fringilla, a vestibulum quam faucibus. Vestibulum consectetur.
                        </p>
                    </div>

                    <form action="">
                        <div class="form-group mt4 mb-4">
                            <label for="name">Name</label>
                            <input type="email" class="form-control " id="inputName4" placeholder="John Doe">
                        </div>
                        <div class="form-group mt-5 mb-4">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="JohnDoe@company.com">
                        </div>
                        <div class="form-group mt-5 mb-4">
                            <label for="ContactNumber">Contact Number</label>
                            <input type="email" class="form-control" id="inputContactNumber4"
                                placeholder="+61 405 967 491">
                        </div>
                        <div class="form-group mt-5 mb-4">
                            <label for="floatingTextarea">Message</label>
                            <textarea class="form-control" placeholder="Write something here ..."
                                id="floatingTextarea"></textarea>

                        </div>
                        <div class="estimate mt-5 " >
                            <button class="btn send_btn ">
                                <span class="btn-text"> SEND MESSAGE <i class="fa fa-arrow-right"></i></span>  
                                <span class="button-hover"><img src="assets/icons/brown/button hover effect background.png" alt=""></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col new-1 full-width-content">
                <div>
                    <h1 class="mb-4">Contact Information</h1>
                    <p class="mb-4">
                        Discover the cost of upgrading your business with our coffee machines. Get a tailored estimate
                        that fits your budget and brewing needs.
                    </p>
                </div>
                <div class="div-form cont-num">
                   <p>contact number</p>
                   <h2 class="cont-num-butn">+61 418 345 578</h2>
                </div>
                <div class="div-form mail">
                   <p>Email Address</p>
                   <h2 class="cont-num-butn">info@fropboxxoffee.com.au</h2>
                </div>
                <div class="div-form office-address">
                   <p>Office Address</p>
                   <h2 class="cont-num-butn">PO Box 137 Brunswick West Vic 3055</h2>
                </div>
                


            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row form-total">
            <div class="col-lg-6 col-md-12 left-form homepad-112">
                <div class="col">
                    <div class="col new-2">
                        <div class="form-one">
                            <div>
                                <h1 class="mb-5 form-heading">Get In Touch</h1>
                                <p class="mb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tincidunt tellus. Fusce
                                    tincidunt felis non lectus fringilla, a vestibulum quam faucibus. Vestibulum consectetur.
                                </p>
                            </div>

                            <form class="form-inner-content" action="<?php echo $_SERVER["PHP_SELF"];?>" id="form">
                                <div class="form-group  mt4 mb-4 ">
                                    <label class="left-label" for="inputName">Name</label>
                                    <input class="form-control " type="text" name="name"  id="inputName4" placeholder="John Doe" data-name="User Name">
                                    <div class="input-over">
                                    </div>    
                                    
                                    <p>Error message</p>
                                </div>
                                <div class="form-group mt-5 mb-4">
                                    <label class="left-label" for="email">Email Address</label>
                                    <input class="form-control" type="text"  id="inputEmail4" name="email" placeholder="JohnDoe@company.com" data-name="Email" >
                                        <div class="input-over">
                                        </div>
                                
                                    <p>Error message</p>
                                </div>
                                <div class="form-group mt-5 mb-4">
                                    <label class="left-label" for="ContactNumber">Contact Number</label>
                                    <input class="form-control" type="tel" name="phone"  id="inputContactNumber4"
                                    placeholder="+61 405 967 491" data-name="Mobile Number">
                                        <div class="input-over">
                                        </div>
                                    
                                    <p>Error message</p>
                                </div>
                                <div class="form-group mt-5 mb-4">
                                    <label class="left-label" for="floatingTextarea">Message</label>
                                        <div class="input-over">
                                        <textarea class="form-control" name="message" placeholder="Write something here ..."
                                            id="floatingTextarea" data-name="Message"></textarea>
                                        </div>
                                        <p>Error message</p>
                                </div>
                                <div class="estimate mt-5 " >
                                    <button type="submit" class="btn send_btn ">
                                        <span class="btn-text"> SEND MESSAGE <i class="fa fa-arrow-right"></i></span>  
                                        <span class="button-hover"><img src="assets/icons/brown/button hover effect background.png" alt=""></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="form_result"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 right-form homepad-112">
                <div class="col">
                    <div class="col new-1 full-width-content">
                        <div class="inner-right-heading">
                            <h1 class="mb-5 form-heading">Contact Information</h1>
                            <p class="mb-4">
                                Discover the cost of upgrading your business with our coffee machines. Get a tailored estimate
                                that fits your budget and brewing needs.
                            </p>
                        </div>
                        <div class="right-inner-form">
                            <div class="div-form cont-num hover-head">
                               <p >contact number</p>
                               <h5 class="cont-num-butn">
                                    <div class="inner-cont-num-butn">
                                        <img class="glow" src="assets/icons/black/Call - 24px.svg" alt=""> +61 418 345 578
                                    </div>
                                </h5>
                            </div>
                            <div class="div-form mail hover-head">
                               <p >Email Address</p>
                               <h5 class="cont-num-butn">
                                    <div class="inner-cont-num-butn">
                                        <img class="glow" src="assets/icons/black/Mail - 24px.svg" alt=""> info@fropboxxoffee.com.au
                                    </div>
                                </h5>
                            </div>
                            <div class="div-form office-address hover-head">
                               <p>Office Address</p>
                               <h5 class="cont-num-butn">
                                    <div class="inner-cont-num-butn">
                                        <img class="glow" src="assets/icons/black/Location - 24px.svg" alt=""> PO Box 137 Brunswick West Vic 3055
                                    </div>
                                </h5>
                            </div>
                        </div>
                        <div class="socials">
                            <p>Follow us for more</p>
                            <div class="icons-div">
                                <img  src="assets/icons/brown/vuesax/bold/facebook  - 24px.svg" alt="">
                                <img  src="assets/icons/brown/vuesax/bold/instagram  - 24px.svg" alt="">
                                <img  src="assets/icons/brown/vuesax/bold/youtube  - 24px.svg" alt="">
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- form section end -->

    <!-- img section start -->
    
    <div class="container img-section">
        <div class="row image-row homepad-112">
            <div class="col-lg-6 col-md-12 col-12 image-div pe-lg-5">
                <p>
                    <span class="coffee-header">
                        COFFEE LOVERS IN SPOTLIGHT:
                    </span>
                </p>
                
                <h1 class="mb-4 section-header">Our Valued Brew <br class="break-tag">Enthusiasts</h1>
                <p class="mb-4">
                    Customer relationships are what’s important to us. As such, we give open and honest advise and
                    provide full transparency on the options available in our pricing structure, in this way, we
                    empower
                    you to make informed decisions based on what’s best for your business.
                </p>
                <p>
                    We believe credibility and trust will follow only when we achieve the above, so if you have a
                    problem, all you need to do is pick up the phone and give us a call.
                </p>
            </div>  
            <div class="col-lg-6 col-md-12 col-12 mt-md-0 mt-3 image-div-img ps-lg-5">
                <img src="assets/images/contactUs/business-people-office-break.jpg" class="img-fluid coffee-lovers" alt="Responsive image">

            </div>
        </div>
    </div>   

    <!-- Google maps ends  -->
<div class="container-fluid map-container">
    <div class="row map-row">
        <div id="map"></div>
    </div>
</div>
    <!-- google map ends -->

    <!--Footer Starts-->
    <section class="total-footer">
        <div class="container p-md-0 footer-container">
    
          <footer class="text-white text-center text-lg-start total-footer padding-TB-large padding-TB padding-TB-sm">
            <!-- Grid container -->
            <div class="container-fluid p-0 m-0">
              <!--Grid row-->
              <div class="row justify-content-lg-between">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0 d-md-flex text-start flex-sm-column footer-top">
                  <a href="homepage.html"><img src="assets/png/Dropbox-Coffee-logo-white.png" alt=""></a>
                  <p class="footer-para text-sm-start">
                    As a premier supplier, we offer top-tier coffee machines and comprehensive technical support across
                    various brands. Choose in-house training or sessions at our dedicated center.
                  </p>
    
                  <div class="footer-social d-md-flex">
                    <p class="footer-follow">
                      Follow us for more updates
                    </p>
                    <p class="ms-md-5 ms-lg-4 footer-social-links">
                      <img src="assets/icons/white/vuesax/facebook - 24px.svg" alt="">
                      <img class="ms-md-2 ms-lg-0" src="assets/icons/white/vuesax/instagram  - 24px.svg" alt="">
                      <img class="ms-md-2 ms-lg-0" src="assets/icons/white/vuesax/youtube - 24px.svg" alt="">
                    </p>
                  </div>
                </div>
                <!--Grid column-->
    
                <!--Grid column-->
                <div class="col-lg-3 col-xl-3 col-md-5 mb-4 mb-md-0 text-start">
                  <h5 class="text-uppercase mb-4 pb-1 footer-heading">Subscribe to our Newsletter</h5>
                  <p class="footer-para">Caffeine Chronicles: Brews &amp; News Delivered Fresh to Your Inbox!</p>
                  <div class="form-outline mb-4 d-flex f-email">
                    <input class="footer-email" type="email" placeholder="Email Address">
                    <button class="d-flex align-items-center justify-content-center ms-xl-4 mt-3"><img class="footer-arrow-img"
                        src="assets/icons/white/arrow right.svg" alt=""></button>
                  </div>
                </div>
                <!--Grid column-->
    
                <!--Grid column-->
                <div
                  class=" col-xl-4 col-lg-5 align-items-end align-items-md-start align-items-lg-start col-md-7 footer-links-total col-md-6">
                  <div class="row text-sm-start">
                    <div class="col-md-3 col-4  footer-links">
                      <ul class="nav flex-row flex-column text-white text-start">
                        <li class="nav-item mb-4 text-white header-main"><a href="homepage.html"
                            class="nav-link p-0 text-white header-items">ABOUT</a></li>
                        <li class="nav-item mb-4 header-main"><a href="products.html"
                            class="nav-link p-0 text-white header-items">PRODUCTS</a></li>
                        <li class="nav-item mb-4 header-main"><a href="blog.html"
                            class="nav-link p-0 text-white header-items">BLOGS</a></li>
                      </ul>
                    </div>
                    <div
                      class="col-md-6 col-8 footer-links d-lg-flex align-lg-center justify-content-lg-center d-md-flex align-md-center justify-content-md-center">
                      <ul class="nav flex-column text-start second-footer-link">
                        <li class="nav-item mb-4 header-main"><a href="#" class="nav-link p-0 text-white header-items">PICK
                            YOUR BEAN</a></li>
                        <li class="nav-item mb-4 header-main"><a href="#"
                            class="nav-link p-0 text-white header-items">ESTIMATE PRICE</a></li>
                        <li class="nav-item mb-4 header-main"><a href="contact-us.php"
                            class="nav-link p-0 text-white header-items">CONTACT US
                          </a></li>
                      </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3  footer-links">
                      <ul class="nav flex-column text-start">
                        <li class="nav-item mb-4 header-main"><a href="#"
                            class="nav-link p-0 text-white header-items">TERMS</a></li>
                        <li class="nav-item mb-4 header-main"><a href="#"
                            class="nav-link p-0 text-white header-items">PRIVACY</a></li>
                        <li class="nav-item mb-4 header-main"><a href="#"
                            class="nav-link p-0 text-white header-items">SUPPORT</a></li>
                      </ul>
                    </div>
                  </div>
    
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </div>
            <!-- Grid container -->
    
            <!-- Copyright -->
            <div class="row end text-start">
              <div class="col-md-12 col-lg-6 text-md-left text-md-left d-md-flex flex-md-row d-flex flex-column cont ">
                <p class="mb-md-3 footer-para col-md-4 text-md-start col-12"> <img class="footer-contact pe-2"
                    src="assets/icons/white/Call - 14px.svg" alt="">+61 418 345 578</p>
                <p class="mb-md-3 footer-para col-md-6 col-12 "><img class="footer-email pe-2"
                    src="assets/icons/white/sms - 14px.svg" alt="">info@dropboxcoffee.com.au</p>
              </div>
              <div class="col-md-12 col-lg-6 text-md-start text-lg-end rights">
                <p class="footer-follow caudex">©2023 DROPBOX COFFEE,ALL RIGHTS RESERVED.</p>
              </div>
            </div>
            <!-- Copyright -->
          </footer>
    
        </div>
      </section>
  <!-- End of .container -->
  
  <!--Footer Ends-->
  
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="assets/js/homepage.js"></script>
  <script src="form.js"></script>

    
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>    
    <script>
    var eiffelTower = [48.858844, 2.294350]; // Eiffel Tower coordinates

    var map = L.map('map').setView(eiffelTower, 17); // Increased zoom level

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    var customIconEiffelTower = L.divIcon({
        className: 'custom-marker',
        html: '<div id="custom-marker"><a href="https://www.google.com/maps?q=48.858844,2.294350" target="_blank"><img src="assets/png/Dropbox-Coffee-logo-white.png" style="width:100%; height:auto;"></a></div>',
        iconSize: [200, 200], // Adjust the size of the icon
        iconAnchor: [100, 100], // Position of the icon relative to its center
    });

    var markerEiffelTower = L.marker(eiffelTower, { icon: customIconEiffelTower }).addTo(map);
    </script>
    
</body>

</html>