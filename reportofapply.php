<?php
include('gpadmin.php');

session_start();
    require_once "connection.php";
?>

<div class="main_content">
<h3 class="mt-5">Details of student apply for addmission</h3>

<table id="example" class="display" style="width:500px">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Middle name</th>
      <th scope="col">Father name</th>
      <th scope="col">Mother namme</th>
      <th scope="col">Place od Birth</th>
      <th scope="col">Date of birth</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Pin code</th>
      <th scope="col">Contact number</th>
      <th scope="col">Alternative number</th>
      <th scope="col">10 Percentage</th>
  
</tr>
</thead>
<tbody>
      <?php
$server = "localhost";
$username = "root";
$password = "";
$db = "gpdaman";
$con = mysqli_connect($server, $username , $password , $db);




$selectquery = "SELECT * FROM admissionform ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><?php echo $result['fname']; ?></td>
<td><?php echo $result['lname']; ?></td>
<td><?php echo $result['mname']; ?></td>
<td><?php echo $result['fathername']; ?></td>
<td><?php echo $result['mothername']; ?></td>
<td><?php echo $result['pob']; ?></td>
<td><?php echo $result['dob']; ?></td>
<td><?php echo $result['address']; ?></td>
<td><?php echo $result['city']; ?></td>
<td><?php echo $result['state']; ?></td>
<td><?php echo $result['pincode']; ?></td>
<td><?php echo $result['contact']; ?></td>
<td><?php echo $result['acontact']; ?></td>
<td><?php echo $result['persentage']; ?></td>
</tr>

<?php
}

?>

</tbody>
  <tfoot>
  <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Middle name</th>
      <th scope="col">Father name</th>
      <th scope="col">Mother namme</th>
      <th scope="col">Place od Birth</th>
      <th scope="col">Date of birth</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Pin code</th>
      <th scope="col">Contact number</th>
      <th scope="col">Alternative number</th>
      <th scope="col">10 Percentage</th>
</tr>
  </tfoot>
</table>


</div>

