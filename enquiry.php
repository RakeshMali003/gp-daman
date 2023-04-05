<?php
include('gpadmin.php');

include('connection/connection.php');
 
?>
<div class="main_content">





  
<h3 class="mt-5">enquire Details</h3>

<table id="example" class="display nowrap" style="width:100%">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">Name </th>
        <th scope="col">email</th>
        <th scope="col">Contact Number</th>
      <th scope="col">enquire</th>

</tr>
</thead>
<tbody>
      <?php



$selectquery = "SELECT * FROM enquiry ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><?php echo $result['name']; ?></td>
<td><?php echo $result['email']; ?></td>
<td><?php echo $result['number']; ?></td>
<td><?php echo $result['enquiry']; ?></td>
</tr>

<?php
}

?>

</tbody>
  <tfoot>
  <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">Name </th>
        <th scope="col">email</th>
        <th scope="col">Contact Number</th>
      <th scope="col">enquire</th>
</tr>
  </tfoot>
</table>

