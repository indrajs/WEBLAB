<html>
<head>
<title>View All</title>
<style>
body
{
	background-image:url('library2.jpg');
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	color:black;
}
</style>
</head>
<body>
<big><b>
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
		echo "Book Name:".$row['Book_name']."<br>";
		echo "Author:".$row['Author']."<br>";
		echo "Publisher:".$row['Publisher']."<br>";
		echo "Quantity:".$row['Quantity']."<br>";
		echo "Prize:".$row['Prize']."<br><br>";
	}
}
mysqli_close($conn);
}
else
{
?>
</big></b>
<form method="POST" align="center">
<h2>Enter the Id of the book for Details:
<input type="text" name="txt1" ></h2><br>
<input type="submit" name="sub" value="Submit">
<?php
}
?>
</form>
</body>
</html>