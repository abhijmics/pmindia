<!DOCTYPE html>
<html>
<head>
	<title>Abhishek Barnwal</title>
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


<?php 
include("includes/nav.php");
?>



<!--This is sidebar-->

<?php
include("includes/sidebar.php");
?>

<div id="main_post">
<form action="contact.php" method="post">
  <table align="center" widht="600">
    <tr>
     <td align="center" colspan="15"><h2>Contact Us</h2></td>
    </tr>
    <tr>
      <td align="right"><strong>Your Email:</strong></td>
      <td><input type="Email" name="email"></td>
    </tr>
    <tr>
      <td align="right"><strong>Subject:</strong></td>
      <td><input type="text" name="subject"></td>
    </tr>
    <tr>
      <td align="right"><strong>Message:</strong></td>
      <td><textarea rows="12" cols="20" name="message"></textarea></td>
    </tr>
    <tr>
      <td align="center" colspan="8">
        <input type="submit" name="submit" value="Send">
      </td>
    </tr>
  </table>
</form>

<?php

if(isset($_POST['submit']))
{
$sender_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "abhishekbarnwal195@gmail.com";
$message = "Email From:".$message;

if($sender_email=='' or $subject=='' or $message=='')
{
echo "<script>alert('Please fill all the fields')</script>";
exit ();
}
mail($to,$subject,$message,$sender_email);

$to_sender = $_POST['email'];

$sub = "Abhishek Barnwal";
$mesg = "Thank you for feedback we will get you soon ";

$from = "abhishekbarnwal195@gmail.com";

mail($to_sender,$sub,$mesg,$from);

 echo "<center><h2>Email Sent,Get to you soon</h2></center>";
}
?>







</div>

<div id="foot">
<?php include("includes/footer.php"); ?>
</div>


</div>

</body>
</html>