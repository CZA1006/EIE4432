-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-12-06 11:32:45
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
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nickname` varchar(50) NOT NULL COMMENT '昵称',
  `profileimage` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '个人资料图像',
  `gender` varchar(50) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '性别',
  `birthday` varchar(30) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '生日',
  `email` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '邮箱',
  `password` char(33) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '密码',
  `phone` char(12) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '手机',
  `role` varchar(10) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '角色',
  `user_id` varchar(50) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '用户id'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='用户表' ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `nickname`, `profileimage`, `gender`, `birthday`, `email`, `password`, `phone`, `role`, `user_id`) VALUES
(5, 'test1', 'upload/22653260fc8b340315ce6f1f3c34f61f.png', 'Female', '2003-12-04', '12121@163.com', 'e10adc3949ba59abbe56e057f20f883e', '1', 'user', 'test1'),
(6, 'admin', 'upload/22653260fc8b340315ce6f1f3c34f61f.png', 'Female', '1994-12-17', '12@qq.com', '25e4ee4e9229397b6b17776bfceaf8e7', '123456', 'user', 'admin'),
(7, 'test2', 'upload/ff29b07e54538d002e096c65de569f17.png', 'Female', '1986-12-04', '12@qq.com', 'c4ca4238a0b923820dcc509a6f75849b', '1', 'user', 'test2'),
(8, 'test3', 'upload/5ad787ea5d9c210a7f3fafc7ae040ee3.png', 'Female', '1966-12-04', '34@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '12', 'user', 'test3'),
(9, 'test7', 'upload/29d4d28cdf801b44ca86a6d75c4c1fa7.png', 'Male', '2002-01-10', 'ah@163.com', 'e10adc3949ba59abbe56e057f20f883e', '12345678', 'user', 'test7'),
(10, 'MARK', 'upload/e4629e9b0b4dfdefed2ab6313c7b5bcf.png', 'Male', '2002-01-04', 'ah@163.com', 'e10adc3949ba59abbe56e057f20f883e', '12345678', 'user', 'test8'),
(11, '1', 'upload/17f35ee99350fe919e28efb9f38bd2f9.jpg', 'Male', '2022-12-06', '1@qq.com', 'c4ca4238a0b923820dcc509a6f75849b', '1', 'user', '123'),
(17, 'test12', 'upload/cad2b3713fbda2b77a79505c7d04d1f2.png', 'Male', '2002-10-06', 'zhuoangc@gmail.com', '78deec56af7da7d1296fbf144a5e018f', '60643581', 'user', 'test12'),
(19, 'Zhuoang_CAI', 'upload/5f0f62b956d3e091017c006c053c896a.png', 'Male', '2002-10-06', 'zhuoangc@gmail.com', '78deec56af7da7d1296fbf144a5e018f', '60643581', 'user', 'cza1006'),
(18, 'test15', 'upload/190fab6b91732a02db3e56a89c1b151d.png', 'Male', '2002-10-10', 'zhuoangc@gmail.com', '78deec56af7da7d1296fbf144a5e018f', '60643581', 'user', 'test15'),
(20, 'Nick', 'upload/6ee1a1f91f5e02cf4620726dbb9ea7c1.png', 'Male', '2002-10-06', 'zhuoang.cai@connect.polyu.hk', '78deec56af7da7d1296fbf144a5e018f', '60643581', 'user', 'Nick'),
(21, 'Grace', 'upload/44e88adac042bd751e543537fdbb0ca6.jpg', 'Female', '1988-02-03', '910581083@qq.com', '78deec56af7da7d1296fbf144a5e018f', '18516817256', 'user', 'Grace');

--
-- 转储表的索引
--

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
