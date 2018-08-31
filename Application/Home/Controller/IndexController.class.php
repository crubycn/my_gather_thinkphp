<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       // $this->show('','utf-8');
       // C()函数
       $this->assign('Title',C('SYS_TITLE'));
       $this->display();
    }
}