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

<body>

  <div class="main_body_content">

    <div class="hero_area">
      <!-- header section-->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              PieceofCake
            </a>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cake.php">Recipesofcakes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="reviews.php">Reviews</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
              </ul>
              <div class="quote_btn-container">
              <form id="searchForm" class="form-inline" action="search.php" method="GET">
    <input id="searchInput" type="text" name="query" placeholder="Search...">
    <button type="submit" class="btn my-2 my-sm-0 nav_search-btn">
        <i class="fa fa-search" aria-hidden="true"></i>
    </button>
</form>


                <a href="login.php">
                  <i class="fa fa-user" aria-hidden="true"></i>   
                </a>
              </div>
            </div>
          </nav>
        </div>
      </header>
     
      <!-- slider section -->
      <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h1>
                        DELICIOUS CAKE <br>
                        <span>
                          Yummy
                        </span>
                      </h1>
                      <a href="#">
                        <span>
                          Read More
                        </span>
                        <img src="images/white-arrow.png" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 ml-auto">
                    <div class="img-box">
                      <img src="images/cake121.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h1>
                        DELICIOUS CAKE  <br>
                        <span>
                          Yummy
                        </span>
                      </h1>
                      <a href="#">
                        <span>
                          Read More
                        </span>
                        <img src="images/white-arrow.png" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 ml-auto">
                    <div class="img-box">
                      <img src="images/cakeeee.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h1>
                        DELICIOUS CAKE  <br>
                        <span>
                          Yummy
                        </span>
                      </h1>
                      <a href="#">
                        <span>
                          Read More
                        </span>
                        <img src="images/white-arrow.png" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4 ml-auto">
                    <div class="img-box">
                      <img src="images/lavacake.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>
      <!-- end slider section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding ">
      <div class="container  ">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  About Our Company
                </h2>
              </div>
              <p>
                Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web pagend web page editors now use Lorem Ipsum as their default model text, </p>
              <a href="#">
                <span>
                  Read More
                </span>
                <img src="images/color-arrow.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="images/strawberrycake.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

    <!-- cake section -->

   
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

    

    <!-- end cake section -->

    <!-- offer section -->

    <section class="offer_section layout_padding">
      <div class="container">
        <div class="box">
          <div class="detail-box">
            <h2>
              Offers on our Cakes
            </h2>
            <h3>
              Get 5% Offer <br>
              any Recipesofcakes 
            </h3>
            <a href="https://sallysbakingaddiction.com/category/desserts/cakes/">
              Buy Now
            </a>
          </div>
          <div class="img-box">
            <img src="images/offer-img.png" alt="">
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            <span>
              See More
            </span>
            <img src="images/color-arrow.png" alt="">
          </a>
        </div>
      </div>
    </section>

    <!-- end offer section -->

    <!-- client section -->

    <section class="client_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <div class="img-box sub_img-box">
              <img src="images/client-chocolate.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 px-0">
            <div class="client_container">
              <div class="heading_container">
                <h2>
                  Testimonial
                </h2>
              </div>
              <div id="customCarousel2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="box">
                      <div class="img-box">
                        <img src="images/client-img.jpg" alt="">
                      </div>
                      <div class="detail-box">
                        <h4>
                          Gero Miliya
                        </h4>
                        <p>
                          long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it haslong established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it haslong established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has
                        </p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="box">
                      <div class="img-box">
                        <img src="images/client-img.jpg" alt="">
                      </div>
                      <div class="detail-box">
                        <h4>
                          Gero Miliya
                        </h4>
                        <p>
                          long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it haslong established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it haslong established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has
                        </p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="box">
                      <div class="img-box">
                        <img src="images/client-img.jpg" alt="">
                      </div>
                      <div class="detail-box">
                        <h4>
                          Gero Miliya
                        </h4>
                        <p>
                          long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it haslong established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it haslong established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has
                        </p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel_btn-box">
                  <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end client section -->


    <!-- contact section -->

    <section class="contact_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
            <div class="form_container">
              <div class="heading_container">
                <h2>
                  Contact Us
                </h2>
              </div>
              <form action="dashboardcontactus.php">
                <div>
                  <input type="text" placeholder="Full Name " />
                </div>
                <div>
                  <input type="text" placeholder="Phone number" />
                </div>
                <div>
                  <input type="email" placeholder="Email" />
                </div>
                <div>
                  <input type="text" class="message-box" placeholder="Message" />
                </div>
                <div class="d-flex ">
                  <button>
                    SEND NOW
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6  px-0">
            <div class="map_container">
              <div class="map">
                <div id="googleMap"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end contact section -->


    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row info_form_social_row">
          <div class="col-md-8 col-lg-9">
            <div class="info_form">
              <form action="">
                <input type="email" placeholder="Enter your email">
                <button>
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
              <a href="contact.php">
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

    <!-- end info_section -->

  </div>

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <div class="container">
      <div class="col-md-11 col-lg-8 mx-auto">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By Vjona&Dea
      
        </p>
      </div>
    </div>
  </footer>
 

  <script  src="js/jquery-3.4.1.min.js"></script>
  <script  src="js/bootstrap.js"></script>
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <script  src="js/custom.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>

  <script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        let searchTerm = document.getElementById('searchInput').value.toLowerCase(); // Convert the search term to lowercase
        let url = ''; // Initialize an empty URL string

        // Check the search term and set the URL accordingly
        switch (searchTerm) {
            case 'home':
                url = 'index.php'; // Redirect to the home page
                break;
            case 'about':
                url = 'about.php'; // Redirect to the about page
                break;
            case 'recipesofcakes':
                url = 'cake.php'; // Redirect to the recipesofcakes page
                break;
            case 'reviews':
                url = 'reviews.php'; // Redirect to the reviews page
                break;
            case 'contact us':
                url = 'contact.php'; // Redirect to the contact us page
                break;
            default:
                // If the search term does not match any predefined value, redirect to a default page or display an error message
                url = 'index.php'; // Redirect to the home page as a default
                break;
        }

        // Redirect to the specified URL
        window.location.href = url;
    });
</script>

</body>

</html>