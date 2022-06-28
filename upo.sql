-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 09:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `full_name` varchar(225) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `received_at` datetime NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `full_name`, `email`, `received_at`, `phone`) VALUES
(1, 'Cameron Allen', 'kytedywuqi@mailinator.com', '2022-06-17 01:29:23', '+1 (632) 246-6937'),
(2, 'Kenneth Richards', 'tilyp@mailinator.com', '2022-06-17 01:29:52', '+1 (286) 475-6368'),
(3, 'Jasmine Cross', 'meveb@mailinator.com', '2022-06-17 01:30:28', '+1 (795) 144-7264'),
(4, 'Winter Knowles', 'sogymitol@mailinator.com', '2022-06-17 01:30:59', '+1 (667) 605-7382'),
(5, 'Serina Lewis', 'jecabo@mailinator.com', '2022-06-17 01:31:46', '+1 (592) 693-6223'),
(6, 'Kellie Abbott', 'lapofi@mailinator.com', '2022-06-17 01:32:31', '+1 (275) 277-7247'),
(7, 'Tanner Valentine', 'cunozahag@mailinator.com', '2022-06-17 01:32:51', '+1 (584) 227-3694'),
(8, 'Colorado Dalton', 'nocinyhum@mailinator.com', '2022-06-17 01:53:15', '+1 (364) 547-6715'),
(9, 'Talon Molina', 'woborap@mailinator.com', '2022-06-17 10:03:04', '+1 (148) 226-4886'),
(10, 'Dakota Noble', 'kixyqop@mailinator.com', '2022-06-18 12:39:10', '+1 (705) 494-4185');

-- --------------------------------------------------------

--
-- Table structure for table `become_prof`
--

CREATE TABLE `become_prof` (
  `id` int(11) NOT NULL,
  `full_name` varchar(225) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `received_at` datetime NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(255) NOT NULL,
  `grade` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `become_prof`
--

INSERT INTO `become_prof` (`id`, `full_name`, `email`, `received_at`, `phone`, `grade`) VALUES
(1, 'Talon Molina', 'woborap@mailinator.com', '2022-06-17 10:03:04', '+1 (148) 226-4886', 'BAC +3');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) NOT NULL,
  `slug` text DEFAULT NULL,
  `title` text NOT NULL,
  `excerpt` text DEFAULT NULL,
  `content` longtext NOT NULL,
  `cat` text DEFAULT NULL,
  `published_at` datetime NOT NULL DEFAULT current_timestamp(),
  `cover` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `slug`, `title`, `excerpt`, `content`, `cat`, `published_at`, `cover`) VALUES
(1, 'Rerum-sit-voluptati', 'Rerum sit voluptati', NULL, '<p><big>? Note: For a better visual appearance, use the cover image with a size of 1000 x 1000 px</big></p>', 'Zachary Mccormick', '2022-06-16 14:53:58', 333),
(3, 'Earum-quos-et-iste-i', 'Earum quos et iste i', NULL, '<p>Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste ivEarum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste iEarum quos et iste i&nbsp;Earum quos et iste iEarum quos et iste i</p>', 'Chloe Orr', '2022-06-17 00:48:04', 337);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_title` varchar(225) NOT NULL,
  `slug` varchar(225) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_title`, `slug`) VALUES
(1, 'Zachary Mccormick', 'Zachary-Mccormick'),
(2, 'Chloe Orr', 'Chloe-Orr');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(225) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comments` longtext CHARACTER SET utf8 NOT NULL,
  `received_at` datetime NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `full_name`, `email`, `comments`, `received_at`, `phone`, `subjects`) VALUES
(36, 'Dakota Noble', 'kixyqop@mailinator.com', 'Libero soluta minus ', '2022-06-18 12:39:10', '+1 (705) 494-4185', 'Voluptate ut ipsa f'),
(35, 'Barrett Wall', 'wymah@mailinator.com', 'Voluptatem Qui dolo', '2022-06-17 01:09:13', '+1 (443) 109-3098', 'Delectus deserunt v');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) NOT NULL,
  `slug` text DEFAULT NULL,
  `title` text NOT NULL,
  `excerpt` text DEFAULT NULL,
  `content` longtext NOT NULL,
  `date` date NOT NULL,
  `cover` bigint(20) NOT NULL,
  `location` varchar(40) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `slug`, `title`, `excerpt`, `content`, `date`, `cover`, `location`, `start_time`, `end_time`) VALUES
(1, 'AZE', 'AZE', NULL, '<p>Me old mucker argy-bargy I&#39;m telling pear shaped Jeffrey super brilliant, I excuse my French blatant gormless up the duff, cup of char up the kyver tosser cras happy days. The full monty he nicked it he legged it bum bag burke plastered arse over tit it&#39;s your round owt to do with me pardon you, on your bike mate hanky panky mush cuppa only a quid crikey Jeffrey skive off, faff about so I said what a load of rubbish blag David knees up cockup cras. Argy-bargy give us a bell wellies gosh skive off old bodge cheesed off A bit of how&#39;s your father off his nut bamboozled, bugger say I&#39;m telling morish bleeding boot up the kyver nice one brilliant, ruddy jolly good fanny around chinwag amongst brown bread arse brolly. Horse play it&#39;s all gone to pot codswallop easy peasy mush knees up down the pub jolly good nice one tosser it&#39;s your round lurgy, I vagabond barmy off his nut only a quid so I said is gosh Charles blow off, pardon me chip shop Richard spiffing skive off bleeding get stuffed mate porkies amongst the full monty.</p>\r\n', '2022-06-09', 330, 'Safi', '15:00:00', '18:00:00'),
(3, 'Hamid', 'Hamid', NULL, '<p>Arrange a meeting with hajar for tomorrow</p>', '2007-09-21', 336, 'Kesh', '08:52:00', '13:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` longtext CHARACTER SET utf8 NOT NULL,
  `response` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `response`) VALUES
(1, 'Who view my content ?', '<p>Our authors are incredible storytellers driven by their passion for technology. They blend their knowledge and enthusiasm to communicate concepts and demonstrate</p>'),
(5, 'Youssef', '<p>Apr&egrave;s 5 ans d&rsquo;&eacute;tude en m&eacute;decineYoyssef a d&eacute;cider d&rsquo;arr&ecirc;t&eacute; sa formation acad&eacute;mique et faire sa passion, FROM ZERO TO HERO ; Youssef nous parle des d&eacute;tailles de son parcourt et partage son &eacute;nergie avec les jeunes.</p>'),
(4, 'Mollit dolore volupt', '<p>By submitting this form you will create a new FAQ</p>');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `location` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 NOT NULL,
  `fb_link` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ig_link` varchar(255) CHARACTER SET utf8 NOT NULL,
  `youtube` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `phone`, `location`, `email`, `fb_link`, `ig_link`, `youtube`) VALUES
(1, 'cefixocetu@mailinato', 'jojula@mailinator.com', 'gimiwatak@mailinator.com', 'pybaw@mailinator.com', 'vexise@mailinator.com', 'cadegohozy@mailinator.com');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `file_size` varchar(10) NOT NULL,
  `file_location` text NOT NULL,
  `media_type` varchar(100) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `file_name`, `file_type`, `file_size`, `file_location`, `media_type`, `thumbnail`, `timestamp`, `is_deleted`) VALUES
(198, 'testi3.png', 'png', '11.216KB', '../uploads/testi3.png', 'image', '../uploads/thumbnails/testi3.png', '2021-01-30 16:14:22', 0),
(243, 'product-5.jpg', 'jpg', '7.48KB', '../uploads/product-5.jpg', 'image', '../uploads/thumbnails/product-5.jpg', '2021-04-17 20:51:41', 0),
(238, 'Image_4-removebg-preview.png', 'png', '2.414KB', '../uploads/Image_4-removebg-preview.png', 'image', '../uploads/thumbnails/Image_4-removebg-preview.png', '2021-04-17 20:34:58', 0),
(242, 'product-6.jpg', 'jpg', '10.485KB', '../uploads/product-6.jpg', 'image', '../uploads/thumbnails/product-6.jpg', '2021-04-17 20:51:14', 0),
(241, 'product-8.jpg', 'jpg', '9.897KB', '../uploads/product-8.jpg', 'image', '../uploads/thumbnails/product-8.jpg', '2021-04-17 20:50:46', 0),
(240, 'product-7.jpg', 'jpg', '14.3KB', '../uploads/product-7.jpg', 'image', '../uploads/thumbnails/product-7.jpg', '2021-04-17 20:48:21', 0),
(244, 'product-1.jpg', 'jpg', '10.561KB', '../uploads/product-1.jpg', 'image', '../uploads/thumbnails/product-1.jpg', '2021-04-23 00:40:40', 0),
(245, 'Potato-Free-Download-PNG.png', 'png', '626.081KB', '../uploads/Potato-Free-Download-PNG.png', 'image', '../uploads/thumbnails/Potato-Free-Download-PNG.png', '2021-04-23 01:35:46', 0),
(246, 'Groupe 11.png', 'png', '76.024KB', '../uploads/Groupe 11.png', 'image', '../uploads/thumbnails/Groupe 11.png', '2021-04-23 01:37:48', 0),
(247, 'Groupe 11.png', 'png', '62.404KB', '../uploads/Groupe 11.png', 'image', '../uploads/thumbnails/Groupe 11.png', '2021-04-23 01:38:58', 0),
(248, 'xx.png', 'png', '76.024KB', '../uploads/xx.png', 'image', '../uploads/thumbnails/xx.png', '2021-04-23 01:40:22', 0),
(255, 'oeufs-plateaux-de-30.jpg', 'jpg', '21.957KB', '../uploads/oeufs-plateaux-de-30.jpg', 'image', '../uploads/thumbnails/oeufs-plateaux-de-30.jpg', '2021-04-24 17:44:07', 0),
(256, 'post-45.jpg', 'jpg', '53.896KB', '../uploads/post-45.jpg', 'image', '../uploads/thumbnails/post-45.jpg', '2022-02-09 20:57:11', 0),
(271, 'product-01.jpg', 'jpg', '7.414KB', '../uploads/product-01.jpg', 'image', '../uploads/thumbnails/product-01.jpg', '2022-02-11 20:19:10', 0),
(266, 'Countdown-03.jpg', 'jpg', '12.883KB', '../uploads/Countdown-03.jpg', 'image', '../uploads/thumbnails/Countdown-03.jpg', '2022-02-10 20:23:02', 0),
(267, 'image-box-07.jpg', 'jpg', '12.262KB', '../uploads/image-box-07.jpg', 'image', '../uploads/thumbnails/image-box-07.jpg', '2022-02-10 20:28:57', 0),
(268, 'banner-07.jpg', 'jpg', '38.353KB', '../uploads/banner-07.jpg', 'image', '../uploads/thumbnails/banner-07.jpg', '2022-02-10 20:30:23', 0),
(269, 'banner-16.jpg', 'jpg', '21.615KB', '../uploads/banner-16.jpg', 'image', '../uploads/thumbnails/banner-16.jpg', '2022-02-10 20:34:33', 0),
(270, 'banner-14.jpg', 'jpg', '31.699KB', '../uploads/banner-14.jpg', 'image', '../uploads/thumbnails/banner-14.jpg', '2022-02-10 20:36:37', 0),
(264, 'product-10.jpg', 'jpg', '11.177KB', '../uploads/product-10.jpg', 'image', '../uploads/thumbnails/product-10.jpg', '2022-02-10 10:43:39', 0),
(272, 'product-02.jpg', 'jpg', '12.807KB', '../uploads/product-02.jpg', 'image', '../uploads/thumbnails/product-02.jpg', '2022-02-11 20:19:19', 0),
(273, 'product-04.jpg', 'jpg', '25.786KB', '../uploads/product-04.jpg', 'image', '../uploads/thumbnails/product-04.jpg', '2022-02-11 20:19:33', 0),
(274, 'product-15.jpg', 'jpg', '27.727KB', '../uploads/product-15.jpg', 'image', '../uploads/thumbnails/product-15.jpg', '2022-02-11 20:19:46', 0),
(275, 'xx.png', 'png', '251.586KB', '../uploads/xx.png', 'image', '../uploads/thumbnails/xx.png', '2022-02-12 00:21:56', 0),
(276, 'testimonial-11.png', 'png', '6.076KB', '../uploads/testimonial-11.png', 'image', '../uploads/thumbnails/testimonial-11.png', '2022-02-12 10:57:01', 0),
(277, 'product-13.jpg', 'jpg', '13.828KB', '../uploads/product-13.jpg', 'image', '../uploads/thumbnails/product-13.jpg', '2022-02-12 14:23:13', 0),
(295, 'case-studies-v1-img11.jpg', 'jpg', '80.545KB', '../uploads/case-studies-v1-img11.jpg', 'image', '../uploads/thumbnails/case-studies-v1-img11.jpg', '2022-02-15 10:39:10', 0),
(293, 'footer-instagram-img3.jpg', 'jpg', '4.254KB', '../uploads/footer-instagram-img3.jpg', 'image', '../uploads/thumbnails/footer-instagram-img3.jpg', '2022-02-15 10:38:44', 0),
(302, 'testimonial-v1-img1.jpg', 'jpg', '20.881KB', '../uploads/testimonial-v1-img1.jpg', 'image', '../uploads/thumbnails/testimonial-v1-img1.jpg', '2022-02-15 14:49:01', 0),
(284, 'testimonial-v1-img1.jpg', 'jpg', '20.881KB', '../uploads/testimonial-v1-img1.jpg', 'image', '../uploads/thumbnails/testimonial-v1-img1.jpg', '2022-02-15 10:20:59', 0),
(285, 'testimonial-v1-img2.jpg', 'jpg', '16.841KB', '../uploads/testimonial-v1-img2.jpg', 'image', '../uploads/thumbnails/testimonial-v1-img2.jpg', '2022-02-15 10:21:17', 0),
(286, 'testimonial-v1-img1.jpg', 'jpg', '20.881KB', '../uploads/testimonial-v1-img1.jpg', 'image', '../uploads/thumbnails/testimonial-v1-img1.jpg', '2022-02-15 10:24:12', 0),
(287, 'testimonial-v1-img2.jpg', 'jpg', '16.841KB', '../uploads/testimonial-v1-img2.jpg', 'image', '../uploads/thumbnails/testimonial-v1-img2.jpg', '2022-02-15 10:24:33', 0),
(288, 'testimonial-v1-img2.jpg', 'jpg', '16.841KB', '../uploads/testimonial-v1-img2.jpg', 'image', '../uploads/thumbnails/testimonial-v1-img2.jpg', '2022-02-15 10:26:29', 0),
(289, 'testimonial-v1-img1.jpg', 'jpg', '20.881KB', '../uploads/testimonial-v1-img1.jpg', 'image', '../uploads/thumbnails/testimonial-v1-img1.jpg', '2022-02-15 10:26:43', 0),
(290, 'why-choose-one-img1.jpg', 'jpg', '88.925KB', '../uploads/why-choose-one-img1.jpg', 'image', '../uploads/thumbnails/why-choose-one-img1.jpg', '2022-02-15 10:26:57', 0),
(294, 'case-studies-v1-img11.jpg', 'jpg', '80.545KB', '../uploads/case-studies-v1-img11.jpg', 'image', '../uploads/thumbnails/case-studies-v1-img11.jpg', '2022-02-15 10:38:56', 0),
(296, 'case-studies-v1-img8.jpg', 'jpg', '69.109KB', '../uploads/case-studies-v1-img8.jpg', 'image', '../uploads/thumbnails/case-studies-v1-img8.jpg', '2022-02-15 10:39:24', 0),
(299, 'testimonial-v1-img2.jpg', 'jpg', '16.841KB', '../uploads/testimonial-v1-img2.jpg', 'image', '../uploads/thumbnails/testimonial-v1-img2.jpg', '2022-02-15 10:49:12', 0),
(306, 'team-one-img-2.jpg', 'jpg', '29.566KB', '../uploads/team-one-img-2.jpg', 'image', '../uploads/thumbnails/team-one-img-2.jpg', '2022-02-15 20:22:38', 0),
(303, 'faq-v1-img.jpg', 'jpg', '80.38KB', '../uploads/faq-v1-img.jpg', 'image', '../uploads/thumbnails/faq-v1-img.jpg', '2022-02-15 14:49:53', 0),
(305, 'team-one-img-1.jpg', 'jpg', '37.393KB', '../uploads/team-one-img-1.jpg', 'image', '../uploads/thumbnails/team-one-img-1.jpg', '2022-02-15 20:14:19', 0),
(312, 'case-studies-v1-img10.jpg', 'jpg', '57.979KB', '../uploads/case-studies-v1-img10.jpg', 'image', '../uploads/thumbnails/case-studies-v1-img10.jpg', '2022-02-16 08:17:19', 0),
(309, 'testimonial-v1-img1.jpg', 'jpg', '20.881KB', '../uploads/testimonial-v1-img1.jpg', 'image', '../uploads/thumbnails/testimonial-v1-img1.jpg', '2022-02-15 23:18:25', 0),
(310, 'testimonial-v1-img2.jpg', 'jpg', '16.841KB', '../uploads/testimonial-v1-img2.jpg', 'image', '../uploads/thumbnails/testimonial-v1-img2.jpg', '2022-02-15 23:19:55', 0),
(313, 'Groupe 10.png', 'png', '23.56KB', '../uploads/Groupe 10.png', 'image', '../uploads/thumbnails/Groupe 10.png', '2022-02-24 17:06:35', 0),
(314, 'partner-logo3.png', 'png', '3.738KB', '../uploads/partner-logo3.png', 'image', '../uploads/thumbnails/partner-logo3.png', '2022-04-13 14:48:23', 0),
(315, 'partner-logo1.png', 'png', '3.283KB', '../uploads/partner-logo1.png', 'image', '../uploads/thumbnails/partner-logo1.png', '2022-04-13 14:49:09', 0),
(316, 'partner-logo2.png', 'png', '2.808KB', '../uploads/partner-logo2.png', 'image', '../uploads/thumbnails/partner-logo2.png', '2022-04-13 14:49:15', 0),
(317, 'partner-logo4.png', 'png', '2.43KB', '../uploads/partner-logo4.png', 'image', '../uploads/thumbnails/partner-logo4.png', '2022-04-13 14:49:22', 0),
(318, 'testimonial-v1-img1.jpg', 'jpg', '20.881KB', '../uploads/testimonial-v1-img1.jpg', 'image', '../uploads/thumbnails/testimonial-v1-img1.jpg', '2022-04-13 14:51:33', 0),
(319, 'testimonial-v1-img2.jpg', 'jpg', '16.841KB', '../uploads/testimonial-v1-img2.jpg', 'image', '../uploads/thumbnails/testimonial-v1-img2.jpg', '2022-04-13 14:51:44', 0),
(320, 'testimonial-v1-img1.jpg', 'jpg', '20.881KB', '../uploads/testimonial-v1-img1.jpg', 'image', '../uploads/thumbnails/testimonial-v1-img1.jpg', '2022-04-13 14:52:07', 0),
(321, 'team-one-img-1.jpg', 'jpg', '37.393KB', '../uploads/team-one-img-1.jpg', 'image', '../uploads/thumbnails/team-one-img-1.jpg', '2022-04-13 14:52:49', 0),
(322, 'team-one-img-4.jpg', 'jpg', '28.55KB', '../uploads/team-one-img-4.jpg', 'image', '../uploads/thumbnails/team-one-img-4.jpg', '2022-04-13 14:53:01', 0),
(323, 'team-details-one-img1.jpg', 'jpg', '59.017KB', '../uploads/team-details-one-img1.jpg', 'image', '../uploads/thumbnails/team-details-one-img1.jpg', '2022-04-13 14:55:25', 0),
(324, 'team-one-img-6.jpg', 'jpg', '33.268KB', '../uploads/team-one-img-6.jpg', 'image', '../uploads/thumbnails/team-one-img-6.jpg', '2022-04-13 14:55:38', 0),
(338, 'blog-shape-4.png', 'png', '2.076KB', '../uploads/blog-shape-4.png', 'image', '../uploads/thumbnails/blog-shape-4.png', '2022-06-18 13:10:29', 0),
(326, 'brand-1.png', 'png', '4.338KB', '../uploads/brand-1.png', 'image', '../uploads/thumbnails/brand-1.png', '2022-06-16 10:13:26', 0),
(328, 'brand-3.png', 'png', '3.519KB', '../uploads/brand-3.png', 'image', '../uploads/thumbnails/brand-3.png', '2022-06-16 10:16:34', 0),
(329, 'event-1.jpg', 'jpg', '147.569KB', '../uploads/event-1.jpg', 'image', '../uploads/thumbnails/event-1.jpg', '2022-06-16 10:35:45', 0),
(330, 'event-1.jpg', 'jpg', '147.569KB', '../uploads/event-1.jpg', 'image', '../uploads/thumbnails/event-1.jpg', '2022-06-16 10:35:59', 0),
(332, 'blog-big-4.jpg', 'jpg', '56.65KB', '../uploads/blog-big-4.jpg', 'image', '../uploads/thumbnails/blog-big-4.jpg', '2022-06-16 13:53:44', 0),
(333, 'blog-big-4.jpg', 'jpg', '56.65KB', '../uploads/blog-big-4.jpg', 'image', '../uploads/thumbnails/blog-big-4.jpg', '2022-06-16 13:53:58', 0),
(334, 'blog-big-5.jpg', 'jpg', '95.716KB', '../uploads/blog-big-5.jpg', 'image', '../uploads/thumbnails/blog-big-5.jpg', '2022-06-16 13:56:39', 0),
(336, 'blog-big-7.jpg', 'jpg', '79.303KB', '../uploads/blog-big-7.jpg', 'image', '../uploads/thumbnails/blog-big-7.jpg', '2022-06-16 23:11:06', 0),
(337, 'blog-big-5.jpg', 'jpg', '95.716KB', '../uploads/blog-big-5.jpg', 'image', '../uploads/thumbnails/blog-big-5.jpg', '2022-06-16 23:48:04', 0),
(339, 'campus-4.jpg', 'jpg', '119.139KB', '../uploads/campus-4.jpg', 'image', '../uploads/thumbnails/campus-4.jpg', '2022-06-18 17:26:44', 0),
(340, 'campus-4.jpg', 'jpg', '119.139KB', '../uploads/campus-4.jpg', 'image', '../uploads/thumbnails/campus-4.jpg', '2022-06-18 17:28:33', 0),
(341, 'campus-2.jpg', 'jpg', '284.518KB', '../uploads/campus-2.jpg', 'image', '../uploads/thumbnails/campus-2.jpg', '2022-06-18 18:38:38', 0),
(344, 'profile-img.jpg', 'jpg', '8.775KB', '../uploads/profile-img.jpg', 'image', '../uploads/thumbnails/profile-img.jpg', '2022-06-18 18:56:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `created_at`) VALUES
(43, 'kixyqop@mailinator.com', '2022-06-18 12:39:10'),
(42, 'haquk@mailinator.com', '2022-06-17 10:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `partner_name` varchar(45) NOT NULL,
  `partner_logo` bigint(20) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner_name`, `partner_logo`, `link`) VALUES
(29, 'Learning', 328, ''),
(27, 'ACADEMICA', 326, '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('cpses_fo16p6ajsi', '2021-04-23 00:29:48', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `startups`
--

CREATE TABLE `startups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `prototype` varchar(255) CHARACTER SET utf8 NOT NULL,
  `logo` bigint(20) NOT NULL,
  `description` longtext NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `team_mem1` int(11) DEFAULT NULL,
  `team_mem2` int(11) DEFAULT NULL,
  `team_mem3` int(11) DEFAULT NULL,
  `team_mem4` int(11) DEFAULT NULL,
  `team_mem5` int(11) DEFAULT NULL,
  `team_mem6` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `full_name` varchar(45) NOT NULL,
  `profile` bigint(20) NOT NULL,
  `cin` varchar(14) NOT NULL,
  `division` varchar(255) NOT NULL,
  `cne` varchar(14) NOT NULL,
  `mathematics` varchar(40) DEFAULT NULL,
  `physics` varchar(40) DEFAULT NULL,
  `arab` varchar(40) DEFAULT NULL,
  `english` varchar(40) DEFAULT NULL,
  `frensh` varchar(40) DEFAULT NULL,
  `philosophie` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `profile`, `cin`, `division`, `cne`, `mathematics`, `physics`, `arab`, `english`, `frensh`, `philosophie`) VALUES
(8, 'Achraf ABBASSI', 5, 'HA121212', 'STE', 'K1234', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'OUADI Mina', 344, 'HA1234', 'STE', '1234', '19', '18', '13', '17', '15', '11');

-- --------------------------------------------------------

--
-- Table structure for table `team_startups`
--

CREATE TABLE `team_startups` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `role` varchar(255) CHARACTER SET utf8 NOT NULL,
  `profile_image` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `role` varchar(255) CHARACTER SET utf8 NOT NULL,
  `details` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `full_name`, `role`, `details`) VALUES
(49, 'Matthew Leonard', 'Fulton Daniel', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptam accusantium doloremque laudantium totam reme aperiam eaque quae inventore</p>\r\n'),
(50, 'Katelyn Johns', 'Josiah Berger', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptam accusantium doloremque laudantium totam reme aperiam eaque quae inventore</p>'),
(53, 'Slade Haley', 'Vance Carey', '<p>http://localhost/upo/</p>'),
(52, 'Nell Wilson', 'Robin Acevedo', '<p>By submitting this form, you will create a new testimonial</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `password_hash` varchar(225) NOT NULL,
  `access_right` int(20) NOT NULL DEFAULT 2,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `avatar` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `tel` varchar(45) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `last_name`, `password_hash`, `access_right`, `timestamp`, `avatar`, `status`, `tel`, `email`, `role`) VALUES
(31, 'upo', 'Bloom', 'Sarl', 'a0ea17c15d3fa603b11c392a4c75d86c', 1, '2022-02-12 10:57:01', 276, 1, '', 'bloom@gmail.com', 'Admin'),
(32, 'fypucegu', 'Quentin', 'Bright', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2022-02-17 01:05:51', 5, 1, '0612321234', 'cygusijo@mailinator.com', 'Ex dolor rem omnis e'),
(33, 'qatuq', 'Melodie', 'Jackson', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2022-06-18 13:10:29', 338, 0, '0612345678', 'dajuvudisy@mailinator.com', 'Odit est unde ex quo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `become_prof`
--
ALTER TABLE `become_prof`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkIdx_38` (`cover`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkIdx_38` (`cover`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkIdx_121` (`partner_logo`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Indexes for table `startups`
--
ALTER TABLE `startups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkIdx_137` (`logo`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkIdx_121` (`profile`);

--
-- Indexes for table `team_startups`
--
ALTER TABLE `team_startups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkIdx_137` (`profile_image`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkIdx_48` (`avatar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `become_prof`
--
ALTER TABLE `become_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `startups`
--
ALTER TABLE `startups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `team_startups`
--
ALTER TABLE `team_startups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
