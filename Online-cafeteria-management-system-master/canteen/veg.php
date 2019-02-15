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
<td rowspan="10" align="center"><img src="Images\pizza1.jpg" alt="pizza" ></img></td>
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
<td>Margherita<p style="font-size:15pt;font-weight:normal;">Say Cheese</p></td>
<td>Rs 70</td>
<td>Rs 220</td>
<td>Rs 725</td>
<td>Rs 1090</td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Simply Veg</font></td>
</tr>
<tr>
<td>Double Cheese Margherita<p style="font-size:15pt;font-weight:normal;">Loaded with extra Cheese</p></td>
<td rowspan=2>Rs 85</td>
<td rowspan=2>Rs 325</td>
<td rowspan=2>Rs 790</td>
<td rowspan=2>Rs 1250</td>
</tr>
<tr>
<td>Onion Blossoms<p style="font-size:15pt;font-weight:normal;">Onion,Fresh Tomatoes,Sweet Corns</p></td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Premium Veg</font></td>
</tr>
<tr>
<td>Spring Fling<p style="font-size:15pt;font-weight:normal;">Paneer,Fresh Tomatoes,Capsicum,Sweet Corns</p></td>
<td rowspan=2>Rs 110</td>
<td rowspan=2>Rs 375</td>
<td rowspan=2>Rs 890</td>
<td rowspan=2>Rs 1375</td>
</tr>
<tr>
<td>Sweet Heat<p style="font-size:15pt;font-weight:normal;">Jalapenos,Pineapples,Sweet Corns,Red Paprika</p></td>
</tr>
<tr>
<td rowspan="7" align="center"><img src="Images\pizza2.jpg" alt="scoop" ></img></td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Exotic Veg</font></td>
</tr>
<tr>
<td>Cheezy-7 Pizza<p style="font-size:15pt;font-weight:normal;">An exotic combination of White Mozzarilla,Cream White Cheese,Cheddar</p></td>
<td rowspan=2>Rs 130</td>
<td rowspan=2>Rs 445</td>
<td rowspan=2>Rs 960</td>
<td rowspan=2>Rs 1450</td>
</tr>
<tr>
<td>Burn to Hell<p style="font-size:15pt;font-weight:normal;">Hot & Garlic Dip,Jalapenos,Mushrooms,Olives & Capsicums</p></td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Feast</font></td>
</tr>
<tr>
<td>Veg. Tamer<p style="font-size:15pt;font-weight:normal;">All the Veg Toppings with Extra Cheese</p></td>
<td>Rs 150</td>
<td>Rs 525</td>
<td>Rs 1050</td>
<td>Rs 1675</td>
</tr>
</table>
</center>
<?php
include 'Connection.php';
 ?>
<form method="post" action="process.php">
<select name="name" action="new.php">
    <option value="116">Margreta</option>
    <option value="117">Double cheese margreta</option>
    <option value="118">Onion Blosoms</option>
    <option value="119">Spring fling</option>
    <option value="120">Sweet heat</option>
    <option value="121">Cheesz 7 pizza</option>
    <option value="122">Burn to hell</option>
    <option value="123">Veg tamer</option>
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
