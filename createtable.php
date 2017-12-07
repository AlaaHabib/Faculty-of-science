

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>Faculty Of Science</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
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
$sql = "SELECT * FROM courses";

$result = $conn->query($sql);

?>
<div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right mainNav">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                        <li><a href="register.php">Register</a></li>
                    <li><a href="Labs.php">Labs</a></li>
                    <li><a href="halls.php">Halls</a></li>
                    
                    
                    <li><a href="Login.php">Login</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

        <header id="head" class="secondary">
            <div class="container">
                    <h1>Create Time Table </h1>
                    
                </div>
    </header>

<form method="post" action="TabInsert.php">
    <label for="sel1">Area:</label>
<select class="form-control" name="Area" style="width: 25%;">
    <option value="Shatby">Shatby</option>
    <option value="Moharam bek">Moharam bek</option>
    <option value="Anfoshy">Anfoshy</option>
    <option value="houria road">houria road</option>
</select>
    <br>
    <label for="sel1">Building:</label>
<select class="form-control" name="building" style="width: 25%;">
    <option value="b1">1</option>
    <option value="b2">2</option>
    <option value="b3">3</option>
    <option value="b4">4</option>
</select>
    <br>
    <label for="sel1">Name of lab/hall:</label>
<input type="text" name="lab_hall_name">

<table class="table table-bordered">
<thead >

<tr><th style='text-align: center'>Day</th><th style='text-align: center'>8-10</th><th style='text-align: center'>10-12</th><th style='text-align: center'>12-2 </th><th style='text-align: center'>2-4</th><th style='text-align: center'>4-6</th></tr>
</thead>
<tbody>

<tr><td>Saturday</td>
    <?php

$temp="Saturday";
    echo ' <td>
      <select class="form-control" id="sel1"name="Saturday0">
        <option value="none">None</option>';
            foreach($result as $row){
                echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
            }

 echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1"name="Saturday1">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1"name="Saturday2">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1"name="Saturday3">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1"name="Saturday4">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';

    ?>
</tr>
<tr><td>Sunday</td>
    <?php


        echo ' <td>
      <select class="form-control" id="sel1" name="Sunday0">
        <option value="none">None</option>';
        foreach($result as $row){
            echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
        }

        echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1" name="Sunday1">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1" name="Sunday2">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1" name="Sunday3">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1" name="Sunday4">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';

    ?>
</tr>
<tr><td>Monday</td>
    <?php


        echo ' <td>
      <select class="form-control" id="sel1" name="Monday0">
        <option value="none">None</option>';
        foreach($result as $row){
            echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
        }

        echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1" name="Monday1">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1" name="Monday2">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1" name="Monday3">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1" name="Monday4">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';

    ?>
</tr>
<tr><td>Tuesday</td>
    <?php


        echo ' <td>
      <select class="form-control" id="sel1" name="Tuesday0">
        <option value="none">None</option>';
        foreach($result as $row){
            echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
        }

        echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1" name="Tuesday1">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1" name="Tuesday2">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1" name="Tuesday3">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';
    echo ' <td>
      <select class="form-control" id="sel1" name="Tuesday4">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';


    ?>
</tr>
<tr><td>Wednesday</td>
    <?php


        echo ' <td>
      <select class="form-control" id="sel1" name="Wednesday0">
        <option value="none">None</option>';
        foreach($result as $row){
            echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
        }

        echo'  </select>

    </td>';

    echo ' <td>
      <select class="form-control" id="sel1" name="Wednesday1">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';     echo ' <td>
      <select class="form-control" id="sel1" name="Wednesday2">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';     echo ' <td>
      <select class="form-control" id="sel1" name="Wednesday3">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';     echo ' <td>
      <select class="form-control" id="sel1" name="Wednesday4">
        <option value="none">None</option>';
    foreach($result as $row){
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
    }

    echo'  </select>

    </td>';
    ?>
</tr>
<tr><td>Thursday</td>
    <?php


        echo ' <td>
      <select class="form-control" id="sel1" name="Thursday0">
        <option value="none">None</option>';
        foreach($result as $row){
            echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
        }

        echo'  </select>

</td>';
    
        echo ' <td>
      <select class="form-control" id="sel1" name="Thursday1">
        <option value="none">None</option>';
        foreach($result as $row){
            echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
        }

        echo'  </select>

    </td>';
    
        echo ' <td>
      <select class="form-control" id="sel1" name="Thursday2">
        <option value="none">None</option>';
        foreach($result as $row){
            echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
        }

        echo'  </select>

    </td>';
    
        echo ' <td>
      <select class="form-control" id="sel1" name="Thursday3">
        <option value="none">None</option>';
        foreach($result as $row){
            echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
        }

        echo'  </select>

    </td>';
    
        echo ' <td>
      <select class="form-control" id="sel1" name="Thursday4">
        <option value="none">None</option>';
        foreach($result as $row){
            echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
        }

        echo'  </select>

    </td>';
    
    $conn->close();
    ?>
    
</tr>
</tbody>
</table>
    <input type="submit" class="btn btn-info" value="Submit Button">
<div class="social text-center">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-flickr"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>

            <div class="clear"></div>
            <!--CLEAR FLOATS-->
        </div>
        <div class="footer2">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="simplenav">
                                <a href="home.php">Home</a> | 
                                <a href="about.php">About</a> |
                                <a href="Register.php">Register</a> |
                                <a href="Labs.php">Labs</a> |
                                <a href="halls.php">Halls</a> |
                                <a href="Login.php">Login</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /row of panels -->
            </div>
        </div>
    </footer>


    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="assets/js/google-map.js"></script>


</body>
</html>