<?php
/**
 * Created by PhpStorm.
 * User: ilath
 * Date: 2018/4/8
 * Time: 10:27
 */

namespace Common\Model;
use Think\Model\ViewModel;

class SpitslotViewModel extends ViewModel
{
    public $viewFields = array(
        'spitslot' => array('*','_type'=>'LEFT'),
        'user' => array('user_name','tel','headimgurl','true_name','_on'=>'spitslot.user_id=user.user_id','_type'=>'LEFT')
    );
}