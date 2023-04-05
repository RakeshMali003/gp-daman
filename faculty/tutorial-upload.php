<?php
include('afterloginfacultysidebar.php');
 include('../connection/connection.php');

 ?>




<div class="main_content">

<form class="row g-3 mt-2" method="POST" enctype="multipart/form-data">

           <h3> <label for="">Upload Tutorials</label> </h3> <hr>
            <input type="file" name="file" class="form-control mt-3 form-group" required>
            
            <div class="col-4">
              <label for="validationDefault05" class="form-label">  Uploaded Date</label>
              <input type="date" class="form-control form-group" id="validationDefault05" name="date" required>
            </div>
           
            <div class="col-md-6">
      <label for="validationDefault04" class="form-label">Subject</label>
      <select class="form-select" name="subject" id="validationDefault04" required>
        <option value="Math Basic">Math basic</option>
        <option value="Marth part-2">Math part-2</option>
        <option value="Marth advance">Math advance</option>
        <option value="Enviromental">enviromental</option>
        <option value="English">english</option>
        <option value="Python">python</option>
        <option value="Python advance">python advance</option>
        <option value="asp.net">asp.net</option>
        <option value="ens">ens</option>
        <option value="Ict">Ict</option>
        <option value="Icn">Icn</option>
        <option value="Java">Java</option>
        <option value="Java Advance">Java advance</option>
        <option value="Os">os</option>
        <option value="Electronic">electronic</option>
      </select>
    </div>
            
    <div class="col-md-3">
      <label for="validationDefault04" class="form-label">Semester</label>
      <select class="form-select" name="sem" id="validationDefault04" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
   
      </select>
    </div>

            <div class="col-4">
              <label for="validationDefault05" class="form-label">Faculty</label>
              <input type="text" class="form-control form-group" id="validationDefault05" name="faculty" pattern="[A-Za-z ]+" required>
            </div>

            <div class="col-4">
              <label for="validationDefault05" class="form-label">Description</label>
              <input type="text" class="form-control form-group" id="validationDefault05" name="descr" required>
             
            </div>
       
            <div class="col-12 m-3">
              <input type="submit" class="btn btn-primary" name="submit" value="Upload Tutorials">
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
$subject = $_POST['subject'];
$sem = $_POST['sem'];
$faculty = $_POST['faculty'];
$description = $_POST['descr'];


    $sql = "INSERT INTO `tutorial`(`file`, `date`,`subject`,`sem`,`faculty`,`description`)
     VALUES ('$pname','$date','$subject','$sem','$faculty','$description')";

    $query = mysqli_query($con, $sql);

    if($query){
      ?>
      <script>
          alert("successfully   Tutorial Upload");
      </script>
      <?php
    }else{
       ?>
       <script>
           alert("sorry unable to Tutorial Upload");
       </script>
       <?php
    }
    
    }
    
    
?>

<h3><label for="">Tutorials List</label></h3>
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
      <th scope="col">Action</th>
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
<td><a   class="btn btn-danger" href="..\faculty\deletetutorial.php?id=<?php echo $result['sr_no']; ?>">delete</a></td>
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
            <th scope="col">subject</th>
                  <th scope="col">semester</th>
                  <th scope="col">faculty</th>
                  <th scope="col">description</th>
      <th scope="col">Action</th>


</tr>
  </tfoot>
</table>





<?php

include('afterloginfacultyfooter.php');

?>


