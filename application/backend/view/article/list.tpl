{extend name="common/base" /}
{block name="title"}文章管理 - {__block__}{/block}

{block name="content"}

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">
        文章列表
        <div class="pull-right">
          <a class="btn btn-success btn-sm" href="{:url('admin_article_add')}">添加文章</a>
        </div>
      </h1>
    </div>
    <div class="col-lg-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>文章标题</th>
              <th>分类</th>
              <th>浏览量</th>
              <th>创建时间</th>
              <th>修改时间</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            {foreach $articles as $key=>$article }
            {// assign name="category" value="$newCategories[$article->category_id]" /}
            <!-- 把这个文章对应的分类拿出来 -->
              <tr>
                <th scope="row">{$key+1}</th>
                <td>{$article->title}</td>
                <!-- <td>{// $category->name|default=""}</td> -->
                <td>{$article->category_id}</td>
                <td>{$article->views}</td>
                <td>{$article->created_time|date='Y-m-d H:i:s'}</td>
                <td>{$article->updated_time|date='Y-m-d H:i:s'}</td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-default btn-sm" href="{:url('admin_article_edit', 'id='.$article->id)}">编辑</a>
                    <a class="btn btn-danger btn-sm" href="{:url('admin_article_delete', 'id='.$article->id)}">删除</a>
                  </div>
                </td>
              </tr>
            {/foreach}
          </tbody>
        </table>
      </div>
      <nav class="web-pagination text-center">
        {$page|raw}
      </nav>
    </div>
  </div>

{/block}

{block name="customscript"}
{/block}

