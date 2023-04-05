<?php
 include('../connection/connection.php');
include('..\students\afterstudentlogin.php');


 ?>




<div class="main_content">
<h3><label for="">Syllabus</label></h3><hr>
    
<table id="example">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">file</th>
      <th scope="col">Subject</th>
      <th scope="col">Sem</th>

</tr>
</thead>
<tbody>
<?php
include('../connection/connection.php');


$selectquery = "SELECT * FROM `syllabus` ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><a target="_blank" href="..\admin\time table\images\<?php echo $result['image'] ?>"> <?php echo $result['image'] ?></a></td>
<td><?php echo $result['subject']; ?></td>
<td><?php echo $result['sem']; ?></td>

</tr>

<?php
}

?>


</tbody>
  <tfoot>
  <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">File</th>
      <th scope="col">Subject</th>
      <th scope="col">Sem</th>



</tr>
  </tfoot>
</table>
</div>



<?php

include('studentfooter.php');

?>


