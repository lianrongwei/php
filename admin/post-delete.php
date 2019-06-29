<?php 

//引入公共文件
require_once '../functions.php';


if (empty($_GET['id'])) {
	exit('缺少必要参数！');
}
//转为整型
// $id = (int)$_GET['id'];
$id = $_GET['id'];

//删除单行或多行
$rows = gonefour_execute('delete from posts where id in('.$id.');');

header('Location: ' . $_SERVER['HTTP_REFERER']);


