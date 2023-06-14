-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-06-14 17:49:57
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `course`
--

-- --------------------------------------------------------

--
-- 資料表結構 `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `subject_no` varchar(32) NOT NULL,
  `create_id` int(11) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `close` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `class`
--

INSERT INTO `class` (`id`, `subject`, `subject_no`, `create_id`, `start_time`, `end_time`, `close`) VALUES
(1, '電腦', 'c001', 3, '2023-05-30', '2023-05-31', 0),
(2, '數學', 'c002', 2, '2023-05-31', '2023-06-10', 1),
(3, '電子學12', 'E012', 1, '2023-06-06', '2023-06-28', 1),
(6, '電玩', 'play', 1, '2023-06-13', '2023-06-16', 1),
(7, '英文', 'E0111', 1, '2023-06-15', '2023-06-30', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `c_select`
--

CREATE TABLE `c_select` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `c_select`
--

INSERT INTO `c_select` (`id`, `class_id`, `name`, `number`) VALUES
(15, 2, '白學生', 333335),
(22, 3, '白學生', 333335),
(25, 3, 'SQ太郎', 333336),
(28, 2, 'SQ太郎', 333336),
(29, 1, 'John,STD', 333334),
(31, 3, '林學生', 333333),
(34, 2, '林學生', 333333),
(35, 1, '白學生', 333335),
(37, 2, 'John,STD', 333334),
(38, 6, 'SQ太郎', 333336);

-- --------------------------------------------------------

--
-- 資料表結構 `img`
--

CREATE TABLE `img` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `img`
--

INSERT INTO `img` (`id`, `img`) VALUES
(1, '可以進行投票.jpg'),
(2, '註冊及登入系統01.jpg'),
(3, '可以進行投票.jpg'),
(4, '可以進行投票.jpg'),
(5, '可以進行投票.jpg'),
(6, '長條圖.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `number` int(16) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `acc` varchar(16) NOT NULL,
  `pw` varchar(16) NOT NULL,
  `power` varchar(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `student`
--

INSERT INTO `student` (`id`, `number`, `name`, `email`, `acc`, `pw`, `power`, `img`) VALUES
(1, 111111, '管理員', 'admin@admin.com', 'admin', 'admin', 'super', ''),
(2, 222222, '陳老師', 'teacher@teacher.com', 'chen', 'chen', 'teacher', ''),
(3, 222223, '黃老師', 'houng@teacher.com', 'houng', 'houng', 'teacher', ''),
(4, 333333, '林學生', 'lin@std.com', 'lin', 'lin', 'member', ''),
(5, 333334, 'John,STD', 'john@std.com', 'john', 'john', 'member', ''),
(6, 333335, '白學生', 'bai@std.com', 'bai', 'bai', 'member', ''),
(7, 333336, 'SQ太郎', 'sq@std.com', 'sq', 'sq', 'member', ''),
(8, 866340, '孔', '0008', 'kuo', 'kuo', 'member', ''),
(9, 9888, '黃文', 'houn', 'houn', 'houn', 'member', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `c_select`
--
ALTER TABLE `c_select`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `c_select`
--
ALTER TABLE `c_select`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `img`
--
ALTER TABLE `img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
