Welcome:<font color="red" size="5">
<h2><?php echo $_SESSION['user_name']; ?></h2></font>
<h5>Manage Content</h5>

<ul>
	<li>
		<a href="view_post.php?view=view">View All Posts</a>
	</li>
	<li>
		<a href="index.php?insert=insert">Insert New Posts</a>
	</li>
	<li><a href="logout.php">Logout</a></li>
</ul>
