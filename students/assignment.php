<?php

include('..\students\afterstudentlogin.php');

?>

<div class="main_content">
<h3><label for="">Assignment</label></h3><hr>
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



</tr>
  </tfoot>
</table>

</div>
</div>





<?php

include('studentfooter.php');

?>
