 <?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: flights.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login </title>

         <link rel="stylesheet" href="style.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library-->   
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>

    <body>
	<?php include 'includes/header.php'; ?>
 
 	<div id="login_banner">
    <div class="container-fluid decor_bg" id="content">
    <font color="red">
            <div class="row">
                <div class="container">
                    <div class="col-lg-5 col-lg-offset-8">
					<div class="panel-heading"><br><br><br>
                        <h1><center><b>LOGIN</b></h1></center>
						</div>
						<br>
						<p class="text-warning"><font color="black"><i>Login to book a ticket.</font></i><p><br>
                        <form method="POST">
                            <div class="form-group">
                                <h4><b>Email</b></h4><input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                            </div>
							<br>
							 <div class="form-group">
                                <h4><b>Password</b></h4><input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                            </div>
                            <br>
                            <button type="submit" name="submit" class="btn btn-primary"><font color="white"><h4><b>Login</b></h4></button><br><br></font></button>
                            <br></font><font color="white">
							<?php
                               if(isset($_POST['submit'])){

                                    $email = $_POST['e-mail'];
                                    $email = mysqli_real_escape_string($con, $email);
                        
                                    $password = $_POST['password'];
                                    $password = mysqli_real_escape_string($con, $password);
                                      // Query checks if the email and password are present in the database.
                                    $query = "SELECT * FROM users WHERE email='" . $email . "' AND password='" .$password . "'";
                                    $result = mysqli_query($con, $query)or die($mysqli_error($con));
                                    $num = mysqli_num_rows($result);
                                        // If the email and password are not present in the database, the mysqli_num_rows returns 0,
                                        
                                    if ($num == 0) {
                                    echo "Please enter correct E-mail id and Password";
                                   
                               } else {
                                    $row = mysqli_fetch_array($result);
                                    $_SESSION['email'] = $row['email'];
                                    $_SESSION['user_id'] = $row['id'];
                                    
                                    header('location: flights.php');
                                                    }
                                                }
                            ?>
							</font>
							<font color="red">
					   </form>
					   <div class="panel-footer"><p><h4><b>Don't have an account? <a href="signup.php"><font color="black">Register</a></b></h4></p></div></h4>
					   </font>
                    </div>
                </div>
            </div>
 </div>
       </div>
	   
	   </body>
	    <?php include 'includes/footer.php'; ?>
</html>







