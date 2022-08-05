<?php
session_start();
$con = mysqli_connect("localhost","root","","1316441");

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$confirm_password = $_POST['confirm_pass'];

	if($password != $confirm_password){
		echo "<script>alert('Confirm password is not matching with Password.')</script>";
	}else{
		$query = mysqli_query($con,"insert into registration(name,email,password)
								values('$name','$email','$password')");

		if($query > 0){
			echo "<script>alert('Registerer Successfully.')</script>";
		}
	}
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DonationHub</title>
   
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
});</script>
  </head>




  
  <body >
  <header>

<a href="" class="logo">Zakati </a>
<a href="admin_login.php"><span class="glyphicon glyphicon-user"></span> admin Login </a>
     

             </header>
			 <section style=" width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: url(img/admin1.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;" class="main">

</nav>
    <div class="col-sm-10" >
    <div class="container" >
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
              	<div style="background-color: blue;" class="panel-heading">
      			    <h3 class="panel-title">Please Register here</h3>
      			</div>
      			 <div class="panel-body">
      			    <form role="form" action="" method="post">
      			    	<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
      			    			<div class="form-group">
									<input type="name" name="name" id="first_name" class="form-control input-sm" placeholder="Enter your name" required>
      			    			</div>
      			    		</div>
      			    		<div class="col-xs-12 col-sm-12 col-md-12">
      			    			<div class="form-group">
									<input type="email" name="email" id="first_name" class="form-control input-sm" placeholder="Enter your Email" required>
      			    			</div>
      			    		</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
      			    			<div class="form-group">
									<input type="password" name="pass" id="first_name" class="form-control input-sm" placeholder="Enter your password" required>
      			    			</div>
      			    		</div>
      			    		<div class="col-xs-12 col-sm-12 col-md-12">
      			    			<div class="form-group">
      			    				<input type="password" name="confirm_pass" id="last_name" class="form-control input-sm" placeholder="confirm password" required>
      			    			</div>
      			    		</div>
      			    	</div>
      			    	<input style="background-color:blue ;" type="submit" name="submit" value="Register" class="btn btn-info btn-block"><br>

      			    		</form>
      			    	</div>
      	    		</div>
          		</div>
          	</div>
          </div>
            </div>
          </div>
        </li>
    </ul>

      </div>
    </div>
  </div>

			 </section>

  </body>
</html>
