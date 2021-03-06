{extend name="common/base" /}
{block name="title"}添加文章 - {__block__}{/block}

{block name="content"}

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">添加文章</h1>
    </div>
    <div class="col-lg-12">
      <form action="{:url('admin_article_add')}" method="post">
        <div class="form-group">
          <label for="id_title">文章标题</label>
          <input type="text" class="form-control" id="id_title" name="title" placeholder="文章标题">
        </div>
        <div class="form-group">
          <label for="id_subtitle">副标题</label>
          <input type="text" class="form-control" id="id_subtitle" name="subtitle" placeholder="副标题">
        </div>
        <div class="form-group">
          <label for="id_category">分类</label>
          <select class="form-control" id="id_category" name="category">
						{foreach $categories as $key=>$category } 
            	<option value="{$category->id}">{$category->name}</option>
						{/foreach}
          </select>
        </div>
        <div class="form-group">
          <label>标签</label>
          <div>
						{foreach $tags as $key=>$tag } 
	            <label class="checkbox-inline">
	              <input type="checkbox" id="" name="tag[]" value="{$tag->id}"> {$tag->name}
	            </label>
						{/foreach}
          </div>
        </div>
        <div class="form-group">
          <label for="id_content">文章内容</label>
          <div id="container" name="content" type="text/plain">
          <!-- <textarea class="form-control" id="id_content" rows="8" name="content"></textarea> -->
          </div>
        </div>
        <button type="submit" class="btn btn-primary">提交</button>
      </form>
    </div>
  </div>

{/block}

{block name="customscript"}
    <script src="__STATIC__/js/backend/article_manage.js"></script>
    <!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain">
        
    </script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="__STATIC__/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="__STATIC__/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
{/block}
