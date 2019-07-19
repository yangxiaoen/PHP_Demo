<?php
$contact6 = array('编号' =>1 ,"姓名"=>"张三",
	"公司"=>"A公司" );
	//使用each()函数和list()函数对数组进行变量
	echo "<dl>联系人信息";
	while (list($key,$value)=each($contact6)) {
		echo "<dd> $key:$value</dd>";
	}

	echo "</dl>";
?>