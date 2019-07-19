<?php
//文件系统的操作
error_reporting(0);
function getFilePro($filename){//文件的路径
//1.判断文件是否存在
if(!file_exists($filename)){
	echo "目标文件不存在！";
	return;
}
//2.判断是否是一个文件
if(is_file($filename)){
	echo $filename."是一个文件.<br>";
}
//3.判断是否是一个目录
if(is_dir($filename)){
	echo $filename."是一个目录.<br>";
}
//4.输出文件的形态
echo "文件的形态：".getFileType($filename)."<br>";######
//5.输出文件的大小
echo "文件的大小：".getFileSize(filesize($filename))."<br>";#####
//6.文件的读写属性
if(is_readable($filename)){//文件是否可读
	echo "文件可读。<br>";
}
if(is_writable($filename)){//文件是否可写
	echo "文件可写。<br>";
}
if(is_executable($filename)){//文件是否可执行
	echo "文件可执行。<br>";
}
//7.文件的时间
echo "文件的建立时间：".date("Y年m月j日",filectime($filename))."<br>";
echo "文件的更新时间：".date("Y年m月j日",filemtime($filename))."<br>";
echo "文件的最后打开时间：".date("Y年m月j日",fileatime($filename))."<br>";
}
function getFileType($filename){
	switch (filetype($filename)) {//返回文件类型
		case 'file': $type.="普通文件";break;
		case 'dir': $type.="目录文件";break;
		case 'block': $type.="块设备文件";break;
		case 'char': $type.="字符设备文件";break;
		case 'fifo': $type.="命名管道文件";break;
		case 'link': $type.="符号链接";break;
		case 'unknown': $type.="未知文件";break;
		default:$type.="没有检测到文件类型";break;
	}
	return $type;
}
function getFileSize($bytes){
	if($bytes>=pow(2,40)){
		$return=round($bytes/pow(2,40),2);
		$suffix = 'TB';
	}elseif ($bytes>=pow(2,30)) {
		$return=round($bytes/pow(2,30),2);
		$suffix = 'GB';
	}elseif ($bytes>=pow(2,20)) {
		$return=round($bytes/pow(2,20),2);
		$suffix = 'MB';
	}elseif ($bytes>=pow(2,10)) {
		$return=round($bytes/pow(2,10),2);
		$suffix = 'KB';
	}else{
		$return = $bytes;
		$suffix ='Byte';
	}
	return $return." ".$suffix;
}
getFilePro("demo8-04.php");
?>