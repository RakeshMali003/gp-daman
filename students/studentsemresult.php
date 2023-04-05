<?php
 include('../connection/connection.php');
include('..\students\afterstudentlogin.php');

?>



<div class="main_content">

 
  
<h3 class="">Semister Wise Result Details</h3><hr>

<table id="example">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
  <th scope="col">Enrollment Number</th>
  <th scope="col">Name</th>
        <th scope="col">Subject</th>
         <th scope="col">Sem</th>
            <th scope="col">Mark</th>
             
    

</tr>
</thead>
<tbody>
      <?php
include('../connection/connection.php');

$enrollment = $_SESSION['enrollment'];
$selectquery = "SELECT * FROM result  WHERE enrollment_no = '$enrollment' ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><?php echo $result['enrollment_no']; ?></td>
<td><?php echo $result['name']; ?></td>
<td><?php echo $result['subject']; ?></td>
<td><?php echo $result['sem']; ?></td>
<td><?php echo $result['mark']; ?></td>




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
        <th scope="col">Subject</th>
         <th scope="col">Sem</th>
            <th scope="col">Mark</th>
             
  


</tr>
  </tfoot>
</table>


</div>

<?php

include('studentfooter.php');

?>


