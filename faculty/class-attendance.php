<?php
include('afterloginfacultysidebar.php');
 include('../connection/connection.php');

 if(isset($_POST['submit'])){

  $enrollment = $_POST['enrollmentnumber'];
  $studentname = $_POST['studentname'];
    $smonth = $_POST['smonth'];
    $lmonth = $_POST['lmonth'];
    $subject = $_POST['subject'];
    $sem = $_POST['sem'];
    $totalattendence = $_POST['tattendence'];
    $persentage = $_POST['persentage'];
    $mark = $_POST['mark'];

    $sql = "INSERT INTO `attendence`(`enrollment`, `name`, `subject`, `sem`, `start_month`, `end_month`, `total_attendence`, `persent`, `mark`) 
    VALUES ('$enrollment','$studentname','$subject','$sem','$smonth','$lmonth','$totalattendence','$persentage','$mark')";

$res = mysqli_query($con, $sql);

if($res == true){
 ?>
 <script>
     alert("successfully   Attendance Added");
 </script>
 <?php
}else{
  ?>
  <script>
      alert("sorry unable to Add Attendence");
  </script>
  <?php
}
}

?>


<div class="main_content">



        <div class="modal-body">
          <form class="row g-3 mt-2" method="POST">
         <h3><label for="">Class Attendance</label></h3> <hr>
            <div class="col-md-3">
              <label for="validationDefault05" class="form-label">Enrollment Number</label>
              <input type="number" class="form-control" required id="validationDefault05" name="enrollmentnumber">
            </div>

            <div class="col-md-3">
              <label for="validationDefault05" class="form-label">Student Name</label>
              <input type="text" class="form-control" required id="validationDefault05" minlength="3" name="studentname" pattern="[A-Za-z ]+">
            </div>

            <div class="col-md-3">
              <label for="validationDefault05" class="form-label">Start Month</label>
              <input type="date" class="form-control" required id="validationDefault05" name="smonth" pattern="[A-Za-z ]+">
            </div>

            <div class="col-md-3">
              <label for="validationDefault05" class="form-label">End Month</label>
              <input type="date" class="form-control" required id="validationDefault05" name="lmonth">
            </div>

            <div class="col-md-3">
      <label for="validationDefault04" class="form-label">Subject</label>
      <select class="form-select" id="validationDefault04" required name="subject" required>
        <option value="Maths">Math basic</option>
        <option value="Marth part-2">Math part-2</option>
        <option value="Math Advance">Math advance</option>
        <option value="eniromental">enviromental</option>
        <option value="english">english</option>
        <option value="python">python</option>
        <option value="python advance">python advance</option>
        <option value="asp.net">asp.net</option>
        <option value="ens">ens</option>
        <option value="ict">Ict</option>
        <option value="icn">Icn</option>
        <option value="java">Java</option>
        <option value="java advance">Java advance</option>
        <option value="os">os</option>
        <option value="electronic">electronic</option>
      </select>
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
              <label for="validationDefault05" class="form-label">Total attendence</label>
              <input type="text" class="form-control" required id="validationDefault05" name="tattendence" >
            </div>

            <div class="col-md-3">
              <label for="validationDefault05" class="form-label">Persentage</label>
              <input type="text" class="form-control" required id="validationDefault05" name="persentage" >
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Mark</label>
              <input type="text" class="form-control" required id="validationDefault05" pattern="[0-9]{1,3}" minlength="1" maxlength="2" name="mark">
            </div>

            

            <div class="col-12">
              <input type="submit" class="btn btn-primary" name="submit" value="upload attendance">
            </div>

            




          </form>
   


  
<h3><label for="">Attendance List</label></h3>

<table id="example">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
  <th scope="col">Enrollment Number</th>
  <th scope="col">Name</th>
  <th scope="col">Start month</th>
       <th scope="col">End month</th>
        <th scope="col">Subject</th>
         <th scope="col">Sem</th>
          <th scope="col">Total attendence</th>
           <th scope="col">Percentage</th>
            <th scope="col">Mark</th>
               <th scope="col">Action</th>
    

</tr>
</thead>
<tbody>
      <?php
include('../connection/connection.php');


$selectquery = "SELECT * FROM attendence ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><?php echo $result['enrollment']; ?></td>
<td><?php echo $result['name']; ?></td>
<td><?php echo $result['start_month']; ?></td>
<td><?php echo $result['end_month']; ?></td>
<td><?php echo $result['subject']; ?></td>
<td><?php echo $result['sem']; ?></td>
<td><?php echo $result['total_attendence']; ?></td>
<td><?php echo $result['persent']; ?></td>
<td><?php echo $result['mark']; ?></td>
<td><a   class="btn btn-danger" href="..\faculty\deleteattendance.php?id=<?php echo $result['sr_no']; ?>">delete</a></td>



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
  <th scope="col">Start month</th>
       <th scope="col">End month</th>
        <th scope="col">Subject</th>
         <th scope="col">Sem</th>
          <th scope="col">Total attendence</th>
           <th scope="col">Percentage</th>
            <th scope="col">Mark</th>
               <th scope="col">Action</th>
  


</tr>
  </tfoot>
</table>


</div>





<?php

include('afterloginfacultyfooter.php');

?>




</div>



<?php

include('afterloginfacultyfooter.php');

?>


