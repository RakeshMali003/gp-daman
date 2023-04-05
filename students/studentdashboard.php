<?php
 include('../connection/connection.php');
include('..\students\afterstudentlogin.php');

?>


<div class="main_content">

<h4 class="para"> Academic Details</h4> <br> <hr>


<?php
 $enrollment = $_SESSION['enrollment'];

$sql = "SELECT * FROM `add_student` WHERE enrollment_number = '$enrollment'";


$query = mysqli_query($con, $sql);

while($result = mysqli_fetch_assoc($query)){
  ?>
  <table>

  <tr>
   <th>Enrollment: </th>
   <td><?php echo $result['enrollment_number']; ?> </td>
</tr>

  <tr>
   <th>Course: </th>
   <td><?php echo $result['courses']; ?> </td>
</tr>
<tr>
<th>Branch: </th>
  <td><?php echo $result['branch']; ?> </td>
</tr>
<tr>
<th>College Name: </th>
  <td><?php echo $result['college_name']; ?> </td>
</tr>

<th>Sem </th>
  <td><?php echo $result['sem']; ?> </td>
</tr>

<tr>
<th>Term End: </th>
  <td><?php echo $result['term_end']; ?> </td>
</tr>
</table>

<h4 class="para"> Personal Details</h4> <br> <hr>

<table>

<tr>
 <th>Name : </th>
 <td><?php echo $result['lname']; ?>  <?php echo $result['fname']; ?> <?php echo $result['mname']; ?> </td>
</tr>

<tr>
 <th>Aadhar No : </th>
 <td><?php echo $result['aadhar']; ?> </td>
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
<td><?php echo $result['number']; ?> </td>
</tr>
<tr>
 <th>Parent Mobile Number : </th>
 <td><?php echo $result['fmobile']; ?> </td>
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

<table>
<h4 class="para"> Parent Details</h4> <br> <hr>
<tr>
<th>Father name : </th>
<td><?php echo $result['father_lname']; ?> <?php echo $result['father_name']; ?> </td>
</tr>
<tr>
 <th>Occupation : </th>
 <td><?php echo $result['foccupation']; ?> </td>
</tr>

<tr>
 <th>contact no : </th>
 <td><?php echo $result['fmobile']; ?> </td>
</tr>
<tr>
<th>Mother name : </th>
<td><?php echo $result['mother_lname']; ?> <?php echo $result['mother_name']; ?> </td>
</tr>
<tr>
<th>Occupation : </th>
<td><?php echo $result['moccupation']; ?> </td>
</tr>

<tr>
<th>contact : </th>
<td><?php echo $result['mmobile']; ?> </td>
</tr>
</table>
  <?php
}
?>
<?php

include('studentfooter.php');

?>

