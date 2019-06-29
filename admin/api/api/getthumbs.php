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
//转为整型
// $id = (int)$_GET['id'];
$id = $_GET['id'];


$message = [
    [
        'id' => 10,
        'title' => '科比帅气照片',
        'src' => [
            ['src' => 'http://tianxiezi.com/img/upload/kb1.jpg', 'w' => 500, 'h' => 447],
            ['src' => 'http://tianxiezi.com/img/upload/kb2.jpg', 'w' => 500, 'h' => 313],
            ['src' => 'http://tianxiezi.com/img/upload/kb3.jpg', 'w' => 500, 'h' => 332],
            ['src' => 'http://tianxiezi.com/img/upload/kb4.jpg', 'w' => 500, 'h' => 312]
        ]
    ],
    [
        'id' => 1,
        'title' => '张雪迎漂亮女孩',
        'src' => [
            ['src' => 'http://tianxiezi.com/img/upload/meinu1.jpg', 'w' => 500, 'h' => 405],
            ['src' => 'http://tianxiezi.com/img/upload/meinu2.jpg', 'w' => 500, 'h' => 595],
            ['src' => 'http://tianxiezi.com/img/upload/meinu3.jpg', 'w' => 500, 'h' => 750],
            ['src' => 'http://tianxiezi.com/img/upload/meinu4.jpg', 'w' => 500, 'h' => 750],
            ['src' => 'http://tianxiezi.com/img/upload/meinu1.jpg', 'w' => 500, 'h' => 405],
            ['src' => 'http://tianxiezi.com/img/upload/meinu2.jpg', 'w' => 500, 'h' => 595],
            ['src' => 'http://tianxiezi.com/img/upload/meinu3.jpg', 'w' => 500, 'h' => 750],
            ['src' => 'http://tianxiezi.com/img/upload/meinu4.jpg', 'w' => 500, 'h' => 750]
        ]
    ],
    [
        'id' => 2,
        'title' => '张雪迎漂亮女孩',
        'src' => [
            ['src' => 'http://tianxiezi.com/img/upload/meinu1.jpg', 'w' => 500, 'h' => 405],
            ['src' => 'http://tianxiezi.com/img/upload/meinu2.jpg', 'w' => 500, 'h' => 595],
            ['src' => 'http://tianxiezi.com/img/upload/meinu3.jpg', 'w' => 500, 'h' => 750],
            ['src' => 'http://tianxiezi.com/img/upload/meinu4.jpg', 'w' => 500, 'h' => 750]
        ]
    ],
    [
        'id' => 3,
        'title' => '张雪迎漂亮女孩',
        'src' => [
            ['src' => 'http://tianxiezi.com/img/upload/meinu1.jpg', 'w' => 500, 'h' => 405],
            ['src' => 'http://tianxiezi.com/img/upload/meinu2.jpg', 'w' => 500, 'h' => 595],
            ['src' => 'http://tianxiezi.com/img/upload/meinu3.jpg', 'w' => 500, 'h' => 750],
            ['src' => 'http://tianxiezi.com/img/upload/meinu4.jpg', 'w' => 500, 'h' => 750]
        ]
    ],
    [
        'id' => 4,
        'title' => '张雪迎漂亮女孩',
        'src' => [
            ['src' => 'http://tianxiezi.com/img/upload/meinu1.jpg', 'w' => 500, 'h' => 405],
            ['src' => 'http://tianxiezi.com/img/upload/meinu2.jpg', 'w' => 500, 'h' => 595],
            ['src' => 'http://tianxiezi.com/img/upload/meinu3.jpg', 'w' => 500, 'h' => 750],
            ['src' => 'http://tianxiezi.com/img/upload/meinu4.jpg', 'w' => 500, 'h' => 750]
        ]
    ],
    [
        'id' => 5,
        'title' => '张雪迎漂亮女孩',
        'src' => [
            ['src' => 'http://tianxiezi.com/img/upload/meinu1.jpg', 'w' => 500, 'h' => 405],
            ['src' => 'http://tianxiezi.com/img/upload/meinu2.jpg', 'w' => 500, 'h' => 595],
            ['src' => 'http://tianxiezi.com/img/upload/meinu3.jpg', 'w' => 500, 'h' => 750],
            ['src' => 'http://tianxiezi.com/img/upload/meinu4.jpg', 'w' => 500, 'h' => 750]
        ]
    ],
    [
        'id' => 6,
        'title' => '科比帅气照片',
        'src' => [
            ['src' => 'http://tianxiezi.com/img/upload/kb1.jpg', 'w' => 500, 'h' => 447],
            ['src' => 'http://tianxiezi.com/img/upload/kb2.jpg', 'w' => 500, 'h' => 313],
            ['src' => 'http://tianxiezi.com/img/upload/kb3.jpg', 'w' => 500, 'h' => 332],
            ['src' => 'http://tianxiezi.com/img/upload/kb4.jpg', 'w' => 500, 'h' => 312]
        ]
    ],
    [
        'id' => 7,
        'title' => '科比帅气照片',
        'src' => [
            ['src' => 'http://tianxiezi.com/img/upload/kb1.jpg', 'w' => 500, 'h' => 447],
            ['src' => 'http://tianxiezi.com/img/upload/kb2.jpg', 'w' => 500, 'h' => 313],
            ['src' => 'http://tianxiezi.com/img/upload/kb3.jpg', 'w' => 500, 'h' => 332],
            ['src' => 'http://tianxiezi.com/img/upload/kb4.jpg', 'w' => 500, 'h' => 312]
        ]
    ],
    [
        'id' => 8,
        'title' => '科比帅气照片',
        'src' => [
            ['src' => 'http://tianxiezi.com/img/upload/kb1.jpg', 'w' => 500, 'h' => 447],
            ['src' => 'http://tianxiezi.com/img/upload/kb2.jpg', 'w' => 500, 'h' => 313],
            ['src' => 'http://tianxiezi.com/img/upload/kb3.jpg', 'w' => 500, 'h' => 332],
            ['src' => 'http://tianxiezi.com/img/upload/kb4.jpg', 'w' => 500, 'h' => 312]
        ]
    ],
    [
        'id' => 9,
        'title' => '科比帅气照片',
        'src' => [
            ['src' => 'http://tianxiezi.com/img/upload/kb1.jpg', 'w' => 500, 'h' => 447],
            ['src' => 'http://tianxiezi.com/img/upload/kb2.jpg', 'w' => 500, 'h' => 313],
            ['src' => 'http://tianxiezi.com/img/upload/kb3.jpg', 'w' => 500, 'h' => 332],
            ['src' => 'http://tianxiezi.com/img/upload/kb4.jpg', 'w' => 500, 'h' => 312]
        ]
    ]



];

$mes = [];

// echo count($message);
for ($i=0; $i < count($message); $i++) {
	if ($message[$i]['id'] == $id) {
		array_push($mes, $message[$i]);
	}
}

// echo $mes;
//转换json数据
$json = json_encode(array(
	'status' => 0,
	'message' => $mes
));

echo $json;
