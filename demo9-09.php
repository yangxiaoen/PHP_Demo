<html>
<head><title>留言板</title></head>
<body>
	<?php
	//文件的位置
	$filename = "C:\\AppServ\\www\\studyphp\\data.txt";
	if(isset($_POST["sub"])){
		$message = $_POST["username"]."||".$_POST["title"]."||".$_POST["mess"]."<|>";
		writeMessage($filename,$message);
	}
	//读文件内容到留言板
	if(file_exists($filename)){
		//自定义的函数--->读文件
		readMessage($filename);
	}
	//实现writeMessage($filename,$message);
	//文件锁的概念
	//12306  去哪  数据同步
	function writeMessage($filename,$message){
		$fp = fopen($filename,"a");//追加文件--“a”
		if(flock($fp, LOCK_EX)){//进行排他锁文件锁定
			fwrite($fp, $message);
			flock($fp,LOCK_UN);//对锁进行释放
		}else{
			echo "不能锁定文件";
		}
		fclose($fp);
	}
	function readMessage($filename){
		$fp = fopen($filename,"r");
		flock($fp,LOCK_SH);//建立文件的共享锁
		$buffer = "";
		while (!feof($fp)) {
			$buffer.=fread($fp,1024);}
		//对字符串进行处理
		$data = explode("<|>", $buffer);//返回一个数据
		//遍历数组，将内容显示到页面上
		foreach ($data as $line ) {
			//将每行的数据按照指定格式进行分割
			list($username,$title,$message)=explode("||",$line);
			if($username!="" && $title!="" && $message!=""){
				echo $username."说：";
				echo $title.", ";
				echo $message."<hr>";
			}
		}
		flock($fp,LOCK_UN);
		fclose($fp);
	}
	?>
	<form action="" method="post">
		用户名:<input type="text" name="username" size=10><br>
		标  题:<input type="text" name="title" size=10><br>
		<textarea name="mess" rows=4 cols=38>请在这里输入留言内容！
		</textarea>
		<input type="submit" name="sub" value="留言">
	</form>
</body>
</html>