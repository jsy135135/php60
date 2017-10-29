<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-10-20 16:56:17
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-10-20 17:08:45
 */
// 多台memcache的使用
$mem = new Memcache();
// var_dump($mem->connect('192.168.208.129',11211));
// $mem->addServer('127.0.0.1',11211);
$mem->addServer('192.168.208.129',11211);
// var_dump($mem->set('num1','1',0,0));
// echo '<hr>';
// var_dump($mem->set('num2','2',0,0));
// echo '<hr>';
// var_dump($mem->set('num3','3',0,0));
// echo '<hr>';
// var_dump($mem->set('num4','4',0,0));
echo '<hr>';
var_dump($mem->get('num1'));
echo '<hr>';
var_dump($mem->get('num2'));
echo '<hr>';
var_dump($mem->get('num3'));
echo '<hr>';
var_dump($mem->get('num4'));