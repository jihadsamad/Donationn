<?php
session_start();
$con = mysqli_connect("localhost","root","","1316441");

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['pass'];

	if($email and $password){
	$query = mysqli_query($con,"select * from registration where email = '$email' and password = '$password'");

	if(mysqli_num_rows($query) > 0){
		header("location:Admin Panel.php");
	}
	}else{
		echo "<script>alert('Fields are Empty')</script>";
	}
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">

    
 
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">
    
              <title>jihad/nouha</title>
              <style> body{
      margin:o;
      padding:o;
      text-align:center;
      
     
      font-family: 'Poppins', sans-serif;
   
    box-sizing: border-box;
    scroll-behavior: smooth; 


    padding-right: 30px;
		background: url(img/admin1.jpg) no-repeat;
			
			
    
    display: flex;
  
    background-size: 100%;
    background-position: center;
    background-attachment: fixed;
    }
    header {
      
    background-color: #f0f0f0;
    width: 100%;
    position: fixed;
    z-index: 999;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 200px ;
}
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
  var my_posts = $("[rel=tooltip]");
  for(i=0;i<my_posts.length;i++){
      the_post = $(my_posts[i]);
      if(the_post.hasClass('invert')){
          the_post.tooltip({ placement: 'left'});
          the_post.css("cursor","pointer");
      }else{
          the_post.tooltip({ placement: 'rigt'});
          the_post.css("cursor","pointer");
      }
  }
});
  </script>
  </head>

  <body>
  <header>

      <a href="indexx.php" class="logo">Zakati </a>
         <nav class="navigation">
           <a href="indexx.php">الرئسيسة</a>
          
	 <a href="about.html">من نحن؟</a>
           <a href="contact.php">تواصل معنا</a>
           <a href="admin_login.php"><span class="glyphicon glyphicon-user"></span> admin Login </a>
        </nav>

                   </header>
    
   

          




    <div class="col-sm-10" style="
    padding-top: 100px;
    padding-left:   150px;">
      <div class="container" >
              <div class="row centered-form">
              <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
              	<div class="panel panel-default">
              		<div class="panel-heading">
      			    		<h3 class="panel-title">Please Login here</h3>
      			 			</div>
      			 			<div class="panel-body">
      			    		<form role="form" action="" method="post">
      			    			<div class="row">
      			    				<div class="col-xs-12 col-sm-12 col-md-12">
      			    					<div class="form-group">
      			                <input type="email" name="email" id="first_name" class="form-control input-sm" placeholder="Enter your Email" required>
      			    					</div>
      			    				</div>
      			    				<div class="col-xs-12 col-sm-12 col-md-12">
      			    					<div class="form-group">
      			    						<input type="password" name="pass" id="last_name" class="form-control input-sm" placeholder="***********" required>
      			    					</div>
      			    				</div>
      			    			</div>
      			    			<input type="submit" name="submit" value="Login" class="btn btn-info btn-block">
      			    		</form>
      			    	</div>
      	    		</div>
          		</div>
          	</div>
          </div>
            </div>
          </div>

      </div>
  </body>
</html>
