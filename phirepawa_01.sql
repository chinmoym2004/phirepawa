-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2014 at 02:18 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phirepawa_01`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `phirepawa_blog`
--

INSERT INTO `phirepawa_blog` (`id`, `title`, `body`, `tags`, `uid`, `verified`, `created_at`, `updated_at`) VALUES
(2, 'title of my blog', 'kggbfjb hfbg jld;jkf;jdbg;djkf bjgbfdjkb', 'sample,test', 1, 1, '2014-02-02 09:07:34', '2014-02-02 14:39:27'),
(3, 'title of my blog', 'kggbfjb hfbg jld;jkf;jdbg;djkf bjgbfdjkb', 'sample,test', 1, 1, '2014-02-02 09:08:05', '2014-02-23 12:14:09'),
(4, 'wtefrrggdgdgfgdfgfgdgdfg', 'dgdgdfgfgdffffffggffdg ffddsfgfdgdfgfdgdf g', 'sfgfgfdg,dfgdfgdgd g,fhfhgfhgf', 2, 1, '2014-03-21 07:08:42', '2014-03-21 07:08:55');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phirepawa_comment`
--

INSERT INTO `phirepawa_comment` (`id`, `combody`, `doneby`, `context`, `contextid`, `verified`, `created_at`, `updated_at`) VALUES
(1, 'ookoo okok okokokok okokokoko okokokokok kokok', 3, 'blog', 2, 1, '2014-02-26 17:45:21', '2014-02-26 13:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `phirepawa_event`
--

CREATE TABLE IF NOT EXISTS `phirepawa_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` text NOT NULL,
  `event_desc` text NOT NULL,
  `event_date` varchar(20) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `phirepawa_event`
--

INSERT INTO `phirepawa_event` (`id`, `event_title`, `event_desc`, `event_date`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'eqrferqf', 'qrfqffwe', '03/18/2014', 2, '2014-03-17 09:26:37', '2014-03-17 03:56:37'),
(2, 'dfefwsef', 'wfefwff', '03/20/2014', 2, '2014-03-20 04:17:00', '2014-03-19 22:47:00'),
(3, 'dfefwsef', 'wfefwff', '03/20/2014', 2, '2014-03-20 04:19:54', '2014-03-19 22:49:54');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `phirepawa_faq`
--

INSERT INTO `phirepawa_faq` (`id`, `title`, `body`, `uid`, `verified`, `created_at`, `updated_at`) VALUES
(1, 'q1', 'hfjk  jgjfg bfdbg gdf\r\n', 1, 0, '2014-02-07 17:59:46', '2014-02-07 12:29:46'),
(2, 'sgfxhfhgghg?', 'sfdbfcgc fhfh gj g', 2, 0, '2014-03-21 12:36:40', '2014-03-21 07:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `phirepawa_forum`
--

CREATE TABLE IF NOT EXISTS `phirepawa_forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `uid` int(11) NOT NULL,
  `verified` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `phirepawa_forum`
--

INSERT INTO `phirepawa_forum` (`id`, `title`, `body`, `uid`, `verified`, `created_at`, `updated_at`) VALUES
(1, 'Enterprenureship', 'startup', 3, 0, '2014-02-21 18:50:37', '2014-02-21 13:20:37'),
(2, 'testing yfvbvbh', 'hdbclkjdbckj lskjfv kvjsldfkjb kjdflk jbdkfljb;', 2, 0, '2014-03-21 12:43:48', '2014-03-21 07:13:48'),
(3, 'sdvsdffdvgd', 'fgdfgfdhggfh', 2, 0, '2014-03-21 12:44:17', '2014-03-21 07:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `phirepawa_gallery`
--

CREATE TABLE IF NOT EXISTS `phirepawa_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `event_date` varchar(20) NOT NULL,
  `filetitle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `uploadedBy` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `phirepawa_gallery`
--

INSERT INTO `phirepawa_gallery` (`id`, `fname`, `event_date`, `filetitle`, `description`, `uploadedBy`, `created_at`, `updated_at`) VALUES
(2, 'galleryimage_5316bf7f4513c.jpg', '05-03-2014', 'wewee  wewee ', 'qddss fdfd', 2, '2014-03-05 06:09:03', '2014-03-05 00:39:03'),
(3, 'galleryimage_53175aa361fad.PNG', '05-03-2014', 'despicable me', 'vvvvviji', 2, '2014-03-05 17:10:59', '2014-03-05 11:40:59'),
(4, 'galleryimage_531c4b544c4bc.jpg', '12-03-2014', 'nbznbncxb', 'xjnlnhglhnghjdh', 2, '2014-03-09 11:07:00', '2014-03-09 05:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `phirepawa_news`
--

CREATE TABLE IF NOT EXISTS `phirepawa_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` text NOT NULL,
  `newsdesc` text NOT NULL,
  `news_date` varchar(20) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `phirepawa_news`
--

INSERT INTO `phirepawa_news` (`id`, `news`, `newsdesc`, `news_date`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'dtyhyjjmnd d hty h', 'trrtshb rthh yht hthyy ty', '03/17/2014', 2, '2014-03-17 09:57:51', '2014-03-17 04:27:51'),
(2, 'rsthgfdb fggfh gfhfh fghhfh ', 'jhvlk  kmgblkjf klnl;khng n', '', 2, '2014-03-21 12:27:00', '2014-03-21 06:57:00'),
(3, 'kkjdlfdkbk kjbfgnb', 'kjjnkjnk knlk nlk lknlkn l;n lkn;nlkln', '03/21/2014', 2, '2014-03-21 12:27:35', '2014-03-21 06:57:35'),
(4, 'ggdfgg df gdfg f gf gfgfdgfdgfd ggdd gg', 'fdfgffffffffff gffffffggggggg ggggggfdsg sgfgfgffdfg gsdg dfg', '03/21/2014', 2, '2014-03-21 12:27:53', '2014-03-21 06:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `phirepawa_siteinfo`
--

CREATE TABLE IF NOT EXISTS `phirepawa_siteinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about` text NOT NULL,
  `context_type` varchar(10) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `phirepawa_siteinfo`
--

INSERT INTO `phirepawa_siteinfo` (`id`, `about`, `context_type`, `created_at`, `updated_at`) VALUES
(1, 'Bootstrap can be used in at least two ways: with the compiled CSS or with the source Less files. To compile the Less files,  for how to setup your development environment to run the necessary commands.', 'aboutus', '', '2014-03-04 16:43:35'),
(2, 'It''s the static content for home that can e change by admin anytime , testing', 'home', '', '2014-03-04 11:29:27');

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
  `useryear` int(11) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `phirepawa_users`
--

INSERT INTO `phirepawa_users` (`id`, `email`, `firstname`, `lastname`, `regno`, `password`, `useryear`, `usertype`, `active`, `created_at`, `updated_at`) VALUES
(1, 'chinmoym2004@gmail.com', 'chinmoy', 'Maity', 1234456789100, '$2y$10$w3WHXsl0NpZK3adJiROuxOsCaUny5puYSeHtPKl2usrbdVdufqGtG', 0, 'common', 1, '2014-02-01 18:36:08', '2014-02-16 03:46:24'),
(2, 'admin@gmail.com', 'Admin', 'admin', 0, '$2y$10$t4xeYsLOULHXUvVplzVRK.enngZz5qhHSvTOUdnVnJdKzzH90IHE.', 0, 'super', 1, '2014-02-08 14:03:35', '2014-02-15 18:18:17'),
(3, 'd.viji137@gmail.com', 'VIJI', 'Maity', 123456, '$2y$10$uXk18EXX5AnYoMIW0.EoheSaPhbhqFlb1s4ZqzW7ZRClds79JqTzS', 0, 'common', 1, '2014-02-16 04:08:05', '2014-02-27 16:17:18'),
(4, 'chinmoy.m@desto.co.in', 'Viji', 'Maity', 123456778, '$2y$10$jjl1/KGmO79lNmKBN3FVIOlYkJQf4UMioGcrrLNg1W8EPhSP2eHJW', 2004, 'common', 1, '2014-02-18 17:30:32', '2014-02-18 12:00:32'),
(5, 'uttam@gmail.com', 'uttam', 'ghorai', 12345667890123, '$2y$10$.ckgxEutcDoM.oZQpV3YwuJ46IFcN3oJWXSPgoSWJWKjlSqZRqWLG', 2012, 'common', 0, '2014-03-05 17:54:27', '2014-03-05 12:24:27'),
(6, 'uttam123@gmail.com', 'uttam', 'ghorai', 12345678, '$2y$10$WYAL8iEn9UWcsflAR7.hLOFM8F5pdLlGJcNuQQRNkuD/PmmfiUv2m', 2014, 'common', 1, '2014-03-09 12:46:31', '2014-03-15 20:55:07'),
(7, 'chinmoym2@gmail.com', 'chinmoy', 'DLJLJNL', 1654321765432, '$2y$10$bOc1Y/ACLff1LmX6ibiDBOCbwSfObzc9QN94rI9Pei2L/lmOUMrea', 2014, 'common', 1, '2014-03-09 13:15:29', '2014-03-09 09:47:24'),
(8, 'chinmo123@desto.co.in', 'Chinmoy', 'Maity', 7654321765432, '$2y$10$SCN.b7tzg.EfcgxRfqd8Me6ok/kOtMnMAC0.a8AMEv3Vb.xu1oS4G', 2014, 'common', 1, '2014-03-09 13:17:31', '2014-03-09 09:45:44'),
(9, 'chinmoym222@gmail.com', 'djhbbubo', 'kjbvkjvre', 0, '$2y$10$weczWtlHLr/F6lllkSOgxezQE29QW3uih0prclv39lhW6GZiDweUG', 0, 'common', 1, '2014-03-16 18:04:04', '2014-03-16 12:34:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
