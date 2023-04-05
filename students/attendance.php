<?php

include('..\students\afterstudentlogin.php');

?>



  <div class="main_content"></div>
<h3 class="">Class Atendence Details</h3><hr>

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
          
    

</tr>
</thead>
<tbody>
      <?php
include('../connection/connection.php');

$enrollment = $_SESSION['enrollment'];

$selectquery = "SELECT * FROM attendence WHERE enrollment = '$enrollment' ";

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
          
  


</tr>
  </tfoot>
</table>



<?php

include('studentfooter.php');

?>
