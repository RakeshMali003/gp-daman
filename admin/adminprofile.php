<?php
 include('../connection/connection.php');
include('adminsidenavbar.php');

?>

<div class="main_content">
<h4 class="para"> Admin Details</h4> <br> <hr>

<?php
         $email = $_SESSION['email'];

        $sql = "SELECT * FROM `adminlogin` WHERE user_id = '$email'";

        $query = mysqli_query($con, $sql);

        while($result = mysqli_fetch_assoc($query)){

            
if(isset($_POST['submit'])){

    $userid = $_POST['userid'];
    $password = $_POST['pass'];


   
    $updatequery =  "UPDATE `adminlogin` SET `user_id`='$userid',`password`='$password' WHERE 1";
$res = mysqli_query($con ,$updatequery);


if($res == true){
    ?>
    <script>
        alert("Profile save succesfully");
    </script>
    <?php
  }else{
     ?>
     <script>
         alert("sorry unable to update profile");
     </script>
     <?php
}

}


?>

<form class="row g-3 mt-2" method="POST">
            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Admin ID</label>
              <input type="text" class="form-control"  id="validationDefault05" value="<?php echo $result['user_id']; ?>" name="userid" required>
            </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Password</label>
              <input type="text" class="form-control"  id="validationDefault05" value="<?php echo $result['password']; ?>" name="pass" required>
            </div>

            <div class="col-12">
              <input type="submit" class="btn btn-primary" name="submit" value="Save profile">
            </div>
</div>
</form>


<?php
        
        }
include('adminfooter.php');

?>
