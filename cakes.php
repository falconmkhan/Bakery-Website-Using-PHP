<?php
include "./startlinks.php";
include "./crud/config.php";

$select = $conn->prepare("SELECT * FROM cakes");
$select->execute();
$fetch = $select->fetchAll();

?>
<div class="chocolate_section2 mt-5">
  <div class="container">

    <div class="row">

      <?php
      foreach ($fetch as $cakes) {
      ?>
        <div class="col-sm-6 col-md-4">
          <div class="box shadow" data-aos="fade-up">
            <div class="img-box">
              <img src="./crud/images/<?php echo $cakes['image'] ?>" alt="">
            </div>
            <div class="detail-box1">
              <h5>
                <span><?php echo $cakes['name'] ?></span>
              </h5>
              <h6><?php echo $cakes['descr'] ?></h6>
              <h5><?php echo $cakes['price'] ?></h5>

              <a href="javascript:void(0);" class="buy-now-btn"
                data-name="<?php echo $cakes['name']; ?>"
                data-descr="<?php echo $cakes['descr']; ?>"
                data-price="<?php echo $cakes['price']; ?>"
                data-image="./crud/images/<?php echo $cakes['image']; ?>">
                Buy Now
              </a>
            </div>
          </div>
        </div>

      <?php
      }
      ?>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" style="z-index: 1000000;" id="buyNowModal" tabindex="-1" role="dialog" aria-labelledby="buyNowModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title"><span>Your Order</span></h5>
          <button type="button" class="shadow-sm close text-" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">

          <div class="d-md-flex justify-content-space">
            <div class="pr-3 mb-3 ">
              <img id="modalCakeImage" src="" style="width: 200px;" class="rounded modal-cake-image" alt="Cake Image">
            </div>
            <div class="">
              <p><strong>Name:</strong> <span id="modalCakeName"></span></p>
              <p><strong>Description:</strong> <span id="modalCakeDescr"></span></p>
              <p><strong>Price:</strong> <span id="modalCakePrice"></span></p>
            </div>
          </div><br>

          <!-- <hr> -->
          <form id="buyForm" action="https://api.web3forms.com/submit" method="POST">
            <input type="hidden" name="access_key" value="6b739dfe-69d4-48e3-bc25-337f6d7616ac">

            <input type="hidden" name="subject" value="New Cake Order">
            <input type="hidden" name="cake_name" id="inputCakeName">
            <input type="hidden" name="cake_descr" id="inputCakeDescr">
            <input type="hidden" name="cake_price" id="inputCakePrice">

            <div class="form-group">
              <label for="n">Your Name</label>
              <input id="n" type="text" name="customer_name" placeholder="Enter Full Name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="p">Your Phone</label>
              <input id="p" type="number" name="customer_phone" placeholder="Enter Active Number" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="m">Your Message</label>
              <textarea id="m" name="customer_message" class="form-control" rows="3" placeholder="Type Message"></textarea>
            </div>
            <button type="submit" class="all_btns col-12 text-center">Place Order</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  document.querySelectorAll('.buy-now-btn').forEach(button => {
    button.addEventListener('click', function() {
      const name = this.dataset.name;
      const descr = this.dataset.descr;
      const price = this.dataset.price;
      const image = this.dataset.image;

      
      // Fill modal
      document.getElementById('modalCakeName').textContent = name;
      document.getElementById('modalCakeDescr').textContent = descr;
      document.getElementById('modalCakePrice').textContent = price;
      document.getElementById('modalCakeImage').src = image;

      // Fill hidden form inputs
      document.getElementById('inputCakeName').value = name;
      document.getElementById('inputCakeDescr').value = descr;
      document.getElementById('inputCakePrice').value = price;



      $('#buyNowModal').modal('show');
    });
  });


  // contact form redirection
  document.getElementById('buyForm').addEventListener('submit', function(event) {
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
          document.getElementById('buyForm').reset();
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
include "./endlinks.php";
?>