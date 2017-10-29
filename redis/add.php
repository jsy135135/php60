<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-10-28 17:32:20
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-10-28 17:52:39
 */
// 添加商品到list中
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
// 循环插入100件商品
for ($i=1; $i < 10; $i++) {
  $redis->lPush('goodlist', $i);
}