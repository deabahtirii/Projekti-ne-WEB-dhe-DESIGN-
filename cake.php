<?php
session_start();

require('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1," />

  <title>PieceofCake</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="css/slick-theme.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="main_body_content">

    <div class="hero_area">

      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              PieceofCake
            </a>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="cake.php">Recipesofcakes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="reviews.php">Reviews</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
              </ul>
             
            </div>
          </nav>
        </div>
      </header>
 
    </div>

    

    <section class="cake_section ">
      <div class="container">
        <div class="heading_container">
          <h2>
            Our best products
          </h2>
          <p>
            Here you have one of the best cakes made with love by us
          </p>
        </div>
      </div>
      <div class="container">
        <div class="cake_container">
          <div class="box">
            <div class="img-box">
              <img src="images/carrotcake.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Yummy <span>carrotcake</span>
              </h6>
              <h5>
                $5.0
              </h5>
              <a href="">
                Read more
              </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/brownie.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Yummy <span>brownie</span>
              </h6>
              <h5>
                $5.0
              </h5>
              <a href="">
                Read more
              </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/blueberrycake.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Yummy <span>blueberrycake</span>
              </h6>
              <h5>
                $5.0
              </h5>
              <a href="">
                Read more
              </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/chesecake.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Yummy <span>cheesecake</span>
              </h6>
              <h5>
                $5.0
              </h5>
              <a href="">
                Read more
              </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/chococak.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Yummy <span>chococake</span>
              </h6>
              <h5>
                $5.0
              </h5>
              <a href="">
                Read more
              </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/cocoberry.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Yummy <span>cocoberry</span>
              </h6>
              <h5>
                $5.0
              </h5>
              <a href="">
                Read more
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>



   
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row info_form_social_row">
          <div class="col-md-8 col-lg-9">
            <div class="info_form">
              <form id="email-form">
                <input type="email" id="user-email" placeholder="Enter your email">
                <button type="submit" id="submit-button">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
              </form>
              
            </div>
          </div>
          <div class="col-md-4 col-lg-3">

            <div class="social_box">
              <a href="https://www.facebook.com/">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://twitter.com/?lang=en">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://www.linkedin.com/">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h4>
                Menu
              </h4>
              <div class="info_links_menu">
                <a href="index.php">
                  Home
                </a>
                <a href="about.php">
                  About
                </a>
                <a href="cake.php">
                  Recipesofcakes
                </a>
                <a href="reviews.php">
                  Reviews
                </a>
                <a href="contact.php">
                  Contact us
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_insta">
              <h4>
                Instagram
              </h4>
              <div class="insta_box">
                <div class="img-box">
                  <img src="images/insta-img.png" alt="">
                </div>
                <p>
                  long established fact that a reader
                </p>
              </div>
              <div class="insta_box">
                <div class="img-box">
                  <img src="images/insta-img.png" alt="">
                </div>
                <p>
                  long established fact that a reader
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_detail">
              <h4>
                Company
              </h4>
              <p class="mb-0">
                when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h4>
              Contact Us
            </h4>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="contact.php">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +383 44 111 222
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span>
                  vd@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    

  </div>


  <footer class="container-fluid footer_section">
    <div class="container">
      <div class="col-md-11 col-lg-8 mx-auto">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By Vjona&Dea
         
        </p>
      </div>
    </div>
  </footer>
  


  <script src="js/jquery-3.4.1.min.js"></script>

  <script src="js/bootstrap.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  
 
</body>

</html>
