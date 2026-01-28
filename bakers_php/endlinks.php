

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
              <input type="email" placeholder="Enter your email" name="insert_items_email" required>
              <button type="submit"  name="go_to_insert">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>

        <?php
           if(isset($_REQUEST['go_to_insert'])){
            $email = $_REQUEST['insert_items_email'];
            if($email == 'mustajabkhan4628@gmail.com'){
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

        <!-- <div class="col-md-6 col-lg-3">
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
        </div> -->

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
 <!-- main body_content div -->


 <div class="p-2 text-center"
  style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
 
    &copy; <span id="displayYear"></span> All Rights Reserved By
    <a href="./index.php" style="color: #111111;font-weight:bold">Ansari Bakers</a>
 </div>
<!-- footer section -->








<!-- jQuery -->
<script src="<?php echo 'asset/website/js/jquery-3.4.1.min.js' ?>"></script>
<!-- Bootstrap JS -->
<script src="<?php echo 'asset/website/js/bootstrap.js' ?>"></script>
<!-- Slick slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>

<!-- Google Map -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script> -->
<!-- End Google Map -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    AOS.init({
        duration: 1000,
        once: true, 
    });
</script>
<!-- Custom JS -->
 
<script src="./asset/website/js/custom.js"></script>

</body>
</html>