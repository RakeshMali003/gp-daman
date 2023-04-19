<?php


include('../connection/connection.php');

$id = $_GET['id'];

$deletequery = "DELETE FROM `faculty_time_table` WHERE ttid = $id";

$query = mysqli_query($con , $deletequery);

if($query)
{
    header('location:time-table.php');
}
?>