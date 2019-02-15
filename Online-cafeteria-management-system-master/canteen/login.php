<?php
ob_start();
include("database.php");
if(isset($_POST)){
$user=$_POST["username"];
$pass=$_POST["password"];
$str="SELECT * FROM users WHERE username ='$user'";
$rs=$db->query($str);
$rs = $rs->fetch_assoc();
echo $rs['username'];
echo $rs['userpassword'];
if($rs['username']== $user && $rs['userpassword'] == $pass )
	  {
 		 $temp=1;
		 setcookie("canteen1",$username);
		echo "correct";
	 header("Location:ip1.html");
	   }
     else  {  header('location: login.html');
     }
   }else  {  header('location: login.html');
  }
?>