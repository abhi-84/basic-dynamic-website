

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

    <title>Login</title>
</head>



<body class="login-bg">
    <div id="login">
        <h3 class="text-center text-white pt-5"> </h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    
                    
                    
                    
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="checklogin.php" method="post">
                            <h3 class="text-center text-info"><i class="fa fa-1x fa-user" aria-hidden="true"></i> LOGIN </h3>
                            
                            
                             <div class="row">               
       <div class="col-sm-12 col-md-2"> <label for="email" class="text-info"><strong>Email:</strong></label></div>		  
		  <div class="col-sm-12 col-md-10">
					<div class="form-group">
               <input type="text" name="email" id="email" class="form-control">
					</div>
                        </div> </div> 
                            
                            
                            
                             <div class="row">               
       <div class="col-sm-12 col-md-2"> <label for="password" class="text-info"><strong>Password:</strong></label></div>		  
		  <div class="col-sm-12 col-md-10">
					<div class="form-group">
                  <input type="password" name="password" id="password" class="form-control">
					</div>
		  </div>             </div> 
                            
                            
                            
                             
                             <div class="row">               
       <div class="col-sm-12 col-md-2"></div>	
                                 
		  <div class="col-sm-12 col-md-5 mt-2">
					<div class="form-group">
                         <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
                   
					</div>
		  </div>             
         <div class="col-sm-12 col-md-5 text-right mt-3"><a href="register.php" class="text-info">Register here</a></div>      
                            </div> 
                            
                                   
                     
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

