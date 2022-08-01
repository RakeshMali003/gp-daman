<!-----------------------------nav bar------------------>
<?php

include('..\gpdaman\header.html');

include('..\gpdaman\connection.php');

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
$percentage = $_POST['percentage'];

$insertquery = "INSERT INTO `admissionform`(`fname`, `lname`, `mname`, `fathername`, `mothername`, `pob`, `dob`, `address`, `city`, `state`, `pincode`, `contact`, `acontact`, `persentage`) 
VALUES ('$fname','$lname','$mname','$fathername','$mothername','$pob','$dob',
'$address','$city','$state','$pincode','$contact','$acontact','$percentage')";



$res =  mysqli_query($con, $insertquery);

 
if($res == true){
  ?>
  <script>
      alert("Application submited successfully");
  </script>
  <?php
}else{
   ?>
   <script>
       alery("Sorry unable to submit application");
   </script>
   <?php
}
}

?>

<!-------------------end-->


<!---------------------form---------------------->
<div class="container"style="margin-top:150px">
    <div class="card">
<form class="row g-3 m-3" method="POST">
<h2 class="text-center">Government polytechnic daman </h2>
    <h3 class="text-center">Addmision 2022</h3>
  
    <div class="col-md-4">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationDefault01" name="fname" required>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationDefault02" name="lname" required>
  </div>

  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Middle name</label>
    <input type="text" class="form-control" id="validationDefault02" name="mname" required>
  </div>
  
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Father name</label>
    <input type="text" class="form-control" id="validationDefault05" name="fathername" required>
  </div>
  
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Mother name</label>
    <input type="text" class="form-control" id="validationDefault05" name="mothername" required>
  </div>
  
  <div class="col-md-3">
    <label for="validationDefaultUsername" class="form-label">Place of birth</label>
    <div class="input-group">
      <input type="text" class="form-control" id="validationDefaultUsername" name="pob" required>
    </div>
  </div>
  
  <div class="col-md-3">
    <label for="validationDefault03" class="form-label">Date of birth</label>
    <input type="date" class="form-control" id="validationDefault03" name="dob" required>
  </div>
 
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Address</label>
    <input type="text" class="form-control" id="validationDefault02" name="address" required>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">City</label>
    <input type="text" class="form-control" id="validationDefault02" name="city" required>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">State</label>
    <input type="text" class="form-control" id="validationDefault02" name="state" required>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Pin code</label>
    <input type="text" class="form-control" id="validationDefault02" name="pincode" required>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">contact number</label>
    <input type="text" class="form-control" id="validationDefault02" name="contact" required>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Alternative contact number</label>
    <input type="text" class="form-control" id="validationDefault02" name="acontact" required>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Persentage of 10th class</label>
    <input type="text" class="form-control" id="validationDefault02" name="percentage" required>
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
    <button class="btn btn-primary" style="border-radius:20px" name="submit" type="submit">Submit form</button>
  </div>
</form>
</div>
</div>
</body>
</html>