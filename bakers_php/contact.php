<?php
include "./startlinks.php";
include "../bakers_php/crud/config.php";
?>

<!-- contact section -->

<section class="contact_section layout_padding" data-aos="fade-up">
      <div class="container-fluid contact">

        <div class="row mt-md-3">

          <div class="col-md-4 offset-lg-1 mt-md-5">

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-geo-alt-fill flex-shrink-0"></i>
           <div>
            <h3>Location</h3>
            <p>Karachi Korangi No 1-1/2</p>
           </div>
          </div>

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class=" bi bi-telephone-fill flex-shrink-0"></i>
           <div>
            <h3>Call Us</h3>
            <p>+92 3132064433</p>
           </div>
          </div>

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope-fill flex-shrink-0"></i>
           <div>
            <h3>Email</h3>
            <p>ansaribakerss@gmail.com</p>
           </div>
          </div>

          


          </div>

          <div class="col-md-6  mt-5 mt-md-0  offset-md-1 " data-aos="fade-up">
            <div class="form_container">

              <form id="contact-form" action="https://api.web3forms.com/submit" method="POST">
                 <!-- Access Key -->
                <input type="hidden" name="access_key" value="6cfe8b87-cf22-4579-8746-9907f747e887">
                <div class="d-md-flex">
                  <input class="w-md-50 mr-1" type="text" placeholder="Full Name " name="name"  required>
                  <input class="w-md-50" type="text" placeholder="Phone number" name="phone" required>
                </div>
                
                <div>
                  <select name="menu"  id="" class="form-select pt-2 pb-2 mb-4" required>
                    <option value="">Select Item</option>
                    <?php
                     $select = $conn->prepare("SELECT * FROM menu");
                     $select->execute();
                     $fetch = $select->fetchAll();
                     foreach($fetch as $menu){
                      ?>
                     <option value="<?php echo $menu['items_name'] ?>" ><?php echo $menu['items_name'] ?></option>
                      <?php
                     }
                    ?>
                  </select>
                </div>
                <div>
                  <input type="text" class="message-box" placeholder="Message" name="message" >
                </div>

                <button type="submit" class="col-12 text-center all_btns">
                  SUBMIT
                </button>

              </form>
            </div>

          </div>

        </div>
      </div>
</section>

<!-- end contact section -->

<script>
  // contact form redirection
 document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form from redirecting
    
    var formData = new FormData(this);

    fetch('https://api.web3forms.com/submit', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        alert('Form submitted successfully!');
        // Optionally reset the form after submission
        document.getElementById('contact-form').reset();
      } else {
        alert('There was an error with the submission.');
      }
    })
    .catch(error => {
      alert('There was an error with the submission.');
      console.error('Error:', error);
    });
  });
</script>



<?php
include "./endlinks.php"
?>