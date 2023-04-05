<?php

include('afterloginfacultysidebar.php');
include('../connection/connection.php');

?>



<div class="main_content">

<h4 class="para"> Academic Details</h4> <br> <hr>

<?php
 $email = $_SESSION['email'];

$sql = "SELECT * FROM `add_teacher` WHERE email = '$email'";


$query = mysqli_query($con, $sql);

while($result = mysqli_fetch_assoc($query)){
  ?>

  <table>

  <tr>
   <th>Teacher Access Id: </th>
   <td><?php echo $result['email']; ?> </td>
</tr>

<tr>
   <th> Date of Joining </th>
   <td><?php echo $result['doj']; ?> </td>
</tr>

<tr>
   <th>Higher Education</th>
   <td><?php echo $result['higher_education']; ?> </td>
</tr>

</table>

<h4 class="para"> Personal Details</h4> <br> <hr>

<table>

<tr>
 <th>Name : </th>
 <td><?php echo $result['lname']; ?>  <?php echo $result['fname']; ?> <?php echo $result['mname']; ?> </td>
</tr>

<tr>
<th>Date Of Birth : </th>
<td><?php echo $result['dob']; ?> </td>
</tr>
<tr>
<th>Gender : </th>
<td><?php echo $result['gender']; ?> </td>
</tr>

<tr>
<th>Mobile Number: </th>
<td><?php echo $result['mobile']; ?> </td>
</tr>

<tr>
 <th>Address: </th>
 <td><?php echo $result['address']; ?> </td>
</tr>
<tr>
<th>City : </th>
<td><?php echo $result['city']; ?> </td>
</tr>
<tr>
<th>Pincode : </th>
<td><?php echo $result['pincode']; ?> </td>
</tr>

<tr>
<th>email : </th>
<td><?php echo $result['email']; ?> </td>
</tr>

</table>

  <?php
}
?>



<?php

include('afterloginfacultyfooter.php');

?>


