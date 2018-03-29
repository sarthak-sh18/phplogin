<?php
include("session.php");
?>
<html lang="en">
    <head> 
    	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Welcome</title>
		<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
	</head>
	<body>
		<div class="w3-top">
  <div class="w3-bar w3-black w3-card  w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-left-align w3-right w3-padding-large w3-hover-white w3-small " href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="regi.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white">Registration</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white">Logout</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">

    <a href="regi.php" class="w3-bar-item w3-button w3-padding-large">Registration</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>
  </div>
</div>
<br>
<br>
<br>

<h3 align="center" style="color:#000"> Welcome <?php echo $login_session; ?></h3> 
<h2 align="center" style="color:#000" ></h2> 
</body>
</html>