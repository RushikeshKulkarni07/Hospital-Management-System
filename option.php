 <!DOCTYPE html>
<html lang="en">
<head>



     <title>Health - Medical Website Template</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

      
</head>
<style>

               body {
                    background-image: url('i14.jfif');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
               }
               

</style>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                          <p><b>Welcome to a Health Care</p></b>
               
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>

                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>Health Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="about.html" class="smoothScroll">About Us</a></li>
                         <li><a href="team.html" class="smoothScroll">Doctors</a></li>
                         <li><a href="#time" class="smoothScroll">Time</a></li>
                         <li><a href="#google-map" class="smoothScroll">location</a></li>
                         <li class="appointment-btn"><a href="dr.php">Make an appointment</a></li>
                    </ul>
               </div>

          </div>
     </section>



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
$City = $row["City"]; 
$phoneno = $row["phoneno"]; 

$date= $row["date"];
$time=$row["time"];
$address=$row["address"];
$age=$row["age"];
$opd=$row["opd"];


} ?>



<html>
<head>
	<title></title>
</head>
<body>

	<h2 align="center"> 
		Change and Update
	</h2>
<style>
    #btn
               {
                    background-color: gray;
                    color: black;
                    height: 35px;
                    width: 100px;
                    border-radius: 25px;
                    align: center;
               }
  
	</style>
	<form name="up"  method="POST"  action="updatefinal.php">

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
          <label><b>City: </b></label><td>
          <input type="text" name="City" value="<?php echo $City ?>"></td></tr>
       
       <tr><td>
          <label><b>Phone NO: </b></label><td>
          <input type="number" name="phoneno" value="<?php echo $phoneno ?>"></td></tr>
       
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
         <input type="submit" id="btn" name="save" value="Update"></td>
      </table> 
		


</form>


<br>
<a href="index.html"><h5 align="center">Go Back</h5></a>


</body>
</html>