<?php 
//封装公用的函数

//引入配置文件
require_once 'config.php';

//开启session
session_start();

/**
 * 获取当前用户信息，失败返回登录界面
 * @return [type] [description]
 */
function gonefour_get_current_user(){
	if (empty($_SESSION['current_login_user'])) {
	  header('Location: /admin/login.php');
	  exit();//退出
	}
	return $_SESSION['current_login_user'];
}





/**
 * 数据库查询获取多条数据
 * @return [type] [description] 索引数组套关联数组
 */
function gonefour_fetch_all($sql){
	//连接数据库
	$conn = mysqli_connect(GONEFOUR_DB_HOST,GONEFOUR_DB_USER,GONEFOUR_DB_PASS,GONEFOUR_DB_NAME);
    if (!$conn) exit("<h1>数据库连接失败！</h1>");
    //执行语句
    $query =  mysqli_query($conn,$sql);
    //查询失败
    if (!$query) return false;
    $result = array();
    //查询结果集
    while ($row = mysqli_fetch_assoc($query)) {
    	$result[] = $row;
    }
    //释放结果集
    mysqli_free_result($query);
    //关闭数据库连接
    mysqli_close($conn);
    //成功返回数据
    return $result;
}

//数据库查询获取单条数据
//返回关联数组
function gonefour_fetch_one($sql){
	$res = gonefour_fetch_all($sql);
	return isset($res[0]) ? $res[0] : null;
}

/**
 * 执行曾删改语句
 * @param  [type] $sql [description]
 * @return [type]      [description]
 */
function gonefour_execute($sql){
	//连接数据库
	$conn = mysqli_connect(GONEFOUR_DB_HOST,GONEFOUR_DB_USER,GONEFOUR_DB_PASS,GONEFOUR_DB_NAME);
    if (!$conn) exit("<h1>数据库连接失败！</h1>");
    //执行语句
    $query =  mysqli_query($conn,$sql);
    //查询失败
    if (!$query) return false;
    //受影响的行数
    $affected_rows = mysqli_affected_rows($conn);
    //关闭数据库连接
    mysqli_close($conn);
    //成功返回数据
    return $affected_rows;
}

