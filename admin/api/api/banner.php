<?php 
//响应json格式类型
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$message = [
	(object) [
		'url' => 'http://tianxiezi.com',
		'img' => 'http://www.tianxiezi.com/img/banner1.jpg'
	],
	(object) [
		'url' => 'http://tianxiezi.com',
		'img' => 'http://www.tianxiezi.com/img/banner2.jpg'
	],
	(object) [
		'url' => 'http://tianxiezi.com',
		'img' => 'http://www.tianxiezi.com/img/banner3.jpg'
	]
];

//转换json数据
$json = json_encode(array(
	'status' => 0,
	'message' => $message
));

echo $json;
