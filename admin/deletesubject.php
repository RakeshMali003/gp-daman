<?php


$server = "localhost";
$username = "root";
$password = "";
$db = "gpdaman";
$con = mysqli_connect($server, $username , $password , $db);

$id = $_GET['id'];

$deletequery = "DELETE FROM `sms` WHERE sr_no = $id";

$query = mysqli_query($con , $deletequery);

if($query)
{
    header('location:subject.php');
}
?>