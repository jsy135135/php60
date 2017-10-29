<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-10-20 15:01:02
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-10-20 15:06:29
 */
// 标量数据类型存储
$mem = new Memcache();
$mem->connect('127.0.0.1',11211);
//设置数据
// string
$rs = $mem->set('string','string',0,0);
// int
$rs1 = $mem->set('int',60,0,0);
// float
$rs2 = $mem->set('float',183.56,0,0);
// bool
$rs3 = $mem->set('bool',true,0,0);
var_dump($rs);
echo '<hr>';
var_dump($rs1);
echo '<hr>';
var_dump($rs2);
echo '<hr>';
var_dump($rs3);
echo '<hr>';
//获取数据
var_dump($mem->get('string'));
echo '<hr>';
var_dump($mem->get('int'));
echo '<hr>';
var_dump($mem->get('float'));
echo '<hr>';
var_dump($mem->get('bool'));