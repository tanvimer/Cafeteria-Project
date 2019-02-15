<!DOCTYPE html>
<?php include 'Connection.php';
 ?>
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
<body background="Images\back4.jpg" text="white">
<center>
<table width="100%" >
<tr>
<td rowspan="15" align="center"><img src="Images\straw.jpg" alt="sundae" height="300" width="400" ></td>
<tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:60pt;font-style:italics;"><u>Big Eats</u></font></td>
<td> </td>
</tr>

<tr>
<td>Paneer Sandwich</td>
<td>Rs 49</td>
</tr>
<tr>
<td>Chicken Sandwich</td>
<td>Rs 59</td>
</tr>
<tr>
<td>Potato Puff</td>
<td>Rs 20</td>
</tr>
<tr>
<td>Veg Franky</td>
<td>Rs 50</td>
</tr>
<tr>
<td>Brownie</td>
<td>Rs 40</td>
</tr>
<tr>
<td>Chocolate Chip Cookies</td>
<td>Rs 20</td>
</tr>
<tr>
<td>Oatmeal Cookies</td>
<td>Rs 20</td>
</tr>
<tr>
<td>Black Forest Pastry</td>
<td>Rs 45</td>
</tr>
<tr>
<td>Chocolate Fantasy</td>
<td>Rs 55</td>
</tr>
<tr>
<td>Sizzle Dizzle Brownie</td>
<td>Rs 80</td>
</tr>
<tr>
<td>Black Forest Cake</td>
<td>Rs 350</td>
</tr>
<tr>
<td>Chocolate Cake</td>
<td>Rs 250</td>
</tr>
</table>
</center>
<?php
include 'Connection.php';
 ?>
<form method="post" action="process.php">
<select name="name">
	<option value="109">Paneer Sandwich</option>
	<option value="110">Chicken Sandwich</option>
	<option value="111">Potato Puff</option>
	<option value="112">Veg Frankie</option>
	<option value="113">Brownie</option>
	<option value="114">Black Forest Cake</option>
	<option value="115">Chocolate Cake</option>
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