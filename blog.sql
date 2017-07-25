/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-07-26 00:31:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `blog_admin`
-- ----------------------------
DROP TABLE IF EXISTS `blog_admin`;
CREATE TABLE `blog_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(45) NOT NULL DEFAULT '' COMMENT '用户名',
  `admin_password` varchar(45) NOT NULL DEFAULT '' COMMENT '登录密码',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='后台管理员表';

-- ----------------------------
-- Records of blog_admin
-- ----------------------------
INSERT INTO `blog_admin` VALUES ('1', 'a', 'a');
INSERT INTO `blog_admin` VALUES ('2', 'admin', 'h3vPU8JGuF3VS/uxIpjRSw==');

-- ----------------------------
-- Table structure for `blog_arc_tag`
-- ----------------------------
DROP TABLE IF EXISTS `blog_arc_tag`;
CREATE TABLE `blog_arc_tag` (
  `arc_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  KEY `fk_table1_blog_article1_idx` (`arc_id`),
  KEY `fk_table1_blog_tag1_idx` (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章标签中间表';

-- ----------------------------
-- Records of blog_arc_tag
-- ----------------------------
INSERT INTO `blog_arc_tag` VALUES ('1', '2');
INSERT INTO `blog_arc_tag` VALUES ('1', '3');
INSERT INTO `blog_arc_tag` VALUES ('1', '4');
INSERT INTO `blog_arc_tag` VALUES ('1', '5');
INSERT INTO `blog_arc_tag` VALUES ('2', '1');
INSERT INTO `blog_arc_tag` VALUES ('2', '2');
INSERT INTO `blog_arc_tag` VALUES ('3', '11');
INSERT INTO `blog_arc_tag` VALUES ('4', '11');
INSERT INTO `blog_arc_tag` VALUES ('7', '1');
INSERT INTO `blog_arc_tag` VALUES ('7', '2');
INSERT INTO `blog_arc_tag` VALUES ('7', '13');
INSERT INTO `blog_arc_tag` VALUES ('6', '4');
INSERT INTO `blog_arc_tag` VALUES ('6', '3');
INSERT INTO `blog_arc_tag` VALUES ('6', '13');

-- ----------------------------
-- Table structure for `blog_article`
-- ----------------------------
DROP TABLE IF EXISTS `blog_article`;
CREATE TABLE `blog_article` (
  `arc_id` int(11) NOT NULL AUTO_INCREMENT,
  `arc_title` varchar(45) NOT NULL DEFAULT '' COMMENT '文章标题',
  `arc_author` varchar(45) NOT NULL DEFAULT '' COMMENT '文章作者',
  `arc_digest` varchar(200) NOT NULL DEFAULT '' COMMENT '文章摘要',
  `arc_content` text,
  `sendtime` int(11) NOT NULL DEFAULT '0' COMMENT '发表时间',
  `updatetime` int(11) NOT NULL DEFAULT '0' COMMENT '文章更新时间',
  `arc_click` int(11) NOT NULL DEFAULT '0' COMMENT '点击次数',
  `is_recycle` tinyint(4) NOT NULL DEFAULT '2' COMMENT '是否在回收站，1在回收站2代表不在回收站，默认2',
  `arc_thumb` varchar(100) NOT NULL DEFAULT '' COMMENT '文章缩略图',
  `cate_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `arc_sort` int(11) NOT NULL DEFAULT '100' COMMENT '文章排序',
  PRIMARY KEY (`arc_id`),
  KEY `fk_blog_article_blog_cate_idx` (`cate_id`),
  KEY `fk_blog_article_blog_admin1_idx` (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Records of blog_article
-- ----------------------------
INSERT INTO `blog_article` VALUES ('1', '后盾人在线视频网站上线啦！', '后盾网深水鱼', '好消息！好消息！后盾人在线视频站上线啦！经过多日的熬夜奋战，后盾人以全新的面貌和大家见面啦！', '<p><span style=\"font-size:16px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\">大家应该也注意到了，我们同行好多也都有自己的视频站，但是目的不纯的占多数（为了融资，博噱头....水太深不能细说），但是我们不一样，我们仅仅是想用心打造一个纯粹的IT技能学习平台，让喜欢技术的朋友轻松受益，在嘈杂的环境中我们只想安静的干点实事。</span><span style=\"font-size:16px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\"><br style=\"word-wrap: break-word;\"/>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 网站已经上线了，但是目前视频课程还没有发布完毕，预计将于本周全面搞定。</span><br style=\"word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"font-size:16px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\"><br style=\"word-wrap: break-word;\"/>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 后盾人视频平台上的视频暂时无需注册，无需费用，无广告（这个‘三无’很给力），而且提供高清版打包下载。后盾人视频整理自原来论坛和快学网中发布的视频，在后盾人平台中我们对原来录制的海量视频进行的了筛选和精心分类，让大家更容易找到适合自己的视频进行学习。</span><br style=\"word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"font-size:16px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\"><br style=\"word-wrap: break-word;\"/>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 好了不多说了，大家自己去体验吧！<a href=\"http://www.houdunren.com/\" target=\"_blank\" style=\"word-wrap: break-word; color: rgb(255, 102, 0); text-decoration-line: none;\">www.houdunren.com</a></span><br style=\"word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"font-size:16px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</span><img src=\"http://bbs.houdunwang.com/static/image/smiley/tusiji/15.gif\" smilieid=\"189\" border=\"0\" alt=\"\" style=\"word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255); width: 41px; height: 46px;\" width=\"41\" height=\"46\"/><span style=\"font-size:16px;word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\">动动小手回复一下本帖，就有66个后盾币奖励哦！老铁们别犹豫了！双击666！没毛病！</span><img src=\"http://bbs.houdunwang.com/static/image/smiley/tusiji/15.gif\" smilieid=\"189\" border=\"0\" alt=\"\" style=\"word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255); width: 37px; height: 45px;\" width=\"37\" height=\"45\"/></p>', '1491989851', '1497458569', '8', '2', 'http://www.tp5.com/uploads/20170412/efa83ed677e33be338d3a3de32b95166.jpg', '21', '2', '200');
INSERT INTO `blog_article` VALUES ('2', 'HDCMS2.0发布了，让大家久等了。', '后盾向军', '重点是一切都免费，免费使用、免费视频、免费解答。无论是商业用户还是个人用户100%免费！。', '<p><span style=\"color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; background-color: rgb(255, 255, 255);\"><img src=\"http://blog.com:8080/uploads/20170412/435b900f2e806d7b7f35d10818893e7d.jpg\"/></span></p><p><span style=\"color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; background-color: rgb(255, 255, 255);\">后盾网做为业内认真的培训机构，也是唯一拥有开源产品的培训机构，我们始终将技术更新迭代放在第一位。在HDCMS1.0受到众多用户喜欢的基础上，我们开发了HDCMS2.0，拥有更方便的扩展机制，集成微信功能、模块化架构、阿里OSS、微信支付、微信红包、插件机制、自动升级、云模块安装更新....等等前卫的功能。相信会为开发移动/桌面平台应用的中小企业带来福音。</span><br style=\"word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\"/><br style=\"word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"word-wrap: break-word; font-weight: 700; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; background-color: rgb(255, 255, 255);\">重点是一切都免费，免费使用、免费视频、免费解答。无论是商业用户还是个人用户100%免费！。</span><br style=\"word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\"/><br style=\"word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; background-color: rgb(255, 255, 255);\">无论安装或使用中遇到的问题，后盾团队都会认真帮助大家解决。</span><br style=\"word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\"/><br style=\"word-wrap: break-word; color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(67, 74, 84); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; background-color: rgb(255, 255, 255);\">团队近期会录制HDCMS开发视频教程，敬请期待。</span></p>', '1491989954', '1497458566', '1', '2', 'http://www.tp5.com/uploads/20170412/435b900f2e806d7b7f35d10818893e7d.jpg', '22', '2', '200');
INSERT INTO `blog_article` VALUES ('3', '后盾网2016羽毛球赛', '后盾武斌', '2016年9月14日，后盾网北京校区举办了秋季羽毛球赛，在校的数百名学员参加了本次活动。大家本着友谊第一，比赛第二的原则，都非常投入，也让自己在紧张的学习中得以放松', '<p><span style=\"color: rgb(65, 105, 225); font-family: \" microsoft=\"\" font-size:=\"\" background-color:=\"\">2016年9月14日，后盾网北京校区举办了秋季羽毛球赛，在校的数百名学员参加了本次活动。大家本着友谊第一，比赛第二的原则，都非常投入，也让自己在紧张的学习中得以放松545454</span></p>', '1491990302', '1497459393', '1', '2', 'http://www.tp5.com/uploads/20170412/b7f863c8be7ed44ec2f6c94191b906d1.jpg', '23', '2', '192');
INSERT INTO `blog_article` VALUES ('4', '后盾网2016中秋佳节长城励志行', '后盾武斌', '2016年9月15日， 值中秋佳节之际，后盾网北京校区组织在校学员和部分毕业学员举行长城游活动。后盾的大部分学员都来自外地，此次来长城，圆了不少同学的梦想，在后盾不仅能学到扎实的技术，还能和大家一起参加集体活动，大家都非常开心和兴奋。一起来回顾一下精彩集锦吧！', '<p><img src=\"http://blog.com:8080/uploads/20170412/b7f863c8be7ed44ec2f6c94191b906d1.jpg\"/></p><p><span style=\"color: rgb(0, 0, 255); font-family: &quot;Microsoft Yahei&quot;, Simsun, Tahoma; font-size: medium; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;2016年9月15日， 值中秋佳节之际，后盾网北京校区组织在校学员和部分毕业学员举行长城游活动。后盾的大部分学员都来自外地，此次来长城，圆了不少同学的梦想，在后盾不仅能学到扎实的技术，还能和大家一起参加集体活动，大家都非常开心和兴奋。一起来回顾一下精彩集锦吧！</span></p><p><br/></p>', '1491990379', '1497884143', '3', '2', 'http://www.tp5.com/uploads/20170412/b7f863c8be7ed44ec2f6c94191b906d1.jpg', '19', '2', '193');
INSERT INTO `blog_article` VALUES ('6', '1112225233333', 'admin', '11111222222', '<p>111112222223333333</p>', '0', '1497458549', '0', '1', 'http://www.myblog.com/uploads/20170611/ff6ce953c833f2ccaaa926c58d2b1b77.png', '21', '2', '110');

-- ----------------------------
-- Table structure for `blog_attachment`
-- ----------------------------
DROP TABLE IF EXISTS `blog_attachment`;
CREATE TABLE `blog_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `filename` varchar(300) NOT NULL COMMENT '文件名',
  `path` varchar(300) NOT NULL COMMENT '路径',
  `extension` varchar(10) NOT NULL DEFAULT '' COMMENT '类型',
  `createtime` int(10) NOT NULL COMMENT '上传时间',
  `size` mediumint(9) NOT NULL COMMENT '文件大小',
  PRIMARY KEY (`id`),
  KEY `extension` (`extension`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='附件';

-- ----------------------------
-- Records of blog_attachment
-- ----------------------------
INSERT INTO `blog_attachment` VALUES ('16', 'D6H1(1R4`VM_1{E4SZ{WMT4.png', 'ff6ce953c833f2ccaaa926c58d2b1b77.png', 'uploads/20170611/ff6ce953c833f2ccaaa926c58d2b1b77.png', 'png', '1497118350', '143970');
INSERT INTO `blog_attachment` VALUES ('17', 'D6H1(1R4`VM_1{E4SZ{WMT4.png', '674995ec2ff4d774447bdf4fdbe72e72.png', 'uploads/20170612/674995ec2ff4d774447bdf4fdbe72e72.png', 'png', '1497279529', '143970');

-- ----------------------------
-- Table structure for `blog_cate`
-- ----------------------------
DROP TABLE IF EXISTS `blog_cate`;
CREATE TABLE `blog_cate` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(45) NOT NULL DEFAULT '' COMMENT '栏目名称',
  `cate_pid` int(11) NOT NULL DEFAULT '0' COMMENT '父id',
  `cate_sort` int(11) NOT NULL DEFAULT '100' COMMENT '栏目排序',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='栏目管理';

-- ----------------------------
-- Records of blog_cate
-- ----------------------------
INSERT INTO `blog_cate` VALUES ('22', 'yii2.0学习', '15', '59');
INSERT INTO `blog_cate` VALUES ('21', 'reac.js学习', '14', '58');
INSERT INTO `blog_cate` VALUES ('20', 'laravel5.4学习', '15', '57');
INSERT INTO `blog_cate` VALUES ('19', 'thinkphp5.0学习', '15', '56');
INSERT INTO `blog_cate` VALUES ('18', 'angular.js学习', '14', '55');
INSERT INTO `blog_cate` VALUES ('17', 'vue.js学习', '14', '54');
INSERT INTO `blog_cate` VALUES ('32', 'java开发', '0', '109');
INSERT INTO `blog_cate` VALUES ('14', '前端开发1', '0', '51');
INSERT INTO `blog_cate` VALUES ('15', 'php开发', '0', '50');
INSERT INTO `blog_cate` VALUES ('23', 'react native', '21', '60');
INSERT INTO `blog_cate` VALUES ('25', 'es6语法学习', '24', '62');
INSERT INTO `blog_cate` VALUES ('27', 'es6语法学习', '26', '63');
INSERT INTO `blog_cate` VALUES ('31', '.NET开发', '0', '106');

-- ----------------------------
-- Table structure for `blog_link`
-- ----------------------------
DROP TABLE IF EXISTS `blog_link`;
CREATE TABLE `blog_link` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `link_name` varchar(45) NOT NULL DEFAULT '' COMMENT '友链名称',
  `link_url` varchar(100) NOT NULL DEFAULT '' COMMENT '友链url',
  `link_sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '友链排序',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='友链数据表';

-- ----------------------------
-- Records of blog_link
-- ----------------------------
INSERT INTO `blog_link` VALUES ('1', '后盾网', 'http://www.houdunwang.com', '100');
INSERT INTO `blog_link` VALUES ('3', '后盾人视频站', 'http://www.houdunren.com', '100');
INSERT INTO `blog_link` VALUES ('5', '优惠站', 'http://www.yoho167.com', '100');

-- ----------------------------
-- Table structure for `blog_tag`
-- ----------------------------
DROP TABLE IF EXISTS `blog_tag`;
CREATE TABLE `blog_tag` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(45) NOT NULL DEFAULT '' COMMENT '标签名称',
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='标签管理';

-- ----------------------------
-- Records of blog_tag
-- ----------------------------
INSERT INTO `blog_tag` VALUES ('1', '框架');
INSERT INTO `blog_tag` VALUES ('2', '学习');
INSERT INTO `blog_tag` VALUES ('3', '视频');
INSERT INTO `blog_tag` VALUES ('4', 'php');
INSERT INTO `blog_tag` VALUES ('5', 'html');

-- ----------------------------
-- Table structure for `blog_webset`
-- ----------------------------
DROP TABLE IF EXISTS `blog_webset`;
CREATE TABLE `blog_webset` (
  `webset_id` int(11) NOT NULL AUTO_INCREMENT,
  `webset_name` varchar(45) NOT NULL DEFAULT '' COMMENT '配置项名称',
  `webset_value` varchar(200) NOT NULL DEFAULT '' COMMENT '配置项值',
  `webset_des` varchar(45) NOT NULL DEFAULT '' COMMENT '配置项描述',
  PRIMARY KEY (`webset_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='站点配置';

-- ----------------------------
-- Records of blog_webset
-- ----------------------------
INSERT INTO `blog_webset` VALUES ('1', 'title', '小聪个人技术博客', '网站名称');
INSERT INTO `blog_webset` VALUES ('2', 'email', '980469887@qq.com', '站长邮箱');
INSERT INTO `blog_webset` VALUES ('3', 'copyright', 'Copyright @ 2017 小聪个人技术博客', '版权信息');
INSERT INTO `blog_webset` VALUES ('4', 'keywords', '前端技术、技术交流、交流学习', '网站关键字');
INSERT INTO `blog_webset` VALUES ('5', 'description', '小聪个人技术博客', '网站描述');
INSERT INTO `blog_webset` VALUES ('6', 'aboutblog', '关于小聪个人博客，小聪个人博客创建于2015年7月6日，由LYC123创建，属于LYC123个人技术博客。', '关于我');
