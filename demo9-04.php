<?php
//统计文件夹下所有文件大小
function dirSize($dir){
	$dir_size = 0;//文件大小

	if($dir_handle=opendir($dir)){
		while ($filename=readdir($dir_handle)) {
			if($filename!="."&& $filename!=".."){
				$subFile = $dir."/".$filename;
				if(is_dir($subFile)){//判断当前路径是否是目录
					$dir_size+=dirSize($subFile);
				}
				if(is_file($subFile)){//判断当前路径是否是文件
					$dir_size+=filesize($subFile);
				}
			}
		}
		closedir($dir_handle);
		return $dir_size;
	}
}
$size = dirSize("C:\\AppServ\\www");
echo round($size/pow(1024,1),2)."KB";
?>