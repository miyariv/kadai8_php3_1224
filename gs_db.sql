-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022 年 12 月 16 日 00:07
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE `gs_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `content`, `date`) VALUES
(1, '宮嵜涼志', 'test@example.com', '内容', '2022-12-10 14:54:47'),
(2, '田中たろう', 'tanaka@example.com', '田中の内容', '2022-12-10 14:58:38'),
(3, '山田たろう', 'yamada@example.com', '山田の内容', '2022-12-10 14:59:36'),
(4, '橋本たろう', 'hashimoto@example.com', '橋本の内容', '2022-12-10 15:00:04'),
(5, 'あああ', 'aa@gmail.com', 'あああ', '2022-12-10 16:05:37'),
(6, 'aaa', 'aa@gmail.com', 'aa', '2022-12-10 16:05:43'),
(7, '名前', 'ee@gmail.com', '内容内容', '2022-12-10 16:38:30'),
(8, '<script>alert(\'test\')</script>', '', '', '2022-12-10 17:07:59'),
(9, '名前', 'メール', 'コメント', '2022-12-16 06:09:53');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `bookName` varchar(64) NOT NULL,
  `bookURL` text NOT NULL,
  `bookComment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `bookName`, `bookURL`, `bookComment`, `date`) VALUES
(1, '坂の上の雲', 'aaaa', '面白い。', '2022-12-16 06:27:59'),
(2, '坂の上の雲', '/aaa', '面白い', '2022-12-16 06:28:17'),
(3, '嫌われる勇気', 'https:///bb/', '難しかった', '2022-12-16 06:33:25'),
(4, 'あああ', 'ああああ', 'ああああ', '2022-12-16 06:49:20'),
(5, 'iiii', 'iiii', 'iii', '2022-12-16 07:07:16'),
(6, 'iiii', 'iiii', 'iii', '2022-12-16 07:07:36'),
(7, 'iiii', 'iiii', 'iii', '2022-12-16 07:07:51'),
(8, 'iiii', 'iiii', 'iii', '2022-12-16 07:08:21'),
(9, 'iiii', 'iiii', 'iii', '2022-12-16 07:09:01'),
(10, 'uuuuu', 'uuuuu', 'uuuuuu', '2022-12-16 07:12:49');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_an_table`
--
ALTER TABLE `gs_an_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_an_table`
--
ALTER TABLE `gs_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
