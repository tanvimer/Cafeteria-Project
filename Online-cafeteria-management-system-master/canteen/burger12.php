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
<body background="Images/rustic (1).jpg">
<center>
<table width="100%" border="0px">
<tr>
<td rowspan="15"align="center"><img src="Images/bb.jpg" alt="sundae" ></img></td>
<td><font style="font-family:bradley hand itc;color:yellow;font-weight:bold;font-size:50pt;font-style:italics;">Burgers</font></td>
<td> </td>
</tr>
<tr>
<td><font color="darkslateblue">veg</font><hr color="red"></td>
<td></td>
</tr>
<tr>
<td><font color="darkslateblue">Southern State Chilli</font></td>
<td><font color="darkslateblue">Rs 80</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Magic Shroom</font></td>
<td><font color="darkslateblue">Rs 100</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Crispy Chinese</font></td>
<td><font color="darkslateblue">Rs 100</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Soya Tikka</font></td>
<td><font color="darkslateblue">Rs 100</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Butter Paneer</font></td>
<td><font color="darkslateblue">Rs 180</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Non veg</font><hr color="red"></td>
<td>  </td>
</tr>
<tr>
<td><font color="darkslateblue">Chicken Steak</font></td>
<td><font color="darkslateblue">Rs 100</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Grilled Chicken</font></td>
<td><font color="darkslateblue">Rs 120</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Cheese Chicken Quarter Pounder</font></td>
<td><font color="darkslateblue">Rs 140</font></td>
</tr>
<tr>
<td><font color="darkslateblue">Butter Chicken</font></td>
<td><font color="darkslateblue">Rs 200</font></td>
</table>
</center>
</body>
<?php
include 'Connection.php';
?>
<form method="post" action="process.php">
<select name="name">
	<option value="17">Southern State Chilli</option>
	<option value="18">Magic Shroom</option>
	<option value="19">Crispy Chinese</option>
	<option value="20">Soya Tikka</option>
	<option value="21">Butter Paneer</option>
	<option value="22">Non Veg</option>>
	<option value="23">Chicken Steak</option>
	<option value="24">Grilled Chicken</option>
	<option value="25">Cheese Chicken Quarter Pounder</option>
	<option value="26">Butter Chicken</option>
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
</html>