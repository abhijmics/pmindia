<div id="sidebar">


<center><h2>Follow Us</h2></center>
<span class='st_sharethis_large' displayText='ShareThis'></span>
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_email_large' displayText='Email'></span>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" id="st_insights_js" src="http://w.sharethis.com/button/buttons.js?publisher=291287aa-680c-4e59-8015-208ba10ac98f">
</script>





<div id="email_box">
<!-- Email subscription box-->
<h2>Subscribe via Email</h2>
<form style=" solid #ccc; padding: 3px;text-align: center;" action="http:feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit=
"winodw.open('google.co.in','popupwindow','scrollbars=yes,width=550,height=520 ');
return true">
<p>
	Enter your email address:
</p>
<p>
<input type="text" style="width:160px" name="email" />
</p>
<input type="submit" value="Subscribe" />
</form>

<center>
<h2>Recently Posted</h2>
<?php
include("includes/connect.php");
$query = "select * from posts order by 1 desc limit 0,9";
$run = mysqli_query($con,$query);
while($rows=mysqli_fetch_array($run))
{
	 $id =$rows['post_id'];
	 $title = $rows['post_title'];
	 $image = $rows['post_image'];
?>
<a href="pages.php?id= <?php $id ; ?>">
<br>
<img src="images/<?php echo $image ; ?>" width="150" height="150">;
</a>

<h2>
<a href="pages.php?id=<?php echo $id;  ?>"><?php echo $title ; ?>
</a> 
</h2>

<?php
}
?>
</center>
</div>
</div>