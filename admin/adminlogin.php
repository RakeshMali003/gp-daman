<?php

include('..\connection\connection.php');
session_start();

 if(isset($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `adminlogin` WHERE user_id = '$email'";

$query = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) > 0){
    if($password == $row['password']){
        $_SESSION['is_login'] = true;
        $_SESSION['email'] = $email;
?>
<script>
location.href='../admin/adminprofile.php';
</script>
<?php

    }else{
        ?>
        <script>
       alert("Unable to login");
    </script>
    <?php
    }
}

    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   <!-- css file-->
   <link rel="stylesheet" href="../style.css">

    <style>
    .modal-content{
        background-color: rgba(0, 0, 0, 0.269);
        color:white;
    }
</style>
  

</head>
<body>
    

<div class="form-container">
        <img src="..\photo\avatar.png" class="avatar">
        <h4>Admin Login Area</h4>

        <form action="" method="POST">

            <label for="">Login</label>
            <input type="text" class="input" name="email" placeholder="Enter Email">
            <label for="">Password</label>
            <input type="password" class="input" name="password" placeholder="Enter Password">
            <input type="submit" name="login" class="btn1" value="Login">
            <div class="link">
                <a href="#"> Forget password?</a>
            </div>
        </form>
    </div>
</div>
</div>
</div>


</body>
</html>