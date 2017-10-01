<?php
	$conn = mysqli_connect('127.0.0.1','root','root','mydatabase') or die('数据库连接失败');
	$conn->autocommit(false);
	$sql = 'update article set type=1 where type=0 limit 1';
	$result = $conn->query($sql);
	if($result){
		$conn->commit();
	}else{
		$conn->rollback();
	}

?>
