<!DOCTYPE html>
<html>
  <head>  

    <title></title>
  </head>
  <body>


<style>
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
 
background-color: #A9C9FF;
background-image: linear-gradient(180deg, #A9C9FF 0%, #FFBBEC 100%);

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
 background-color: #ff99ff;
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
<h1 class="heading">Patient Details</h1>
<?php
 $fname=$_REQUEST["fname"]; 
$lname = $_REQUEST["lname"];
$email = $_REQUEST["email"]; 
$age=$_REQUEST["age"];
$date=$_REQUEST["date"];
$time=$_REQUEST["time"];
$phoneno = $_REQUEST["phoneno"];
$address=$_REQUEST["address"];

$opd=$_REQUEST["opd"];


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

</body>
</html>