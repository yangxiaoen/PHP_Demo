<?php
	//通过POST方式来捕获表单信息
	//$_POST
	echo "用户添加的信息如下所示：<br>";
	foreach ($_POST as $key => $value) {
		echo $key.":".$value."<br>";
	}
?>