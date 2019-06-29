<?php 
require_once '../../functions.php';
//评论数据
$page = empty($_GET['page']) ? 1 : (int)$_GET['page'];
$lenth = 10;
$offset = ($page - 1) * $lenth;

//查询到所有数据
$comments = gonefour_fetch_all("select comments.*,date_format(comments.created,'%Y年%c月%d日<br/>%h:%i:%s') as date, posts.title as post_title from comments
							    inner join posts on comments.post_id = posts.id
								order by comments.created desc
							    limit {$offset},{$lenth}");
//响应json格式类型
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
//查询所有条数
$total_count = gonefour_fetch_one('select count(1) as leng from comments
							    inner join posts on comments.post_id = posts.id')['leng'];
$total_count = ceil($total_count / $lenth);
//转换json数据
$json = json_encode(array(
	'total_pages' => $total_count,
	'comments' => $comments
));

echo $json;


