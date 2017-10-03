<?php
	$size = $redis->lsize('guest');
	if($size>0){
		$conn = mysqli_connect('127.0.0.1','root','admin123','mydatabase') or die('数据库连接失败');
		$conn->autocommit(false);
		$sql = 'update article set type=1 where type=0 limit 1';
		for($i = 0;$i<$size;$i++){
			$result = $conn->query($sql);
			if($result){
				$conn->commit();
			}else{
				$conn->rollback();
			}
			$redis->rpop('guest');
		}
	}
?>