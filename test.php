<?php
//服务端返回JSON数据
$arr = array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
//转化为{ "a":1, "b":2, "c":3 }
$result = json_encode($arr);
//动态执行回调函数
$callback = $_GET['callback'];
echo $callback."($result)";
