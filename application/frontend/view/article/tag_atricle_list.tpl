{extend name="common/base" /}
{block name="title"}热门标签 - {__block__}{/block}

{block name="content"}

    <div class="row">

      <div class="col-md-3">
      	<div class="tag-list" data-url="{:url('ajax_tag_list')}"></div>
      </div>

      <div class="col-md-9">
        <ol class="breadcrumb">
          <li><a href="{:url('homepage')}">首页</a></li>
          <li class="active">热门标签</li>
          <li class="active">{$tag->name}</li>
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
