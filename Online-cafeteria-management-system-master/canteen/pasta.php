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
<td rowspan="7" align="center"><img src="Images\pasta1.jpg" alt="pizza" ></img></td>
</tr>
<tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:60pt;font-style:italics;"><u></u>Baked-Cheese Pasta</font></td>
<td> </td>
</tr>
<tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Veg Pasta</font></td>
<td><font style="color:#DC143C;font-weight:bold;font-size:25pt;">Price</td>
</tr>
<tr>
<td>Red Sauce Pasta<p style="font-size:15pt;font-weight:normal;">Exotic Red Sauce with onion,capsicum,mushroom olives & cheese</p></td>
<td rowspan="4">Rs 109</td>
</tr>
<tr>
<td>White Sauce Pasta<p style="font-size:15pt;font-weight:normal;">onion,capsicum,sweet corn,mushroom,olives with cheese</p></td>
</tr>
<tr>
<td>Pesto & Basil Pasta<p style="font-size:15pt;font-weight:normal;">onion,sweet corn,mushroom,olive with cheese</p></td>
</tr>
<tr>
<td>Rosy Red + White Sauce Pasta<p style="font-size:15pt;font-weight:normal;">onion,capsicum,sweet corn,mushroom,olive with cheese</p></td>
</tr>
<td rowspan="6" align="center"><img src="Images\pasta2.jpg" alt="scoop" ></img></td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Non Veg Pasta</font></td>
</tr>
<tr>
<td>Red Sauce Pasta<p style="font-size:15pt;font-weight:normal;">Exotic Red Sauce with onion,capsicum,mushroom olives,cheese & chicken BBQ</p></td>
<td rowspan="4">Rs 129</td>
</tr>
<tr>
<td>White Sauce Pasta<p style="font-size:15pt;font-weight:normal;">onion,capsicum,sweet corn,mushroom,olives,cheese & smoked chicken</p></td>
</tr>
<tr>
<td>Pesto & Basil Pasta<p style="font-size:15pt;font-weight:normal;">onion,sweet corn,mushroom,olive,cheese,smoked chicken & BBQ</p></td>
</tr>
<tr>
<td>Rosy Red + White Sauce Pasta<p style="font-size:15pt;font-weight:normal;">onion,capsicum,sweet corn,mushroom,olive,cheese & BBQ chicken</p></td>
</tr>
</table>
</center>
<form method="post" action="process.php">
<select name="name" action="new.php">
    <option value="133">Veg pasta</option>
    <option value="134">Non veg pasta</option>
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