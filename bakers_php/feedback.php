<?php
include "./startlinks.php";
include "../bakers_php/crud/config.php";

$select = $conn->prepare("SELECT * FROM feedbacks");
$select->execute();
$fetch = $select->fetchAll();


?>

  <!-- client section -->

<section class="client_section layout_padding">
      <div class="container-fluid">
      
      <div class="row">
        <div class="col-12 text-center mb-3"  >
            <div style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                <h2>
                  Customers Review
                </h2>
            </div>
        </div>
      </div>

        <div class="row">

          <div class="col-lg-4 ml-auto" data-aos="fade-up-right">
            <div class="img-box sub_img-box">
              <img src="./asset/website/images/client-chocolate.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-6 px-0" data-aos="fade-up-left">
            <div class="client_container">

              <div id="customCarousel2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="box">
                      <div class="img-box">
                        <img src="../bakers_php/crud/feedback/user.img" class="img-fluid" alt="">
                      </div>
                      <div class="detail-box">
                        <h4>
                          MUSTAJAB KHAN
                        </h4>
                        <p>
                        All items, especially the cakes, are always fresh, delicious, 
                        and beautifully decorated, making every bite a delightful experience.
                        </p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
<?php
foreach($fetch as $feedback){
?> 
                  <div class="carousel-item">
                    <div class="box">
                      <div class="img-box">
                        <img src="../bakers_php/crud/feedback/<?php echo $feedback['image'] ?>" class="img-fluid" alt="">
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

        </div>
      </div>
</section>

  <!-- end client section -->

<?php
include "./endlinks.php"
?>