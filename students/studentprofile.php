<?php
 include('../connection/connection.php');
include('..\students\afterstudentlogin.php');

?>

<div class="main_content">


    <div class="modal-dialog">
      <div class="modal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>

        </div>
        <div class="modal-body">

        
<?php
 $enrollment = $_SESSION['enrollment'];

$sql = "SELECT * FROM `add_student` WHERE enrollment_number = '$enrollment'";


$query = mysqli_query($con, $sql);

$result = mysqli_fetch_assoc($query);


if(isset($_POST['submit'])){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mname = $_POST['mname'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $aadhar = $_POST['aadhar'];
  $mobile = $_POST['mobile'];
  $amobile = $_POST['amobile'];
  $dob = $_POST['dob'];
  $pob = $_POST['pob'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pincode = $_POST['pincode'];
  $enrollment = $_POST['enrollment'];
 $pass = $_POST['pass'];
  $course= $_POST['course'];
  $branch = $_POST['branch'];
  $college = $_POST['college'];
  $sem = $_POST['sem'];
  $termend = $_POST['termend'];
  $fathername = $_POST['fathername'];
  $flname = $_POST['flname'];
  $foccupation = $_POST['foccupation'];
  $fmobile = $_POST['fmobile'];
  $mothername = $_POST['mothername'];
  $mlname = $_POST['mlname'];
  $moccupation = $_POST['moccupation'];
  $mmobile = $_POST['mmobile'];

 
  $updatequery =  " UPDATE `add_student` SET `fname`='$fname',`lname`='$lname',`mname`='$mname',`gender`='$gender',`email`='$email',`aadhar`='$aadhar',`number`='$mobile',`anumber`='$amobile',`dob`='$dob',`pob`='$pob',
  `address`='$address',`city`='$city',`state`='$state',`pincode`='$pincode',`enrollment_number`='$enrollment',`password`='$pass',`courses`='$course',`branch`='$branch',`college_name`='$college',`term_end`='$termend',`father_name`='$fathername',`father_lname`='$flname',`foccupation`='$foccupation',
  `fmobile`='$fmobile',`mother_name`='$mothername',`mother_lname`='$mlname',`mmobile`='$mmobile',`moccupation`='$moccupation',`sem`='$sem' WHERE enrollment_number = '$enrollment'";
$res = mysqli_query($con ,$updatequery);


if($res){
  ?>
  <script>
      alert("successfully   Student update");
  </script>
  <?php
}else{
   ?>
   <script>
       alert("sorry unable to update Student");
   </script>
   <?php
}

}


?>


          <form class="row g-3 mt-2" method="POST">
            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">First name</label>
              <input type="text" class="form-control" id="validationDefault05" name="fname" pattern="[A-Za-z ]+" readonly value="<?php echo $result['fname']; ?>">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationDefault05" name="lname" pattern="[A-Za-z ]+" readonly value="<?php echo $result['lname']; ?>">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Middle name</label>
              <input type="text" class="form-control" id="validationDefault05" name="mname" pattern="[A-Za-z ]+" readonly value="<?php echo $result['mname']; ?>">
            </div>
            
            <div class="col-md-4">
      <label for="validationDefault04" class="form-label">Gender</label>
      <select class="form-select" id="validationDefault04" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
    </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Email</label>
              <input type="text" class="form-control" id="validationDefault05" required name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  value="<?php echo $result['email']; ?>">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Aadhar Number</label>
              <input type="text" class="form-control" id="validationDefault05" pattern="[0-9]{10,12}" minlength="10" maxlength="12" name="aadhar"  value="<?php echo $result['aadhar']; ?>"  required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Mobile number</label>
              <input type="text" class="form-control" id="validationDefault05" name="mobile" pattern="[0-9]{10,12}" minlength="10" maxlength="12" value="<?php echo $result['number']; ?>" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Alternate Mobile Number</label>
              <input type="text" class="form-control" id="validationDefault05" name="amobile" pattern="[0-9]{10,12}" minlength="10" maxlength="12" value="<?php echo $result['anumber']; ?>" required>
            </div>

          

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Date of birth</label>
              <input type="date" class="form-control" id="validationDefault05" name="dob" value="<?php echo $result['dob']; ?>" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Place of birth</label>
              <input type="text" class="form-control" id="validationDefault05" name="pob" value="<?php echo $result['pob']; ?>" required>
            </div>

            <div class="col-md-12">
              <label for="validationDefault05" class="form-label">Address</label>
              <input type="text" class="form-control" id="validationDefault05" name="address" value="<?php echo $result['address']; ?>" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">City</label>
              <input type="text" class="form-control" id="validationDefault05" name="city" value="<?php echo $result['city']; ?>" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">State</label>
              <input type="text" class="form-control" id="validationDefault05" name="state" value="<?php echo $result['state']; ?>" state>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Pin code</label>
              <input type="text" class="form-control" id="validationDefault05" name="pincode" value="<?php echo $result['pincode']; ?>" state>
            </div>

            <h4>Education Details</h4> <hr>
            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Enrollment Number</label>
              <input type="text" class="form-control" readonly id="validationDefault05" name="enrollment" value="<?php echo $result['enrollment_number']; ?>">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Password</label>
              <input type="text" class="form-control" id="validationDefault05" name="pass" value="<?php echo $result['password']; ?>" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Course</label>
              <input type="text" class="form-control" readonly id="validationDefault05" name="course" value="<?php echo $result['courses']; ?> ">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Branch</label>
              <input type="text" class="form-control" readonly id="validationDefault05" name="branch" value="<?php echo $result['branch']; ?>">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">College name</label>
              <input type="text" class="form-control" readonly id="validationDefault05" name="college" value="<?php echo $result['college_name']; ?>">
            </div>



            <div class="col-md-6">
              <label for="validationDefault05" class="form-label"> Sem</label>
              <input type="numer" class="form-control" id="validationDefault05" name="sem" value="<?php echo $result['sem']; ?>" required>
            </div>


            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Term End</label>
              <input type="text" class="form-control" readonly id="validationDefault05" name="termend" value="<?php echo $result['term_end']; ?> ">
            </div>

            
            <h4>Parents Details</h4> <hr>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Father name</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['father_name']; ?>" pattern="[A-Za-z ]+" name="fathername" required>
            </div> 

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['father_lname']; ?>" pattern="[A-Za-z ]+" name="flname" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Occupation</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['foccupation']; ?>" name="foccupation" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Mobile Number</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['fmobile']; ?>" name="fmobile" pattern="[0-9]{10,12}" minlength="10" maxlength="12"required>
            </div>


            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Mother name</label>
              <input type="text" class="form-control" id="validationDefault05" pattern="[A-Za-z ]+" value="<?php echo $result['mother_name']; ?>" name="mothername" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationDefault05" pattern="[A-Za-z ]+" value="<?php echo $result['mother_lname']; ?>" name="mlname" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Occupation</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['moccupation']; ?>" name="moccupation" required> 
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Mobile Number</label>
              <input type="text" class="form-control" id="validationDefault05" pattern="[0-9]{10,12}" minlength="10" maxlength="12" value="<?php echo $result['mmobile']; ?>" name="mmobile" required> 
            </div>

            <div class="col-12">
              <input type="submit" class="btn btn-primary" name="submit" value="Update">
            </div>




          </form>
        </div>
      </div>
    </div>
  </div>



</div>


<?php

include('studentfooter.php');

?>
