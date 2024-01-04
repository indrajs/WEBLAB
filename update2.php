<html>
	<body>
	<form method="post"action="update2.php">
	<?php
	require('connect.php');
	if(isset($_POST['sub1']))
	{
	$id1=$_POST['id'];
	$bname=$_POST['Book_name'];
	$author=$_POST['Author'];
	$publisher=$_POST['Publisher'];
	$quantity=$_POST['Quantity'];
	$price=$_POST['Prize'];
	$sql = "UPDATE librarymanagement SET Book_name='$bname',Author='$author',Publisher='$publisher',Quantity='$quantity',Prize='$price' WHERE Id='$id1'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
	}
	?>
	</body>
</html>