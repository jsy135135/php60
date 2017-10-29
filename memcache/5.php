<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-10-20 15:54:15
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-10-20 16:03:48
 */
$mem = new Memcache();
$mem->connect('127.0.0.1',11211);
$mem->set('num',8);
var_dump($mem->increment('num',1));
echo '<hr>';
var_dump($mem->decrement('num',2));
var_dump($mem->get('num'));