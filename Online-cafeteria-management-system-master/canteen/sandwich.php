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
<td rowspan="15"align="center"><img src="Images\sand.jpg" alt="sand" ></img></td>
<td><font style="font-family:segoe print;color:yellow;font-weight:bold;font-size:50pt;font-style:italics;">Sandwiches</font></td>
<td> </td>
</tr>
<tr>
<td align="center"><font color="darkslateblue">veg</font><hr color="red"></td>
<td></td>
</tr>
<tr>
<td><font color="darkslateblue">Chargrilled Veggie</font></td>
<td><font color="darkslateblue">Rs 150</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Paprika Paneer</font></td>
<td><font color="darkslateblue">Rs 150</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Swiss Grilled Mushroom Melt</font></td>
<td><font color="darkslateblue">Rs 160</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Crispy Poutine Slaw</font></td>
<td><font color="darkslateblue">Rs 180</font></td>
</tr>
<tr>
<td align="center"><font color="darkslateblue">Non veg</font><hr color="red"></td>
<td>  </td>
</tr>
<tr>
<td><font color="darkslateblue">Chicken Ham & Cheese</font></td>
<td><font color="darkslateblue">Rs 140</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Pump It Up</font></td>
<td><font color="darkslateblue">Rs 220</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Pulled BBQ Chicken </font></td>
<td><font color="darkslateblue">Rs 170</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Club Sandwich</font></td>
<td><font color="darkslateblue">Rs 250</font></td>
</table>
</center>
<form method="post" action="process.php">
<select name="name">
	<option value="34">Chargrilled Veggie</option>
	<option value="35">Paparika Paneer</option>
	<option value="36">Swiss Grilled Mushroom Melt</option>
	<option value="37">Crispy Poutine Slaw</option>
	<option value="38">Chicken Ham & Cheese</option>
	<option value="39">Pump It Up</option>
	<option value="40">Pulled BBQ Chicken</option>
	<option value="41">Club Sandwich</option>
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