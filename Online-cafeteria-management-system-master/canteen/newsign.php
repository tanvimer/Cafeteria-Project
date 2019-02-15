<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
include("data.php");
if(isset($_POST['submit']))
{
$username1=($_REQUEST['username']);
$password1=($_REQUEST['password']);
$str="INSERT INTO users (username,password) values ('$username1','$password1')";
$query = $db->query($str);
}
?>
<form action="ip1.html" method="get">
<table><tr><td>Create Username </td><td> <input name="username" type="text" /> </td></tr>
<tr><td>Create Password </td><td> <input name="password" type="text" /> </td></tr>
<tr><td> <input name="submit" type="submit" value="Insert Record" /> </td></tr></table>
</form>
</body>
</html>