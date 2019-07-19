<?php
	//对文件的操作
	//将一些字符写入到文件中
	$filename = "C:\\AppServ\\www\\studyphp\\12.txt";
	//打开文件
	// $handle=fopen($filename,'w') or die('打开'.$filename.'失败！');
	// for($row=0;$row<10;$row++){
	// 	fwrite($handle,$row.":www.163.com\n");
	// }
	// fclose($handle);//关闭文件
	//2.写文件操作
	$data = "";
	for($row = 0;$row<10;$row++){
		$data.=$row."www.163.com\n";
	}
	file_put_contents($filename, $data);
?>