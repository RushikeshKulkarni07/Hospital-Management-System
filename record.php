<!DOCTYPE html>
<html>
  <head>  

    <title></title>
  </head>
           
    
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

        
               body
               {
                 	background-image: url('i15.jfif');
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
 
  </body>
<style>
    table

{

border-style:solid;

border-width:2px;

border-color:black;

border-position:center;

background-color: white;


}

table.center
{
  margin-left: auto;
  margin-right: auto;
}

</style>


<?php

$fname=$_REQUEST["fname"]; 
$lname = $_REQUEST["lname"];
$age=$_REQUEST["age"];
$email = $_REQUEST["email"]; 
$date=$_REQUEST["date"];
$time=$_REQUEST["time"];
$phoneno = $_REQUEST["phoneno"]; 
$address=$_REQUEST["address"];
$opd=$_REQUEST["opd"];


echo "<h2>";echo "You have Registered sucessfully.........."; echo "</h2>" ; echo "<br>";
echo "<h3>";echo "Your First name is: $fname" ; echo "</h3>"; 
echo "<h3>";echo "Your Last name is: $lname" ; echo "</h3>";
echo "<h3>";echo "Your Email is: $email" ; echo "</h3>";
echo "<h3>";echo "Your City is: $City"; echo "</h3>"; 
echo "<h3>";echo "Your phoneno is: $phoneno"; echo "</h3>"; 
echo "<h3>";echo "Your date is: $date"; echo "</h3>"; 
echo "<h3>";echo "Your time is: $time"; echo "</h3>"; 
echo "<h3>";echo "Your address is: $address"; echo "</h3>";
echo "<h3>";echo "Your age is: $age"; echo "</h3>"; 
echo "<h3>";echo "Your OPD is: $opd"; 
?>


<br>
<a href="updateuser.php">update</a>
