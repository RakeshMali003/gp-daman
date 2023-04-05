<?php
 include('../connection/connection.php');
include('adminsidenavbar.php');

if(isset($_POST['submit'])){

  if(($_POST['title'] == "") || $_POST['desc'] == ""){

    ?>

    <script>
            alert("All field are required");
        </script>
    <?php
      
    }else{
    

      
  
$noticetitle = $_POST['title'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `add_notice`(`notice`, `descript`)
 VALUES ('$noticetitle','$desc')";

 $res = mysqli_query($con, $sql);

 if($res == true){
  ?>
  <script>
      alert("successfully   Notice Added");
  </script>
  <?php
}else{
   ?>
   <script>
       alert("sorry unable to Add Notice");
   </script>
   <?php
}
}
}
?>


<div class="main_content">


  <form class="row g-3 mt-5" method="POST">
    <h3>Share Notice</h3>
    <div class="col-md-6">
      <form action="">
        <label for="validationDefault01" class="form-label">Notice Title</label>
        <input type="text" class="form-control p-2" id="validationDefault01" required value="" name="title">
    </div>


 

    <div class="col-md-6">
      <label for="validationDefault02" class="form-label">Decription</label>
      <textarea type="text" class="form-control" id="validationDefault02" name="desc" required> </textarea>
    </div>






    <div class="col-12">
      <button class="btn btn-primary" type="submit" name="submit">Share Notice

      </button>
    </div>
  </form>

</div>



<h3 class="mt-3 mb-3">Notice Details</h3>

<table id="example">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">Notice Title</th>
      <th scope="col">Desccription</th>
    <th scope="col">Action</th>

</tr>
</thead>
<tbody>
      <?php
include('../connection/connection.php');


$selectquery = "SELECT * FROM add_notice ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['Sr_no']; ?></td>
<td><?php echo $result['notice']; ?></td>
<td><?php echo $result['descript']; ?></td>

<td><a   class="btn btn-danger" href="..\admin\deletenotice.php?id=<?php echo $result['Sr_no']; ?>">delete</a></td>


</tr>

<?php
}

?>

</tbody>
  <tfoot>
  <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">Notice Title</th>
      <th scope="col">Desccription</th>
   <th scope="col">Action</th>

</tr>
  </tfoot>
</table>


</div>





<?php

include('adminfooter.php');

?>


