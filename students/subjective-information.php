<?php

include('..\students\afterstudentlogin.php');
include('../connection/connection.php');
?>

<div class="main_content">
<h3 class="">Subjective Details</h3><hr>

<table id="example">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">Subject Code</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Semester</th>
      <th scope="col">Teaching Hours</th>
      <th scope="col">Faculty name</th>


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
      <th scope="col">Faculty name</th>

</tr>
  </tfoot>
</table>


</div>

</div>

</div>


<?php

include('studentfooter.php');

?>
