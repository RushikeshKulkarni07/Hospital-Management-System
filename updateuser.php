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

     <style>

               body {
                    background-image: url('i14.jfif');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
               }
               

</style>

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





<?php
include('dbcon.php');
session_start();

$sql = "SELECT patientid FROM hospital1";

$select = mysqli_query($connect,$sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Select user to update</h3>
	<form method="POST" action="option.php">
		<br>
		ID &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<select patientid="patientid" name="patientid">
			<?php
			while($row = mysqli_fetch_assoc($select)){

				?>
				<option value="<?php echo $row['patientid']; ?>">
					<?php echo $row['patientid']; ?> </option>
					<?php
			}
			?>

		</select>
		<br><br>

		<input name="submit" type="submit" value="Search">

		</form>




	</form><br><br>
