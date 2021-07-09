<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "air")or die($mysqli_error($con));
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
$email=$_SESSION['email'];
mysqli_multi_query ($con, "CALL Deletebd") OR DIE (mysqli_error($con));
mysqli_multi_query ($con, "CALL Deletepd") OR DIE (mysqli_error($con));
session_destroy();



?>
<html>
    <head>
        <title>Log Out</title>
        <link rel="stylesheet" type="text/css" href="style.css" > 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <div class="banner" >
        <div class="container" style=" margin-top:100px; margin-bottom: 350px">
            <div class="jumbotron">
                <h1>Logged Out Successfully!</h1>
                <p><h2>You can Book Tickets again <a href="index.php"><font color="red">here</a></h2></p>
            </div>
        </div> </div>
    </body>
	<?php
        include 'includes/footer.php';
        ?>
		</html>