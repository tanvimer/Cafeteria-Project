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
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("Images\back1.jpg");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</style>
</head>
<body class="bg">
<center>
<table width="100%" >
<tr>
<td rowspan="6" align="center"><img src="Images\taco1.jpg" alt="pizza" ></img></td>
</tr>
<tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:60pt;font-style:italics;"><u></u>Taco's</font></td>
<td> </td>
</tr>
<tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Veg Taco's</font></td>
<td><font style="color:#DC143C;font-weight:bold;font-size:25pt;">Price</td>
</tr>
<tr>
<td>Paneer & Corns</td>
<td rowspan="3">Rs 129</td>
</tr>
<tr>
<td>Mushrooms,Corns & Onion</td>
</tr>
<tr>
<td>Paneer Tikka Butter Masala & Red Paprika</td>
</tr>
<tr>
<td rowspan="5" align="center"><img src="Images\taco2.jpg" alt="scoop" ></img></td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Non Veg Taco's</font></td>
</tr>
<tr>
<td>Chicken Seekh Kebab</td>
<td rowspan="3">Rs 139</td>
</tr>
<tr>
<td>Chicken Tikka & Chicken Salami</td>
</tr>
<tr>
<td>Mutton Seekh,Mutton Keema & Jalapenos</td>
</tr>
</table>
</center>
<?php
include 'Connection.php';
?>
 <form method="post" action="process.php">
<select name="name">
<option value="131">Veg taco</option>
<option value="132">Non veg taco</option>
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