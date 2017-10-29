<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-10-23 15:28:40
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-10-23 15:36:27
 */
// 时间戳
$time = time();
echo $time;
echo '<hr>';
// 时间格式
echo date('Y-m-d H:i:s',$time);
echo '<hr>';
// 两天前此刻的时间戳
echo $time2 = $time - 3600*24*2;
echo '<hr>';
echo date('Y-m-d H:i:s',$time2);
echo '<hr>';
// 上个星期日的时间戳是多少
echo date('Y-m-d',strtotime("last Sunday"));
