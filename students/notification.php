<?php

include('..\students\afterstudentlogin.php');

?>

<div class="main_content">



<h3 class="">Notice Details</h3><hr>

<table id="example">
  <thead>
    <tr>
<th scope="col">Sr no</th>
           <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">File</th>
      <th scope="col">Description</th>
     
</tr>
</thead>
<tbody>
<?php
include('../connection/connection.php');



$selectquery = "SELECT * FROM `add_notice` ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['Sr_no']; ?></td>
<td><?php echo $result['notice']; ?></td>
<td><?php echo $result['date']; ?></td>
<td><a target="_blank" href="..\admin\time table\images\<?php echo $result['file'] ?>"> <?php echo $result['file'] ?></a></td>
<td><?php echo $result['descript']; ?></td>

</tr>

<?php
}

?>


</tbody>
  <tfoot>
  <tr>
<th scope="col">Sr no</th>
            <th scope="col">Title</th>
                  <th scope="col">Date</th>
                  <th scope="col">file</th>
                  <th scope="col">description</th>
     


</tr>
  </tfoot>
</table>






</div>




<?php

include('studentfooter.php');

?>
