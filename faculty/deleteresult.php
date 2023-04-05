<?php


include('../connection/connection.php');

$id = $_GET['id'];

$deletequery = "DELETE FROM `result` WHERE sr_no = $id";

$query = mysqli_query($con , $deletequery);

if($query)
{
    header('location:class-result.php');
}
?>