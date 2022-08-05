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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/a5fdfa1bd7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>needy</title>
    <style>
    .cart{
        margin-top:100px;
        background-color: goldenrod;
        margin-left: 92%;
        border: 0;
    }
    </style>
</head>
<body  style="background: url(img/needy1.webp) no-repeat;
    background-size: 100%;
    background-position: center;
    background-attachment: fixed;">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <header>

       <a href="indexx.php" class="logo">Zakati</a>
           <nav class="navigation">
                 <a href="indexx.php">الرئسيسة</a>
                 
                 <a href="#"> بحاجة مادية؟</a>
	          <a href="about.html">من نحن؟</a>
                 <a href="contact.php">تواصل معنا</a>
             <a href="admin_login.php"><span class="glyphicon glyphicon-user"></span> admin Login </a>
             <a href="needy.php?logout=true">Logout</a>
                      </nav>
            
    
        </div>
    </div>
               </header>

        
    <div class="container">
        <div class="row"   style="padding-top:100px;">
        <?php
			$con = mysqli_connect("localhost","root","","1316441");
            $i = 1;
        $result = mysqli_query($con,"SELECT * FROM user_donation");
        while($row = mysqli_fetch_array($result)) {
        ?>
         
            <div class="card col-md-3">
            <form action="" method="post">
            <img class="img img-responsive" src="img/<?php echo $row['image'];?>" width="100" height="100"/>
            <?php echo $i++;?>
                <h5 class="itemdata"><?php echo $row['status'] ?></h5>
                <p class="itemdata"    ><?php echo $row['description'] ?></p>
                <p>addrress<strong >:<?php echo $row['address'] ?></strong></p>


               <div>
               <a class="btn btn-primary btn-lg" href="infoneedy.php" >إختيار</a>
               </div>
               
        
            </div>
            </form>
            <?php } ?>
        </div>
    </div>

   

   

</body>
</html>