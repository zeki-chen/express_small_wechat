<?php
/**
 * Created by PhpStorm.
 * User: ilath
 * Date: 2018/4/8
 * Time: 10:27
 */

namespace Common\Model;
use Think\Model\ViewModel;

class CarViewModel extends ViewModel
{
    public $viewFields = array(
        'car' => array('*','_type'=>'LEFT'),
        'user' => array('user_name','headimgurl','tel','true_name','_on'=>'car.user_id=user.user_id','_type'=>'LEFT'),
        'carkind' => array('carkind_name','_on'=>'car.carkind_id=carkind.carkind_id','_type'=>'LEFT'),
        'brand' => array('brand_name','_on'=>'car.brand_id=brand.brand_id','_type'=>'LEFT'),
        'gear' => array('gear_name','_on'=>'car.gear_id=gear.gear_id','_type'=>'LEFT'),
        'window' => array('window_name','_on'=>'car.window_id=window.window_id','_type'=>'LEFT'),
        'seat' => array('seat_name','_on'=>'car.seat_id=seat.seat_id','_type'=>'LEFT'),
    );
}