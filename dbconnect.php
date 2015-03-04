


<?php
$servername = "mysql51-154.perso";
$username = "coinbendiaer";
$password = "TramadiS";
$dbname = "coinbendiaer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





mysqli_close($conn);
?>