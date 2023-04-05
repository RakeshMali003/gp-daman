<?php
 include('../connection/connection.php');
include('adminsidenavbar.php');

?>

<div class="main_content">
<?php



//------------------------------------insertion query start---------------------------------
if(isset($_POST['submit']))

{
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





$facultyid = "select * from add_teacher where email='$access_id'";
$query = mysqli_query($con, $facultyid);

$facultyid = mysqli_num_rows($query);

if($facultyid>0){
 
    ?>
    <script>
        alert('Enrollment already exists');
    </script>
    <?php
}else{
$sql = "INSERT INTO `add_teacher`(`fname`, `lname`, `mname`, `teacher_email`, `mobile`, `amobile`, `profile`, `dob`, `gender`, `pob`, `address`, `city`, `state`, `pincode`, `resume`, `higher_education`, `doj`, `email`, `password`) 
VALUES ('$fname','$lname','$mname','$temail','$Mobile','$Amobile','$Profile','$dob','$gender','$pob','$address','$city','$state','$pincode','$resume','$higher_education','$jdate','$access_id','$password')";


$query = mysqli_query($con,$sql);
 
if($query == true){
 ?>
 <script>
     alert("successfully   Teacher Added");
 </script>
 <?php
}else{
  ?>
  <script>
      alert("sorry unable to Add Teacher");
  </script>
  <?php
}
}
}

  
?>


  <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Teacher
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="width:900px">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Teacher</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3 mt-2" method="POST">
           <h4>Personal Details</h4><hr>
            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">First name</label>
              <input type="text" class="form-control" id="validationDefault05" name="fname" placeholder="jon" minlength="3" pattern="[A-Za-z ]+" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationDefault05" name="lname" placeholder="patel" minlength="3" pattern="[A-Za-z ]+" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Middle name</label>
              <input type="text" class="form-control" id="validationDefault05" name="mname" placeholder="ram" minlength="3" pattern="[A-Za-z ]+" required>
            </div>
            
            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Teacher Email</label>
              <input type="text" class="form-control" id="validationDefault05" name="temail" placeholder="ramji@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            </div>

      

            <div class="input-group col-md-4">
    <span class="input-group-text  mt-2" id="validationTooltipUsernamePrepend">+91</span>
     <input type="text" id="mobile" pattern="[0-9]{10,12}" minlength="10" maxlength="10" placeholder="contact" name="Mobile" class="form-control mt-2 p-1"  class="form-control" id="validationDefault02"  required>
</div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Alternate Mobile Number</label>
              <input type="text" class="form-control" id="validationDefault05" name="Amobile" placeholder="enter 10 digit" pattern="[0-9]{10,12}" minlength="10" maxlength="12" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Profile</label>
              <input type="File" class="form-control" id="validationDefault05" name="Profile" >
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Date of Birth</label>
              <input type="Date" class="form-control" id="validationDefault05" name="dob" required>
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
              <input type="text" class="form-control" id="validationDefault05" name="pob" required>
            </div>

            <div class="col-md-8">
              <label for="validationDefault05" class="form-label">Address</label>
              <input type="text" class="form-control" id="validationDefault05" name="address" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">City</label>
              <input type="text" class="form-control" id="validationDefault05" name="city" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">State</label>
              <input type="text" class="form-control" id="validationDefault05" name="state" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Pin code</label>
              <input type="text" class="form-control" id="validationDefault05" name="pincode" pattern="[0-9]{5,8}" minlength="10" maxlength="12" required>
            </div>

            <h4>Education Details</h4> <hr>
            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Resume</label>
              <input type="file" class="form-control" id="validationDefault05" name="resume">
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Higher education</label>
              <input type="text" class="form-control" id="validationDefault05" name="higher_education" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Date of Joining</label>
              <input type="date" class="form-control" id="validationDefault05" name="jdate" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">  Provide access ID</label>
              <input type="text" class="form-control" id="validationDefault05" name="access_id" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Password</label>
              <input type="password" class="form-control" id="validationDefault05" name="password" required>
            </div>

            <div class="col-12">
              <input type="submit" class="btn btn-primary" name="submit" value="Add Teacher">
            </div>

            




          </form>
        </div>
      </div>
    </div>
  </div>


  
  <h3 class="mt-3 mb-3">Teachers Details</h3>

  <table id="example">
    <thead>
      <tr>
    <th scope="col">Teacher id</th>
        <th scope="col">Teacher Name</th>
        <th scope="col">Last name</th>
        <th scope="col">Teacher Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Gender</th>
        <th scope="col">Address</th>
        <th scope="col">Higher education</th>
        <th scope="col">Date of Joining</th>
            <th scope="col">Action</th>
  

</tr>
</thead>
<tbody>
        <?php



$selectquery = "SELECT * FROM add_teacher ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
  ?>
  <tr>
  <td><?php echo $result['sr_no']; ?></td>
  <td><?php echo $result['fname']; ?></td>
  <td><?php echo $result['lname']; ?></td>
  <td><?php echo $result['teacher_email']; ?></td>
  <td><?php echo $result['mobile']; ?></td>
  <td><?php echo $result['dob']; ?></td>
  <td><?php echo $result['gender']; ?></td>
  <td><?php echo $result['address']; ?></td>
  <td><?php echo $result['higher_education']; ?></td>
  <td><?php echo $result['doj']; ?></td>
  <td><a class="btn btn-primary"  href="..\admin\teacherupdate.php?id=<?php echo $result['sr_no'];?>">update</a></td>
<td><a   class="btn btn-danger" href="..\admin\deleteteacher.php?id=<?php echo $result['sr_no']; ?>">delete</a></td>
</tr>

<?php
}
  


?>

</tbody>
    <tfoot>
    <tr>
    <th scope="col">Teacher id</th>
        <th scope="col">Teacher Name</th>
        <th scope="col">Last name</th>
        <th scope="col">Teacher Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Gender</th>
        <th scope="col">Address</th>
        <th scope="col">Higher education</th>
        <th scope="col">Date of Joining</th>
            <th scope="col">Action</th>
  
</tr>
    </tfoot>
  </table>


</div>



<?php

include('adminfooter.php');

?>
