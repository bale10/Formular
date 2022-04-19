-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2022 at 10:40 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `services`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `surname` text NOT NULL,
  `id_passport` varchar(10) NOT NULL,
  `phone` int(15) NOT NULL,
  `adress` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `surname`, `id_passport`, `phone`, `adress`) VALUES
(1, 'vew', 'verw', '8975287', 987456123, 'vewr'),
(2, 'tw4eger', 'gtewgter', '897528799', 123456789, 'ghtre'),
(3, 'hytr', 'nytr', '8975287', 987456123, 'nyetrnr');

-- --------------------------------------------------------

--
-- Table structure for table `payment_calculation`
--

CREATE TABLE IF NOT EXISTS `payment_calculation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `check_in_date` time DEFAULT NULL,
  `check_out_date` time DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `payment_method` tinyint(4) DEFAULT NULL,
  `name_card` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_card` int(16) DEFAULT NULL,
  `cvc` int(5) DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `payment_calculation`
--

INSERT INTO `payment_calculation` (`id`, `check_in_date`, `check_out_date`, `price`, `payment_method`, `name_card`, `number_card`, `cvc`, `exp_date`) VALUES
(1, '10:55:00', '11:55:00', 25, 0, 'bitola', 123456789, 123, '2022-03-24'),
(2, '10:56:00', '11:56:00', 5555, 0, 'vfewr', 8796, 789, '2022-03-25'),
(22, '10:03:00', '23:03:00', 12, 1, '', 0, 0, '2022-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_information`
--

CREATE TABLE IF NOT EXISTS `vehicle_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `vehicle_information`
--

INSERT INTO `vehicle_information` (`id`, `type`, `model`) VALUES
(1, 'Limusina', 'arteon'),
(5, 'Limusina', 'arteonn');
