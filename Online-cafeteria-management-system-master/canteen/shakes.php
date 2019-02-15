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
}
</style>
</head>
<body background="Images\backice.jpg">
<center>
<table width="100%" >
<tr>
<td rowspan="11"align="center"><img src="Images\shake.jpg" alt="shake"></img></td>
<tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:60pt;font-style:italics;">&nbsp&nbsp&nbsp<u>Shakes</u></font></td>
<td> </td>
</tr>
<tr>
<td><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Classic</font></td>
<td><font style="color:#DC143C;font-weight:bold;font-size:40pt;">300 ml</font></td>
<td><font style="color:#DC143C;font-weight:bold;font-size:40pt;">500 ml</font></td>
<tr>
<td>Butter Scotch</td>
<td>Rs 99</td>
<td>Rs 129</td>
</tr>
<tr>
<td>Strawberry</td>
<td>Rs 99</td>
<td>Rs 129</td>
</tr>
<tr>
<td>Cold Coffee</td>
<td>Rs 99</td>
<td>Rs 129</td>
</tr>
<tr>
<td>Cold Coffee(Sugar Free)</td>
<td>Rs 99</td>
<td>Rs 129</td>
</tr>
<tr>
<td>Vanilla</td>
<td>Rs 99</td>
<td>Rs 129</td>
</tr>
<tr>
<td>Pineapple</td>
<td>Rs 99</td>
<td>Rs 129</td>
</tr>
<tr>
<td>Black Currant</td>
<td>Rs 99</td>
<td>Rs 129</td>
</tr>
<tr>
<td>Banana Shake</td>
<td>Rs 99</td>
<td>Rs 129</td>
</tr>
<tr>
<td rowspan="20"align="center"><img src="Images\havshake1.jpg" alt="shake"></img></td>
<tr>
<tr>
<td colspan="3"><font style="font-family:Alex Brush;color:#DC143C;font-weight:bold;font-size:50pt;font-style:italics;">Premium</font></td>
<tr>
<td>Real Mango</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Peanut Butter & Cookie Cream</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Mix of Berries
<br>(Strawberries,Cranberry,<br>Raspberry,Blueberry)</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Wild Blue Berry</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Real Cherries & Tutty Fruity</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Peanut Butter</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Caramello</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Chocolate & Peanut Butter</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Red Velvet</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Blue Berry</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Nutty Belgium Chocolate Shake</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Choco Chip & Choco Fudge</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Chocolate & Chocolate Cookie Shake</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Oreo Shake</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Coffee & Caramel</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Chocolate Blueberry Shake</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
<tr>
<td>Chocolate Banana Split</td>
<td>Rs 109</td>
<td>Rs 149</td>
</tr>
</table>
</center>
<form method="post" action="process1.php">
<select name="name">
	<option value="42">Butter Scotch</option>
	<option value="43">Strawberry</option>
	<option value="44">Cold Coffee</option>
	<option value="45">Vanilla</option>
	<option value="46">Pineapple</option>
	<option value="47">Black Currant</option>
	<option value="48">Banana Shake</option>
	<option value="49">Real Mango</option>
	<option value="50">Peanut Butter and Cookie cream</option>
	<option value="51">Mix Of Berries</option>
	<option value="52">Wild Blue Berry</option>
	<option value="53">Real Cherries & Tutty Fruity	</option>
	<option value="54">Peanut Butter</option>
	<option value="55">Caramello</option>
	<option value="56">Chocolate & Peanut Butter</option>
	<option value="57">Red Velvet</option>
	<option value="58">Blue Berry</option>
	<option value="59">Nutty Belgium Chocolate Shake</option>
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
</select>
</form>
</body>
</html>
