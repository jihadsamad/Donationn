<?php
session_start();
$con = mysqli_connect("localhost","root","","1316441");
if(isset($_POST['track'])){
				$reference = $_SESSION['reference'] = $_POST['reference'];

				$query2 = mysqli_query($con,"select * from user_donation where reference_key = '$reference'");

				if(mysqli_num_rows($query2) > 0){
					header('location:user_details.php');
				}
			}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DonationHub</title>
    <link rel="stylesheet" type="text/css" href="css/jn.css">
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
});
</script>
  </head>

%social buttons
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  </script>
  </head>
  <body >
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">zakati</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class=""><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="admin_login.php"><span class="glyphicon glyphicon-user"></span> admin Login </a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <nav class="col-sm-2" id="myScrollspy" style="background-color:grey;">
      <p><img src="img/Logo1.png" style="width:170px; height:150px; "> <br> zakati is a platform that provides people all aspects of donation with minimul effort</p>
      <div class="track" style="border:2px;">
                <i class="fa fa-facebook-official"></i>
        <i class="fa fa-facebook-official" style="font-size:48px;color:red"></i>
      </div>
    </nav>


    <div class="col-sm-10" style="background-color:lightgrey;">
      <div class="container" >
              <div class="row centered-form">
              <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
              	<div class="panel panel-default">
              		<div class="panel-heading">
                    <br><br><br><br>
                    <div class="track" style="border:2px;">
                      <h2>Track</h2>
              		<form method="post" action="">
                      <p>Enter your reference number below to get details of your donations</p>
                      <input type="text" name="reference" id="reference" value="" class="form-control input-sm" required>
                      <br>
                      <input type="submit" name="track" value="Track" class="btn btn-info btn-block" style="margin:5px; size:30px">
              		</form>
                    <br><br><br><br>
      			 			</div>
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



  </body>
</html>
