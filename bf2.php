<?php
	require 'common.php';
	//$redis->rpush('guest',1);
	//echo $redis->lsize('guest');
	//$redis->set('keys',1);
	//echo $redis->get('keys');
	$redis->lpush('guest',1);
?>