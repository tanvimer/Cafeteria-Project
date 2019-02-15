<?php
$db_host = 'localhost';
$db_user = 'root';
$db_name = 'canteen';
$db_pass = '';

$db = new mysqli($db_host,$db_user,$db_pass,$db_name);

if($db->connect_error){
echo "Connection failed ".$db->connect_error;
}
?>