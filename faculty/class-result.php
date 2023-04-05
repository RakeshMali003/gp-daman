<?php
include('afterloginfacultysidebar.php');
 include('../connection/connection.php');

 if(isset($_POST['submit'])){
  $enrollment = $_POST['enrollmentnumber'];
  $name = $_POST['sname'];
  $subject = $_POST['subject'];
  $sem = $_POST['sem'];
  $mark = $_POST['mark'];

  $sql = "INSERT INTO `result`(`enrollment_no`, `name`, `subject`, `sem`, `mark`) 
  VALUES ('$enrollment','$name','$subject','$sem','$mark')";
  

  $query = mysqli_query($con, $sql);

  

if($query){
  ?>
  <script>
      alert("successfully   Student update");
  </script>
  <?php
}else{
   ?>
   <script>
       alert("sorry unable to update Student");
   </script>
   <?php
}

}



 

 ?>




<div class="main_content">



        <div class="modal-body">
          <form class="row g-3 mt-2" method="POST">
<h3><label for="">Class Result</label></h3> <hr>
            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Enrollment Number</label>
              <input type="number" class="form-control" name="enrollmentnumber" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Student Name</label>
              <input type="text" class="form-control" name="sname" pattern="[A-Za-z ]+" minlength="3" required >
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
            
    <div class="col-md-6">
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

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Mark</label>
              <input type="text" class="form-control" name="mark" pattern="[0-9]{1,3}" minlength="1" maxlength="2" required>
            </div>

            

            <div class="col-12">
              <input type="submit" class="btn btn-primary" name="submit" value="Add Result">
            </div>

            




          </form>

          


  
<h3><label for="">Class Result List</label></h3>

<table id="example">
  <thead>
    <tr>
  <th scope="col">Sr no.</th>
  <th scope="col">Enrollment Number</th>
  <th scope="col">Name</th>
        <th scope="col">Subject</th>
         <th scope="col">Sem</th>
            <th scope="col">Mark</th>
               <th scope="col">Action</th>
    

</tr>
</thead>
<tbody>
      <?php
include('../connection/connection.php');


$selectquery = "SELECT * FROM result ";

$query = mysqli_query($con, $selectquery);

while($result = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $result['sr_no']; ?></td>
<td><?php echo $result['enrollment_no']; ?></td>
<td><?php echo $result['name']; ?></td>
<td><?php echo $result['subject']; ?></td>
<td><?php echo $result['sem']; ?></td>
<td><?php echo $result['mark']; ?></td>
<td><a   class="btn btn-danger" href="..\faculty\deleteresult.php?id=<?php echo $result['sr_no']; ?>">delete</a></td>



</tr>

<?php
}

?>

</tbody>
  <tfoot>
  <tr>
  <th scope="col">Sr no.</th>
  <th scope="col">Enrollment Number</th>
  <th scope="col">Name</th>
        <th scope="col">Subject</th>
         <th scope="col">Sem</th>
            <th scope="col">Mark</th>
               <th scope="col">Action</th>
  


</tr>
  </tfoot>
</table>


</div>

        </div>
      </div>
    </div>
  </div>


</div>


<?php

include('afterloginfacultyfooter.php');

?>


