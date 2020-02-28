<?php
namespace Index\Model;
use Think\Model;
class UserModel extends Model{

	public function check_user($user,$psw){
        if(empty($user)||empty($psw))
        {
         	return false;
        }
        $psw=md5($psw);
        $ar=$this->where("user_name='$user' and psw='$psw'")->find();
        if(!$ar){
        	return false;
        }
        session('user',$ar);
        cookie('user',$ar);
        cookie('psw',$psw);
        return true;
	}
}