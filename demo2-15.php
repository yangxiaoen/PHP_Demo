<?php
	//通过系统提供的回调函数，调用类中的函数
	class Demo{
		static function fun($msg1,$msg2){//静态方法
		echo "msg1= ".$msg1;
		echo "---------<br>";
		echo "msg2 = ".$msg2;
		}
	}
	class Test{
		function fun($msg1,$msg2){
		echo "msg1= ".$msg1;
		echo "---------<br>";
		echo "msg2 = ".$msg2;
		}
	}
	call_user_func_array(array("Demo",'fun'),array('你好','中国'));
	call_user_func_array(array(new Test(),'fun'),array('你好','中国'))
?>