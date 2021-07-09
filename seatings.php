<?php
require("includes/common.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FLIGHTS | MS AIRLINES</title>
          <link rel="stylesheet" href="style.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        

    <body style="background-color:#">
	  <?php
        include 'includes/header.php';
      
        ?>
	<div id="seatings_banner">
       
               
        <div class="container" >
            <form action="seatings_script.php" method="POST">
            
                <center><h1><b><font color="black">PASSENGER DETAILS </font></b></h1></center><br><br>
            <table class="table table-striped table-bordered" style="background-color:#">
                <tbody  >

                    <tr><th><center>SERIAL No. </center></th> <th><center>NAME</center> </th> <th><center>GENDER </center></th><th><center>AGE </center></th></tr>
                    <tr><td><center>1</center></td> <td><center><input type="text" name="name"></center></td> <td><center><select name="gender"><option value=""></option><option value="female">female</option><option value="male">male</option><option value="other">other</option></select></center></td> <td><center><input type="number" name="age"></center></td></tr>
                    <tr><td><center>2</center></td> <td><center><input type="text" name="name1"></center></td> <td><center><select name="gender1"><option value=""></option><option value="female">female</option><option value="male">male</option><option value="other">other</option></select></center></td> <td><center><input type="number" name="age1"></center></td></tr>
                    <tr><td><center>3</center></td> <td><center><input type="text" name="name2"></center></td> <td><center><select name="gender2"><option value=""></option><option value="female">female</option><option value="male">male</option><option value="other">other</option></select></center></td> <td><center><input type="number" name="age2"></td></center></tr>
                    <tr><td><center>4</center></td> <td><center><input type="text" name="name3"></center></td> <td><center><select name="gender3"><option value=""></option><option value="female">female</option><option value="male">male</option><option value="other">other</option></select></center></td> <td><center><input type="number" name="age3"></center></td></tr>
                    </tbody>
            </table>
			<br>
                <button class="btn btn-primary" type="submit" value="submit"><h4><b><font color="white">Proceed to Payment</b></h4></button>
            </form>
			
        </div>
          </div>
			  
    </body>
		<?php include 'includes/footer.php'; ?>		  
		</html>
