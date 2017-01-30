<!DOCTYPE html>
<html>
<head>
	<title>India PM</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="top">
<?php
include("includes/top.php");
?>
</div>

<div id="header">
<?php
include("header.php");
?>
</div>

<div id="cont">

<div id="navbar">
<?php 
include("includes/nav.php");
?>
</div>


<!--This is sidebar-->

<?php
include("includes/sidebar.php");
?>


<div id="main_post">
<?php
include("includes/main_post.php");
include("includes/connect.php");
$id=$_GET['id'];
$query="select * from posts where post_id = '$id'";
$run= mysqli_query($con,$query);
while($rows=mysqli_fetch_array($run))
{
  $id = $rows['post_id'];
  $title=$rows['post_title'];
  $content=$rows['post_content'];
  $date=$rows['post_date'];
  $author=$rows['post_author'];
  $image = $rows['post_image'];
?>

<h2>
<?php echo $title; ?>
</h2>
<br>

<center><img src="images/<?php echo $image; ?>" width="600"></center>
<p align="justifying">
<?php echo $content; ?>
</p>

<p align="right">
Posted By: &nbsp;&nbsp;
<?php echo "$author"; ?> 
</p>
<p align="right"> 
Published on: &nbsp;&nbsp;
<?php   echo $date; ?>
</p>


<?php
}
?>


</div>

<div id="foot">
<?php include("includes/footer.php"); ?>
</div>


</div>

</body>
</html>