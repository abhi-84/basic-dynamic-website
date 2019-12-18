<?php 
session_start(); 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      	<link rel="stylesheet" type="text/css" href="custom.css">

    <title>Register</title>
</head>



<body class="register-bg">
    <div id="register">
        <h3 class="text-center text-white pt-5"> </h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
			<?php 
			if(isset($_SESSION['error']))
				echo $_SESSION['error'];
			?>
                        <form id="login-form" class="form" action="registeruser.php" method="post">
                            <h3 class="text-center text-info"><i class="fa fa-1x fa-user" aria-hidden="true"></i> Register</h3>
                            
                            
                                <div class="row">               
       <div class="col-sm-12 col-md-2"> <label for="name" class="text-info">Name:</label></div>		  
		  <div class="col-sm-12 col-md-10">
					<div class="form-group">
                <input type="text" name="name" id="name" class="form-control" required>
					</div>
                        </div> </div> 
                            
                            
                            
                               <div class="row">               
       <div class="col-sm-12 col-md-2"> <label for="email" class="text-info">Email:</label></div>		  
		  <div class="col-sm-12 col-md-10">
					<div class="form-group">
                 <input type="email" name="email" id="email" class="form-control" required>
					</div>
                        </div> </div> 
                            
               
                                       <div class="row">               
       <div class="col-sm-12 col-md-2"> <label for="password" class="text-info">Password:</label></div>		  
		  <div class="col-sm-12 col-md-10">
					<div class="form-group">
                <input type="password" name="password" id="password" class="form-control" required>
					</div>
                        </div> </div> 
                            
                            
                             <div class="row">               
       <div class="col-sm-12 col-md-2"></div>		  
		  <div class="col-sm-12 col-md-10">
					<div class="form-group">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
					</div>
                        </div> </div> 
                            
                           
                            
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <footer>
         <div class="container text-center">
             <div class="row">
            <div class="col-md-12 col-sm-12">
		Copyright © <script type="text/javascript">
  document.write(new Date().getFullYear());
</script> <a href="http://edunetworld.com/" target="_blank">Edunet Foundation</a>. All rights reserved.
             </div></div>
        </div>
   </footer>    
</body>
 
</html>
<script type="text/javascript">

</script>

