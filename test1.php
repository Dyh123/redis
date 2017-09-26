<?php
	require 'common.php';
	$redis->set('my_name','董亚华');
	//echo '生存时间' . $redis->ttl('my_name');
	echo '姓名:' . $redis->get('my_name');
?>
