<?php 
 $dsn = 'mysql:host=sql2.njit.edu;dbname=sp2257';
 $username='sp2257';
 $password='tiB0riOq';
try {
	$db = new PDO($dsn, $username, $password);
}catch(PDOException $e){
	$error_message = $e->getMessage();
	exit();
}
?>
