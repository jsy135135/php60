<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-10-25 17:30:09
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-10-28 17:53:00
 */
// 出队列成功才可以进行数据库减数量
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
if($redis->rPop('goodlist')){
  echo 'you get it';
  // //error_reporting(0);
  // $conn = mysql_connect('127.0.0.1','root','root');
  // mysql_query('use php60');
  // mysql_query('set names utf8');   //latin1
  // // mysql_query('lock table testnum write');//添加写锁
  // //添加写锁文件
  // // $fh = fopen('./lock.txt','w');
  // // flock($fh,LOCK_EX);//添加锁
  // $res = mysql_query('select id from testnum');
  // $row = mysql_fetch_assoc($res);
  // $id = $row['id'];
  // // 执行该id-1运算
  // // 每次卖一件
  // $id = $id+1;
  // //执行结果，再写入数据库
  // mysql_query("update testnum set id = $id");
  // // mysql_query('unlock tables');
  // //文件解锁
  // // flock($fh,LOCK_UN );
}else{
  // list里的数据没有了
  echo 'no goods';
}
