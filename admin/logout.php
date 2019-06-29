<?php 
require_once '../functions.php';
//删除session标识
unset($_SESSION['current_login_user']);

//跳转回登录界面
header('Location: /admin/login.php');