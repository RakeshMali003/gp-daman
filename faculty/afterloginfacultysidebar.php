<?php

session_start();

if(!isset($_SESSION['email'])){
    ?> 

<script>
location.href='../faculty/facultylogin.php';
</script>

<?php
}


?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../sidebar.css">

  
  <link rel="stylesheet" href="..\bootstrap-5.0.0-beta2-dist\css\bootstrap.min.css">
    <script src="..\bootstrap-5.0.0-beta2-dist\js\bootstrap.min.js"></script>

    <!-----------------------------------end bostrap file ---------------------------------------------->


    <!--------------------------------------fontawesome----------------------------->
    <link rel="stylesheet" href="..\fontawesome-free-6.1.1-web\css\fontawesome.min.css">
    <script src="..\fontawesome-free-6.1.1-web\js\fontawesome.min.js"></script>

    <!-- font ausome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!---------------------------------------end fontawesome----------------------->

  <title></title>

  
    <!-----------------------------------------javascript table link ---------------------------------------->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>


    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    

  <title>Responsive Sidebar Navigation | CodyHouse</title>
</head>

<style>
  .para{
    float:left;
    color:#4e22a1ba;
  }
  th{
    width:200px;
    font-weight:bold;
margin:20px;
  }
</style>



<body>
  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <h4 style="font-weight: bold; font-size: 25px; color:orange">GP DAMAN</h4>
    </div>
    
    <div class=" js-cd-search">
      <form>

      </form>
    </div>
  
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>
  

    <ul class="cd-nav__list js-cd-nav__list">

      
          <span><a href="../faculty/faculty-logout.php">Logout</a></span>
       
    
     
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav" style="background-color:black;font-size:19px">
      <ul class="cd-side__list js-cd-side__list">


        <li class="cd-side__item cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">
          <a href="../faculty/facultydashboard.php">Dashboard</a>
          
      
        </li>
    
        <li class="cd-side__item  js-cd-item--has-children">
          <a class="nav-link active" href="../faculty/faculty-profile.php" aria-disabled="page">Profile</a>
        </li>

        <li class="cd-side__item cd-side__item--overview js-cd-item--has-children">
          <a class="nav-link active" href="../faculty/class-attendance.php" aria-disabled="page">Class attendance</a>
        </li>

        <li class="cd-side__item cd-side__item--overview js-cd-item--has-children">
          <a class="nav-link active" href="../faculty/class-result.php" aria-disabled="page">Class Result</a>
        </li>

        <li class="cd-side__item cd-side__item--overview js-cd-item--has-children">
          <a class="nav-link active" href="../faculty/assignment-upload.php" aria-disabled="page">Upload Assignment</a>
        </li>

        
        <li class="cd-side__item cd-side__item--overview js-cd-item--has-children">
          <a class="nav-link active" href="../faculty/tutorial-upload.php" aria-disabled="page">Upload Tutorial</a>
        </li>
        
        <li class="cd-side__item cd-side__item--overview js-cd-item--has-children">
          <a class="nav-link active" href="../faculty/syllabus.php" aria-disabled="page">Syllabus</a>
        </li>

     

        <li class="cd-side__item cd-side__item--overview js-cd-item--has-children">
          <a class="nav-link active" href="../faculty/prequestionpaper.php" aria-disabled="page">Upload Pre-Question Paper</a>
        </li>

        <li class="cd-side__item cd-side__item--overview js-cd-item--has-children">
          <a class="nav-link active" href="../faculty/academic-calender.php" aria-disabled="page">Academic calender</a>
        </li>

        <li class="cd-side__item cd-side__item--overview js-cd-item--has-children">
          <a class="nav-link active" href="../faculty/add notice.php" aria-disabled="page">Share Notice</a>
        </li>
        </ul>

        
    
    

       



    </nav>
  
    <div class="cd-content-wrapper">
      <div class="text-component text-center">
      
