<?php
/**
 * Created by PhpStorm.
 * User: Wang
 * Date: 2016/10/20
 * Time: 12:01
 */

namespace Admin\Controller;
use Think\Controller;

class CarController extends AdminBaseController{
    public function __construct(){
        parent::__construct();
        $this->addBread('订单');
        $this->addBread('车辆列表',U('Car/index'));
    }

    public function index(){
        $this->assign('title','车辆列表');
        $this->assign('bread',$this->bread);
        $where=array();
        $pageParam=array();
        $orderby="car_id desc";
        $this->getList('CarView',$where,$orderby,$pageParam);
        $this->display();
    }

    public function view(){
        $this->addBread('车辆详情');
        $this->assign('title','车辆详情');
        $this->assign('bread',$this->bread);
        $where['car_id']=I('get.car_id');
        $carView=new \Common\Model\CarViewModel();
        $model=$carView->where($where)->find();
        if($model){
            $model['intro']=unserialize($model['intro']);
        }
        $seat=M('seat')->select();
        $carkind=M('carkind')->select();
        $brand=M('brand')->select();
        $gear=M('gear')->select();
        $window=M('window')->select();
        $this->assign('seat',$seat);
        $this->assign('gear',$gear);
        $this->assign('carkind',$carkind);
        $this->assign('brand',$brand);
        $this->assign('window',$window);
        if(!$model){
            $this->error('参数错误，请重试');
        }
        $this->assign('model',$model);
        $this->display();
    }

    public function doDel(){
        $ids=I('ids');
        if(empty($ids)){
            $this->error("请先选择要删除的记录！");
        }
        $where['car_id']=array('in',$ids);
        $res=M('car')->where($where)->delete();
        if($res){
            $this->success("删除成功",U('Car/index'));
        } else {
            $this->error("删除失败");
        }
    }

    //seat:座位数，carkind:车型，brand:品牌，mileage:公里数,production:生产年月
    //gear:挂挡类型，seat_kind:座椅配置，window:天窗类型,self:自动应答（有为1，无为0）
    //describe,车主描述
    public function doedit(){
        $data=$_POST;
        $where['car_id']=$data['car_id'];
        $map['updatetime']=time();
        $map['car_number']=$data['car_number'];
        $map['cash']=$data['cash'];
        $map['valid']=$data['valid'];
        $map['price']=$data['price'];
        $map['seat_id']=$data['seat'];
        $map['carkind_id']=$data['carkind'];
        $map['brand_id']=$data['brand'];
        $map['gear_id']=$data['gear'];
        $map['window_id']=$data['window'];
        $intro=array('mileage'=>$data['mileage'], 'production'=>$data['production'],
             'seat_kind'=>$data['seat_kind'],
            'self'=>$data['self'],'describe'=>$data['describe']);
        $map['intro']=serialize($intro);
        $res=M('car')->where($where)->data($map)->save();
        if($res){
            $this->success('修改成功',U('Car/index'));
        }else{
           $this->error('修改失败');
        }
    }

    public function add(){
        $this->addBread('添加车辆');
        $this->assign('title','添加车辆');
        $this->assign('bread',$this->bread);
        $seat=M('seat')->select();
        $carkind=M('carkind')->select();
        $brand=M('brand')->select();
        $gear=M('gear')->select();
        $window=M('window')->select();
        $this->assign('seat',$seat);
        $this->assign('gear',$gear);
        $this->assign('carkind',$carkind);
        $this->assign('brand',$brand);
        $this->assign('window',$window);
        $this->display();
    }

    public function doAdd(){
        $data=$_POST;
        $intro=array('mileage'=>$data['mileage'], 'production'=>$data['production'],
             'seat_kind'=>$data['seat_kind'],
            'self'=>$data['self'],'describe'=>$data['describe']);
        $data['intro']=serialize($intro);
        $data['updatetime']=time();
        $data['addtime']=time();
        $data['type']=1;
        $data['carkind_id']=$data['carkind'];
        $data['seat_id']=$data['seat'];
        $data['brand_id']=$data['brand'];
        $data['gear_id']=$data['gear'];
        $data['window_id']=$data['window'];
        $model = M('car')->data($data)->add();
        $map2['car_id']=$model['car_id'];
        $carpic=M('carpic')->where($map2)->add();
        if($model&&$carpic){
            $this->success('添加成功',U('Car/index'));
        }else{
            $this->error('添加失败');
        }

    }

    public  function pic()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg', 'pdf');// 设置附件上传类型
        $upload->rootPath = './Uploads/'; // 设置附件上传根目录
        $upload->savePath = ''; // 设置附件上传（子）目录
        // 上传文件
        $info = $upload->upload();
        //var_dump($info);
        //print_r($info);
        if (!$info) {// 上传错误提示错误信息
//            $this->error($upload->getError());
        } else {// 上传成功
            foreach ($info as $file) {
                $bigimg = dirname($_SERVER['SCRIPT_NAME']).'/Uploads/'.$file['savepath'] . $file['savename'];
            }
                //$bigimg = $file['savepath'].$file['savename'];
                $pic = array('"error" ' => '0', 'url' => $bigimg);
//                $this->ajaxReturn($pic);

            echo json_encode(array('error' => 0, 'url' => $bigimg));
            }
        }
    public function photo(){
        $where['car_id']=I('car_id');
        $model=M('carpic')->where($where)->find();
        $this->assign('model',$model);
        $this->display();
    }

    public function doPhoto(){
        $data=$_POST;
        $where['car_id']=$data['car_id'];
        $data['updatetime']=time();
        $res=M('carpic')->where($where)->data($data)->save();
        if($res){
            $this->success('修改成功',U('Car/index'));
        }else{
            $this->error('修改失败');
        }
    }

}