-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2015 at 12:11 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `costkeeping`
--

INSERT INTO `costkeeping` (`id`, `mmName`, `meDate`, `mepName`, `mepPrice`, `timestamp`) VALUES
(1, 'Monirul', '12.02.2015', 'adfa', 23.00, '2015-02-17 07:07:30'),
(2, 'Rinto', '02/18/2015', 'adfa', 65.00, '2015-02-17 07:12:19'),
(3, 'Rinto', '02/13/2015', 'rsfea', 45.00, '2015-02-17 07:12:32'),
(4, 'Rinto', '02/13/2015', 'rsfea', 45.00, '2015-02-17 07:40:44'),
(5, 'Faruk', '02/12/2015', 'Shampoo', 158.00, '2015-02-17 07:41:31'),
(6, 'Monirul', '02/12/2015', 'Dudh', 250.00, '2015-02-17 07:41:43'),
(7, 'faruk', '02/17/2015', 'sadfa', 10.00, '2015-02-17 07:50:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costkeeping`
--
ALTER TABLE `costkeeping`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costkeeping`
--
ALTER TABLE `costkeeping`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
