<?php
//第1种：读文件
$filename = "C:\\AppServ\\www\\studyphp\\12.txt";
$handle = fopen($filename,"r") or die("打开文件失败");
$contents = fread($handle,100);
fclose($handle);
echo $contents;
//第二种
$filename = "C:\\AppServ\\www\\studyphp\\12.txt";
$handle = fopen($filename,"r") or die("打开文件失败");
$contents = "";
while (!feof($handle)) {//判断文件的结尾EOF
	$contents.=fread($handle,1024);
}
fclose($handle);
echo $contents;
//第三种
$filename = "C:\\AppServ\\www\\studyphp\\12.txt";
$handle = fopen($filename,"r") or die("打开文件失败");
$contents = fread($handle,filesize($filename));
fclose($handle);
echo $contents;
//1.
echo file_get_contents($filename);
//2.
print_r(file($filename));
//3.
readfile($filename);//将文件的内容直接输出到浏览器中
?>