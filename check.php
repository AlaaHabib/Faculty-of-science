
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
echo"hghg";
$user=$_POST['username'];
$pass=$_POST['password'];
$sql = "SELECT username, password FROM admins ";
session_start();
$result = $conn->query($sql);

if($result){
    foreach($result as $row) {
        if($row['username']==$user && $row['password']==$pass){
            $_SESSION["user"]=$user;
            $_SESSION["pass"]=$pass;
            header('Location: createtable.php');
        }else {
            //header('Location: home.php');
        }
    }
}else{
    header('Location: home.php');

}

$conn->close();

?>