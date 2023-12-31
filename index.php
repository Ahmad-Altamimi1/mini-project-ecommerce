<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Ahmad</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/styless.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive2.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
   </head>
   <body>
      <?php 
session_start();
      ?>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="#"><img src="images/حار.avif" width="105px"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="" >Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link"  href="#footer" >About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#project" >Product</a>
                     </li>
                     <!-- <li class="nav-item">
                        <a class="nav-link" >Blog</a>
                     </li> -->
                     <li class="nav-item">
                        <a class="nav-link" href="#footer" >Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_menu">
                        <ul>
                           
                           <li><a href="login.php" style="color:#f2515e"><?php echo "Log in"; ?></a></li>
                           <li><a href="previwe.php"><img src="images/user-icon.png"></a></li>
                           <li><a href="#"><img src="images/trolly-icon.png"></a></li>

                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->





      <!-- banner section start -->
      <div class="banner_section banner_bg" id="home">
         <div class="container-fluid">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="taital_main">
                        <div class="taital_left">
                           <h1 class="banner_taital">Welcome to our  vibrant world of <span style="color:#ff1111">spice!</span></h1>
                           <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
                        </div>
                        <div class="taital_right">
                           <div class="product_img"><img src="images/spicy-food-removebg-preview (1).png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="taital_main">
                        <div class="taital_left">
                           <h1 class="banner_taital">Welcome to our  vibrant world of <span style="color:#ff1111">spice!</h1>
                           <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
                        </div>
                        <div class="taital_right">
                           <div class="product_img"><img src="images/2110.i309.021.S.m012.c13.hot_red_paprica_pepper_realistic_set-removebg-preview.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="taital_main">
                        <div class="taital_left">
                           <h1 class="banner_taital">Welcome to our  vibrant world of <span style="color:#ff1111">spice!</h1>
                           <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
                        </div>
                        <div class="taital_right">
                           <div class="product_img"><img src="images/Crop_It_2023-8-5_at_11.59.39-removebg-preview.png" ></div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class='fa fa-arrow-up'></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class='fa fa-arrow-down'></i>
               </a>
            </div>
         </div>
      </div>







      <!-- banner section end -->

      <!-- about section start -->

 <!-- product section start -->
      <div class="product_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="product_taital">Products</h1>
                  <p class="product_text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="image_main"><img src="images/spicy-food-removebg-preview (1).png" alt="image" /></div>
                        <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                     </div>
                     <div class="item">
                        <div class="image_main"><img src="images/2110.i309.021.S.m012.c13.hot_red_paprica_pepper_realistic_set-removebg-preview.png" alt="image" /></div>
                        <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                     </div>
                     <div class="item">
                        <div class="image_main"><img src="images/images.jfif" alt="image" /></div>
                        <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                     </div>
                     <div class="item">
                        <div class="image_main"><img src="images/Hot-and-heavy-Does-eating-spicy-food-make-you-fat.jpg" alt="image" /></div>
                        <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                     </div>
                     <div class="item">
                        <div class="image_main"><img src="images/corn-tortilla-tacos-with-sour-cream-and-jalapenos.jpg" alt="image" /></div>
                        <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                     </div>
                     <div class="item">
                        <div class="image_main"><img src="images/flatten.jfif" alt="image" /></div>
                        <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                     </div>
                     <div class="item">
                        <div class="image_main"><img src="images/spicy-food-625_625x350_71471847539.webp" alt="image" /></div>
                        <h6 class="price_text">Price <br><span style="color: #f75261;">$10</span></h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- footer section start -->
      <div class="footer_section layout_padding" id="footer">
         <div class="container">
            <div class="row" style="margin-bottom: 20px;">
               <div class="col-lg-3 col-md-6">
                  <div class="location_icon">
                     <ul>
                        <li><a target="_bl" href="https://www.google.com/maps/dir/32.5600033,35.9091331/%D8%B4%D8%A7%D8%B1%D8%B9+%D8%A7%D9%84%D8%A3%D9%85%D9%8A%D8%B1+%D9%85%D8%AD%D9%85%D8%AF%D8%8C%D8%8C+%D8%A5%D8%B1%D8%A8%D8%AF%E2%80%AD/@32.5225953,35.8504513,16.16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x151c7727e2d21ea5:0xee3f8b9f68c773f5!2m2!1d35.8394362!2d32.5254373?entry=ttu"><img src="images/map-icon.png"></a></li>
                                                <li><a href="mailto:ahmadtmtm68@gmail.com"><img src="images/mail-icon.png"></a></li>

                        <li><a href="tel:+962798540904"><img src="images/call-icon.png"></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="mail_box">
                     <textarea class="enter_email_text" placeholder="Enter Your Email" rows="5" id="comment" name="Message"></textarea>
                     <div class="subscribe_bt_1"><a href="#">Subscribe</a></div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="social_icon">
                     <ul>
                        <li><a href="https://www.facebook.com/AhmadAltmeme911"><img src="images/fb-icon.png"></a></li>
                        <!-- <li><a href="#"><img src="images/twitter-icon.png"></a></li> -->
                        <li><a href="https://www.linkedin.com/in/ahmad-altamimi-ab8747241/"><img src="images/linkedin-icon.png"></a></li>
                        <li><a href="https://www.instagram.com/ahmadaltameme44/?hl=ar"><img src="images/instagram-icon.png"></a></li>
                        <li><a href="https://www.youtube.com/@Hemokok"><img src="images/youtub-icon.png"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-md-6">
                     <img src="images/حار.avif" >
                  </div>

                  <div class="col-lg-3 col-md-6">

                     <h3 class="company_text">Product</h3>
                     <p class="dolor_text">Welcome to our fiery and vibrant world of spice! Prepare your taste buds for an exhilarating culinary adventure that will leave you craving for more. Our carefully crafted spicy dishes are a symphony of flavors that will awaken your senses and ignite your passion for bold cuisine</p>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text">Shop</h3>
                     <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text">Company</h3>
                     <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                  </div>
                  <!-- <div class="col-lg-3 col-md-6">
                     <h3 class="company_text">MY ACCOUNT</h3>
                     <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved <SPan style="color: #ff1111;"> TMTM</SPan></a></p>
         </div>
      </div>
      <!-- copyright section end  -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <!-- owl carousel -->
      <script>
         $('.owl-carousel').owlCarousel({
         loop:true,
         margin:30,
         nav:true,
         responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:4
          }
         }
         })
         <?php 
// session_destroy();
         ?>
      </script>
   </body>
</html>
