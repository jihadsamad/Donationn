<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){ 

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$password 		= ($_POST['password']);
	$userr		= ($_POST['userr']);

		$sql = "INSERT INTO user (firstname, lastname, email, phonenumber, password,userr ) VALUES(?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password,$userr]);
		if($result){
		echo ('succefully saved');
		}else{
			echo ('There were erros while saving the data.');
		}
}else{
	     echo ('No data');

}
?>