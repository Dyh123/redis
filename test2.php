<?php
	require 'common.php';
	//echo '生存时间' . $redis->ttl('my_name');
	echo '姓名:' . $redis->get('my_name');
	$redis->delete('my_name');
	echo '姓名:' . $redis->get('my_name');
?>