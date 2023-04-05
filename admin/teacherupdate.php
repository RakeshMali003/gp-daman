<?php
 include('../connection/connection.php');
 include('adminsidenavbar.php');


$id = $_GET['id'];

$sql = "SELECT * FROM `add_teacher`  WHERE sr_no = $id";


$query = mysqli_query($con, $sql);

$result = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $temail = $_POST['temail'];
    $Mobile = $_POST['Mobile'];
    $Amobile = $_POST['Amobile'];
    $Profile = $_POST['Profile'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $pob = $_POST['pob'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $resume = $_POST['resume'];
    $higher_education = $_POST['higher_education'];
    $jdate = $_POST['jdate'];
    $access_id = $_POST['access_id'];
    $password = $_POST['password'];

   
    $updatequery =  " UPDATE `add_teacher` SET `fname`='$fname',`lname`='$lname',`mname`='$mname',
    `teacher_email`='$temail',`mobile`='$Mobile',`amobile`='$Amobile',`profile`='$Profile',`dob`='$dob',`gender`='$gender',`pob`='$pob',`address`='$address',`city`='$city',`state`='$state',`pincode`='$pincode',
    `resume`='$resume',`higher_education`='$higher_education',`doj`='$jdate',`email`='$access_id',`password`='$password' WHERE sr_no = $id";
$res = mysqli_query($con ,$updatequery);


if($res){
    ?>
    <script>
        alert("successfully   teacher profile update");
    </script>
    <?php
  }else{
     ?>
     <script>
         alert("sorry unable to update teacher profile");
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
          <a href="..\admin\teacher.php" class="btn btn-primary">Back</a>
        </div>
        <div class="modal-body">

        
        <form class="row g-3 mt-2" method="POST">
           <h4>Personal Details</h4><hr>
            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">First name</label>
              <input type="text" class="form-control" id="validationDefault05" minlength="3" value="<?php echo $result['fname']; ?>" name="fname" pattern="[A-Za-z ]+" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationDefault05" minlength="3" value="<?php echo $result['lname']; ?>" name="lname" pattern="[A-Za-z ]+" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Middle name</label>
              <input type="text" class="form-control" id="validationDefault05" minlength="3" value="<?php echo $result['mname']; ?>" name="mname" pattern="[A-Za-z ]+" required>
            </div>
            
            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Teacher Email</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['teacher_email']; ?>" name="temail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Mobile No.</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['mobile']; ?>" name="Mobile" pattern="[0-9]{10,12}" minlength="10" maxlength="12" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Alternate Mobile Number</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['amobile']; ?>" name="Amobile" pattern="[0-9]{10,12}" minlength="10" maxlength="12" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Profile</label>
              <input type="File" class="form-control" id="validationDefault05" value="<?php echo $result['profile']; ?>" name="Profile">
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Date of Birth</label>
              <input type="Date" class="form-control" id="validationDefault05" value="<?php echo $result['dob']; ?>" name="dob" required>
            </div>

          

          

                       <div class="col-md-4">
      <label for="validationDefault04" class="form-label">Gender</label>
      <select class="form-select" id="validationDefault04" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
    </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Place of birth</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['pob']; ?>" name="pob" required>
            </div>

            <div class="col-md-8">
              <label for="validationDefault05" class="form-label">Address</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['address']; ?>" name="address" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">City</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['city']; ?>" name="city" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">State</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['state']; ?>" name="state" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Pin code</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['pincode']; ?>" name="pincode" attern="[0-9]{5,8}" minlength="10" maxlength="12" required>
            </div>

            <h4>Education Details</h4> <hr>
            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Resume</label>
              <input type="file" class="form-control" id="validationDefault05" value="<?php echo $result['resume']; ?>" name="resume">
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Higher education</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['higher_education']; ?>" name="higher_education" reqired>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Date of Joining</label>
              <input type="date" class="form-control" id="validationDefault05" value="<?php echo $result['doj']; ?>" name="jdate" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">  Provide access ID</label>
              <input type="text" class="form-control" id="validationDefault05" value="<?php echo $result['email']; ?>" name="access_id" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Password</label>
              <input type="password" class="form-control" id="validationDefault05" value="<?php echo $result['password']; ?>" name="password" required>
            </div>

            <div class="col-12">
              <input type="submit" class="btn btn-primary" name="submit" value="Update Profile">
            </div>

            




          </form>
        </div>
      </div>
    </div>
  </div>



</div>

