 <?php
$mysqli = new mysqli("localhost","gfdbu","Start24!","greenfoot_data");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?> 
