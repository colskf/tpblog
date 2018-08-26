<?php /*a:1:{s:77:"D:\wamp64\www\tpblog\application\frontend\view\article\ajax\category_list.tpl";i:1535013977;}*/ ?>
<div class="visible-md visible-lg">
  <div class="panel panel-custom">
    <div class="panel-heading">博客分类</div>
    <div class="list-group list-group-flush">
      <?php foreach($categorys as $category): ?>
        <a href="<?php echo url('article_list', 'category='.$category->id); ?>" class="list-group-item"><?php echo htmlentities($category->name); ?><span class="badge"><?php echo htmlentities($category->article_num); ?></span></a>
      <?php endforeach; ?>
    </div>
  </div>
</div>
