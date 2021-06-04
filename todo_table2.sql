-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 6 月 04 日 03:45
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_l05_11`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_table2`
--

CREATE TABLE `todo_table2` (
  `id` int(12) NOT NULL,
  `todo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `movie_summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `todo_table2`
--

INSERT INTO `todo_table2` (`id`, `todo`, `deadline`, `movie_summary`, `problem`, `created_at`, `updated_at`, `name`, `message`) VALUES
(1, '毎日大変だなー', '2021-06-23', 'スライスが治らない', '・肩の回転が悪いのか右にばっかりボールが飛ぶ', '2021-06-02 18:37:59', '2021-06-02 18:37:59', '', ''),
(2, 'いいんかい', '2021-06-24', 'スライスが治らない', '・肩の回転が悪いのか右にばっかりボールが飛ぶ', '2021-06-02 18:39:01', '2021-06-02 18:39:01', '', ''),
(3, 'たかじん', '2021-06-30', 'スライスが治らない', 'ごめん気が回らなかった', '2021-06-02 19:18:49', '2021-06-02 19:18:49', '', ''),
(4, '毎日大変だなー', '2021-06-16', 'スライスが治らない', '・肩の回転が悪いのか右にばっかりボールが飛ぶ', '2021-06-03 12:48:41', '2021-06-03 12:48:41', '', ''),
(5, 'たかじん', '2021-06-24', 'スライスが治らない', '・肩の回転が悪いのか右にばっかりボールが飛ぶ', '2021-06-03 16:53:17', '2021-06-03 16:53:17', '', ''),
(6, '毎日大変だなー', '2021-06-10', 'なんでだろう', 'なんでだろう', '2021-06-03 23:24:13', '2021-06-03 23:24:13', '', ''),
(7, 'スライスに悩んでます', '2021-06-24', 'スライス', '・肩の回転が悪いのか右にばっかりボールが飛ぶ', '2021-06-03 23:41:07', '2021-06-03 23:41:07', '', ''),
(8, 'スライスが止まらない', '2021-06-24', 'スライス', '・肩の回転が悪いのか右にばっかりボールが飛ぶ', '2021-06-03 23:41:32', '2021-06-03 23:41:32', '', '');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `todo_table2`
--
ALTER TABLE `todo_table2`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `todo_table2`
--
ALTER TABLE `todo_table2`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
