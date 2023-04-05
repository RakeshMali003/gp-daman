<?php


include('../connection/connection.php');

$id = $_GET['id'];

$deletequery = "DELETE FROM `assignment` WHERE sr_no = $id";

$query = mysqli_query($con , $deletequery);

if($query)
{
    header('location:assignment-upload.php');
}
?>