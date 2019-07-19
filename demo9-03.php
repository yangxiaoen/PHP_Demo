<?php
	error_reporting(0);
	$num = 0;//统计文件和目录的个数
	$dirname = 'C:\\AppServ\\www\\15';//遍历的目录
	//打开一个目录
	$dir_handle=opendir($dirname);
	echo '<table align="center" width="600">';
	echo '<caption><h2>目录'.$dirname.'下面的内容</h2></caption>';
	echo '<tr align="center" bgcolor="#ccccc">';
	echo '<th>文件名</th><th>文件大小</th><th>文件类型</th><th>修改时间</th></tr>';
	//循环读取目录中的内容
	while($file=readdir($dir_handle)){
		$dirFile = $dirname."/".$file;
		$bgcolor=$num++%2==0? '#FFFFF':'#CCCCC';
		echo '<tr bgcolor='.$bgcolor.'>';
		echo '<td>'.$file.'</td>';
		echo '<td>'.filesize($dirFile).'</td>';
		echo '<td>'.filetype($dirFile).'</td>';
		echo '<td>'.date("Y/n/t",filemtime($dirFile)).'</td>';
		echo '</tr>';
	}
	echo '</table>';
	//关闭文件
	closedir($dir_handle);
	echo '在<b>'.$dirname.'</b>目录下的文件数和目录数共有<b>'.$num.'</b>个';

?>