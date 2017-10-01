<?php
	$conn = mysqli_connect('127.0.0.1','root','root','mydatabase') or die('数据库连接失败');
	$sql = 'update article set type=1 where type=0 limit 1';
	$result = $conn->query($sql)
	echo $result;

?>