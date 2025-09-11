<?php

$host="localhost";
$username="root";
$password="";
$db_name="hospital";

$connect=mysqli_connect($host,$username,$password,$db_name);
$db=mysqli_select_db($connect,$db_name);
?>