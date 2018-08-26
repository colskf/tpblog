{extend name="common/base" /}
{block name="title"}标签管理 - {__block__}{/block}

{block name="content"}
	<div class="row">
	  <div class="col-lg-12">
	    <h1 class="page-header">
	      标签列表
	      <div class="pull-right">
	        <a class="btn btn-success btn-sm" href="{:url('admin_tag_add')}">添加标签</a>
	      </div>
	    </h1>
	  </div>
	  <div class="col-lg-12">
	    <div class="table-responsive">
	      <table class="table table-striped">
	        <thead>
	          <tr>
	            <th>#</th>
	            <th>标签名称</th>
	            <th>添加时间</th>
	            <th>操作</th>
	          </tr>
	        </thead>
	        <tbody>
						{foreach $tags as $key=>$tag } 
		          <tr>
		            <th scope="row">{$key+1}</th>
		            <td>{$tag->name}</td>
		            <td>{$tag->created_time|date='Y-m-d H:i:s'}</td>
		            <td>
		              <div class="btn-group">
		                <a class="btn btn-default btn-sm" href="{:url('admin_tag_edit', 'id='.$tag->id)}">编辑</a>
		                <a class="btn btn-danger btn-sm btn-delete" href="{:url('admin_tag_delete', 'id='.$tag->id)}">删除</a>
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
  <script src="__STATIC__/js/backend/tag.js"></script>
{/block}

