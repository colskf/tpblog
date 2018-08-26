<?php /*a:3:{s:63:"D:\wamp64\www\tpblog\application\frontend\view\article\list.tpl";i:1535248608;s:62:"D:\wamp64\www\tpblog\application\frontend\view\common\base.tpl";i:1535013977;s:77:"D:\wamp64\www\tpblog\application\frontend\view\common\widget\article-item.tpl";i:1535185195;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0032)http://fapiao.itdiffer.com/login -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> 文章列表 - 我的博客 </title>
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
    <div class="col-md-3">

      <div class="hot-article" data-url="<?php echo url('ajax_hot_article'); ?>"></div>
      <div class="category-list" data-url="<?php echo url('ajax_category_list'); ?>"></div>

    </div>
    <div class="col-md-9">
      <ol class="breadcrumb">
        <li><a href="<?php echo url('homepage'); ?>">首页</a></li>
        <li class="active">文章列表</li>
        <?php if($currcategory): ?>
        	<li class="active"><?php echo htmlentities($currcategory->name); ?></li>
        <?php endif; ?>
      </ol>
      <div class="post-list list-group">
	      <?php foreach($articles as $article): ?>
        	<div class="list-group-item">
  <h4 class="list-group-item-heading">
    <a href="<?php echo url('article_detail','id='.$article->id); ?>"><?php echo htmlentities($article->title); ?></a>
  </h4>
  <p>
    <span class="label label-info"><b><?php echo htmlentities(date('Y年m月d日 H时i分',!is_numeric($article->created_time)? strtotime($article->created_time) : $article->created_time)); ?></b></span> &nbsp;&nbsp;&nbsp;阅读 <span class="badge"><?php echo htmlentities($article->views); ?></span>
  </p>
  <p class="subtitle">
    <?php echo htmlentities($article->sub_title); ?>
  </p>
</div>
<hr>
	      <?php endforeach; ?>
      </div>
      
      <?php echo $page; ?>
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
