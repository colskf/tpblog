<div class="blog-list">
  <div class="blog">
    <a href="{:url('article_detail','id='.$article->id)}">
      <h2 class="blog-title">{$article->title}</h2>
      <h3 class="blog-subtitle">{$article->sub_title}</h3>
      <div class="blog-content-preview">
        {// $article->body|mb_substr=0,100}
        {:mb_substr($article->body, 0, 100)}...
      </div>
    </a>
    <p class="blog-meta"><a href="{:url('user_info', 'id='.$article->user->id)}">{$article->user->nickname}</a> 发布于 {$article->created_time|date='Y年m月d日 H时i分'}</p>
  </div>
</div>
<hr>
