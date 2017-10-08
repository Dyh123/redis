<?php
	require 'common.php';
	//echo '生存时间' . $redis->ttl('my_name');
	//echo '姓名:' . $redis->get('her_name');
	//$redis->delete('my_name');
	//echo '姓名:' . $redis->get('my_name');
	/*$redis->lset('number', 2, 100);
	print_r($redis->lrange('number',0,-1));*/
	//echo $redis->lsize('guest');
	$redis->incrby('age',10);
	echo $redis->get('age');
	echo '<hr>';
	echo $redis->get('age2');
	echo '<hr>';
	print_r($redis->keys());
?>