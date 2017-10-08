<?php
	require 'common.php';
	//echo '生存时间' . $redis->ttl('my_name');
	//echo '姓名:' . $redis->get('her_name');
	//$redis->delete('my_name');
	//echo '姓名:' . $redis->get('my_name');
	/*$redis->lset('number', 2, 100);
	print_r($redis->lrange('number',0,-1));*/
	//echo $redis->lsize('guest');
	/*$redis->incrby('age',10);
	echo $redis->ttl('age');
	echo '<hr>';
	echo $redis->get('age2');
	echo '<hr>';
	$redis->rename('age2','age3');
	echo '<hr>';
	echo $redis->get('age3');*/
	echo $redis->lrange('class',0,-1);
?>