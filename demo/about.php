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
      <link rel="stylesheet" type="text/css" href="custom.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>About us</title>
   </head>
   <body>
      <header>
         <div class="container">
             
            <div class="row">
               <div class="col-md-6 col-sm-12">
                   <div class="logo"><h5 class="text-white">Hosting of Dynamic Website on Amazon AWS</h5></div> 
               </div>
                
                <div class="col-md-4 col-sm-12">
                  <div class="navbar">
  <a href="welcome.php">Home</a>
  <a href="about.php">About us</a>
      
                    </div>
               </div>
                
                
			   <div class="col-md-2 col-sm-12 text-right">
				<?php if(isset($_SESSION['name'])): ?>
                  <h6 class="logout"><a class="text-white" href="logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a><h6>
				<?php endif ?>
               </div>
            </div>
            
                   
           
            
         </div>
      </header>
      <section class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12">
               <h3>About us</h3>
            </div>
         </div>
         <div class="row">
            
             <div class="col-md-12 col-sm-12">
             <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere vel justo at accumsan. Aenean turpis ipsum, venenatis elementum tortor sit amet, ultrices dapibus eros. Aenean lobortis non sapien id vehicula. Sed tincidunt nunc ac erat pretium, a luctus tortor tristique. Aliquam varius finibus tellus, vulputate semper mi. Vestibulum nisi dolor, rhoncus vitae iaculis ac, vehicula at odio. Aenean lacus arcu, consequat non suscipit eu, semper hendrerit nisi. In lacinia tincidunt purus tincidunt posuere. Morbi vitae felis suscipit, malesuada massa quis, mattis ipsum. Nulla facilisi. Nullam in magna at metus aliquam pharetra et at lacus. Proin eu orci sem. In fermentum sem ligula, eget faucibus quam posuere non.
                
               </p>
             
             </div> 
         </div>
      </section>
             
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


