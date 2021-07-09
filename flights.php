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
        

    <body>
        <?php
        include 'includes/header.php';
      
        ?>
     <div id="bg_img">
        <div class="container" id="content" >
         
               
            <br><br>
                <center><h1 style='color: black'><b>Welcome to our MS AIRLINES!</b></h1></center>
                <br>

          
            
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                          <center> <b>BROWSE FLIGHTS</b>  <span class = "glyphicon glyphicon-search"></span></center>
                            
                        </div>
                        <div class="panel-body">
                           
                            <form action="flights_script.php" method="post">
                                
                                <div class="form-group">
                                   <h4><b>FROM</b> </h4><input type="text" class="form-control"  placeholder="from" name="from" required = "true">
                                </div>
                                <div class="form-group">
                                 <h4><b>TO</b>  </h4> <input type="text" class="form-control" placeholder="to" name="to" required = "true">
                                </div>
                                <div class="input-group date" data-provide="datepicker-inline">
                                  <h4> <b>DATE</b> </h4><input type="date" class="form-control" placeholder="date" name="Date">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                    </div>
                                <br><br>
                                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form><br/>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
            
        
    </body>
	<?php include("includes/footer.php"); ?>

</html>
