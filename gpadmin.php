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
    <link rel="stylesheet" href="..\gpdaman\style.css">




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

    <!-----------------------------------------end javascript table link ---------------------------------------->

    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
 <a class="navbar-brand" style="font-weight: bold; font-size: 25px; color:orange" href="#"><img
                    src="..\gpdaman\photo\gpd_logo.jpg" style="height: 50px; width: 70px; margin:10px 10px; "> GP DAMAN<br></a>
            <a class="nav-link active" href="..\gpdaman\reportofapply.php" aria-disabled="page">Application of student</a>
            <a class="nav-link active" href="..\gpdaman\addnotice.php" aria-disabled="page">Add Notice</a>
            <a class="nav-link active" href="..\gpdaman\enquiry.php" aria-disabled="page">Enquairy detail</a>

        </div>