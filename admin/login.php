<?php 
 //引入配置文件
 require_once '../config.php';

 //开启session
 session_start();

 function login(){
  //错误信息提示
  global $error_message;

  //用户名
  if (empty($_POST['user_name'])) {
    $error_message = '请填写用户名！';
    return;
  }

  //密码
  if (empty($_POST['password'])) {
    $error_message = '请填写密码！';
    return;
  }

  //校验
  $email = $_POST['user_name'];
  $password = $_POST['password'];


  $conn = mysqli_connect(GONEFOUR_DB_HOST,GONEFOUR_DB_USER,GONEFOUR_DB_PASS,GONEFOUR_DB_NAME);
  if (!$conn) exit("<h1>数据库连接失败！</h1>");

  $sql = "select * from users where email = '{$email}' or slug = '{$email}' limit 1;";
  $query =  mysqli_query($conn,$sql);
  if (!$query) {
    $error_message = '登录失败，请重试！';
    return;
  }

  $user = mysqli_fetch_assoc($query);

  if (!$user) {
    $error_message = '用户名不存在！';
    return;
  }

  if ($user['password'] !== md5($password)) {
    $error_message = '密码不正确！';
    return;
  }

  // $_SESSION['is_logged_in'] = true;
  $_SESSION['current_login_user'] = $user;

  mysqli_close($conn);
  //跳转
  header('Location: /admin/');
 } 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  login();
}

 ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>login in &laquo; Admin</title>
  <link rel="stylesheet" href="/static/assets/vendors/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="/static/assets/vendors/animate/animate.min.css">
  <link rel="stylesheet" href="/static/assets/css/admin.css">
</head>
<body>
  <div class="login">
    <form class="login-wrap<?php echo isset($error_message) ? ' shake animated' : '';?>" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" novalidate autocomplete="off">
      <img class="avatar" id="avatar" src="/static/assets/img/default.png">
      <!-- 有错误信息时展示 -->
      <?php if (isset($error_message)): ?>
      <div class="alert alert-danger" id="error_message">
        <strong><?php echo $error_message; ?></strong>
      </div>
      <?php endif ?>
     
      <div class="form-group">
        <label for="email" class="sr-only">用户名</label>
        <input id="email" type="email" name="user_name" class="form-control" placeholder="用户名/邮箱" autofocus value="<?php echo isset($_POST['user_name']) ? $_POST['user_name'] :''; ?> ">
      </div>
      <div class="form-group">
        <label for="password" class="sr-only">密码</label>
        <input id="password" type="password" name="password" class="form-control" placeholder="密码">
      </div>
      <button class="btn btn-primary btn-block">登 录</button>
    </form>
  </div>
  <script src="/static/assets/vendors/jquery/jquery.js"></script>
  <script>
    //头像显示
    $(function ($){
      //记录用户名
      var currentValue = null;
      //失去焦点触发
      $('#email').on('blur',function (){  
        //获取当前值
       var value = $(this).val();
       //为空退出
       if (!value) return;
       //判读当前值跟记录用户名是否一样
       if (value !== currentValue) {
         $.get('/admin/api/avatar.php',{user_name:value},function (res){
            if (!res) return;
            $('#avatar').fadeOut(function (){
              $(this).on('load',function (){
                $(this).fadeIn();
              }).attr('src',res);
              $('#error_message').fadeOut();
            });   
         });
         currentValue = value;
       }
        
      });
    });
  </script>
</body>
</html>
