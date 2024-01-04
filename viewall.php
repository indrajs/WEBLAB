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
<big>
<?php
require('connect.php');
$sql="select * from librarymanagement";
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
else
{
	echo "No Results";
}
mysqli_close($conn);
?>
</big>
</body>
</html>