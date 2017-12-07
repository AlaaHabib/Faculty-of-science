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

$x=$_POST['Area'];
$y=$_POST['building'];
$z=$_POST['lab_hall_name'];
$SmartCode=$x[0].$x[1]."_".$y."_".$z;
$days = array("Saturday", "Sunday", "Monday","Tuesday","Wednesday","Thursday");
$sa= array($_POST['Saturday0'],$_POST['Saturday1'],$_POST['Saturday2'],$_POST['Saturday3'],$_POST['Saturday4']);
$su= array($_POST['Sunday0'],$_POST['Sunday1'],$_POST['Sunday2'],$_POST['Sunday3'],$_POST['Sunday4']);
$mon= array($_POST['Monday0'],$_POST['Monday1'],$_POST['Monday2'],$_POST['Monday3'],$_POST['Monday4']);
$tu=array($_POST['Tuesday0'],$_POST['Tuesday1'],$_POST['Tuesday2'],$_POST['Tuesday3'],$_POST['Tuesday4']);
$we=array($_POST['Wednesday0'],$_POST['Wednesday1'],$_POST['Wednesday2'],$_POST['Wednesday3'],$_POST['Wednesday4']);
$th=array($_POST['Thursday0'],$_POST['Thursday1'],$_POST['Thursday2'],$_POST['Thursday3'],$_POST['Thursday4']);

$sql = "CREATE TABLE $SmartCode (
    Day varchar(255) ,
    Pone varchar(255),
    Ptwo varchar(255),
    Pthree varchar(255),
    Pfour varchar(255),
    Pfive varchar(255) 
)";

$sql4="INSERT INTO labs (nom_of_seats,Department,SmartCode,Techguy)
VALUES ('500', 'CS', '$SmartCode', 'Ahmed')
";

if ($conn->query($sql4) === TRUE) {
} else {
    echo "Error creating table:  " . $conn->error;
}
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating table:  " . $conn->error;
}

$sql2="    INSERT INTO $SmartCode (Day, Pone, Ptwo, Pthree, Pfour, Pfive) VALUES ('".$days[0]."', '".$sa[0]."','".$sa[1]."','".$sa[2]."','".$sa[3]."','".$sa[4]."')";
if ($conn->query($sql2) === TRUE) {
} else {
    echo "Error creating table:  " . $conn->error;
}
$sql2="    INSERT INTO $SmartCode (Day, Pone, Ptwo, Pthree, Pfour, Pfive) VALUES ('{$days[1]}', '{$su[0]}','{$su[1]}','{$su[2]}','{$su[3]}','{$su[4]}')";
$conn->query($sql2);

$sql2="    INSERT INTO $SmartCode (Day, Pone, Ptwo, Pthree, Pfour, Pfive) VALUES ('{$days[2]}', '{$mon[0]}','{$mon[1]}','{$mon[2]}','{$mon[3]}','{$mon[4]}')";
$conn->query($sql2);

$sql2="    INSERT INTO $SmartCode (Day, Pone, Ptwo, Pthree, Pfour, Pfive) VALUES ('{$days[3]}', '{$tu[0]}','{$tu[1]}','{$tu[2]}','{$tu[3]}','{$tu[4]}')";
$conn->query($sql2);

$sql2="    INSERT INTO $SmartCode (Day, Pone, Ptwo, Pthree, Pfour, Pfive) VALUES ('{$days[4]}', '{$we[0]}','{$we[1]}','{$we[2]}','{$we[3]}','{$we[4]}')";
$conn->query($sql2);

$sql2="    INSERT INTO $SmartCode (Day, Pone, Ptwo, Pthree, Pfour, Pfive) VALUES ('{$days[5]}', '{$th[0]}','{$th[1]}','{$th[2]}','{$th[3]}','{$th[4]}')";
$conn->query($sql2);
$conn->close();
header('Location: home.php');

?>