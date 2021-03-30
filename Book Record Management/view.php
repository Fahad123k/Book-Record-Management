<?php

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'brm_db');
$q="select * from book";
$result=mysqli_query($con,$q);//coonection obeject and query objectand return associatve 2D-array
$num=mysqli_num_rows($result);

mysqli_close($con);
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>View Book Records</title>

		<link rel="stylesheet" type="text/css" href="./css/view.css" >
	</head>
	<body>
	<h1>Book Record Management </h1>
	 <a href="./brm/myHome.php" > GoHome</a> <br>
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

				<td><?php echo $row['bookid']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['author']; ?></td>
			</tr>

			<?php
		}
		?>
	
	</table>

	</body>
	</html>
