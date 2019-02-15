<?php
include 'Connection.php';
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	echo $name;
}
$query = 'SELECT * FROM bill';
$query = $db->query($query);
while($row = $query->fetch_array()): ?>
	<span style="color: blue;"><?php echo $row['name']; ?></span>:
 <?php endwhile;
$query = 'SELECT SUM(price) FROM bill';
$query = $db->query($query);
$row = $query->fetch_assoc();
$cost = $row['SUM(price)'];
echo "Your Order Cost:Rs";
echo $cost;
echo "<center><h1>Thank You for visiting us</h1></center>";
?>