<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>职位要求查询</title>
</head>
<body>
  <form action="test.php">
    <input type="text" name="keywords" value="<?php if(isset($_GET['keywords']) ? $_GET['keywords']:'输入关键词')?>" />
    <input type="submit" name="" value="查询">
  </form>
</body>
</html>
<?php
header('Content-type:text/html;charset=utf-8');
/**
 * @Author: jsy135135
 * @email:732677288@qq.com
 * @Date:   2017-10-26 16:14:33
 * @Last Modified by:   jsy135135
 * @Last Modified time: 2017-10-26 17:22:14
 */
if(isset($_GET['keywords']) && !empty($_GET['keywords'])){
  require './sphinxapi.php';
  $keywords = $_GET['keywords'];
  // 实例化
  $s = new SphinxClient;
  // 服务器连接
  $s->setServer('127.0.0.1', 9312);
  // 匹配模式
  $s->setMatchMode(SPH_MATCH_ANY);
  // $s->setMatchMode(SPH_MATCH_ALL);
  // $s->setMatchMode(SPH_MATCH_PHRASE);
  // $s->setMatchMode(SPH_MATCH_BOOLEAN);
  // 最大查询时间
  $s->setMaxQueryTime(3);
  // 查询结果返回
  $result = $s->query("$keywords");
  // echo '<pre>';
  // var_dump($result);
  // var_dump($result['matches']);
  // 遍历拼接
  $id = '';
  foreach ($result['matches'] as $key => $value) {
    $id .= $key.',';
  }
  $ids = rtrim($id,',');
  // 获取到主键id之后
  // 进行数据库查询操作
  $mysqli = new Mysqli('127.0.0.1','root','root','php60');
  $sql = 'select * from zhilian where id in ('.$ids.')';
  $result = $mysqli->query($sql);
  // var_dump($result);
  $data = array();
  while ($row = $result->fetch_row()) {
    $row = $s->buildExcerpts($row, 'zhilian', $keywords, array(
        'before_match' => '<strong><font color="red">',
        'after_match' => '</font></strong>'
    ));
    $data[] = $row;
  }
  // var_dump($data);
  foreach ($data as $key => $value) {
    foreach ($value as $k => $v) {
      echo '<p>'.$v.'</p>';
    }
  }
}
?>
