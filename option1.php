<!DOCTYPE html>
<?php

include('dbcon.php');
session_start();

$patientid = $_POST['patientid'];
$_SESSION["patientid"]=$patientid;

$seledata = "SELECT * FROM hospital1 WHERE patientid='$patientid'";

$selectdata = mysqli_query($connect,$seledata);
while ($row= mysqli_fetch_assoc($selectdata)){

	$fname=$row["fname"]; 
$lname = $row["lname"];
$email = $row["email"]; 
$date= $row["date"];
$time=$row["time"];
$address=$row["address"];
$age=$row["age"];
$opd=$row["opd"];


}

 
?>



<html>
<head>
	<title></title>
</head>
<body>

	<h1 align="center"> 
		Delete options.....
	</h1>
	
	<form name="up"  method="POST"  action="deletefinal.php">

	<br><br>

       <table   align="center" border="0"  cellspacing="15">
         
         <tr><td>
          <label><b>First_name:</b></label><td>
          <input type="text" name="fname" value="<?php echo $fname?>"></td></tr>
       
        <tr><td>
          <label><b>Last_name:</b></label><td>
          <input type="text" name="lname" value="<?php echo $lname?>"></td></tr>
       
       <tr><td>
          <label><b>Email: </b></label><td>
          <input type="text" name="email" value="<?php echo $email ?>"></td></tr>
          
          <tr><td>
          <label><b>Appoinment Date: </b></label><td>
          <input type="text" name="date" value="<?php echo $date?>"></td></tr>
          
          <tr><td>
          <label><b>Appoinment Time: </b></label><td>
          <input type="text" name="time" value="<?php echo $time?>"></td></tr>
          
          <tr><td>
          <label><b>Address:</b></label><td>
          <input type="text" name="address" value="<?php echo $address?>"></td></tr>
          
          <tr><td>
          <label><b>Age:</b></label><td>
          <input type="number" name="age" value="<?php echo $age?>"></td></tr>
    
          <tr><td>
          <label><b>OPD: </b></label><td>
          <input type="text" name="opd" value="<?php echo $opd?>"></td></tr>
          

          
                              
          <tr><td align="center">
          <input type="submit" id="btn" name="save" value="Delete"></td>
      
          
      </table>  
     </form>

<br>
<h5 align="center"><a href="index.html">Go Back</a></h5>


</body>
</html>