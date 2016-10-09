/*
Navicat MySQL Data Transfer

Source Server         : locahost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : webstar

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-10-24 17:55:28
*/

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- ----------------------------
-- Table structure for my_admin
-- ----------------------------
DROP TABLE IF EXISTS `my_admin`;
CREATE TABLE `my_admin` (
  `uid` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `uname` varchar(100) NOT NULL COMMENT '用户名',
  `upass` varchar(100) NOT NULL COMMENT '密码',
  `usex` tinyint(4) NOT NULL COMMENT '性别',
  `uqq` varchar(100) NOT NULL COMMENT 'qq',
  `umail` varchar(100) NOT NULL COMMENT '用户邮箱',
  `uphone` varchar(100) NOT NULL,
  `rg_date` date NOT NULL COMMENT '注册时间',
  `purid` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否管理员',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for my_article
-- ----------------------------
DROP TABLE IF EXISTS `my_article`;
CREATE TABLE `my_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL COMMENT '用户名',
  `title` varchar(16) NOT NULL COMMENT '提交的标题',
  `content` varchar(480) NOT NULL COMMENT '提交的内容',
  `good` varchar(16) NOT NULL DEFAULT '0' COMMENT '好评',
  `bad` varchar(16) NOT NULL DEFAULT '0' COMMENT '差评',
  `date` int(11) NOT NULL COMMENT '提交的时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_article
-- ---------------------------
INSERT INTO `my_article` VALUES ('1', '柳永', '蝶恋花·伫倚危楼风细细', '　伫倚危楼风细细，望极春愁，黯黯生天际。草色烟光残照里，无言谁会凭阑意。\r\n　　拟把疏狂图一醉，对酒当歌，强乐还无味。衣带渐宽终不悔，为伊消得人憔悴。', '10', '5', '1445912185');
INSERT INTO `my_article` VALUES ('2', '李白', '春思', '燕草如碧丝，秦桑低绿枝。\r\n当君怀归日，是妾断肠时。\r\n春风不相识，何事入罗帏？', '0', '0', '1445912278');
INSERT INTO `my_article` VALUES ('3', '赵令峙', '蝶恋花·欲减罗衣寒未去', '欲减罗衣寒未去，不卷珠帘，人在深深处。红杏枝头花几许？啼痕止恨清明雨。\r\n　　尽日沉烟香一缕，宿酒醒迟，恼破春情绪。飞燕又将归信误，小屏风上西江路。', '3', '7', '1445912366');
INSERT INTO `my_article` VALUES ('4', '朱敦儒', '相见欢·金陵城上西楼', '　金陵城上西楼，倚清秋。万里夕阳垂地，大江流。 中原乱，簪缨散，几时收？试倩悲风吹泪，过扬州。', '5', '2', '1445912396');
INSERT INTO `my_article` VALUES ('5', '晏殊', '浣溪沙·一曲新词酒一杯', '一曲新词酒一杯，去年天气旧亭台。夕阳西下几时回？\r\n　　无可奈何花落去，似曾相识燕归来。小园香径独徘徊。', '1', '8', '1445912425');
INSERT INTO `my_article` VALUES ('6', '辛弃疾', '水龙吟·过南剑双溪楼', '　举头西北浮云，倚天万里须长剑。人言此地，夜深长见，斗牛光焰。我觉山高，潭空水冷，月明星淡。待燃犀下看，凭栏却怕，风雷怒，鱼龙惨。\r\n　　峡束苍江对起，过危楼，欲飞还敛。元龙老矣！不妨高卧，冰壶凉簟。千古兴亡，百年悲笑，一时登览。问何人又卸，片帆沙岸，系斜阳缆？', '4', '7', '1445912792');
INSERT INTO `my_article` VALUES ('7', '辛弃疾', '菩萨蛮·书江西造口壁', '郁孤台下清江水，中间多少行人泪？西北望长安，可怜无数山。\r\n　　青山遮不住，毕竟东流去。江晚正愁余，山深闻鹧鸪。', '12', '42', '1445912765');
INSERT INTO `my_article` VALUES ('8', '晏几道', '临江仙·斗草阶前初见', '斗草阶前初见，穿针楼上曾逢。罗裙香露玉钗风。靓妆眉沁绿，羞脸粉生红。\r\n　　流水便随春远，行云终与谁同？酒醒长恨锦屏空。相寻梦里路，飞雨落花中。', '12', '32', '1445912819');
INSERT INTO `my_article` VALUES ('9', '温庭筠', '望江南·梳洗罢', '梳洗罢，独倚望江楼。\r\n　　过尽千帆皆不是，斜晖脉脉水悠悠。\r\n　　肠断白苹洲。', '12', '32', '1445912863');
INSERT INTO `my_article` VALUES ('10', '吴文英', '八声甘州·灵岩陪庾幕诸公游', '渺空烟四远，是何年、青天坠长星？幻苍厓云树，名娃金屋，残霸宫城。箭径酸风射眼，腻水染花腥。时靸双鸳响，廊叶秋声。 \r\n　　宫里吴王沉醉，倩五湖倦客，独钓醒醒。问苍波无语，华发奈山青。水涵空、阑干高处，送乱鸦斜日落渔汀。连呼酒、上琴台去，秋与云平。', '5', '6', '1445912899');
INSERT INTO `my_article` VALUES ('11', '苏轼', '西江月·重九', '点点楼头细雨，重重江外平湖。当年戏马会东徐，今日凄凉南浦。\r\n　　莫恨黄花未吐，且教红粉相扶。酒阑不必看茱萸，俯仰人间今古。', '53', '12', '1445912924');
INSERT INTO `my_article` VALUES ('12', '王沂孙', '眉妩·新月', '渐新痕悬柳⑴，淡彩穿花⑵，依约破初暝⑶。便有团圆意⑷，深深拜⑸，相逢谁在香径。画眉未稳⑹。料素娥⑺、犹带离恨。最堪爱、一曲银钩小⑻，宝帘挂秋冷。\r\n　　千古盈亏休问⑼。叹慢磨玉斧，难补金镜。太液池犹在⑽，凄凉处、何人重赋清景。故山夜永。试待他、窥户端正⑾。看云外山河⑿，还老尽，桂花影⒀。', '4', '1', '1445912963');
INSERT INTO `my_article` VALUES ('13', '唐琬', '钗头凤·世情薄', '世情薄，人情恶，雨送黄昏花易落。晓风干，泪痕残。欲笺心事，独语斜阑。难，难，难！\r\n　　人成各，今非昨，病魂常似秋千索。角声寒，夜阑珊。怕人寻问，咽泪装欢。瞒，瞒，瞒！', '4', '6', '1445912988');


-- ----------------------------
-- Table structure for my_site_config
-- ----------------------------
DROP TABLE IF EXISTS `my_site_config`;
CREATE TABLE `my_site_config` (
  `siteId` int(50) NOT NULL AUTO_INCREMENT,
  `siteName` varchar(100) NOT NULL,
  `domainName` varchar(100) NOT NULL,
  `seoTitle` varchar(100) NOT NULL,
  `seoKeywords` varchar(100) NOT NULL,
  `seoDescription` varchar(100) NOT NULL,
  `siteAuthor` varchar(50) NOT NULL,
  `siteUrl` text COMMENT '搜索网站',
  PRIMARY KEY (`siteId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
