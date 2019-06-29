<?php 
//响应json格式类型
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$message = [
	[
		'id' =>  1,
		'title' => '买房还是炒股，2019年买房无法拒绝的5大理由',
		'add_time' => '',
		'zhaiyao' => '转眼间2019年已经过去了6个月，在这短短的四个月',
		'click' => 2,
		'img_url' => 'http://tianxiezi.com/img/menu1.png'
	],
	[
		'id' =>  2,
		'title' => '这次地震很多人第一时间收到预警信息，背后是一个怎样的系统？',
		'add_time' => 'Mon Jun 12 2019 11:04:16 GMT+0800 (中国标准时间)',
		'zhaiyao' => '转眼间2019年已经过去了6个月，在这短短的四个月',
		'click' => 0,
		'img_url' => 'http://tianxiezi.com/img/menu2.png'
	],
	[
		'id' =>  3,
		'title' => '下跪，不应成为解决纠纷的选项',
		'add_time' => 'Mon Jun 13 2019 11:04:16 GMT+0800 (中国标准时间)',
		'zhaiyao' => '转眼间2019年已经过去了6个月，在这短短的四个月',
		'click' => 2,
		'img_url' => 'http://tianxiezi.com/img/menu3.png'
	],
	[
		'id' =>  4,
		'title' => '财看见 | 印度政府的巨大负担：民间屯金25000吨',
		'add_time' => 'Mon Jun 14 2019 11:04:16 GMT+0800 (中国标准时间)',
		'zhaiyao' => '转眼间2019年已经过去了6个月，在这短短的四个月',
		'click' => 1,
		'img_url' => 'http://tianxiezi.com/img/menu4.png'
	],
	[
		'id' =>  5,
		'title' => '一图前瞻习近平对朝鲜进行国事访问',
		'add_time' => 'Mon Jun 15 2019 11:04:16 GMT+0800 (中国标准时间)',
		'zhaiyao' => '转眼间2019年已经过去了6个月，在这短短的四个月',
		'click' => 12,
		'img_url' => 'http://tianxiezi.com/img/menu5.png'
	],
	[
		'id' =>  6,
		'title' => '人民日报：美国一些人需走出战略迷误 世上本无修昔底德陷阱',
		'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
		'zhaiyao' => '转眼间2019年已经过去了6个月，在这短短的四个月',
		'click' => 0,
		'img_url' => 'http://tianxiezi.com/img/menu6.png'
	],
	[
		'id' =>  7,
		'title' => '马航370空难又有新说法：密友爆料称机长支开副驾驶撞毁飞机',
		'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
		'zhaiyao' => '转眼间2019年已经过去了6个月，在这短短的四个月',
		'click' => 100,
		'img_url' => 'http://tianxiezi.com/img/menu1.png'
	],
	[
		'id' =>  8,
		'title' => '“教科书式耍赖”当事人侵犯名誉权案宣判 黄淑芬全部诉求被驳回',
		'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
		'zhaiyao' => '转眼间2019年已经过去了6个月，在这短短的四个月',
		'click' => 0,
		'img_url' => 'http://tianxiezi.com/img/menu2.png'
	],
	[
		'id' =>  9,
		'title' => '中国买家要求推迟发货 美国大豆积压程度前所未有',
		'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
		'zhaiyao' => '转眼间2019年已经过去了6个月，在这短短的四个月',
		'click' => 0,
		'img_url' => 'http://tianxiezi.com/img/menu3.png'
	],
	[
		'id' => 10,
		'title' => '日本黑帮卖珍珠奶茶为生上热搜，还说“没什么买卖比这个更好”',
		'add_time' => 'Mon Jun 16 2019 11:04:16 GMT+0800 (中国标准时间)',
		'zhaiyao' => '转眼间2019年已经过去了6个月，在这短短的四个月',
		'click' => 0,
		'img_url' => 'http://tianxiezi.com/img/menu4.png'
	]
];

//转换json数据
$json = json_encode(array(
	'status' => 0,
	'message' => $message
));

echo $json;
