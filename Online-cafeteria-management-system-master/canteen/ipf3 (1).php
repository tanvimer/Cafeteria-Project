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
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/BDC9DC88-81A6-B644-B3C9-79A9416AF5A9/main.js" charset="UTF-8"></script></head>
<body background="hav-back.jpg">
<center>
<table width="100%" >
<tr>
<td rowspan="11"align="center"><img src="C:\Users\laptop\Desktop\download.jpg" alt="Drinks" ></img></td>
<tr>
<td><font style="font-family:Anivers ;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Refreshments</font></td>
<td> </td>
</tr>
<tr>
<td>Soya Milk Packet</td>
<td>Rs20</td>
</tr>
<tr>
<td>Cold Drinks</td>
<td>Rs35</td>
<tr>
<td>Real Juice</td>
<td>Rs20</td>
</tr>
<tr>
<td>Fruit Beer</td>
<td>Rs30</td>
</tr>
<tr>
<td>Flavoured Milk</td>
<td>Rs20</td>
</tr>
<tr>
<td>Mineral Water</td>
<td>Rs20</td>
</tr>
<tr>
<td>Patiala Lassi</td>
<td>Rs40</td>
</tr>
<tr>
<td>Patiala Lassi Flavoured</td>
<td>Rs50</td>
</tr>
</tr>
<tr>
<td>Coffee</td>
<td>Rs10</td>
</tr>
</table>
</center>
<?php
include 'Connection.php';
 ?>
<form method="post" action="process.php">
<select name="name">
<option value="8">Soya Milk Packet</option>
	<option value="9">Cold Drinks</option>
	<option value="10">Real Juice</option>
	<option value="11">Fruit Beer</option>
	<option value="12">Flavoured Milk</option>
	<option value="13">Mineral Water</option>
	<option value="14">Patiala Lassi</option>
	<option value="15">Patiala Lassi Flavoured</option>
	<option value="16">Coffee</option>
</select>
<select name="quantity">
	<option value="1">1</option>
	<option value="2">1</option>
	<option value="3">1</option>
	<option value="4">1</option>
	<option value="5">1</option>
	<option value="6">1</option>
	<option value="7">1</option>
	<option value="8">1</option>
	<option value="9">1</option>
	<option value="10">1</option>
</select>
<input type="submit" name="submit">
</form>
</body>
</html>