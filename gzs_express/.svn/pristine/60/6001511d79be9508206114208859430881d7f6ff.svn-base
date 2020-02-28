/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : vrent

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-05-24 16:41:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `v_admin`
-- ----------------------------
DROP TABLE IF EXISTS `v_admin`;
CREATE TABLE `v_admin` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `aname` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT '密码',
  `valid` int(10) DEFAULT NULL COMMENT '1为有效，2为无效',
  `addtime` varchar(255) DEFAULT NULL COMMENT '添加时间',
  `updatetime` varchar(255) DEFAULT NULL COMMENT '更新时间',
  `ext` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='管理员id';

-- ----------------------------
-- Records of v_admin
-- ----------------------------
INSERT INTO `v_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '1524741923', '1524741923', null);

-- ----------------------------
-- Table structure for `v_brand`
-- ----------------------------
DROP TABLE IF EXISTS `v_brand`;
CREATE TABLE `v_brand` (
  `brand_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '品牌id',
  `brand_name` varchar(50) DEFAULT NULL COMMENT '品牌名字',
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='品牌表';

-- ----------------------------
-- Records of v_brand
-- ----------------------------
INSERT INTO `v_brand` VALUES ('1', '路虎');
INSERT INTO `v_brand` VALUES ('2', '大众');
INSERT INTO `v_brand` VALUES ('3', '本田');
INSERT INTO `v_brand` VALUES ('4', '宝马');
INSERT INTO `v_brand` VALUES ('5', '奔驰');
INSERT INTO `v_brand` VALUES ('6', '奇瑞');
INSERT INTO `v_brand` VALUES ('7', '丰田');
INSERT INTO `v_brand` VALUES ('8', '沃尔沃');
INSERT INTO `v_brand` VALUES ('9', '雪佛兰');

-- ----------------------------
-- Table structure for `v_car`
-- ----------------------------
DROP TABLE IF EXISTS `v_car`;
CREATE TABLE `v_car` (
  `car_id` int(10) NOT NULL AUTO_INCREMENT,
  `intro` varchar(255) DEFAULT NULL COMMENT '简介',
  `car_number` varchar(255) DEFAULT NULL COMMENT '车辆号码',
  `type` int(255) DEFAULT NULL COMMENT '类型',
  `user_id` int(255) DEFAULT NULL COMMENT '用户id',
  `price` varchar(255) DEFAULT NULL COMMENT '价格',
  `senttime` varchar(255) DEFAULT NULL COMMENT '租借时间',
  `sentdate` varchar(255) DEFAULT NULL COMMENT '租借日期',
  `cash` varchar(255) DEFAULT NULL COMMENT '押金',
  `valid` int(10) DEFAULT NULL COMMENT '有效',
  `addtime` varchar(255) DEFAULT NULL,
  `updatetime` varchar(255) DEFAULT NULL,
  `ext` varchar(255) DEFAULT NULL,
  `pic` varchar(255) NOT NULL COMMENT '封面',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `seat_id` int(10) DEFAULT NULL COMMENT '座位id',
  `gear_id` int(10) DEFAULT NULL COMMENT '挂挡类型id',
  `carkind_id` int(10) DEFAULT NULL COMMENT '车型id',
  `window_id` int(10) DEFAULT NULL COMMENT '天窗id',
  `brand_id` int(10) DEFAULT NULL COMMENT '品牌id',
  PRIMARY KEY (`car_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='车辆表';

-- ----------------------------
-- Records of v_car
-- ----------------------------
INSERT INTO `v_car` VALUES ('1', 'a:10:{s:4:\"seat\";s:1:\"4\";s:4:\"kind\";s:3:\"suv\";s:5:\"brand\";s:6:\"路虎\";s:7:\"mileage\";s:7:\"0.5-1.5\";s:10:\"production\";s:4:\"2016\";s:4:\"gear\";s:9:\"自动档\";s:9:\"seat_kind\";s:12:\"豪华座位\";s:6:\"window\";s:12:\"全景天窗\";s:4:\"self\";s:1:\"1\";s:8:\"describe\";s:36:\"车子不错！！欢迎来租！！\";}', '粤FCZ2031', '1', '1', '466', null, null, '100', '1', '12321', '1525502018', null, '/czq/Vrent/Public/update/003.jpg', '韶关市浈江区新塘镇韶关学院南门', '1', '1', '1', '2', '1');
INSERT INTO `v_car` VALUES ('2', 'a:10:{s:4:\"seat\";s:1:\"4\";s:4:\"kind\";s:3:\"suv\";s:5:\"brand\";s:6:\"路虎\";s:7:\"mileage\";s:7:\"0.5-1.5\";s:10:\"production\";s:4:\"2016\";s:4:\"gear\";s:9:\"自动档\";s:9:\"seat_kind\";s:12:\"豪华座位\";s:6:\"window\";s:12:\"全景天窗\";s:4:\"self\";s:1:\"1\";s:8:\"describe\";s:36:\"车子不错！！欢迎来租！！\";}', '粤FCZ3042', '1', '2', '366', null, null, '200', '1', '21321', '1525415097', null, '/czq/Vrent/Public/update/002.jpg', '韶关市浈江区新塘镇韶关学院南门', '1', '1', '1', '2', '1');
INSERT INTO `v_car` VALUES ('3', 'a:10:{s:4:\"seat\";s:1:\"4\";s:4:\"kind\";s:3:\"suv\";s:5:\"brand\";s:6:\"路虎\";s:7:\"mileage\";s:7:\"0.5-1.5\";s:10:\"production\";s:4:\"2016\";s:4:\"gear\";s:9:\"自动挡\";s:9:\"seat_kind\";s:12:\"豪华座位\";s:6:\"window\";s:12:\"全景天窗\";s:4:\"self\";s:1:\"1\";s:8:\"describe\";s:36:\"车子不错！！欢迎来租！！\";}', '粤FCZ4732', '1', '1', '277', null, null, '300', '1', '123123', '1525414982', null, '/czq/Vrent/Public/update/001.jpg', '韶关市浈江区新塘镇韶关学院南门', '1', '1', '1', '2', '1');
INSERT INTO `v_car` VALUES ('4', 'a:10:{s:4:\"seat\";s:1:\"4\";s:4:\"kind\";s:3:\"suv\";s:5:\"brand\";s:6:\"路虎\";s:7:\"mileage\";s:7:\"0.5-1.5\";s:10:\"production\";s:4:\"2016\";s:4:\"gear\";s:9:\"自动档\";s:9:\"seat_kind\";s:12:\"豪华座位\";s:6:\"window\";s:12:\"全景天窗\";s:4:\"self\";s:1:\"1\";s:8:\"describe\";s:36:\"车子不错！！欢迎来租！！\";}', '粤FCH3434', '1', '2', '150', null, null, '199', '1', '12312', null, null, '/czq/Vrent/Public/update/004.jpg', '韶关市浈江区新塘镇韶关学院南门', '1', '1', '1', '2', '1');
INSERT INTO `v_car` VALUES ('5', 'a:10:{s:4:\"seat\";s:1:\"4\";s:4:\"kind\";s:3:\"suv\";s:5:\"brand\";s:6:\"大众\";s:7:\"mileage\";s:7:\"0.5-1.5\";s:10:\"production\";s:4:\"2016\";s:4:\"gear\";s:9:\"自动档\";s:9:\"seat_kind\";s:12:\"豪华座位\";s:6:\"window\";s:12:\"全景天窗\";s:4:\"self\";s:1:\"1\";s:8:\"describe\";s:36:\"车子不错！！欢迎来租！！\";}', '粤FMN342', '1', '3', '166', null, null, '199', '1', '3123123', null, null, '/czq/Vrent/Public/update/005.jpg', '韶关市浈江区新塘镇韶关学院南门', '1', '1', '1', '2', '2');
INSERT INTO `v_car` VALUES ('6', 'a:10:{s:4:\"seat\";s:1:\"4\";s:4:\"kind\";s:3:\"suv\";s:5:\"brand\";s:6:\"路虎\";s:7:\"mileage\";s:7:\"0.5-1.5\";s:10:\"production\";s:4:\"2016\";s:4:\"gear\";s:9:\"自动档\";s:9:\"seat_kind\";s:12:\"豪华座位\";s:6:\"window\";s:12:\"全景天窗\";s:4:\"self\";s:1:\"1\";s:8:\"describe\";s:36:\"车子不错！！欢迎来租！！\";}', '粤F9V7342', '1', '3', '188', null, null, '199', '1', '123', null, null, '/czq/Vrent/Public/update/006.jpg', '韶关市浈江区新塘镇韶关学院南门', '1', '1', '1', '2', '1');
INSERT INTO `v_car` VALUES ('7', 'a:10:{s:4:\"seat\";s:1:\"4\";s:4:\"kind\";s:3:\"suv\";s:5:\"brand\";s:6:\"奔驰\";s:7:\"mileage\";s:7:\"0.5-1.5\";s:10:\"production\";s:4:\"2016\";s:4:\"gear\";s:9:\"自动档\";s:9:\"seat_kind\";s:12:\"豪华座位\";s:6:\"window\";s:12:\"全景天窗\";s:4:\"self\";s:1:\"1\";s:8:\"describe\";s:36:\"车子不错！！欢迎来租！！\";}', '粤FCZ2489', '1', '2', '199', null, null, '200', '1', '12312', null, null, '/czq/Vrent/Public/update/009.jpg', '韶关市浈江区新塘镇韶关学院南门', '1', '1', '1', '2', '2');
INSERT INTO `v_car` VALUES ('8', 'a:10:{s:4:\"seat\";s:1:\"4\";s:4:\"kind\";s:3:\"suv\";s:5:\"brand\";s:6:\"宝马\";s:7:\"mileage\";s:7:\"0.5-1.5\";s:10:\"production\";s:4:\"2016\";s:4:\"gear\";s:9:\"自动档\";s:9:\"seat_kind\";s:12:\"豪华座位\";s:6:\"window\";s:12:\"全景天窗\";s:4:\"self\";s:1:\"1\";s:8:\"describe\";s:36:\"车子不错！！欢迎来租！！\";}', '粤FCZ9304', '1', '2', '230', null, null, '199', '1', '312', null, null, '/czq/Vrent/Public/update/007.jpg', '韶关市浈江区新塘镇韶关学院南门', '1', '1', '1', '1', '1');
INSERT INTO `v_car` VALUES ('9', 'a:5:{s:7:\"mileage\";s:7:\"0.5-1.5\";s:10:\"production\";s:4:\"2016\";s:9:\"seat_kind\";s:12:\"豪华座位\";s:4:\"self\";s:1:\"1\";s:8:\"describe\";s:36:\"车子不错！！欢迎来租！！\";}', '粤FEJ3F342', '1', '1', '222', null, null, '140', '1', '3123123', '1526985801', null, '/czq/Vrent/Public/update/008.jpg', '韶关市浈江区新塘镇韶关学院南门', '3', '1', '1', '2', '4');
INSERT INTO `v_car` VALUES ('17', 'a:10:{s:4:\"seat\";s:0:\"\";s:4:\"kind\";N;s:5:\"brand\";s:0:\"\";s:7:\"mileage\";s:0:\"\";s:10:\"production\";s:0:\"\";s:4:\"gear\";s:0:\"\";s:9:\"seat_kind\";s:0:\"\";s:6:\"window\";s:0:\"\";s:4:\"self\";s:1:\"0\";s:8:\"describe\";s:0:\"\";}', '', '1', '1', '', null, null, '', null, '1527084129', '1527084129', null, '', null, '0', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for `v_carkind`
-- ----------------------------
DROP TABLE IF EXISTS `v_carkind`;
CREATE TABLE `v_carkind` (
  `carkind_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '车辆类型id',
  `carkind_name` varchar(255) DEFAULT NULL COMMENT '车辆类型表',
  PRIMARY KEY (`carkind_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='车辆类型表';

-- ----------------------------
-- Records of v_carkind
-- ----------------------------
INSERT INTO `v_carkind` VALUES ('1', 'SUV');
INSERT INTO `v_carkind` VALUES ('2', '轿车');
INSERT INTO `v_carkind` VALUES ('3', '轿跑');
INSERT INTO `v_carkind` VALUES ('4', '越野型');

-- ----------------------------
-- Table structure for `v_carpic`
-- ----------------------------
DROP TABLE IF EXISTS `v_carpic`;
CREATE TABLE `v_carpic` (
  `carpic_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '车辆照片ID',
  `car_id` int(10) DEFAULT NULL COMMENT '车辆id',
  `pic` varchar(255) DEFAULT NULL COMMENT '照片1',
  `pic2` varchar(255) DEFAULT NULL,
  `pic3` varchar(255) DEFAULT NULL,
  `pic4` varchar(255) DEFAULT NULL,
  `updatetime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`carpic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v_carpic
-- ----------------------------
INSERT INTO `v_carpic` VALUES ('10', '10', '/czq/Vrent/Uploads/2018-05-18/5afe7d256b577.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8728d999c.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', '1526627626');
INSERT INTO `v_carpic` VALUES ('1', '1', '/czq/Vrent/Uploads/2018-05-18/5afe871e32f29.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8728d999c.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', null);
INSERT INTO `v_carpic` VALUES ('2', '2', '/czq/Vrent/Uploads/2018-05-18/5afe871e32f29.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8728d999c.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', null);
INSERT INTO `v_carpic` VALUES ('3', '3', '/czq/Vrent/Uploads/2018-05-18/5afe871e32f29.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8728d999c.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', null);
INSERT INTO `v_carpic` VALUES ('4', '4', '/czq/Vrent/Uploads/2018-05-18/5afe871e32f29.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8728d999c.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', null);
INSERT INTO `v_carpic` VALUES ('5', '5', '/czq/Vrent/Uploads/2018-05-18/5afe871e32f29.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8728d999c.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', null);
INSERT INTO `v_carpic` VALUES ('6', '6', '/czq/Vrent/Uploads/2018-05-18/5afe871e32f29.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8728d999c.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', null);
INSERT INTO `v_carpic` VALUES ('7', '7', '/czq/Vrent/Uploads/2018-05-18/5afe871e32f29.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8728d999c.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe873ee3ac9.jpg', '1526630209');
INSERT INTO `v_carpic` VALUES ('8', '8', '/czq/Vrent/Uploads/2018-05-18/5afe871e32f29.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8728d999c.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', null);
INSERT INTO `v_carpic` VALUES ('9', '9', '/czq/Vrent/Uploads/2018-05-18/5afe871e32f29.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe7e36734df.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', '/czq/Vrent/Uploads/2018-05-18/5afe8732840ac.jpg', '1526627896');

-- ----------------------------
-- Table structure for `v_car_type`
-- ----------------------------
DROP TABLE IF EXISTS `v_car_type`;
CREATE TABLE `v_car_type` (
  `car_typle_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '车类型名',
  PRIMARY KEY (`car_typle_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='车类型表';

-- ----------------------------
-- Records of v_car_type
-- ----------------------------
INSERT INTO `v_car_type` VALUES ('1', '汽车');
INSERT INTO `v_car_type` VALUES ('2', '电瓶车');
INSERT INTO `v_car_type` VALUES ('3', '自行车');

-- ----------------------------
-- Table structure for `v_config`
-- ----------------------------
DROP TABLE IF EXISTS `v_config`;
CREATE TABLE `v_config` (
  `code` varchar(10) NOT NULL,
  `content` varchar(255) DEFAULT NULL COMMENT '配置内容',
  `addtime` varchar(255) DEFAULT NULL,
  `updatetime` varchar(255) DEFAULT NULL,
  `ext` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='配置表';

-- ----------------------------
-- Records of v_config
-- ----------------------------
INSERT INTO `v_config` VALUES ('web', 'a:4:{s:4:\"code\";s:3:\"web\";s:7:\"webName\";s:9:\"易租车\";s:10:\"serverName\";s:21:\"http://gzs.ycxxkj.com\";s:7:\"support\";s:27:\"宇宸软件研发工作室\";}', '213123123', '1526995110', null);

-- ----------------------------
-- Table structure for `v_gear`
-- ----------------------------
DROP TABLE IF EXISTS `v_gear`;
CREATE TABLE `v_gear` (
  `gear_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '挂挡类型id',
  `gear_name` varchar(255) DEFAULT NULL COMMENT '挂挡类型名字',
  PRIMARY KEY (`gear_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='挂挡类型';

-- ----------------------------
-- Records of v_gear
-- ----------------------------
INSERT INTO `v_gear` VALUES ('1', '自动档');
INSERT INTO `v_gear` VALUES ('2', '手动档');

-- ----------------------------
-- Table structure for `v_orders`
-- ----------------------------
DROP TABLE IF EXISTS `v_orders`;
CREATE TABLE `v_orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL COMMENT '租客id',
  `car_id` int(10) DEFAULT NULL COMMENT '车牌号',
  `sent_id` int(10) DEFAULT NULL COMMENT '出租用户id',
  `senttime` varchar(255) DEFAULT NULL COMMENT '租借时间',
  `sentdate` varchar(255) DEFAULT NULL COMMENT '租借天数',
  `cash` varchar(255) DEFAULT NULL COMMENT '押金',
  `vaild` int(10) DEFAULT NULL COMMENT '有效：1为有效，0为无效',
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注',
  `addtime` varchar(255) DEFAULT NULL,
  `updatetime` varchar(255) DEFAULT NULL,
  `ext` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v_orders
-- ----------------------------
INSERT INTO `v_orders` VALUES ('1', '1', '1', '2', '123123123', '2', '300', '1', null, '213213', '21312', null);

-- ----------------------------
-- Table structure for `v_seat`
-- ----------------------------
DROP TABLE IF EXISTS `v_seat`;
CREATE TABLE `v_seat` (
  `seat_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '座位id',
  `seat_name` int(10) DEFAULT NULL COMMENT '座位数',
  PRIMARY KEY (`seat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='座位表';

-- ----------------------------
-- Records of v_seat
-- ----------------------------
INSERT INTO `v_seat` VALUES ('1', '4');
INSERT INTO `v_seat` VALUES ('2', '5');
INSERT INTO `v_seat` VALUES ('3', '6');
INSERT INTO `v_seat` VALUES ('4', '2');

-- ----------------------------
-- Table structure for `v_spitslot`
-- ----------------------------
DROP TABLE IF EXISTS `v_spitslot`;
CREATE TABLE `v_spitslot` (
  `spitslot_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_id` int(255) DEFAULT NULL COMMENT '订单id',
  `user_id` int(10) DEFAULT NULL COMMENT '评论id',
  `grade` varchar(255) DEFAULT NULL COMMENT '得分',
  `content` varchar(255) DEFAULT NULL COMMENT '评论内容',
  `addtime` varchar(255) DEFAULT NULL,
  `updatetime` varchar(255) DEFAULT NULL,
  `car_id` varchar(255) DEFAULT NULL COMMENT '车辆id',
  PRIMARY KEY (`spitslot_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='评论表';

-- ----------------------------
-- Records of v_spitslot
-- ----------------------------
INSERT INTO `v_spitslot` VALUES ('1', '2', '1', '3', '车还不错！', '21321312', '123123123', '1');
INSERT INTO `v_spitslot` VALUES ('2', '1', '2', '2', '一般般啦！', '213123', '21321312123', '1');
INSERT INTO `v_spitslot` VALUES ('3', '3', '1', '4', '还行!!', '34', '34', '2');
INSERT INTO `v_spitslot` VALUES ('4', '4', '2', '4', '老板不错！', null, '34', '3');
INSERT INTO `v_spitslot` VALUES ('5', '5', '3', '5', '车主还可以！', null, '34', '1');
INSERT INTO `v_spitslot` VALUES ('6', '6', '2', '5', '车还不错！!', null, '2423', '1');
INSERT INTO `v_spitslot` VALUES ('7', '1', '2', '5', '还行!!', null, '3243', '5');
INSERT INTO `v_spitslot` VALUES ('8', '2', '1', '4', '车主还可以！', null, '434', '5');
INSERT INTO `v_spitslot` VALUES ('9', '3', '2', '3', '老板不错！', null, '324', '5');

-- ----------------------------
-- Table structure for `v_user`
-- ----------------------------
DROP TABLE IF EXISTS `v_user`;
CREATE TABLE `v_user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL COMMENT '用户姓名',
  `true_name` varchar(255) DEFAULT NULL COMMENT '真实姓名',
  `sex` int(10) DEFAULT NULL COMMENT '性别，1为男，2为女',
  `tel` varchar(200) DEFAULT NULL COMMENT '手机',
  `driving` varchar(255) DEFAULT NULL COMMENT '驾照',
  `idcard` varchar(255) DEFAULT NULL COMMENT '身份证',
  `zhifubao` varchar(255) DEFAULT NULL COMMENT '支付宝',
  `intro` varchar(255) DEFAULT NULL COMMENT '简介',
  `addtime` varchar(255) DEFAULT NULL COMMENT '添加时间',
  `updatatime` varchar(255) DEFAULT NULL,
  `ext` varchar(255) DEFAULT NULL,
  `headimgurl` varchar(255) DEFAULT NULL COMMENT '头像',
  `type` int(10) DEFAULT NULL COMMENT '用户类型;1为租户，2为出租用户',
  `pwd` varchar(255) DEFAULT NULL COMMENT '密码',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of v_user
-- ----------------------------
INSERT INTO `v_user` VALUES ('1', '小王', '王德', '1', '13415626432', '440510199904010011', '440510199904010011', '13415626432', null, null, '1526623534', null, '/czq/Vrent/Public/update/009.jpg', null, '123');
INSERT INTO `v_user` VALUES ('2', '小李', '李四', '1', '1234', '', '', '1', null, null, '1526564780', null, '/czq/Vrent/Public/update/009.jpg', null, '1234');
INSERT INTO `v_user` VALUES ('3', '2222', '李四', null, '0', null, null, null, null, '1526372207', null, null, '/czq/Vrent/Public/update/009.jpg', null, ' ');
INSERT INTO `v_user` VALUES ('4', '2222', '1111', null, '1111', null, null, null, null, '1526372397', null, null, '/czq/Vrent/Public/update/009.jpg', null, '1111');

-- ----------------------------
-- Table structure for `v_window`
-- ----------------------------
DROP TABLE IF EXISTS `v_window`;
CREATE TABLE `v_window` (
  `window_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '天窗id',
  `window_name` varchar(255) DEFAULT NULL COMMENT '天窗类型',
  PRIMARY KEY (`window_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='天窗类型表';

-- ----------------------------
-- Records of v_window
-- ----------------------------
INSERT INTO `v_window` VALUES ('1', '无窗');
INSERT INTO `v_window` VALUES ('2', '全景天窗');
