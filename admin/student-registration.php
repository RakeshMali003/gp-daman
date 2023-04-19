<?php

include('adminsidenavbar.php');
include('../connection/connection.php');

?>

<div class="main_content">
<?php


//------------------------------------insertion query start---------------------------------
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
  $termend = $_POST['termend'];
  $fathername = $_POST['fathername'];
  $flname = $_POST['flname'];
  $foccupation = $_POST['foccupation'];
  $fmobile = $_POST['fmobile'];
  $mothername = $_POST['mothername'];
  $mlname = $_POST['mlname'];
  $moccupation = $_POST['moccupation'];
  $mmobile = $_POST['mmobile'];
$sem = $_POST['sem'];
  $enrollmentquery = "select * from add_student where enrollment_number='$enrollment'";
$query = mysqli_query($con, $enrollmentquery);

$enrollmentquery = mysqli_num_rows($query);

if($enrollmentquery>0){
 
    ?>
    <script>
        alert('Enrollment already exists');
    </script>
    <?php
}else{
$insertquery = "INSERT INTO `add_student`( `fname`, `lname`, `mname`, `gender`, `email`, `aadhar`, `number`, `anumber`, `dob`, `pob`, `address`, `city`, `state`, `pincode`, `enrollment_number`, `password`, `courses`, `branch`, `college_name`, `term_end`, `father_name`, `father_lname`, `foccupation`, `fmobile`, `mother_name`, `mother_lname`, `mmobile`, `moccupation`,`sem`)
VALUES ('$fname','$lname','$mname','$gender','$email','$aadhar','$mobile','$amobile','$dob','$pob','$address','$city','$state','$pincode','$enrollment',
     '$pass','$course','$branch','$college','$termend','$fathername','$flname','$foccupation','$fmobile','$mothername','$mlname','$mmobile','$moccupation','$sem')";


  $res =  mysqli_query($con, $insertquery);

  if($res == true){
    ?>
    <script>
        alert("successfully   Student Added");
    </script>
    <?php
  }else{
     ?>
     <script>
         alert("sorry unable to Add Student");
     </script>
     <?php
  }
}
}

?>


  <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add student
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="width:500px">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3 mt-2" method="POST">
           <h4>Personal Details</h4><hr>
            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">First name</label>
              <input type="text" class="form-control" id="validationDefault05" pattern="[A-Za-z ]+" minlength="3" placeholder="raj" name="fname" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationDefault05" name="lname" minlength="3" placeholder="patel" pattern="[A-Za-z ]+" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Middle name</label>
              <input type="text" class="form-control" id="validationDefault05" name="mname" placeholder="jon" minlength="3" pattern="[A-Za-z ]+" required>
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
              <input type="text" class="form-control" id="validationDefault05" name="email" placeholder="raj@gmail.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required >
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Aadhar Number</label>
              <input type="text" class="form-control" id="validationDefault05" name="aadhar" placeholder="2535468592" pattern="[0-9]{10,12}" minlength="16" maxlength="16" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Mobile number</label>
              <input type="text" class="form-control" id="validationDefault05" name="mobile" placeholder="enter 10 digit" pattern="[0-9]{10,12}" minlength="10" maxlength="10" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Alternate Mobile Number</label>
              <input type="text" class="form-control" id="validationDefault05" name="amobile" placeholder="enter 10 digit" pattern="[0-9]{10,12}" minlength="10" maxlength="10" required>
            </div>

          

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Date of birth</label>
              <input type="date" class="form-control" id="validationDefault05" name="dob" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Place of birth</label>
              <input type="text" class="form-control" id="validationDefault05" name="pob" placeholder="mumbai" required>
            </div>

            <div class="col-md-12">
              <label for="validationDefault05" class="form-label">Address</label>
              <input type="text" class="form-control" id="validationDefault05" name="address" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">City</label>
              <input type="text" class="form-control" id="validationDefault05" name="city" required>
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
              <input type="text" class="form-control" id="validationDefault05" name="pincode" plcaeholder="934874" pattern="[0-9]{10,12}" maxlength="6"  required>
            </div>

            <h4>Education Details</h4> <hr>
            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Enrollment Number</label>
              <input type="text" class="form-control" id="validationDefault05" name="enrollment" placeholder="202089479832002" required pattern="[0-9]{10,12}" minlength="12" maxlength="15">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Password</label>
              <input type="text" class="form-control" id="validationDefault05" name="pass" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Course</label>
              <input type="text" class="form-control" id="validationDefault05" name="course"  Value="Diploma" readonly required>
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
              <input type="text" class="form-control" id="validationDefault05" name="college" placeholder="xyz college" required>
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
              <input type="date" class="form-control" id="validationDefault05" name="termend" required>
            </div>

            
            <h4>Parents Details</h4> <hr>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Father name</label>
              <input type="text" class="form-control" id="validationDefault05" name="fathername" placeholder="raj" min="3" pattern="[A-Za-z ]+" required>
            </div> 

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationDefault05" name="flname" min="3" placeholder="patel" pattern="[A-Za-z ]+" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Occupation</label>
              <input type="text" class="form-control" id="validationDefault05" name="foccupation" min="3" placeholder="worker" required pattern="[A-Za-z ]+">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Mobile Number</label>
              <input type="text" class="form-control" id="validationDefault05" name="fmobile" placeholder="enter 10 digit" pattern="[0-9]{10,12}" minlength="10" maxlength="12" required>
            </div>


            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Mother name</label>
              <input type="text" class="form-control" id="validationDefault05" name="mothername" min="3" placeholder="gita" required pattern="[A-Za-z ]+">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationDefault05" name="mlname" min="3" placeholder="patel" pattern="[A-Za-z ]+" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Occupation</label>
              <input type="text" class="form-control" id="validationDefault05" name="moccupation" min="5" placeholder="worker" required pattern="[A-Za-z ]+">
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Mobile Number</label>
              <input type="text" class="form-control" id="validationDefault05" name="mmobile" placeholder="enter 10 digit" pattern="[0-9]{10,12}" minlength="10" maxlength="12" required>
            </div>

            <div class="col-12">
              <input type="submit" class="btn btn-primary" name="submit" value="Add Student">
            </div>




          </form>
        </div>
      </div>
    </div>
  </div>


  
  <h3 class="mt-3 mb-3">Student Details</h3>

  <table id="example">
    <thead>
      <tr>
    <th scope="col">Sr no.</th>
        <th scope="col">Enrollment Number</th>
        <th scope="col">Name</th>
          <th scope="col">Sem</th>
        <th scope="col">Gender</th>
        <th scope="col">Mobile Number</th>
        <th scope="col">Address</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
</tr>
</thead>
<tbody>
        <?php
include('../connection/connection.php');


$selectquery = "SELECT * FROM add_student ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
  ?>
  <tr>
  <td><?php echo $result['sr_no']; ?></td>
  <td><?php echo $result['enrollment_number']; ?></td>
  <td><?php echo $result['fname']; ?></td>
  <td><?php echo $result['sem']; ?></td>
  <td><?php echo $result['gender']; ?></td>
  <td><?php echo $result['number']; ?></td>
  <td><?php echo $result['address']; ?></td>
  <td><?php echo $result['dob']; ?></td>
  <td><?php echo $result['email']; ?></td>
  <td><a class="btn btn-primary"  href="..\admin\studentupdate.php?id=<?php echo $result['sr_no'];?>">update</a></td>
<td><a   class="btn btn-danger" href="..\admin\deletestudent.php?id=<?php echo $result['sr_no']; ?>">delete</a></td>

</tr>

<?php
}
?>

</tbody>
    <tfoot>
    <tr>
    <th scope="col">Sr no.</th>
        <th scope="col">Enrollment Number</th>
        <th scope="col">Name</th>
          <th scope="col">Sem</th>
        <th scope="col">Gender</th>
        <th scope="col">Mobile Number</th>
        <th scope="col">Address</th>
        <th scope="col">Date of birth</th>
        <th scope="col">Email </th>
        <th scope="col">Action</th>
  
</tr>
    </tfoot>
  </table>


</div>



<?php

include('adminfooter.php');

?>
