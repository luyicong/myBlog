-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2015-12-16 07:57:47
-- 服务器版本： 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `blog_comment`
--

CREATE TABLE `blog_comment` (
`id` int(10) NOT NULL,
  `content` varchar(500) NOT NULL,
  `pid` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `add_time` int(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `isShow` int(1) NOT NULL,
  `ip` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `blog_comment`
--

INSERT INTO `blog_comment` (`id`, `content`, `pid`, `email`, `add_time`, `author`, `isShow`, `ip`) VALUES
(1, '路过，路过', 0, '', 0, '隔壁老王', 0, ''),
(2, '暂停一下', 0, '', 0, '兔斯基', 0, ''),
(3, '你好', 1, '', 0, '会飞的鱼', 0, ''),
(4, 'helloword', 2, '', 0, '丘比龙', 0, ''),
(5, 'hello', 3, '', 0, '蜡笔小新', 0, ''),
(6, 'hellorword', 3, '', 1450247783, '漫步语林', 0, '0.0.0.0'),
(7, '围观,你们继续', 2, '', 1450248001, '维尼熊', 0, '0.0.0.0'),
(8, '[em_1]', 1, '', 1450248492, '小飞象', 0, '0.0.0.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
