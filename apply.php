<!-----------------------------nav bar------------------>
<?php

include('connection/connection.php');
include('common/header.php');

if(isset($_POST['submit'])){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mname = $_POST['mname'];
  $fathername = $_POST['fathername'];
  $mothername = $_POST['mothername'];
  $pob = $_POST['pob'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pincode = $_POST['pincode'];
  $contact = $_POST['contact'];
  $acontact = $_POST['acontact'];
  $email = $_POST['semail'];
  $percentage = $_POST['percentage'];

  $sql = "INSERT INTO `admissionform`(`fname`, `lname`, `mname`, `fathername`, `mothername`, `pob`, `dob`, `address`, `city`, `state`, `pincode`, `contact`, `acontact`,`email`, `percentage`)
   VALUES ('$fname','$lname','$mname','$fathername','$mothername','$pob','$dob','$address','$city','$state','$pincode','$contact','$acontact','$email','$percentage')";

   $result = mysqli_query($con,$sql);


   
  if($result == true){
    ?>
    <script>
        alert("Your form will be submitted successfully");
    </script>
    <?php
  }else{
     ?>
     <script>
         alert("sorry unable to submit form");
     </script>
     <?php
  }
}

?>
<!-------------------end-->


<!---------------------form---------------------->
<div class="container"style="margin-top:150px">
    <div class="card">
   <form action="" method="POST" class="row g-3 m-3">
<h2 class="text-center">Government polytechnic daman </h2>
    <h3 class="text-center">Addmision 2022</h3>
  
    <div class="col-md-4">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationDefault01" name="fname" pattern="[A-Za-z ]+"  minlength="3"  required>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationDefault02" name="lname" pattern="[A-Za-z ]+"  minlength="3"  required>
  </div>

  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Middle name</label>
    <input type="text" class="form-control" id="validationDefault02" name="mname" pattern="[A-Za-z ]+" minlength="3" required>
  </div>
  
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Father name</label>
    <input type="text" class="form-control" id="validationDefault05" name="fathername" pattern="[A-Za-z ]+" minlength="3" required>
  </div>
  
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Mother name</label>
    <input type="text" class="form-control" id="validationDefault05" name="mothername" pattern="[A-Za-z ]+" minlength="3" minlength="3" required>
  </div>
  
  <div class="col-md-3">
    <label for="validationDefaultUsername" class="form-label">Place of birth</label>
    <div class="input-group">
      <input type="text" class="form-control" id="validationDefaultUsername" name="pob" pattern="[A-Za-z ]+" minlength="3" required>
    </div>
  </div>
  
  <div class="col-md-3">
    <label for="validationDefault03" class="form-label">Date of birth</label>
    <input type="date" class="form-control" id="validationDefault03" name="dob" required min="01-01-2003">
  </div>
 
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Address</label>
    <input type="text" class="form-control" id="validationDefault02" name="address" minlength="5" required >
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">City</label>
    <input type="text" class="form-control" id="validationDefault02" name="city" minlength="3" required>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">State</label>
    <select class="form-select" id="validationDefault04" required name="state" required>
  <option value="">Select a state</option>
  <option value="Andhra Pradesh">Andhra Pradesh</option>
  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
  <option value="Assam">Assam</option>
  <option value="Bihar">Bihar</option>
  <option value="Chhattisgarh">Chhattisgarh</option>
  <option value="Goa">Goa</option>
  <option value="Gujarat">Gujarat</option>
  <option value="Haryana">Haryana</option>
  <option value="Himachal Pradesh">Himachal Pradesh</option>
  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
  <option value="Jharkhand">Jharkhand</option>
  <option value="Karnataka">Karnataka</option>
  <option value="Kerala">Kerala</option>
  <option value="Maharashtra">Maharashtra</option>
  <option value="Manipur">Manipur</option>
  <option value="Meghalaya">Meghalaya</option>
  <option value="Mizoram">Mizoram</option>
  <option value="Nagaland">Nagaland</option>
  <option value="Odisha">Odisha</option>
  <option value="Punjab">Punjab</option>
  <option value="Rajasthan">Rajasthan</option>
  <option value="Sikkim">Sikkim</option>
  <option value="Tamil Nadu">Tamil Nadu</option>
  <option value="Telangana">Telangana</option>
  <option value="Tripura">Tripura</option>
  <option value="UP">Uttar Pradesh</option>
  <option value="Uttarakhand">Uttarakhand</option>
  <option value="West Bengal">West Bengal</option>
</select>

  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Pin code</label>
    <input type="number" class="form-control" id="validationDefault02" min="5" name="pincode" required>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">contact number</label>
    <div class="input-group">
    <span class="input-group-text" id="validationTooltipUsernamePrepend">+91</span>
     <input type="text" id="mobile" pattern="[0-9]{10,12}" minlength="10" maxlength="10" class="form-control" id="validationDefault02" name="contact" required>
</div>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Alternative contact number</label>
<div class="input-group">
    <span class="input-group-text" id="validationTooltipUsernamePrepend">+91</span>
    <input type="text" id="mobile" pattern="[0-9]{10,12}" minlength="10" maxlength="10" class="form-control" id="validationDefault02" name="acontact" required>
  </div>
</div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Email</label>
    <input type="text" class="form-control" id="validationDefault02" name="semail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
  </div> 
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Persentage of 10th class</label>
    <input type="number" class="form-control" id="validationDefault02" name="percentage" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
   Above information is correct
      </label>
    </div>
  </div>
  <div class="col-12"> 
 <input type="submit" name="submit" value="Submit" class="btn btn-primary">
  </div>
</form>
</div>
</div>



</body>
</html>