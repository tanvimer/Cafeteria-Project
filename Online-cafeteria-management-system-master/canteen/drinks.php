<!DOCTYPE html>
<html>
<head>
<style type="text/CSS" media="all">
table{
font-weight:bold;
font-size:20pt;
margin-top:50px;
margin-left:0px;
}

</style>
</head>
<body background="Images\back4g.jpg">
<center>
<table width="100%" border="0px">
<tr>
<td rowspan="15"align="center"><img src="Images\drink.jpg" alt="meals" ></img></td>
<td><font style="font-family:segoe print;color:blue;font-weight:bold;font-size:50pt;font-style:italics;">Drinks</font></td>
<td> </td>
</tr>

<tr>
<td ><font color="crimson">Fruit Beer</font></td>
<td><font color="crimson">Rs 30</font></td>
</tr>
<tr>
<td><font color="crimson">Energy Drink</font></td>
<td><font color="crimson">Rs 110</font></td>
</tr>
<tr>
<td><font color="crimson">red bull</font></td>
<td><font color="crimson">Rs 110</font></td>
</tr>
<tr>
<td><font color="crimson">Mineral Water</font></td>
<td><font color="crimson">Rs 20</font></td>
</tr>
<tr>
<td><font color="crimson">Juice</font></td>
<td><font color="crimson">Rs 20</font></td>
</tr>
<tr>
<td><font color="crimson">Flavoured Milk</font></td>
<td><font color="crimson">Rs 20</font></td>
</tr>
<tr>
<td><font color="crimson">Patiala Lassi Sweet</font></td>
<td><font color="crimson">Rs 30</font></td>
</tr>

</table>
</center>
<?php
include 'Connection..php';
 ?>
<form method="post" action="process.php">
<select name="name">
	<option value="149">Fruit Beer</option>
	<option value="150">Energy Drink</option>
	<option value="151">Red Bull</option>
	<option value="152">Mineral Water</option>
	<option value="153">Juice</option>
	<option value="154">Flavoured Milk</option>
	<option value="155">Patiala Lassi Sweet</option>
</select>
<select name="quantity">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
<input type="submit" name="submit">
</form>
</body>
</html>
