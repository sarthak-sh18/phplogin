<?php 
include('db.php');
session_start();
{
    $user=mysql_real_escape_string($_POST['username']);
    $pass=mysql_real_escape_string($_POST['password']);
    $fetch=mysql_query("SELECT id FROM `users` WHERE 
                         username ='$user' and password=MD5('$pass')");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
    
    $_SESSION['login_username']=$user;
    header("Location:profile.php"); 
    }
    else
    {
       header('Location:loginform.php');
    }

}
?>

<!DOCTYPE html>
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
        <link rel="stylesheet" href="style4.css">
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

        <title>Log-in</title>
        <style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
    </head>
    <body>
        <div class="w3-top">
  <div class="w3-bar w3-black w3-card  w3-large">

    <a href="regi.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white">Registration</a>
    <a href="login.html" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white">Log-in</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">

    <a href="regi.php" class="w3-bar-item w3-button w3-padding-large">Registration</a>
    <a href="loginform.php" class="w3-bar-item w3-button w3-padding-large">Log-in</a>
  </div>
</div>
        
        <br>



        <div class="container">
            <div class="row main">
                <div class="main-login main-center">
                <center><h1>Log-in</h5></center>
                    <form  method="POST" action="login.php">
                        
                        

                        <div class="form-group">
                            <label  class="cols-sm-2 control-label">Username</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="username" id="email"  placeholder="Enter your Email" required/>
                                </div>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <label  class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password"   placeholder="Enter your Password" required>
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-group " style="margin-top:-25px">
                            <center><button type="submit" id="button" name="login" class="btn btn-primary btn-lg btn-block login-button">Log-in</button></center>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
    </body>
</html>