
	<!DOCTYPE html>
	<html>
	<head>
		<title>Insertion Form</title>
	</head>
	<body>
	<h1>Book Record Management </h1> <a href="./myHome.php" > GoHome</a>
	<form action="Insertion.php" method="post">
		<table>
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" placeholder="Enter title" required="true"/> </td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" placeholder="Enter price" required="true"/> </td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="author" placeholder="Enter Author" required="true"/> </td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="Insert" required="true"/> </td>
			</tr>
		</table>
		
	</form>
	</body>
	</html>