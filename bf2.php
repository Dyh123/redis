<?php
	require 'common.php';
	$redis->rpush('guest',1);
	echo $redis->lsize('guest');
?>