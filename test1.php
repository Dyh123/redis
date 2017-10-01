<?php
	require 'common.php';
	/*$redis->mset(array('my_name'=>'董亚华','her_name'=>'韩佳娜'));
	//echo '生存时间' . $redis->ttl('my_name');
	echo '姓名:' . $redis->get('my_name');*/
	/*$redis->set('key1',1);
	echo $redis->get('key1');
	echo '<br/>';
	$redis->incr('key1');
	echo $redis->get('key1');*/
	/*$redis->lpush('our_name','董亚华');
	echo '我的名字' . $redis->lpop('our_name');
	$redis->lpush('our_name','韩佳娜');
	echo '我们的名字' . $redis->lpop('our_name');*/
	/*$redis->flushDB();
	for($i = 1;$i<10;$i++){
		$redis->lpush('number', $i);
	}
	echo  '列表中共有 :' . $redis->lsize('number') . '个元素';
	echo '元素为:' . print_r($redis->lrange('number',0,-1));*/
	$redis->delete('guest');
?>
