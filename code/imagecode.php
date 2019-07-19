<?php
	session_start();//开启session
	require_once('Vcode.class.php');
	echo new Vcode();
?>