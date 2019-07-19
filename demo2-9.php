<?php
	//可变参数函数--->函数参数的个数不确定
	function more_agrs(){
		$args=func_get_args();//将外部传进来的参数变为一个数组的形式(接收多个参数)
		//echo count($args);
		for ($i=0; $i < count($args); $i++) { 
			echo "第".$i."个参数：".$args[$i]."<br>";
		}
	}
	more_agrs("one","two","three");
	more_agrs(1,2,3,4,5,6,7);
?>