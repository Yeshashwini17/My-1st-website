<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Signup | MS AIRLINES</title>

         <link rel="stylesheet" href="style.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>

    <body>
	
	<?php include 'includes/header.php'; ?>
	<div id="carousel-example-generic" class="carousel slide" class="carousel slide" data-ride="carousel" style="" data-interval="2000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	<li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>
      
<!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/c.jpeg" alt="...."  width="750px" class="img-responsive">
	</div>
	
    <div class="item">
    <img src="img/b.jpeg" alt="...."  width="750px"  class="img-responsive">
	</div>
	
    <div class="item">
    <img src="img/f.jpeg" alt="...."  width="750px"  class="img-responsive">
	  </div>
	  
    <div class="item">
    <img src="img/a.jpeg" alt="...."  width="750px" class="img-responsive">
	  </div>

	  <div class="item">
    <img src="img/e.jpeg" alt="...." width="750px"  class="img-responsive">
	  </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>
        <div class="container-fluid1 decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-8 col-md- col-md-offset-3">
					<div class="panel-heading">
                        <h1><center><b>SIGN UP</b></h1></center>
						</div>
						<br>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"><br>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true"><br>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true"><br>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true"><br>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true"><br>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true"><br>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

       </div>
	   
	   
	   
	    
	   </body>
	   <br><br><br><br><br><br>
	   <?php include("includes/footer.php"); ?>
	   </html>







