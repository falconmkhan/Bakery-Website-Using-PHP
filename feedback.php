<?php
include "./startlinks.php";
include "./crud/config.php";

$select = $conn->prepare("SELECT * FROM feedbacks");
$select->execute();
$fetch = $select->fetchAll();


?>

<!-- client section -->

<section class="client_section layout_padding">
  <div class="container-fluid">


    <div class="row">

      <div class=" col-lg-5 d-none d-lg-block px-0" data-aos="fade-up">
          <img src="asset/images/review.png" class="img-fluid" alt="">
        <!-- <div class="client_container">
          <h2 class="text-center  mb-3">Our Web Creator</h2>

          <div id="customCarousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="box">
                  <div class="img-box justify-content-center">
                    <img src="./crud/feedback/user.img" class="img-fluid rounded" alt="">
                  </div>
                  <div class="detail-box">
                    <h3>
                      FAIZ KHAN
                    </h3>
                    <p>
                      "A passionate web developer dedicated to crafting sleek and
                      modern websites. This bakery site blends style with functionality to enhance your
                      online presence. Need a custom website?<br> <b>Let’s connect!</b>"
                    </p>
                    <p><i class="fa fa-envelope mr-2" style="font-size: 15px;"></i>: mustajabmk771@gmail.com <br>
                      <i class="fa fa-phone mr-2" style="font-size: 15px;"></i> : +92 3158915290
                    </p>
                    <div class="d-flex justify-content-between">
                      <a href="https://www.facebook.com/faizkhan117">
                        <i class="fa fa-facebook text-light mt-1"></i>
                      </a>
                      <a href="https://www.instagram.com/m.mustajabkhan/">
                        <i class="fa fa-instagram text-light mt-1"></i>
                      </a>
                      <a href="https://www.youtube.com/channel/UCXm5JehvXNkYUoA1teAv87Q">
                        <i class="fa fa-youtube-play text-light mt-1"></i>
                      </a>
                    </div>

                  </div>
                </div>
              
              </div>
            </div>
          </div>
        </div> -->
      </div>

      <div class="col-lg-6 offset-lg-1 px-0"  data-aos="fade-up">
        <div class="client_container">
          <h2 class="text-center mb-3">Customer Reviews</h2>
          <div id="customCarousel2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="box">
                  <div class="img-box">
                    <img src="./crud/feedback/user.img" class="img-fluid" alt="">
                  </div>
                  <div class="detail-box">
                    <h4>
                      KASHIF
                    </h4>
                    <p class="text-capitalize">
                      You never compromise on freshness.Your cakes Always soft, delicious, and unforgettable.
                    </p>
                    
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
              <?php
              foreach ($fetch as $feedback) {
              ?>
                <div class="carousel-item">
                  <div class="box">
                    <div class="img-box">
                      <?php
                      if ($feedback['image']) { ?>
                        <img src="./crud/feedback/<?php echo $feedback['image'] ?>" class="img-fluid" alt="">
                      <?php
                      } else {
                      ?>
                        <img src="./crud/feedback/user.img" class="img-fluid" alt="">
                      <?php
                      }
                      ?>
                    </div>
                    <div class="detail-box">
                      <h4>
                        <?php echo $feedback['name'] ?>
                      </h4>
                      <p><?php echo $feedback['message'] ?></p>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
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

      <div class=" col-lg-6 d-lg-none px-0" data-aos="fade-up">
          <img src="asset/images/review.png" class="img-fluid" alt="">
      </div>


    </div>
  </div>
</section>

<!-- end client section -->

<?php
include "./endlinks.php"
?>