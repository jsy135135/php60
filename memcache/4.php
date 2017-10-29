<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-10-20 15:24:49
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-10-20 15:29:08
 */
// 特殊类型存储
$mem = new Memcache();
$mem->connect('127.0.0.1',11211);
//资源类型
$resource = curl_init();
// var_dump($resource);
var_dump($mem->set('resource',$resource,0,0));
echo '<hr>';
var_dump($mem->set('null',null,0,0));
echo '<hr>';
//取出数据
var_dump($mem->get('resource'));
echo '<hr>';
var_dump($mem->get('null'));