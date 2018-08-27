<?php /*a:3:{s:65:"D:\wamp64\www\tpblog\application\frontend\view\index\homepage.tpl";i:1535013977;s:62:"D:\wamp64\www\tpblog\application\frontend\view\common\base.tpl";i:1535013977;s:82:"D:\wamp64\www\tpblog\application\frontend\view\common\widget\article-item-home.tpl";i:1535254112;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0032)http://fapiao.itdiffer.com/login -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> 首页 - 我的博客 </title>
  <!-- Bootstrap Core CSS -->
  <link href="/static/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link href="/static/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="/static/css/blog.css" rel="stylesheet">
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo url('homepage'); ?>">我的博客</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class=""><a href="<?php echo url('homepage'); ?>">首页</a></li>
          <li><a href="<?php echo url('article_list'); ?>">文章列表</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if(app('session')->get('user')): ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo htmlentities(app('session')->get('user.username')); ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo url('admin_category_list'); ?>"><i class="fa fa-dashboard fa-fw"></i> 管理后台</a></li>
                <li><a href="<?php echo url('logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> 安全退出</a></li>
              </ul>
            </li>
          <?php else: ?>
            <li><a href="<?php echo url('login'); ?>">登录</a></li>
            <li><a href="<?php echo url('reg'); ?>">注册</a></li>
          <?php endif; ?>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
  <!-- navbar -->
  <div class="container">
    

  <div class="row">
    <div class="col-md-9">
      <?php foreach($articles as $article): ?>
        <div class="blog-list">
  <div class="blog">
    <a href="<?php echo url('article_detail','id='.$article->id); ?>">
      <h2 class="blog-title"><?php echo htmlentities($article->title); ?></h2>
      <h3 class="blog-subtitle"><?php echo htmlentities($article->sub_title); ?></h3>
      <div class="blog-content-preview">
        
        <?php echo mb_substr($article->body, 0, 100); ?>...
      </div>
    </a>
    <p class="blog-meta"><a href="<?php echo url('user_info', 'id='.$article->user_id); ?>"><?php echo htmlentities($article->user->nickname); ?></a> 发布于 <?php echo htmlentities(date('Y年m月d日 H时i分',!is_numeric($article->created_time)? strtotime($article->created_time) : $article->created_time)); ?></p>
  </div>
</div>
<hr>

      <?php endforeach; ?>
    </div>
    <div class="col-md-3">
      
      <div class="tag-list" data-url="<?php echo url('ajax_tag_list'); ?>"></div>
      <div class="category-list" data-url="<?php echo url('ajax_category_list'); ?>"></div>

    </div>
  </div>


  </div>
  <script></script>
  <!-- jQuery -->
  <script src="/static/js/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="/static/libs/bootstrap/js/bootstrap.min.js"></script>
  <script src="/static/js/frontend/load_data.js"></script>
  

</body>
</html>
