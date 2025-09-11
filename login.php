
<?php
$un=$_REQUEST["username"];
$pa=$_REQUEST["password"];




if($un == "Anjali" &&  $pa == "2323"  ) 
{

	session_start();
	$_SESSION["un"]=$_REQUEST["username"];
echo "welcome ";
echo $_SESSION["un"];

?>
<br><br><br><br>
<a href="sele.php"><input type="submit" name="submit" value="Show">
<br><br><br>

<a href ="updateuser.php"><input type="submit" value="Update"></a><br><br><br>
<a href ="deleteuser.php"><input type="submit" value="Delete"></a><br><br><br>


<?php 

      
    }
else
{

echo "Invalid username and password. Please correct it.";
}
?>