<!DOCTYPE html>
<?php include 'Connection.php';
 ?>
<html>
<head>
	<title></title>
</head>
<body>
<form action="add.php" method="post">
Name : <input type="text" name="name" placeholder="Enter Product"><br>
Price :<input type="number" name="price" placeholder="Enter price"> <br>
<input type="submit" name="submit">
<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
    $price = $_POST['price'];
	if ($name !=  "" && $price != "") {
	    $query = "INSERT INTO tblproduct (name,price) VALUES ('$name','$price')";
	    $query = $db->query($query);
    }
}
 ?>
</form>
</body>
</html>