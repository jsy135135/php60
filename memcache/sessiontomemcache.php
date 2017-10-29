<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-10-20 16:28:01
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-10-20 16:33:48
 */
//设置把session存储到memcache中
ini_set('session.save_handler', 'memcache');
ini_set('session.save_path', 'tcp://127.0.0.1:11211');
//开启session
session_start();
//设置session
$_SESSION['classname'] = 'php60';
//获取设置的session_id
echo '<hr>';
echo session_id();
//获取session值
echo '<hr>';
echo $_SESSION['classname'];
