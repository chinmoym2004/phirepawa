-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2014 at 08:04 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phirepawa_01`
--
CREATE DATABASE IF NOT EXISTS `phirepawa_01` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phirepawa_01`;

-- --------------------------------------------------------

--
-- Table structure for table `phirepawa_blog`
--

CREATE TABLE IF NOT EXISTS `phirepawa_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `tags` text NOT NULL,
  `uid` int(11) NOT NULL,
  `verified` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `phirepawa_blog`
--

INSERT INTO `phirepawa_blog` (`id`, `title`, `body`, `tags`, `uid`, `verified`, `created_at`, `updated_at`) VALUES
(2, 'title of my blog', 'kggbfjb hfbg jld;jkf;jdbg;djkf bjgbfdjkb', 'sample,test', 1, 1, '2014-02-02 09:07:34', '2014-02-02 14:39:27'),
(3, 'title of my blog', 'kggbfjb hfbg jld;jkf;jdbg;djkf bjgbfdjkb', 'sample,test', 1, 1, '2014-02-02 09:08:05', '2014-02-23 12:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `phirepawa_comment`
--

CREATE TABLE IF NOT EXISTS `phirepawa_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `combody` text NOT NULL,
  `doneby` int(11) NOT NULL,
  `context` varchar(20) NOT NULL,
  `contextid` int(11) NOT NULL,
  `verified` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `phirepawa_comment`
--

INSERT INTO `phirepawa_comment` (`id`, `combody`, `doneby`, `context`, `contextid`, `verified`, `created_at`, `updated_at`) VALUES
(1, 'ookoo okok okokokok okokokoko okokokokok kokok', 3, 'blog', 2, 1, '2014-02-26 17:45:21', '2014-02-26 13:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `phirepawa_faq`
--

CREATE TABLE IF NOT EXISTS `phirepawa_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `uid` int(11) NOT NULL,
  `verified` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phirepawa_faq`
--

INSERT INTO `phirepawa_faq` (`id`, `title`, `body`, `uid`, `verified`, `created_at`, `updated_at`) VALUES
(1, 'q1', 'hfjk  jgjfg bfdbg gdf\r\n', 1, 0, '2014-02-07 17:59:46', '2014-02-07 12:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `phirepawa_forum`
--

CREATE TABLE IF NOT EXISTS `phirepawa_forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topics` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `verified` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phirepawa_forum`
--

INSERT INTO `phirepawa_forum` (`id`, `topics`, `desc`, `created_by`, `verified`, `created_at`, `updated_at`) VALUES
(1, 'Enterprenureship', 'startup', 3, 0, '2014-02-21 18:50:37', '2014-02-21 13:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `phirepawa_gallery`
--

CREATE TABLE IF NOT EXISTS `phirepawa_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `year` int(11) NOT NULL,
  `filetitle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `uploadedBy` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phirepawa_siteinfo`
--

CREATE TABLE IF NOT EXISTS `phirepawa_siteinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about` text NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phirepawa_siteinfo`
--

INSERT INTO `phirepawa_siteinfo` (`id`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Bootstrap can be used in at least two ways: with the compiled CSS or with the source Less files. To compile the Less files,  for how to setup your development environment to run the necessary commands.', '', '2014-02-22 21:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `phirepawa_users`
--

CREATE TABLE IF NOT EXISTS `phirepawa_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `regno` bigint(20) NOT NULL,
  `password` text NOT NULL,
  `year` int(11) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `phirepawa_users`
--

INSERT INTO `phirepawa_users` (`id`, `email`, `firstname`, `lastname`, `regno`, `password`, `year`, `usertype`, `active`, `created_at`, `updated_at`) VALUES
(1, 'chinmoym2004@gmail.com', 'chinmoy', 'Maity', 1234456789100, '$2y$10$w3WHXsl0NpZK3adJiROuxOsCaUny5puYSeHtPKl2usrbdVdufqGtG', 0, 'common', 1, '2014-02-01 18:36:08', '2014-02-16 03:46:24'),
(2, 'admin@gmail.com', 'Admin', 'admin', 0, '$2y$10$t4xeYsLOULHXUvVplzVRK.enngZz5qhHSvTOUdnVnJdKzzH90IHE.', 0, 'super', 1, '2014-02-08 14:03:35', '2014-02-15 18:18:17'),
(3, 'd.viji137@gmail.com', 'Viji', 'Maity', 123456, '$2y$10$uXk18EXX5AnYoMIW0.EoheSaPhbhqFlb1s4ZqzW7ZRClds79JqTzS', 0, 'common', 1, '2014-02-16 04:08:05', '2014-02-16 04:08:30'),
(4, 'chinmoy.m@desto.co.in', 'Viji', 'Maity', 123456778, '$2y$10$jjl1/KGmO79lNmKBN3FVIOlYkJQf4UMioGcrrLNg1W8EPhSP2eHJW', 2004, 'common', 1, '2014-02-18 17:30:32', '2014-02-18 12:00:32');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
