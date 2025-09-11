<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

if ($_SESSION['username']=="Anjali") {
	# code...

	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
     <p>Do you want to see Patient Details</p>
    

     <a href="show.php">Yes</a>
 
</body>
</html>

<?php 

}

if ($_SESSION['username']=="Priyansh") {
	# code...

	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
     <p>Do you want to see Patient Details</p>
    

     <a href="show1.php">Yes</a>
 
</body>
</html>

<?php 

}

if ($_SESSION['username'] == "Rahul") {
	# code...

	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
     <p>Do you want to see Patient Details</p>
    

     <a href="show2.php">Yes</a>
 
</body>
</html>

<?php 

}




}else{

     
    
     header("Location: log.html");
     exit();
}
 ?>