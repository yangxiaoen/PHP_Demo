<?php
	//++ --
	$x = 45;
	echo "<br> x=".++$x;//++在变量后面，先使用，再+1
	echo "<br> x=".$x;
	$y = 12;
	$z = $y++;
	echo "y=".$y."z=".$z;
	$num = 23;
	$num++;
	echo "num=".$num;
	
?>