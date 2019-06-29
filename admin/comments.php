<?php 
//引入公共文件
require_once '../functions.php';

//判断用户是否登录
gonefour_get_current_user();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>Comments &laquo; Admin</title>
  <link rel="stylesheet" href="/static/assets/vendors/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="/static/assets/vendors/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="/static/assets/vendors/nprogress/nprogress.css">
  <link rel="stylesheet" href="/static/assets/css/admin.css">
  <script src="/static/assets/vendors/nprogress/nprogress.js"></script>
  <!-- loading加载样式 -->
  <style>
   #loading{
      position: fixed;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      background-color: rgba(0,0,0,0.1);
      z-index: 999;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .pacman {
      position: relative;
      transform: scale(1);
    }
    .pacman > div:nth-child(2) {
      -webkit-animation: pacman-balls 1s -0.99s infinite linear;
      animation: pacman-balls 1s -0.99s infinite linear;
    }
    .pacman > div:nth-child(3) {
      -webkit-animation: pacman-balls 1s -0.66s infinite linear;
      animation: pacman-balls 1s -0.66s infinite linear;
    }
    .pacman > div:nth-child(4) {
      -webkit-animation: pacman-balls 1s -0.33s infinite linear;
      animation: pacman-balls 1s -0.33s infinite linear;
    }
    .pacman > div:nth-child(5) {
      -webkit-animation: pacman-balls 1s 0s infinite linear;
      animation: pacman-balls 1s 0s infinite linear;
    }
    .pacman > div:first-of-type {
      width: 0px;
      height: 0px;
      border-right: 25px solid transparent;
      border-top: 25px solid #11D4C5;
      border-left: 25px solid #11D4C5;
      border-bottom: 25px solid #11D4C5;
      border-radius: 25px;
      -webkit-animation: rotate_pacman_half_up 0.5s 0s infinite;
      animation: rotate_pacman_half_up 0.5s 0s infinite;
      position: relative;
      left: -30px;
    }
    .pacman > div:nth-child(2) {
      width: 0px;
      height: 0px;
      border-right: 25px solid transparent;
      border-top: 25px solid #11D4C5;
      border-left: 25px solid #11D4C5;
      border-bottom: 25px solid #11D4C5;
      border-radius: 25px;
      -webkit-animation: rotate_pacman_half_down 0.5s 0s infinite;
      animation: rotate_pacman_half_down 0.5s 0s infinite;
      margin-top: -50px;
      position: relative;
      left: -30px;
    }
    .pacman > div:nth-child(3), .pacman > div:nth-child(4), .pacman > div:nth-child(5), .pacman > div:nth-child(6) {
      background-color: #11D4C5;
      width: 15px;
      height: 15px;
      border-radius: 100%;
      margin: 2px;
      width: 10px;
      height: 10px;
      position: absolute;
      -webkit-transform: translate(0, -6.25px);
      transform: translate(0, -6.25px);
      top: 25px;
      left: 70px;
    }

    @-webkit-keyframes rotate_pacman_half_up {
      0% {
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg);
      }

      50% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }

      100% {
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg);
      }
    }

    @keyframes rotate_pacman_half_up {
      0% {
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg);
      }

      50% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }

      100% {
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg);
      }
    }

    @-webkit-keyframes rotate_pacman_half_down {
      0% {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
      }

      50% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
      }
    }

    @keyframes rotate_pacman_half_down {
      0% {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
      }

      50% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
      }
    }

    @-webkit-keyframes pacman-balls {
      75% {
        opacity: 0.7;
      }

      100% {
        -webkit-transform: translate(-100px, -6.25px);
        transform: translate(-100px, -6.25px);
      }
    }

    @keyframes pacman-balls {
      75% {
        opacity: 0.7;
      }

      100% {
        -webkit-transform: translate(-100px, -6.25px);
        transform: translate(-100px, -6.25px);
      }
    }

   
  </style>
</head>
<body>
  <script>NProgress.start()</script>

  <div class="main">
    <?php include 'inc/navbar.php' ?>
    <div class="container-fluid">
      <div class="page-title">
        <h1>所有评论</h1>
      </div>
      <!-- 有错误信息时展示 -->
      <!-- <div class="alert alert-danger">
        <strong>错误！</strong>发生XXX错误
      </div> -->
      <div class="page-action">
        <!-- show when multiple checked -->
        <div class="btn-batch" style="display: none">
          <button class="btn btn-info btn-sm">批量批准</button>
          <button class="btn btn-warning btn-sm">批量拒绝</button>
          <button class="btn btn-danger btn-sm">批量删除</button>
        </div>
        <ul class="pagination pagination-sm pull-right">
          <!-- <li><a href="#">上一页</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">下一页</a></li> -->
        </ul>
      </div>
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th class="text-center" width="40"><input type="checkbox"></th>
            <th class="text-center" width="80">作者</th>
            <th>评论</th>
            <th class="text-center">评论在</th>
            <th class="text-center" width="200">提交于</th>
            <th class="text-center" width="80">状态</th>
            <th class="text-center" width="150">操作</th>
          </tr>
        </thead>
        <tbody>
<!--           <tr class="danger">
            <td class="text-center"><input type="checkbox"></td>
            <td>大大</td>
            <td>楼主好人，顶一个</td>
            <td>《Hello world》</td>
            <td>2016/10/07</td>
            <td>未批准</td>
            <td class="text-center">
              <a href="post-add.html" class="btn btn-info btn-xs">批准</a>
              <a href="javascript:;" class="btn btn-danger btn-xs">删除</a>
            </td>
          </tr> -->
        </tbody>
      </table>
    </div>
  </div>
  <?php $current_page = 'comments'; ?>
  <?php include 'inc/sidebar.php' ?>

<!-- loading加载 -->
  <div id="loading" style="none">
    <div class="pacman">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>

  <script src="/static/assets/vendors/jquery/jquery.js"></script>
  <script src="/static/assets/vendors/bootstrap/js/bootstrap.js"></script>
   <!-- 分页框架 -->
  <script src="/static/assets/vendors/twbs-pagination/jquery.twbsPagination.js"></script>
  <!-- 模板引擎 -->
  <script src="/static/assets/vendors/jsrender/jsrender.js"></script>
  <script>
  </script>
  <!-- 模板 -->
  <script id="comments_tmpl" type="text/x-jsrender">
    {{for comments}}
    <tr{{if status === 'held'}} class="warning"{{else status === 'rejected'}} class="danger"{{/if}} data-id="{{:id}}">
      <td class="text-center"><input type="checkbox"></td>
      <td class="text-center">{{:author}}</td>
      <td>{{:content}}</td>
      <td class="text-center">《{{:post_title}}》</td>
      <td class="text-center">{{:date}}</td>
      <td class="text-center">{{if status === 'held'}}待审{{else status === 'rejected'}}拒绝{{else}}准许{{/if}}</td>
      <td class="text-center">
        {{if status === 'held'}}
        <a href="post-add.html" class="btn btn-info btn-xs">批准</a>
        <a href="post-add.html" class="btn btn-warning btn-xs">拒绝</a>
        {{/if}}
        <a href="javascript:;" class="btn btn-danger btn-xs btn-delete">删除</a>
      </td>
    </tr>
    {{/for}}
  </script>
  <script>
    $(document).ajaxStart(function() {
      NProgress.start();
      // $('#loading').css('display', 'flex');
      $('#loading').fadeIn();
    }).ajaxStop(function() {
      NProgress.done();
      // $('#loading').css('display', 'none');
      $('#loading').fadeOut();
    });
    
    var currentPage = 1;

    //评论
    function loadPageData(page){
      $.get('/admin/api/comments.php',{page:page},function (res){
        if (page > res['total_pages']) {
          loadPageData(res['total_pages']);
          return;
        }
        $('.pagination').twbsPagination('destroy');
        $('.pagination').twbsPagination({
            totalPages: res['total_pages'],
            visiablePages: 5,
            first:'首页',
            last:'末页',
            prev:'上一页',
            next:'下一页',
            startPage: page,
            //第一次初始化不执行
            initiateStartPageClick: false,
            onPageClick: function (e,page){
              //初始化先执行一次
             loadPageData(page);
            }
        });
        var html = $('#comments_tmpl').render({
          comments : res['comments']
        });
        // $("tbody").html(html);
        $('tbody').fadeOut(function (){
          $(this).html(html);
        }).fadeIn();

        currentPage = page;
      });
    }
    loadPageData(currentPage);

    //删除数据//委托
    $('tbody').on('click','.btn-delete',function(){
      var $tr = $(this).parent().parent();
      var id = $tr.data('id');
      $.get('/admin/api/comment-delete.php',{id:id},function (res){
        if (!res) return;
        loadPageData(currentPage);
      });
    });
    
  </script>
 


  <script>NProgress.done()</script>
</body>
</html>
