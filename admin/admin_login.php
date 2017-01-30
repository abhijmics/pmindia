<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
<form action="admin_login.php" method="post">
	<table width="400" align="center" border="20">
		<tr>
			<td colspan="5" align="center" bgcolor="blue"><h1>Admin Login</h1></td>
		</tr>
		<tr>
			<td align="right">User Name:</td>
			<td><input type="text" name="user_name"></td>
		</tr>
		<tr>
		<td align="right">Password:</td>
		<td><input type="Password" name="user_pass">
		</td>
         </tr>
		<tr>
			<td colspan="5" align="center"><input type="submit" name="login" value="Login"></td>
		</tr>
	</table>
</form>
</body>
</html>

<?php
include("includes/connect.php");
if(isset($_POST['login']))
{
	$user_name=mysqli_real_escape_string($con,$_POST['user_name']);
	$user_pass=mysqli_real_escape_string($con,$_POST['user_pass']);
	$encrypt = md5($user_pass);
    $login_query = "select * from admin_login where user_name='$user_name' AND user_pass = '$user_pass'";
  $run = mysqli_query($con,$login_query);
   if(mysqli_num_rows($run)>0)
   {
   	$_SESSION['user_name']=$user_name; 
   	echo "<script>window.open('index.php','_self')</script>";
   }

   else
   {
   	echo "<script>alert('username or password are incorrect')</script>"; 
   }
} 

?>