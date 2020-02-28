<?php
namespace app\index\controller;
use think\Request;
use JWT\JWT;
use think\Db;//TP5配置表前缀，但写的时候仍然不能省略前缀
class Login 
{	


    //1.先从本地读取缓存
    //1.1如果缓存不存在则发起登录接口
    //2.如果token不存在，则插入数据库，如果存在则更新数据库

	public $options=array(
		'appId'=>'wx155a0764c5a30ef2',
		'appKey'=>'d46b847f7e4757a6996a56b7ad1eabc9'
	);
	

    public function index()
    {
        $Request=Request::instance();
        
        $post=$Request->post();

        $url='https://api.weixin.qq.com/sns/jscode2session?appid='.$this->options['appId'].'&secret='.$this->options['appKey'].'&js_code='.$post['code'].'&grant_type=authorization_code';

        $con=json_decode($this->http_get($url),JSON_OBJECT_AS_ARRAY); 

        $token=json_encode($this->JWTtoken($con));

        $res=Db::table('wx_user')
                ->where('openid',$con['openid'])
                ->find();

        if(!$res){
            
            $data=['session_key'=>$con['session_key'],'openid'=>$con['openid'],'addtime'=>date("Y-m-d H:i:s")];   

            Db::table('wx_user')->insert($data);

        } else{

            $data=['uptime'=>date("Y-m-d H:i:s")];  

            Db::table('wx_user')->where('openid',$con['openid'])->update($data);    
        }

        exit($token);
        
    }

    public function http_get($url){
    	$ch = curl_init($url);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    	curl_setopt($ch, CURLOPT_HEADER, 0);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    	$con=curl_exec($ch);
    	curl_close($ch);
    	return $con;
    }

    public function JWTtoken($payload){
    	$obj = new Jwt();

    	$token=$obj->getToken($payload);
    	
    	return $token;
    }
}
