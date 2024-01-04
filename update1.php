<html>
<head>
</head>
<body>
<form method="post"action="update2.php">
<?php
require('connect.php');
if(isset($_POST['sub']))
{
$id=$_POST['txt1'];
$sql="select * from librarymanagement where Id=$id";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "ID:"."<input type='text' name='id' value=".$row['id']."><br>";
		echo "Book Name:"."<input type='text' name='Book_name' value=".$row['Book_name']."><br>";
		echo "Author:"."<input type='text' name='Author' value=".$row['Author']."><br>";
		echo "Publisher:"."<input type='text' name='Publisher' value=".$row['Publisher']."><br>";
		echo "Quantity:"."<input type='text' name='Quantity' value=".$row['Quantity']."><br>";
		echo "Prize:"."<input type='text' name='Prize' value=".$row['Prize']."><br><br>";
	}
}
mysqli_close($conn);
}
?>
<input type="submit" name="sub1" value="Update">
</form>
</body>
</html>