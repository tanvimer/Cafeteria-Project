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
<td rowspan="10" align="center"><img src="Images\shake.jpg" alt="sundae" height="300" width="400" ></img></td>
<tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:60pt;font-style:italics;"><u>Cold</u></font></td>
<td> </td>
</tr>
<tr>
<td>Cafe Frappe</td>
<td>Rs 40</td>
</tr>
<tr>
<td>Choco Frappe</td>
<td>Rs 40</td>
</tr>
<tr>
<td>Green Apple Soda</td>
<td>Rs 40</td>
</tr>
<tr>
<td>Cool Blue</td>
<td>Rs 40</td>
</tr>
<tr>
<td>Masala Lemonade</td>
<td>Rs 50</td>
</tr>
<tr>
<td>Mint Mojito</td>
<td>Rs 40</td>
</tr>
<tr>
<td>Strawberry Shake</td>
<td>Rs 30</td>
</tr>
<tr>
<td>Red Bull</td>
<td>Rs 30</td>
</tr>
</table>
</center>
<form method="post" action="process.php">
<select name="name">
	<option value="101">Cafe frappe</option>
	<option value="102">Choco frappe</option>
	<option value="103">Green Apple Soda</option>
	<option value="104">Cool Blue</option>
	<option value="105">CMasala Lemonade</option>
	<option value="106">Mint Mojito</option>
	<option value="107">Strawberry Shake</option>
	<option value="108">Red Bull</option>
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