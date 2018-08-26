<div class="visible-md visible-lg">
  <div class="panel panel-custom">
    <div class="panel-heading">热门文章</div>
      <div class="list-group list-group-flush">
      {foreach $articles as $article }
            <a href="{:url('article_list', 'category='.$category->id)}" class="list-group-item">如何防止服务器攻击</a>
      {/foreach}
      </div>
  </div>
</div>
