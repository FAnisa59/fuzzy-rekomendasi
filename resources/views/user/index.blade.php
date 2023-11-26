<!DOCTYPE html>
<html lang="en">

<head>
  <title>OrderX</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="fonts/icomoon.css">
  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <!--Bootstrap ================================================== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Syne:wght@600;700;800&display=swap"
    rel="stylesheet">
</head>

<body class="hompage bg-accent-light">

  <header id="header" class=" content-light ">
    <div class="header-wrap container py-3">
      <div class="row align-items-center">
        <div class="primary-nav col-md-5 col-sm-2">
          <nav class="navbar">
            <div class="main-menu">
              <ul class="menu-list  list-unstyled d-flex m-0 ">
                <li class="menu-itemhome1 dropdown">
                  <a class="text-uppercase item-anchor dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"> Home </a>
                  <ul class="dropdown-menu">
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item" href="index.html">
                        Home version 1</a></li>
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item"
                        href="home-v2.html">Home version 2 &nbsp;<span class="badge bg-secondary">pro</span></a></li>
                  </ul>
                </li>
                <li class="menu-itemhome1">
                  <a href="about-us.html" class="text-uppercase item-anchor">About</a>
                </li>
                <li class="menu-itemhome1 dropdown">
                  <a class="text-uppercase item-anchor dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"> Shop </a>
                  <ul class="dropdown-menu">
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item" href="shop.html">Shop
                        sidebar &nbsp;<span class="badge bg-secondary">pro</span></a></li>
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item"
                        href="single-product.html">Single product &nbsp;<span class="badge bg-secondary">pro</span></a>
                    </li>
                  </ul>
                </li>
                <li class="menu-itemhome1 dropdown">
                  <a class="text-uppercase item-anchor dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"> blog </a>
                  <ul class="dropdown-menu">
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item" href="blog.html">blog
                        classic&nbsp;<span class="badge bg-secondary">pro</span></a></li>
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item"
                        href="blog-with-sidebar.html">Blog sidebar&nbsp;<span class="badge bg-secondary">pro</span></a>
                    </li>
                    <li class="sub-page pe-0"><a class="text-black text-uppercase dropdown-item"
                        href="single-post.html">Single post&nbsp;<span class="badge bg-secondary">pro</span></a></li>
                  </ul>
                </li>
          </nav>
        </div>
        <div class="col-md-2 col-sm-4 brand-block ">
          <div class="main-logo text-lg-center">
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="billboard" class="padding-large no-padding-top position-relative">
    <div class="image-holder">
      <img src="images/banner-image.jpg" alt="banner" class="banner-image">
    </div>
    <div class="banner-content content-light style1 text-center col-md-6">
      <h2 class="banner-title">
        Like & Share Cafe.
      </h2>
      <h3>
        Your meeting point.
      </h3>
      <div class="btn-center">
        <a href="#" class="btn btn-medium btn-light">Shop Now</a>
      </div>
    </div>
  <section id="fashion-trending" class="product-store padding-large position-relative overflow-hidden">
    <div class="container mb-5">
      <div class="section-header text-center">
        <h2 class="section-title">What’s trending</h2>
        <p>These are the products that are trending now.</p>
      </div>
      <div class="row">
        <div class="swiper product-swiper">
          <div class="swiper-wrapper">
          @foreach($menu as $me)
            <div class="swiper-slide">
              <div class="product-item position-relative">
                <div class="image-holder">
                <img src="{{ asset('uploads/' . $me->gambar) }}" alt="{{ $me->nama_menu }}" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex flex-wrap">
                    <div class="btn-left">
                      <a href="#" class="btn btn-medium btn-light">Add to Cart</a>
                    </div>
                  </div>
                </div>
                <div class="product-detail">
                  <h3 class="product-title">
                    <a href="{{ route ('detail_menu', ['id' => $me->id]) }}">{{$me->nama_menu}}</a>
                  </h3>
                  <span class="item-price text-primary">{{$me->harga}}</span>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </section>
 
  <section id="latest-blog" class="padding-large overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="section-header text-center">
          <h2 class="section-title">Daftar Menu</h2>
          <p>Read Our News & articles about updates</p>
        </div>
        <div class="row d-flex flex-wrap">
          <article class="col-md-4 post-item">
            <div class="image-holder">
              <a href="single-post.html">
                <img src="images/post-item1.jpg" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content">
              <div class="post-header text-center">
                <h3 class="post-title">
                  <a href="single-post.html">Best Comfortable Clothes Ideas</a>
                </h3>
                <p>Justo maecenas facilisi cursus fermentum enim vivirra.</p>
              </div>
            </div>
          </article>
          <article class="col-md-4 post-item">
            <div class="image-holder">
              <a href="single-post.html">
                <img src="images/post-item2.jpg" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content">
              <div class="post-header text-center">
                <h3 class="post-title">
                  <a href="single-post.html">Casual Denim Clothing for women</a>
                </h3>
                <p>Justo maecenas facilisi cursus fermentum enim vivirra.</p>
              </div>
            </div>
          </article>
          <article class="col-md-4 post-item">
            <div class="image-holder">
              <a href="single-post.html">
                <img src="images/post-item3.jpg" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content">
              <div class="post-header text-center">
                <h3 class="post-title">
                  <a href="single-post.html">Best Poses for fashion photo</a>
                </h3>
                <p>Justo maecenas facilisi cursus fermentum enim vivirra.</p>
              </div>
            </div>
          </article>
        </div>
        <div class="btn-center">
          <a href="#" class="btn btn-medium btn-black">Lihat Semua Menu</a>
        </div>
      </div>
    </div>
  </section>
  <footer id="footer" class="overflow-hidden">
    <div class="container mt-5">
      <div class="row">
        <div class="footer-top-area">
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-sm-6">
              <div class="footer-menu menu-001">
                <img src="images/dark-logo.png" alt="logo">
                <p>Nisi, purus vitae, ultrices nunc. Sit ac sit suscipit hendrerit. Gravida massa volutpat aenean odio
                  erat nullam fringilla.</p>
                <div
                  class="newsletter-button d-flex flex-wrap align-items-center justify-content-between border-bottom widget-menu">
                  <input type="text" name="Subscribe" placeholder="Enter your email address...">
                  <a href="#">
                    <i class="icon icon-send"></i>
                  </a>
                </div>
                <div class="social-links">
                  <ul class="d-flex list-unstyled">
                    <li>
                      <a href="#">
                        <i class="icon icon-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-instagram1"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-behance"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="footer-menu menu-002">
                <h5 class="widget-title">Quick Links</h5>
                <ul class="menu-list list-unstyled text-uppercase">
                  <li class="menu-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">About</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Shop</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Blogs</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="footer-menu text-uppercase menu-003">
                <h5 class="widget-title">Help & Info</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="#">Track Your Order</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Returns Policies</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Shipping + Delivery</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Contact Us</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Faqs</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="footer-menu contact-item menu-004">
                <h5 class="widget-title">Contact Us</h5>
                <p>Do you have any queries or suggestions? <a href="mailto:">yourinfo@gmail.com</a>
                </p>
                <p>If you need support? Just give us a call. <a href="">+55 111 222 333 44</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </footer>
  <div id="footer-bottom">
    <div class="container">
      <div class="row d-flex flex-wrap justify-content-between mb-3">
        <div class="col-md-4 col-sm-6">
          <div class="Shipping d-flex">
            <p>We ship with:</p>
            <div class="card-wrap">
              <img src="images/dhl.png" alt="visa">
              <img src="images/shippingcard.png" alt="mastercard">
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="payment-method d-flex justify-content-md-center">
            <p>Payment options:</p>
            <div class="card-wrap">
              <img src="images/visa.jpg" alt="visa">
              <img src="images/mastercard.jpg" alt="mastercard">
              <img src="images/paypal.jpg" alt="paypal">
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="copyright text-md-end">
            <p>Freebies by <a href="https://templatesjungle.com/"> <u>Templates Jungle</u><br> </a> Distributed by <a href="https://themewagon.com"> <u>ThemeWagon</u></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- script ================================================== -->
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>

  <!-- Bootstarp script ================================================== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


</body>

</html>