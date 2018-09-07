<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

	/**
	 * [index description]
	 * @return [type] [description]
	 * visit Address:http://localhost/index.php/home/index/index
	 */
    public function index(){
       // $this->show('','utf-8');
       // C()函数
       $this->assign('Title',C('SYS_TITLE'));
       $this->display();
    }


    
}