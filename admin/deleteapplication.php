<?php


include('../connection/connection.php');

$id = $_GET['id'];

$deletequery = "DELETE FROM `admissionform` WHERE sr_no = $id";

$query = mysqli_query($con , $deletequery);

if($query)
{
    header('location: application.php');
}
?>