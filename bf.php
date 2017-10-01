<?php
	require 'common.php';
	function up($redis){
		if(!($key = $redis->get('key'))){
			$redis->set('key',1);
			$key = 1;
		}
		echo $key;exit;
		if($key==1){
			$redis->set('key',2);
			$conn = mysqli_connect('127.0.0.1','root','root','mydatabase') or die('数据库连接失败');
			$conn->autocommit(false);
			$sql = 'update article set type=1 where type=0 limit 1';
			$result = $conn->query($sql);
			if($result){
				$redis->set('key',1);
				$redis->lpop('guest');
				$conn->commit();
			}else{
				$redis->set('key',1);
				$redis->lpop('guest');
				$conn->rollback();
			}
		}else{
			$redis->rpush('guest',1);
		}	
	}
	up($redis);
	while($redis->lsize('guest')){
		up($redis);
	}
	
?>
