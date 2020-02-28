<?php
namespace app\index\controller;
use KdApiSearch\KdApi;
use KdApiOrderSearch\KdApiCompanySearch;
use think\Request;
use JWT\JWT;
use think\Db;
class Index {

	public function valid(){

		$storage=Request::instance();

		$token=$storage->post();

		if(empty($token))  return ;

		$obj = new Jwt();

    	$bool=$obj->verifyToken($token['token']['data']);
    	
    	if($bool){
    		exit(json_encode('true'));
    	}else

    	exit(json_encode('false'));
	}

	
	public function search(){

		$tokenObj=new Jwt(); 

		$post=Request::instance();

		$Klist=$post->post();//得到快递单号  

		// $companyName=$this->returnName($Klist);//得到公司名

		// 拿到token
		$token=$tokenObj->verifyToken($Klist['token']['data']);
		
    //var_dump($Klist['ev']);
		//先去数据库查找这条单号记录
		$res=Db::table('wx_ticket')
				->where('ticket_id',$Klist['ev'])
				->find();

		$user_id=Db::table('wx_user')
				->where('openid','eq',$token['openid'])
				->value('user_id');		
		$query_relative=db('query_relative')->where('ticket_id',$Klist['ev'])->where('user_id',$user_id)->find();

		if($res&&$query_relative){

			//单号记录存在，根据最近时间字段判断是否过期。不过期直接输出json，过期更新数据库
			// $user=Db::view('wx_query_relative','remark,is_remind_status')
			// 	->view('wx_user','openid,user_id','wx_user.user_id=wx_query_relative.user_id')
			// 	->where('openid','eq',$token['openid'])
			// 	->where('ticket_id',$Klist['ev'])
			// 	->find();
				

			if((time()-strtotime($res['curquerytime']))/1800>=1)
			{
				$arr=$this->useKdApi($Klist);//调用接口后更新库返回前台数据
				Db::table('wx_wl')
				->where('ticket_id',$Klist['ev'])
				->update([
					'wl_info'=>addslashes($arr),
					'uptime'=>date("Y-m-d H:i:s")
				]);//更新物流表

				//更新查询关系表
				Db::table('wx_query_relative')
				->where('ticket_id',$Klist['ev'])
				->where('user_id',$user_id)
				->update(['uptime'=>date("Y-m-d H:i:s")]);

				//更新单号表
				Db::table('wx_ticket')
				->where('ticket_id',$Klist['ev'])->update(['uptime'=>date("Y-m-d H:i:s"),
							  'curquerytime'=>date("Y-m-d H:i:s")]);

				$arr=json_decode($arr,JSON_OBJECT_AS_ARRAY);

				$companyName=$this->returnName($Klist);//得到公司名
				$arr['ShipperName']=$companyName; 

				$arr['remark']=$query_relative['remark'];

				$arr['is_remind']=$query_relative['is_remind_status'];

				echo $arr=json_encode($arr,JSON_UNESCAPED_UNICODE);

			}else{
				$arr=db('wl')->where('ticket_id',$Klist['ev'])->find();
				//直接输出
				// $arr=Db::table('wx_wl')

				// ->alias('a')

				// ->join('wx_ticket w','a.ticket_id = w.ticket_id')
				
				// ->where('a.ticket_id',$res['ticket_id'])

				// ->find();

				$res=json_decode(stripslashes($arr['wl_info']),JSON_OBJECT_AS_ARRAY);
				
				$res['ShipperName']=$arr['companyname']; 

				$res['remark']=$query_relative['remark'];

				$res['is_remind']=$query_relative['is_remind_status'];
				
				echo $res=json_encode($res,JSON_UNESCAPED_UNICODE);
			}

		}
		if($res&&!$query_relative){
			$new_query_relative=db('query_relative')->insert(['addtime'=>date("Y-m-d H:i:s"),
							'uptime'=>date("Y-m-d H:i:s"),
						 	'user_id'=>$user_id,
							'ticket_id'=>$Klist['ev']
					]);
			$arr=db('wl')->where('ticket_id',$Klist['ev'])->find();
			$res=json_decode(stripslashes($arr['wl_info']),JSON_OBJECT_AS_ARRAY);
				
				$res['ShipperName']=$arr['companyname']; 

				$res['remark']=$new_query_relative['remark'];

				$res['is_remind']=$new_query_relative['is_remind_status'];
				
				echo $res=json_encode($res,JSON_UNESCAPED_UNICODE);
		}


		if(!$res)
		{      //单号记录不存在，执行插入

			// $user=Db::table('wx_user')
			// 	->where('openid','eq',$token['openid'])
			// 	->find();

			$arr=$this->useKdApi($Klist);//调用接口后存库

			Db::table('wx_query_relative')
				->insert(['addtime'=>date("Y-m-d H:i:s"),

							'uptime'=>date("Y-m-d H:i:s"),
						 'user_id'=>$user_id,

						 'ticket_id'=>$Klist['ev']

					]);

			Db::table('wx_ticket')
				->insert(['addtime'=>date("Y-m-d H:i:s"),
							'uptime'=>date("Y-m-d H:i:s"),
						 'curquerytime'=>date("Y-m-d H:i:s"),
						 'ticket_id'=>$Klist['ev']

					]);
			$companyName=$this->returnName($Klist);//得到公司名
			Db::table('wx_wl')
				->insert(['ticket_id'=>$Klist['ev'],
					'wl_info'=>addslashes($arr),
					'addtime'=>date("Y-m-d H:i:s"),
					'uptime'=>date("Y-m-d H:i:s"),
					'companyname'=>$companyName
				]);

			$arr=json_decode($arr,JSON_OBJECT_AS_ARRAY);

			$arr['ShipperName']=$companyName; 
			$arr['is_remind']=0;
			echo $arr=json_encode($arr,JSON_UNESCAPED_UNICODE);

		}
	}

	//使用快递API接口获取物流信息
	public function useKdApi($Klist){

		$KdCompanyObj=new KdApiCompanySearch($Klist['ev']);
		
		//获得公司编码
		$companyNum=$KdCompanyObj->getOrderTracesByJson();

		$companyNum=json_decode($companyNum,JSON_OBJECT_AS_ARRAY);
		if(!empty($companyNum['Shippers'])){

			$searchObj = new KdApi($companyNum['Shippers'][0]['ShipperCode'],$Klist['ev']);

			$resJson= $searchObj->getOrderTracesByJson();

		}else{

			$resJson=json_encode(array('err'=>'无法识别该单号！'));
		}
		
		return $resJson;
	}

	//返回中文公司名
	public function returnName($Klist){
		$KdCompanyObj=new KdApiCompanySearch($Klist['ev']);
		
		//获得公司编码
		$companyNum=$KdCompanyObj->getOrderTracesByJson();

		$companyNum=json_decode($companyNum,JSON_OBJECT_AS_ARRAY);
		if(!empty($companyNum['Shippers'])){
			
			$res =$companyNum['Shippers'][0]['ShipperName'];

		}else{

			$res='无法识别该快递公司';
		}
		
		return  $res;
	}



public function history()
{

		$storage=Request::instance();
		$token=$storage->post();
		if(empty($token))  return ;
		$obj = new Jwt();
   	$userInfo=$obj->verifyToken($token['token']['data']);
    $user_id = db('user')->where('openid', $userInfo['openid'])->value('user_id');
    $where['user_id'] = $user_id;
    $query_relative= db('query_relative')
    									->where($where)
    									->order('uptime desc')
    									->limit(10)->select();
    foreach ($query_relative as $key => $value) {
    	$wl['ticket_id']=$value['ticket_id'];
    	$res=db('wl')->where($wl)->find();
    	$wl_info=json_decode(stripslashes($res['wl_info']),true);
    	
    	if(!empty($wl_info['err'])){
    		$result[$key] = array('ShipperName' => $res['companyname'], 
    													'remark' => $value['remark'],
    													'ticket_id'=>$value['ticket_id'],
    													'State'=>0,
    													'$Traces'=>$wl_info['err']
    												);
    	continue;	
    	}
    	if(!empty($wl_info['Reason'])){
    		$result[$key] = array('ShipperName' => $res['companyname'], 
    													'remark' => $value['remark'],
    													'ticket_id'=>$value['ticket_id'],
    													'State'=>0,
    													'$Traces'=>$wl_info['Reason']
    												);
    	continue;	
    	}
    	if(empty($wl_info['Traces'])) $end_wl_info='暂无物流信息';
    	else $end_wl_info=end($wl_info['Traces']);
    	$result[$key] = array('ShipperName' => $res['companyname'], 
    												'remark' => $value['remark'],
    												'ticket_id'=>$value['ticket_id'],
    												'State'=>$wl_info['State'],
    												'Traces'=>$end_wl_info
    												);
    }
   exit(json_encode($result, JSON_UNESCAPED_UNICODE));
}



}