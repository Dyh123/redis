<?php
	require 'common.php';
	//echo '生存时间' . $redis->ttl('my_name');
	//echo '姓名:' . $redis->get('her_name');
	//$redis->delete('my_name');
	//echo '姓名:' . $redis->get('my_name');
	/*$redis->lset('number', 2, 100);
	print_r($redis->lrange('number',0,-1));*/
	//echo $redis->lsize('guest');
	echo $redis->get('name1');
	echo '<hr>';
	echo $redis->get('name2');
?>