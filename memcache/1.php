<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-10-20 14:36:24
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-10-20 14:55:21
 */
// 实列化操作
$mem = new Memcache();
// 连接
// 确定服务是启动的
$rs = $mem->connect('127.0.0.1',11211);
// var_dump($rs);
// echo '<hr>';
// 设置值
// set(key,value,是否压缩[不压缩0],是否过期[不过期0])
// 时间差
// $rs1 = $mem->set('classname','itcastphp60',0,15);
// 时间戳
$rs1 = $mem->set('classname','itcastphp60',0,time()+15);
// var_dump($rs1);
//获取数据
// get(key);
// $data = $mem->get('classname');
// echo '<hr>';
// var_dump($data);