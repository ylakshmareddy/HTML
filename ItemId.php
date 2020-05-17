 <?php
 
$servername = "localhost";
$username = "LakshmaReddy";
$password = "LakshmaReddy";
$dbname = "dbLakshmaReddy"

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
else
{
	echo("Connected successfully.");
}
?> 