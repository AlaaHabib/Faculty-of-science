<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "labs_halls";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$x=$_POST['smartcode'];
$u=$_POST['day'];
$y=$_POST['time'];
$z=$_POST['course'];

$sql2="UPDATE $x SET $y = '$z'  WHERE Day = '$u' ";
$conn->query($sql2);
if ($conn->query($sql2) === TRUE) {
    header('Location: home.php');
} else {
    echo "Error updating table:  " . $conn->error;
}







?>

