<?php
	$redis = new Redis();
	$redis->connect('127.0.0.1',6379);
	$redis->set('my_name','董亚华');
	echo '姓名:' . $redis->get('my_name');
?>
