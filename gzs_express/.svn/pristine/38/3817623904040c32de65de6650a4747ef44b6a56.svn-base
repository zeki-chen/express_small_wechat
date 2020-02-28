<?php
/**
 * Created by PhpStorm.
 * User: Wang
 * Date: 2016/10/18
 * Time: 15:45
 */

namespace Admin\Controller;
use Think\Controller;

class ConfigController extends AdminBaseController{
    public function __construct(){
        parent::__construct();
        $this->addBread('系统配置');
    }

    public function webSetting(){
        $code='web';
        $conf=$this->getConfContent($code);
        $this->addBread('网站配置',U('Config/webSetting'));
        $this->assign('title','网站配置');
        $this->assign('bread',$this->bread);
        $this->assign('conf',$conf);
        $this->display();
    }



    public  function doEdit(){
        $code=I("post.code",0);
        if(empty($code)){
            $this->error("参数错误，请重试！");
        }

        $data ['content'] =serialize($_POST);
        $data ['code'] =$code;
        $data['updatetime']=time();
        $url=$code.'Setting';
        $res=M('config')->data($data)->save();
        if($res){
            $this->success('修改成功',U("Config/$url"));
        }else{
            $this->error('修改失败');
        }
    }
}