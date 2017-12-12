/*
Navicat MySQL Data Transfer

Source Server         : rm-bp1244gtwt8ml35bdo.mysql.rds.aliyuncs.com_3306
Source Server Version : 50718
Source Host           : rm-bp1244gtwt8ml35bdo.mysql.rds.aliyuncs.com:3306
Source Database       : wangxin

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-12-08 18:23:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dingdan`
-- ----------------------------
DROP TABLE IF EXISTS `dingdan`;
CREATE TABLE `dingdan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `fws_id` int(10) DEFAULT NULL,
  `add` varchar(255) DEFAULT NULL,
  `fw_name` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `zhuangtai` int(10) DEFAULT '0' COMMENT '3已评价2已完成1进行中0已下单',
  `name_id` varchar(255) DEFAULT NULL,
  `fws_name` varchar(255) DEFAULT NULL,
  `fws_tel` varchar(255) DEFAULT NULL,
  `fw_id` int(10) DEFAULT NULL,
  `over_time` datetime DEFAULT NULL,
  `y_id` int(3) NOT NULL COMMENT '园区id',
  `yuan` int(3) NOT NULL COMMENT '园区唯一标识',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of dingdan
-- ----------------------------
INSERT INTO `dingdan` VALUES ('8', '吴雪峰', '15084629504', '3', '海智中心', '可租场地信息', '2017-11-10 01:39:37', '3', 'oebYn1bfR9NJ5hpJpyXUHG28gPZM', '大学生创业园', '13906881861', '86', null, '0', '0');
INSERT INTO `dingdan` VALUES ('10', null, null, '3', null, '可售场地信息', '2017-11-10 03:54:59', '3', 'oebYn1W3pGq4Rs1k1x3C_2MAt_ZM', '大学生创业园', '13906881861', '87', '2017-11-10 03:57:02', '0', '0');
INSERT INTO `dingdan` VALUES ('11', null, null, '3', null, '可租场地信息', '2017-11-15 11:30:05', '2', 'oebYn1W3pGq4Rs1k1x3C_2MAt_ZM', '大学生创业园', '13906881861', '86', null, '0', '0');
INSERT INTO `dingdan` VALUES ('12', null, null, '30', null, '可租场地信息', '2017-11-20 03:59:30', '2', 'oebYn1W3pGq4Rs1k1x3C_2MAt_ZM', '丽水网新正合科技服务有限公司', '2200251', '86', null, '0', '0');
INSERT INTO `dingdan` VALUES ('13', null, null, '39', null, '办公装修', '2017-11-20 03:59:55', '2', 'oebYn1W3pGq4Rs1k1x3C_2MAt_ZM', '金服物业服务集团有限公司', '15869236626', '72', '2017-11-29 11:36:14', '0', '0');
INSERT INTO `dingdan` VALUES ('14', null, null, null, null, '专利申请', '2017-11-24 06:25:51', '1', 'oebYn1cebP-3LOz55W44xZ_lhJ9o', '丽水斯可睿知识产权服务有限公司', '15925711118', null, null, '0', '0');
INSERT INTO `dingdan` VALUES ('15', null, null, null, null, '专利申请', '2017-11-24 06:25:59', '1', 'oebYn1cebP-3LOz55W44xZ_lhJ9o', '丽水斯可睿知识产权服务有限公司', '15925711118', null, null, '0', '0');
INSERT INTO `dingdan` VALUES ('16', null, null, null, null, '专利申请', '2017-11-24 06:26:04', '1', 'oebYn1cebP-3LOz55W44xZ_lhJ9o', '丽水斯可睿知识产权服务有限公司', '15925711118', null, null, '0', '0');
INSERT INTO `dingdan` VALUES ('17', null, null, null, null, '专利申请', '2017-11-24 06:26:06', '1', 'oebYn1cebP-3LOz55W44xZ_lhJ9o', '丽水斯可睿知识产权服务有限公司', '15925711118', null, null, '0', '0');
INSERT INTO `dingdan` VALUES ('18', null, null, null, null, '专利申请', '2017-11-24 06:26:08', '1', 'oebYn1cebP-3LOz55W44xZ_lhJ9o', '丽水斯可睿知识产权服务有限公司', '15925711118', null, null, '0', '0');
INSERT INTO `dingdan` VALUES ('19', null, null, null, null, '专利申请', '2017-11-24 06:26:10', '1', 'oebYn1cebP-3LOz55W44xZ_lhJ9o', '丽水斯可睿知识产权服务有限公司', '15925711118', null, null, '0', '0');

-- ----------------------------
-- Table structure for `exc`
-- ----------------------------
DROP TABLE IF EXISTS `exc`;
CREATE TABLE `exc` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '姓名',
  `sex` int(1) DEFAULT NULL COMMENT '0男1女',
  `age` int(3) DEFAULT NULL COMMENT '年龄',
  `year` int(3) DEFAULT NULL COMMENT '工龄',
  `maney` int(9) DEFAULT NULL COMMENT '薪资',
  `suoshu` int(9) DEFAULT NULL COMMENT '所属',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exc
-- ----------------------------
INSERT INTO `exc` VALUES ('11', '姓名', '0', '0', '0', '0', null);
INSERT INTO `exc` VALUES ('12', '啊啊', '1', '34', '2', '3333', null);
INSERT INTO `exc` VALUES ('13', '订单', '1', '21', '2', '4444', null);
INSERT INTO `exc` VALUES ('14', '方法', '1', '23', '2', '5454', null);

-- ----------------------------
-- Table structure for `fuwu`
-- ----------------------------
DROP TABLE IF EXISTS `fuwu`;
CREATE TABLE `fuwu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `fw_js` varchar(10000) DEFAULT NULL,
  `fw_lc` varchar(10000) DEFAULT NULL,
  `f_id` int(10) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of fuwu
-- ----------------------------
INSERT INTO `fuwu` VALUES ('20', '企业服务', '20171101/73c2bbc823bffa3046196b66b0b3d09b.png', '20171101/b892babac68a79cc0e925f85bdb064a4.png', '', '', '0', '2017-11-01 15:46:50', '2017-11-01 15:46:50');
INSERT INTO `fuwu` VALUES ('21', '物业服务', '20171101/aa324d5043093a905a56f2914175206b.png', '20171101/ecf250feb89bad85a96a1799ce5a1484.png', '', '', '0', '2017-11-01 15:47:38', '2017-11-01 15:47:38');
INSERT INTO `fuwu` VALUES ('22', '财税服务', '20171101/fa619cd9aca96a19f4312a161cd0e2dd.png', '20171101/077052904c8c1596457326fed00bb89b.png', '', '', '0', '2017-11-01 15:48:03', '2017-11-01 15:48:03');
INSERT INTO `fuwu` VALUES ('23', '人才资源', '20171101/ee44feb64963442a6967eef9fc58cb0f.png', '20171101/85719220ed865b1f3cf92f239c0d0811.png', '', '', '0', '2017-11-01 15:48:35', '2017-11-01 15:48:35');
INSERT INTO `fuwu` VALUES ('24', '场地租赁', '20171101/13654070c5e1ac08168b0374bc6aeed4.png', '20171101/25333144ca90be9481cf3f5adf475a9a.png', '', '', '0', '2017-11-01 15:49:06', '2017-11-01 15:49:06');
INSERT INTO `fuwu` VALUES ('25', '管理服务', '20171101/277fde53b3376c36216e1f5b1c591e56.png', '20171101/9e558441ff3ca8e39358d93796854b44.png', '', '', '20', '2017-11-01 15:51:44', '2017-11-01 15:51:44');
INSERT INTO `fuwu` VALUES ('26', '知识产权', '20171101/8ebe4b03b51af2d45d62a44c1c247911.png', '20171101/9b696b4d6a703b3ffe2a8fac1d3c3e6d.png', '', '', '20', '2017-11-01 15:52:08', '2017-11-01 15:52:08');
INSERT INTO `fuwu` VALUES ('27', '品牌服务', '20171101/9561f10d0c601e8879a693ef109989a1.png', '20171101/dc5e6c4929e2e4dd70a2982adc6f3fac.png', '', '', '20', '2017-11-01 15:52:34', '2017-11-01 15:52:34');
INSERT INTO `fuwu` VALUES ('28', '工商服务', '20171101/c4f47627f55d698c5c5371cfc44d8315.png', '20171101/88f5dd1b0ef1dd893814850a06f9a3d9.png', '', '', '20', '2017-11-01 15:52:55', '2017-11-01 15:52:55');
INSERT INTO `fuwu` VALUES ('29', '金额服务', '20171101/f23f68f026816ad5fefcac3522491a32.png', '20171101/5dd503779458b9d9dd0231c23e4bbf86.png', '', '', '20', '2017-11-01 15:53:20', '2017-11-01 15:53:20');
INSERT INTO `fuwu` VALUES ('30', '法律服务', '20171101/d42abf4cbe3d84b765c03fe23b5b4835.png', '20171101/036f37c19a8bce1ada63f0b9087e0cfe.png', '', '', '20', '2017-11-01 15:53:42', '2017-11-01 15:53:42');
INSERT INTO `fuwu` VALUES ('31', '电脑网络', '20171101/c48565c71738d7db224a56c6f2350cfa.png', '20171101/936e62abca6b7719e20000e4e8020891.png', '', '', '20', '2017-11-01 15:54:00', '2017-11-01 15:54:00');
INSERT INTO `fuwu` VALUES ('32', '项目申报', '20171101/6a574f28d2ddb708eb6fd69dff88c8d8.png', '20171101/1e5e7367f783d60d2697ab0dbcaf6a00.png', '', '', '20', '2017-11-01 15:54:18', '2017-11-01 15:54:18');
INSERT INTO `fuwu` VALUES ('33', '物业服务', '20171101/5ba6def3f2a0f7ebf875d3f8d6c659c8.png', '20171101/09de688941e34196da30cc4243c5d92c.png', '', '', '21', '2017-11-01 15:55:22', '2017-11-01 15:55:22');
INSERT INTO `fuwu` VALUES ('34', '财税服务', '20171101/a663d87539c165afbdc45deda77797a2.png', '20171101/7e41c3b2c1a4aa74e139c3ce7aba33ff.png', '', '', '22', '2017-11-01 15:55:41', '2017-11-01 15:55:41');
INSERT INTO `fuwu` VALUES ('35', '人才资源', '20171101/5d2b7b176204327b82baa7aa44fe4fda.png', '20171101/af7929fad5fd564670888b4f92868ade.png', '', '', '23', '2017-11-01 15:56:00', '2017-11-01 15:56:00');
INSERT INTO `fuwu` VALUES ('36', '场地租赁', '20171101/eae9fcb07f963ac90d06b6c1d5f2738f.png', '20171101/65520d0c787adbc1f9b0ad1ba7bc4e17.png', '', '', '24', '2017-11-01 15:56:17', '2017-11-01 15:56:17');
INSERT INTO `fuwu` VALUES ('37', '体系认证', '20171101/6b85817bc41e8b0b09e7319153f9f74f.png', '20171101/5c65e5937b26c7872bea83db2660b429.png', '', '', '25', '2017-11-01 15:58:43', '2017-11-01 15:58:43');
INSERT INTO `fuwu` VALUES ('38', '资质认证', '20171101/85152ba95f6e540a7d5817b80facef75.png', '20171101/34d41f318969baaea9b90b1d473e59fb.png', '', '', '25', '2017-11-01 15:59:15', '2017-11-01 15:59:15');
INSERT INTO `fuwu` VALUES ('39', '管理咨询', '20171101/dd819a7e677b0147a1d9592166dc53df.png', '20171101/490f7a974ca8545d163d8471dab236c0.png', '', '', '25', '2017-11-01 15:59:35', '2017-11-01 15:59:35');
INSERT INTO `fuwu` VALUES ('40', '商标注册', '20171101/2ef81e1dd6699d518ae05565fd8cf210.png', '20171101/05ad1738e735c6c5e86f44e3ad9d71fb.png', '', '', '26', '2017-11-01 16:00:12', '2017-11-01 16:00:12');
INSERT INTO `fuwu` VALUES ('41', '专利申请', '20171101/220c50290612c5c844a9addc0591e7fc.png', '20171101/933005e5e3cadb7d3137ba6412451918.png', '', '', '26', '2017-11-01 16:00:39', '2017-11-01 16:00:39');
INSERT INTO `fuwu` VALUES ('42', '软件著作权', '20171101/6cd067b884474bf4268c31b5d2b0559e.png', '20171101/4d8d9c6ae40d2cf6e6fb1df5a6a85104.png', '', '', '26', '2017-11-01 16:01:10', '2017-11-01 16:01:10');
INSERT INTO `fuwu` VALUES ('43', '版权申请', '20171101/9ade13b556ba60ec4c3bbcc05d7d20ca.png', '20171101/2fd28ec0fcb67fdaebc7d854fc17e66d.png', '', '', '26', '2017-11-01 16:01:28', '2017-11-01 16:01:28');
INSERT INTO `fuwu` VALUES ('44', '知识产权诉讼', '20171101/0af1272dd5095957cb544ba244a275d5.png', '20171101/4101e2cbdf72fd3de9fc52286d6c416f.png', '', '', '26', '2017-11-01 16:01:48', '2017-11-01 16:01:48');
INSERT INTO `fuwu` VALUES ('45', '知识产权贯标', '20171101/b360f9529992d02f394d9d81252418c5.png', '20171101/8d1fb42405908be720aaccf29dcdf34b.png', '', '', '26', '2017-11-01 16:02:09', '2017-11-01 16:02:09');
INSERT INTO `fuwu` VALUES ('46', '营销策划', '20171101/3bb6dfbbf88d1fc20bfcde04dec7dac2.png', '20171101/665a5d28ba3ee8154903f073f9f72078.png', '', '', '27', '2017-11-01 16:02:30', '2017-11-01 16:02:30');
INSERT INTO `fuwu` VALUES ('47', '广告宣传', '20171101/73e01afa73eb133d4cb4fc547b778e97.png', '20171101/64bf919a686f3990bcd718cdaede5ce7.png', '', '', '27', '2017-11-01 16:02:53', '2017-11-01 16:02:53');
INSERT INTO `fuwu` VALUES ('48', '企业推广', '20171101/153d1f718fc0094bc4e84cdbc529cbac.png', '20171101/e95e48f72a581289115e6cc841c8c590.png', '', '', '27', '2017-11-01 16:03:11', '2017-11-01 16:03:11');
INSERT INTO `fuwu` VALUES ('49', '媒体报道', '20171101/95a9c5c52ba16b77ef02f9dfa6bbd659.png', '20171101/30b90f6b9f8802cfa86e73da37676180.png', '', '', '27', '2017-11-01 16:03:28', '2017-11-01 16:03:28');
INSERT INTO `fuwu` VALUES ('50', '公司注册', '20171101/b8fc1acb7eb256472d3b1098a2f1ba6c.png', '20171101/e2137da5af6c6392ea2eb9be54585fdb.png', '', '', '28', '2017-11-01 16:03:47', '2017-11-01 16:03:47');
INSERT INTO `fuwu` VALUES ('51', '公司变更', '20171101/354d705a6a65847678a490aac80fa24e.png', '20171101/7742bf0c509154d69466fa39f041ca11.png', '', '', '28', '2017-11-01 16:04:07', '2017-11-01 16:04:07');
INSERT INTO `fuwu` VALUES ('52', '公司注销', '20171101/ee501897171de96b55831a383d658262.png', '20171101/26c29bf5fe500c7b86fdd6dbadcc44ff.png', '', '', '28', '2017-11-01 16:04:35', '2017-11-01 16:04:35');
INSERT INTO `fuwu` VALUES ('53', '网站APP建设', '20171101/fc112dc65436382e4f926baded1b57e0.png', '20171101/53bba9a6a751bca4ca1f6fbcda5b7ac7.png', '', '', '31', '2017-11-01 16:09:38', '2017-11-01 16:09:38');
INSERT INTO `fuwu` VALUES ('54', '网站维护', '20171101/7f0dfdcfd0e6a9c91d00121f95471e9c.png', '20171101/c3e674a0459971e1253b0020489f1c68.png', '', '', '31', '2017-11-01 16:10:02', '2017-11-01 16:10:02');
INSERT INTO `fuwu` VALUES ('55', '软件服务', '20171101/b9dcfb8bbfa3649dd1a92b12d654b2b8.png', '20171101/f0ba43591db4448adc43086b8ea1945d.png', '', '', '31', '2017-11-01 16:13:24', '2017-11-01 16:13:24');
INSERT INTO `fuwu` VALUES ('56', '网站建设', '20171101/4f040e521440a6f6f82b10764bf45ed3.png', '20171101/830eedcdb41fa53b953510697a11440e.png', '', '', '31', '2017-11-01 16:13:51', '2017-11-01 16:13:51');
INSERT INTO `fuwu` VALUES ('57', '诉讼仲裁', '20171101/c8cc150d92dec0f986f83c6745d5aacb.png', '20171101/3978cb30cde085e6a819fbb0b91210e2.png', '', '', '30', '2017-11-01 16:14:16', '2017-11-01 16:14:16');
INSERT INTO `fuwu` VALUES ('58', '自主类项目申请', '20171101/e614715804233a4fb4077bf66314d0a6.png', '20171101/d27185dc9022ed2a94968239907947a8.png', '', '', '32', '2017-11-01 16:14:48', '2017-11-01 16:14:48');
INSERT INTO `fuwu` VALUES ('59', '资质类项目申请', '20171101/bbe2baf6b9344c81e342d20023383fb9.png', '20171101/c770d63204b8db9d619c6e303208d679.png', '', '', '32', '2017-11-01 16:15:10', '2017-11-01 16:15:10');
INSERT INTO `fuwu` VALUES ('60', '可行性报告编制', '20171101/ba643c7ade25f5fd340ed38059d7077d.png', '20171101/9f633c306bb570de2b154196e662620a.png', '', '', '32', '2017-11-01 16:15:45', '2017-11-01 16:15:45');
INSERT INTO `fuwu` VALUES ('61', '挂牌上市', '20171101/e827c1ffd01ea89602a119e44f986616.png', '20171101/7893d7ce268092fab0802aaaaf8f4c7f.png', '', '', '29', '2017-11-01 16:16:21', '2017-11-01 16:16:21');
INSERT INTO `fuwu` VALUES ('62', '投融资讯', '20171101/e1340d8ec62120d05bb8c00ff88dde10.png', '20171101/9075b6c11400fd3301073282e1c40975.png', '', '', '29', '2017-11-01 16:16:51', '2017-11-01 16:16:51');
INSERT INTO `fuwu` VALUES ('63', '资产托管', '20171101/664015f9befdba72b1c37f4082b522ce.png', '20171101/deb8677565985bec30733d61d13b6f71.png', '', '', '29', '2017-11-01 16:17:15', '2017-11-01 16:17:15');
INSERT INTO `fuwu` VALUES ('64', '贷款服务', '20171101/f4c92e09fa650fde108725bca41bdd9b.png', '20171101/49ae625d6ba0a84840f207974588b3e7.png', '', '', '29', '2017-11-01 16:17:31', '2017-11-01 16:17:31');
INSERT INTO `fuwu` VALUES ('65', '法律咨询', '20171101/f199596f036a1d9c16534a7f975a0905.png', '20171101/35a786bd4d601e0b47917fb2963f1354.png', '', '', '30', '2017-11-01 16:18:07', '2017-11-01 16:18:07');
INSERT INTO `fuwu` VALUES ('66', '法律顾问', '20171101/10cf02e30c63603a4fa1f0cc1b788bd0.png', '20171101/8e383092218f466628bd5ebbe7c3bd31.png', '', '', '30', '2017-11-01 16:18:30', '2017-11-01 16:18:30');
INSERT INTO `fuwu` VALUES ('67', '合同服务', '20171101/09821e427da393f83d05416831fb0f4c.png', '20171101/347125f96bd0a517c9c515b5c6ed4ab7.png', '', '', '30', '2017-11-01 16:18:49', '2017-11-01 16:18:49');
INSERT INTO `fuwu` VALUES ('68', '尽职调查', '20171101/9fa799b7a6f38f6a195206513e753e62.png', '20171101/de75e28362aa141670f68f5b61d15077.png', '', '', '30', '2017-11-01 16:19:11', '2017-11-01 16:19:11');
INSERT INTO `fuwu` VALUES ('69', '担保服务', '20171101/00cce4d8c1c5cf06c5eac09ad19f8bfd.png', '20171101/7a07c6ba2bfddc600dc99b39e7f8ba9c.png', '', '', '30', '2017-11-01 16:19:30', '2017-11-01 16:19:30');
INSERT INTO `fuwu` VALUES ('70', '企业债券', '20171101/625f856758786686985266eb83ba1892.png', '20171101/82278f30a0c1709b28428c61de986bc0.png', '', '', '30', '2017-11-01 16:19:49', '2017-11-01 16:19:49');
INSERT INTO `fuwu` VALUES ('71', '办公绿化', '20171129/5a1e0ca95bb7b.png', '20171101/e41c6704f6b8d0acc781f04f1f1b0b17.png', '						                         						                         						                        						                        ', '', '33', '2017-11-01 16:27:33', '2017-11-01 16:27:33');
INSERT INTO `fuwu` VALUES ('72', '办公装修', '20171129/5a1e0c8b9b030.png', '20171101/551b4b91853f69515a3bc9c0277c4863.png', '						                         						                         						                        						                        ', '', '33', '2017-11-01 16:27:52', '2017-11-01 16:27:52');
INSERT INTO `fuwu` VALUES ('73', '宽带服务', '20171129/5a1e0c7984926.png', '20171101/e3f791d3986f7f75265e6f6db1842e2c.png', '						                         						                         						                         						                        						                        						                        ', '', '33', '2017-11-01 16:28:08', '2017-11-01 16:28:08');
INSERT INTO `fuwu` VALUES ('74', '饮用水', '20171129/5a1e0c49aef34.png', '20171101/32ddc34475064975d32d791a547cf0ba.png', '						                         						                         						                        						                        ', '', '33', '2017-11-01 16:28:23', '2017-11-01 16:28:23');
INSERT INTO `fuwu` VALUES ('75', '保洁卫生', '20171129/5a1e0c230de17.png', '20171101/17f8cc3f6c698438a07b8d9f69daabbb.png', '						                         						                         						                        						                        ', '', '33', '2017-11-01 16:28:41', '2017-11-01 16:28:41');
INSERT INTO `fuwu` VALUES ('76', '代理记账', '20171101/9cfc8c0830b9bb623282009463a32af8.png', '20171101/2202d454460e173be33203ab0b7186c8.png', '', '', '34', '2017-11-01 16:29:01', '2017-11-01 16:29:01');
INSERT INTO `fuwu` VALUES ('77', '财务审计', '20171101/76f622072d603bc1d284dd635bf01411.png', '20171101/49d1b21c6adc6d582d7d6b466b668f99.png', '', '', '34', '2017-11-01 16:29:16', '2017-11-01 16:29:16');
INSERT INTO `fuwu` VALUES ('78', '财税咨询', '20171101/88a2b12de93ee84ddac5d29730d168f4.png', '20171101/b9fcaa6c49827a02cd647507a899edb4.png', '', '', '34', '2017-11-01 16:29:31', '2017-11-01 16:29:31');
INSERT INTO `fuwu` VALUES ('79', '财税代办', '20171101/b0cf91f0b6adab9f96cfeb0b535915aa.png', '20171101/a805c3918b05f1ae474acc757365cbb5.png', '', '', '34', '2017-11-01 16:29:46', '2017-11-01 16:29:46');
INSERT INTO `fuwu` VALUES ('80', '财产评估', '20171101/92592a5706b6b5d39b70de28237f4023.png', '20171101/048c87cd828e5f3e7b4881714fb74e21.png', '', '', '34', '2017-11-01 16:30:02', '2017-11-01 16:30:02');
INSERT INTO `fuwu` VALUES ('81', '人才资源', '20171101/8337afba7bb33848ff53aac5c2832657.png', '20171101/6b074082bb7ecf0cdb4cfc0ed8b40cba.png', '', '', '35', '2017-11-01 16:30:26', '2017-11-01 16:30:26');
INSERT INTO `fuwu` VALUES ('82', 'HR培训', '20171101/5eb0aa4b97b0509ef1b57d419254cb63.png', '20171101/afaeadc4f3b4cd52bc8fef25a9531d04.png', '', '', '35', '2017-11-01 16:30:48', '2017-11-01 16:30:48');
INSERT INTO `fuwu` VALUES ('83', '人事代理', '20171101/a3a2a8c221ab1556b0b49755a221e209.png', '20171101/d5c343710220294883e3072f09baaa1c.png', '', '', '35', '2017-11-01 16:31:06', '2017-11-01 16:31:06');
INSERT INTO `fuwu` VALUES ('84', '猎头服务', '20171101/3d5adc48144a3e5b08e2d40c66308d35.png', '20171101/423fd507157c6dff4428070b74d60dbc.png', '', '', '35', '2017-11-01 16:31:31', '2017-11-01 16:31:31');
INSERT INTO `fuwu` VALUES ('85', '社保代理', '20171101/aefb37c50c83b662e1704bb497aa2a1d.png', '20171101/79f48cdc87d753b4fd2474aaa055ac70.png', '', '', '35', '2017-11-01 16:31:47', '2017-11-01 16:31:47');
INSERT INTO `fuwu` VALUES ('86', '办公室租赁', '20171101/912d8d7277a00103885419270d857a5c.png', '20171101/51d62e3603874f50e445f463b48e51cd.png', '						                         服务介绍\r\n\r\n高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）\r\n\r\n服务保障\r\n\r\n高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服\r\n服务介绍\r\n\r\n高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）\r\n服务介绍\r\n\r\n高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）\r\n\r\n服务介绍\r\n\r\n高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）						                        ', '服务介绍高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）服务介绍高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）服务介绍高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）服务介绍高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）服务介绍高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）高新技术企业认定服务（市级）', '36', '2017-11-01 16:32:18', '2017-11-01 16:32:18');
INSERT INTO `fuwu` VALUES ('87', '会议室租赁', '20171110/f3c4421b16afb6e7c309fc4f66eab8a8.png', '20171110/614b00e8784453c301ade6c6ad55f25b.png', '						                         						                        ', '', '36', '2017-11-01 16:32:38', '2017-11-01 16:32:38');

-- ----------------------------
-- Table structure for `fuwushang`
-- ----------------------------
DROP TABLE IF EXISTS `fuwushang`;
CREATE TABLE `fuwushang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `fuzeren` varchar(255) DEFAULT NULL,
  `jianjie` varchar(2555) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `xiangqing` varchar(10000) DEFAULT NULL,
  `fw_pj` decimal(10,2) DEFAULT '0.00',
  `add` varchar(255) DEFAULT NULL,
  `qy_rongyu` varchar(2555) DEFAULT NULL,
  `biaoshi` int(10) DEFAULT '1' COMMENT '1入驻企业2服务商',
  `fu_id` varchar(255) DEFAULT NULL,
  `yuan` int(3) NOT NULL COMMENT '园区',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `range` varchar(100) NOT NULL DEFAULT '' COMMENT '服务地区',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of fuwushang
-- ----------------------------
INSERT INTO `fuwushang` VALUES ('1', '浙江碳先生环保科技有限公司', '佚名', '                          浙江碳先生环保科技是一家集科研、生产、销售、服务为一体的科技型环保企业。                                                                        ', '15005885678', 'index_qyfc2.png', 'index_qyfc2.png', '                          -浙江碳先生环保科技是一家集科研、生产、销售、服务为一体的科技型环保企业。                                                                        ', '5.00', '浙江丽水市莲都区丽青路158号2楼', '', '1', null, '0', '2017-12-04 14:51:03', '');
INSERT INTO `fuwushang` VALUES ('2', '浙江喵管家网络科技有限公司', '佚名', '浙江喵管家网络科技有限公司是一家为消费领域提供互联网和营销解决方案的创新型公司，主以研发结合文娱消费客群特点集合线上线下资源整合社交关系拓展的移动互联网销售平台。', '18329185599', 'index_qyfc2.png', 'index_qyfc2.png', ' 浙江喵管家网络科技有限公司是一家为消费领域提供互联网和营销解决方案的创新型公司，主以研发结合文娱消费客群特点集合线上线下资源整合社交关系拓展的移动互联网销售平台。', '5.00', '浙江省丽水市莲都区城北街368号绿谷信息产业园1号楼17层1703、1701-2、1705', ' ', '1', '72,73,74', '0', '2017-12-04 14:51:10', '');
INSERT INTO `fuwushang` VALUES ('3', '浙江博翔律师事务所', '杨永', ' 浙江博翔律师事务所是丽水市司法局直属的合伙制律师事务所，成立于			2000年12月，先后被授予“浙江省优秀律师事务所”、“丽水市绿谷			名律所”等荣誉称号，是我市目前规模最大的律师事务所之一，并在			青田设有分所。近几年来，律所通过不断吸引优秀人才加入、行业资			源兼并整合等途径实现了有规划的稳步发展，业务收入、执业人数、			办公面积等各项指标连续稳居全市首位，综合实力已跻身浙江省律师浙江博翔律师事务所是丽水市司法局直属的合伙制律师事务所，成立于', '13906881861', 'index_qyfc2.png', '20171124/5a18399e960a5.png', '', '2.75', '江省丽水市北苑路198号财富国际大厦A座6楼', '2011年度丽水市优秀律师事务所', '2', '37,38,39,57,65,66,67,68,69,70', '0', '2017-12-01 09:47:33', '');
INSERT INTO `fuwushang` VALUES ('22', '丽水好玩猫网络科技有限公司', '叶海波', '  丽水市好玩猫网络科技有限公司,秉承“诚以待人、实以做事、合作双赢、共谋发展”的经营理念，倡导“健康、快乐、诚信”，愿与广大新老朋友携手共进，同创美好未来。 丽水市好玩猫网络科技有限公司“做实、做强、做大、做久”为发展战略，以“安全便捷、顾客至上、科学管理、优质服务”为服务宗旨，以保障顾客利益为立足点，内强素质、外塑形象，严格管理、创新发展、赢得广大客户好评。                        ', '13205889921', '20171116/a37a5acbab947f392949c9b084d7931b3398.jpg', '20171116/e3b176e7a5d592720f15721ba0cabff42051.jpg', '                  。                                ', '0.00', '丽水市莲都区城北街368号绿谷信息产业园南区绿谷1号楼5层504室', '。', '1', null, '0', '2017-12-04 14:59:03', '');
INSERT INTO `fuwushang` VALUES ('24', '丽水市今橙网络技术有限公司', '佚名', '丽水市今橙网络技术有限公司暨阿里巴巴丽水合伙人公司，阿里巴巴丽水地区跨境服务中心\r\n是帮助中小企业拓展国际贸易的出口营销推广服务，它基于全球领先的企业间电子商务网站阿里巴巴国际站贸易平台，通过向海外买家展示、推广供应商的企业和产品，进而获得贸易商机和订单，是出口企业拓展国际贸易的首选网络平台。', '0578-221773', '20171116/cc1f220f7a557c153cd86be080d562448580.jpg', '20171116/7446922285b1d5d4aa2e4d153ba308263348.jpg', '', '0.00', '浙江省丽水市莲都区城北街368号绿谷信息产业园南区绿谷.1号楼7层', '', '1', '37,38,39,40,41,46,47,48,49', '0', '2017-12-04 14:51:15', '');
INSERT INTO `fuwushang` VALUES ('26', '浙江观月网络科技股份有限公司', '钟伟林', '主要经营计算机软硬件开发，游戏开发，互联网技术推广，系统集成，网络工程施工；电子商务、企业信息化、通讯系统开发集成、自动化控制系统开发与集成、自动化工程、软件销售、技术支持、技术服务、技术培训，办公用品、游艺用品、工艺品、玩具、棋牌扑克桌椅、电子产品、计算机软件、计算机硬件及办公设备销售；智能家具设备及软件开发与销售；酒店智能设备及软件开发与销售；监控安防设备安装与销售，建材及五金销售，消防器材批发、零售（含网上销售）、配送服务；环保、网络监控与机械设备专业领域内的技术开发、技术服务、技术咨询、技术转让', '15381322228', '20171116/24c377800b0e161bf9480d0f20c3b3025585.jpg', '20171116/24c377800b0e161bf9480d0f20c3b3024301.jpg', '', '0.00', '绿谷信息产业园\r\n', '', '1', null, '0', '2017-11-20 14:37:44', '');
INSERT INTO `fuwushang` VALUES ('27', '丽水市益康健康管理有限公司', '林笑笑', '丽水市宏万惠科技有限公司-是丽水市一家为微商获取优质货源提供移动互联网服务的丽水知名企业。', '15906788200', '20171116/1e3a49adeff0d7626b18093d3c6114e16301.jpg', '20171116/21707945175019dfb52c327f5f81422b4061.jpg', '', '0.00', '浙江省丽水市莲都区城北街368号绿谷信息产业园绿谷1号楼第6层602-2室  ', '', '1', null, '0', '2017-11-20 14:37:44', '');
INSERT INTO `fuwushang` VALUES ('28', '浙江新启餐饮管理有限公司', '佚名', '浙江新启餐饮管理有限公司，自成立以来一直坚持以“客户第一、员工第二、企业第三”的倒金字搭式经营管理模式，不断发展、不断超越，为客户提供全面、专业、优质服务。本着以服务至上，效率第一的精神理念，在提升团队整体素质的同时，以热忱服务广大客户，创造丽水本土优秀配送公司品牌为目标而发展。尽善尽美服务，尽心尽力服务。 ​​', '22222', '20171116/d29fb8c5c4434ce75359e9f8c810139c9392.jpg', '20171116/d29fb8c5c4434ce75359e9f8c810139c8391.jpg', '', '0.00', '444', '', '1', null, '0', '2017-12-04 14:51:22', '');
INSERT INTO `fuwushang` VALUES ('29', '丽水云聘人力资源服务有限公司', '井永党', '22', '18857811118', '20171116/815e92823f5e3774a305ff66655947553252.jpg', '20171116/815e92823f5e3774a305ff66655947552613.jpg', '', '0.00', '444', '', '2', '81,82,83,84,85', '0', '2017-11-20 14:37:44', '');
INSERT INTO `fuwushang` VALUES ('30', '丽水网新正合科技服务有限公司', '王哲晟', '                                                    22                                                ', '2200251', '20171128/5a1cff393106c.jpg', '20171128/5a1cff3931bc2.jpg', '                                                                                                    ', '0.00', '浙江省丽水市莲都区白云街道城北路368号绿谷信息产业园绿谷1号楼3楼', '', '2', '86,87', '0', '2017-11-29 11:22:48', '');
INSERT INTO `fuwushang` VALUES ('31', '浙江丽水浙邦网络营销有限公司', '谢晟昊', '', '15325782260', '20171117/b0212bdda209c65c75fc72fbc3ff3e685706.jpg', '20171117/bd3185d4992ff22944fa1eb8c2c127a83982.jpg', '', '0.00', '浙江省丽水市莲都区城北街368号绿谷信息产业园南区绿谷3号楼', '', '2', '46,47,48,49', '0', '2017-11-20 14:37:44', '');
INSERT INTO `fuwushang` VALUES ('32', '丽水市立信会计服务有限公司', '陈兰', '', '13757800519', '20171117/14fc95ca5e283c4c414ae86bb18674185629.jpg', '20171117/14fc95ca5e283c4c414ae86bb18674186477.jpg', '', '0.00', '浙江省丽水市莲都区丽阳街247号二楼', '', '2', '50,51,52,76,77,78,79,80', '0', '2017-11-20 14:37:44', '');
INSERT INTO `fuwushang` VALUES ('33', '浙江汇时律师事务所', '姚佳燕', '', '15805780618', '20171117/f87bd751607f5c59cdf7954616db32fd5289.jpg', '20171117/f87bd751607f5c59cdf7954616db32fd3255.jpg', '', '0.00', '浙江省丽水市体育中心东门', '', '2', '57,65,66,67,68,69,70', '0', '2017-11-20 14:37:44', '');
INSERT INTO `fuwushang` VALUES ('34', '丽水斯可睿知识产权服务有限公司', '郭建南', '', '15925711118', '20171117/afb220073b96dda9e268d16fb1ec5b501627.jpg', '20171117/afb220073b96dda9e268d16fb1ec5b501354.jpg', '', '0.00', '浙江省丽水市莲都区城北街368号绿谷信息产业园绿谷·3号楼302', '', '2', '37,38,39,40,41,42,43,44,45', '0', '2017-11-20 14:37:44', '');
INSERT INTO `fuwushang` VALUES ('35', '丽水市风驰广告设计有限公司', '赵剑', '', '18606776168', '20171117/4479ce35f37ba8ed54a1fd5e87ed14808161.jpg', '20171117/4479ce35f37ba8ed54a1fd5e87ed14802714.jpg', '', '0.00', '浙江省丽水市莲都区金贸大厦1109室', '', '2', '46,47,48,49', '0', '2017-11-20 14:37:44', '');
INSERT INTO `fuwushang` VALUES ('36', '中国电信股份有限公司丽水分公司', '杨小勇', '', '17357827178', '20171117/eef48ca524fb72ef944a70c43754f30e5826.jpg', '20171117/eef48ca524fb72ef944a70c43754f30e8612.jpg', '', '0.00', '2', '', '2', '73', '0', '2017-11-20 14:37:44', '');
INSERT INTO `fuwushang` VALUES ('37', '中国移动通信集团浙江有限公司莲都分公司', '吴伶伶', '', '15857831860', '20171117/8b6212eb6d839233dd8d400dfc52d97b6100.jpg', '20171117/8b6212eb6d839233dd8d400dfc52d97b8992.jpg', '', '0.00', '2', '', '2', '73', '0', '2017-11-20 14:37:44', '');
INSERT INTO `fuwushang` VALUES ('38', '中国联合网络通信有限公司莲都区分公司', '周金娟', '', '15657229705', '20171117/4553911af11c674b2bbe4a7a417712e57052.jpg', '20171117/4553911af11c674b2bbe4a7a417712e59755.jpg', '', '0.00', '2', '', '2', '73', '0', '2017-11-20 14:37:44', '');
INSERT INTO `fuwushang` VALUES ('39', '金服物业服务集团有限公司', '陈总', '是一家服务优质的公司', '15869236626', '20171117/1cf846b7635293a9c62b343f6cfad33f9248.jpg', '20171117/1cf846b7635293a9c62b343f6cfad33f6694.jpg', '', '0.00', '2', '是一家专业的 物业公司', '2', '53,54,55,56,71,72,73,74,75', '0', '2017-11-20 16:01:43', '');

-- ----------------------------
-- Table structure for `huodong`
-- ----------------------------
DROP TABLE IF EXISTS `huodong`;
CREATE TABLE `huodong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '活动标题',
  `content` text,
  `orders` int(3) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of huodong
-- ----------------------------
INSERT INTO `huodong` VALUES ('19', '丽水摄影大赛', '&lt;p&gt;		&lt;/p&gt;&lt;p&gt;绿谷信息产业园将于11,15举办首届摄影大赛。&lt;/p&gt;&lt;p&gt;	&lt;/p&gt;', '1');
INSERT INTO `huodong` VALUES ('30', '第十届绿谷路演活动', '&lt;p&gt;将于 11。30 在绿谷信息产业园举办第十届绿谷路演活动，路演地址：xxxx&lt;/p&gt;', '2');
INSERT INTO `huodong` VALUES ('31', '绿谷杯马拉松', '&lt;p&gt;于12.1举办首届绿谷杯马拉松，欢迎参加报名&lt;/p&gt;', '3');

-- ----------------------------
-- Table structure for `pingjia`
-- ----------------------------
DROP TABLE IF EXISTS `pingjia`;
CREATE TABLE `pingjia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pj_nr` varchar(255) DEFAULT NULL,
  `f_id` int(10) DEFAULT NULL,
  `pj_name` varchar(255) DEFAULT NULL,
  `fws_id` int(10) DEFAULT NULL,
  `yuan` int(3) NOT NULL COMMENT '园区唯一标识',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of pingjia
-- ----------------------------
INSERT INTO `pingjia` VALUES ('4', '徐誉滕', '86', '吴雪峰', '3', '0');
INSERT INTO `pingjia` VALUES ('7', '好的呢', '87', null, '3', '0');

-- ----------------------------
-- Table structure for `qyinfo`
-- ----------------------------
DROP TABLE IF EXISTS `qyinfo`;
CREATE TABLE `qyinfo` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `inputname` varchar(25) NOT NULL COMMENT '显示的企业录入信息',
  `yuan` int(3) NOT NULL COMMENT '园区唯一标识',
  `inputstatus` int(1) NOT NULL DEFAULT '1' COMMENT '1可用0停用',
  `inputcon` text NOT NULL COMMENT 'input内容',
  `starlet` int(1) NOT NULL DEFAULT '0' COMMENT '1星标0非星标',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qyinfo
-- ----------------------------
INSERT INTO `qyinfo` VALUES ('14', '批次', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">批次</td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"pici\" placeholder=\"请输入公司批次\" class=\"use-inp \" >\r\n					</td>\r\n				</tr>', '0');
INSERT INTO `qyinfo` VALUES ('15', '公司名称', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">公司名称<sup>*</sup></td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"gs_name\" placeholder=\"请填写您的公司名称\" class=\"use-inp js-cpany\" >\r\n					</td>\r\n				</tr>', '1');
INSERT INTO `qyinfo` VALUES ('16', '法定代表人', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">法定代表人<sup>*</sup></td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"gs_faren\" placeholder=\"请输入法定代表人姓名\" class=\"use-inp js-man\" >\r\n					</td>\r\n				</tr>', '1');
INSERT INTO `qyinfo` VALUES ('17', '公司地址', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">公司地址<sup>*</sup></td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"gs_add\" placeholder=\"请输入公司地址（具体到楼层房间号）\" class=\"use-inp js-gps\" >\r\n					</td>\r\n				</tr>', '1');
INSERT INTO `qyinfo` VALUES ('18', '公司电话', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">联系电话<sup>*</sup></td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"gs_tel\" placeholder=\"请输入联系电话\" class=\"use-inp js-tel1\" >\r\n					</td>\r\n				</tr>', '1');
INSERT INTO `qyinfo` VALUES ('19', '主营业务', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">主营业务<sup>*</sup></td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"gs_yw\" placeholder=\"请输入公司主营业务\" class=\"use-inp zhu-y\" >\r\n					</td>\r\n				</tr>', '1');
INSERT INTO `qyinfo` VALUES ('20', '代表产品', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">代表产品</td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"gs_cp\" placeholder=\"请输入公司代表业务（产品）\" class=\"use-inp\" >\r\n					</td>\r\n				</tr>', '0');
INSERT INTO `qyinfo` VALUES ('21', '新增成果', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">新增成果</td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"gs_cg\" placeholder=\"请输入公司本年度新增成果\" class=\"use-inp\" >\r\n					</td>\r\n				</tr>', '0');
INSERT INTO `qyinfo` VALUES ('22', '主要指标', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">主要指标</td>\r\n					<td colspan=\"8\">\r\n					<textarea  name=\"gs_zb\" class=\"txt1 txt3\"></textarea>\r\n					</td>\r\n				</tr>', '0');
INSERT INTO `qyinfo` VALUES ('23', '从业人数', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">从业人数<sup>*</sup></td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"congy_renshu\" placeholder=\"请输入公司人数（硕士以上/本科/专科以下）\" class=\"use-inp js-pep\" >\r\n					</td>\r\n				</tr>', '1');
INSERT INTO `qyinfo` VALUES ('24', '创业人数', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">创业人数</td>\r\n					<td colspan=\"8\">\r\n						<textarea  name=\"cy_renshu\" class=\"txt1 txt2\"></textarea>\r\n					</td>\r\n				</tr>', '0');
INSERT INTO `qyinfo` VALUES ('25', '技术职称', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">技术职称</td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"gs_js\" placeholder=\"请请输入高中级技术职称人数\" class=\"use-inp\" >\r\n					</td>\r\n				</tr>', '0');
INSERT INTO `qyinfo` VALUES ('26', '高新企业', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">高新企业</td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"gx_qiye\" placeholder=\"请选择是否为高新技术企业\" class=\"use-inp\" >\r\n					</td>\r\n				</tr>', '0');
INSERT INTO `qyinfo` VALUES ('27', '科技企业', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">科技企业</td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"kj_qiye\" placeholder=\"请选择是否为科技型中小企业\" class=\"use-inp\" >\r\n					</td>\r\n				</tr>', '0');
INSERT INTO `qyinfo` VALUES ('28', '专利数量', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">专利数量</td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"zl_shuliang\" placeholder=\"请输入专利拥有量\" class=\"use-inp\" >\r\n					</td>\r\n				</tr>', '0');
INSERT INTO `qyinfo` VALUES ('29', '有效专利', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">有效专利</td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"yx_zhuanli\" placeholder=\"请输入期末有效发明专利数\" class=\"use-inp\" >\r\n					</td>\r\n				</tr>', '0');
INSERT INTO `qyinfo` VALUES ('30', '软件著作权', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">软件著作权</td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"gs_zzq\" placeholder=\"请输入软件著作权\" class=\"use-inp js-cpany\" >\r\n					</td>\r\n				</tr>', '0');
INSERT INTO `qyinfo` VALUES ('31', '注册权', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">注册地<sup>*</sup></td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"zc_add\" placeholder=\"请输入您的注册地\" class=\"use-inp js-di\" >\r\n					</td>\r\n				</tr>', '1');
INSERT INTO `qyinfo` VALUES ('32', '缴税地', '0', '1', '<tr class=\"fitr\">\r\n					<td colspan=\"4\">缴税地<sup>*</sup></td>\r\n					<td colspan=\"8\">\r\n						<input type=\"text\" name=\"js_add\" placeholder=\"请输入您的缴税地\" class=\"use-inp js-dd\" >\r\n					</td>\r\n				</tr>', '1');

-- ----------------------------
-- Table structure for `qy_luru`
-- ----------------------------
DROP TABLE IF EXISTS `qy_luru`;
CREATE TABLE `qy_luru` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pici` varchar(255) DEFAULT NULL COMMENT '批次',
  `gs_name` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `gs_faren` varchar(255) DEFAULT NULL COMMENT '公司法人',
  `gs_add` varchar(255) DEFAULT NULL COMMENT '公司地址',
  `gs_tel` varchar(255) DEFAULT NULL COMMENT '公司电话',
  `gs_yw` varchar(255) DEFAULT NULL COMMENT '主营业务',
  `gs_cp` varchar(255) DEFAULT NULL COMMENT '产品代表',
  `gs_cg` varchar(255) DEFAULT NULL COMMENT '新增成果',
  `gs_zb` varchar(255) DEFAULT NULL COMMENT '主要指标',
  `congy_renshu` varchar(255) DEFAULT NULL COMMENT '从业人数',
  `cy_renshu` varchar(255) DEFAULT NULL COMMENT '创业人数',
  `gs_js` varchar(255) DEFAULT NULL COMMENT '技术职称',
  `gx_qiye` varchar(255) DEFAULT NULL COMMENT '高新企业',
  `kj_qiye` varchar(255) DEFAULT NULL COMMENT '科技企业',
  `zl_shuliang` varchar(255) DEFAULT NULL COMMENT '专利数量',
  `yx_zhuanli` varchar(255) DEFAULT NULL COMMENT '有效专利',
  `gs_zzq` varchar(255) DEFAULT NULL COMMENT '软件著作权',
  `zc_add` varchar(255) DEFAULT NULL COMMENT '注册地址',
  `js_add` varchar(255) DEFAULT NULL COMMENT '缴税地址',
  `yuan` int(3) NOT NULL COMMENT '园区唯一id',
  `cs` text,
  `csx` text,
  `hjg` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of qy_luru
-- ----------------------------
INSERT INTO `qy_luru` VALUES ('1', '111111', '222222', '333333', '444444', '55555555555', '6666666', '7777777', '888888', '9999999', '000000', '11111', '2222222', '3333333', '4444444', '555555', '666666', '7777777', '88888888', '99999999', '0', null, null, null);
INSERT INTO `qy_luru` VALUES ('8', '11', '4', '1', '1', '13213101347', '1', '4', '5', '看', '额', '路', '哦', '看', '阿', '噢', '他', '阿', '看', '看', '0', null, null, null);
INSERT INTO `qy_luru` VALUES ('9', '', '微博', '呵呵呵v ', '第五版的', '18868842082', '好多好多好多dnjsjsvv ', '', '', '请输入公司主要指标（营业收入/软件业务收入/利润总额/税金总额/研发经费)', '20', '请输入“新四军”创业人数（大学生/大企业高管及其他连续/科技人员/留学归国人员创业者）', '', '', '', '', '', '', '丽水', '里说', '0', null, null, null);
INSERT INTO `qy_luru` VALUES ('11', '2', '1', '2', '3', '4', '2', '2', '2', '2', '2', '啊', '2', '2', '2', '2', '2', '5', '2', '2', '0', null, null, null);

-- ----------------------------
-- Table structure for `tousu`
-- ----------------------------
DROP TABLE IF EXISTS `tousu`;
CREATE TABLE `tousu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `neirong` varchar(10000) DEFAULT NULL,
  `name_id` varchar(255) DEFAULT NULL,
  `yuan` int(3) NOT NULL COMMENT '园区唯一标识',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tousu
-- ----------------------------
INSERT INTO `tousu` VALUES ('1', '测试', 'oebYn1bfR9NJ5hpJpyXUHG28gPZM', '0');
INSERT INTO `tousu` VALUES ('4', '', 'oebYn1fOcMzE80Kq4xWEFT6OMogI', '0');
INSERT INTO `tousu` VALUES ('5', '', 'oebYn1fOcMzE80Kq4xWEFT6OMogI', '0');
INSERT INTO `tousu` VALUES ('6', '你好', 'oebYn1W3pGq4Rs1k1x3C_2MAt_ZM', '0');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pwds` varchar(255) DEFAULT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL DEFAULT '2' COMMENT '1停用，2正常',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `yuan` varchar(100) DEFAULT NULL COMMENT '园区名称',
  `type` int(2) NOT NULL DEFAULT '2' COMMENT '1超级管理员2园区管理员',
  `y_id` int(3) NOT NULL COMMENT '园区id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admins', '21232f297a57a5a743894a0e4a801fc3', '超管', '2017-10-31 13:05:04', '1', '2017-11-27 10:14:39', '丽水园区', '1', '0');
INSERT INTO `users` VALUES ('5', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '王总', '2017-11-20 16:55:34', '2', '2017-11-27 10:15:28', '浙大网新', '1', '0');
INSERT INTO `users` VALUES ('22', 'lishui', 'e10adc3949ba59abbe56e057f20f883e', '丽水管理员', '2017-11-23 09:30:28', '2', '2017-11-23 09:30:28', '丽水园区', '2', '0');
INSERT INTO `users` VALUES ('28', '123456', 'e10adc3949ba59abbe56e057f20f883e', '佚名', '2017-12-04 23:56:56', '2', '2017-12-04 23:56:56', '测试用', '2', '0');

-- ----------------------------
-- Table structure for `wx_user`
-- ----------------------------
DROP TABLE IF EXISTS `wx_user`;
CREATE TABLE `wx_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `add` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `sex` varchar(4) DEFAULT NULL,
  `openid` varchar(255) DEFAULT NULL,
  `z_name` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `state` varchar(3) NOT NULL DEFAULT '1' COMMENT '1可用，2停用',
  `yuan` int(3) DEFAULT NULL COMMENT '园区名称',
  `y_id` int(3) DEFAULT NULL COMMENT '园区id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of wx_user
-- ----------------------------
INSERT INTO `wx_user` VALUES ('3', '韩冷', '555', 'http://wx.qlogo.cn/mmopen/ajNVdqHZLLAFq1oQozr77wfcCtu0OfBjkSPBMlq6ajb53VfFZk7xImmibNBjOxD2wORZAgPvfaSBFsQmlSVJOgQ/0', '1', 'oebYn1fOcMzE80Kq4xWEFT6OMogI', '44', '4444', '0000-00-00 00:00:00', '1', null, null);
INSERT INTO `wx_user` VALUES ('4', '꧁༺落༒雪༻꧂', '海智中心', 'http://wx.qlogo.cn/mmopen/O5IB5rptd1o2rKoo7uxiaCAreK203FaX9dLqF0XUtScN9qJflDLjzJFQfjZvG4vu7EdibonQaHb5RnCumwbxwicKPhUDBUrOlNQ/0', '1', 'oebYn1bfR9NJ5hpJpyXUHG28gPZM', '吴雪峰', '15084629504', '2017-11-24 23:00:20', '1', null, null);
INSERT INTO `wx_user` VALUES ('7', '任我行', null, 'http://wx.qlogo.cn/mmopen/PiajxSqBRaEJ2zv8dPJakTibRKQA5zEia3CnUaTqOeAsBKZrl52uUTWia6Qkhnic3ZQKEQIrkqHOVnpL8kTSCPicxoaQ/0', '1', 'oebYn1Xn2Py_37LTPSaK1eHK-UJE', null, null, '0000-00-00 00:00:00', '1', null, null);
INSERT INTO `wx_user` VALUES ('9', '六月 李', null, 'http://wx.qlogo.cn/mmopen/O5IB5rptd1o2rKoo7uxiaCAxmgb0JN38icZ9XC7JGUiaA1l2jzv4k2GEtwZ5Edd5zTCFpyVJsd40MvqHbVoWFM8ZQEibjMiaykhE3/0', '1', 'oebYn1Ye52iXo7bku0qmqLyBRryA', null, null, '2017-11-23 14:57:48', '1', null, null);
INSERT INTO `wx_user` VALUES ('39', '赵辉', null, 'http://wx.qlogo.cn/mmopen/HInib9JZ1F76GmvBfGJaibsoMURl4ibOR1kxhURI78Uszy01QJYjOt2w9pHpnw9BS8WWBGpzYiaMYqiamH9XYe2Y30jqgfRXicKEuA/0', '1', 'oebYn1c2K5E-nRyXF-IZeWkFpglw', null, null, '2017-11-27 14:57:26', '1', null, null);
INSERT INTO `wx_user` VALUES ('67', '管水强', null, 'http://wx.qlogo.cn/mmopen/HInib9JZ1F76GmvBfGJaibsm0lDRCw9WHhVNoPIFzJoNOsDEXgliaibwDpc8vnsU1T971hstdyaibNrLuM1hJISMhPHEcJBMicpfsc/0', '1', 'oebYn1fDb-SxzZaBjHBEdqv-q7Ik', null, null, '2017-11-27 20:43:45', '1', null, null);
INSERT INTO `wx_user` VALUES ('68', '管理', null, 'http://wx.qlogo.cn/mmopen/Q3auHgzwzM7eqvdYeRPVyIMsT0zxVlibwMsEr45NPibcRS2ySHt6ej2tqULvTlUDKfCeWGKZNd16kTIn7oTmSlZA/0', '1', 'oebYn1c0v0Sl7kosllDnQG_BR0CQ', null, null, '2017-11-27 20:45:50', '1', null, null);
INSERT INTO `wx_user` VALUES ('69', 'echo', null, 'http://wx.qlogo.cn/mmopen/HInib9JZ1F77bxJqMxSPMPxy5tPtOE7Vv492lBO63fMvliaJZTIqZTdRHpph7KFI545Ja7icNWbLhKcqP9FSYlrfoD3yjBqlDnr/0', '1', 'oebYn1cebP-3LOz55W44xZ_lhJ9o', null, null, '2017-11-28 09:04:08', '1', null, null);
INSERT INTO `wx_user` VALUES ('70', null, '杭州滨江', null, null, 'oebYn1W3pGq4Rs1k1x3C_2MAt_ZM', '孙俊', '1355555555', '2017-11-30 15:35:58', '1', null, null);
INSERT INTO `wx_user` VALUES ('71', null, null, null, null, 'oebYn1cFf2Ech4S8Q8mj27h7z27k', null, null, '2017-11-29 15:28:25', '1', null, null);
INSERT INTO `wx_user` VALUES ('72', null, null, null, null, null, null, null, '2017-12-01 22:10:10', '1', null, null);
INSERT INTO `wx_user` VALUES ('73', '≈　　　小巫婆', null, 'http://wx.qlogo.cn/mmopen/HInib9JZ1F76GmvBfGJaibshDsqW3DG3yyknhPewWxtnQGI6b3OGorzPbvcmPh1U3oibbd3UPQU9pYqav7XiaHSvmLHkZZ5Y94Wr/0', '2', 'oebYn1ZkHLlHluxYU3emYLFYqof8', null, null, '2017-12-04 14:28:01', '1', null, null);
INSERT INTO `wx_user` VALUES ('74', null, null, null, null, 'oebYn1dlytmjBbP0245dE7UEW9YQ', null, null, '2017-12-05 10:05:09', '1', null, null);
INSERT INTO `wx_user` VALUES ('75', '海珊', null, 'http://wx.qlogo.cn/mmopen/Q3auHgzwzM5EDgEibPSficgicpTZC3OFyXlxxyOlaLltuZX8r2sLAZZtc0hrrUSO78JFacEAynstEbOQNdXzKa9iaw/0', '2', 'oebYn1fpQR3IATwz7jlsAe6DGPnE', null, null, '2017-12-05 10:06:13', '1', null, null);
INSERT INTO `wx_user` VALUES ('76', null, null, null, null, 'oebYn1ebR2Mk1yOETINhJGls1XPE', null, null, '2017-12-05 10:06:38', '1', null, null);
INSERT INTO `wx_user` VALUES ('77', null, null, null, null, 'oebYn1YuWjLsIflCNHUM6XHyi6DA', null, null, '2017-12-05 10:06:44', '1', null, null);
INSERT INTO `wx_user` VALUES ('78', null, null, null, null, 'oebYn1VyA3KtK8ZhkpPbzKVISLLM', null, null, '2017-12-05 10:09:10', '1', null, null);
INSERT INTO `wx_user` VALUES ('79', null, null, null, null, null, null, null, '2017-12-05 10:17:24', '1', null, null);
INSERT INTO `wx_user` VALUES ('80', null, null, null, null, null, null, null, '2017-12-08 17:36:09', '1', null, null);

-- ----------------------------
-- Table structure for `wzxx`
-- ----------------------------
DROP TABLE IF EXISTS `wzxx`;
CREATE TABLE `wzxx` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lb_img1` varchar(255) DEFAULT NULL,
  `lb_img2` varchar(255) DEFAULT NULL,
  `db_img` varchar(255) DEFAULT NULL,
  `rz_img` varchar(255) DEFAULT NULL,
  `zszc` varchar(10000) DEFAULT NULL,
  `rzxx` varchar(10000) DEFAULT NULL,
  `lxwm` varchar(255) DEFAULT NULL,
  `xddh` varchar(255) DEFAULT NULL,
  `yuan` int(3) NOT NULL COMMENT '园区名称',
  `countuser` varchar(255) DEFAULT NULL COMMENT '访客总数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of wzxx
-- ----------------------------
INSERT INTO `wzxx` VALUES ('1', '20171110/085507a7b0e47f9d2d2b8fe9d5a45587.jpg', '20171110/e2df2e1088c1f4568932cf9db8c2c5f2.png', '20171110/d6fec70abf62a0ef964affe3d5aa1a85.png', '20171110/62813c4346b72861f645f10e95fae55f.png', '1、租金政策\r\n\r\n入驻主园区国资物业的招商引资企业前三年租金全免；本地企业分别返还50%、40%、30%；\r\n\r\n2、税收政策\r\n\r\n企业贡献地方流程部分，前两年财政全额奖励，第三年至第五年财政给予50%奖励；软件企业前五年财政全额奖励，第六至第八年给予50%奖励\r\n\r\n3、人才政策\r\n\r\n企业高管最高可获得10万元/年地方贡献补助，并提供人才公寓，应届本科毕业生人才公寓免租一年', '一、入园流程\r\n\r\n1、预评价。领导小组办公室根据园区产业定位，组织专家对意向入园项目进行材料初审、实地考察、项目路演，建立入园项目信息库并作出预评价意见。\r\n\r\n2、综合评价确定。由领导小组组长或其委托的副组长主持召开重大项目入园决策评价专题会议，对预评价项目进行综合评价确定，形成《丽水绿谷信息产业园重大项目入园决策评价会议纪要》。\r\n\r\n3、开展项目入园工作。由丽水绿谷信息实业有限公司根据《丽水绿谷信息产业园重大项目入园决策评价会议纪要》与项目主体签订入园协议，并做好后续管理与服务工作。\r\n\r\n二、申请材料：\r\n\r\n1、丽水市信息产业基地申请企业基本情况表（一份电子版、一份纸质加盖公章）\r\n\r\n2、电子版3-5年发展规划（内容包括：1.公司简介 2.项目介绍 3.计划与目标4.项目风险评估5.项目社会效益与经济效益）\r\n\r\n3、路演PPT电子版', '公司名称：浙江网新正合科技服务有限公司\r\n\r\n地址：浙江省丽水市莲都区城北街368号S8号楼绿谷信息实业有限公司\r\n\r\n电话：0578-2095085', '7812131321321', '0', '5123');
