<?php
namespace app\index\controller;
use think\Request;
use JWT\JWT;
use think\Db;
class Base{
	//验证token
	public function __construct(){

		$bool=$this->vailToken();

		if($bool==false){
			exit(json_encode(array('bool'=>false)));
		}

	}

	public function vailToken(){
		
		$storage=Request::instance();

		$token=$storage->post();

		if(empty($token))  exit;

		$obj = new Jwt();

    	$bool=$obj->verifyToken($token['token']['data']);
    	
    	return $bool;
	}
	
}