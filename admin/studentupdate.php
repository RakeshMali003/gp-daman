<?php
 include('../connection/connection.php');
include('..\admin\adminsidenavbar.php');


$id = $_GET['id'];

$sql = "SELECT * FROM `add_student`  WHERE sr_no = $id";


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
    `fmobile`='$fmobile',`mother_name`='$mothername',`mother_lname`='$mlname',`mmobile`='$mmobile',`moccupation`='$moccupation',`sem`='$sem' WHERE sr_no = $id";
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


<div class="main_content">


    <div class="modal-dialog">
      <div class="modal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
           <a href="..\admin\student-registration.php" class="btn btn-primary">Back</a>
        </div>
        <div class="modal-body">

        


          <form class="row g-3 mt-2" method="POST">
            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">First name</label>
              <input type="text" class="form-control" id="validationDefault05" name="fname" minlength="3" pattern="[A-Za-z ]+" required value="<?php echo $result['fname']; ?>">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationDefault05" name="lname"  pattern="[A-Za-z ]+" minlength="3" required value="<?php echo $result['lname']; ?>">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Middle name</label>
              <input type="text" class="form-control" id="validationDefault05" name="mname" minlength="3" pattern="[A-Za-z ]+" required value="<?php echo $result['mname']; ?>">
            </div>
            
                    <div class="col-md-6">
      <label for="validationDefault04" class="form-label">Student Gender</label>
      <select class="form-select" name="gender" id="validationDefault04" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
   
      </select>
    </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Email</label>
              <input type="text" class="form-control" id="validationDefault05" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required value="<?php echo $result['email']; ?>">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Aadhar Number</label>
              <input type="text" class="form-control" id="validationDefault05" name="aadhar" minlength="16" maxlength="16" required value="<?php echo $result['aadhar']; ?>">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Mobile number</label>
              <input type="text" class="form-control" id="validationDefault05" name="mobile"  pattern="[0-9]{10,12}" minlength="10" maxlength="10" required value="<?php echo $result['number']; ?>">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Alternate Mobile Number</label>
              <input type="text" class="form-control" id="validationDefault05" name="amobile"  pattern="[0-9]{10,12}" minlength="10" maxlength="10" required value="<?php echo $result['anumber']; ?>">
            </div>

          

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Date of birth</label>
              <input type="date" class="form-control" id="validationDefault05" name="dob" required value="<?php echo $result['dob']; ?>">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Place of birth</label>
              <input type="text" class="form-control" id="validationDefault05" name="pob" required value="<?php echo $result['pob']; ?>">
            </div>

            <div class="col-md-12">
              <label for="validationDefault05" class="form-label">Address</label>
              <input type="text" class="form-control" id="validationDefault05" name="address" required value="<?php echo $result['address']; ?>">
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">City</label>
              <input type="text" class="form-control" id="validationDefault05" name="city" required value="<?php echo $result['city']; ?>">
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
              <label for="validationDefault05" class="form-label">Pin code</label>
              <input type="text" class="form-control" id="validationDefault05" name="pincode" pattern="[0-9]{5,8}" minlength="6" maxlength="6" required value="<?php echo $result['pincode']; ?>">
            </div>

            <h4>Education Details</h4> <hr>
            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Enrollment Number</label>
              <input type="text" class="form-control" id="validationDefault05" name="enrollment"  pattern="[0-9]{10,12}" minlength="12" maxlength="15" required value="<?php echo $result['enrollment_number']; ?>">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Password</label>
              <input type="text" class="form-control" id="validationDefault05" name="pass" required value="<?php echo $result['password']; ?>">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Course</label>
              <input type="text" class="form-control" readonly id="validationDefault05"  name="course" value="<?php echo $result['courses']; ?>">
            </div>

                <div class="col-md-6">
      <label for="validationDefault04" class="form-label">Branch</label>
      <select class="form-select" id="validationDefault04" name="branch" required>
        <option value="Information Technology">Information Technology</option>
        <option value="Computer">Computer</option>
        <option value="Chemical">Chemical</option>
        <option value="mechinical">Mechinical</option>
        <option value="electronic">electronic</option>
        <option value="civil">civil</option>

      </select>
    </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">College name</label>
              <input type="text" class="form-control" readonly id="validationDefault05" name="college" required value="<?php echo $result['college_name']; ?>">
            </div>

            <div class="col-md-6">
      <label for="validationDefault04" class="form-label">Semester</label>
      <select class="form-select" id="validationDefault04" name="sem" required>
        <option value="1" required>1</option>
        <option value="2" required>2</option>
        <option value="3" required>3</option>
        <option value="4" required>4</option>
        <option value="5" required>5</option>
        <option value="6" required>6</option>
   
      </select>
    </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Term End</label>
              <input type="date" class="form-control"  id="validationDefault05" name="termend" required value="<?php echo $result['term_end']; ?>">
            </div>

            
            <h4>Parents Details</h4> <hr>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Father name</label>
              <input type="text" class="form-control" id="validationDefault05" pattern="[A-Za-z ]+" minlength="3" required value="<?php echo $result['father_name']; ?>" name="fathername">
            </div> 

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationDefault05" pattern="[A-Za-z ]+" minlength="3" required value="<?php echo $result['father_lname']; ?>" name="flname">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Occupation</label>
              <input type="text" class="form-control" id="validationDefault05" required minlength="5" value="<?php echo $result['foccupation']; ?>" name="foccupation">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Mobile Number</label>
              <input type="text" class="form-control" id="validationDefault05" minlength="10" maxlength="10" pattern="[0-9]{10,12}" required value="<?php echo $result['fmobile']; ?>" name="fmobile">
            </div>


            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Mother name</label>
              <input type="text" class="form-control" id="validationDefault05" minlength="3" required pattern="[A-Za-z ]+" value="<?php echo $result['mother_name']; ?>" name="mothername">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationDefault05" minlength="3" required pattern="[A-Za-z ]+" value="<?php echo $result['mother_lname']; ?>" name="mlname">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Occupation</label>
              <input type="text" class="form-control" id="validationDefault05" minlength="5" required value="<?php echo $result['moccupation']; ?>" name="moccupation">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Mobile Number</label>
              <input type="text" class="form-control" id="validationDefault05" pattern="[0-9]{10,12}" minlength="10" maxlength="10" required value="<?php echo $result['mmobile']; ?>" name="mmobile">
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

