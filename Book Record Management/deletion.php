<?php


$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');



 if(isset($_POST["submit1"]))
 {
 	 $box=$_POST['num'];
 	 while (list($key,$val)=@each($box)) 
 	 {


 	 	 $q="delete  from book where bookid=$val";
		mysqli_query($con,$q);
 	 }
 ?>
	<script type="text/javascript">
		window.location.href=window.location.href;
	</script>
	
<?php
}




mysqli_close($con);
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Deletion process</title>
	</head>
	<body>
	<h1>Book Record Management </h1>
	
	 Do you want to more deletion <a href="deleteForm.php" >Click here</a>
	</body>
	</html>