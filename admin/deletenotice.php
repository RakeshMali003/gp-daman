<?php


include('../connection/connection.php');

$id = $_GET['id'];

$deletequery = "DELETE FROM `add_notice` WHERE Sr_no = $id";

$query = mysqli_query($con , $deletequery);

if($query)
{
    header('location:add notice.php');
}
?>