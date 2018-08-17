<?php
namespace app\backend\controller;

use think\Controller;
use think\Request;
use app\common\model\UserModel;

class Reg extends Controller
{
    public function reg()
    {
    	
        return $this->fetch('reg/reg');
    }
    public function regSubmit(Request $request)
    {	
    	$postData = $request->post();
    	//用户名去除空格
    	$username =$request->post('username','','trim');
    	//验证用户名是否合法 用户名长度4-12,字母数字下划线[a-zA-Z0-9_]
    	$pattern = '/^\w{4,12}$/';
    	if(!preg_match($pattern, $username)){
    		//非法用户名
    		$this->error('注册失败,非法用户名');
    		// $this->error('注册失败,非法用户名');
    	}
    	//验证重复密码是否一致
    	if($postData['password'] != $postData['repassword']){
    		$this->error('注册失败,两次输入密码不一致');
    	}
    	//用户名是否存在
    	if(UserModel::where('username',$username)->count()){
    		$this->error('注册失败,用户名已存在');
    	}
    	//密码加密储存
    	$password = md5($postData['password']);

    	$user = new UserModel;

    	$user->username = $username; 
    	$user->password = $password; 
    	$user->nickname = $username; 
    	$user->save();
    	
    	$this->success('注册成功','login');
    }
}