<?php
include('afterloginfacultysidebar.php');
 include('../connection/connection.php');

 ?>




<div class="main_content">
<h3> <label for="">Upload Assignment</label> </h3><hr>
<form class="row g-3 mt-2" method="POST" enctype="multipart/form-data">

<div class="col-6">
<label for="validationDefault05" class="form-label">  Uploade File</label>
            <input type="file" name="file" class="form-control form-group" required>
</div>
            <div class="col-3">
              <label for="validationDefault05" class="form-label">  Uploaded Date</label>
              <input type="date" class="form-control form-group" id="validationDefault05" name="date" required>
            </div>

            <div class="col-3">
              <label for="validationDefault05" class="form-label">Submission Date</label>
              <input type="date" class="form-control form-group"  id="validationDefault05" name="sdate" required>
            </div>

            
            <div class="col-4">
              <label for="validationDefault05" class="form-label">Faculty</label>
              <input type="text" class="form-control form-group"  id="validationDefault05" name="faculty" minlength="3" pattern="[A-Za-z ]+" required>
            </div>

            <div class="col-md-4">
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
            
    <div class="col-md-4">
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
       
            <div class="col-12 m-3">
              <input type="submit" class="btn btn-primary" name="submit" value="Upload Assignment">
            </div>
</div>
          </form>

<?php

if(isset($_POST["submit"])){


    $pname = rand(1000,10000). "-". $_FILES["file"]["name"];

    $tname= $_FILES["file"]["tmp_name"];

    $uploads_dir = '../admin/time table/images';

    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    
$date = $_POST['date'];
$sdate = $_POST['sdate'];
$faculty = $_POST['faculty'];
$sem = $_POST['sem'];
$subject = $_POST['subject'];

    $sql = "INSERT INTO `assignment`(`image`, `date`, `sdate`,`subject`,`faculty`,`sem`)
     VALUES ('$pname','$date','$sdate','$subject','$faculty','$sem')";

$res = mysqli_query($con,$sql);
if($res == true){
  ?>
  <script>
      alert("successfully   Assignment Uploaded");
  </script>
  <?php
 }else{
   ?>
   <script>
       alert("sorry unable to Upload assignment");
   </script>
   <?php
 }
 }
 
?>

<h3><label for="">Assignment List</label></h3>
<table id="example">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
     <th scope="col">Uploaded Date</th>
        <th scope="col">Submission Date</th>
      <th scope="col">Sem</th>
        <th scope="col">Faculty</th>
        <th scope="col">Subject</th>
      <th scope="col">File</th>
      <th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php
include('../connection/connection.php');


$selectquery = "SELECT * FROM `assignment` ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><?php echo $result['date']; ?></td>
<td><?php echo $result['sdate']; ?></td>
<td><?php echo $result['sem']; ?></td>
<td><?php echo $result['faculty']; ?></td>
<td><?php echo $result['subject']; ?></td>
<td><a target="_blank" href="..\admin\time table\images\<?php echo $result['image'] ?>"> <?php echo $result['image'] ?></a></td>
<td><a   class="btn btn-danger" href="..\faculty\deleteassignment.php?id=<?php echo $result['sr_no']; ?>">delete</a></td>
</tr>

<?php
}

?>


</tbody>
  <tfoot>
  <tr>
  <th scope="col">Sr no.</th>
     <th scope="col">Uploaded Date</th>
        <th scope="col">Submission Date</th>
      <th scope="col">Sem</th>
        <th scope="col">Faculty</th>
        <th scope="col">Subject</th>
      <th scope="col">File</th>
      <th scope="col">Action</th>


</tr>
  </tfoot>
</table>





<?php

include('afterloginfacultyfooter.php');

?>


