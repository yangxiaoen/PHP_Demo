<?php
if(!(isset($_COOKIE['isLogin'])) && $_COOKIE['isLogin']=='1'){
	header("Location:login.php");
	exit;
}
?>
<html>
<head><title>网站成功登录页面！</title></head>
<body>
	<?php
	echo "你好".$_COOKIE["username"];
	?>
	<a href="login.php?action=logout">退出</a>
	<p>以下就是系统的主体内容</p>
</body>
</html>