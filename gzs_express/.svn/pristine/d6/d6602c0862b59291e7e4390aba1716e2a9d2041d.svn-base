<?php
/**
 * Created by PhpStorm.
 * User: ilath
 * Date: 2018/4/8
 * Time: 10:27
 */

namespace Common\Model;
use Think\Model\ViewModel;

class OrdersViewModel extends ViewModel
{
    public $viewFields = array(
        'orders'=>array('*','_type'=>'LEFT'),
        'user' => array('user_name','tel','true_name','_on'=>'orders.user_id=user.user_id','_type'=>'LEFT'),
        'car' => array('car_number','intro','_on'=>'orders.user_id=car.car_id','_type'=>'LEFT')
    );
}