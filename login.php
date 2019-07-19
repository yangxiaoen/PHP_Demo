<?php
//1.声明一个删除cookie信息的函数
function clearCookie(){
	setCookie('username','',time()-3600);
	setCookie('isLogin','',time()-3600);
}
if($_GET["action"]=="login"){
	//调用清除cookie设置的函数
	clearCookie();
	if($_POST["username"]=="admin" && $_POST["password"]=="admin"){
		//将用户名和密码保存到cookie中
		setCookie('username',$_POST['username'],time()+60*60*24*7);
		//设置一个标识符的信息，用来判断是否已经登录
		setCookie('isLogin','1',time()+60*60*24*7);
		//转向登录成功页面
		header("Location:index.php");
	}else{
		die("用户名或密码错误！");
	}
}else if($_GET['action']=='logout'){//注销用户时，要将cookie中的内容删除
	clearCookie();
}
?>
<html>
<head><title>用户登录</title></head>
<body>
	<h2>用户登录</h2>
	<form action="login.php?action=login" method="post">
		用户名:<input type="text" name="username"/><br>
		密  码：<input type="password" name="password"/><br>
		<input type="submit" name="" value="登录"/>
	</form>
</body>
</html>