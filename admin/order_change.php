<?php 
require_once 'connection.php';
require_once 'admin.php'; //Check login 

if(isset($_REQUEST['accept']))
{
	$id = $_REQUEST['accept'];

		$query3="UPDATE getorder SET status='Accepted' WHERE order_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"order.php\";</script>";
}
else if(isset($_REQUEST['reject']))
{
	$id = $_REQUEST['reject'];

		$query3="UPDATE getorder SET status='Reject'  WHERE order_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"order.php\";</script>";
}


 ?>