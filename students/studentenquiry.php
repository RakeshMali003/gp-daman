<?php
 include('../connection/connection.php');
include('../students/afterstudentlogin.php');

$enrollment = $_SESSION['enrollment'];

$sql = "SELECT * FROM `add_student` WHERE enrollment_number = '$enrollment'";


$query = mysqli_query($con, $sql);

$result = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){

  $enrollment = $_POST['enrollment'];
  $name = $_POST['name'];
  $faculty = $_POST['faculty'];
  $date = $_POST['date'];
  $sem = $_POST['sem'];
  $title = $_POST['title'];
  $subject = $_POST['subject'];


  $insertquery = "INSERT INTO `studentenquiry`(`enrollment`, `name`, `faculty`, `title`, `description`, `date`, `sem`)
   VALUES ('$enrollment','$name','$faculty','$title','$subject','$date','$sem')";

  $res =  mysqli_query($con, $insertquery);

 
  if($res == true){
    ?>
    <script>
        alert("successfully Enquiry Shared");
    </script>
    <?php
  }else{
     ?>
     <script>
         alery("sorry unable to Share Enquiry");
     </script>
     <?php
  }
}

  
?>
<div class="main_content">
<h3 class="m-5">Send Query</h3><hr>
<form class="row g-3" method="POST">

<div class="col-md-3">
<label for="validationDefault05" class="form-label">Enrollment no.</label>
        <input type="text" name="enrollment" readonly class="form-control mx-5" value="<?php echo $result['enrollment_number']; ?> ">
</div>

<div class="col-md-3">
<label for="validationDefault05" class="form-label">Name of student</label>
        <input type="text" name="name" class="form-control mx-5" readonly value="<?php echo $result['fname']; ?>">
</div>
<div class="col-md-3">
<label for="validationDefault05" class="form-label">Name of Faculty</label>
        <input type="text" name="faculty" class="form-control mx-5" pattern="[A-Za-z ]+" required>
</div>

<div class="col-md-2">
<label for="validationDefault05" class="form-label">Date</label>
        <input type="date" name="date" class="form-control mx-5" required>
</div>

<div class="col-md-2">
      <label for="validationDefault04" class="form-label">Semester</label>
      <select class="form-select mx-5" id="validationDefault04" name="sem" required>
        <option value="1" required>1</option>
        <option value="2" required>2</option>
        <option value="3" required>3</option>
        <option value="4" required>4</option>
        <option value="5" required>5</option>
        <option value="6" required>6</option>
   
      </select>
    </div>

<div class="col-md-5">

      <label for="validationDefault04" class="form-label">Subject</label>
      <select class="form-select mx-5" id="validationDefault04" required name="subject" required>
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
</div>






    <div class="col-12">
      <input type="submit" class="btn btn-primary m-5" name="submit">
      </div>
</form>
</div> 

  
<h3 class="mt-5">List of inquery</h3>

<table id="example" class="display nowrap" style="width:100%">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">Enrollment no</th>
        <th scope="col">Name</th>
      <th scope="col">Faculty</th>
        <th scope="col">Date</th>
      <th scope="col">Semister</th>
        <th scope="col">Title</th>
      <th scope="col">Subject</th>

</tr>
</thead>
<tbody>
      <?php


$selectquery = "SELECT * FROM studentenquiry ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><?php echo $result['enrollment']; ?></td>
<td><?php echo $result['name']; ?></td>
<td><?php echo $result['faculty']; ?></td>
<td><?php echo $result['date']; ?></td>
<td><?php echo $result['sem']; ?></td>
<td><?php echo $result['title']; ?></td>
<td><?php echo $result['description']; ?></td>
</tr>

<?php
}

?>

</tbody>
  <tfoot>
  <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">Enrollment no</th>
        <th scope="col">Name</th>
      <th scope="col">Faculty</th>
        <th scope="col">Date</th>
      <th scope="col">Semister</th>
        <th scope="col">Title</th>
      <th scope="col">Subject</th>
</tr>
  </tfoot>
</table>

