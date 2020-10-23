-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2020 年 06 月 18 日 15:51
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `id13987975_final_report`
--

-- --------------------------------------------------------

--
-- 資料表結構 `apply`
--

CREATE TABLE `apply` (
  `anum` int(11) NOT NULL,
  `date` date NOT NULL,
  `period` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `purpose` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) NOT NULL,
  `pnum` int(11) NOT NULL,
  `admit` tinyint(1) NOT NULL DEFAULT 0,
  `pay` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `apply`
--

INSERT INTO `apply` (`anum`, `date`, `period`, `purpose`, `uid`, `pnum`, `admit`, `pay`) VALUES
(1, '2020-06-12', '1,2,3', '', 2, 1, 1, 1),
(2, '2020-06-12', '8,9,10', '', 1, 1, 1, 0),
(3, '2020-07-09', '1,3,5,7,9,11,13,15', '123456', 2, 11, 1, 0),
(4, '2020-06-11', '1', '', 2, 4, 1, 0),
(5, '2020-07-08', '15', '', 7, 4, 1, 1),
(6, '2020-06-10', '1,6,15', 'happy', 8, 11, 1, 1),
(7, '2020-06-25', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15', '我爽', 10, 4, 0, 1),
(8, '2017-07-26', '3,4,5', 'haha', 11, 16, 1, 0),
(9, '2020-06-02', '10', '', 8, 34, 0, 0),
(10, '2020-06-13', '1', '', 13, 4, 0, 0),
(11, '2020-06-18', '13,14', 'e04', 2, 4, 0, 0),
(12, '2020-06-19', '1,2', '', 1, 17, 0, 0),
(13, '2020-06-14', '1,2,3,4,5,6', 'party', 8, 10, 0, 0),
(14, '2020-06-22', '3,11', 'qqq', 14, 11, 0, 0),
(15, '2020-06-22', '1', 'dating', 15, 13, 1, 1),
(16, '2020-06-17', '13', '跳舞', 16, 1, 1, 1),
(17, '2020-06-18', '1', 'haha', 17, 35, 0, 0),
(18, '2020-06-19', '1,2,3,4', '<3', 17, 2, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `info`
--

CREATE TABLE `info` (
  `num` int(10) NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(10) NOT NULL,
  `init_date` date NOT NULL,
  `deadline` date NOT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT 1,
  `top` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `info`
--

INSERT INTO `info` (`num`, `title`, `content`, `uid`, `init_date`, `deadline`, `visible`, `top`) VALUES
(1, '安安你好', '尖尖派大星', 1, '2020-06-06', '2020-06-17', 0, 0),
(2, '人生好難', '嗚嗚嗚心好累好想死\r\n還敢把公告當個版阿\r\n09畢業快樂!!!!!!!\r\n我也好想畢業QAQ', 1, '2020-06-06', '2020-06-08', 1, 0),
(3, 'ㄎㄎㄎㄎ', '唉唷 不錯 這個屌', 1, '2020-06-06', '2020-06-06', 1, 0),
(4, '我好想睡覺', '睡睡睡睡睡\r\n萬萬稅', 1, '2020-06-07', '2020-06-08', 1, 0),
(5, '哈哈', '愚蠢', 1, '2020-06-07', '2020-06-11', 1, 0),
(6, 'ㄟㄟㄟㄟㄟ', '餓了', 1, '2020-06-07', '2020-06-10', 1, 0),
(7, '幹你娘通通去死', '去死吧!', 1, '2020-06-09', '2020-06-10', 1, 0),
(8, '幹', '你看不到我', 1, '2020-06-09', '2020-06-08', 1, 0),
(9, '小九好可愛', '張小菱也好可愛?????????', 1, '2020-06-11', '2020-06-11', 0, 0),
(10, '世界大美女年年', 'YABEEEEEEEEEEE', 1, '2020-06-11', '2020-06-13', 0, 0),
(11, '世界大美女年年', 'yabeeeeeee', 1, '2020-06-11', '2020-06-25', 1, 0),
(12, '網頁掰掰掰掰掰', '嘔嘔嘔嘔嘔嘔嘔', 1, '2020-06-12', '2020-06-13', 0, 0),
(13, '現在幾點', 'ㄉ123', 1, '2020-06-12', '2020-06-19', 1, 0),
(14, '加油好嗎', '123456', 1, '2020-06-12', '2020-06-19', 1, 0),
(15, '現在時刻４：３３', '哎', 1, '2020-06-12', '2020-06-20', 0, 0),
(16, '現在時刻5：00', '人？', 1, '2020-06-12', '2020-06-19', 1, 0),
(17, 'PHP FINAL PROJECT', '哈囉大家好我悶4第二組\r\n做的是空間借用(94借場+借教室啦)\r\n看了有沒有很想借場打打球或借教室開開會呢\r\n沒有\r\n好\r\n我知道了\r\nQQQQQQQ', 9, '2020-06-18', '2020-06-30', 1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `period`
--

CREATE TABLE `period` (
  `num` int(5) NOT NULL,
  `init_time` time NOT NULL,
  `end_time` time NOT NULL,
  `times` int(15) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `period`
--

INSERT INTO `period` (`num`, `init_time`, `end_time`, `times`) VALUES
(1, '07:00:00', '07:59:59', 11),
(2, '08:00:00', '08:59:59', 5),
(3, '09:00:00', '09:59:59', 7),
(4, '10:00:00', '10:59:59', 4),
(5, '11:00:00', '11:59:59', 4),
(6, '12:00:00', '12:59:59', 3),
(7, '13:00:00', '13:59:59', 2),
(8, '14:00:00', '14:59:59', 2),
(9, '15:00:00', '15:59:59', 3),
(10, '16:00:00', '16:59:59', 3),
(11, '17:00:00', '17:59:59', 3),
(12, '18:00:00', '18:59:59', 1),
(13, '19:00:00', '19:59:59', 4),
(14, '20:00:00', '20:59:59', 2),
(15, '21:00:00', '21:59:59', 4);

-- --------------------------------------------------------

--
-- 資料表結構 `place`
--

CREATE TABLE `place` (
  `pnum` int(10) NOT NULL,
  `pname` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `place`
--

INSERT INTO `place` (`pnum`, `pname`, `Location`) VALUES
(1, '管院演講廳', '管理學院'),
(2, '圖資107', '圖書資訊大樓'),
(3, '綜合籃球場(甲)', '運動場館'),
(4, '學宿排球場', '運動場館'),
(5, '羽球場', '運動場館'),
(6, '理院107', '理學院'),
(7, '工院B101', '工學院'),
(8, '綜合101', '綜合大樓'),
(9, '法院101', '法學院'),
(10, '風雨球場', '運動場館'),
(11, '網球場', '運動場館'),
(12, '管院201', '管理學院'),
(13, '桌球室', '運動場館'),
(14, '管院202', '管理學院'),
(15, '管院203', '管理學院'),
(16, '管院204', '管理學院'),
(17, '管院205', '管理學院'),
(18, '管院206', '管理學院'),
(19, '法院102', '法學院'),
(20, '法院103', '法學院'),
(21, '法院104', '法學院'),
(22, '法院105', '法學院'),
(23, '法院106', '法學院'),
(24, '法院107', '法學院'),
(25, '法院108', '法學院'),
(26, '法院109', '法學院'),
(27, '綜合102', '綜合大樓'),
(28, '綜合103', '綜合大樓'),
(29, '綜合104', '綜合大樓'),
(30, '綜合105', '綜合大樓'),
(31, '綜合106', '綜合大樓'),
(32, '綜合107', '綜合大樓'),
(33, '綜合108', '綜合大樓'),
(34, '綜合109', '綜合大樓'),
(35, '人社院101', '人文社會科學院'),
(36, '人社院102', '人文社會科學院');

-- --------------------------------------------------------

--
-- 資料表結構 `unvalid`
--

CREATE TABLE `unvalid` (
  `num` int(15) NOT NULL,
  `pnum` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `date` date NOT NULL,
  `period` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `unvalid`
--

INSERT INTO `unvalid` (`num`, `pnum`, `uid`, `date`, `period`, `status`) VALUES
(1, 1, 2, '2020-06-12', 1, 0),
(2, 1, 2, '2020-06-12', 2, 0),
(3, 1, 2, '2020-06-12', 3, 0),
(4, 1, 1, '2020-06-12', 8, 0),
(5, 1, 1, '2020-06-12', 9, 0),
(6, 1, 1, '2020-06-12', 10, 0),
(7, 11, 2, '2020-07-09', 1, 0),
(8, 11, 2, '2020-07-09', 3, 0),
(9, 11, 2, '2020-07-09', 5, 0),
(10, 11, 2, '2020-07-09', 7, 0),
(11, 11, 2, '2020-07-09', 9, 0),
(12, 11, 2, '2020-07-09', 11, 0),
(13, 11, 2, '2020-07-09', 13, 0),
(14, 11, 2, '2020-07-09', 15, 0),
(15, 4, 2, '2020-06-11', 1, 0),
(16, 4, 7, '2020-07-08', 15, 0),
(17, 11, 8, '2020-06-10', 1, 0),
(18, 11, 8, '2020-06-10', 6, 0),
(19, 11, 8, '2020-06-10', 15, 0),
(20, 4, 10, '2020-06-25', 1, 0),
(21, 4, 10, '2020-06-25', 2, 0),
(22, 4, 10, '2020-06-25', 3, 0),
(23, 4, 10, '2020-06-25', 4, 0),
(24, 4, 10, '2020-06-25', 5, 0),
(25, 4, 10, '2020-06-25', 6, 0),
(26, 4, 10, '2020-06-25', 7, 0),
(27, 4, 10, '2020-06-25', 8, 0),
(28, 4, 10, '2020-06-25', 9, 0),
(29, 4, 10, '2020-06-25', 10, 0),
(30, 4, 10, '2020-06-25', 11, 0),
(31, 4, 10, '2020-06-25', 12, 0),
(32, 4, 10, '2020-06-25', 13, 0),
(33, 4, 10, '2020-06-25', 14, 0),
(34, 4, 10, '2020-06-25', 15, 0),
(35, 16, 11, '2017-07-26', 3, 0),
(36, 16, 11, '2017-07-26', 4, 0),
(37, 16, 11, '2017-07-26', 5, 0),
(38, 34, 8, '2020-06-02', 10, 0),
(39, 4, 13, '2020-06-13', 1, 0),
(40, 4, 2, '2020-06-18', 13, 0),
(41, 4, 2, '2020-06-18', 14, 0),
(42, 17, 1, '2020-06-19', 1, 0),
(43, 17, 1, '2020-06-19', 2, 0),
(44, 10, 8, '2020-06-14', 1, 0),
(45, 10, 8, '2020-06-14', 2, 0),
(46, 10, 8, '2020-06-14', 3, 0),
(47, 10, 8, '2020-06-14', 4, 0),
(48, 10, 8, '2020-06-14', 5, 0),
(49, 10, 8, '2020-06-14', 6, 0),
(50, 11, 14, '2020-06-22', 3, 0),
(51, 11, 14, '2020-06-22', 11, 0),
(52, 13, 15, '2020-06-22', 1, 0),
(53, 1, 16, '2020-06-17', 13, 0),
(54, 35, 17, '2020-06-18', 1, 0),
(55, 2, 17, '2020-06-19', 1, 0),
(56, 2, 17, '2020-06-19', 2, 0),
(57, 2, 17, '2020-06-19', 3, 0),
(58, 2, 17, '2020-06-19', 4, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `uid` int(10) NOT NULL,
  `auth` tinyint(1) NOT NULL DEFAULT 0,
  `sid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paswd` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `depart` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `logintimes` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`uid`, `auth`, `sid`, `paswd`, `name`, `phone`, `email`, `depart`, `logintimes`) VALUES
(1, 1, 'A1073306', 'admin', 'administrator', '01234567', 'hi@mail.com', 'IM', 15),
(2, 0, 'a1073399', 'phpqq', 'YABEE', '0912345678', 'nukim@mail', 'MANAGEMENT', 6),
(3, 0, 'a1073312', 'aries0330', '阿王', '0965234210', 'hihi@mail', 'MANAGEMENT', 2),
(4, 0, 'a1093301', 'a1093301', '小笨蛋', '0912765413', 'llll@iikk', 'SCIENCE', 0),
(5, 0, 'superuser', 'super', 'SUPERMAN', '0985215421', 'kk@@', 'SCIENCE', 0),
(7, 0, 'A1073347', '1073347', 'hahoon', '0970612017', 'A1073347@mail', 'MANAGEMENT', 0),
(8, 0, 'A1063326', '123456', '張小菱', '0912345678', 'a1063326@mail.nuk.edu.tw', 'MANAGEMENT', 3),
(9, 3, 'NUKIM111', 'nukim111', 'superuser', '012345678', 'nukim111@mail.com', 'IM', 16),
(10, 0, 'A1073346', 'A1073346', 'ET', '0989570260', 'a1073346@mail.nuk.edu.tw', 'MANAGEMENT', 0),
(11, 0, 'a1073315', 'a1073315', '陳漂亮', '0905886109', 'ra8919ratw@gmail.com', 'MANAGEMENT', 0),
(12, 0, 'helloworld', 'helloworld', 'helloworld', '0123456789', 'hello@mail', 'FACULTY', 0),
(13, 0, 'A1063316', '333', '333', '0925310596', 'j9841842@gmail.com', 'CHSS', 1),
(14, 0, 'linda', '00000000', 'linda', '0989436000', 'linda@gmail', 'FACULTY', 2),
(15, 0, 'a1063310', '123456', '分分', '0977777777', '777@gmail', 'MANAGEMENT', 2),
(16, 0, 'a1073317', 'a1073317', '黃郁涵', '0970400322', 'a1073317@mail.nuk.edu.tw', 'MANAGEMENT', 1),
(17, 0, 'a1073300', 'a1073300', 'halo', '0123456789', 'zxcvbn123@mail', 'ENG', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`anum`),
  ADD KEY `period` (`period`,`uid`,`pnum`),
  ADD KEY `period_2` (`period`),
  ADD KEY `date` (`date`);

--
-- 資料表索引 `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`num`),
  ADD KEY `uid` (`uid`),
  ADD KEY `uid_2` (`uid`);

--
-- 資料表索引 `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`num`);

--
-- 資料表索引 `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`pnum`);

--
-- 資料表索引 `unvalid`
--
ALTER TABLE `unvalid`
  ADD PRIMARY KEY (`num`),
  ADD KEY `pnum` (`pnum`),
  ADD KEY `period` (`period`),
  ADD KEY `uid` (`uid`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `auth` (`auth`,`sid`),
  ADD UNIQUE KEY `sid` (`sid`),
  ADD KEY `name` (`name`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `apply`
--
ALTER TABLE `apply`
  MODIFY `anum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `info`
--
ALTER TABLE `info`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `period`
--
ALTER TABLE `period`
  MODIFY `num` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `place`
--
ALTER TABLE `place`
  MODIFY `pnum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `unvalid`
--
ALTER TABLE `unvalid`
  MODIFY `num` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- 資料表的限制式 `unvalid`
--
ALTER TABLE `unvalid`
  ADD CONSTRAINT `unvalid_ibfk_1` FOREIGN KEY (`pnum`) REFERENCES `place` (`pnum`),
  ADD CONSTRAINT `unvalid_ibfk_2` FOREIGN KEY (`period`) REFERENCES `period` (`num`),
  ADD CONSTRAINT `unvalid_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
