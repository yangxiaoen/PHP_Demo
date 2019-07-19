<?php
//查询
$link = mysql_connect('localhost','root','12345678');
if(!$link){
	die("数据库连接失败".mysql_error());
}
mysql_select_db('bookstore2',$link) or die("不能选定指定的数据库：".mysql_error());
$select = 'SELECT * FROM book';
$result = mysql_query($select);
echo '<table align = "center" width="80%" border = "1">';
echo "<caption><h1>图书信息表</h1></caption>";
echo '<th>作者</th> <th>图书名</th> <th>介绍</th><th>价格</th><th>出版社</th>';
while ($row = mysql_fetch_row($result)) {
	echo "<tr>";
		foreach ($row as $data) {
			echo "<td>".$data."</td>";
		}
	echo "</tr>";
}
echo "</table>";
mysql_free_result($result);//释放资源
mysql_close($link);
?>