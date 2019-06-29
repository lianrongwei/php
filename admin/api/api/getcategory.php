<?php
//响应json格式类型
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$message = [
	[
		'title' => '家居生化',
		'id' => 1
	],
	[
    	'title' => '摄影设计',
    	'id' => 2
    ],
    [
    	'title' => '篮球',
    	'id' => 3
    ],
    [
    	'title' => '足球',
    	'id' => 4
    ],
    [
    	'title' => '购物',
    	'id' => 5
    ],
    [
    	'title' => '手机数码',
    	'id' => 6
    ],
    [
    	'title' => '美女',
    	'id' => 7
    ],
    [
    	'title' => '明星名人',
    	'id' => 8
    ],
    [
    	'title' => '张雪迎',
    	'id' => 9
    ]
];

//转换json数据
$json = json_encode(array(
	'status' => 0,
	'message' => $message
));

echo $json;
