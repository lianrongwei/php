<?php 

$conn = mysqli_connect('127.0.0.1','root','123456','demo');
if (!$conn) {
	echo "连接报错";
}

$query = mysqli_query($conn,'select * from users;');
if (!$query) {
	echo "查询报错";
}
while ($row = mysqli_fetch_assoc($query)) {
	$data[] = $row;
}
$data = json_encode($data);
//跨域 
//*允许全部
// header('Access-Control-Allow-Origin: *');
// 可以指定跨域源
header('Access-Control-Allow-Origin: http://a.com');

header('Content-Type: application/json');
echo $data;
mysqli_free_result($query);
mysqli_close($conn);



























// if (empty($_GET['callback'])) {
// 	header('Content-Type: application/json');
// 	echo $data;
// }else{
// 	header('Content-Type: application/javascript');
// 	$callback_name = $_GET['callback'];

// 	echo "typeof {$callback_name} === 'function' && {$callback_name}({$data});";
// }