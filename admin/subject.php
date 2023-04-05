<?php
 include('../connection/connection.php');
include('adminsidenavbar.php');

if(isset($_POST['addsubject'])){



  $subcode = $_POST['subcode'];
  $subname = $_POST['subname'];
  $sem = $_POST['sem'];
  $teachinghour = $_POST['teachinghour'];
  $ateacher = $_POST['ateacher'];

$subject = "SELECT * FROM `sms` WHERE subject_code='subcode'";
$query = mysqli_query($con,$subject);

$subject = mysqli_num_rows($query);

if($subject>0){
 
  ?>
  <script>
      alert('This subject code is Already exists');
  </script>
  <?php
}else{

$sql = "INSERT INTO `sms` (`subject_code`, `subject_name`, `semester`, `teaching_hour`, `assign_teacher`)
 VALUES ('$subcode','$subname','$sem','$teachinghour','$ateacher')";

$res = mysqli_query($con, $sql);
 
 if($res == true){
  ?>
  <script>
      alert("successfully   Subject Added");
  </script>
  <?php
}else{
   ?>
   <script>
       alert("sorry unable to Add Subject");
   </script>
   <?php
}
}
}


?>
<div class="main_content">
<h3 class="mt-5">Subject Mangement System</h3>

<div class="container mt-5">
    <div class="card">
<form class="row g-3 m-3" method="POST">
    <div class="col-md-6">
    <label for="validationDefault01" class="form-label">Subject Code</label>
    <input type="number" class="form-control" id="validationDefault01" name="subcode" required>
  </div>
  
  <div class="col-md-6">
    <label for="validationDefault02" class="form-label">Subject name</label>
    <input type="text" class="form-control" id="validationDefault02" name="subname" required>
  </div>

  
  <div class="col-md-3">
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
  
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Teaching Hour</label>
    <input type="text" class="form-control" id="validationDefault05" name="teachinghour" required>
  </div>
  
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Assign Teacher</label>
    <input type="text" class="form-control" id="validationDefault05" name="ateacher" pattern="[A-Za-z ]+" required>
  </div>
  
  
  <div class="col-12"> 
    <button class="btn btn-primary" name="addsubject" type="submit">Add Subject</button>
  </div>
</form>
</div>
</div>





<h3 class="mt-3 mb-3">Subjective Details</h3>

<table id="example">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">Subject Code</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Semester</th>
      <th scope="col">Teaching Hours</th>
      <th scope="col">Assign Teacher</th>
      <th scope="col">Action</th>

</tr>
</thead>
<tbody>
      <?php



$selectquery = "SELECT * FROM `sms`";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><?php echo $result['subject_code']; ?></td>
<td><?php echo $result['subject_name']; ?></td>
<td><?php echo $result['semester']; ?></td>
<td><?php echo $result['teaching_hour']; ?></td>
<td><?php echo $result['assign_teacher']; ?></td>
<td><a   class="btn btn-danger" href="..\admin\deletesubject.php?id=<?php echo $result['sr_no']; ?>">delete</a></td>
</tr>

<?php
}

?>

</tbody>
  <tfoot>

  <th scope="col">Sr no.</th>
      <th scope="col">Subject Code</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Semester</th>
      <th scope="col">Teaching Hours</th>
      <th scope="col">Assign Teacher</th>
      <th scope="col">Action</th>
</tr>
  </tfoot>
</table>


</div>


<?php


include('adminfooter.php');

?>
