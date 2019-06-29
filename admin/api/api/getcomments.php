<?php 
//响应json格式类型
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// echo $_SERVER["REQUEST_URI"];
// $url = 'http://tianxiezi.com' . $_SERVER['PHP_SELF'];
// $test = pathinfo($url);
if (empty($_GET['id'])) {
	exit('缺少必要参数！');
}
if (empty($_GET['page'])) {
	exit('缺少必要参数！');
}
//转为整型
// $id = (int)$_GET['id'];
$id = $_GET['id'];
$page = $_GET['page'];


$message = [
	[
		'id' =>  1,
		'mess' => [
			[
				'user_name' => 'Gonefour_boke',
				'add_time' => 'Mon Jun 17 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '与其抱怨世界,不如改变自己'
			],
			[
				'user_name' => 'boke',
				'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '对过去不悔，对现在不烦，对未来不忧'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 15 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '好厉害啊'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 15 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '嘻嘻嘻嘻'
			]
		]
	],
	[
		'id' =>  2,
		'mess' => [
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 17 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '挺好的，我觉得啊赞赞'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '科比叫我打篮球'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 15 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '洗西瓜好吃'
			]
		]
	],
	[
		'id' =>  3,
		'mess' => [
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 17 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '雷军啊'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '小明啊'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 15 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '小米啊'
			]
		]
	],
	[
		'id' =>  4,
		'mess' => [
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 17 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '希伯特'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '乔丹'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 15 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => 'hello world'
			]
		]
	],
	[
		'id' =>  5,
		'mess' => [
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 17 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => 'node.js'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => 'css'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 15 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => 'html'
			]
		]
	],
	[
		'id' =>  6,
		'mess' => [
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 17 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '玻璃水'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '广告商'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 15 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '个都是安徽'
			]
		]
	],
	[
		'id' =>  7,
		'mess' => [
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 17 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '去潍坊市'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '啊发发'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 15 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '盎司大会返回'
			]
		]
	],
	[
		'id' =>  8,
		'mess' => [
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 17 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '你真棒'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '雷军啊'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 15 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '哈哈哈哈哈'
			]
		]
	],
	[
		'id' =>  9,
		'mess' => [
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 17 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '阿萨德群号'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '看看看看扩'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 15 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => 'as房前屋后'
			]
		]
	],
	[
		'id' =>  10,
		'mess' => [
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 17 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '全网通和东方红'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '号地块修改'
			],
			[
				'user_name' => '匿名用户',
				'add_time' => 'Mon Jun 15 2019 11:04:16 GMT+0800 (中国标准时间)',
				'content' => '还是净流出VB'
			]
		]
	]
];

$mes = null;
$status = 0;
// echo count($message);
for ($i=0; $i < count($message); $i++) { 
	if ($message[$i]['id'] == $id) {
		if ($message[$i]['mess'][$page - 1] !== null) {
			$mes = $message[$i]['mess'][$page - 1];
		}else{
			$status = 1;
		}
	}
}

// echo $mes;
//转换json数据
$json = json_encode(array(
	'status' => $status,
	'message' => $mes
));

echo $json;
