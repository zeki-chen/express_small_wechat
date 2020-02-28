/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : 127.0.0.1:3306
 Source Schema         : fastmail

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 01/12/2018 13:45:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for wx_formid
-- ----------------------------
DROP TABLE IF EXISTS `wx_formid`;
CREATE TABLE `wx_formid`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `formid` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `ticket_id` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '单号',
  `status` int(5) NULL DEFAULT NULL COMMENT '判断模板消息是否发送',
  `addtime` datetime NULL DEFAULT NULL,
  `uptime` datetime NULL DEFAULT NULL,
  `overtime` int(5) NULL DEFAULT NULL COMMENT 'formid失败次数',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for wx_query_relative
-- ----------------------------
DROP TABLE IF EXISTS `wx_query_relative`;
CREATE TABLE `wx_query_relative`  (
  `id` int(11) NOT NULL,
  `ticket_id` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '单号',
  `user_id` int(11) NULL DEFAULT NULL,
  `is_remind_status` int(5) NULL DEFAULT NULL COMMENT '是否设置提醒，订阅',
  `addtime` datetime NULL DEFAULT NULL,
  `uptime` datetime NULL DEFAULT NULL,
  `remark` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '快递备注',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for wx_tem
-- ----------------------------
DROP TABLE IF EXISTS `wx_tem`;
CREATE TABLE `wx_tem`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tem_id` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '存json数据',
  `openid` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sendtime` datetime NULL DEFAULT NULL,
  `formid` int(11) NULL DEFAULT NULL,
  `sendstatus` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '提取模板的发送结果状态',
  `tem_result` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '模板发送结果Json',
  `overtime` int(5) NOT NULL COMMENT '发送失败次数',
  `error` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '错误信息',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for wx_ticket
-- ----------------------------
DROP TABLE IF EXISTS `wx_ticket`;
CREATE TABLE `wx_ticket`  (
  `ticket_id` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '单号主键',
  `status` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `curquerytime` datetime NULL DEFAULT NULL COMMENT '最近查询时间',
  `addtime` datetime NULL DEFAULT NULL,
  `uptime` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`ticket_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for wx_user
-- ----------------------------
DROP TABLE IF EXISTS `wx_user`;
CREATE TABLE `wx_user`  (
  `user_id` int(11) NOT NULL,
  `openid` varchar(180) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `session_key` varchar(180) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `head_url` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `addtime` datetime NULL DEFAULT NULL,
  `uptime` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wx_user
-- ----------------------------
INSERT INTO `wx_user` VALUES (0, 'o4y9c5ZWmNEAq2I2CvTwR_0AGbqw', 'TqS84qz0BY7dNH/7jgl+pg==', NULL, NULL, '2018-11-23 22:08:27');

-- ----------------------------
-- Table structure for wx_wl
-- ----------------------------
DROP TABLE IF EXISTS `wx_wl`;
CREATE TABLE `wx_wl`  (
  `wl_id` int(11) NOT NULL AUTO_INCREMENT,
  `wl_info` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `ticket_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '单号',
  `addtime` datetime NULL DEFAULT NULL,
  `uptime` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`wl_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
