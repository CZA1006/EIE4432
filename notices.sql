-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-12-06 11:33:22
-- 服务器版本： 10.4.21-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `Project`
--

-- --------------------------------------------------------

--
-- 表的结构 `notices`
--

CREATE TABLE `notices` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0 COMMENT '用户id',
  `mold` varchar(10) NOT NULL DEFAULT '' COMMENT '类型',
  `date_time` varchar(25) NOT NULL DEFAULT '' COMMENT '日期',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '地址',
  `contacts` varchar(255) NOT NULL DEFAULT '' COMMENT '联系人',
  `descs` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `img_path` varchar(255) NOT NULL DEFAULT '' COMMENT '图像',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `reply` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `notices`
--

INSERT INTO `notices` (`id`, `user_id`, `mold`, `date_time`, `address`, `contacts`, `descs`, `img_path`, `title`, `reply`, `state`) VALUES
(23, 20, 'LOST', '2022-12-05', 'HKU', '23976763', 'I lost my black bottle yesterday.', 'upload/4421c3c19ba5fc733fa585b5562875b0.jpeg', 'Black Bottle', 'I found it, plz contact me by WhatsApp: 60643581', 'Completed'),
(25, 21, 'FOUND', '2022-09-03', 'CUHK Lib', '39762876', 'I found an Airpods Pro in lib.', 'upload/6d96f8e2bc99ff1c0b8790b9b69444a3.jpeg', 'Airpods Pro', '', 'Undetermined'),
(22, 20, 'FOUND', '2022-10-03', 'Kowloon Station', '23972765', 'I found an iPad with a keyboard', 'upload/6715d4453af6dbe48ded4d34797902ba.jpg', 'iPad Air with Keyboard', '', 'Undetermined'),
(20, 19, 'FOUND', '2022-10-03', 'PolyU CD638', '39473876', 'I found a Harry Potter Book in PolyU', 'upload/b03d85227ae78961e432514cf9e33cbd.jpg', 'Harry Potter Book', '', 'Undetermined'),
(18, 19, 'LOST', '2022-10-05', 'polyu lib', '39847382', 'I lost my Macbook. Its color is gray.', 'upload/bf05ed7dcaec89101dfc446690aa1e42.jpeg', 'MacBook Pro', '', 'Undetermined'),
(19, 19, 'LOST', '2022-12-05', 'Hong Kong Park', '237678765', 'I lost my iphone 14 yesterday.', 'upload/2ddc5ff63a888fd1aa5b9dd371831d87.jpg', 'iPhone 14', '', 'Undetermined');

--
-- 转储表的索引
--

--
-- 表的索引 `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
