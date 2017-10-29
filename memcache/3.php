<?php

/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-10-20 15:10:02
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-10-20 15:24:11
 */
// 复合类型存储
$mem = new Memcache();
$mem->connect('127.0.0.1',11211);
// 数组
$personArray = array(
  'name' => 'tom',
  'age' => 4,
  'job' => 'php'
);
// 对象
// 类
class Person
{
  //封装属性
  public $name;
  public $age;
  public $job;
  //构造方法
  public function __construct($name,$age,$job)
  {
    // 初始化赋值
    $this->name = $name;
    $this->age = $age;
    $this->job = $job;
  }
  //普通方法
  public function say()
  {
    echo $this->name.' say php is best!';
  }
}
$personObj = new Person('tom',4,'php');
//存储
$rs = $mem->set('personArray',$personArray,0,0);
$rs1 = $mem->set('personObj',$personObj,0,0);
var_dump($rs);
echo '<hr>';
var_dump($rs1);
echo '<hr>';
//取数据
var_dump($mem->get('personArray'));
echo '<hr>';
var_dump($mem->get('personObj'));