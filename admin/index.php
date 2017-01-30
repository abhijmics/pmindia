 <!DOCTYPE html>
 <?php
 session_start();

 if(!isset($_SESSION['user_name']))
 {
 	header("location:admin_login.php");
 
  }
 
 ?>



 <html>
 <head>
 	<title>Admin Home Page</title>
 	<link rel="stylesheet" type="text/css" href="admin_style.css">
 </head>
 <body>
 <header>

 	<h1>Welcome to Admin Panel</h1>
 </header>
 <center><h1><?php echo @$_GET['publish'] ;?></h1></center>
<aside>
	<?php include("aside.php"); ?>
</aside>

 <center><h1><?php echo @$_GET['delete']; ?></h1></center>
  <center><h1><?php echo @$_GET['update']; ?></h1></center>


 </body>
 </html>




<?php

if(isset($_GET['insert']))
{
	include("insert_post.php");
}

?>

