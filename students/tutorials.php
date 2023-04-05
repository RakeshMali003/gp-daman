<?php

include('..\students\afterstudentlogin.php');

?>

<div class="main_content">
<h3><label for="">Tutorials</label></h3><hr>
<table id="example">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
     <th scope="col">Uploaded Date</th>
      <th scope="col">Tutorial</th>
           <th scope="col">Subject</th>
                <th scope="col">Semester</th>
                <th scope="col">Faculty</th>
      <th scope="col">Description</th>

</tr>
</thead>
<tbody>
<?php
include('../connection/connection.php');


$selectquery = "SELECT * FROM `tutorial` ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><?php echo $result['date']; ?></td>
<td><a target="_blank" href="..\admin\time table\images\<?php echo $result['file'] ?>"> <?php echo $result['file'] ?></a></td>
<td><?php echo $result['subject']; ?></td>
<td><?php echo $result['sem']; ?></td>
<td><?php echo $result['faculty']; ?></td>
<td><?php echo $result['description']; ?></td>

</tr>

<?php
}

?>


</tbody>
  <tfoot>
  <tr>
  <th scope="col">Sr no.</th>
     <th scope="col">Uploaded Date</th>
      <th scope="col">Tutorial</th>
            <th scope="col">Subject</th>
                  <th scope="col">Semester</th>

                  <th scope="col">Faculty</th>
      <th scope="col">Description</th>

</tr>
  </tfoot>
</table>






</div>






<?php

include('studentfooter.php');

?>
