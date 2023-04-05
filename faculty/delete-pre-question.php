<?php


include('../connection/connection.php');

$id = $_GET['id'];

$deletequery = "DELETE FROM `pre-question-paper` WHERE sr_no = $id";

$query = mysqli_query($con , $deletequery);

if($query)
{
    header('location:prequestionpaper.php');
}
?>