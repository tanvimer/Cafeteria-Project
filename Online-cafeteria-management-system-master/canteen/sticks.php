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
<body background="Images\backice.jpg">
<center>
<table width="100%" >
<tr>
<td rowspan="8"align="center"><marquee direction="up" height="50%"></marquee></td>
<tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:60pt;font-style:italics;"><u>Block Buster Sticks</u></font></td>
<td> </td>
</tr>
<tr>
<td>Pink Currant</td>
<td>Rs 50</td>
</tr>
<tr>
<td>Mango Strawberry</td>
<td>Rs 50</td>
</tr>
<tr>
<td>Mango Magic</td>
<td>Rs 50</td>
</tr>
<tr>
<td>Almond Mocha</td>
<td>Rs 50</td>
</tr>
<tr>
<td>Choco Truffle</td>
<td>Rs 60</td>
</tr>
<tr>
<td>Zulu Bar</td>
<td>Rs 40</td>
</tr>
</table>
</center>
<form method="post" action="process1.php">
<select name="name">
	<option value="68">Pink Currant</option>
	<option value="69">Mango Strawberry</option>
	<option value="70">MAngo Magic</option>
	<option value="71">Almond Mocha</option>
	<option value="72">Choco truffle</option>
	<option value="73">Zulu Bar</option>
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
</select>
</form>
</form>
</body>
</html>