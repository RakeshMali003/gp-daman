<?php
include('afterloginfacultysidebar.php');
 include('../connection/connection.php');

 ?>




<div class="main_content">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
           <h3> <label for="">Upload Academic calender</label> </h3><hr>
            <input type="file" name="file" class="form-control mt-3" required>
            </div>
            <input type="submit" name="submit" class="btn btn-primary m-3" value="submit">
    </form>

<?php

if(isset($_POST["submit"])){



    $pname = rand(1000,10000). "-". $_FILES["file"]["name"];

    $tname= $_FILES["file"]["tmp_name"];

    $uploads_dir = '../admin/time table/images';

    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    $sql = "INSERT INTO `academic`(`image`) VALUES ('$pname')";

    if(mysqli_query($con,$sql)){
        echo "sucess";
    }else{
        echo "fail";
    }

}
?>

<h3><label for="">Academic Calender List</label></h3>
<table id="example">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">File</th>
      <th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php
include('../connection/connection.php');


$selectquery = "SELECT * FROM `academic` ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><a target="_blank" href="..\admin\time table\images\<?php echo $result['image'] ?>"> <?php echo $result['image'] ?></a></td>
<td><a   class="btn btn-danger" href="..\faculty\deleteacademic.php?id=<?php echo $result['sr_no']; ?>">delete</a></td>
</tr>

<?php
}

?>


</tbody>
  <tfoot>
  <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">File</th>
      <th scope="col">Action</th>


</tr>
  </tfoot>
</table>





<?php

include('afterloginfacultyfooter.php');

?>


