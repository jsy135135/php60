<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-10-25 17:41:27
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-10-25 17:43:35
 */
$fh = fopen('./lock.txt','w');
flock($fh,LOCK_EX);
sleep(10);