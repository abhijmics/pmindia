<?php
    include("includes/connect.php");
    if(isset($_POST['submit']))
    {
      $id=$_POST['id'];
      $title=$_POST['title'];
      $date=$_POST['date'];
      $image=$_POST['image'];
      $author=$_POST['author'];
      $content=$_POST['content'];


      echo $query = "insert into posts (post_title,post_date,post_image,post_author,post_content) values(,'$title','$date','$image','$author','$content') where post_id = '$id'";
      if(mysqli_query($con,$query))
        {
          echo "<script>window.open('index.php?update=Your Post Has been Updated!','_self')</script>";
       }
       else
       {
        echo("not updateed");
       }

    }

    ?>