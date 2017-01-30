<!DOCTYPE html>
<html>
<head>
	<title>Insert New Post</title>
</head>
<body>
<form action="insert_post.php" method="post" enctype="multipart/form-data">
	<table align="center" width="650" border="3">
		<tr>
			<td align="center" bgcolor="yellow" colspan="5"><h2>Insert New Post Here!</h2></td>
		</tr>
		<tr>
		<td align="right">Post Title:</td>
			<td width="100">
				<input type="text" name="title">
			</td>
		</tr>
		<tr>
			<td align="right">Post Author:</td>
			<td><input type="text" name="author"></td>
		</tr>
		<tr><td align="right">Post Image:</td>
		<td><input type="file" name="image"></td></tr>
		<tr>
			<td align="right">
				Post Content:
			</td>
			<td><textarea name="content" rows="20" cols="60" ></textarea></td>
		</tr>
		<tr>
			<td colspan="5" align="center">
				<input type="submit" name="submit" value="Publish Now!">
			</td>
		</tr>
	</table>
</form>
</body>
</html>


<?php
include("includes/connect.php");

if(isset($_POST['submit']))
{
	 $title = $_POST['title'];
	 $author = $_POST['author'];
   
	 $image_name = $_FILES['image']['name'];
	 $image_type= $_FILES['image']['type'];
	 $image_size = $_FILES['image']['size'];
	 $image_tmp=$_FILES['image']['tmp_name'];
	 $content = $_POST['content'];
	 $date = date('d/m/y');

	  if($title=='' or $author == '' or $content=='')
	  {
	  	echo "<script>alert('Any Field is empty')</script>";
	  	exit ();
	  	
	  }

	  
	  if($image_type=="image/jpeg" or $image_type=="image/png" or $image_type=="image/gif" )
	  {	
	  move_uploaded_file($image_tmp, "../images/$image_name");
	  }
	  else
	  {
	  	echo "image is of the format of jpeg/png/gif";
	  }

	  	
	 echo $query = "insert into posts (post_title,post_date,post_author,post_image,post_content) values ('$title','$date','$author','$image_name','$content')";
	  if(mysqli_query($con,$query))
	  {
	  	echo "<script>window.open('index.php?publish=A Post has Been Published','_self')</script>";
	  }
	  else
	  {
	  	echo  "<script>window.open('index.php?publish=Your Post has Not Been Published','_self')</script>";
	    
	  }
}

?>