
<?php
require_once('config.php');
?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="infoneedy.css">
  <head>
  </head>
<?php
           
  session_start();
   $con = mysqli_connect("localhost","root","","useraccounts");
           
    if(isset($_POST['submit'])){
          $username = $_POST['username'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $address = $_POST['address'];
          $nb_dtn = $_POST['nb_dtn'];
  
		$sql = "INSERT INTO needy(username,email,phone,address,nb_dtn ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$username, $email, $phone, $address, $nb_dtn]);
	
    
 
    }
?>
    <div id="contentt" class="contentt">
        <div class="r_content">
        
         <div class="container"  style="border:1px solid #ccc">
  <h1>معلوماتك الشخصية</h1>
    <p>أدخل معلوماتك الشخصية بشكل صحيح</p>
    <hr>
            
            <form action="" method="post">
            <input type="text" name="username" id="username" class="form-control input-sm" placeholder="الإسم والعائلة" required>
      			<input type="text" name="email" id="email" class="form-control input-sm" placeholder="البريد الإلكتروني" required>
      			<input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="رقم الهاتف" required>
      			<input type="text" name="address" id="address" class="form-control input-sm" placeholder="مكان الإقامة" required>
      			<input  type="text" name="nb_dtn" id="nb_dtn" class="form-control input-sm" placeholder="رقم التبرع الذي اخترته" required>
      			
            
            <input type="submit"  id="submit" name="submit" value="أرسل" class="submittt">
            <div class="clearfix">
      <button  href="needy.php" type="button" class="cancelbtn" style=" float: left; width: 50%;">Cancel</button>
      
    </div>
  </div>
</form>
            
           
  </body>
</html>


    
   

  