<?php
	require 'common.php';
	$redis->setex('my_name',60,'董亚华');
	echo '生存时间' . $redis->ttl('my_name');
	echo '姓名:' . $redis->get('my_name');
?>
