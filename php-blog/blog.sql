-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Oct 17, 2017 at 09:42 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `blog`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `ads`
-- 

CREATE TABLE `ads` (
  `active1` int(11) NOT NULL,
  `active2` int(11) NOT NULL,
  `code1` text NOT NULL,
  `code2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `ads`
-- 

INSERT INTO `ads` VALUES (0, 0, 'Ø§Ù„Ø§Ø¹Ù„Ø§Ù† Ø§Ù„Ø§ÙˆÙ„', 'Ø§Ù„Ø§Ø¹Ù„Ø§Ù† Ø§Ù„Ø«Ø§Ù†ÙŠ');

-- --------------------------------------------------------

-- 
-- Table structure for table `block`
-- 

CREATE TABLE `block` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `ord` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `block`
-- 

INSERT INTO `block` VALUES (17, 'Ù‚Ø§Ø¦Ù…Ù‡', 'menu', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `category`
-- 

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL auto_increment,
  `c_title` varchar(255) NOT NULL,
  PRIMARY KEY  (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

-- 
-- Dumping data for table `category`
-- 

INSERT INTO `category` VALUES (27, 'Ø§Ù„Ø¬ÙˆØ§Ù„Ø§Øª');
INSERT INTO `category` VALUES (26, 'Ø§Ù„ÙƒÙ…Ø¨ÙŠÙˆØªØ±Ø§Øª');
INSERT INTO `category` VALUES (28, 'Ø§Ù„Ø³Ø§Ø¹Ø§Øª');
INSERT INTO `category` VALUES (29, 'Ø§Ù„Ø­ÙŠÙˆØ§Ù†Ø§Øª');
INSERT INTO `category` VALUES (30, 'Ø§Ù„Ø§Ø«Ø§Ø§Ø«');
INSERT INTO `category` VALUES (31, 'mobilats');

-- --------------------------------------------------------

-- 
-- Table structure for table `comments`
-- 

CREATE TABLE `comments` (
  `cm_id` int(11) NOT NULL auto_increment,
  `user` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `cm_active` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  PRIMARY KEY  (`cm_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `comments`
-- 

INSERT INTO `comments` VALUES (18, '24', ' Ù‡Ø°Ù‡ Ù‡ÙŠ Ø§Ù„ØªØ¯ÙˆÙŠÙ†Ù‡ Ø±Ù‚Ù… 4', 0, 30);
INSERT INTO `comments` VALUES (16, '24', 'coomment', 0, 29);
INSERT INTO `comments` VALUES (17, '24', 'coomment', 0, 29);
INSERT INTO `comments` VALUES (14, '24', '\r\n\r\nÙ‡Ø°Ù‡ Ù‡ÙŠ Ø§Ù„ØªØ¯ÙˆÙŠÙ†Ù‡ Ø±Ù‚Ù… 333\r\n', 0, 30);
INSERT INTO `comments` VALUES (15, '24', 'ØªØ¹Ù„ÙŠÙ‚ Ø§ÙˆÙ„ÙŠ \r\n', 0, 29);
INSERT INTO `comments` VALUES (10, '1', 'nice\r\n', 0, 29);
INSERT INTO `comments` VALUES (11, '1', 'nice\r\n', 0, 29);
INSERT INTO `comments` VALUES (12, '1', 'ncei\r\n', 0, 29);
INSERT INTO `comments` VALUES (13, '24', 'ØªØ¹Ù„ÙŠÙ‚ Ø§ÙˆÙ„ÙŠ\r\n', 0, 29);

-- --------------------------------------------------------

-- 
-- Table structure for table `config`
-- 

CREATE TABLE `config` (
  `s_name` varchar(255) NOT NULL,
  `s_url` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_desc` text NOT NULL,
  `s_key` text NOT NULL,
  `s_close` int(11) NOT NULL,
  `s_close_text` text NOT NULL,
  `s_copy` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `config`
-- 

INSERT INTO `config` VALUES ('Ù…ÙˆÙ‚Ø¹ Ø§Ø¨Ø±Ø§Ù‡ÙŠÙ… Ù†Ù‡Ù†ÙˆØ´ ', 'site namesite namesite name', 'site namesite namesite name', 'ÙˆÙˆØµÙ Ø§Ù„Ù…ÙˆÙ‚Ø¹.. Ù‡Ùˆ Ù…ÙˆÙ‚Ø¹ ØªÙƒÙ†ÙˆÙ„ÙˆØ¬ÙŠ', 'Ù‡Ø°Ù‡ Ù‡ÙŠ Ø§Ù„ÙƒÙ„Ù…Ø§Øª Ø§Ù„Ù…ÙØªØ§Ø­ÙŠÙ‡', 0, 'Ø­Ø§Ù„Ø© Ø§Ù„ØºÙ„Ù‚ ÙˆØ±Ø³Ø§Ù„Ø© Ø§Ù„ØºÙ„Ù‚ Ù‡Ù†Ø§ ', 'Ø¨Ø±Ù…Ø¬Ø© ÙˆØªØµÙ…ÙŠÙ… Ø¥Ø¨Ø±Ø§Ù‡ÙŠÙ… Ù†Ù‡Ù†ÙˆØ´');

-- --------------------------------------------------------

-- 
-- Table structure for table `posts`
-- 

CREATE TABLE `posts` (
  `p_id` int(11) NOT NULL auto_increment,
  `p_title` varchar(255) NOT NULL,
  `p_sub` longtext NOT NULL,
  `p_time` varchar(255) NOT NULL,
  `p_pic` varchar(255) NOT NULL,
  `p_user` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY  (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

-- 
-- Dumping data for table `posts`
-- 

INSERT INTO `posts` VALUES (28, 'Ø¬Ø§Ù…Ø¹Ø© Ø§Ù„Ø·ÙÙŠÙ„Ù‡ Ø§Ù„ØªÙ‚Ù†ÙŠÙ‡', '\r\n\r\n\r\n\r\n	Ø§Ù„Ø¬ÙˆØ§Ù„Ø§Øª\r\n	Ø§Ù„ÙƒÙ…Ø¨ÙŠÙˆØªØ±Ø§Øª\r\n	Ø§Ù„Ø³Ø§Ø¹Ø§Øª\r\n	Ø§Ù„Ø­ÙŠÙˆØ§Ù†Ø§Øª\r\n	Ø§Ù„Ø§Ø«Ø§Ø§Ø«\r\n	mobilats\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n\r\n\r\n \r\n\r\nAds Here\r\n\r\n&nbsp;\r\n\r\n\r\n\r\n\r\n\r\n	Ø§Ù„Ø±Ø¦ÙŠØ³ÙŠØ©\r\n	Ø®Ø±ÙˆØ¬\r\n	Ø§Ù„Ø¥Ø¯Ø§Ø±Ø©\r\n	Ø±Ø§Ø¨Ø· Ø§Ù„ØµÙØ­Ù‡\r\n	Ø±Ø§Ø¨Ø· Ø§Ù„ØµÙØ­Ù‡\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n\r\n\r\n&nbsp;\r\n\r\n&nbsp;\r\n&nbsp;\r\n\r\n&nbsp;\r\n\r\n\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n\r\n	\r\n		\r\n			Ø¹Ù†ÙˆØ§Ù† Ø§Ù„ØªØ¯ÙˆÙŠÙ†Ø©\r\n			\r\n		\r\n		\r\n			ØµÙˆØ±Ø© Ø§Ù„ØªØ¯ÙˆÙŠÙ†Ø©\r\n			\r\n		\r\n		\r\n			Ø§Ù„ØªØµÙ†ÙŠÙ:\r\n			&nbsp;\r\n		\r\n	\r\n\r\n\r\n\r\n\r\n\r\n\r\n	\r\n		\r\n			\r\n			\r\n			&nbsp;\r\n			\r\n			\r\n		\r\n	\r\n\r\n\r\n\r\n\r\n\r\n	\r\n		\r\n			&nbsp;\r\n		\r\n	\r\n\r\n\r\n\r\n	\r\n		\r\n			&nbsp;\r\n		\r\n	\r\n\r\n\r\n\r\n\r\n\r\nÙ…Ø¹Ù„ÙˆÙ…Ø§Øª Ø§Ù„Ø¹Ø¶Ùˆ:saleh\r\n\r\n\r\n\r\n\r\n	\r\n		\r\n			Ø¥Ø³Ù… Ø§Ù„Ø¹Ø¶ÙˆÙŠØ©:\r\n			saleh\r\n		\r\n		\r\n			Ø§Ù„Ø¨Ø±ÙŠØ¯ Ø§Ù„Ø§Ù„ÙƒØªØ±ÙˆÙ†ÙŠ:\r\n			saleh@saleh\r\n		\r\n		\r\n			Ø±Ù‚Ù… Ø§Ù„Ø¹Ø¶ÙˆÙŠØ©:\r\n			24\r\n		\r\n		\r\n			Ø§Ù„Ø±ØªØ¨Ù‡:\r\n			Ù…Ø¯ÙŠØ±\r\n		\r\n	\r\n\r\n\r\n\r\n\r\nØ¹Ù†ÙˆØ§Ù† Ø§Ù„Ù‚Ø§Ø¦Ù…Ù‡\r\n\r\n\r\nÙ…Ø­ØªÙˆÙ‰ Ø§Ù„Ù‚Ø§Ø¦Ù…Ù‡\r\n\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n&nbsp;\r\n\r\nØ¨Ø±Ù…Ø¬Ø© ÙˆØªØµÙ…ÙŠÙ… Ø¥Ø¨Ø±Ø§Ù‡ÙŠÙ… Ù†Ù‡Ù†ÙˆØ´\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '1507665856', 'http://localhost/blog/images/1.png', '24', '');
INSERT INTO `posts` VALUES (29, 'ØªØ¯ÙˆÙŠÙ†Ù‡ 2', 'ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2ØªØ¯ÙˆÙŠÙ†Ù‡ 2Ø±\r\n', '1507707716', 'http://localhost/blog/images/1.png', '24', '27');
INSERT INTO `posts` VALUES (30, 'ØªØ¯ÙˆÙŠÙ†Ù‡ Ø±Ù‚Ù… 3', 'Ù‡Ø°Ù‡ Ù‡ÙŠ Ø§Ù„ØªØ¯ÙˆÙŠÙ†Ù‡ Ø±Ù‚Ù… 333\r\n', '1507903129', 'http://localhost/blog/admincp.php?type=addpost#', '24', '30');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL auto_increment,
  `u_name` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_ulv` int(11) NOT NULL,
  `u_img` varchar(255) NOT NULL default 'http://localhost/blog/images/aa.jpg',
  PRIMARY KEY  (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (23, 'Anas', 'admin', 'Anas@anas', 2, 'http://localhost/blog/images/aa.jpg');
INSERT INTO `user` VALUES (24, 'saleh', 'admin', 'aasaleh@saleh', 3, 'http://localhost/blog/images/aa.jpg');
INSERT INTO `user` VALUES (1, 'admin', 'admin', 'admin@admin.com', 1, 'http://localhost/blog/images/aa.jpg');
INSERT INTO `user` VALUES (25, 'hamzaa', '1234569*', 'hamza@new', 1, 'http://localhost/blog/images/aa.jpg');
