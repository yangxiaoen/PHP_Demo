<?php
	//通过foreach语句遍历数组
	$contact8 = array(1,"张三","A公司" );
	$num = 0;
	foreach ($contact8 as $value) {
		echo "数组中的第".$num."个元素为：".$value.",";
		$num++;
	}

	$contact6 = array('编号' =>1 ,"姓名"=>"张三",
	"公司"=>"A公司" );
	echo "<dl>";
	foreach ($contact6 as $key => $value) {
		echo "<dd>".$key.":".$value."</dd>";
	}
	echo "</dl>";
?>