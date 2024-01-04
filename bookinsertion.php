<html>
<body>
<?php
require('connect.php');
if(isset($_POST['sub']))
{
$name=$_POST['Book_name'];
$author=$_POST['Author'];
$publisher=$_POST['Publisher'];
$quantity=$_POST['Quantity'];
$prize=$_POST['Prize'];
$sql="insert into  librarymanagement(Book_name,Author,Publisher,Quantity,Prize)values('$name','$author','$publisher','$quantity','$prize')";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "New records successfully created";
}
mysqli_close($conn);
}
else
{
?>
<form align="center" method="POST" action="">
<fieldset>
	<h1><u>Book Details</u></h1>
	
	<label for="book_name">Book_name:</label>
	<input type="text" name="Book_name" id="book_name"><br><br>

	<label for="author">&nbsp;&nbsp;&nbsp;&nbsp;Author:</label>
	<input type="text" name="Author" id="author"><br><br>

	<label for="publisher">Publisher:</label>
	<input type="text" name="Publisher" id="publisher" maxlength=10><br><br>

	<label for="quantity">Quantity:</label>
	<input type="text" name="Quantity" id="quantity" ><br><br>
	
	<label for="prize">Prize:</label>
	<input type="text" name="Prize" id="prize"><br><br>

	<input type="submit" name="sub" id="sub" value="Submit">
	<input type="reset" name="rst" id="rst" value="Reset">
</fieldset>
<?php
}
?>
</form>
</body>
</html>