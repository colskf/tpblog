{extend name="common/base" /}
{block name="title"}文章列表 - {__block__}{/block}

{block name="content"}

  <div class="row">
    <div class="col-md-3">

      <div class="hot-article" data-url="{:url('ajax_hot_article')}"></div>
      <div class="category-list" data-url="{:url('ajax_category_list')}"></div>

    </div>
    <div class="col-md-9">
      <ol class="breadcrumb">
        <li><a href="{:url('homepage')}">首页</a></li>
        <li class="active">文章列表</li>
        {if $currcategory}
        	<li class="active">{$currcategory->name}</li>
        {/if}
      </ol>
      <div class="post-list list-group">
	      {foreach $articles as $article }
        	{include file="common/widget/article-item"}
	      {/foreach}
      </div>
      
      {$page|raw}
    </div>
  </div>

{/block}
