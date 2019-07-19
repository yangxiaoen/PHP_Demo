<?php
	//可变参数函数的另一种形式
	function more_args(){
		echo func_get_args();
		for($i = 0;$i<func_get_args();$i++){
			echo "第".$i."个参数为：".func_get_arg($i)."<br>";
		}
	}
	more_args("one","two","three");
?>