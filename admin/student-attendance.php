<?php

include('adminsidenavbar.php');

?>

<div class="main_content">

<h3 class="mt-3 mb-3">Class Atendence Details</h3>

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
<td><a   class="btn btn-danger" href="..\admin\deleteattendance.php?id=<?php echo $result['sr_no']; ?>">delete</a></td>



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

</div>


<?php

include('adminfooter.php');

?>
