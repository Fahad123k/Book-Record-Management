<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$size=sizeof($_POST);
$records=$size/4;
for($i=1;$i<=$records;$i++)
{
	$Iindex="bookid".$i;
	$bookid[$i]=$_POST[$Iindex];
	$Tindex="title".$i;
	$title[$i]=$_POST[$Tindex];
	$Pindex="price".$i;
	$price[$i]=$_POST[$Pindex];
	$Aindex="author".$i;
	$author[$i]=$_POST[$Aindex];
}

for($i=1;$i<=$records;$i++)
{
	$qr="update book SET title='$title[$i]',price='$price[$i]',author='$author[$i]'
	 where bookid=$bookid[$i]";
	mysqli_query($con,$qr);
}
mysqli_close($con);
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>updation Form</title>
	</head>
	<body>
	<h1>Book Record Management </h1>
	<p>    <?php
				 echo "Record updated";
				  
			 ?> 
	</p>
	 Do you want to more update <a href="updateForm.php">Click here</a>
	</body>
	</html>