<?php include("index.php"); ?>

<link rel="stylesheet" type="text/css" href="admin_style.css">
<div id="view">
<table width="1000" border="2" align="center">
<tr><td colspan="8" align="center"><h2>All Posts Here!</h2></td></tr>
  	<tr>
  		<th>Post No.</th>
  		<th>Post Title</th>
  		<th>Post Autor</th>
  		<th>Post Date</th>
  		<th>Post Image</th>
  		<th>Post Content</th>
  		<th>Edit Post</th>
  		<th>Delete Post</th>
  	</tr>
  	<?php
 include("includes/connect.php");
 $query="select * from posts";
 $run = mysqli_query($con,$query);
 $i=1;
 while($rows=mysqli_fetch_array($run))
 {
 	$id=$rows['post_id'];
 	$title=$rows['post_title'];
 	$content=substr($rows['post_content'],0,400);
 	$date=$rows['post_date'];
 	$author=$rows['post_author'];
 	$image=$rows['post_image'];

?>
     <tr align="center">
  		<td><?php echo $i++; ?></td>
  		<td><?php echo $title; ?></td>
  		<td width="100"><?php echo $author; ?></td>
  		<td width="100"><?php echo $date; ?></td>
  		<td><img src="../images/<?php echo $image; ?>" width="200" height="200"></td>
  		<td><?php echo $content; ?></td>
  		<td><a href="edit.php?id=<?php echo $id; ?>"> Edit Post</a></td>
  		<td><a href="delete.php?id=<?php echo $id; ?>"> Delete Post</a></td>
  	
</tr>
 <?php }
?>
</table>
</div>