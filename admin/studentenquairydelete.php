<?php


include('../connection/connection.php');

$id = $_GET['id'];

$deletequery = "DELETE FROM `studentenquiry` WHERE sr_no = $id";

$query = mysqli_query($con , $deletequery);

if($query)
{
    header('location: student-enquairy-details.php');
}
?>