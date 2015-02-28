-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2015 at 10:03 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `messexpense`
--

-- --------------------------------------------------------

--
-- Table structure for table `costkeeping`
--

CREATE TABLE IF NOT EXISTS `costkeeping` (
`id` int(12) NOT NULL,
  `mmName` varchar(255) NOT NULL,
  `meDate` varchar(255) NOT NULL,
  `mepName` varchar(255) NOT NULL,
  `mepPrice` double(10,2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `costkeeping`
--

INSERT INTO `costkeeping` (`id`, `mmName`, `meDate`, `mepName`, `mepPrice`, `timestamp`) VALUES
(1, 'Monirul', '02/11/2015', 'afdafda', 3.00, '2015-02-20 21:19:44'),
(2, 'Monirul', '02/11/2015', 'afdafda', 3.00, '2015-02-20 21:19:48'),
(3, 'Rinto', '02/11/2015', 'afdafda', 3.00, '2015-02-20 21:19:53'),
(4, 'Rinto', '02/11/2015', 'afdafda', 3.00, '2015-02-20 21:19:55'),
(5, 'Faruk', '02/11/2015', 'afdafda', 3.00, '2015-02-20 21:19:58'),
(6, 'Faruk', '02/11/2015', 'afdafda', 3.00, '2015-02-20 21:20:00'),
(7, 'Rinto', '02/11/2015', 'Film', 250.00, '2015-02-20 21:21:10'),
(8, 'Rinto', '02/11/2015', 'Film', 250.00, '2015-02-20 21:22:48'),
(9, 'Faruk', '02/11/2015', 'Film', 250.00, '2015-02-20 21:23:08'),
(10, 'Monirul', '02/11/2015', 'Film', 250.00, '2015-02-20 21:23:40'),
(11, 'Rinto', '02/25/2015', 'pee', 50.00, '2015-02-20 22:10:30'),
(12, 'Faruk', '02/19/2015', 'jhgjuhg', 1000.00, '2015-02-20 22:10:55'),
(13, 'Monirul', '02/24/2015', 'se', 52.00, '2015-02-21 00:47:01'),
(14, 'Rinto', '02/18/2015', 'moo', 52.00, '2015-02-21 07:14:22'),
(15, '', '123', '', 0.00, '2015-02-25 22:36:00'),
(16, 'Monirul', '02/25/2015', 'Noodols', 20.00, '2015-02-27 08:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE IF NOT EXISTS `total` (
`id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stot` double(12,2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`id`, `name`, `stot`) VALUES
(1, 'Rinto', 608.00),
(2, 'Monirul', 328.00),
(3, 'Faruk', 1256.00);

-- --------------------------------------------------------

--
-- Table structure for table `tz_members`
--

CREATE TABLE IF NOT EXISTS `tz_members` (
`id` int(11) NOT NULL,
  `usr` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pass` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `regIP` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Rinto', '123'),
(2, 'Faruk', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costkeeping`
--
ALTER TABLE `costkeeping`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tz_members`
--
ALTER TABLE `tz_members`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `usr` (`usr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costkeeping`
--
ALTER TABLE `costkeeping`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tz_members`
--
ALTER TABLE `tz_members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
