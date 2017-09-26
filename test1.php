<?php
	$redis = new Redis();
	$redis->connect('127.0.0.1',6379);
	$redis->setex('my_name',120,'董亚华');
	echo '生存时间' . $redis->ttl('my_name');
	echo '姓名:' . $redis->get('my_name');
?>
