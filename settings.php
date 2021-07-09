<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | MS AIRLINES</title>
           <link rel="stylesheet" href="style.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>
	<div id="settings_banner">
        <?php include 'includes/header.php'; ?><br><br>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <center><h1><b>Change Password</b></h1></center><br><br>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                         <h4><b>Old Password</b></h4>   <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
						 <br>
                        </div>
                        <div class="form-group">
                           <h4><b>New Password</b></h4>  <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
						<br>
                        <div class="form-group">
                           <h4><b>Re-type New Password</b></h4>  <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
						<br>
                        <button type="submit" class="btn btn-primary" onclick="myFunction()"><b>Change</b></button>
	       <script>
		function myFunction() {
 		 alert("Password changed");
		}
		</script>
                        <!--<?php
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?>
                        -->
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>
		</div>
    </body>
	<footer>
    <div class="container">
        <center>
            <p>Copyright &copy; MS AIRLINE. All Rights Reserved  |  Contact Us: +91 1111111111</p>	
        </center>
    </div>
</footer>

</html>