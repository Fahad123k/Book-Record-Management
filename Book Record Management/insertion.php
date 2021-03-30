<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect('localhost','root'); //connection id addres and database user name and password
mysqli_select_db($con,'brm_db'); // 1st pass connection object and database name like 
$q= "insert into book (title,price,author) values('$title',$price,'$author')";//Number not write into single coates
$status=mysqli_query($con,$q);
mysqli_close($con);
?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Insertion Form</title>
	</head>
	<body>
	<h1>Book Record Management </h1>
	<p>    <?php
				if($status==1) echo "Record inserted";
				else echo "Insertion Failed";  
			 ?> 
	</p>
	 Do you want to more insertion <a href="insertionForm.php">Click here</a>
	</body>
	</html>