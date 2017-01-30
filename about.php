<!DOCTYPE html>
<html>
<head>
	<title>About Me</title>
	<link rel="stylesheet" type="text/css" href="css/aboutstyle.css">
</head>
<body>
<div id="top">
</div>
<div id="head">
	
</div>

<div id="main">
  <?php
  include("includes/connect.php");
  $query = "select * from about";
  $run = mysqli_query($con,$query);
  while($rows=mysqli_fetch_array($run))
  {
       $title = $rows[''];
       $content = $rows[''];
       $image = $rows[''];
    
  ?>

    <?php echo $title; ?>
    <?php echo $content ; ?>
    <?php echo $image; ?>  
    Hey! My Name is Abhishek Barnwal . I'm pursuing my B.tech degree in jamia millia islamia in department of computer engineering
    I love to code and solve new problems . I like to face challenges . #include<stdio.h>
int main()
{
  int A[100],B[100],C[100],i,j,m,n;
  printf("enter the no of eleemts in A\n");
  scanf("%d",&n);
  printf("enter the elements in Array A\n");
  for(i=0;i<n;i++)
  {
    scanf("%d",&A[i]);
  }
  
    printf("enter the no of eleemts in B\n");
  scanf("%d",&m);
  printf("enter the elements in Array B\n");
  for(i=0;i<m;i++)
  {
    scanf("%d",&B[i]);
  }
  
  for(i=0;i<n;i++)
  {
    C[i]=A[i];
  }
  for(j=0;j<m;j++)
  {
    C[i]=B[j];
    i++;
  }
  printf("the matrix C is now\n");
  for(i=0;i<m+n;i++)
  {
  printf("%d   ",C[i]);
    }
  
}

<?php
  }
  ?>

</div>
<div id="side">
	
</div>
</body>
</html>