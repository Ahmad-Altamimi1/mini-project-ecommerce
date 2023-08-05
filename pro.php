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
      <link rel="stylesheet" type="text/css" href="css/styles.css">
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
                           
                           <li><a href="previwe.php" style="color:#f2515e"><?php echo  $_SESSION["username"]; ?></a></li>
                           <li><a href="previwe.php"><img src="images/user-icon.png"></a></li>
                           <li><a href="#"><img src="images/trolly-icon.png"></a></li>
                                                    <li><a href="mainpage.php" style="color:#ff1111">Log Out</a></li>

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
</div>

<div id="project" >
   <div id="input" >

         <form action="" method="POST"  enctype = "multipart/form-data" id="form" > 
            <!-- NAME -->
         <label for="Name">proudact Name :</label>
         <input type="text" id="Name" name="name" required>

   <!-- DEC  -->
         <label for="des"> description :</label>

         <input type="text" name="des" id="des" required>
         <!-- PRICE  -->

         <label for="price">price:</label>

         <input type="text" name="price" id="price" required>
   <!-- PIC  -->

         <label for="">prodact Image:</label><label for="product-image" class="custom-file-upload"> Choose File
   <input type="file" id="product-image" name="product-image" required></label>
<!-- ______ -->
 <!-- <label for="fileInput" class="custom-file-upload">
    <input type="file" id="fileInput">
   
  </label> -->
   <!-- Add  -->
         <input type="submit" value="Add" name="add">
         </form>
      
   </div>
</div>
<?php 

if (!(isset($_SESSION["card"]))) {
  $_SESSION["card"]=array();
}


if (isset($_POST["add"])) {
   $name =$_POST["name"];
   $price =$_POST["price"];
   $des =$_POST["des"];
$add=$_POST["add"];
$pic = $_FILES["product-image"]["name"];
        $tempName = $_FILES["product-image"]["tmp_name"];
$diroctery="image/";
$file= $diroctery . basename($pic);
trim($file);
        move_uploaded_file($tempName, $file);


  
   $card=[$name ,$price,$des,$file];

   $check = true;
        foreach ($_SESSION["card"] as $value) {
            if ($name === $value[0] &&  $price=== $value[1] && $des=== $value[2] && $file === $value[3]) {
                $check = false;
            }
        }

        if ($check) {

        
           $card=[$name ,$price,$des,$file];
           array_push( $_SESSION["card"] ,$card);}

   
}
$delet=array();

if (isset($_POST["delet"])) {
    unset($_SESSION["card"][$_POST["delet"]]);
    // print_r($_POST["delet"]);
    
   }
   if ($_SESSION["card"] ==null) {
   echo " <div class='warning'>no thing to show!!!</div> ";
}else{
echo '<div class="container " style="padding-top: 40px; ">';
echo "<table class=' table table-striped table-hover table-bordered  ' style='text-align: center;'>";
echo <<< "th"
<tr>
<th scope="col">Name</th>
<th scope="col">Price</th>
<th scope="col">Description</th>
<th scope="col">Image</th> 
<th scope="col" style="padding:0"> </th>
</tr>
th;

   foreach ($_SESSION["card"] as $key => $value) {
   echo <<<"table"
   <tr scope="row">

   <td scope="col"> $value[0] </td>
   <td scope="col"> $value[1] JD </td>
   <td scope="col">$value[2] </td>
    <td scope="col"> <img src=$value[3] alt="Card Image" > </td>
   <td >
            <form action="" method="POST" style="padding:0">
                <input type="hidden" name="delet" value="$key">
                <input type="submit" value="Delete"  style="color: white; width:100% ; background: #ff0909;   margin: 0 ;">
            </form>
        </td>
   </tr>
   table;
}

echo "</table>";
echo "</div>";
}
?>
   <form action="previwe.php" method="post">
            <input type="submit" value="previwe" name="previwe">
         </form>
         <?php

          ?>

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
                     <p class="dolor_text">Tmtm</p>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text">Company</h3>
                     <p class="dolor_text">Al_Tamimi </p>
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