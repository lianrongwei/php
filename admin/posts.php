<?php 
//引入公共文件
require_once '../functions.php';

//判断用户是否登录
gonefour_get_current_user();

//筛选
//查询分类的全部数据
$categories = gonefour_fetch_all('select * from categories');

//where条件
$where = '1 = 1';
$search = '';
//分类筛选
if (isset($_GET['category']) && $_GET['category'] !== 'all') {
  $where .= ' and posts.category_id =' . $_GET['category'];
  $search .= '&category=' . $_GET['category'];
}
//状态筛选
if (isset($_GET['status']) && $_GET['status'] !== 'all') {
  $where .= " and posts.status = '{$_GET['status']}'";
  $search .= '&status=' . $_GET['status'];
}


//处理分页参数
$page = empty($_GET['page']) ? 1 : (int)$_GET['page'];
//分页参数不可能是负数bug
// $page = $page < 1 ? 1 : $page;
if ($page < 1) {
  header('Location: /admin/posts.php?page=1' . $search);
}
//一页多少条
$size = 10;

//总条数
$total_pages =(int)gonefour_fetch_one("select count(1) as lenth from posts 
                                  inner join categories on posts.category_id = categories.id 
                                  inner join users on posts.user_id = users.id
                                  where {$where};")['lenth'];
//计算出总页数
$total_pages = (int)ceil($total_pages / $size);
//分页参数超过最大值bug
// $page = $page > $total_pages ? $total_pages : $page;
if ($page > $total_pages) {
  header("Location: /admin/posts.php?page={$total_pages}{$search}");
}

//计算出越过多少条
$offset = ($page - 1) * $size;

//获取数据(关联查询)
$posts = gonefour_fetch_all("select posts.id,posts.title,users.nickname as user_name,categories.name as category_name,posts.created,posts.status from posts 
                             inner join categories on posts.category_id = categories.id 
                             inner join users on posts.user_id = users.id
                             where {$where}
                             order by posts.created desc 
                             limit {$offset},{$size};");
//显示五页
$visiables = 5;
//左右之间范围
$region = ($visiables - 1) / 2 ;
//开始页面 
$begin = $page - $region; 
//结束页码 + 1
$end = $begin + $visiables;
//以上运算开始结束会出现bug
//处理开始bug
if ($begin < 1) {
  $begin = 1;
  $end = $begin + $visiables;
}
//处理结束bug
if ($end > $total_pages + 1) {
  $end = $total_pages + 1;
  $begin = $end - $visiables;
  //处理数据过少的bug
  if ($begin < 1) {
    $begin = 1;
  }
}


// 处理数据格式转换
//显示时间日期转换
function convert_date($created){
  //strtotime 转时间戳
  $timestamp = strtotime($created);
  return date('Y年m月d日<b\r/>H:i:s',$timestamp);
}

// 显示转换状态
function convert_status($status){
  $dict = array(
    'published' => '已发布',
    'drafted' => '草稿',
    'trashed' => '回收站'
  );
  return isset($dict[$status]) ? $dict[$status] :'未知';
}





?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>Posts &laquo; Admin</title>
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
        <h1>所有文章</h1>
        <a href="post-add.html" class="btn btn-primary btn-xs">写文章</a>
      </div>
      <!-- 有错误信息时展示 -->
      <!-- <div class="alert alert-danger">
        <strong>错误！</strong>发生XXX错误
      </div> -->
      <div class="page-action">
        <!-- show when multiple checked -->
        <a class="btn btn-danger btn-sm" href="javascript:;" style="display: none">批量删除</a>
        <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
          <select name="category" class="form-control input-sm">
            <option value="all">所有分类</option>
            <?php foreach ($categories as $item): ?>
            <option value="<?php echo $item['id']; ?>" <?php echo isset($_GET['category']) && $_GET['category'] === $item['id'] ? 'selected' : ''; ?>><?php echo $item['name']; ?></option>
            <?php endforeach ?>
           
          </select>
          <select name="status" class="form-control input-sm">
            <option value="all">所有状态</option>
            <option value="drafted" <?php echo isset($_GET['status']) && $_GET['status'] === 'drafted'? 'selected' : ''; ?>>草稿</option>
            <option value="published" <?php echo isset($_GET['status']) && $_GET['status'] === 'published' ? 'selected' : ''; ?>>已发布</option>
            <option value="trashed" <?php echo isset($_GET['status']) && $_GET['status'] === 'trashed'? 'selected' : ''; ?>>回收站</option>
          </select>
          <button class="btn btn-default btn-sm">筛选</button>
        </form>
        <ul class="pagination pagination-sm pull-right">
          <?php if ($page !== 1): ?>
          <li><a href="?page=<?php echo $page-1 . $search;; ?>">上一页</a></li>
          <?php endif ?>
          <?php for($i = $begin; $i < $end; $i++) :?>
          <li<?php echo $i === $page ? ' class="active"' : '';?>><a href="?page=<?php echo $i . $search; ?>"><?php echo $i; ?></a></li>
          <?php endfor ?>
          <?php if ($page !== $total_pages): ?>
          <li><a href="?page=<?php echo $page+1 . $search;; ?>">下一页</a></li>
          <?php endif ?>
        </ul>
      </div>
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th class="text-center" width="40"><input type="checkbox"></th>
            <th>标题</th>
            <th>作者</th>
            <th>分类</th>
            <th class="text-center">发表时间</th>
            <th class="text-center">状态</th>
            <th class="text-center" width="100">操作</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($posts as $item): ?>
          <tr>
            <td class="text-center"><input type="checkbox"></td>
            <td><?php echo $item['title']; ?></td>
            <td><?php echo $item['user_name']; ?></td>
            <td><?php echo $item['category_name']; ?></td>
            <td class="text-center"><?php echo convert_date($item['created']); ?></td>
            <td class="text-center"><?php echo convert_status($item['status']); ?></td>
            <td class="text-center">
              <a href="javascript:;" class="btn btn-default btn-xs">编辑</a>
              <a href="/admin/post-delete.php?id=<?php echo $item['id']; ?>" class="btn btn-danger btn-xs">删除</a>
            </td>
          </tr>
          <?php endforeach ?>
         
        </tbody>
      </table>
    </div>
  </div>
  <?php $current_page = 'posts'; ?>
  <?php include 'inc/sidebar.php' ?>

  <script src="/static/assets/vendors/jquery/jquery.js"></script>
  <script src="/static/assets/vendors/bootstrap/js/bootstrap.js"></script>
  <script>NProgress.done()</script>
</body>
</html>
