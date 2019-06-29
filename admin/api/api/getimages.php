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
        'img_url' => 'http://tianxiezi.com/img/upload/kb1.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人）。'
    ],
    [
        'id' => 10,
        'title' => '科比帅气照片1',
        'img_url' => 'http://tianxiezi.com/img/upload/kb2.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人），绰号“黑曼巴”/“小飞侠”。 [1]  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队。'
    ],
    [
        'id' => 10,
        'title' => '科比帅气照片2',
        'img_url' => 'http://tianxiezi.com/img/upload/kb3.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队，是前NBA球员乔·布莱恩特的儿子。'
    ],
    [
        'id' => 10,
        'title' => '科比帅气照片3',
        'img_url' => 'http://tianxiezi.com/img/upload/kb4.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人），绰号“黑曼巴”/“小飞侠”。 [1]  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队，是前NBA球员乔·布莱恩特的儿子。'
    ],
    [
        'id' => 1,
        'title' => '有气质的美女提组图',
        'img_url' => 'http://tianxiezi.com/img/upload/meinu1.jpg',
        'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。”）'
    ],
    [
       'id' => 1,
       'title' => '有气质的美女提组图1',
       'img_url' => 'http://tianxiezi.com/img/upload/meinu2.jpg',
       'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。形成了丰富的美学资料。《墨子·公孟》：“譬若美女，处而不出，人争求之。”）'
   ],
   [
       'id' => 1,
       'title' => '有气质的美女提组图2',
       'img_url' => 'http://tianxiezi.com/img/upload/meinu3.jpg',
       'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。中国古代关于美女的形容词和诗词歌赋众多，人争求之。”）'
   ],
   [
       'id' => 1,
       'title' => '有气质的美女提组图3',
       'img_url' => 'http://tianxiezi.com/img/upload/meinu4.jpg',
       'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。中国古代关于美女的形容词和诗词歌赋众多，形成了丰富的美学资料。《墨子·公孟》：“譬若美女，处而不出，人争求之。”）'
   ],
   [
        'id' => 1,
        'title' => '有气质的美女提组图4',
        'img_url' => 'http://tianxiezi.com/img/upload/meinu4.jpg',
        'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。”）'
    ],
    [
       'id' => 1,
       'title' => '有气质的美女提组图5',
       'img_url' => 'http://tianxiezi.com/img/upload/meinu3.jpg',
       'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。形成了丰富的美学资料。《墨子·公孟》：“譬若美女，处而不出，人争求之。”）'
   ],
   [
       'id' => 1,
       'title' => '有气质的美女提组图6',
       'img_url' => 'http://tianxiezi.com/img/upload/meinu2.jpg',
       'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。中国古代关于美女的形容词和诗词歌赋众多，人争求之。”）'
   ],
   [
       'id' => 1,
       'title' => '有气质的美女提组图7',
       'img_url' => 'http://tianxiezi.com/img/upload/meinu1.jpg',
       'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。中国古代关于美女的形容词和诗词歌赋众多，形成了丰富的美学资料。《墨子·公孟》：“譬若美女，处而不出，人争求之。”）'
   ],
   [
        'id' => 2,
        'title' => '老师就废了会计法',
        'img_url' => 'http://tianxiezi.com/img/upload/meinu4.jpg',
        'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。”）'
    ],
    [
       'id' => 2,
       'title' => '老师就废了会计法1',
       'img_url' => 'http://tianxiezi.com/img/upload/meinu3.jpg',
       'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。形成了丰富的美学资料。《墨子·公孟》：“譬若美女，处而不出，人争求之。”）'
   ],
   [
       'id' => 2,
       'title' => '老师就废了会计法2',
       'img_url' => 'http://tianxiezi.com/img/upload/meinu2.jpg',
       'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。中国古代关于美女的形容词和诗词歌赋众多，人争求之。”）'
   ],
   [
       'id' => 2,
       'title' => '老师就废了会计法3',
       'img_url' => 'http://tianxiezi.com/img/upload/meinu1.jpg',
       'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。中国古代关于美女的形容词和诗词歌赋众多，形成了丰富的美学资料。《墨子·公孟》：“譬若美女，处而不出，人争求之。”）'
   ],
   [
        'id' => 3,
        'title' => '老师就废了会计法',
        'img_url' => 'http://tianxiezi.com/img/upload/meinu3.jpg',
        'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。”）'
    ],
    [
       'id' => 3,
       'title' => '老师就废了会计法1',
       'img_url' => 'http://tianxiezi.com/img/upload/meinu4.jpg',
       'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。形成了丰富的美学资料。《墨子·公孟》：“譬若美女，处而不出，人争求之。”）'
   ],
   [
       'id' => 3,
       'title' => '老师就废了会计法2',
       'img_url' => 'http://tianxiezi.com/img/upload/meinu1.jpg',
       'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。中国古代关于美女的形容词和诗词歌赋众多，人争求之。”）'
   ],
   [
       'id' => 3,
       'title' => '老师就废了会计法3',
       'img_url' => 'http://tianxiezi.com/img/upload/meinu2.jpg',
       'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。中国古代关于美女的形容词和诗词歌赋众多，形成了丰富的美学资料。《墨子·公孟》：“譬若美女，处而不出，人争求之。”）'
   ],
   [
        'id' => 4,
        'title' => '科比帅气照片',
        'img_url' => 'http://tianxiezi.com/img/upload/kb1.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人）。'
    ],
    [
        'id' => 4,
        'title' => '科比帅气照片1',
        'img_url' => 'http://tianxiezi.com/img/upload/kb2.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人），绰号“黑曼巴”/“小飞侠”。 [1]  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队。'
    ],
    [
        'id' => 4,
        'title' => '科比帅气照片2',
        'img_url' => 'http://tianxiezi.com/img/upload/kb3.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队，是前NBA球员乔·布莱恩特的儿子。'
    ],
    [
        'id' => 4,
        'title' => '科比帅气照片3',
        'img_url' => 'http://tianxiezi.com/img/upload/kb4.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人），绰号“黑曼巴”/“小飞侠”。 [1]  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队，是前NBA球员乔·布莱恩特的儿子。'
    ],
    [
        'id' => 5,
        'title' => '科比帅气照片',
        'img_url' => 'http://tianxiezi.com/img/upload/kb1.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人）。'
    ],
    [
        'id' => 5,
        'title' => '科比帅气照片1',
        'img_url' => 'http://tianxiezi.com/img/upload/kb2.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人），绰号“黑曼巴”/“小飞侠”。 [1]  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队。'
    ],
    [
        'id' => 5,
        'title' => '科比帅气照片2',
        'img_url' => 'http://tianxiezi.com/img/upload/kb3.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队，是前NBA球员乔·布莱恩特的儿子。'
    ],
    [
        'id' => 5,
        'title' => '科比帅气照片3',
        'img_url' => 'http://tianxiezi.com/img/upload/kb4.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人），绰号“黑曼巴”/“小飞侠”。 [1]  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队，是前NBA球员乔·布莱恩特的儿子。'
    ],
    [
        'id' => 6,
        'title' => '科比帅气照片',
        'img_url' => 'http://tianxiezi.com/img/upload/kb1.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人）。'
    ],
    [
        'id' => 6,
        'title' => '科比帅气照片1',
        'img_url' => 'http://tianxiezi.com/img/upload/kb2.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人），绰号“黑曼巴”/“小飞侠”。 [1]  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队。'
    ],
    [
        'id' => 6,
        'title' => '科比帅气照片2',
        'img_url' => 'http://tianxiezi.com/img/upload/kb3.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队，是前NBA球员乔·布莱恩特的儿子。'
    ],
    [
        'id' => 6,
        'title' => '科比帅气照片3',
        'img_url' => 'http://tianxiezi.com/img/upload/kb4.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人），绰号“黑曼巴”/“小飞侠”。 [1]  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队，是前NBA球员乔·布莱恩特的儿子。'
    ],
    [
        'id' => 7,
        'title' => '科比帅气照片',
        'img_url' => 'http://tianxiezi.com/img/upload/kb1.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人）。'
    ],
    [
        'id' => 7,
        'title' => '科比帅气照片1',
        'img_url' => 'http://tianxiezi.com/img/upload/kb2.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人），绰号“黑曼巴”/“小飞侠”。 [1]  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队。'
    ],
    [
        'id' => 7,
        'title' => '科比帅气照片2',
        'img_url' => 'http://tianxiezi.com/img/upload/kb3.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队，是前NBA球员乔·布莱恩特的儿子。'
    ],
    [
        'id' => 7,
        'title' => '科比帅气照片3',
        'img_url' => 'http://tianxiezi.com/img/upload/kb4.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人），绰号“黑曼巴”/“小飞侠”。 [1]  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队，是前NBA球员乔·布莱恩特的儿子。'
    ],
    [
        'id' => 8,
        'title' => '科比帅气照片',
        'img_url' => 'http://tianxiezi.com/img/upload/kb1.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人）。'
    ],
    [
        'id' => 8,
        'title' => '科比帅气照片1',
        'img_url' => 'http://tianxiezi.com/img/upload/kb2.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人），绰号“黑曼巴”/“小飞侠”。 [1]  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队。'
    ],
    [
        'id' => 8,
        'title' => '科比帅气照片2',
        'img_url' => 'http://tianxiezi.com/img/upload/kb3.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队，是前NBA球员乔·布莱恩特的儿子。'
    ],
    [
        'id' => 8,
        'title' => '科比帅气照片3',
        'img_url' => 'http://tianxiezi.com/img/upload/kb4.jpg',
        'zhaiyao' => '科比·布莱恩特（Kobe Bryant），1978年8月23日出生于美国宾夕法尼亚州费城，前美国职业篮球运动员，司职得分后卫/小前锋（锋卫摇摆人），绰号“黑曼巴”/“小飞侠”。 [1]  1996年第1轮第13位被夏洛特黄蜂队选中，后来被交易到湖人队。整个NBA生涯（1996年-2016年）全部效力于NBA洛杉矶湖人队，是前NBA球员乔·布莱恩特的儿子。'
    ],
    [
         'id' => 9,
         'title' => '张雪迎',
         'img_url' => 'http://tianxiezi.com/img/upload/meinu1.jpg',
         'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。”）'
     ],
     [
        'id' => 9,
        'title' => '张雪迎1',
        'img_url' => 'http://tianxiezi.com/img/upload/meinu2.jpg',
        'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。形成了丰富的美学资料。《墨子·公孟》：“譬若美女，处而不出，人争求之。”）'
    ],
    [
        'id' => 9,
        'title' => '张雪迎2',
        'img_url' => 'http://tianxiezi.com/img/upload/meinu3.jpg',
        'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。中国古代关于美女的形容词和诗词歌赋众多，人争求之。”）'
    ],
    [
        'id' => 9,
        'title' => '张雪迎3',
        'img_url' => 'http://tianxiezi.com/img/upload/meinu4.jpg',
        'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。中国古代关于美女的形容词和诗词歌赋众多，形成了丰富的美学资料。《墨子·公孟》：“譬若美女，处而不出，人争求之。”）'
    ],
    [
         'id' => 9,
         'title' => '张雪迎4',
         'img_url' => 'http://tianxiezi.com/img/upload/meinu4.jpg',
         'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。”）'
     ],
     [
        'id' => 9,
        'title' => '张雪迎5',
        'img_url' => 'http://tianxiezi.com/img/upload/meinu3.jpg',
        'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。形成了丰富的美学资料。《墨子·公孟》：“譬若美女，处而不出，人争求之。”）'
    ],
    [
        'id' => 9,
        'title' => '张雪迎6',
        'img_url' => 'http://tianxiezi.com/img/upload/meinu2.jpg',
        'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。中国古代关于美女的形容词和诗词歌赋众多，人争求之。”）'
    ],
    [
        'id' => 9,
        'title' => '张雪迎7',
        'img_url' => 'http://tianxiezi.com/img/upload/meinu1.jpg',
        'zhaiyao' => '有气质且带可爱的美女组图（美女是一个汉语词汇，拼音是měi nǚ，指容貌姣好、仪态优雅的女子。中国古代关于美女的形容词和诗词歌赋众多，形成了丰富的美学资料。《墨子·公孟》：“譬若美女，处而不出，人争求之。”）'
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
