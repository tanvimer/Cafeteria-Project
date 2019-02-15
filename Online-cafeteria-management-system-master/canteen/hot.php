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
.bod
{

background-image:url(back4.jpg);
background-repeat:no-repeat;
}

</style>
</head>
<body class="bod" text="white">
<center>
<table width="100%" >
<tr>
<td rowspan="11" align="center"><img src="coffee.jpg" alt="sundae" height="300" width="400" ></img></td>
<tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:60pt;font-style:italics;"><u>Hot</u></font></td>
<td> </td>
</tr>

<tr>
<td>Espresso</td>
<td>Rs 40</td>
</tr>
<tr>
<td>Americano</td>
<td>Rs 40</td>
</tr>
<tr>
<td>Cafe Mocha</td>
<td>Rs 40</td>
</tr>
<tr>
<td>Cafe Late</td>
<td>Rs 40</td>
</tr>
<tr>
<td>Cappucinno</td>
<td>Rs 50</td>
</tr>
<tr>
<td>Hot Chocolate</td>
<td>Rs 40</td>
</tr>
<tr>
<td>Masala Tea</td>
<td>Rs 30</td>
</tr>
<tr>
<td>Ginger Tea</td>
<td>Rs 30</td>
</tr>
<tr>
<td>Green Tea</td>
<td>Rs 30</td>
</tr>
   
</table>
</center>






<?php 
include 'db.php';

 ?>
 


<form method="post" action="process.php">
<select name="name" action="new.php">
<option value="92">Green Tea</option>
<option value="93">Masala Tea</option>
<option value="94">Ginger Tea</option>
<option value="95">Hot Chocolate</option>
<option value="96">Cappuchinno</option>
<option value="97">Cafe Lache</option>
<option value="98">Cafe Moto</option>
<option value="99">Americano</option>
<option value="100">Expresso</option>

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
