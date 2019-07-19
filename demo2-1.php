<?php
//自定义函数
	define("GEE", 3.14,true);
	function getCircleArea($raduis){
		$area = GEE*$raduis*$raduis;
		return $area;
	}
	$s = getCircleArea(9);
	echo "圆形的面积为：".$s;
?>