{extend name="common/base" /}
{block name="title"}首页 - {__block__}{/block}

{block name="content"}

  <div class="row">
    <div class="col-md-9">
      {foreach $articles as $article }
        {include file="common/widget/article-item-home"}
      {/foreach}
    </div>
    <div class="col-md-3">
      
      <div class="tag-list" data-url="{:url('ajax_tag_list')}"></div>
      <div class="category-list" data-url="{:url('ajax_category_list')}"></div>

    </div>
  </div>

{/block}

{block name="customscript"}
{/block}
