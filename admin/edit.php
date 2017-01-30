<?php   
include("index.php");
include("includes/connect.php");
$edit_id=@$_GET['id'];
$query = "select * from posts where post_id = '$edit_id'";
$run=mysqli_query($con,$query);
while($rows=mysqli_fetch_array($run))
{
  $edit_id1=$rows['post_id'];
	$title=$rows['post_title'];
	$content=$rows['post_content'];
	$author=$rows['post_author'];
	$date=$rows['post_date'];
	$image=$rows['post_image'];
	?>
       <form action="edit.php?edit_form=<?php echo $edit_id1; ?>" method="post" enctype="multipart/form-data">
       <table width="800" border="2" align="center" bgcolor="yellow" >
      <tr>
      <td colspan="2" align="center"><h2>Updating Post</h2></td>
      </tr>
       <tr> 
       <td align="right" width="100">Id No.</td>
  		<td align="center"><input type="text" name="id" value="<?php echo $edit_id1; ?>"></td>
      
      </tr>
      <tr>
      <td align="right" width="100">Page Title</td>
  		<td align="center"><input type="text" name="title" value="<?php echo $title; ?>"></td></tr>
      <tr>
      <td align="right">Page Author</td>
  		<td width="100" align="center"><input type="text" name="author" value="<?php echo $author; ?>"></td>
  		</tr>
      <tr>
      <td align="right">Page Date</td>
      <td align="center">
      <input type="text" name="date" value="<?php echo $date; ?>">
      </td>
  		</tr>
      <tr>
      <td align="right">Post Image:</td>
      <td align="center">
      <img src="../images/<?php echo $image; ?>"  width="200" height="200">
      <p><input type="file" name="image" ></p>
      </td>
  		</tr>
      <tr>
      <td align="right">Post Content:</td>
      <td align="center"><textarea name="content" rows="20" cols="70">
      <?php echo $content; ?>">
        
      </textarea></td>
  	</tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="update" value="Update"></td>
    </tr>
  	<?php 
    }
     ?>
  	</table>
    </form>
  

   <?php
    include("includes/connect.php");
    if(isset($_POST['update']))
    {
      $update_id=$_GET['edit_form'];
      $post_title=$_POST['title'];
      $post_date=date('y-m-d');
     
       $post_author=$_POST['author'];
      $post_content=$_POST['content'];
      $post_image = $_FILES['image']['name'];
     $post_image_type= $_FILES['image']['type'];
     $post_image_size = $_FILES['image']['size'];
     $post_image_tmp=$_FILES['image']['tmp_name'];
    


    ?>
<?php
 move_uploaded_file($post_image_tmp,"/images/$post_image/");
      
       echo $query = "update  posts set post_title='$post_title',post_date='$post_date',post_author='$post_author',post_image = '$post_image',post_content='$post_content'  where post_id=$update_id";
        if(mysqli_query($con,$query))
        {
          echo "<script>window.open('edit.php?update=Your Post Has been Updated!','_self')</script>";
       }
       else
       {
        echo("not updated");
       }

}    

    ?>