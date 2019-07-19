<?php
try{
	$dbh = new PDO('mysql:dbname=bookstore2;host=localhost','root','12345678');
}catch(Exception $e){
	echo "数据库连接失败,".$e->getMessage();
}
echo '<table border="1" align="center" width=90%>';
echo "<caption><h1>图书信息表</h1></caption>";
echo '<tr bgcolor="#ccccc">';
echo '<th>作者</th><th>书名</th><th>介绍</th><th>价格</th><th>出版社</th></tr>';
$stmt = $dbh->prepare("SELECT * FROM book");
$stmt->execute();
$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row){
	echo '<tr>';
	echo '<td>'.$row['author'].'</td>';
	echo '<td>'.$row['bookName'].'</td>';
	echo '<td>'.$row['detail'].'</td>';
	echo '<td>'.$row['price'].'</td>';
	echo '<td>'.$row['publisher'].'</td>';
	echo '</tr>';
}
echo '</table>';
?>