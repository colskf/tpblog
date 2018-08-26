<?php
namespace app\frontend\controller;

use think\Request;
use think\Controller;
use app\common\model\ArticleModel;
use app\common\model\UserModel;
use app\common\model\CategoryModel;
use app\common\model\TagModel;
use app\common\model\ArticleTagMapModel;

class Article extends Controller
{

	public function index(Request $request)
	{
		$where = [];

		$categoryId = $request->get('category', 0); // $_GET['category']
		$category = CategoryModel::get($categoryId);
		if ($category) {
			$where['category_id'] = $category->id;
		}

		$articles = ArticleModel::where($where)->order('id', 'desc')->paginate(8);
		$page = $articles->render();
		//热门文章
		//$hotArtivle = ArticleModel::->order('views', 'desc')->limit(5)->select();

		$this->assign('articles', $articles);
		$this->assign('page', $page);
		$this->assign('currcategory', $category);
        return $this->fetch('article/list');
	}

	public function detail(Request $request, $id)
	{
		$article = ArticleModel::get($id);
		if (!$article) {
			$this->error('文章不存在', 'homepage');
		}

		$article->views += 1;
		$article->save();

		// $article->user = UserModel::get($article->user_id);
		// $article->category = CategoryModel::get($article->category_id);

		// $tagIds = ArticleTagMapModel::where('article_id', $id)->column('tag_id');
		// $article->tags = TagModel::whereIn('id', $tagIds)->select();

		$this->assign('article', $article);
        return $this->fetch('article/detail');
	}

	public function tagArticle(Request $request, $id)
	{
		$tag = TagModel::get($id);
		if (!$tag) {
			$this->error('标签不存在', 'homepage');
		}

		$articleIds = ArticleTagMapModel::where('tag_id', $id)->column('article_id');
		$articles = ArticleModel::whereIn('id', $articleIds)->order('id', 'desc')->paginate(8);
		$page = $articles->render();
		// print_r($tag->articles);exit;

		$this->assign('tag', $tag);
		$this->assign('articles', $articles);
		$this->assign('page', $page);
        return $this->fetch('article/tag_atricle_list');
	}

	public function userInfo(Request $request, $id)
	{
		$user = UserModel::get($id);
		if (!$user) {
			$this->error('用户不存在', 'homepage');
		}

		$articles = ArticleModel::where('user_id', $user->id)->order('id', 'desc')->paginate(8);
		$page = $articles->render();

		$this->assign('user', $user);
		$this->assign('articles', $articles);
		$this->assign('page', $page);
        return $this->fetch('article/user_info');
	}

	public function categoryList(Request $request)
	{
		$where = [];
		$where[] = ['article_num','>',0];

		$userId = $request->get('uid', 0);
		$user = UserModel::get($userId);
		if ($user) {
			$where[] = ['user_id','=',$userId];
		}

    	$categorys = CategoryModel::where($where)->order('id', 'desc')->select();

		$this->assign('categorys', $categorys);
        return $this->fetch('article/ajax/category_list');
	}

	public function tagList(Request $request)
	{
    	$tags = TagModel::order('id', 'desc')->select();

		$this->assign('tags', $tags);
        return $this->fetch('article/ajax/tag_list');
	}

	public function hotArticle(Request $request)
	{
    	$hotArticles = ArticleModel::order('views', 'desc')->limit(5)->select();

		$this->assign('hotArticles', $hotArticles);
        return $this->fetch('article/ajax/hot_article');
	}

}
