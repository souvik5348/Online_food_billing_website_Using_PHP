-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2022 at 09:58 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_detail`
--

DROP TABLE IF EXISTS `food_detail`;
CREATE TABLE IF NOT EXISTS `food_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_detail`
--

INSERT INTO `food_detail` (`id`, `rid`, `name`, `price`, `category`) VALUES
(1, 1, 'Chicken Biriyani', 250, 'Biriyani'),
(2, 1, 'Mutton Biriyani', 300, 'Biriyani'),
(3, 1, 'Chicken Chaap', 175, 'Cury'),
(4, 2, 'Chicken Biriyani', 240, 'Biriyani'),
(5, 2, 'Chicken Chap', 175, 'Cury'),
(6, 2, 'Panner', 185, 'Veg'),
(7, 2, 'Noodles', 200, 'Chinese'),
(8, 3, 'Chicken Kosha', 250, 'Curry'),
(9, 3, 'Mutton Kosha', 350, 'Cury'),
(10, 3, 'Chicken Thali', 450, 'Thali'),
(11, 4, 'Chicken Biriyani', 195, 'Biriyani'),
(12, 4, 'Mutton Biriyani', 275, 'Biriyani'),
(13, 4, 'Chicken Resala', 375, 'Curry'),
(14, 4, 'Chicken Kosha', 145, 'Curry'),
(15, 4, 'souvik', 450, 'das'),
(16, 5, 'Chicken Biriyani', 200, 'Biriyani'),
(17, 5, 'Chicken Kosha', 175, 'Curry');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE IF NOT EXISTS `order_detail` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `oprice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cnumber` int(10) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`oid`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`oid`, `rid`, `oname`, `oprice`, `quantity`, `cname`, `cnumber`, `payment`, `date`) VALUES
(1, 3, 'Chicken Kosha', 250, 2, 'Souvik das', 856152132, 'Google pay', '2022-04-02 22:30:11'),
(2, 3, 'Chicken Kosha', 250, 2, 'Souvik das', 856152132, 'Google pay', '2022-04-01 00:00:00'),
(3, 4, 'Chicken Biriyani', 195, 2, 'Souvik', 748614132, 'By Cash', '2022-04-06 00:00:00'),
(4, 4, 'Chicken Biriyani', 275, 2, 'Souvik das', 432753, 'Debit Card', '2022-04-11 00:00:00'),
(5, 4, 'Chicken Biriyani', 275, 2, 'Souvik das', 432753, 'Debit Card', '2022-04-11'),
(6, 5, 'Chicken Biriyani', 200, 2, 'Souvik das', 78945655, 'Google pay', '2021-12-22'),
(7, 4, 'Chicken Biriyani', 195, 2, 'Souvik das', 875435546, 'GPAY', '2000-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

DROP TABLE IF EXISTS `payment_detail`;
CREATE TABLE IF NOT EXISTS `payment_detail` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `cnum` int(10) NOT NULL,
  `expmonth` varchar(30) NOT NULL,
  `expyear` int(10) NOT NULL,
  `cvv` int(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`pid`, `name`, `cnum`, `expmonth`, `expyear`, `cvv`) VALUES
(4, 'Souvik Das', 45565435, 'janiary', 2022, 456),
(5, 'Souvik Das', 465435436, 'january', 4568, 4546);

-- --------------------------------------------------------

--
-- Table structure for table `restrudent_detail`
--

DROP TABLE IF EXISTS `restrudent_detail`;
CREATE TABLE IF NOT EXISTS `restrudent_detail` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `raddress` varchar(50) NOT NULL,
  `region` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zcode` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restrudent_detail`
--

INSERT INTO `restrudent_detail` (`rid`, `username`, `password`, `rname`, `raddress`, `region`, `country`, `state`, `city`, `zcode`, `ip`) VALUES
(1, 'ARSA1', 'arsalan', 'ARSALAN', 'No 1. Town Colony ,Panihati', 'Asia', 'India', 'West Bengal', 'Kollkata', 700114, ''),
(2, 'ARSA1', 'arsalan', 'ARSALAN', 'No 1. Town Colony ,Panihati', 'Asia', 'India', 'West Bengal', 'Kollkata', 700114, ''),
(3, 'KOSE1', 'kosekasha', 'Kose Kosha', 'Rasmoni More, Pansila', 'Asia', 'India', 'West Bengal', 'Kollkata', 700114, ''),
(4, 'DADA1', 'dadaboudi', 'DADA BOUDI HOTEL', 'No 1. Town Colony ,Panihati', 'Asia', 'India', 'West Bengal', 'Kollkata', 700114, '::1'),
(5, 'AMINI5', 'aminia', 'AMINIA', 'Nalin Streeet, kollkata', 'Asia', 'India', 'West Bengal', 'Kolkata', 700110, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `rname` varchar(30) NOT NULL,
  `message` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `name`, `phone`, `email`, `city`, `rname`, `message`) VALUES
(1, 'Souvik Das', 0, 'souvikdas@gmail.com', '', 'AISMIT', 'YUMMY'),
(2, 'Souvik Das', 54654654, 'souvikdas@gmail.com', 'Kollkata', 'AISMIT', 'YUMMY'),
(3, 'Souvik Das', 543543, 'souvikdas@gmail.com', 'Kollkata', 'DADA BOUDI HOTEL', 'YUMMY');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_detail`
--
ALTER TABLE `food_detail`
  ADD CONSTRAINT `food_detail_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `restrudent_detail` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `restrudent_detail` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
