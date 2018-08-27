<?php /*a:2:{s:65:"D:\wamp64\www\tpblog\application\frontend\view\article\detail.tpl";i:1535251682;s:62:"D:\wamp64\www\tpblog\application\frontend\view\common\base.tpl";i:1535013977;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0032)http://fapiao.itdiffer.com/login -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> 文章详情 - 我的博客 </title>
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
    <div class="visible-md visible-lg">
      <div class="panel panel-custom">
        <div class="panel-heading">相关文章</div>
        <div class="list-group list-group-flush">
          <a href="./内容页.html" class="list-group-item">如何防止服务器攻击</a>
          <a href="./内容页.html" class="list-group-item">如何防止服务器攻击</a>
          <a href="./内容页.html" class="list-group-item">如何防止服务器攻击</a>
          <a href="./内容页.html" class="list-group-item">如何防止服务器攻击</a>
          <a href="./内容页.html" class="list-group-item">如何防止服务器攻击</a>
        </div>
      </div>
    </div>

    <div class="category-list" data-url="<?php echo url('ajax_category_list'); ?>"></div>

  </div>
  <div class="col-md-9">
    <ol class="breadcrumb">
      <li><a href="<?php echo url('homepage'); ?>">首页</a></li>
      <li><a href="<?php echo url('article_list', 'category='.$article->category_id); ?>"><?php echo htmlentities($article->title); ?></a></li>
      <li class="active">文章</li>
    </ol>
    <section class="content-wrap">
      <header class="post-head">
        <h1 class="post-title"><?php echo htmlentities($article->title); ?></h1>
        <span class="author">作者：<a href="<?php echo url('user_info', 'id='.$article->user_id); ?>"><?php echo htmlentities($article->user->nickname); ?></a></span> •
        <time class="post-date"><?php echo htmlentities(date("Y年m月d日",!is_numeric($article->created_time)? strtotime($article->created_time) : $article->created_time)); ?></time>
        &nbsp;&nbsp;&nbsp;阅读 (<?php echo htmlentities($article->views); ?>)
      </header>
      <hr>
      <section class="post-content">
        <?php echo nl2br($article->body); ?>
      </section>
      <hr>
      <section class="post-content">
        <div class="blog-copyright">
          <span title="">© 著作权归作者所有</span>
        </div>
      </section>
      <section class="post-content">
        <b>分类</b>&nbsp;&nbsp;&nbsp;
        <a href="<?php echo url('article_list', 'category='.$article->category_id); ?>"><span class="badge blue"><?php echo htmlentities($article->title); ?></span></a>
      </section>
      <br>
      <section class="post-content"> 
        <b>标签</b>&nbsp;&nbsp;&nbsp;
				<?php foreach($article->tags as $tag): ?> 
    			<a href="<?php echo url('tag_article_list', 'id='.$tag->id); ?>"><span class="badge blue"><?php echo htmlentities($tag->name); ?></span></a>&nbsp;&nbsp;
				<?php endforeach; ?>
      </section>
    </section>
  </div>
</div>
<br>
<br>
<br>


  </div>
  <script></script>
  <!-- jQuery -->
  <script src="/static/js/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="/static/libs/bootstrap/js/bootstrap.min.js"></script>
  <script src="/static/js/frontend/load_data.js"></script>
  
</body>
</html>
