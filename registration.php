

<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
	<style>
		form{
			padding-right: 30px;
		background: url(img/ss.jpg) no-repeat;
			
			width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: right;
    
    background-size: 50%;
    background-position: center;
    background-attachment: fixed;
		}


</style>
<head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="regestration.css">


              <title>jihad/nouha</title>
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

	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<div>

<form action="registration.php" style="border:1px solid #ccc"   method="post">
		<div class="container">
			



		
			<div class="row">
				<div class="col-sm-3"   style="padding-top:100px;" >
					<h1>تسجيل الدخول</h1>
					<p>أدخل معلوماتك الشخصية</p>
					<hr class="mb-3">
					<label for="firstname"><b>الإسم الأول</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="lastname"><b>اسم العائلة</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>

					<label for="email"><b>البريد الإلكتروني</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="phonenumber"><b>رقم الهاتف</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

					<label for="password"><b>كلمة المرور</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					 
					<label for="userr" ><b> نوع المستخدم<b></label><br>
					<select class="form-control" id="userr"  type="userr" name="userr" required>
                          <option value="donor">متبرع </option>
						  
                          <option value="needy">محتاج </option>
						  



					</select><br>


					<hr class="mb-3">
		<input  style=" 
            background-color:blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  padding: 14px 20px;
  float: reight;
  width: 50%;
          opacity:1; " type="submit" id="register" name="create" value="Sign Up">-
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			var userr 	= $('#userr').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password,userr:userr},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>