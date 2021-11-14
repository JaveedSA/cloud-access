

<?php
$servername = "localhost";
$username = "anandass_demo1";
$password = "demo1@ANAND2021";
$dbname = "anandass_demo1";
 
                     // Create connection
                         // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
                          // Check connection
if (!$conn) 
{
  die("Connection failed: ".mysqli_connect_error());
}
?>