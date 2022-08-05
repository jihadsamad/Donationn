<?php
session_start();
require_once('configl.php');


$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email = ? AND password = ? and userr= 'needy' LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		$_SESSION['zakati'] = $user;
		echo '1';
	}else{
		$sql = "SELECT * FROM user WHERE email = ? AND password = ? and userr= 'donor' LIMIT 1";
		$stmtselect  = $db->prepare($sql);
		$result = $stmtselect->execute([$username, $password]);
		
		if($result){
			$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
			if($stmtselect->rowCount() > 0){
				$_SESSION['zakati'] = $user;
				echo '2';
			}
	}
	
}}

?>