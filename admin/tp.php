<?php
include('../connection/connection.php');
include('adminsidenavbar.php');
?>


    <!-----table css------------>
<style>
        table {
width: 100%;   
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>                

<?php

$semester = $_POST['sem'];
if(isset($_POST['submit'])) {

    if($semester == 1){
        $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
        foreach ($days as $day) {
          $sql = "UPDATE time_table_sem_1 SET `1`='{$_POST[$day.'_phase1']}', `2`='{$_POST[$day.'_phase2']}', `3`='{$_POST[$day.'_phase3']}', `4`='{$_POST[$day.'_phase4']}', `5`='{$_POST[$day.'_phase5']}', `6`='{$_POST[$day.'_phase6']}', `7`='{$_POST[$day.'_phase7']}', `8`='{$_POST[$day.'_phase8']}' WHERE `day`='$day'";
         $query =  mysqli_query($con, $sql);
        }

    }elseif($semester == 2){
        $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
        foreach ($days as $day) {
          $sql = "UPDATE time_table_sem_2 SET `1`='{$_POST[$day.'_phase1']}', `2`='{$_POST[$day.'_phase2']}', `3`='{$_POST[$day.'_phase3']}', `4`='{$_POST[$day.'_phase4']}', `5`='{$_POST[$day.'_phase5']}', `6`='{$_POST[$day.'_phase6']}', `7`='{$_POST[$day.'_phase7']}', `8`='{$_POST[$day.'_phase8']}' WHERE `day`='$day'";
         $query =  mysqli_query($con, $sql);
        }

    }elseif($semester == 3){
        $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
        foreach ($days as $day) {
          $sql = "UPDATE time_table_sem_3 SET `1`='{$_POST[$day.'_phase1']}', `2`='{$_POST[$day.'_phase2']}', `3`='{$_POST[$day.'_phase3']}', `4`='{$_POST[$day.'_phase4']}', `5`='{$_POST[$day.'_phase5']}', `6`='{$_POST[$day.'_phase6']}', `7`='{$_POST[$day.'_phase7']}', `8`='{$_POST[$day.'_phase8']}' WHERE `day`='$day'";
         $query =  mysqli_query($con, $sql);
        }

    }elseif($semester == 4){
        $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
        foreach ($days as $day) {
          $sql = "UPDATE time_table_sem_4 SET `1`='{$_POST[$day.'_phase1']}', `2`='{$_POST[$day.'_phase2']}', `3`='{$_POST[$day.'_phase3']}', `4`='{$_POST[$day.'_phase4']}', `5`='{$_POST[$day.'_phase5']}', `6`='{$_POST[$day.'_phase6']}', `7`='{$_POST[$day.'_phase7']}', `8`='{$_POST[$day.'_phase8']}' WHERE `day`='$day'";
         $query =  mysqli_query($con, $sql);
        }
    }elseif($semester == 5){
        $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
        foreach ($days as $day) {
          $sql = "UPDATE time_table_sem_5 SET `1`='{$_POST[$day.'_phase1']}', `2`='{$_POST[$day.'_phase2']}', `3`='{$_POST[$day.'_phase3']}', `4`='{$_POST[$day.'_phase4']}', `5`='{$_POST[$day.'_phase5']}', `6`='{$_POST[$day.'_phase6']}', `7`='{$_POST[$day.'_phase7']}', `8`='{$_POST[$day.'_phase8']}' WHERE `day`='$day'";
         $query =  mysqli_query($con, $sql);
    }
}elseif($semester == 6){
    $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
    foreach ($days as $day) {
      $sql = "UPDATE time_table_sem_6 SET `1`='{$_POST[$day.'_phase1']}', `2`='{$_POST[$day.'_phase2']}', `3`='{$_POST[$day.'_phase3']}', `4`='{$_POST[$day.'_phase4']}', `5`='{$_POST[$day.'_phase5']}', `6`='{$_POST[$day.'_phase6']}', `7`='{$_POST[$day.'_phase7']}', `8`='{$_POST[$day.'_phase8']}' WHERE `day`='$day'";
     $query =  mysqli_query($con, $sql);
}
      
   
if($query == true){
 ?>
 <script>
     alert("successfully   time-table Added");
 </script>
 <?php
}else{
  ?>
  <script>
      alert("sorry unable to time-table");
  </script>
  <?php
}
}
}
?>





<div class="main_content">
<h3 class="mt-5">Time-table Mangement System</h3>

<form action="" method="POST">
    <div class="row">
<div class="col-md-4">
      <label for="validationDefault04" class="form-label">Select Semester:</label>
      <select class="form-select" id="validationDefault04" name="sem" required>
        <option value="1" required>1</option>
        <option value="2" required>2</option>
        <option value="3" required>3</option>
        <option value="4" required>4</option>
        <option value="5" required>5</option>
        <option value="6" required>6</option>   
      </select>
</div>
    
</div>
    <table id="example" class="mt-5">
<thead>
        <tr>
            <th scope="col">Day</th>
            <th scope="col">9:30 am - 10:30 am</th>
            <th scope="col">10:30 am - 11:30 am</th>
            <th scope="col">11:30 am - 12:30 pm</th>
            <th scope="col">12:30 pm - 1:30 pm</th>
            <th scope="col">1:30 pm - 2:00 pm</th>
            <th scope="col">2:00 pm - 3:00 pm</th>
            <th scope="col">3:00 pm - 4:00 pm</th>
            <th scope="col">4:00 pm - 5:00 pm</th>
            <th scope="col">5:00 pm - 6:00 pm</th>
        </tr>
</thead>
<tbody>

<!----------------------------------------------------------monday--------------------------------------------------------->
<?php
$selectquery = "SELECT * FROM time_table_sem_1  WHERE `day`='monday'";
$query = mysqli_query($con, $selectquery);
$result_monday = mysqli_fetch_assoc($query);
?>
<tr>
<th style="font-weight:bold"> Monday</th>
            <td> <input type="text" style="width:100px" name="monday_phase1" value=" <?php echo $result_monday['1']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase2" value=" <?php echo $result_monday['2']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase3" value=" <?php echo $result_monday['3']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase4" value=" <?php echo $result_monday['4']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase5" value=" <?php echo $result_monday['5']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase6" value=" <?php echo $result_monday['6']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase7" value=" <?php echo $result_monday['7']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase8" value=" <?php echo $result_monday['8']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase9" value=""> </td>
        </tr>


<!----------------------------------------------------------tuesday--------------------------------------------------------->
        <?php
$selectquery = "SELECT * FROM time_table_sem_1  WHERE `day`='tuesday'";
$query = mysqli_query($con, $selectquery);
$result_tuesday = mysqli_fetch_assoc($query);
?>
        <tr>
    <th style="font-weight:bold">tuesday</th>
    <td> <input type="text" style="width:100px" name="tuesday_phase1" value=" <?php echo $result_tuesday['1']; ?>"> </td>
    <td> <input type="text" style="width:100px" name="tuesday_phase2" value=" <?php echo $result_tuesday['2']; ?>"> </td>
    <td> <input type="text" style="width:100px" name="tuesday_phase3" value=" <?php echo $result_tuesday['3']; ?>"> </td>
    <td> <input type="text" style="width:100px" name="tuesday_phase4" value=" <?php echo $result_tuesday['4']; ?>"> </td>
    <td> <input type="text" style="width:100px" name="tuesday_phase5" value=" <?php echo $result_tuesday['5']; ?>"> </td>
    <td> <input type="text" style="width:100px" name="tuesday_phase6" value=" <?php echo $result_tuesday['6']; ?>"> </td>
    <td> <input type="text" style="width:100px" name="tuesday_phase7" value=" <?php echo $result_tuesday['7']; ?>"> </td>
    <td> <input type="text" style="width:100px" name="tuesday_phase8" value=" <?php echo $result_tuesday['8']; ?>"> </td>
    <td> <input type="text" style="width:100px" name="tuesday_phase9" value=" "> </td>
</tr>



<!----------------------------------------------------------wednesday--------------------------------------------------------->
<?php
$selectquery = "SELECT * FROM time_table_sem_1  WHERE `day`='wednesday'";
$query = mysqli_query($con, $selectquery);
$result_wednesday = mysqli_fetch_assoc($query);
?>
          <tr>
            <th style="font-weight:bold">Wednesday</th>
            <td> <input type="text" style="width:100px" name="wednesday_phase1" value=" <?php echo $result_wednesday['1']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase2" value=" <?php echo $result_wednesday['2']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase3" value=" <?php echo $result_wednesday['3']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase4" value=" <?php echo $result_wednesday['4']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase5" value=" <?php echo $result_wednesday['5']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase6" value=" <?php echo $result_wednesday['6']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase7" 
            value=" <?php echo $result_wednesday['7']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase8" value=" <?php echo $result_wednesday['8']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase9" value=""> </td>
        </tr>


<!----------------------------------------------------------friday--------------------------------------------------------->
     <?php
$selectquery = "SELECT * FROM time_table_sem_1  WHERE `day`='friday'";
$query = mysqli_query($con, $selectquery);
$result_friday = mysqli_fetch_assoc($query);
?>
        <tr>
            <th style="font-weight:bold">Friday</th>
            <td> <input type="text" style="width:100px" name="friday_phase1" value=" <?php echo $result_friday['1']; ?>">  </td>
            <td> <input type="text" style="width:100px" name="friday_phase2" value=" <?php echo $result_friday['2']; ?>">  </td>
            <td> <input type="text" style="width:100px" name="friday_phase3" value=" <?php echo $result_friday['3']; ?>">  </td>
            <td> <input type="text" style="width:100px" name="friday_phase4" value=" <?php echo $result_friday['4']; ?>">  </td>
            <td> <input type="text" style="width:100px" name="friday_phase5" value=" <?php echo $result_friday['5']; ?>">  </td>
            <td> <input type="text" style="width:100px" name="friday_phase6" value=" <?php echo $result_friday['6']; ?>">  </td>
            <td> <input type="text" style="width:100px" name="friday_phase7" value=" <?php echo $result_friday['7']; ?>">  </td>
            <td> <input type="text" style="width:100px" name="friday_phase8" value=" <?php echo $result_friday['8']; ?>">  </td>
            <td> <input type="text" style="width:100px" name="friday_phase9" value=""> </td>
        </tr>
        

<!----------------------------------------------------------saturday--------------------------------------------------------->
        <?php
$selectquery = "SELECT * FROM time_table_sem_1  WHERE `day`='saturday'";
$query = mysqli_query($con, $selectquery);
$result_saturday = mysqli_fetch_assoc($query);
?>
<tr>
            <th style="font-weight:bold">Saturday</th>
            <td> <input type="text" style="width:100px" name="saturday_phase1" value=" <?php echo $result_saturday['1']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase2" value=" <?php echo $result_saturday['2']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase3" value=" <?php echo $result_saturday['3']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase4" value=" <?php echo $result_saturday['4']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase5" value=" <?php echo $result_saturday['5']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase6" value=" <?php echo $result_saturday['6']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase7" value=" <?php echo $result_saturday['7']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase8" value=" <?php echo $result_saturday['8']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase9" value=""></td>
        </tr>
        

      <!----------------------------------------------------------thursday--------------------------------------------------------->  
        <?php
$selectquery = "SELECT * FROM time_table_sem_1  WHERE `day`='thursday'";
$query = mysqli_query($con, $selectquery);
$result_thursday = mysqli_fetch_assoc($query);
?>



        <tr>
            <th style="font-weight:bold">thursday</th>
            <td> <input type="text" style="width:100px" name="thursday_phase1" value=" <?php echo $result_thursday['1']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase2" value=" <?php echo $result_thursday['2']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase3" value=" <?php echo $result_thursday['3']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase4" value=" <?php echo $result_thursday['4']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase5" value=" <?php echo $result_thursday['5']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase6" value=" <?php echo $result_thursday['6']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase7" value=" <?php echo $result_thursday['7']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase8" value=" <?php echo $result_thursday['8']; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase9" value=" "></td>
        </tr>

        </table>
    
    <div class="col-12">
              <input type="submit" class="btn btn-primary" name="submit" value="Save Time-Table">
            </div>
</form>
</tbody>
</table>
</div>
</div>




</div>


    <?php

include('adminfooter.php');

?>
