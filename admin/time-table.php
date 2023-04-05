<?php
 include('../connection/connection.php');
include('adminsidenavbar.php');

?>



<div class="main_content">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
           <h3> <label for="">Upload Time table</label> </h3>
            <input type="file" name="file" class="form-control mt-3" required>
            </div>
            <input type="submit" name="submit" class="btn btn-primary m-3" value="Submit">
    </form>

<?php

if(isset($_POST["submit"])){



    $pname = rand(1000,10000). "-". $_FILES["file"]["name"];

    $tname= $_FILES["file"]["tmp_name"];

    $uploads_dir = '../admin/time table/images';

    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    $sql = "INSERT into image(`image`) VALUES('$pname')";
    $res = mysqli_query($con, $sql);

    if($res == true){
        ?>
        <script>
            alert("successfully   Time-Table Uploaded");
        </script>
        <?php
      }else{
         ?>
         <script>
             alert("sorry unable to Upload Time-Table");
         </script>
         <?php
      }
      }


?>


<table id="example">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php
include('../connection/connection.php');


$selectquery = "SELECT * FROM `image` ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><a target="_blank" href="..\admin\time table\images\<?php echo $result['image'] ?>"> <?php echo $result['image'] ?></a></td>
<td><a   class="btn btn-danger" href="..\admin\deletetimetable.php?id=<?php echo $result['sr_no']; ?>">delete</a></td>
</tr>

<?php
}

?>


</tbody>
  <tfoot>
  <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>


</tr>
  </tfoot>
</table>
    <?php

include('adminfooter.php');

?>


