<?php
include('afterloginfacultysidebar.php');
 include('../connection/connection.php');

 ?>




<div class="main_content">
<h3><label for="">Notice</label></h3><hr>
<form class="row g-3 mt-2" method="POST" enctype="multipart/form-data">

<div class="col-4">
              <label for="validationDefault05" class="form-label">File</label>
            <input type="file" name="file" class="form-control form-group">
</div>

<div class="col-4">
              <label for="validationDefault05" class="form-label">Notice title</label>
              <input type="text" class="form-control form-group" id="validationDefault05" pattern="[A-Za-z ]+" required name="title">
            </div>

            <div class="col-4">
              <label for="validationDefault05" class="form-label">  Uploaded Date</label>
              <input type="date" class="form-control form-group" id="validationDefault05" name="date" required>
            </div>
           

         

            <div class="col-4">
              <label for="validationDefault05" class="form-label">Description</label>
              <input type="text" class="form-control form-group" id="validationDefault05" name="descr" pattern="[A-Za-z ]+" required>
             
            </div>
       
            <div class="col-12 m-3">
              <input type="submit" class="btn btn-primary" name="submit" value="Share Notice">
            </div>
</div>
          </form>

<?php

if(isset($_POST["submit"])){


    $pname = rand(1000,10000). "-". $_FILES["file"]["name"];

    $tname= $_FILES["file"]["tmp_name"];

    $uploads_dir = '../admin/time table/images';

    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    
$date = $_POST['date'];
$title = $_POST['title'];
$descr = $_POST['descr'];



    $sql = "INSERT INTO `add_notice`(`notice`, `descript`, `date`, `file`)
     VALUES ('$title','$descr','$date','$pname')";

    $query = mysqli_query($con, $sql);

    if($query){
      ?>
      <script>
          alert("successfully   notice shre");
      </script>
      <?php
    }else{
       ?>
       <script>
           alert("sorry unable to share notice");
       </script>
       <?php
    }
    
    }
    
    
?>

<h3><label for="">Notice List</label></h3>
<table id="example">
  <thead>
    <tr>
<th scope="col">Sr no</th>
           <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">File</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
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
<td><a   class="btn btn-danger" href="..\faculty\deletenotice.php?id=<?php echo $result['Sr_no']; ?>">delete</a></td>
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
      <th scope="col">Action</th>


</tr>
  </tfoot>
</table>





<?php

include('afterloginfacultyfooter.php');

?>


