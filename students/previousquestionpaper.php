<?php

include('../students/afterstudentlogin.php');


if(isset($_POST["submit"])){



    $pname = rand(1000,10000). "-". $_FILES["file"]["name"];

    $tname= $_FILES["file"]["tmp_name"];

    $uploads_dir = '../admin/time table/images';

    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    $sql = "INSERT INTO `pre-question-paper`(`image`) VALUES ('$pname')";

    if(mysqli_query($con,$sql)){
        echo "sucess";
    }else{
        echo "fail";
    }

}
?>

<div class="main_content">
<h3 class="">Previous Question Paper </h3><hr>
<table id="example">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">File</th>
      <th scope="col">Subject</th>
      <th scope="col">Year</th>
      <th scope="col">Faculty</th>
      <th scope="col">Sem</th>
   
</tr>
</thead>
<tbody>
<?php
include('../connection/connection.php');


$selectquery = "SELECT * FROM `pre-question-paper` ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><a target="_blank" href="..\admin\time table\images\<?php echo $result['image'] ?>"> <?php echo $result['image'] ?></a></td>
<td><?php echo $result['subject']; ?></td>
<td><?php echo $result['year']; ?></td>
<td><?php echo $result['faculty']; ?></td>
<td><?php echo $result['sem']; ?></td>

</tr>

<?php
}

?>


</tbody>
  <tfoot>
  <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">File</th>
      <th scope="col">Subject</th>
      <th scope="col">Year</th>
      <th scope="col">Faculty</th>
      <th scope="col">Sem</th>
   


</tr>
  </tfoot>
</table>

</div>
</div>










<?php

include('studentfooter.php');

?>
