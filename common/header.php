<?php
    include('connection/connection.php');
session_start();
//------------------------------------insertion query start---------------------------------

if(isset($_REQUEST['login'])){



$enrollment = $_REQUEST['enrollment'];
$password = $_REQUEST['password'];

$result = mysqli_query($con, "SELECT * FROM `add_student` WHERE enrollment_number='$enrollment'");

$row = mysqli_fetch_assoc($result);

 
if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
        $_SESSION['is_login'] = true;
        $_SESSION['enrollment'] = $enrollment;
?>
<script>
location.href='students/studentdashboard.php ';
</script>
<?php

   }else{
    ?>
    <script>
   alert("Password is encorrect please enter correct.");
</script>
<?php
}
}

    }
    
?>


<!----------------------------------------navbar start-------------------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!----------------------------------bostrape file------------------------------------------------>

    <link rel="stylesheet" href="..\gpdaman\bootstrap-5.0.0-beta2-dist\css\bootstrap.min.css">
    <script src="..\gpdaman\bootstrap-5.0.0-beta2-dist\js\bootstrap.min.js"></script>


    
    <!-----------------------------------end bostrap file ---------------------------------------------->


    <!--------------------------------------fontawesome----------------------------->
    <link rel="stylesheet" href="..\gpdaman\fontawesome-free-6.1.1-web\css\fontawesome.min.css">
    <script src="..\gpdaman\fontawesome-free-6.1.1-web\js\fontawesome.min.js"></script>

    <!-- font ausome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!---------------------------------------end fontawesome----------------------->



    <!-- css file-->
    <link rel="stylesheet" href="../gpdaman/style.css">

    <style>
    .modal-content{
        background-color: rgba(0, 0, 0, 0.500);
        color:white;
    }
    .text-bold{
    font-weight: bold;
}
</style>
  
</head>


<body>









    <!-----------------------------------start navbar---------------------------->

    <nav class="navbar  fixed-top navbar-expand-lg navbar-dark " id="nav">       
        <div class="container-fluid">
            <a class="navbar-brand" style="font-weight: bold; font-size: 25px;" href="#"><img
                    src="..\gpdaman\photo\gpd_logo.jpg" style="height: 65px; width: 65px;"></a>
            <a class="navbar-brand" style="font-weight: bold; font-size: 25px; color:orange" href="./index.php">GP DAMAN</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size:17px">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="..\gpdaman\index.php">HOME</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="..\gpdaman\aboutus.php" aria-disabled="page">ABOUT US</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            COURSES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="..\gpdaman\courses-it.php">INFORMATION TECHNOGOLY</a></li>
                            <li><a class="dropdown-item" href="..\gpdaman\courses-cs.php">COMPUTER</a></li>
                            <li><a class="dropdown-item" href="..\gpdaman\courses-civil.php">CIVIL</a></li>
                            <li><a class="dropdown-item" href="..\gpdaman\courses-mechenical.php">MECHINICAL</a></li>
                            <li><a class="dropdown-item" href="..\gpdaman\courses-plastic.php">PLASTIC</a></li>
                            <li><a class="dropdown-item" href="..\gpdaman\courses-electrical.php">ELECTRICAL</a></li>
                            <li><a class="dropdown-item" href="..\gpdaman\courses-chemical.php">CHEMICAL</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            FACULTY DETAILS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="..\gpdaman\principal.php">PRINCIPAL</a></li>
                            <li><a class="dropdown-item" href="..\gpdaman\hod.php">HOD</a></li>
                            <li><a class="dropdown-item" href="..\gpdaman\faculty.php">FACULTY</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="..\gpdaman\tranning&placment.php" aria-disabled="page">TRANING AND PLACEMENT</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            ACADEMIC
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="..\gpdaman\rule.php">ACADEMIC RULE</a></li>
                            <li><a class="dropdown-item" href="..\gpdaman\hostellife.php">HOSTEL LIFE</a></li>
                            <li><a class="dropdown-item" href="..\gpdaman\Academic-Calender-2021-22-Even.pdf" target="_blank">ACADEMIC CALENDER</a></li>
                            <li><a class="dropdown-item" href="..\gpdaman\Mandatory-disclosure-latest-.pdf" target="_blank">MANDATORY-DISCLOSURES</a></li>
                            <li><a class="dropdown-item" href="..\gpdaman\gallery.php">GALLERY</a></li>
                            <li><a class="dropdown-item" href="..\gpdaman\libary.php">LIBARY</a></li>
                            <li><a class="dropdown-item" href="#">NOTICE</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                EVENT
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">NSS ACTIVITIES</a></li>
                                <li><a class="dropdown-item" href="..\gpdaman\pdf\Sports-Week-Report.pdf" target="_blank">SPORT DAY</a></li>
                                <li><a class="dropdown-item" href="..\gpdaman\pdf\Annual-day-report.pdf" target="_blank">ANNUAL DAY</a></li>
                                <li><a class="dropdown-item" href="..\gpdaman\pdf\Navratri-Report-2021.pdf" target="_blank">NAVRATRI</a></li>
                                <li><a class="dropdown-item" href="..\gpdaman\pdf\ganpati-report.pdf" target="_blank">GANPATI CELEBRATION</a></li>
                                <li><a class="dropdown-item" href="..\gpdaman\pdf\liberation-day.pdf" target="_blank">LIBERATION DAY</a></li>
                            </ul>
                        </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#contact" aria-disabled="page">CONTACT US</a>
                    </li>

                    
                </ul>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login" type="button" style="border-radius:50px" ><a class="btn text-light"
                        href="#">LOGIN</a></button>

                    <button class="btn btn-primary" type="button" style="border-radius:50px"><a class="btn text-light"
                            href="..\gpdaman\apply.php">APPLY NOW</a></button>

                            
                </div>

            </div>
        </div>
    </nav>


<!------------------------signup model-------------------->

<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <a href="#" style="color:white; text-decoration:none " target="_blank"> Student Login </a></h5> 
          <h5 class="modal-title" id="exampleModalLabel"><a href="" style="color:white; margin:10px " >  </a> | </h5> 
          <h5 class="modal-title" id="exampleModalLabel"><a href="..\gpdaman\faculty\facultylogin.php" style="color:white; text-decoration:none; margin:5px" target="_blank"> Faculty Login </a></h5> 
          <h5 class="modal-title" id="exampleModalLabel"><a href="" style="color:white;  margin:10px " target="_blank">  </a>|</h5> 
          <h5 class="modal-title" id="exampleModalLabel"><a href="..\gpdaman\admin\adminlogin.php" style="color:white; text-decoration:none; margin:5px" target="_blank"> Admin Login </a></h5> 

          <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close" style="background-color:red"></button>
        </div>
        <div class="modal-body">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
      
                <label for="" class="text text-bold">Enter Student Enrollment No.</label>
                <input type="text" class="input" name="enrollment" placeholder="Enter Enrollment No." style="color:white; font-size:16px">
                <label for="" class="text-bold">Password</label>
                <input type="password" class="input" name="password" placeholder="Enter Password" style="color:white; font-size:16px">
            
                <input type="submit" name="login" class="btn1" value="Login">
               
         <div class="link">
                <a href="#"> Forget password?</a>
         </div>
            </form>
      </div>
    </div>
  </div>
</div>