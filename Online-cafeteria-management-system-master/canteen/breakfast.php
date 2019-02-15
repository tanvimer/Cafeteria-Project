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
<td rowspan="15"align="center"><img src="Images\break.jpg" alt="sundae" ></img></td>
<td><font style="font-family:bradley hand itc; color:yellow;font-weight:bold;font-size:50pt;font-style:italics;">Breakfast special</font></td>
<td> </td>
</tr>
<tr>
<td><font color="red">lacha prantha</font></td>
<td><font color="red">Rs 10</font></td>
</tr>
<tr>
<td><font color="red">Amritsari naan</font></td>
<td><font color="red">Rs 10</font></td>
</tr>
<tr>
<td><font color="red">Daal Makhni</font></td>
<td><font color="red">Rs 25</font></td>
</tr>
<tr>
<td><font color="red">Channa Masala</font></td>
<td><font color="red">Rs 25</font></td>
</tr>
<tr>
<td><font color="red">Butter Paneer</font></td>
<td><font color="red">Rs 50</font></td>
</tr>
<tr>
<td><font color="red">Mix veg</font></td>
<td><font color="red">Rs 25</font></td>
</tr>
<tr>
<td><font color="red">rice</font></td>
<td><font color="red">Rs 10</font></td>
</tr>
</table>
</center>
<form method="post" action="process.php">
<select name="name">
	<option value="135">Lacha Prantha</option>
	<option value="136">Amritsari naan</option>
	<option value="137">Daal Makhni</option>
	<option value="138">Channa Masala</option>
	<option value="139">Butter Paneer</option>
	<option value="140">Mix veg</option>
	<option value="141">Rice</option>
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