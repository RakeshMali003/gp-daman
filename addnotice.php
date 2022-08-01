<?php
include('gpadmin.php');
include('connection.php');


if(isset($_POST['submit'])){

  $notice = $_POST['notice'];


  $insertquery = "INSERT INTO `add_notice`( `notice`) VALUES ('$notice')";

  $res =  mysqli_query($con, $insertquery);

 
  if($res == true){
    ?>
    <script>
        alert("successfully Notice Added");
    </script>
    <?php
  }else{
     ?>
     <script>
         alery("sorry unable to add notice");
     </script>
     <?php
  }
}

  
?>
<div class="main_content">

<div class="card col-6 m-5">
<h3 class="m-5">Add Notice</h3>
<form class="row g-3" method="POST">
<div class="col-md-6">
   
        <input type="text" name="notice" class="form-control mx-5" placeholder="new Notice">
        
    <div class="col-12">
      <input type="submit" class="btn btn-primary m-5" name="submit">
      </div>
</form>
</div> 
</div>



  
<h3 class="mt-5">Notice Details</h3>

<table id="example" class="display nowrap" style="width:100%">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">Notice</th>

</tr>
</thead>
<tbody>
      <?php
$server = "localhost";
$username = "root";
$password = "";
$db = "gpdaman";
$con = mysqli_connect($server, $username , $password , $db);




$selectquery = "SELECT * FROM add_notice ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><?php echo $result['notice']; ?></td>
</tr>

<?php
}

?>

</tbody>
  <tfoot>
  <tr>
  <th scope="col">Sr no.</th>
      <th scope="col">Notice</th>
</tr>
  </tfoot>
</table>

