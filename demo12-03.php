<?php
//session(会话)
//在使用cookie时，用户是可以主动的关闭cookie的，则可以使用session方式在存储用户信息。存储位置是在服务器中。
//1.开启session
session_start();
//2.注册session变量
$_SESSION["username_01"] = "zhangsan";
$_SESSION["uid"] = 10;
?>