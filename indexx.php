<?php 

	session_start();
	
	if(isset($_SESSION['zakati'])){
		header("Location: index.php");
	}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="index.css">
              <title>jihad</title>
</head>
<body>

    <header>

          <a href="indexx.php" class="logo">Zakati</a>
             <nav class="navigation">
               <a href="indexx.php">الرئسيسة</a>
              
               <a href="about.html">من نحن؟</a>
               <a href="contact.php">تواصل معنا</a>
               <a href="admin_login.php"><span class="glyphicon glyphicon-user"></span> admin Login </a>
            </nav>

    </header>


    <section class="main">
        <div>
            <h2>مرحبا بك في موقع زكاتي<br><span>معا للعطاء</span></h2>
            <h3>كن عونا لغيرك</h3>
            <div class="desc animate-box">
					<h2><strong></strong> تبرع <strong>الآن </strong></h2>
					<span><a class="btn btn-primary btn-lg" href="paydetail.php" >Donate Now</a></span>
				</div>
			</div>
          

       
            </div>
        </div>

        

</div>
</div>
    
                           <span  class="jihad">
                      <div class="container h-100">
                 	<div class="d-flex justify-content-center h-100">
	             	<div    class="user_card">
		             	<div class="d-flex justify-content-center">
		                  </div>	
			                 <div class="d-flex justify-content-center form_container">
			<form>

            
        
            <h2 >تسجيل الدخول</h2>
            
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>					
						</div>
						<input type="text" name="username" id="username" class="form-control input_user" required>
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>					
						</div>
						<input type="password" name="password" id="password" class="form-control input_pass" required>
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
							<label class="custom-control-label" for="customControlInline">تذكر كلمة المرور</label>
						</div>
					</div>
				
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<button type="button" name="button" id="login" class="btn login_btn">تسجيل دخول</button> 
			</div>
			</form>
			<div class="mt-4">
				<div class="d-flex justify-content-center links"><a href="registration.php" class="ml-2">
					حساب جديد 
					
					<a> اذا لم يكن لديك حساب</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">هل نسيت كلمة المرور ؟</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
	$(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var username = $('#username').val();
				var password = $('#password').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data:  {username: username, password: password },
				success: function(data){
			
					if($.trim(data) === "1"){
						setTimeout(' window.location.href =  "needy.php"');
					}
                    else if($.trim(data) === "2"){
						setTimeout(' window.location.href =  "index.php"');
					}
                    else{
                        alert('invalid email or password');
                    }
				},
				
			});

		});
	});

</script>
</span>
</section>



<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
   
        </div>
    </section>

   
    
    <footer class="footer">
        <p class="footer-title">Copyrights @ <span>zakati</span></p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>

</body>
</html>