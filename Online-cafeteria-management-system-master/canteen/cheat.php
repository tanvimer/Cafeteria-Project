<!DOCTYPE html>
<?php include 'Connection.php';
 ?>
<html>
<head>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/BDC9DC88-81A6-B644-B3C9-79A9416AF5A9/main.js" charset="UTF-8"></script><style type="text/CSS" media="all">
table{
font-weight:bold;
font-size:20pt;
margin-top:50px;
margin-left:0px;
}
</style>
</head>
<body background="Images\rustic (1).jpg">
<center>
<table width="100%" border="0px">
<tr>
<td rowspan="15"align="center"><img src="Images\cheat.jpg" alt="meals" ></img></td>
<td><font style="font-family:segoe print;color:blue;font-weight:bold;font-size:50pt;font-style:italics;">Cheat Day Specials</font></td>
<td> </td>
</tr>
<tr>
<td ><font color="crimson">Crispy Corn Nachos Chaat</font></td>
<td><font color="crimson">Rs 120</font></td>
</tr>
<tr>
<td><font color="crimson">Mozzarella Cheese Sticks</font></td>
<td><font color="crimson">Rs 120</font></td>
</tr>
<tr>
<td><font color="crimson">Falafel</font></td>
<td><font color="crimson">Rs 120</font></td>
</tr>
<tr>
<td><font color="crimson">Vegetarian Dimsum Gravy</font></td>
<td><font color="crimson">Rs 120</font></td>
</tr>
<tr>
<td><font color="crimson">Chicken Nachos Chaat</font></td>
<td><font color="crimson">Rs 150</font></td>
</tr>
<tr>
<td><font color="crimson">Chicken Dimsum Gravy</font></td>
<td><font color="crimson">Rs 150</font></td>
</tr>
<tr>
<td><font color="crimson">Chicken Strips/Wings</font></td>
<td><font color="crimson">Rs 110/200/380</font></td>
</tr>
</table>
</center>
<form method="post" action="process.php">
<select name="name">
	<option value="27">Crispy Corn Nachos Chaat</option>
	<option value="28">Mozzarella Cheese Sticks</option>
	<option value="29">Falafel</option>
	<option value="30">Vegetarian Dimsum Gravy</option>
	<option value="31">Chicken Nachos Chaat</option>
	<option value="32">Chicken Dimsum Gravy</option>
	<option value="33">Chicken Strips/wings</option>
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