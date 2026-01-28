<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Ansari Bakers</title>
  <link rel="icon" href="">

 <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo 'asset/css/bootstrap.css'?>" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

 <!-- menu slider links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />

 <!-- Fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

 <!-- Slick slider link -->
  <link rel="stylesheet" href="<?php echo 'asset/css/slick-theme.css' ?>" />

 <!-- Font Awesome style link -->
  <link href="<?php echo 'asset/css/font-awesome.min.css' ?>" rel="stylesheet" />

 <!-- main css file link -->
 <!-- <link rel="stylesheet" href="./asset/website/css/main.css"> -->
 <link rel="stylesheet" href="../bakers_php/asset/css/style.css">
 <!-- <link rel="stylesheet" href="../bakers_php/asset/css/style2.css"> -->
 <!-- Responsive style -->
  <link href="<?php echo 'asset/css/responsive.css'?>" rel="stylesheet" />

 <!-- rveleal animation aos link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">


</head>

<body>


<!-- ------------------------------- -->
<!-- main content section -->
<!-- ------------------------------- -->

<div class="main_body_content">







 <!-- ------------------------------- -->
 <!-- navbar and slider section -->
 <!-- ------------------------------- -->

  <div class="hero_area">

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid shadow-sm">
        <nav class="navbar navbar-expand-lg custom_nav-container ">

          <a class="navbar-brand" href="./index.php">
            ANSARI BAKERS
          </a>
          

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home</a>
              </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" 
          role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cakes.php" class="dropdown-item">Cakes</a></li>
            <!-- <li><a href="c_cakes.php" class="dropdown-item">Customized Cakes</a></li> -->
            <li><a href="sweets.php" class="dropdown-item">Sweets</a></li>
            <li><a href="biscuits.php  " class="dropdown-item">Biscuits & Cookies </a></li>
          </ul>
        </li>

              <li class="nav-item">
                <a class="nav-link" href="./aboutpage.php">About</a>
              </li>

        

              <li class="nav-item">
                <a class="nav-link" href="./feedback.php">Testimonial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contactbtn" href="./contact.php">Contact Us</a>
              </li>
            </ul>
            <!-- <div class="quote_btn-container">
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
            </div> -->
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->










    <!-- slider section -->
    <section class="slider_section" data-aos="fade">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h1>
                      Yummy <br>
                      <span>
                        Cakes
                      </span>
                    </h1>
                  <div class="contacts d-flex justify-content-between mb-3">
                      <span>
                        Contact : <br>   +92 3132064433
                      </span>
                      <span>
                        Email : <br> ansaribakerss@gmail.com
                      </span>
                  </div>
                  </div>
                </div>
                <div class="col-md-4 ml-auto">
                  <div class="img-box">
                    <img src="<?php echo 'asset/images/slider-img.png'?>" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h1>
                      Biscuits &<br>
                      <span>
                        Cookies
                      </span>
                    </h1>
                  <div class="contacts d-flex justify-content-between mb-3">
                      <span>
                        Contact : <br> +92 3132064433
                      </span>
                      <span>
                        Email : <br> ansaribakerss@gmail.com
                      </span>
                  </div>
                  </div>
                </div>
                <div class="col-md-4 ml-auto">
                  <div class="img-box">
                    <img src="<?php echo 'asset/images/slider-img.png'?>" class="banner_img" alt="">
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

 <!-- ------------------------------- -->
 <!-- navbar and slider section end -->
 <!-- ------------------------------- -->










 <!-- ------------------------------- -->
  <!-- about section -->
 <!-- ------------------------------- -->

 <section class="about_section layout_padding" data-aos="fade-up">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <!-- <div class="heading_container "> -->
            <p class="small_headings" style="color: #111111;">
              About Our Bakery
            </p>
          <!-- </div> -->
          <p>
          It all began on October 10, 2016, when my niece called with an exciting request 
          to surprise her brother with a customized chocolate Swiss cake. I was thrilled to 
          be part of their joy. What better gift than a heartfelt, homemade cake crafted with love...  
          </p>
          <a href="./aboutpage.php">
            <span id="read_btn">
              READ MORE
            </span>
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="<?php echo 'asset/images/about-img.png'?>" alt="">
        </div>
      </div>
    </div>

  </div>
 </section>

 <!-- ------------------------------- -->
  <!-- end about section -->
 <!-- ------------------------------- -->










 <!-- ------------------------------- -->
  <!-- selling item section -->
 <!-- ------------------------------- -->

 <section class="chocolate_section mb-5" >

  <div class="container">
    <div class="text-md-center">
      <p class="small_headings text-center"> 
        Top Selling Items
      </p>
      <p>
        Many desktop publishing packages and web page editors now use Lorem Ipsum as their
      </p>
    </div>
  </div>

  <div class="container">
    <div class="chocolate_container" id="chocolate_container">

      <div class="box shadow" data-aos="fade-up-right">
        <div class="img-box">
          <img src="<?php echo 'asset/images/slider-img.png' ?>" alt="">
        </div>
        <div class="detail-box1">
          <h6>
            Yummy <span>chocolate</span>
          </h6>
          <h5>$5.0</h5>
          <!-- <a href="">
            BUY NOW
          </a> -->
        </div>
      </div>
      
      <div class="box shadow" data-aos="fade-up">
        <div class="img-box">
          <img src="<?php echo 'asset/images/slider-img.png' ?>" alt="">
        </div>
        <div class="detail-box1">
          <h6>
            Yummy <span>chocolate</span>
          </h6>
          <h5>$5.0</h5>
          <!-- <a href="">
            BUY NOW
          </a> -->
        </div>
      </div>

      <div class="box shadow" data-aos="fade-up-left">
        <div class="img-box">
          <img src="<?php echo 'asset/images/slider-img.png' ?>" alt="">
        </div>
        <div class="detail-box1">
          <h6>
            Yummy <span>chocolate</span>
          </h6>
          <h5>$5.0</h5>
          <!-- <a href="">
            BUY NOW
          </a> -->
        </div>
      </div>

      <div class="box shadow" data-aos="fade-up-left">
        <div class="img-box">
          <img src="<?php echo 'asset/images/slider-img.png' ?>" alt="">
        </div>
        <div class="detail-box1">
          <h6>
            Yummy <span>chocolate</span>
          </h6>
          <h5>$5.0</h5>
          <!-- <a href="">
            BUY NOW
          </a> -->
        </div>
      </div>





    </div>
  </div>

 </section>


 <!-- ------------------------------- -->
  <!-- end cAKE section -->
 <!-- ------------------------------- -->

  




























 <!-- ------------------------------- -->
  <!-- feedback section -->
 <!-- ------------------------------- -->

  <section class="contact_section layout_padding mt-5" id="contact"  data-aos="fade-up">
    <div class="container-fluid">

    <div class="row">
      <div class="col-12 text-center mb-4"  data-aos="fade-up">
        <p class="small_headings">
          Feedback
        </p>
        <p class="text-capitalize">"Give us your honest review about our items"</p>
      </div>
    </div>

      <div class="row">

        <div class="col-md-5 col-lg-5 ml-auto "  data-aos="fade-up">
          <div class="form_container">

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

              <div  class="border mb-4"  data-aos="fade-up">
                <label for="photo" id="photo_hover" class="mt-2"> 
                  <i class="bi bi-person-fill p-2 ml-2 shadow-sm" style="font-size: 22px;color:#46200b"></i>
                  UPLOAD YOUR PHOTO
                </label>
                <input type="file" id="photo" class="d-none" name="user_img" >
              </div>
              <div  data-aos="fade-up">
                <input type="text" placeholder="Full Name" name="user_name"  required>
              </div>
              <div  data-aos="fade-up">
                <input type="text" placeholder="Email Or Phone" name="user_email" required>
              </div>
              <div  data-aos="fade-up">
                <input type="text" class="message-box" placeholder="Send Message" name="user_message" required>
              </div>
           
              <div class="d-flex"  data-aos="fade-up">
                <button class="all_btns" type="submit" name="submit">
                  SUBMIT
                </button>
              </div>
            </form>

          </div>
        </div>

        <?php
          include "../bakers_php/crud/config.php";
          if(isset($_REQUEST['submit'])){
            $u_name = $_REQUEST['user_name'];
            $u_email = $_REQUEST['user_email'];
            $u_mess = $_REQUEST['user_message'];
            $u_img = $_FILES['user_img'];

            
    $select_query = $conn->prepare("SELECT * FROM feedbacks WHERE name = '$u_name'");
    $select_query->execute();
    $row_count = $select_query->rowCount();

    if($row_count > 0 ){
        ?>
        <script>
          alert("YOU HAVE SEND A FEEDBACK BEFORE")
        </script>
        <?php
    }

    else{
            
            $imgname = $_FILES['user_img']['name'];
            $img_tmp_name = $_FILES['user_img']['tmp_name'];;
            $folder = '../bakers_php/crud/feedback/'.$imgname;
    
            $insert = $conn->prepare("INSERT INTO feedbacks (name , email , message , image)
            VALUE ('$u_name' , '$u_email' , '$u_mess' , '$imgname')");
            $insert->execute();
    
            if($insert){
                move_uploaded_file($img_tmp_name,$folder);
            }
            else{
                echo 'image didnt reach';
            }
          }
        }

        ?>

        
        <div class="col-md-5 offset-md-1 px-0 mt-5 mt-lg-4 me-5"  data-aos="fade-up">
          <img src="./asset/images/Playful Sandwiches Restaurant Reviews Instagram Post.png" class="img-fluid" alt="">
        </div> 

      </div>

    </div>
  </section>

 <!-- ------------------------------- -->
  <!-- end feedback section -->
 <!-- ------------------------------- -->












 <!-- ------------------------------- -->
  <!-- footer section -->
 <!-- ------------------------------- -->

  <section class="info_section layout_padding2" data-aos="fade">
    <div class="container">

    <div class="row info_form_social_row">

      <!-- email -->
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="" method="post">
              <input type="text" placeholder="Enter your email" name="insert_items_email" required>
              <button type="submit"  name="go_to_insert">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>

        <?php
           if(isset($_REQUEST['go_to_insert'])){
            $email = $_REQUEST['insert_items_email'];
            if($email == 'mustajabkhan4628'){
              ?>
              <script>
                window.location.href = "../bakers_php/crud/all_menu.php";
              </script>
              <?php
            }
            else{
              ?>
              <script>
                alert("Network Error")
                // window.location.href = "../bakers_php/index.php";
              </script>
              <?php
            }
           }
        ?>

        <!-- social icons -->
        <div class="col-md-4 col-lg-3">

          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
          </div>
        </div>

    </div>


    <div class="row info_main_row">

      <div class="col-12 col-md-4 col-lg-3">
        <div class="info_detail">
            <h4>
              ANSARI BAKERS
            </h4>
            <p class="mb-0">
            🎉 Ansari Bakers Turns 9! 🎉 <br> 
            Nine years of your love, support, and my journey from a simple hobby to a thriving passion!  
            </p>
        </div>
       
      </div>

        <div class="col-6 col-md-2 col-lg-2 offset-lg-1">
         <div class="info_details">
         <div class="info_links">
            <h4>
              Links
            </h4>
            <div class="info_links_menu">
              <a href="./index.php">
                Home
              </a>
              <a href="./aboutpage.php">
                About
              </a>
              <a href="./feedback.php">
                Testimonial
              </a>
              <a href="./contact.php">
                Contact us
              </a>
            </div>
          </div>
         </div>
        </div>


        <div class="col-6 col-md-2 col-lg-3">
         <div class="info_details">
         <div class="info_links">
            <h4>
              Menu
            </h4>
            <div class="info_links_menu">
              <a href="./cakes.php">
                Cakes
              </a>
              <a href="./sweets.php">
                Sweets
              </a>
              <a href="./biscuits.php">
                Biscuits & Cookies
              </a>
            </div>
          </div>
         </div>
        </div>


        <div class="col-12 col-md-4 col-lg-3">
          <h4>
            Contact Us
          </h4>
          <div class="info_contact">
            <a href="./contact.php">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                +92 3132064433
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope"></i>
              <span>
                ansaribakerss@gmail.com
              </span>
            </a>
          </div>
        </div>

        
      </div>
    </div>

  </section>

 <!-- ------------------------------- -->
  <!-- end footer_section -->
 <!-- ------------------------------- -->





</div>

<!-- ------------------------------- -->
<!-- main content end -->
<!-- ------------------------------- -->





<!-- ------------------------------- -->
<!-- copy right section -->
<!-- ------------------------------- -->

<div class="p-2 text-center"
 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
    &copy; <span id="displayYear"></span> All Rights Reserved By
    <a href="./index.php" style="color: #111111;font-weight:bold">Ansari Bakers</a>
</div>

<!-- ------------------------------- -->
<!-- copy right section end -->
<!-- ------------------------------- -->
























<!-- jQuery -->
<script src="<?php echo 'asset/js/jquery-3.4.1.min.js'; ?>"></script>
<!-- Bootstrap JS -->
<script src="<?php echo 'asset/js/bootstrap.js'; ?>"></script>
<!-- Slick slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
<!-- Custom JS -->
<script src="<?php echo 'asset/js/custom.js'; ?>"></script>
<!-- Google Map -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script> -->
<!-- End Google Map -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


<script>
    AOS.init({
        duration: 1000,
        once: true, 
    });
</script>


</body>
</html>