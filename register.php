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
?>
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
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
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
						<li class="active"><a href="Register.php">Register</a></li>
					<li><a href="labs.php">Labs</a></li>
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
                    <h1>Register Sections</h1>
                    <p>Know the open times in labs to registers in one</p>
                </div>
    </header>

    
    <div class="container" align="center">

			
			
			
			<form  style="height: 600px ; width:800px ; border-style: solid; padding: 10px; display: inline-block; margin-top:20px" method="post" action="RegInsert.php">
    
    
	<div class="form-group">
	<label for="usr">Name:</label>
	<input type="text" class="form-control" id="usr" placeholder="Enter Name" name="username">
	</div>
	<div class="form-group">
	<label for="usr">ID:</label>
	<input type="text" class="form-control" id="usr" placeholder="Enter ID" name="id">
	</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group">
                    <label for="exampleSelect1">Day</label>
                    <select class="form-control" id="exampleSelect1" name="day">
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                    </select>
                </div>
                
  <div class="form-group">
    <label for="exampleSelect1">SelectTime</label>
    <select class="form-control" id="exampleSelect1" name="time">
        <option value="Pone">8-10</option>
        <option value="Ptwo">10-12</option>
        <option value="Pthree">12-2</option>
        <option value="Pfour">2-4</option>
        <option value="Pfive">4-6</option>
    </select>
  </div>
                
  
  <div class="form-group">
  <label for="exampleSelect1">Select Courses</label>
      <?php
      $sql6="SELECT * FROM courses";
      $result = $conn->query($sql6);
      //  $sql2="SELECT SmartCode FROM hal";
      //$result2 = $conn->query($sql2);
      echo ' 
                <select class="form-control" id="sel1" name="course">
                    <option value="none">None</option>';
      foreach($result as $row){
          echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
      }
      echo'  </select>';

      ?>
  </div>
  
 
    
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
	
			
	<!-- /container -->
 
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
								<a href="labs.php">Labs</a> |
								<a href="Halls.php">Halls</a> |
								<a href="Login.php">Login</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							
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
</body>
</html>
