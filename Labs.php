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
<html xmlns="http://www.w3.org/1999/html">
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
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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
					<li><a href="Register.php">Register</a></li>
					<li><a href="Labs.php">Labs</a></li>
					<li><a href="Halls.php">Halls</a></li>
					<li><a href="Login.php">Login</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<header id="head" class="secondary">
            <div class="container">
                    <h1>Halls timeTable</h1>
                    <p>Know the timeTable with ease.</p>
                </div>
    </header>

<div>
             <div  >
        	<div class="panel panel-default">
            <div class="panel-heading"><h2 style="text-align: center">Labs timeTable</h2></div>
            <div class="panel-body">
                <div >
                    <div class="Present">
                        <?php

                        $sql = "SELECT * FROM labs";

                        $result = $conn->query($sql);
$flag=true;
                        foreach($result as $row) {
                            //  echo '<option value="'.$row['CityName'].'">'.$row['CityName'].'</option>';


                            echo "<div class='LabName' >";
                              $SC=$row['SmartCode'];
                            $TC=$row{'Techguy'};
                            $ST=$row['nom_of_seats'];

                            echo "  <div class='panel-heading'><h3>Lab: $SC</h3><h6> Technician: $TC</h6><h6>Seats: $ST </h6></div>

                        </div>
                        <div class='details' style='display: none'>
                            <table class=\"table table-striped\"style='text-align: center'>
                      <thead >
  <tr><th style='text-align: center'>Day</th><th style='text-align: center'>8-10</th><th style='text-align: center'>10-12</th><th style='text-align: center'>12-2 </th><th style='text-align: center'>2-4</th><th style='text-align: center'>4-6</th></tr>
 </thead>
                      <tbody>";
                      $sql2 = "SELECT * FROM $SC";

                        $result2 = $conn->query($sql2);
                        foreach($result2 as $row2) {
                            $day=$row2['Day'];
                            $input1=$row2['Pone'];
                            $input2=$row2['Ptwo'];
                            $input3=$row2['Pthree'];
                            $input4=$row2['Pfour'];
                            $input5=$row2['Pfive'];
                            echo "<tr><td>$day</td><td>$input1</td><td>$input2</td><td>$input3</td><td>$input4</td><td>$input5</td>";
                        
                     }
                            $flag=false;
                   echo"   </tbody>
               	</table>";
                   echo"     </div>
                    </div>";

                        }
                        $conn->close();
?>
                </div>
                <script>
                    $('.LabName').click(function(){
                        $(this).next('.details').slideToggle();
                    });
                </script>
            </div>
        
          </div>

      </div>
             </div>
       

 <footer id="footer">
 
		
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
								<a href="Halls.php">Halls</a> |
								<a href="Login.php">Login</a>
							</p>
						</div>
					</div>

					
							
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
      
	</script>
	</body>
	</html>


