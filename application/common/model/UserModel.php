<?php  
namespace app\common\model;

use think\Model;

class UserModel extends Model
{
    protected $pk = 'id';
    //public $table = 'blog_users';
    protected $name = 'users';
}