<?php
require "DBSession.php";
try {
	$pdo = new PDO("mysql:host=localhost;dbname=testmail2", "root", "12345678");                        
	}catch(PDOException $e) {
		die("连接失败：".$e->getMessage());}
	DBSession::start($pdo);

	$_SESSION['username']="xiaoming";
	echo $_SESSION['username'];
?>