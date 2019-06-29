<?php 
//引入公共文件
require_once '../functions.php';

//判断用户是否登录
gonefour_get_current_user();

//添加分类fun
function add_categories(){
  global $error_message;
  if (empty($_POST['name'])) {
    $error_message = '请填写分类名称！';
    return;
  }
  if (empty($_POST['slug'])) {
    $error_message = '请填写分类别名！';
    return;
  }

  //接收保存
  $name = $_POST['name'];
  $slug = $_POST['slug'];

  $rows = gonefour_execute("insert into categories values (null,'{$slug}','{$name}');");

  if ($rows <= 0) {
    $error_message = '添加失败！';
    return;
  }
  $_POST['name'] = $_POST['slug'] = '';
}

//编辑分类fun
function edit_categories(){
  global $error_message;
  global $current_edit_categories;
  //接收保存
  $name = empty($_POST['name']) ? $current_edit_categories['name'] : $_POST['name'];
  $current_edit_categories['name'] = $name;
  $slug = empty($_POST['slug']) ? $current_edit_categories['slug'] : $_POST['slug'];
  $current_edit_categories['slug'] = $slug;
  $id = $current_edit_categories['id'];

  $rows = gonefour_execute("update categories set slug = '{$slug}', name = '{$name}' where id = '{$id}';");

  // if ($rows <= 0) {
  //   $error_message = '更新失败！';
  //   return;
  // }
  $_POST['name'] = $_POST['slug'] = '';
} //end edit_categories

//判读是否需要编辑分类
if (!empty($_GET['id'])) {
  $current_edit_categories  = gonefour_fetch_one('select * from categories where id =' .$_GET['id'].' limit 1;');
}

//添加编辑分类
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (empty($_GET['id'])) {
    //添加
     add_categories();
  }else{
    //编辑
     edit_categories();
  }
}


//查询所有分类
$categories = gonefour_fetch_all('select * from categories');


?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>Categories &laquo; Admin</title>
  <link rel="stylesheet" href="/static/assets/vendors/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="/static/assets/vendors/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="/static/assets/vendors/nprogress/nprogress.css">
  <link rel="stylesheet" href="/static/assets/css/admin.css">
  <script src="/static/assets/vendors/nprogress/nprogress.js"></script>
</head>
<body>
  <script>NProgress.start()</script>

  <div class="main">
   <?php include 'inc/navbar.php' ?>
    <div class="container-fluid">
      <div class="page-title">
        <h1>分类目录</h1>
      </div>
      <!-- 有错误信息时展示 -->
      <?php if (isset($error_message)): ?>
      <div class="alert alert-danger">
        <strong><?php echo $error_message ?></strong>
      </div>
      <?php endif ?>
     
      <div class="row">
        <div class="col-md-4">
          <?php if (isset($current_edit_categories)): ?>
          <form action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $current_edit_categories['id'];?>" method="post" novalidate autocomplete="off">
            <h2>编辑《<?php echo $current_edit_categories['name']; ?>》</h2>
            <div class="form-group">
              <label for="name">名称</label>
              <input id="name" class="form-control" name="name" type="text" placeholder="分类名称" value="<?php echo $current_edit_categories['name']; ?>">
            </div>
            <div class="form-group">
              <label for="slug">别名</label>
              <input id="slug" class="form-control" name="slug" type="text" placeholder="slug(唯一)" value="<?php echo $current_edit_categories['slug']; ?>">
              <!-- <p class="help-block">https://<strong>slug</strong></p> -->
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit">保存</button>
              <a class="btn btn-primary" href="/admin/categories.php" >取消</a>
            </div>
          </form> 
          <?php else: ?>
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" novalidate autocomplete="off">
            <h2>添加新分类目录</h2>
            <div class="form-group">
              <label for="name">名称</label>
              <input id="name" class="form-control" name="name" type="text" placeholder="分类名称" value="<?php echo isset($_POST['name']) ?$_POST['name'] : ''; ?>">
            </div>
            <div class="form-group">
              <label for="slug">别名</label>
              <input id="slug" class="form-control" name="slug" type="text" placeholder="slug(唯一)" value="<?php echo isset($_POST['slug']) ?$_POST['slug'] : ''; ?>">
              <!-- <p class="help-block">https://<strong>slug</strong></p> -->
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit">添加</button>
            </div>
          </form> 
          <?php endif ?>
         
        </div>
        <div class="col-md-8">
          <div class="page-action">
            <!-- show when multiple checked -->
            <a id="btn_delete" class="btn btn-danger btn-sm" href="/admin/categories-delete.php" style="display: none">批量删除</a>
          </div>
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th class="text-center" width="40"><input type="checkbox"></th>
                <th>名称</th>
                <th>Slug(唯一)</th>
                <th class="text-center" width="100">操作</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($categories as $item): ?>
             <tr>
                <td class="text-center"><input type="checkbox" data-id="<?php echo $item['id']; ?>"></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['slug']; ?></td>
                <td class="text-center">
                  <a href="/admin/categories.php?id=<?php echo $item['id'];?>" class="btn btn-info btn-xs">编辑</a>
                  <a href="/admin/categories-delete.php?id=<?php echo $item['id'];?>" class="btn btn-danger btn-xs">删除</a>
                </td>
              </tr>  
            <?php endforeach ?>
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php $current_page = 'categories'; ?>
  <?php include 'inc/sidebar.php' ?>

  <script src="/static/assets/vendors/jquery/jquery.js"></script>
  <script src="/static/assets/vendors/bootstrap/js/bootstrap.js"></script>

  <script>
  
  //批量删除
  $(function ($){
    //获取tbody下的input
    var $tbodyCheckboxs = $('tbody input');
    //获取批量删除按钮
    var $btnDelete = $('#btn_delete');
    //存取自定义id
    var allCheckeds = [];
    $tbodyCheckboxs.on('change',function (){
      //data是jQuery获取标准自定参数的值
      var id = $(this).data('id');
      //根据当前checkbox是否选中决定添加或移除
      $(this).prop('checked') ? allCheckeds.includes(id) || allCheckeds.push(id) : allCheckeds.splice(allCheckeds.indexOf(id), 1);
      //显示批量删除按钮
      allCheckeds.length ? $btnDelete.fadeIn() :  $btnDelete.fadeOut();
      //设置删除地址
      $btnDelete.prop('search','?id='+ allCheckeds);
    });


    //全选和全不选
    var $theadCheckboxs = $('thead input'); 
    $theadCheckboxs.on('change',function (){
      var checked = $(this).prop('checked');
      $tbodyCheckboxs.prop('checked', checked).trigger('change');
    });

  });
  </script>
  <script>NProgress.done()</script>
</body>
</html>
