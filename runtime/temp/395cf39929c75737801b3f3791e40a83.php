<?php /*a:1:{s:72:"D:\wamp64\www\tpblog\application\frontend\view\article\ajax\tag_list.tpl";i:1535185195;}*/ ?>
<div class="visible-md visible-lg">
  <div class="panel panel-custom">
    <div class="panel-heading">热门标签</div>
    <div class="content tag-cloud">
      <?php foreach($tags as $tag): ?>
        <a href="<?php echo url('tag_article_list', 'id='.$tag->id); ?>"><?php echo htmlentities($tag->name); ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</div>
