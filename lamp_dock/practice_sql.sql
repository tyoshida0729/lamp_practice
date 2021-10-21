-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql
-- 生成日時: 2021 年 10 月 21 日 03:44
-- サーバのバージョン： 10.6.4-MariaDB-1:10.6.4+maria~focal
-- PHP のバージョン: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `sample`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `bought_detail`
--

CREATE TABLE `bought_detail` (
  `detail_id` int(11) NOT NULL COMMENT '購入明細ID',
  `order_id` int(11) NOT NULL COMMENT '注文番号',
  `item_id` int(11) NOT NULL COMMENT '商品ID',
  `price` int(11) NOT NULL COMMENT '値段',
  `stock` int(11) NOT NULL COMMENT '在庫数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- テーブルの構造 `bought_history`
--

CREATE TABLE `bought_history` (
  `order_id` int(11) NOT NULL COMMENT '注文番号',
  `user_id` int(11) NOT NULL COMMENT 'ユーザーID',
  `price` int(11) NOT NULL COMMENT '値段',
  `amount` int(11) NOT NULL COMMENT '購入数',
  `total_price` int(11) NOT NULL COMMENT '合計金額',
  `boughtd` datetime NOT NULL COMMENT '購入日時'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `bought_detail`
--
ALTER TABLE `bought_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- テーブルのインデックス `bought_history`
--
ALTER TABLE `bought_history`
  ADD PRIMARY KEY (`order_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `bought_detail`
--
ALTER TABLE `bought_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '購入明細ID';

--
-- テーブルの AUTO_INCREMENT `bought_history`
--
ALTER TABLE `bought_history`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '注文番号';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
