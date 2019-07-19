<?php
//2维数组的遍历
 $contact = array(
		array(1,"张三","A公司","太原市","138000","a@qq.com"),
		array(2,"李四","B公司","太原市","138000","a@qq.com"),
		array(3,"王五","C公司","太原市","138000","a@qq.com")
	 );
 echo "<table border='1' width = '600' align = 'center'>";
 echo "<caption><h1>联系人列表</h1></caption>";
 echo "<tr bgcolor = '#ddddd'>";
 echo "<th>编号</th><th>姓名</th><th>公司</th><th>地址</th>
 <th>电话</th><th>Email</th>";
 echo "</tr>";
 //开始遍历二维数组
 for($row = 0;$row<count($contact);$row++){//行
 	echo "<tr>";
 	for($col = 0;$col<count($contact[$row]);$col++){
 		echo "<td>".$contact[$row][$col]."</td>";
 	}
 	echo "</tr>";
 }
 echo "</table>";
?>