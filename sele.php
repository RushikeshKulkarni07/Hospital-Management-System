<!DOCTYPE html>
<html>
  <head>  

    <title></title>
  </head>
  <body style="background-color: pink">
    
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
                    background-image: url('img4.webp');
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
 
  <h2 align="center" >...Patient Information...</h2></body>
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
include('dbcon.php');
session_start();
$sql = "SELECT * FROM hospital1";
$result = mysqli_query($connect, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);



echo "<table border='1'>

<tr>

<th>Patient Id</th><br>

<th>Fname</th><br>

<th>Lname</th><br>

<th>age</th><br>

<th>Phoneno</th><br>

<th>email</th><br>

<th>City</th><br>

<th>address</th><br>

<th> time</th><br>
<th> date</th><br>
<th>opd</th><br>

</tr>";

 
if($num> 0){
while($row = mysqli_fetch_assoc($result))

  {

  echo "<tr>";

  echo "<td>" . $row['patientid'] . "</td>" ;

  echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";

  echo "<td>" . $row['phoneno'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "<td>" . $row['city'] . "</td>";

  echo "<td>" . $row['address'] . "</td>";

  echo "<td>" . $row['time'] . "</td>";
 echo "<td>" . $row['date'] . "</td>";

  echo "<td>" . $row['opd'] . "</td>";


  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($connect);
}
echo "</table>";


?>

</html>
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


