{extend name="common/base" /}
{block name="title"}用户信息 - {__block__}{/block}

{block name="content"}

  <div class="row">
    <div class="col-md-3">
      <div class="text-center">
        <section class="user-msg">
          <div class="header">
            {if $user->avatar}
              <img src="__UPLOAD__/{$user->avatar}" alt="" style="width:120px;height:120px;" class="img-circle img-responsive center-block">
            {else/}
              <img src="__STATIC__/images/header.jpg" alt="" class="img-circle img-responsive center-block">
            {/if}
          </div>
          <h5>{$user->nickname}</h5>
          <p>{// $user->intro|nl2br|raw}</p>
        </section>
        <div class="list-group">
          博文数量 {$articles->total()}
        </div>
      </div>
      
      <div class="category-list" data-url="{:url('ajax_category_list','uid='.$user->id)}"></div>

    </div>
    <div class="col-md-9">
      <ol class="breadcrumb">
        <li><a href="{:url('homepage')}">首页</a></li>
        <li class="active">{$user->nickname}</li>
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
