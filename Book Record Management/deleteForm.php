<?php

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'brm_db');
$q="select * from book";
$result=mysqli_query($con,$q);//coonection obeject and query objectand return associatve 2D-array
$num=mysqli_num_rows($result);

?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Delete Book Records</title>

		<link rel="stylesheet" type="text/css" href="./css/view.css" >
	</head>
	<body>
	<h1>Book Record Management </h1>
	 <a href="./myHome.php" > GoHome</a> <br>
	 <form action="" method="post">
	<table id="tableCss">
		<tr>
			<th class="headTable" >Book-Id</th>
			<th class="headTable">Title</th>
			<th class="headTable">Price</th>
			<th class="headTable">Author</th>
			<th class="headTable"> Select to delete</th>
		</tr>
		<?php
		for($i=1;$i<=$num;$i++)
		{
			$row=mysqli_fetch_array($result);// fetch first 1D-array
			?>
			<tr>

				<td><?php echo $row['bookid']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['author']; ?></td>
				<td><input type="checkbox"  value="<?php echo $row['bookid']; ?>" name="num[]"</td>
			</tr>


			<?php
		}
		?>
		<tr >
			<td colspan="5"> <input type="submit" value="Delete"/ name="submit1"> </td>
		</tr>
	
	</table>
	<?php
	if($num==0)
	echo "Record is empty";
{
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
}







mysqli_close($con);
?>
	
	
	</form>
	</body>
	</html>
