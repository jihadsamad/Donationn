<?php 

session_start();

	if(!isset($_SESSION['zakati'])){
		header("Location: indexx.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: indexx.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet"  href="style.css">
              <title>jihad/nouha</title>
   
  </head>

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

   <body>
   <header>

<a href="#" class="logo">Zakati </a>
   <nav class="navigation">
	 <a href="#services">الرئسيسة</a>
	 
	 <a href="about.html">من نحن؟</a>
	 <a href="contact.php">تواصل معنا</a>
	 <a href="admin_login.php"><span class="glyphicon glyphicon-user"></span> admin Login </a>
     <a href="index.php?logout=true">Logout</a>
   </nav>
  
     

             </header>

 <?php
session_start();
$con = mysqli_connect("localhost","root","","1316441");


if(isset($_POST['submit'])){
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
  $description = $_POST['description'];
	$date = date("Y-m-d");
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp = $_FILES['image']['tmp_name'];
	$note = $_POST['note'];
	$reference_key = rand(00000,99999);

	if($image_type == "image/jpeg" or $image_type == "image/png" or $image_type == "image/gif"){
		if($image_size <= 100000000){
			move_uploaded_file($image_tmp,"img/$image_name");
		}else{
			echo "<script>alert('Image is larger')</script>";
		}
	}else{
		echo "<script>alert('Invalid image type')</script>";
	}

	$query = mysqli_query($con,"insert into user_donation(first_name,last_name,email,phone,address,description,image,note,reference_key,date,status)
							values('$first_name','$last_name','$email','$phone','$address','$description','$image_name','$note','$reference_key','$date','new')");

	if($query > 0){
		echo "<script>alert('Thank you for your donation.To check your details your reference key is $reference_key')</script>";
	}
}if(isset($_POST['track'])){
				$reference = $_SESSION['reference'] = $_POST['reference'];

				$query2 = mysqli_query($con,"select * from user_donation where reference_key = '$reference'");

				if(mysqli_num_rows($query2) > 0){
					header('location:user_details.php');
				}
			}
?>

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}





.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
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







  <div class="row" style="	padding-right: 30px;
		background: url(img/uuu.webp) no-repeat;
			
			
    
    display: flex;
  
    background-size: 100%;
    background-position: center;
    background-attachment: fixed;
    padding-left: 16px;
    padding-top: 14px;
    padding-left: 16px;
    padding-top: 14px;">
    <nav class="col-sm-2" id="myScrollspy" style="
    padding-left: 30px;">
      <p><img src="Log.jpg" style="width:170px; height:150px; "> <br> zakati is a platform that provides people all aspects of donation with minimul effort and high efficiency</p>
      <div class="track" style="border:2px;">
        <h2>Track</h2>
		<form method="post" action="">
        <p>Enter your reference number below to get details of your donations</p>
        <input type="text" name="reference" id="reference" value="" class="form-control input-sm" required>
        <br>
        <input type="submit" name="track" value="Track" class="btn btn-info btn-block" style="margin:5px; size:30px">
		</form>
        <i class="fa fa-facebook-official"></i>
        <i class="fa fa-facebook-official" style="font-size:48px;color:red"></i>
      </div>
    </nav>


    <div class="col-sm-10" >
      <div class="container" >
              <div class="row centered-form">
              <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
              	<div class="panel panel-default">
              		<div class="panel-heading">
      			    		<h3 class="panel-title">Please Enter your Donations Details Below</h3>
      			 			</div>
      			 			<div class="panel-body">
      			    		<form role="form" action="" method="post" enctype="multipart/form-data">
      			    			<div class="row">
      			    				<div class="col-xs-6 col-sm-6 col-md-6">
      			    					<div class="form-group">
      			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" required>
      			    					</div>
      			    				</div>
      			    				<div class="col-xs-6 col-sm-6 col-md-6">
      			    					<div class="form-group">
      			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" required>
      			    					</div>
      			    				</div>
      			    			</div>

      			    			<div class="form-group">
      			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required>
      			    			</div>

                      <div class="form-group">
      			    				<input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="Phone Number" required>
      			    			</div>
								 <div class="form-group">
      			    				<input type="text" name="address" id="addres" class="form-control input-sm" placeholder="Your Address" required>
      			    			</div>
                      <div class="form-group">
      			    				<input  type="text" name="description" id="description" class="form-control input-sm" placeholder="description" required>
      			    			</div>

      			    			<div class="row">
      			    				<div class="col-xs-12 col-sm-12 col-md-12">
      			    					<div class="form-group">
      			    						<input type="file" name="image" id="address" class="form-control input-sm" required>
      			    					</div>
      			    				</div>
      			    			</div>

                      <div class="form-group">
												<p>Donations Pickup Time </p>
      			    				<input type="date" min="2018-02-20"name="note" id="note" class="form-control input-sm" placeholder="Pickup date">
      			    			</div>

      			    			<input type="submit" name="submit" value="Donate" class="btn btn-info btn-block">

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



  </body>
</html>
