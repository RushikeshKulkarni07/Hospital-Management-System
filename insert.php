<!DOCTYPE html>
<html>
  <head>  

    <title></title>
    <title></title>
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
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                        <p><b>Welcome to a Health Care</p></b>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <p><b>Sunday <span>Closed</span></p></b>
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
                    <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.html" class="smoothScroll">Home</a></li>
                         <li><a href="about.html" class="smoothScroll">About Us</a></li>
                         <li><a href="team.html" class="smoothScroll">Doctors</a></li>
                          <li class="appointment-btn"><a href="log.html">Admin</a></li>
                         <li class="appointment-btn"><a href="dr.html">Make an appointment</a></li>
                    </ul>
               </div>

          </div>
     </section>

  </head>
  


<style>
  body{
    background-image: url('images/four.jpg');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
                    width: 100%;
                    height: 50%;
       
  }
  
   *{
 margin:0;
 padding: 0;
 outline: 0;
}
.filter{
 position: absolute;
 left: 0;
 top: 0;
 bottom: 0;
 right: 0;
 z-index: 1;
 opacity: .7;
 

}

.heading{
  font-size: 40px;
  text-align: center;
  color:#000000;
  margin-bottom: 40px;

}

table{
 position: absolute;
 z-index: 2;
 left: 50%;
 top: 50%;
 transform: translate(-50%,-50%);
 width: 60%; 
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 overflow: hidden;

}
td , th{
 padding: 15px 20px;
 text-align: center;
 

}
th{
 background-color: #FFA07A;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 background-color: #eeeeee;
}

</style>

<div class="filter"></div>
<h1 class="heading">Your Details</h1>

<?php 
include ('dbcon.php'); 



     if(isset($_POST['submit'])){

    $fname=$_REQUEST["fname"]; 
$lname = $_REQUEST["lname"];
$email = $_REQUEST["email"]; 
$age=$_REQUEST["age"];
$date=$_REQUEST["date"];
$time=$_REQUEST["time"];
$phoneno = $_REQUEST["phoneno"];
$address=$_REQUEST["address"];

$opd=$_REQUEST["opd"];


$d=$dr='  ';

if(isset($_POST['s'])){

if($_POST['d']!=' '){
$d=$_POST['d'];
$ey=date('Y',strtotime($_POST['d']));
$em=date('m',strtotime($_POST['d']));
$ed=date('d',strtotime($_POST['d']));

$edays=($ey-1)*365 +($em-1)*30+$ed;

$sy=date('Y');
$sm=date('m');
$sd=date('d');
$sdays=($sy-1)*365+($sm-1)* 30+$sd;
$diff=($edays - $sdays);
if ($diff>0 && $diff<=30){
$dr="date is correct".$d;
}
else{
$dr="Choose date greater than current date".$d;
}

}else{

$dr='Enter any Date';
}
}



          $query="INSERT INTO user1 (fname,lname,age,email,date,time,phoneno,address,opd) 
     values('$fname','$lname','$age','$email','$date','$time','$phoneno','$address','$opd')";

          $data = mysqli_query($connect, $query);

          if (isset($data)) {
               
     
      } 
      else
      {
          echo "Error:" . $sql . "" . mysqil_error($connect);
      }
      mysqli_close($connect);
      } 
           

echo "<table border='1'>

<tr>


<th>Fname</th><br>

<th>Lname</th><br>

<th>Age</th><br>

<th>Email</th><br>

<th>Date</th><br>

<th>Time</th><br>

<th>Phoneno</th><br>

<th>address</th><br>

<th>opd</th><br>

</tr>";

 


  echo "<tr>";

  echo "<td>" . $fname . "</td>";
echo "<td>" . $lname . "</td>";
  echo "<td>" . $age . "</td>";

  echo "<td>" . $email . "</td>";

  echo "<td>" . $date . "</td>";

  echo "<td>" . $time . "</td>";

  echo "<td>" . $phoneno . "</td>";

  echo "<td>" . $address . "</td>";
 
  echo "<td>" . $opd . "</td>";


  echo "</tr>";

  

echo "</table>";

 



?>

</html>
                    







