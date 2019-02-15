<?php 
include("database.php");
if(isset($_POST['submit']))
{
$username1=($_POST['username']);
$password=($_POST['password']);
$password1=($_POST['password_1']);

if($password==$password1){
$str="INSERT INTO users (username,userpassword) values ('$username1','$password1')";
$query = $db->query($str); 

header('location: ip1.html');
}else{
	header('location: signup.php');
}

}
