<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome TO MS AIRLINES</title>
         <link rel="stylesheet" href="style.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>
	<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php"> MS AIRLINES</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "booking_history.php"><span class = "glyphicon glyphicon-list"></span> My Bookings </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
               
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="log.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>
          <div id="content">
            <div id ="banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>MS AIRLINES</h1>
                            <p>Check flights here</p>
                            <br/>
                            <a  href="log.php" class="btn btn-danger btn-lg active">Click here</a>
                        </div>
                    </center>
                </div>
            </div>
		</div>
    </body>
<?php
        include 'includes/footer.php';
        ?>	
</html>