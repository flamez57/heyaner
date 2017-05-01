-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-10-14 09:41:50
-- 服务器版本： 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heyaner`
--

-- --------------------------------------------------------

--
-- 表的结构 `hl_brand`
--

CREATE TABLE `hl_brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_pic` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '图片地址',
  `url` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '图片链接地址',
  `interaction_id` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT '关联id',
  `status` int(2) NOT NULL COMMENT '状态 0 正常  1禁用',
  `where` int(2) NOT NULL DEFAULT '1' COMMENT '显示位置 1主页2手艺页',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `hl_brand`
--

INSERT INTO `hl_brand` (`id`, `brand_pic`, `url`, `interaction_id`, `status`, `where`, `create_time`, `update_time`) VALUES
(1, '/uploads/20160918/1222221219122219.jpg', '0', 0000000000, 0, 1, 1473937470, 1474194098),
(2, '/uploads/20160918/1222221237122237.jpg', '0', 0000000000, 0, 1, 1474194146, 0),
(3, '/uploads/20160918/1222221253122253.jpg', '0', 0000000000, 0, 1, 1474194163, 0),
(4, '/uploads/20160918/1227271204122704.jpg', 'detail?fid=1', 0000000000, 0, 2, 1474194180, 1475496792),
(5, '/uploads/20160918/1227271220122720.jpg', 'detail?fid=2', 0000000000, 0, 2, 1474194214, 1475496780),
(6, '/uploads/20160918/1227271235122735.jpg', 'detail?fid=3', 0000000000, 0, 2, 1474194254, 1475496753);

-- --------------------------------------------------------

--
-- 表的结构 `hl_clothes`
--

CREATE TABLE `hl_clothes` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '衣服id',
  `cloth_name` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '衣服名称',
  `model` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '型号',
  `material` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '制作材料',
  `fashion` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '款式',
  `belong` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '归属店铺',
  `cloth_pic` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '衣服图片',
  `create_time` int(10) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `update_time` int(10) NOT NULL DEFAULT '0' COMMENT '修改时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `hl_clothes`
--

INSERT INTO `hl_clothes` (`id`, `cloth_name`, `model`, `material`, `fashion`, `belong`, `cloth_pic`, `create_time`, `update_time`) VALUES
(1, '礼服', 'XXl', '纯棉布', '大宽', '本店', '/uploads/20160918/1233331212123312.jpg', 1474158095, 1474194742),
(2, '裙子', 'XL', '尼龙', '宽松', '上海店', '/uploads/20160918/1233331259123359.jpg', 1474194798, 0),
(3, '', '', '', '', '', '/uploads/20160918/1233331259123359.jpg', 0, 0),
(4, '', '', '', '', '', '/uploads/20160918/1233331259123359.jpg', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hl_clothesphoto`
--

CREATE TABLE `hl_clothesphoto` (
  `id` int(10) UNSIGNED NOT NULL,
  `coat_id` int(2) NOT NULL COMMENT '衣服id',
  `photo` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '图片地址',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `hl_clothesphoto`
--

INSERT INTO `hl_clothesphoto` (`id`, `coat_id`, `photo`, `create_time`, `update_time`) VALUES
(1, 1, '/uploads/20161003/0622220654062254.jpg', 1475468554, 0),
(2, 2, '/uploads/20161003/0709090745070945.jpg', 1475471294, 0),
(3, 2, '/uploads/20161003/0720200718072018.jpg', 1475472000, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hl_collect`
--

CREATE TABLE `hl_collect` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '藏品名',
  `pic` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '藏品图片',
  `fashion` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '款式',
  `material` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '材质',
  `type` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '类型',
  `craft` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '工艺',
  `show_time` int(10) NOT NULL DEFAULT '0' COMMENT '展览时间',
  `show_address` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '展览地址',
  `intro` text CHARACTER SET utf8 NOT NULL COMMENT '简单介绍',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `hl_collect`
--

INSERT INTO `hl_collect` (`id`, `name`, `pic`, `fashion`, `material`, `type`, `craft`, `show_time`, `show_address`, `intro`, `create_time`, `update_time`) VALUES
(1, '上衣', '/uploads/20160918/1218181248121848.jpg', 'Xll', '亚麻', 'ISO认证', '扎染', 20161010, '北京市昌平区', '这是一个古老的衣服，收藏价值极高', 1474176563, 1474193698),
(2, '外套', '/uploads/20160918/1221211220122120.jpg', '平板', '尼龙', '批头', '刺绣', 20160915, '北京市昌平区', '这是一个古老的刺绣', 1474193983, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hl_shop`
--

CREATE TABLE `hl_shop` (
  `id` int(2) UNSIGNED NOT NULL COMMENT '店铺id',
  `store` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '店铺名称',
  `address` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '店铺地址',
  `phone` varchar(13) CHARACTER SET utf8 NOT NULL COMMENT '联系方式',
  `shop_time` varchar(15) CHARACTER SET utf8 NOT NULL DEFAULT 'am10:00-pm10:00' COMMENT '营业时间',
  `store_pic` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '店面图片',
  `intro` text COLLATE utf8_bin NOT NULL COMMENT '店铺简单介绍',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `hl_shop`
--

INSERT INTO `hl_shop` (`id`, `store`, `address`, `phone`, `shop_time`, `store_pic`, `intro`, `create_time`, `update_time`) VALUES
(1, '本店', '北京市', '010-8888888', 'am10:00-pm10:00', '/uploads/20160918/1235351240123540.jpg', '这个店里的衣服可好可齐全了', 1474181457, 1474194852),
(2, '上海店', '上海', '1245789652', 'am10:00-pm10:00', '/uploads/20160918/1236361243123643.jpg', '这个店里的衣服质量好', 1474194947, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hl_shophoto`
--

CREATE TABLE `hl_shophoto` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(2) NOT NULL COMMENT '店铺id',
  `photo` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '图片地址',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `hl_shophoto`
--

INSERT INTO `hl_shophoto` (`id`, `shop_id`, `photo`, `create_time`, `update_time`) VALUES
(1, 1, '/uploads/20160918/1237371206123706.jpg', 1474195008, 0),
(2, 1, '/uploads/20160918/1237371226123726.jpg', 1474195031, 0),
(3, 1, '/uploads/20160918/1237371249123749.jpg', 1474195049, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hl_skill`
--

CREATE TABLE `hl_skill` (
  `id` int(3) UNSIGNED NOT NULL,
  `skill` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '工艺名',
  `pic` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '手艺图片',
  `kind` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '种类',
  `use` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '用途',
  `intro` text COLLATE utf8_bin NOT NULL COMMENT '简介',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `hl_skill`
--

INSERT INTO `hl_skill` (`id`, `skill`, `pic`, `kind`, `use`, `intro`, `create_time`, `update_time`) VALUES
(1, '刺绣', '/uploads/20160918/1226261222122622.jpg', '刺绣', '穿', '这是一门好技术', 1474120437, 1474194299),
(2, '扎染', '/uploads/20160918/1228281238122838.jpg', 'AA', '制衣', '这是一门即将失传的技术', 1474194463, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hl_skillart`
--

CREATE TABLE `hl_skillart` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '活动主题',
  `pic` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '活动图片',
  `art_time` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT '活动时间',
  `art_address` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '活动地点',
  `art_intro` text CHARACTER SET utf8 NOT NULL COMMENT '活动简介',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `hl_skillart`
--

INSERT INTO `hl_skillart` (`id`, `title`, `pic`, `art_time`, `art_address`, `art_intro`, `create_time`, `update_time`) VALUES
(1, '一起来刺绣', '/uploads/20160918/1230301239123039.jpg', 0020161010, '北京', '一万人参加的活动', 1473774246, 1474194591),
(2, '万人刺绣大赛', '/uploads/20160918/1229291241122941.jpg', 0020161010, '北京', '一万个人在哪里刺绣', 1474194532, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hl_skiller`
--

CREATE TABLE `hl_skiller` (
  `id` int(5) UNSIGNED NOT NULL COMMENT '手艺人id',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '艺人名字',
  `pic` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '手艺人头像',
  `skill` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '技艺',
  `workage` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '工龄',
  `intro` text CHARACTER SET utf8 NOT NULL COMMENT '简介',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `hl_skiller`
--

INSERT INTO `hl_skiller` (`id`, `name`, `pic`, `skill`, `workage`, `intro`, `create_time`, `update_time`) VALUES
(1, '李白', '/uploads/20160918/1231311227123127.jpg', '刺绣', '5', '这个人牛逼哄哄的', 1474194649, 0),
(2, '杜甫', '/uploads/20160918/1232321204123204.jpg', '扎染', '10', '这人更是牛逼哄哄的', 1474194691, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hl_thing`
--

CREATE TABLE `hl_thing` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '标题',
  `content` text CHARACTER SET utf8 NOT NULL COMMENT '内容',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `hl_thing`
--

INSERT INTO `hl_thing` (`id`, `title`, `content`, `create_time`, `update_time`) VALUES
(1, '1994年', '布言布语第一家店成立于，位于学院气息浓郁的北大校园附近。做衣服给自己穿，这是设计师最初的设计想法。如果有多余的面料就多做几件挂到店里，等待有同样喜好的人把它买走。小店开放式的货架，像自己家的衣橱一样的，可以随意翻开。', 1476427649, 0),
(2, '2000年', '因为北大校园周边环境改造，小店也被迫搬迁。布言布语因此有了工体店，位于工人体育场北门对面，是一幢独立的二层楼。开店之初种下的爬山虎，现在已经爬满了整幢楼。不言不语也在这里深深的扎下了根。', 1476427694, 0),
(3, '2006年', '布言布语有了第一家分店---丽都店，位于丽都饭店南门对面的林荫小道内，店后面环境优美的丽都公园成了店面装饰的一部分，为丽都店舔色不少。即使不买衣服到这里坐坐也是件很惬意的事。', 1476427724, 0),
(4, '2009年', '布言布语有了第二家分店---上海店，位于上海话剧艺术中心旁边，后院的英式老建筑，是上海店一道亮丽的风景。\r\n    19年静静地成长，布言布语的风格更加鲜明，默默的坚持自己。“心灵栖息之地”这是一位顾客在留言本上所写的。通过衣服传达了一种生活方式---素朴、宁静、自在……\r\n“无论我走到哪里，无论我多沮丧，我告诉自己，我至少可以去小店……\r\n倾诉时…\r\n灵魂可以停落在树梢\r\n象一点光斑闪耀\r\n也可以不言的悄然飞过\r\n不被人知道\r\n而我美丽的衣裳\r\n会拌着荒草与泥土\r\n在万古的轮回中\r\n不语…', 1476427777, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hl_things`
--

CREATE TABLE `hl_things` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '标题',
  `content` text CHARACTER SET utf8 NOT NULL COMMENT '内容',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `hl_things`
--

INSERT INTO `hl_things` (`id`, `title`, `content`, `create_time`, `update_time`) VALUES
(1, '通知', '大家都来看看衣服吧', 1474073922, 1474193621),
(2, '公告', '这是一个牛逼的网站', 1474193665, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hl_user`
--

CREATE TABLE `hl_user` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父id',
  `username` char(70) NOT NULL COMMENT '用户名',
  `password` char(70) NOT NULL COMMENT '密码',
  `type` tinyint(4) NOT NULL DEFAULT '4' COMMENT '类型(1:总店,2:门店,3:管理员)',
  `created_time` int(11) NOT NULL COMMENT '注册时间',
  `updated_time` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '封禁状态，0禁止1正常',
  `login_ip` char(20) NOT NULL COMMENT '登录ip',
  `login_time` int(11) NOT NULL COMMENT '上一次登录时间',
  `login_count` int(10) NOT NULL DEFAULT '0' COMMENT '登陆次数',
  `update_password` int(10) NOT NULL DEFAULT '0' COMMENT '修改密码次数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='登录管理表';

--
-- 转存表中的数据 `hl_user`
--

INSERT INTO `hl_user` (`id`, `pid`, `username`, `password`, `type`, `created_time`, `updated_time`, `status`, `login_ip`, `login_time`, `login_count`, `update_password`) VALUES
(2, 0, '福来', '$2y$13$Iqi2VISH8.eJLyyqrYO5luE/g/nuwCIrUrPe5RsvB3xZalRUlOgOO', 4, 1473339910, 1473339910, 1, '::1', 1473339910, 0, 0),
(3, 0, 'admin', '$2y$13$e2.S5G8fOZ4cc6TOjhIkC.A.BoMJZnw377rb4FHqTnilsMWz5/Z7y', 4, 1475497423, 1475497423, 1, '::1', 1475497423, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hl_brand`
--
ALTER TABLE `hl_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_clothes`
--
ALTER TABLE `hl_clothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_clothesphoto`
--
ALTER TABLE `hl_clothesphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_collect`
--
ALTER TABLE `hl_collect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_shop`
--
ALTER TABLE `hl_shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_shophoto`
--
ALTER TABLE `hl_shophoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_skill`
--
ALTER TABLE `hl_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_skillart`
--
ALTER TABLE `hl_skillart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_skiller`
--
ALTER TABLE `hl_skiller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_thing`
--
ALTER TABLE `hl_thing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_things`
--
ALTER TABLE `hl_things`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_user`
--
ALTER TABLE `hl_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `username` (`username`),
  ADD KEY `type` (`type`),
  ADD KEY `status` (`status`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `hl_brand`
--
ALTER TABLE `hl_brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `hl_clothes`
--
ALTER TABLE `hl_clothes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '衣服id', AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `hl_clothesphoto`
--
ALTER TABLE `hl_clothesphoto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `hl_collect`
--
ALTER TABLE `hl_collect`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `hl_shop`
--
ALTER TABLE `hl_shop`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '店铺id', AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `hl_shophoto`
--
ALTER TABLE `hl_shophoto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `hl_skill`
--
ALTER TABLE `hl_skill`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `hl_skillart`
--
ALTER TABLE `hl_skillart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `hl_skiller`
--
ALTER TABLE `hl_skiller`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '手艺人id', AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `hl_things`
--
ALTER TABLE `hl_things`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `hl_user`
--
ALTER TABLE `hl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
