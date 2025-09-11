<?php 
include ('dbcon.php'); 
session_start();


	if(isset($_POST['submit'])){

$name=$_REQUEST["name"]; 
$age = $_REQUEST["age"];
$email = $_REQUEST["email"]; 
$phoneno = $_REQUEST["phoneno"];  
$address=$_REQUEST["address"];





		$query="INSERT INTO hospital1 (name,age,email,phoneno,address) 
	values('$name','$age','$email','$phoneno','$address')";

		$data = mysqli_query($connect, $query);

		echo "welcome ";
echo $_REQUEST["name"];
	 
	 mysqli_close($connect);
	 		 
}?>



