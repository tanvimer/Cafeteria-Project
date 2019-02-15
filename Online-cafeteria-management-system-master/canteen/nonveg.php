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
<td rowspan="10" align="center"><img src="Images\nonveg1.jpg" alt="pizza" ></img></td>
</tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:60pt;font-style:italics;"><u>Pizza</u></font></td>
<td> </td>
</tr>
<tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Classic</font></td>
"<td><font style="color:#DC143C;font-weight:bold;font-size:25pt;">Small<br>7"</font></td>
<td><font style="color:#DC143C;font-weight:bold;font-size:25pt;">Medium<br>10"</font></td>
<td><font style="color:#DC143C;font-weight:bold;font-size:25pt;">The Giant<br>18"</font></td>
<td><font style="color:#DC143C;font-weight:bold;font-size:25pt;">The Monster<br>24"</font></td>
<tr>
<td>Exotic Salami Pizza<p style="font-size:15pt;font-weight:normal;">Onions,Chicken Salami</p></td>
<td>Rs 100</td>
<td>Rs 315</td>
<td>Rs 825</td>
<td>Rs 1260</td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Simply Non-Veg</font></td>
</tr>
<tr>
<td>Country Special<p style="font-size:15pt;font-weight:normal;">Chicken Salami,Chicken Seekh,Sweet Corns</p></td>
<td rowspan=2>Rs 120</td>
<td rowspan=2>Rs 385</td>
<td rowspan=2>Rs 860</td>
<td rowspan=2>Rs 1340</td>
</tr>
<tr>
<td>Chicago Delight<p style="font-size:15pt;font-weight:normal;">Chicken Tikka,Chicken Ham,Onions</p></td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Premium Non-Veg</font></td>
</tr>
<tr>
<td>La Pino'z Chicken<p style="font-size:15pt;font-weight:normal;">Chicken Tikka,Barbeque Chicken & Smoked Chicken</p></td>
<td rowspan=2>Rs 130</td>
<td rowspan=2>Rs 435</td>
<td rowspan=2>Rs 945</td>
<td rowspan=2>Rs 1450</td>
</tr>
<tr>
<td>Mixed Grill<p style="font-size:15pt;font-weight:normal;">Crispy Keema,Chicken Tikka,Onions,Peri Peri Dip</p></td>
</tr>
<tr>
<td rowspan="7" align="center"><img src="Images\nonveg2.jpg" alt="pizza" ></img></td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Exotic Non-Veg</font></td>
</tr>
<tr>
<td>Pepperoni<p style="font-size:15pt;font-weight:normal;">100% Pork Pepperoni with Extra Cheese</p></td>
<td rowspan=2>Rs 140</td>
<td rowspan=2>Rs 475</td>
<td rowspan=2>Rs 985</td>
<td rowspan=2>Rs 1640</td>
</tr>
<tr>
<td>Chicken Tikka Lababdar<p style="font-size:15pt;font-weight:normal;">Onion,Capsicum & Red Paprika,Chicken Tikka Lababdar</p></td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Feast</font></td>
</tr>
<tr>
<td>Non Veg. Tamer<p style="font-size:15pt;font-weight:normal;">All the Non Veg Toppings with Extra Cheese</p></td>
<td>Rs 170</td>
<td>Rs 545</td>
<td>Rs 1160</td>
<td>Rs 1795</td>
</tr>
</table>
</center>
<?php
include 'Connection.php';
?>
<form method="post" action="process.php">
<select name="name">
<option value="124">Exotic salami</option>
<option value="125">Country special</option>
<option value="126">Chicago delight</option>
<option value="127">Mixed grill</option>
<option value="128">Pepperoni</option>
<option value="129">Chicken tikka Lababdar</option>
<option value="130">Non veg tamer</option>
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
