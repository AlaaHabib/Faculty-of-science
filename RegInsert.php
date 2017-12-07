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


$Student_Name = $_POST['username'];
$ID = $_POST['id'];
$Email = $_POST['email'];
$subject = $_POST['course'];
$Day = $_POST['day'];
$Time = $_POST['time'];
$sql = "INSERT INTO Section_Registration (id,username,email,course,day,time) VALUES ('$ID','$Student_Name','$Email','$subject','$Day','$Time')";


//$result = $conn->query($sql);



if ($conn->query($sql) === TRUE) {
    header('Location: home.php');
} else {
    echo "Error creating table:  " . $conn->error;
}





?>