
<!-----------------------contac us start --------------------------->


<div class=" my-5" id="contact">

    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #1c2331"
            >
      <!-- Section: Social media -->
      <section
               class="d-flex justify-content-between p-4"
               style="background-color: #6351ce"
               >
        <!-- Left -->
        <div class="me-5">
          <span>Social Media:</span>
        </div>
        <!-- Left -->
  
        <!-- Right -->
        <div class="social-media">
          <a href="" class="text-white me-4">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fa fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fa fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fa fa-instagram"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fa fa-linkedin"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fa fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">GP DAMAN</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto"  style="width: 60px; background-color: #7c4dff; height: 2px"/><br>
              <a href="..\Academic-Calender-2021-22-Even.pdf" target="_blank" style="text-decoration: none; color: #fff;">Academic Calender</a><br>
              <a href="#" style="text-decoration: none; color: #fff;">Academic Syllabus</a><br>
              <a href="..\rule.php" style="text-decoration: none; color: #fff;">Academic Rule</a><br>
              <a href="..\hostellife.php" style="text-decoration: none; color: #fff;">Hostel Life</a><br>
              <a href="#notice" style="text-decoration: none; color: #fff;">Notice</a>
            </div>
            <!-- Grid column -->
  
        
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p><i class="fa fa-home mr-3"> </i> Varkund Vapi Road, Nani Daman,
               Near FM Radio Prasar Bharti</p>
              <p><i class="fa fa-envelope mr-3"> </i>@gmail.com</p>
              <p><i class="fa fa-phone mr-3"> </i> + 01 234 567 88</p>
              <p><i class="fa fa-phone mr-3"> </i> + 01 234 567 89</p>
              <p><i class="fa fa-clock mr-3"> </i> <b>Mon-Sat:</b> 9:30AM to 5:00PM <br>
              <b>   Sun:</b> Closed</p>
            </div>
            <!-- Grid column -->



             <!-- Grid column -->
             <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Enquiry Boxes</h6>
              <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
             
<!---------------------------query form-------------------->
<?php


include('connection/connection.php');



if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $enquire = $_POST['enquire'];


  $insertquery = "INSERT INTO `enquiry`( `name`, `email`, `number`,`enquiry`) VALUES ('$name','$email','$number','$enquire')";


  $res =  mysqli_query($con, $insertquery);

 
  if($res == true){
    ?>
    <script>
        alert("Your query is submitted successfully. our team are replay your query soon as soon possible");
    </script>
    <?php
  }else{
     ?>
     <script>
         alery("Sorry unable to submit your query");
     </script>
     <?php
  }
  }

  
  ?>
  <form class="row" method="POST">
  <div class="">
     <div class="form-group">
          <input type="text" name="name" class="form-control mt-2 p-1"  placeholder="Name" pattern="[A-Za-z ]+" minlength="3" required>
</div>
<div class="form-group">
          <input type="text" name="email" class="form-control mt-2 p-1" placeholder="Email ID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
</div>
<div class="input-group">
    <span class="input-group-text  mt-2" id="validationTooltipUsernamePrepend">+91</span>
     <input type="text" id="mobile" pattern="[0-9]{10,12}" minlength="10" maxlength="10" placeholder="contact" name="number" class="form-control mt-2 p-1"  class="form-control" id="validationDefault02"  required>
</div>

<div class="form-group">
          <textarea type="text" name="enquire" class="form-control mt-2 p-1" placeholder="write your query here!" required></textarea>
</div>
      <div class="">
        <input type="submit" class="btn btn-primary mt-2 mb-2" name="submit">
        </div>
  </form>

             </div>
            <!-- Grid column -->
          

            <!----------------------------query form end-------------------------------->
          
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
  
      <!-- Copyright -->
      <div
           class="text-center p-3"
           style="background-color: rgba(0, 0, 0, 0.2)"
           >
           © 2020 GP daman Education. All Rights Reserved.
        <a class="text-white" href="https://mdbootstrap.com/"a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  
  </div>
  <!-- End of .container -->

  <!-----------------------contact us end --------------------------->


  
    <!--------------------------------------fontawesome----------------------------->
    <link rel="stylesheet" href="..\fontawesome-free-6.1.1-web (1)\fontawesome-free-6.1.1-web\css\fontawesome.min.css">


    <!-- font ausome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="..\fontawesome-free-6.1.1-web (1)\fontawesome-free-6.1.1-web\js\fontawesome.min.js"></script>
    <!---------------------------------------end fontawesome----------------------->

<script>
  window.addEventListener('scroll', function() {
  var nav = document.querySelector('nav');
  nav.classList.toggle('scrolled', window.scrollY > 600);
});
</script>

</body>
</html>