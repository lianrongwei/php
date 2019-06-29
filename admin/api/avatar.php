<?php 
 //引入配置文件
 require_once '../../config.php';

if (empty($_GET['user_name'])) {
	exit('缺少必要参数！');
}

$email = $_GET['user_name'];

//根据用户邮箱或者用户名获取头像
$conn = mysqli_connect(GONEFOUR_DB_HOST,GONEFOUR_DB_USER,GONEFOUR_DB_PASS,GONEFOUR_DB_NAME);
if (!$conn) exit("<h1>数据库连接失败！</h1>");

$sql = "select avatar from users where email = '{$email}' or slug = '{$email}' limit 1;";
$query =  mysqli_query($conn,$sql);
if (!$query) {
   exit('查询失败');
}
$user = mysqli_fetch_assoc($query);

if ($user) {
	echo $user['avatar'];
}else{
	echo "/static/assets/img/default.png";
}

mysqli_close($conn);
//跳转
// header('Location: /admin/');


