<?php
	require 'common.php';
	/*$redis->mset(array('my_name'=>'董亚华','her_name'=>'韩佳娜'));
	//echo '生存时间' . $redis->ttl('my_name');
	echo '姓名:' . $redis->get('my_name');*/
	$redis->set('key1',1);
	echo $redis->get('key1');
	echo '<br/>';
	$redis->incr('key1');
	echo $redis->get('key1');
?>
