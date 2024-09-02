 <?php
$server="localhost";
$username="root";
$password="";
$database = "trac_nghiem";
$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
  die("thất bại " . $conn->connect_error);
} 
?>