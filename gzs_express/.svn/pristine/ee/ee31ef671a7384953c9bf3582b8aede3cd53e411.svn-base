<?php
/**
 * Created by PhpStorm.
 * User: Wang
 * Date: 2016/10/18
 * Time: 12:06
 */

namespace Admin\Controller;

use Think\Controller;

class MainController extends AdminBaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->assign('title', '易租车后台管理系统');
        $this->display();
    }

    public function top()
    {
        $this->display();
    }

    public function left()
    {
        $this->display();
    }

    public function center()
    {
//      $this->addBread('首页',U('Main/center'));
        $this->assign('bread', $this->bread);
        $this->display();
    }
}