<?php
ob_start();
include("data.php");
$username=$_REQUEST["user"];
$password=$_REQUEST["password"];
$str="select * from admindata where username='$username' and password='$password'";
$rs=mysql_query($str);
$temp=0;
while($row=mysql_fetch_array($rs))
   {
    if($username==$row["username"] && $password==$row["password"])
	  {
 		 $temp=1;
		 setcookie("canteen1",$username);
		 echo "correct";
	   header("Location:ip1.html");
	   }
    }
   if($temp==0)
   {
    echo "incorrect";
    header("Location:index.html?id=0");
   }
?>