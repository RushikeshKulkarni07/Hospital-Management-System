<!DOCTYPE html>  
<html>
  <head>
    <title></title>
  </head>
  
  <h2 align="center" >...Patient Information...</h2></body>

<style>
  body {
                    background-image: url('img9.webp');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
               }

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

<th>First Name</th><br>

<th>Last Name</th><br>

<th>Email</th><br>

<th>City</th><br>

<th>Appoinment date</th><br>

<th>Appoinment time</th><br>

<th>Phone No</th><br>

<th>Address</th><br>

<th>Age</th><br>

<th>OPD</th><br>

</tr>";

 
if($num> 0){
while($row = mysqli_fetch_assoc($result))

  {

  echo "<tr>";

  echo "<td>" . $row['patientid'] . "</td>" ;

  echo "<td>" . $row['fname'] . "</td>";

  echo "<td>" . $row['lname'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "<td>" . $row['date'] . "</td>";

  echo "<td>" . $row['time'] . "</td>";

  echo "<td>" . $row['city'] . "</td>";

  echo "<td>" . $row['phoneno'] . "</td>";

  echo "<td>" . $row['address'] . "</td>";

  echo "<td>" . $row['age'] . "</td>";

  echo "<td>" . $row['opd'] . "</td>";


  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($connect);
}
echo "</table>";


?>

</html>


</style>
</body>
