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

	<h1>Select user to delete</h1>
	<form method="POST" action="option1.php">
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
	<a href="index.html">Go Back</a>

</body>
</html>