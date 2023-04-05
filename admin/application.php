<?php

include('../connection/connection.php');
include('adminsidenavbar.php');

?>

<div class="main_content">


  
  <h3 class="mt-3 mb-3">Application of Student</h3>

  <table id="example">
    <thead>
      <tr>
    <th scope="col">Sr no.</th>
        <th scope="col">First Name</th>
        <th scope="col">Last name</th>
        <th scope="col">Place Of birth</th>
        <th scope="col">City</th>
        <th scope="col">State</th>
        <th scope="col">Contact</th>
        <th scope="col">Email</th>
        <th scope="col">Persentage of 10th</th>
          <th scope="col">Action</th>
  

</tr>
</thead>
<tbody>
        <?php




$selectquery = "SELECT * FROM admissionform ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
  ?>
  <tr>
  <td><?php echo $result['sr_no']; ?></td>
  <td><?php echo $result['fname']; ?></td>
  <td><?php echo $result['lname']; ?></td>
  <td><?php echo $result['pob']; ?></td>
  <td><?php echo $result['city']; ?></td>
  <td><?php echo $result['state']; ?></td>
  <td><?php echo $result['contact']; ?></td>
  <td><?php echo $result['email']; ?></td>
  <td><?php echo $result['percentage']; ?></td>
  <td><a   class="btn btn-danger" href="..\admin\deleteapplication.php?id=<?php echo $result['sr_no']; ?>">delete</a></td>
</tr>

<?php
}

?>

</tbody>
    <tfoot>
    <tr>
    <th scope="col">Sr no.</th>
        <th scope="col">First Name</th>
        <th scope="col">Last name</th>
        <th scope="col">Place Of birth</th>
        <th scope="col">City</th>
        <th scope="col">State</th>
        <th scope="col">Contact</th>
        <th scope="col">Email</th>
        <th scope="col">Persentage of 10th</th>
          <th scope="col">Action</th>
</tr>
    </tfoot>
  </table>


</div>

*/




include('adminfooter.php');

?>
