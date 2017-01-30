<?php
$id=$_GET['id'];
include("includes/connect.php");
$query="delete from posts where post_id = '$id'";
if( mysqli_query($con,$query))
{
	echo "<script>window.open('index.php?delete=Post Has Been Deleted','_self')</script>";
}


?>