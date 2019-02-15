<!DOCTYPE html>
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
<body background="Images\backice.jpg">
<center>
<table width="100%" >
<tr>
<td rowspan="8"align="center"><img src="Images\scoop.jpg" alt="scoop" ></img></td>
</tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:60pt;font-style:italics;"><u>Scoops</u></font></td>
<td> </td>
</tr>
<tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Classic</font></td>
<td><font style="color:#DC143C;font-weight:bold;font-size:25pt;">Single<br>Scoop</font></td>
<td><font style="color:#DC143C;font-weight:bold;font-size:25pt;">Double<br>Scoop</font></td>
<td><font style="color:#DC143C;font-weight:bold;font-size:25pt;">Half<br>ltr</font></td>
<td><font style="color:#DC143C;font-weight:bold;font-size:25pt;">Full<br>ltr</font></td>
<tr>
<td>Vanilla,Strawberry</td>
<td>Rs 36</td>
<td>Rs 69</td>
<td>Rs 189</td>
<td>Rs 249</td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Regular</font></td>
</tr>
<tr>
<td>Cherry Berry,Butter Scotch<br>Real Mango,Chocolate<br>Kaju Draksh</td>
<td>Rs 49</td>
<td>Rs 89</td>
<td>Rs 229</td>
<td>Rs 369</td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Signature</font></td>
</tr>
<tr>
<td>Real Mango,Swizz Cake<br>Chocolate Chip,Fresh Strawberry<br>Rich Coffee,Roasted Almond<br>Cookie Cream,Kaju Anjir<br>American Nuts,Black Currant</td>
<td>Rs 56</td>
<td>Rs 109</td>
<td>Rs 249</td>
<td>Rs 399</td>
</tr>
<tr>
<td rowspan="6"align="center"><img src="Images\scoop1.jpg" alt="scoop" ></img></td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Sugar Free</font></td>
</tr>
<tr>
<td>Kesar Pista, Anjir,<br>Cranberry</td>
<td>Rs 69</td>
<td>Rs 109</td>
<td>Rs 329</td>
<td>Rs 479</td>
</tr>
<tr>
<td colspan="5"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Premium</font></td>
</tr>
<tr>
<td>Kesar Pista, Pan Ice Cream,<br>Black Forest, Pista Malai,<br>Taj Mahal ,Rose Petal<br>Nutty Belgium ,Dark Chocolate<br>Choco Fusion ,Mocha Brownie Fudge<br>
Plain Chocolate</td>
<td>Rs 69</td>
<td>Rs 129</td>
<td>Rs 309</td>
<td>Rs 449</td>
</tr>
</table>
</center>
<?php
include 'Connection.php';
 ?>
<form method="post" action="process1.php">
<select name="name">
	<option value="74">Vanilla</option>
	<option value="75">Strawberry</option>
	<option value="76">Cherry Berry</option>
	<option value="77">Butter Scotch</option>
	<option value="78">Real Mango</option>
	<option value="79">Chocolate</option>
	<option value="80">Kaju Draksh</option>
	<option value="81">Real Mango</option>
	<option value="82">Swiz Cake</option>
	<option value="83">Chocolate Chip</option>
	<option value="84">Fresh Strawberry</option>
	<option value="85">Rich Coffee	</option>
	<option value="86">Cookie Cream</option>
	<option value="87">American Nuts</option>
	<option value="88">Kesar Pista</option>
	<option value="89">Cranberry</option>
	<option value="90">Black Forest</option>
	<option value="91">Plain Chocolate</option>
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
