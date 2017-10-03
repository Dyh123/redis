<?php
	require 'common.php';
	function up($redis){
		if(!$redis->get('key')){
			$redis->set('key',1);
			//$key = 1;
		}
		if(($redis->get('key'))==1){
			$redis->set('key',2);
			$conn = mysqli_connect('127.0.0.1','root','admin123','mydatabase') or die('数据库连接失败');
			echo 1;exit;
			$conn->autocommit(false);
			$sql = 'update article set type=1 where type=0 limit 1';
			$result = $conn->query($sql);
			if($result){
				echo 1;
				$redis->set('key',1);
				//$redis->lpop('guest');
				$conn->commit();
			}else{
				echo 2;
				$redis->set('key',1);
				//$redis->lpop('guest');
				$conn->rollback();
			}
		}else{
			$redis->rpush('guest',1);
		}	
	}
	up($redis);
	
	
?>
