<?php
@session_start();
require_once('admin/class/slider.class.php');



$sliderObject = new Slider();
$sliderList = $sliderObject->getAllSlider();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Trekking in Nepal">
  <meta name="keywords" content="Everest Base Camp Trek, Nepal Trekking, Annapurna Base Camp Trek, Mardi Himal Trek">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />


  <!-- <link rel="stylesheet" href="assets/css/docs.theme.min.css" /> -->

  <!-- Owl Stylesheets -->
  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css" />



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <!-- Css Links -->


  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/favicon.ico" sizes="any"><!-- 32×32 -->
  <link rel="icon" href="images/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png"><!-- 180×180 -->
  <link rel="manifest" href="/manifest.webmanifest">
  <title alt="Shikhar Adventure - Treks | Tours | Hikes in Nepal">Treks | Tours | Hikes in Nepal - Shikhar Adventure</title>
</head>


<body>
  <div id="wrapper">
    <div class="cta-policy">
      <i class='bx bxs-bell-ring bx-flip-horizontal'></i>
      <span>Check out our risk-free booking policy right now</span>
      <a href="">See Detail</a>
    </div>
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 logo-container">
            <div class="logo-wrap">
              <a href="index.php"><img src="images/logo.png" alt="" /></a>
            </div>
          </div>

          <div class="col-lg-9">
            <div class="row">
              <div class="header-top">
                <div class="contact-wrapper">
                  <div class="phone-icon">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  <div class="phone-detail">
                    <h4>+977 9840033688</h4>
                    <span>Call / WhatsApp (24/7)</span>
                  </div>
                </div>
                <button type="button" class="navbar-toggle nav-opener">
                  <span class="nav-title">Menu</span>
                  <span class="fa-solid fa-bars"></span>
                </button>
              </div>
              <nav class="my-navbar" id="#nav">
                <div class="nav-wrapper">
                  <ul class="nav-list mega-menu">
                    <li class="menu-item drop-mega dropdown">
                      <a href="javascript:void(0)">Nepal <i class="bx bxs-chevron-down"></i></a>
                      <ul class="dropdown-menu">
                        <li class="menu-item dropdown level-active">
                          <a href="">Day Tours</a>
                          <div class="mega-nav-wrapper">
                            <ul class="dropdown-menu">
                              <li class="menu-item">
                                <a href="">Chandragiri Hiking</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Shivapuri Day Hiking</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Kathmandu Sightseeing</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Bunjee Experience</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Ziplining</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Rafting</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Best Selling</a>
                          <div class="mega-nav-wrapper">
                            <ul class="dropdown-menu">
                              <li class="menu-item">
                                <a href="">Everest Base Camp Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Gokyo Valley Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest View Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest Panorama Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest Base Camp Short Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest Base Camp Budget Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest Three Pass Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Gokyo Chola Pass Trekking</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Island Peak Climbing</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest Family Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest Helicopter Tour</a>
                              </li>
                            </ul>
                          </div>
                        </li>

                        <li class="menu-item dropdown">
                          <a href="">Helicopter Tour</a>
                          <div class="mega-nav-wrapper">
                            <ul class="dropdown-menu">
                              <li class="menu-item">
                                <a href="">Everest Helicopter Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Annapurna Base Camp Heli Tour</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Breakfast at Everest View Hotel</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Langtang Heli Tour</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Nepal Tour</a>
                          <div class="mega-nav-wrapper">
                            <ul class="dropdown-menu">
                              <li class="menu-item">
                                <a href="">Langtang Circuit Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Langtang Valley Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Langtang Gosainkunda Trek</a>
                              </li>
                              <li class="menu-item"><a href="">Helambu Trek</a></li>
                              <li class="menu-item">
                                <a href="">Tamang Heritage Trek</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Peak Climbing</a>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Pilgrimage Tour</a>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Rafting In Nepal</a>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Wildlife Tour</a>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">2023 Best Packages</a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item drop-mega dropdown">
                      <a href="">Tibet <i class="bx bxs-chevron-down"></i></a>
                    </li>
                    <li class="menu-item drop-mega dropdown">
                      <a href="">Bhutan <i class="bx bxs-chevron-down"></i></a>
                    </li>
                    <li class="menu-item drop-mega dropdown">
                      <a href="javascript:void(0)">Nepal Trekking <i class="bx bxs-chevron-down"></i></a>
                      <ul class="dropdown-menu">
                        <li class="menu-item dropdown level-active">
                          <a href="">Everest Region</a>
                          <div class="mega-nav-wrapper">
                            <ul class="dropdown-menu">
                              <li class="menu-item">
                                <a href="single.php">Everest Base Camp Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Gokyo Valley Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest View Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest Panorama Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest Base Camp Short Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest Base Camp Budget Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest Three Pass Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Gokyo Chola Pass Trekking</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Island Peak Climbing</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest Family Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Everest Helicopter Tour</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Annapurna Region</a>

                          <div class="mega-nav-wrapper">
                            <ul class="dropdown-menu">
                              <li class="menu-item">
                                <a href="">Ghorepani Poonhill Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="abc.php">Annapurna Base Camp Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Mardi Himal Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Annapurna Circuit Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Short Poonhill Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Tilicho Lake Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Royal Trek in Nepal</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Annapurna Heli Tour</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Manaslu Region</a>
                          <div class="mega-nav-wrapper">
                            <ul class="dropdown-menu">
                              <li class="menu-item">
                                <a href="">Manaslu Circuit Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Manaslu Tsum Valley Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Lower Manaslu Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Manaslu Circuit Budget Trekk</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Manaslu Trek - 12 Days</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Langtang Region</a>
                          <div class="mega-nav-wrapper">
                            <ul class="dropdown-menu">
                              <li class="menu-item">
                                <a href="">Langtang Circuit Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Langtang Valley Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Langtang Gosainkunda Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Helambu Trek</a>
                              </li>
                              <li class="menu-item">
                                <a href="">Tamang Heritage Trek</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Mustang Region</a>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Restricted Trekking</a>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Dhaulagiri Region</a>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Kanchangunja Region</a>
                        </li>
                        <li class="menu-item dropdown">
                          <a href="">Makalu Region</a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item dropdown">
                      <a href="">Company <i class="bx bxs-chevron-down"></i></a>
                    </li>
                    <li class="menu-item"><a href="">Blog</a></li>
                    <li class="menu-item"><a href="">Contact Us</a></li>
                  </ul>
                  <div class="cta-search">
                    <div class="search-toggler">
                      <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <div class="input-box hidden-search-bar">
                      <form action="">
                        <i class="uil uil-search"></i>
                        <input type="text" placeholder="Trip Search..." />
                        <button class="button">Search</button>
                      </form>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>