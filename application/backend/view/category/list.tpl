{extend name="common/base" /}
{block name="title"}分类管理 - {__block__}{/block}

{block name="content"}
	<div class="row">
	  <div class="col-lg-12">
	    <h1 class="page-header">
	      分类列表
	      <div class="pull-right">
	        <a class="btn btn-success btn-sm" href="{:url('admin_category_add')}">添加分类</a>
	      </div>
	    </h1>
	  </div>
	  <div class="col-lg-12">
	    <div class="table-responsive">
	      <table class="table table-striped">
	        <thead>
	          <tr>
	            <th>#</th>
	            <th>分类标题</th>
	            <th>文章数量</th>
	            <th>创建时间</th>
	            <th>操作</th>
	          </tr>
	        </thead>
	        <tbody>
						{foreach $categories as $key=>$category } 
		          <tr>
		            <th scope="row">{$key+1}</th>
		            <td>{$category->name}</td>
		            <td>{$category->article_num}</td>
		            <td>{$category->created_time|date='Y-m-d H:i:s'}</td>
		            <td>
		              <div class="btn-group">
		                <a class="btn btn-default btn-sm" href="{:url('admin_category_edit', 'id='.$category->id)}">编辑</a>
		                <a class="btn btn-danger btn-sm btn-delete" href="{:url('admin_category_delete', 'id='.$category->id)}">删除</a>
		              </div>
		            </td>
		          </tr>
						{/foreach}
	        </tbody>
	      </table>
	    </div>
	  </div>
	</div>
{/block}

{block name="customscript"}
  <script src="__STATIC__/js/backend/category.js"></script>
{/block}

