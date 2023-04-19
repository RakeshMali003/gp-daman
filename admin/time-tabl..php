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


<div class="main_content">
  
<?php

// Check if form is submitted
if(isset($_POST['submit'])) {
  $selectedSemester = $_POST['semester'];
  // Get selected semester value


  // Perform database query to fetch values for selected semester from database
  // Replace this with your actual database query
  $sql_monday = "SELECT * FROM time_table_sem_" . $selectedSemester ;
  $result_monday = mysqli_query($con, $sql_monday); // Assuming you have a database connection object $conn

  // Fetch values from database
  if(mysqli_num_rows($result_monday) > 0) {
    $row = mysqli_fetch_assoc($result_monday);
    $monday_phase1 = $row['1'];
    $monday_phase2 = $row['2'];
    $monday_phase3 = $row['3'];
    $monday_phase4 = $row['4'];
    $monday_phase5 = $row['5'];
    $monday_phase6 = $row['6'];
    $monday_phase7 = $row['7'];
    $monday_phase8 = $row['8'];
  }else{

  }
  $sql_tuesday = "SELECT * FROM time_table_sem_" . $selectedSemester . " WHERE day='tuesday'";
  $result_tuesday = mysqli_query($con, $sql_tuesday);
  if(mysqli_num_rows($result_tuesday) > 0) {
    $row_tuesday = mysqli_fetch_assoc($result_tuesday);
    $tuesday_phase1 = $row_tuesday['1'];
    $tuesday_phase2 = $row_tuesday['2'];
    $tuesday_phase3 = $row_tuesday['3'];
    $tuesday_phase4 = $row_tuesday['4'];
    $tuesday_phase5 = $row_tuesday['5'];
    $tuesday_phase6 = $row_tuesday['6'];
    $tuesday_phase7 = $row_tuesday['7'];
    $tuesday_phase8 = $row_tuesday['8'];
  }else{

  }
  $sql_wednesday = "SELECT * FROM time_table_sem_" . $selectedSemester . " WHERE day='wednesday'";
  $result_wednesday = mysqli_query($con, $sql_wednesday);
  if(mysqli_num_rows($result_wednesday) > 0) {
    $row_wednesday = mysqli_fetch_assoc($result_wednesday);
    $wednesday_phase1 = $row_wednesday['1'];
    $wednesday_phase2 = $row_wednesday['2'];
    $wednesday_phase3 = $row_wednesday['3'];
    $wednesday_phase4 = $row_wednesday['4'];
    $wednesday_phase5 = $row_wednesday['5'];
    $wednesday_phase6 = $row_wednesday['6'];
    $wednesday_phase7 = $row_wednesday['7'];
    $wednesday_phase8 = $row_wednesday['8'];
  }else{

  }
  $sql_thursday = "SELECT * FROM time_table_sem_" . $selectedSemester . " WHERE day='thursday'";
  $result_thursday = mysqli_query($con, $sql_thursday);
  if(mysqli_num_rows($result_thursday) > 0) {
    $row_thursday = mysqli_fetch_assoc($result_thursday);
    $thursday_phase1 = $row_thursday['1'];
    $thursday_phase2 = $row_thursday['2'];
    $thursday_phase3 = $row_thursday['3'];
    $thursday_phase4 = $row_thursday['4'];
    $thursday_phase5 = $row_thursday['5'];
    $thursday_phase6 = $row_thursday['6'];
    $thursday_phase7 = $row_thursday['7'];
    $thursday_phase8 = $row_thursday['8'];
  }else{

  }

    $sql_friday = "SELECT * FROM time_table_sem_" . $selectedSemester . " WHERE day='friday'";
    $result_friday = mysqli_query($con, $sql_friday);
    if(mysqli_num_rows($result_friday) > 0) {
      $row_friday = mysqli_fetch_assoc($result_friday);
    $friday_phase1 = $row_friday['1'];
    $friday_phase2 = $row_friday['2'];
    $friday_phase3 = $row_friday['3'];
    $friday_phase4 = $row_friday['4'];
    $friday_phase5 = $row_friday['5'];
    $friday_phase6 = $row_friday['6'];
    $friday_phase7 = $row_friday['7'];
    $friday_phase8 = $row_friday['8'];
    }else{

}

  $sql_saturday = "SELECT * FROM time_table_sem_" . $selectedSemester . " WHERE day='saturday'";
  $result_saturday = mysqli_query($con, $sql_saturday);
  if(mysqli_num_rows($result_saturday) > 0) {
    $row_saturday = mysqli_fetch_assoc($result_saturday);
    $saturday_phase1 = $row_saturday['1'];
    $saturday_phase2 = $row_saturday['2'];
    $saturday_phase3 = $row_saturday['3'];
    $saturday_phase4 = $row_saturday['4'];
    $saturday_phase5 = $row_saturday['5'];
    $saturday_phase6 = $row_saturday['6'];
    $saturday_phase7 = $row_saturday['7'];
    $saturday_phase8 = $row_saturday['8'];

 
    
    // Repeat for other days and phases
  } else {
    // If no results found, set default values

    // Repeat for other days and phases
  }

  // Refresh the page to show the values from database
}

if(isset($_POST['save-timetable'])) {
  $selectedSemester = $_POST['sem'];
  if($selectedSemester == 1){
      $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday','saturday');
      foreach ($days as $day) {
        $sql = "UPDATE time_table_sem_1 SET `1`='{$_POST[$day.'_phase1']}', `2`='{$_POST[$day.'_phase2']}', `3`='{$_POST[$day.'_phase3']}', `4`='{$_POST[$day.'_phase4']}', `5`='{$_POST[$day.'_phase5']}', `6`='{$_POST[$day.'_phase6']}', `7`='{$_POST[$day.'_phase7']}', `8`='{$_POST[$day.'_phase8']}' WHERE `day`='$day'";
       $query =  mysqli_query($con, $sql);
      }

  }elseif($selectedSemester == 2){
      $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
      foreach ($days as $day) {
        $sql = "UPDATE time_table_sem_2 SET `1`='{$_POST[$day.'_phase1']}', `2`='{$_POST[$day.'_phase2']}', `3`='{$_POST[$day.'_phase3']}', `4`='{$_POST[$day.'_phase4']}', `5`='{$_POST[$day.'_phase5']}', `6`='{$_POST[$day.'_phase6']}', `7`='{$_POST[$day.'_phase7']}', `8`='{$_POST[$day.'_phase8']}' WHERE `day`='$day'";
       $query =  mysqli_query($con, $sql);
      }

  }elseif($selectedSemester == 3){
      $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
      foreach ($days as $day) {
        $sql = "UPDATE time_table_sem_3 SET `1`='{$_POST[$day.'_phase1']}', `2`='{$_POST[$day.'_phase2']}', `3`='{$_POST[$day.'_phase3']}', `4`='{$_POST[$day.'_phase4']}', `5`='{$_POST[$day.'_phase5']}', `6`='{$_POST[$day.'_phase6']}', `7`='{$_POST[$day.'_phase7']}', `8`='{$_POST[$day.'_phase8']}' WHERE `day`='$day'";
       $query =  mysqli_query($con, $sql);
      }

  }elseif($selectedSemester == 4){
      $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
      foreach ($days as $day) {
        $sql = "UPDATE time_table_sem_4 SET `1`='{$_POST[$day.'_phase1']}', `2`='{$_POST[$day.'_phase2']}', `3`='{$_POST[$day.'_phase3']}', `4`='{$_POST[$day.'_phase4']}', `5`='{$_POST[$day.'_phase5']}', `6`='{$_POST[$day.'_phase6']}', `7`='{$_POST[$day.'_phase7']}', `8`='{$_POST[$day.'_phase8']}' WHERE `day`='$day'";
       $query =  mysqli_query($con, $sql);
      }
  }elseif($selectedSemester == 5){
      $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
      foreach ($days as $day) {
        $sql = "UPDATE time_table_sem_5 SET `1`='{$_POST[$day.'_phase1']}', `2`='{$_POST[$day.'_phase2']}', `3`='{$_POST[$day.'_phase3']}', `4`='{$_POST[$day.'_phase4']}', `5`='{$_POST[$day.'_phase5']}', `6`='{$_POST[$day.'_phase6']}', `7`='{$_POST[$day.'_phase7']}', `8`='{$_POST[$day.'_phase8']}' WHERE `day`='$day'";
       $query =  mysqli_query($con, $sql);
  }
}elseif($selectedSemester == 6){
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
<!DOCTYPE html>
<html>
<head>
  <title>Time Table</title>
</head>
<body>
<h3 class="mt-5">Time-table Mangement System</h3>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="row">
<div class="col-md-4">
<label for="validationDefault04" class="form-label">Select Semester:</label>

    <select class="form-select" id="validationDefault04" name="semester" id="semester" onchange="this.form.submit()">
<option value="1" <?php if(isset($selectedSemester) && $selectedSemester == '1') echo 'selected'; ?>>Semester 1</option>

<option value="2" <?php if(isset($selectedSemester) && $selectedSemester == '2') echo 'selected'; ?>>Semester 2</option>

<option value="3" <?php if(isset($selectedSemester) && $selectedSemester == '3') echo 'selected'; ?>>Semester 3</option>

<option value="4" <?php if(isset($selectedSemester) && $selectedSemester == '4') echo 'selected'; ?>>Semester 4</option>

<option value="5" <?php if(isset($selectedSemester) && $selectedSemester == '5') echo 'selected'; ?>>Semester 5</option>
      
<option value="6" <?php if(isset($selectedSemester) && $selectedSemester == '6') echo 'selected'; ?>>Semester 6</option>
      <!-- Add other semester options as needed -->
    </select>

</div>
<div class="col-4 mt-4">
    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</div>
  </form>
  <?php if(isset($selectedSemester)): ?>
    <h2>Time Table for Semester <?php echo $selectedSemester; ?></h2>
    <!-- Display values from database -->
    <form action="" method="POST">

    <div class="row">
<div class="col-md-4">
      <label for="validationDefault04" class="form-label">Select Semester for Update:</label>
      <select class="form-select" id="validationDefault04" name="sem" required>
        <option value="1" required>1</option>
        <option value="2" required>2</option>
        <option value="3" required>3</option>
        <option value="4" required>4</option>
        <option value="5" required>5</option>
        <option value="6" required>6</option>   
      </select>
</div>
    <table>
      <tr>
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
        <tr>
<th style="font-weight:bold"> Monday</th>
            <td> <input type="text" style="width:100px" name="monday_phase1" value=" <?php echo $monday_phase1; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase2" value=" <?php echo $monday_phase2; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase3" value=" <?php echo $monday_phase3; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase4" value=" <?php echo $monday_phase4; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase5" value=" <?php echo $monday_phase5; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase6" value=" <?php echo $monday_phase6; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase7" value=" <?php echo $monday_phase7; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase8" value=" <?php echo $monday_phase8; ?>"> </td>
            <td> <input type="text" style="width:100px" name="monday_phase9" value=""> </td>
        </tr>

      
        <tr>
<th style="font-weight:bold"> Tuesday</th>
            <td> <input type="text" style="width:100px" name="tuesday_phase1" value=" <?php echo $tuesday_phase1; ?>"> </td>
            <td> <input type="text" style="width:100px" name="tuesday_phase2" value=" <?php echo $tuesday_phase2; ?>"> </td>
            <td> <input type="text" style="width:100px" name="tuesday_phase3" value=" <?php echo $tuesday_phase3; ?>"> </td>
            <td> <input type="text" style="width:100px" name="tuesday_phase4" value=" <?php echo $tuesday_phase4; ?>"> </td>
            <td> <input type="text" style="width:100px" name="tuesday_phase5" value=" <?php echo $tuesday_phase5; ?>"> </td>
            <td> <input type="text" style="width:100px" name="tuesday_phase6" value=" <?php echo $tuesday_phase6; ?>"> </td>
            <td> <input type="text" style="width:100px" name="tuesday_phase7" value=" <?php echo $tuesday_phase7; ?>"> </td>
            <td> <input type="text" style="width:100px" name="tuesday_phase8" value=" <?php echo $tuesday_phase8; ?>"> </td>
            <td> <input type="text" style="width:100px" name="tuesday_phase9" value=""> </td>
        </tr>


        <tr>
<th style="font-weight:bold"> Wednesday</th>
            <td> <input type="text" style="width:100px" name="wednesday_phase1" value=" <?php echo $wednesday_phase1; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase2" value=" <?php echo $wednesday_phase2; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase3" value=" <?php echo $wednesday_phase3; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase4" value=" <?php echo $wednesday_phase4; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase5" value=" <?php echo $wednesday_phase5; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase6" value=" <?php echo $wednesday_phase6; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase7" value=" <?php echo $wednesday_phase7; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase8" value=" <?php echo $wednesday_phase8; ?>"> </td>
            <td> <input type="text" style="width:100px" name="wednesday_phase9" value=""> </td>
        </tr>


        <tr>
<th style="font-weight:bold"> Thursday</th>
            <td> <input type="text" style="width:100px" name="thursday_phase1" value=" <?php echo $thursday_phase1; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase2" value=" <?php echo $thursday_phase2; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase3" value=" <?php echo $thursday_phase3; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase4" value=" <?php echo $thursday_phase4; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase5" value=" <?php echo $thursday_phase5; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase6" value=" <?php echo $thursday_phase6; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase7" value=" <?php echo $thursday_phase7; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase8" value=" <?php echo $thursday_phase8; ?>"> </td>
            <td> <input type="text" style="width:100px" name="thursday_phase9" value=""> </td>
        </tr>


        <tr>
<th style="font-weight:bold"> Friday</th>
            <td> <input type="text" style="width:100px" name="friday_phase1" value=" <?php echo $friday_phase1; ?>"> </td>
            <td> <input type="text" style="width:100px" name="friday_phase2" value=" <?php echo $friday_phase2; ?>"> </td>
            <td> <input type="text" style="width:100px" name="friday_phase3" value=" <?php echo $friday_phase3; ?>"> </td>
            <td> <input type="text" style="width:100px" name="friday_phase4" value=" <?php echo $friday_phase4; ?>"> </td>
            <td> <input type="text" style="width:100px" name="friday_phase5" value=" <?php echo $friday_phase5; ?>"> </td>
            <td> <input type="text" style="width:100px" name="friday_phase6" value=" <?php echo $friday_phase6; ?>"> </td>
            <td> <input type="text" style="width:100px" name="friday_phase7" value=" <?php echo $friday_phase7; ?>"> </td>
            <td> <input type="text" style="width:100px" name="friday_phase8" value=" <?php echo $friday_phase8; ?>"> </td>
            <td> <input type="text" style="width:100px" name="friday_phase9" value=""> </td>
        </tr>


        <tr>
<th style="font-weight:bold"> Saturday</th>
            <td> <input type="text" style="width:100px" name="saturday_phase1" value=" <?php echo $saturday_phase1; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase2" value=" <?php echo $saturday_phase2; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase3" value=" <?php echo $saturday_phase3; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase4" value=" <?php echo $saturday_phase4; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase5" value=" <?php echo $saturday_phase5; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase6" value=" <?php echo $saturday_phase6; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase7" value=" <?php echo $saturday_phase7; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase8" value=" <?php echo $saturday_phase8; ?>"> </td>
            <td> <input type="text" style="width:100px" name="saturday_phase9" value=""> </td>
        </tr>
   
    </table>
    <div class="col-12">
              <input type="submit" class="btn btn-primary mt-3" name="save-timetable" value="Save Time-Table">
            </div>
  </form>
  <?php endif; ?>
</body>
</html>

</div>


    <?php

include('adminfooter.php');

?>
