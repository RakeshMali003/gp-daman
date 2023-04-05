<?php


include('../connection/connection.php');

$id = $_GET['id'];

$deletequery = "DELETE FROM `attendence` WHERE sr_no = $id";

$query = mysqli_query($con , $deletequery);

if($query)
{
    header('location:student-attendance.php');
}
?>