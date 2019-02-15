<?php
include 'Connection.php'; ?>
<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$quantity=$_POST['quantity'];
	echo $name;
    $query = "SELECT * FROM tblproduct WHERE id=$name";
	$query = $db->query($query);
	$row = $query->fetch_assoc();
	$price = $row['price'];
	$name = $row['name'];
	$num = 1;
	$final_price = $price*$quantity;
	$query = "INSERT INTO bill (name ,price ,number) values ('$name','$final_price','$num')";
	$query = $db->query($query);
	header('Location: final.php');
 }
 ?>