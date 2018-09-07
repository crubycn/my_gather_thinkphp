<?php

/**
 * @Author: Zongmu Li
 * @Date:   2018-08-29 13:53:51
 * @E-mail: 89369147@qq.com
 */
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{


	/**
	 *
	 * Controller path： Admin/Controller/UserController
	 * namespace: Admin\Controller
	 * visit address： http://localhost/index.php/home/user/user
	 * method ==> template
	 * 模块module/类class/方法method
	 * 
	 */
	public function index(){
        //接收POST传值 并且利用I()函数进行安全过滤
        //$username = $_POST['username'];
        $user_email = I('POST.user_email');
        $password = I('POST.password');

        //读取数据库User表
        $user = D('user');
        //user 数据表中email 唯一性

        //判断条件放入数组 简化拼接出现的问题
        $my_where['user_email'] = $user_email;
        $my_where['user_password'] = $password;

        $result = $user->where($my_where)->find();

        if(!empty($result)){
            echo $result['user_email'];
        }else{
            echo "邮箱或者密码不对！";
        }

    	$this->assign('username',$username);
        $this->assign('Title',C('SYS_TITLE'));
    	$this->display();
    }

    /**
     * [reg 注册账号]
     * @return [type] [description]
     * visit address:http://localhost/index.php/home/user/reg
     */
    public function reg(){
    	//$user = new \Admin\Model\UserModel();
    	//var_dump($user);

    	//$user = D('User'); //creater living example

    	//D()函数 优先得到子类的实例
    	//M()函数 优先得到父类的实例
    	


        $this->assign('Title',C('SYS_TITLE'));
        $this->display();
    }

    /**
     * [retrieve 找回密码]
     * @return [type] [description]
     * visit address:http://localhost/index.php/home/user/retrieve
     */
    public function retrieve(){


        $this->assign('Title',C('SYS_TITLE'));
        $this->display();

    }
}
