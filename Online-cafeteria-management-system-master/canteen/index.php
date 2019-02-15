<!DOCTYPE html>
<?php include 'db.php';
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

.b
{
	background-repeat:no-repeat;
	background-size: cover;

}


</style>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/BDC9DC88-81A6-B644-B3C9-79A9416AF5A9/main.js" charset="UTF-8"></script>
</head>

<body background="sq.jpg" class="b">


<center>
<table width="100%" >
<tr>
<td rowspan="9"align="center"><img src="sand.jpg" alt="eatables" ></img></td>
<tr>
<td><font style="font-family:Alex Brus;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Eatables</font></td>
<td> </td>
</tr>
<tr>
<td>Grilled Sandwich</td>
<td>Rs40</td>
</tr>
<tr>
<td>Stuffed Kulcha"</td>
<td>Rs20</td>
</tr>
<tr>
<td>Samosa</td>
<td>Rs10</td>
</tr>
<tr>
<td>Samosa Chaat</td>
<td>Rs20</td>
</tr>
<tr>
<td>Aaloo Patty</td>
<td>Rs15</td>
<tr>
<td>Paneer Puff</td>
<td>Rs20</td>
</tr>
<tr>
<td>French Fries</td>
<td>Rs30</td>
</tr>
</table>
</center>

<?php 
include 'db.php';

 ?>
 


<form method="post" action="process.php">
<select name="name" action="new.php">
<option value="1">Grilled sandwich</option>
<option value="2">Stuffed Kulcha</option>
<option value="3">Samosa</option>
<option value="4">Samosa Chaat</option>
<option value="5">Aaloo Patty</option>
<option value="6">Paneer Puff</option>
<option value="7">French Fries</option>
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
