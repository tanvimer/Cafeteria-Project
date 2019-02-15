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
<td rowspan="15"align="center"><img src="Images\combosp.jpg" alt="sand" ></img></td>
<td><font style="font-family:segoe print;color:yellow;font-weight:bold;font-size:50pt;font-style:italics;">Combo Special</font></td>
<td> </td>
</tr>
<tr>
<td><font color="red">Executive Thali</font></td>
<td><font color="red">Rs 55</font></td>
</tr>
<tr>
<td><font color="red">Dal Makhni Combo</font></td>
<td><font color="red">Rs 40</font></td>
</tr>
<tr>
<td><font color="red">Paneer Lababdar Combo</font></td>
<td><font color="red">Rs 60</font></td>
</tr>
<tr>
<td><font color="red">Naan Combo</font></td>
<td><font color="red">Rs 50</font></td>
</tr>
<tr>
<td><font color="red"> Butter Chicken Combo</font></td>
<td><font color="red">Rs 100</font></td>
</tr>
<tr>
<td><font color="red">Veg Combo</font></td>
<td><font color="red">Rs 80</font></td>
</tr>
<tr>
<td><font color="red">Dal Makhni Combo </font></td>
<td><font color="red">Rs 70</font></td>
</tr>
</table>
</center>
<?php
include 'Connection.php';
?>
<form method="post" action="process.php">
<select name="name" action="new.php">
<option value="156">Executive Thali</option>
	<option value="157">Dal Makhni Combo</option>
	<option value="158">Paneer Lababdar Combo</option>
	<option value="159">Naan Combo</option>
	<option value="160">Cappuchinno</option>
	<option value="161">Butter Chicken Combo</option>
	<option value="162">Veg Combo</option>
	<option value="163">Dal Mkhni Combo</option>
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