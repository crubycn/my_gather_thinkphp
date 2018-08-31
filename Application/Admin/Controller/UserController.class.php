<?php

/**
 * @Author: Zongmu Li
 * @Date:   2018-08-29 13:53:51
 * @E-mail: 89369147@qq.com
 */
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller{


	/**
	 *
	 * Controller path： Admin/Controller/UserController
	 * namespace: Admin\Controller
	 * visit address： http://localhost/index.php/admin/user/user
	 * method ==> template
	 * 模块module/类class/方法method
	 * 
	 */
	public function user(){
    	$a = $_POST['username'];
    	$this->assign('a',$a);
    	$this->display();
    }

    /**
     * visit address:http://localhost/index.php/admin/user/add
     */
    public function add(){
    	//$user = new \Admin\Model\UserModel();
    	//var_dump($user);

    	$user = D('User'); //creater living example

    	//D()函数 优先得到子类的实例
    	//M()函数 优先得到父类的实例
    	

    	$user->d();
    }
}
