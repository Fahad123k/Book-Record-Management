<?php

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'brm_db');
$q="select * from book";
$result=mysqli_query($con,$q);//conection obeject and query object and return associatve 2D-array
$num=mysqli_num_rows($result);

mysqli_close($con);
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Update Book Records</title>

		<link rel="stylesheet" type="text/css" href="./css/view.css" >
	</head>
	<body>
	<h1>Book Record Management </h1>
	 <form action="updation.php" method="post">
	 <a href="./myHome.php" > GoHome</a> <br>
	<table id="tableCss">
		<tr>
			<th class="headTable" >Book-Id</th>
			<th class="headTable">Title</th>
			<th class="headTable">Price</th>
			<th class="headTable">Author</th>
		</tr>
		<?php
		
		 for($i=1;$i<=$num;$i++)
		{
			$row=mysqli_fetch_array($result);// fetch first 1D-array
			?>
			<tr>


				<td><?php echo $row['bookid'];?><input type="hidden" value="<?php echo$row['bookid']?>" name="bookid<?php echo$i?>"></td>
				<td><input type="" name="title<?php echo$i ?>" value="<?php echo $row['title']; ?>"></td>
				<td><input type="" name="price<?php echo$i?>" value="<?php echo $row['price']; ?>"></td>
				<td><input type="text" name="author<?php echo$i ?>" value="<?php echo $row['author']; ?>"></td>
			</tr>

			<?php
		}
		?>
	
	</table>
<input type="submit" name="submit2" value="Update">
		 </form>
	</body>
	</html>
