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
<td rowspan="25"align="center"><img src="Images\lunch.jpg" alt="shakes" ></img></td>
<td><font style="font-family:bradley hand itc;color:yellow;font-weight:bold;font-size:50pt;font-style:italics;">Lunch Special</font></td>
<td> </td>
</tr>
<tr>
<td><font color="crimson">chana bhatura</font></td>
<td><font color="crimson">Rs 90</font></td>
</tr>
<tr>
<td><font color="crimson"> Masala Dossa </font></td>
<td><font color="crimson">Rs 50</font></td>
</tr>
<tr>
<td><font color="crimson">Paneer Lababdar</font></td>
<td><font color="crimson">Rs 50</font></td>
</tr>
<tr>
<td><font color="crimson">Butter Naan</font></td>
<td><font color="crimson">Rs 25</font></td>
</tr>
<tr>
<td><font color="crimson">Lacha Prontha</font></td>
<td><font color="crimson"> Rs 30</font></td>
</tr>
<tr>
<td><font color="crimson">omlet</font></td>
<td><font color="crimson">Rs 40</font></td>
</tr>
<tr>
<td><font color="crimson">Rajma Rice</font></td>
<td><font color="crimson">Rs 50</font></td>
</tr>
</table>
</center>
<?php
include 'Connection.php';
 ?>
<form method="post" action="process.php">
<select name="name">
	<option value="142">Chana Bhatura</option>
	<option value="143">Masala Dossa</option>
	<option value="144">Paneer Lababdar</option>
	<option value="145">Butter Naan</option>
	<option value="146">Lacha Prantha</option>
	<option value="147">Omlet</option>
	<option value="148">Rajma Rice</option>
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