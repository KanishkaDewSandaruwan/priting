<?php 
require_once 'connection.php';
require_once 'user.php';
session_start();


$g = $_SESSION['customer_id'];

	$query3="DELETE FROM getorder WHERE customer_id='$g'";
    mysqli_query($con,$query3);

    $query2="DELETE FROM customer WHERE customer_id='$g'";
    mysqli_query($con,$query2);

	header('location:logout.php');
 ?>