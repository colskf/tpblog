{extend name="common/base" /}
{block name="title"}文章详情 - {__block__}{/block}

{block name="content"}

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

    <div class="category-list" data-url="{:url('ajax_category_list')}"></div>

  </div>
  <div class="col-md-9">
    <ol class="breadcrumb">
      <li><a href="{:url('homepage')}">首页</a></li>
      <li><a href="{:url('article_list', 'category='.$article->category->id)}">{$article->category->name}</a></li>
      <li class="active">文章</li>
    </ol>
    <section class="content-wrap">
      <header class="post-head">
        <h1 class="post-title">{$article->title}</h1>
        <span class="author">作者：<a href="{:url('user_info', 'id='.$article->user->id)}">{$article->user->nickname}</a></span> •
        <time class="post-date">{$article->created_time|date="Y年m月d日"}</time>
        &nbsp;&nbsp;&nbsp;阅读 ({$article->views})
      </header>
      <hr>
      <section class="post-content">
        {$article->body|nl2br|raw}
      </section>
      <hr>
      <section class="post-content">
        <div class="blog-copyright">
          <span title="">© 著作权归作者所有</span>
        </div>
      </section>
      <section class="post-content">
        <b>分类</b>&nbsp;&nbsp;&nbsp;
        <a href="{:url('article_list', 'category='.$article->category->id)}"><span class="badge blue">{$article->category->name}</span></a>
      </section>
      <br>
      <section class="post-content"> 
        <b>标签</b>&nbsp;&nbsp;&nbsp;
				{foreach $article->tags as $tag } 
    			<a href="{:url('tag_article_list', 'id='.$tag->id)}"><span class="badge blue">{$tag->name}</span></a>&nbsp;&nbsp;
				{/foreach}
      </section>
    </section>
  </div>
</div>
<br>
<br>
<br>

{/block}
