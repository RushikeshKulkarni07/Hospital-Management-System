<?php 
session_start(); 
include "dbcon.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if (empty($username)) {
		echo '<script> alert("User Name is required")</script>';

	    exit();
	}else if(empty($password)){
       echo '<script> alert("Password is required")</script>';
 exit();
	}else{
		$sql = "SELECT * FROM user2 WHERE username='$username' AND password='$password'";

		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] == $username && $row['password'] == $password) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: admin.html?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: admin.html?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: admin.html");
	exit();
}
