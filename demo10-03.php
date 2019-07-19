<?php
$link = mysql_connect('localhost','root','12345678');
if(!$link){
	die("连接失败：".mysql_error());
}
echo "数据库连接成功！<br>";
mysql_select_db('bookstore2',$link) or die('不能选择指定的数据库'.mysql_error());
// $insert = "INSERT INTO book(author,bookName,detail,price,publisher) VALUES
// 			('张三','PHP','与php相关的书籍','34.00','清华大学'),
// 			('李四','JSP','与jsp相关的书籍','54.00','电子工业'),
// 			('王五','ASP','与asp相关的书籍','74.00','人民邮电')";
// //将sql语句发送并执行sql语句
// $result= mysql_query($insert);
// if($result && mysql_affected_rows()>0){
// 	echo "数据插入成功,最后一条插入的数据ID为：".mysql_insert_id()."<br>";
// }else{
// 	echo "插入失败,错误号为：".mysql_errno()." 错误原因为：".mysql_error();
// }
//修改
// $update = "UPDATE book SET price = 79.9 WHERE bookName='PHP'";
// $result1 = mysql_query($update);
// if($result1 && mysql_affected_rows()>0){
// 	echo "数据记录修改成功";
// }else{
// 	echo "数据记录修改失败，错误号：".mysql_errno()."错误原因为：".mysql_error();
// }
// 删除数据
$result2 = mysql_query("DELETE FROM book WHERE bookName='JSP'");
if($result2 && mysql_affected_rows()>0){
	echo "数据记录删除成功";
}else{
	echo "数据记录删除失败，错误号：".mysql_errno()."错误原因为：".mysql_error();
}
mysql_close($link);












?>