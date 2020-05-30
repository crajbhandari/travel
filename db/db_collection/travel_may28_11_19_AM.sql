-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 07:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) NOT NULL,
  `name` varchar(120) COLLATE utf8_swedish_ci NOT NULL,
  `display_name` varchar(120) COLLATE utf8_swedish_ci DEFAULT NULL,
  `icon` varchar(60) COLLATE utf8_swedish_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `description` longtext COLLATE utf8_swedish_ci DEFAULT NULL,
  `created _on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `name`, `display_name`, `icon`, `is_active`, `description`, `created _on`, `updated_on`) VALUES
(23, 'tanya james', 'Rerum atque duis ess', 'fa-adjust', 0, 'Neque ut laudantium', '2020-05-20 11:00:31', '2020-05-20 11:00:31'),
(24, 'merritt rodriquez', 'Dolor ducimus adipi', 'fa-adjust', 0, 'Delectus officia eu', '2020-05-20 11:00:41', '2020-05-20 11:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) NOT NULL,
  `image` text NOT NULL,
  `alt_text` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `alt_text`) VALUES
(5, '15900447099.jpg', 'home');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(128) DEFAULT NULL,
  `visibility` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `date`, `image`, `visibility`) VALUES
(33, '2020-05-24 19:12:07', '1590417334h.jpg', 0),
(35, '2020-05-24 19:15:22', '1590327022p.jpg', 0),
(36, '2020-05-24 21:35:14', '15903354146.jpg', 1),
(37, '2020-05-24 22:11:29', '1590337589f.png', 0),
(38, '2020-05-24 22:24:59', '1590338399f.png', 0),
(39, '2020-05-24 23:45:09', '15903432091.jpg', 0),
(40, '2020-05-26 07:42:04', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `customer_id` bigint(20) DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `edited_status` int(11) NOT NULL DEFAULT 0,
  `verification_comment` longtext COLLATE utf8_swedish_ci DEFAULT NULL,
  `verified_by` int(11) DEFAULT NULL,
  `verified_on` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `comment` longtext COLLATE utf8_swedish_ci NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `blog_id`, `customer_id`, `is_active`, `is_verified`, `edited_status`, `verification_comment`, `verified_by`, `verified_on`, `name`, `email`, `phone`, `comment`, `created_on`) VALUES
(57, 4, 2, 0, 1, 1, 'asd', 1, '2020-04-22 15:34:57', 'Beck Hansen', 'tyjih@mailinator.com', '91', 'Sit unde non numqua', '2020-03-23 14:48:28'),
(58, 4, 0, 0, 1, 1, '1', 1, '2020-04-22 15:28:54', 'Beck Hansen', 'tyjih@mailinator.com', '91', 'Sit unde non numqua', '2020-03-23 14:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `blog_translation`
--

CREATE TABLE `blog_translation` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `language_code` varchar(200) NOT NULL,
  `title` longtext NOT NULL,
  `content` longtext NOT NULL,
  `author` varchar(128) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_translation`
--

INSERT INTO `blog_translation` (`id`, `blog_id`, `language_code`, `title`, `content`, `author`, `category`) VALUES
(1, 33, 'FR', 'Pariatur Lorem id p', '<p>casdcasdc</p>', 'Exercitation facilis', ''),
(3, 35, 'EN', 'Ut eos tenetur nesci', '<p>casdcasdc</p>', 'Dignissimos aperiam ', 'Ipsam quis vel hic s'),
(4, 33, 'EN', 'Ut eos tenetur nesci', '<p>casdcasdc</p>', 'Dignissimos aperiam ', 'Ipsam quis vel hic s'),
(5, 36, 'EN', 'Dolor pariatur Qui ', '<p>asdvasdv</p>', 'English Author', 'Natus ipsum eum qui'),
(6, 35, 'FR', 'Ut eos tenetur nesci', '<p>casdcasdc</p>', 'Dignissimos aperiam ', 'Ipsam quis vel hic s'),
(7, 36, 'FR', 'Dolor pariatur Qui ', '<p>el es frenc</p>', 'Nulla numquam eos nu', 'Natus ipsum eum qui'),
(9, 38, 'EN', 'Voluptatibus atque o', '<p>casdcasdc</p>', 'Vel beatae et aliqua', 'Magni et facere inve'),
(12, 37, 'EN', 'Check 2', '<p>casdc</p>', 'Amet et non proiden', 'Qui est reprehender'),
(15, 38, 'FR', 'Voluptatibus atque o', '<p>This is also french</p>', 'Vel beatae et aliqua', 'Magni et facere inve'),
(16, 37, 'FR', 'qui', '<p>casdc</p>', 'Amet et non proiden', 'Qui est reprehender'),
(17, 39, 'EN', 'This is english blog yes asdcasdc asdcasdcasdc', '<p>casdc</p>', 'Praesentium dolores ', 'Esse aperiam aut id '),
(21, 39, 'FR', 'This is Frenchblog', '<p>casdc</p>', 'Praesentium dolores ', 'Esse aperiam aut id '),
(22, 39, 'FR', 'This is French blog', '<p>casdc</p>', 'Praesentium dolores ', 'Esse aperiam aut id '),
(23, 39, 'NEP', 'Est quis reiciendis ', '<p>casdc</p>', 'Consequatur aut ut r', 'Enim provident aliq'),
(24, 33, 'NEP', 'Sapiente libero pari', '<p>Nepali</p>', 'In qui odio est iust', 'Autem aliqua Vitae '),
(25, 40, 'EN', 'Nisi adipisicing con', '<p>casdcasdc</p>', 'Architecto id sed is', 'Aliqua Accusamus si');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `created_on` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `images`, `created_on`) VALUES
(2, NULL, '0000-00-00'),
(5, NULL, '2020-05-15'),
(6, NULL, '2020-05-15'),
(7, NULL, '2020-05-15'),
(8, NULL, '2020-05-19'),
(9, NULL, '2020-05-20'),
(11, NULL, '2020-05-21'),
(12, '[\"15900324397.jpg\",\"1590032439m.jpg\"]', '2020-05-21'),
(16, NULL, '2020-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `city_translation`
--

CREATE TABLE `city_translation` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `language_code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `name` mediumtext NOT NULL,
  `info` longtext DEFAULT NULL,
  `link` mediumtext DEFAULT NULL,
  `on_home` tinyint(4) NOT NULL DEFAULT 1,
  `on_about` tinyint(4) NOT NULL DEFAULT 0,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `name`, `info`, `link`, `on_home`, `on_about`, `created_on`) VALUES
(1, '1585894824c.png', 'kodiak travel, south africa', 'asf', 'https://derickbailey.com/2015/03/25/jshint-confusing-use-of-bang/', 0, 0, '2019-02-18 11:36:33'),
(2, '15504691241.png', 'mice24, tyrol, germany, austria, switzerland', '', 'https://mssag.ch/en/jobs.php', 1, 1, '2019-02-18 11:37:04'),
(3, '1550469152o.png', 'true japan tours, japan', NULL, 'https://truejapantours.com/', 1, 0, '2019-02-18 11:37:32'),
(4, '15504691861.png', 't.i.m.e. international travel management solutions, portugal', NULL, 'https://time-itms.com/wp/#home_section', 1, 1, '2019-02-18 11:38:06'),
(5, '1550469213o.png', 'ulisse tour operator, sicily', NULL, 'http://www.ulissetouroperator.com/en/about-us/', 1, 0, '2019-02-18 11:38:33'),
(6, '1550469238o.jpg', 'balkan-adriatic dmc', NULL, 'https://www.facebook.com/balkanadriatic/?tn-str=k*f', 1, 1, '2019-02-18 11:38:58'),
(7, '1550469609e.png', 'silver tray', NULL, 'http://www.silver-tray.com', 1, 0, '2019-02-18 11:45:09'),
(8, '1550469651o.png', 'american guests usa, partner and sales office', NULL, 'http://www.americanguestusa.com/en/', 1, 0, '2019-02-18 11:45:51'),
(10, '1585894698c.png', 'qwer', 'qewr', 'https://derickbailey.com/2015/03/25/jshint-confusing-use-of-bang/', 1, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` bigint(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `is_active`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, '2020-02-27 09:45:25', 1, '2020-03-09 06:49:53', 1),
(2, 0, '2020-02-27 09:47:05', 1, '2020-03-19 06:47:53', 1),
(3, 0, '2020-02-27 10:11:28', 1, '2020-03-19 06:47:46', 1),
(4, 0, '2020-02-27 10:13:51', 1, '2020-02-27 10:13:51', 1),
(5, 0, '2020-02-27 10:18:09', 1, '2020-02-27 10:18:09', 1),
(10, 0, '2020-04-09 10:47:19', 1, '2020-04-09 10:47:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq_translation`
--

CREATE TABLE `faq_translation` (
  `id` int(11) NOT NULL,
  `faq_id` bigint(20) NOT NULL,
  `language_code` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `code`, `name`) VALUES
(1, 'EN', 'English'),
(2, 'FR', 'French'),
(3, 'NEP', 'Nepali'),
(4, 'RUS', 'Russian');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `message` longtext NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `subject` text NOT NULL,
  `is_new` tinyint(4) NOT NULL DEFAULT 1,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `city`, `country`, `subject`, `is_new`, `created_on`) VALUES
(9, 'Chetan', 'wybe@xubaf.com', NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '', '0', '', 0, '2019-04-03 17:13:03'),
(10, 'Guy Levine', 'hogiriz@cyhuzoluf.com', NULL, 'Quaerat qui est atqu', '', '0', '', 0, '2019-04-03 17:14:50'),
(11, 'Amethyst Rowe', 'furahohiju@gapetohenu.com', NULL, 'Sint occaecat non do', '', '0', '', 0, '2019-04-03 17:15:12'),
(12, 'Amethyst Rowe', 'furahohiju@gapetohenu.com', NULL, 'Sint occaecat non doContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '', '0', '', 0, '2019-04-03 17:15:29'),
(13, 'Shannon Joseph', 'kygor@bolotuvexyhov.com', NULL, 'Deleniti omnis ut es', '', '0', '', 0, '2019-04-03 17:16:06'),
(14, 'Shannon Joseph', 'kygor@bolotuvexyhov.com', NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '', '0', '', 0, '2019-04-03 17:16:19'),
(15, 'Amethyst Hays', 'depycu@jozovogemafe.com', NULL, 'Explicabo Ut est do', '', '0', '', 0, '2019-04-03 17:19:32'),
(16, 'Kyra Pruitt', 'tyduk@qyjetowam.com', NULL, 'Obcaecati eum est eo', '', '0', '', 0, '2019-04-03 19:31:47'),
(17, 'Kyra Pruitt', 'tyduk@qyjetowam.com', NULL, 'Obcaecati eum est eo', '', '0', '', 0, '2019-04-03 19:31:56'),
(18, 'Kyra Pruitt', 'tyduk@qyjetowam.com', NULL, 'Obcaecati eum est eo', '', '0', '', 0, '2019-04-03 19:32:48'),
(19, 'Kareem Lowe', 'jikifubug@nosyfiqebyn.com', NULL, 'Temporibus est enim', '', '0', '', 0, '2019-04-03 19:34:26'),
(20, 'Kareem Lowe', 'jikifubug@nosyfiqebyn.com', NULL, 'Temporibus est enim', '', '0', '', 0, '2019-04-03 19:36:11'),
(21, 'Whoopi Woodward', 'sogol@tehaxabeb.com', NULL, 'Qui sunt quaerat iur', '', '0', '', 0, '2019-04-03 20:11:14'),
(22, 'Burton Goff', 'nuwetudufa@vapizob.com', NULL, 'Quia laudantium sim', '', '0', '', 0, '2019-04-03 20:18:27'),
(23, 'Stephanie Richmond', 'wejum@lynitigovopojic.com', NULL, 'Qui repellendus Et', '', '0', '', 0, '2019-04-03 20:24:14'),
(24, 'Stephanie Richmond', 'wejum@lynitigovopojic.com', NULL, 'Qui repellendus Et', '', '0', '', 0, '2019-04-03 20:24:26'),
(25, 'Xander Benson', 'dynigab@xicojoxola.com', NULL, 'Qui ex in iure quam', '', '0', '', 0, '2019-04-03 20:29:55'),
(26, 'Xander Benson', 'dynigab@xicojoxola.com', NULL, 'Qui ex in iure quam', '', '0', '', 0, '2019-04-03 20:30:52'),
(27, 'Xander Benson', 'dynigab@xicojoxola.com', NULL, 'Qui ex in iure quam', '', '0', '', 0, '2019-04-03 20:32:13'),
(28, 'Barbara Colon', 'lizogy@sijigabeneg.com', NULL, 'Esse commodo modi s', '', '0', '', 0, '2019-04-03 20:32:27'),
(29, 'Barbara Colon', 'lizogy@sijigabeneg.com', NULL, 'Esse commodo modi s', '', '0', '', 0, '2019-04-03 21:43:53'),
(30, 'Test', 'chetan.rajbhandari@gmail.com', NULL, 'Testing', '', '0', '', 0, '2019-04-13 01:34:21'),
(32, 'Test', 'chetan.rajbhandari@gmail.com', NULL, 'Testing', '', '0', '', 0, '2019-04-13 01:34:22'),
(35, 'Brock Brewer', 'mytojel@mailinator.net', NULL, 'Dolore asperiores fu', '', '', '', 1, '2020-05-20 12:53:20'),
(36, 'Kellie Poole', 'syceqatot@mailinator.net', NULL, 'Vel aut dicta nihil', '', '', '', 1, '2020-05-20 12:54:43'),
(37, 'Prescott Davidson', 'tobuqymi@mailinator.net', NULL, 'Non ex magni iste mo', '', '', '', 1, '2020-05-20 12:57:29'),
(38, 'Perry Patterson', 'pitykekeh@mailinator.com', '+1 (331) 338-2278', 'Nulla atque doloremq', 'Ut amet fugit sint', 'Nam nisi magni ducim', 'Eos officiis culpa ', 1, '2020-05-20 12:59:51'),
(39, 'Holmes Collier', 'lyzosa@mailinator.com', '+1 (303) 472-3498', 'Placeat eum asperna', 'Facere dolores odit ', 'Mollit deleniti prov', 'Perferendis quis non', 0, '2020-05-20 13:00:51'),
(40, 'Amethyst Hensley', 'xavukehufo@mailinator.com', '+1 (274) 535-1604', 'Necessitatibus sed m', 'Eaque aut sit repel', 'Sapiente recusandae', 'Aperiam quod excepte', 1, '2020-05-20 13:01:59'),
(41, 'Bo Young', 'jyjivihel@mailinator.com', '+1 (456) 798-8103', 'Alias eu harum ratio', 'Tempora natus autem ', 'Ad qui est non recus', 'Sint ad quis maiores', 1, '2020-05-20 13:05:10'),
(42, 'Yoel', 'kagunypyl@mailinator.net', '+1 (569) 156-5582', 'Omnis veniam fugiat', 'Omnis distinctio Im', 'Consequatur error c', 'Corrupti magna tota', 1, '2020-05-20 13:06:51'),
(43, 'Alan Riddle', 'vironahop@mailinator.com', '+1 (805) 147-9035', 'Eos tenetur possimu', 'Officia eos dolor id', 'Illo et mollitia sed', 'Obcaecati delectus ', 1, '2020-05-20 13:13:56'),
(44, 'Wanda Frank', 'kiwex@mailinator.com', '+1 (931) 325-5947', 'Dolor corrupti ea d', 'Officiis delectus a', 'Quas elit nobis in ', 'Eligendi dolore comm', 1, '2020-05-20 13:15:55'),
(45, 'Azalia Olsen', 'ketywuludi@mailinator.com', '+1 (464) 479-6342', 'Quo sit quis cumque', 'Labore et minima qui', 'Occaecat consequatur', 'In eius do dicta et ', 0, '2020-05-20 13:16:37'),
(46, 'Demetria Webster', 'wibecox@mailinator.net', '+1 (657) 669-7203', 'Omnis iste esse id', 'Reprehenderit debit', 'Autem ut minus conse', 'Et culpa aliquam si', 1, '2020-05-20 13:18:21'),
(47, 'Alea Oneil', 'pihoh@mailinator.net', '+1 (332) 171-2704', 'Doloremque ut iusto ', 'Iste dignissimos mol', 'Vitae ut ex et commo', 'Voluptates nihil pro', 1, '2020-05-20 13:19:28'),
(48, 'Robin Rosario', 'soca@mailinator.net', '+1 (828) 638-8817', 'Quia ut aut molestia', 'Ut atque culpa cill', 'Qui asperiores volup', 'Odio voluptas exerci', 1, '2020-05-20 13:19:44'),
(49, 'Maris Foreman', 'susu@mailinator.net', '+1 (222) 905-2762', 'Excepturi aut hic re', 'Sit veniam ipsa d', 'Consequat Omnis qui', 'Voluptatem suscipit ', 1, '2020-05-20 13:21:31'),
(50, 'Rooney Stewart', 'damocu@mailinator.com', '+1 (455) 657-2841', 'Accusantium officia ', 'Cupidatat dolore pro', 'Voluptates minus err', 'Proident doloribus ', 1, '2020-05-20 13:24:49'),
(51, 'Wade Caldwell', 'reretej@mailinator.com', '+1 (243) 344-9628', 'Enim ab eos tempora', 'Minima anim ipsum vo', 'Fuga Nihil esse id ', 'Ut ab autem tenetur ', 1, '2020-05-20 13:24:57'),
(52, 'Check', 'pudydyg@mailinator.net', '+1 (275) 262-1866', 'Quod laborum omnis e', 'Non quos est illo d', 'Dolores quis ea do a', 'Qui aut quia at poss', 0, '2020-05-20 13:26:49'),
(53, 'Renee Atkinson', 'sahyvaqace@mailinator.net', '+1 (515) 616-1014', 'Sed voluptatem Pari', 'Nulla fugiat cumque ', 'Ad possimus dicta e', 'Illo tenetur et nequ', 1, '2020-05-20 13:27:35'),
(54, 'Genevieve Randall', 'cesuhewumi@mailinator.net', '+1 (582) 669-9364', 'asdcasdc', 'Officia sequi quod s', 'Et molestiae irure v', 'Rerum repudiandae an', 1, '2020-05-20 13:29:58'),
(55, 'Joshua Roberts', 'dikuliji@mailinator.net', '+1 (182) 846-9164', 'Repudiandae culpa vo', 'Recusandae Accusant', 'Sunt repellendus Ac', 'Doloremque consequat', 1, '2020-05-20 13:36:20'),
(56, 'Bert Simpson', 'fytizyb@mailinator.com', '+1 (821) 989-8654', 'Aut veniam voluptat', 'Blanditiis veritatis', 'Esse illo eum harum ', 'Repudiandae sequi fu', 1, '2020-05-21 17:26:23'),
(57, 'Britanni Phelps', 'fapunutyno@mailinator.net', '+1 (372) 236-8438', 'Nulla eum deserunt n', 'Iusto maxime in dese', 'Harum repellendus V', 'Non suscipit vero el', 1, '2020-05-21 17:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `images` longtext DEFAULT NULL,
  `visibility` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `discount` int(11) DEFAULT NULL,
  `iframe` text DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `sight_seeing` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `images`, `visibility`, `created_by`, `created_on`, `discount`, `iframe`, `category`, `sight_seeing`) VALUES
(2, '[]', 1, 1, '2020-04-12', NULL, NULL, 1, 0),
(3, '[\"1587212833q.jpg\"]', 1, 1, '2020-04-18', NULL, NULL, 2, 0),
(4, '[\"15872795002.jpg\",\"15872795005.jpg\",\"15872795006.jpg\",\"15872167585.jpg\",\"15872167586.jpg\"]', 1, 1, '2020-04-18', NULL, NULL, 3, 0),
(5, '[\"1588242011g.png\",\"1588242011g.jpg\",\"15882420111.jpg\",\"15882420112.jpg\",\"15882420113.jpg\",\"15882419731.png\",\"15882419732.png\",\"15882419734.png\",\"15882419735.png\"]', 1, 1, '2020-04-22', 50, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC!5e0!3m2!1sen!2sau!4v1588250355174!5m2!1sen!2sau\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 1, 0),
(6, NULL, 1, 1, '2020-05-15', 0, 'In non dolor quibusd', NULL, 0),
(7, NULL, 1, 1, '2020-05-15', 0, 'In sit incididunt sa', 7, 0),
(8, NULL, 1, 1, '2020-05-19', 0, 'Quam ut veritatis mi', NULL, 0),
(10, '[\"1590041681d.png\",\"1590041681e.png\"]', 1, 1, '2020-05-20', 0, 'Laudantium Nam sint', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `package_category`
--

CREATE TABLE `package_category` (
  `id` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_category`
--

INSERT INTO `package_category` (`id`, `parent`) VALUES
(1, 0),
(2, 1),
(3, 1),
(4, 0),
(5, 0),
(6, 4),
(7, 4),
(8, 4),
(9, 0),
(10, 0),
(11, 0),
(12, 9),
(13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `package_category_translation`
--

CREATE TABLE `package_category_translation` (
  `id` int(11) NOT NULL,
  `package_category_id` int(11) NOT NULL,
  `lamguage_code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `package_request`
--

CREATE TABLE `package_request` (
  `id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `no_traveller` int(11) NOT NULL,
  `departure_date` timestamp NULL DEFAULT NULL,
  `adult_no` int(11) NOT NULL,
  `children_no` int(11) NOT NULL,
  `max_price` int(11) DEFAULT NULL,
  `min_price` int(11) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `posted_on` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_request`
--

INSERT INTO `package_request` (`id`, `package_id`, `name`, `email`, `city`, `phone`, `no_traveller`, `departure_date`, `adult_no`, `children_no`, `max_price`, `min_price`, `message`, `posted_on`) VALUES
(1, 2, 'sfa', 'asf', 'asf', 0, 0, NULL, 0, 0, NULL, NULL, 'asf', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `package_review`
--

CREATE TABLE `package_review` (
  `id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `posted_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_review`
--

INSERT INTO `package_review` (`id`, `package_id`, `name`, `email`, `city`, `message`, `rating`, `posted_on`) VALUES
(1, 2, 'Random', 'example@example.com', 'Europe', 'lorem ipsum', 5, '2020-05-05'),
(2, 3, 'Random', 'example@example.com', 'Europe', 'lorem ipsum', 2, '2020-05-05'),
(3, 2, 'Random', 'example@example.com', 'Europe', 'lorem ipsum', 2, '2020-05-05'),
(4, 2, 'Random', 'example@example.com', 'Europe', 'lorem ipsum', 1, '2020-05-05'),
(5, 4, 'Random', 'example@example.com', 'Europe', 'lorem ipsum', 5, '2020-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `package_translation`
--

CREATE TABLE `package_translation` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `language_code` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `itinery` longtext NOT NULL,
  `about_tour` longtext NOT NULL,
  `info` longtext NOT NULL,
  `budget` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `label` varchar(128) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `icon` varchar(128) DEFAULT NULL,
  `on_menu` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `label`, `image`, `icon`, `on_menu`, `is_active`, `created_on`) VALUES
(1, 'home', 'Home Page', NULL, 'mdi-home', 1, 1, '2019-02-20 12:34:49'),
(2, 'about', 'About Us 123', '1585889611c.png', 'mdi-account-box', 1, 1, '2019-02-20 12:34:49'),
(3, 'services', 'Our Services123', '1550653400s.jpg', 'mdi-creation', 1, 1, '2019-02-20 12:34:49'),
(6, 'team', 'Our Team', '1554375178d.jpg', 'mdi-account-multiple', 1, 1, '2019-02-20 12:34:49'),
(7, 'blog', 'Blog', '15545400421.jpg', 'mdi-note-outline', 0, 0, '2019-02-20 12:34:49'),
(8, 'contact', 'Contact Us', '1550653476s.jpg', 'mdi-phone', 1, 1, '2019-02-20 12:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `page` varchar(255) NOT NULL,
  `section_order` int(11) NOT NULL DEFAULT 0,
  `title` longtext DEFAULT NULL,
  `sub_title` longtext DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `button_position` varchar(16) NOT NULL DEFAULT 'left',
  `image` varchar(128) DEFAULT NULL,
  `image_position` varchar(16) NOT NULL DEFAULT 'left',
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `page`, `section_order`, `title`, `sub_title`, `content`, `button_text`, `button_link`, `button_position`, `image`, `image_position`, `created_on`) VALUES
(3, 'team', 0, 'We like to exceed expectations', '', '<span style=\"color: rgb(83, 83, 83); font-size: 16px; letter-spacing: 0.96px; text-align: center;\">Our team consists of three different but yet very compatible members. Each of us possess expertise in different fields enabling us to solve all your challenges.</span>', '', '', 'right', '', 'right', '2019-02-19 15:29:16'),
(5, 'about', 0, 'TAILORED, TARGETED AND LATEST SOLUTIONS', '', '<p>Our mission is to help international destinations and companies within the tourism industry to increase sales and maximize media exposure in the Nordic countries. Our main focus is to establish and maximize our client´s online visibility in Scandinavia. We maximize our client\'s presence through our virtual destination concept, a digital platform for all kinds of communication on the Scandinavian markets. Our concept of using big data and other advanced analyzing tools in the process gives us an in-depth understanding of our client\'s products, providing us the knowledge needed to provide our clients with outstanding online and offline strategies.</p><p>All in all we represent, market and sell your destination and products in all the Scandinavian countries. With a combined experience of more than 50 years in the Scandinavian travel industry, we know how to increase sales and visibility even for you.</p>', '', '', 'left', NULL, 'left', '2019-02-19 15:41:32'),
(13, 'about', 1, 'Quia neque numquam a.asf', 'Incididunt tenetur i.asf', 'Est cupiditate volup.asf', 'Inventore esse est ', 'Beatae officia fugia', 'right', NULL, 'right', '0000-00-00 00:00:00'),
(15, 'team', 48, 'Labore eu tenetur il.qwe', 'Beatae rerum eum aut.qwe', 'Modi hic cum eiusmod.qwe', 'Reprehenderit rem e', 'Quia consectetur do', 'right', '1586001892c.png', 'right', '2020-04-04 23:04:52'),
(16, 'home', 0, '<p>WELCOME TO GATEWAY SCANDINAVIA<br></p>', '<p>WELCOME TO GATEWAY SCANDINAVIA<br></p>', '<p>Your 21st century nordic representation and communication agency with a unique blend of 50+ years of industry experience and infotech. We take advantage of digitization and expertise to help our clients get smarter.<br></p>', 'asdf', 'https://www.google.com/', 'left', '1586077336c.png', 'left', '2020-04-05 09:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `alt_title` mediumtext DEFAULT NULL,
  `sub_title` longtext DEFAULT NULL,
  `summary` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `alt_title`, `sub_title`, `summary`, `description`, `image`, `created_on`) VALUES
(2, 'Accelerate Sales', 'Sales', 'Increase Sales', 'There is also a client for your product. With 50+ years of experience, we know where to look.', '<p>Who are the key players for your product in the travel trade? And where are they? We help you identify them and sell in your product. With a combined experience of 50+ years we know where to look!</p><p><br></p><ul><li>Sales calls new bizz</li><li>Organise FAM-trips</li><li>Organise workshops and events for the travel trade</li><li>Trade education</li><li>Representation at trade fairs</li><li>Product development</li></ul>', '15505580844.jpg', '2019-02-19 12:19:44'),
(3, 'Develop Market Strategy', 'Marketing', 'Build your brand', 'Increase visibility and build brand awareness.', '<div>Build your brand online and offline! We firmly believe that a strong online presence paves the way for the sales work we are conducting. Our data-driven market analysis shows us which way to go!</div><div><br></div><ul><li>Virtual destination/platform</li><li>Social media strategy and execution</li><li>Online/offline campaigns</li><li>Organise public events</li><li>Representation at tourism fairs</li><li>Translations of your material</li></ul><div><br></div>', '15505581521.jpg', '2019-02-19 12:20:52'),
(4, 'We Build PR', 'Press & PR', 'Tell your story!', 'Our network of travel journalists and influencers spreads the word!', '<p>Credibility is the difference between advertising and articles in the media. We work closely with well-established travel journalist and influencers in order to get your product known for a targeted audience.</p><p><br></p><ul><li>Organize press trips</li><li>Press releases</li><li>Newsletters</li><li>Influencers and bloggers</li></ul>', '15505582692.jpg', '2019-02-19 12:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` char(40) NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` blob DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `expire`, `data`) VALUES
('k54cn8rck2rcggni8d619k9nlc', 1590423593, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31343a222f74726176656c2f6170706c6574223b5f5f69647c693a313b),
('2kb6tq31r2de342qul60i3iuf8', 1590466113, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31343a222f74726176656c2f6170706c6574223b5f5f69647c693a313b),
('va6ei9pu3qv0hc5mjpnp2qv6m0', 1590567271, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a31343a222f74726176656c2f6170706c6574223b5f5f69647c693a313b),
('mfstd80lsdu8o3hvuts1p2dbno', 1590647595, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a33303a222f74726176656c2f6170706c65742f7061636b6167652f72657175657374223b5f5f69647c693a313b);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `type` varchar(64) NOT NULL,
  `caption` mediumtext NOT NULL,
  `is_editable` tinyint(4) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `slug`, `type`, `caption`, `is_editable`, `content`) VALUES
(18, 'address', 'text', 'Address', 1, 'Lake Road,Suite 180 FarmingtonHills,U.S.A.'),
(19, 'contact', 'text', 'Contact', 1, '+101-1231-1231'),
(20, 'email', 'text', 'Email', 1, 'something@gmail.com'),
(25, 'show_blog', 'boolean', 'Show / Hide the blog', 1, '1'),
(26, 'blog_count', 'text', 'Maximum number of blog posts in the homepage', 1, '6'),
(27, 'show_slider', 'boolean', 'Show / Hide revolution slider', 1, '1'),
(28, 'fonts', 'json', 'Fonts that will be used throughout the website', 1, '{\"main\":{\"name\":\"Poppins\",\"size\":\"18\",\"weight\":\"300\",\"type\":\"sherif\"}\r\n}'),
(29, 'social', 'json', 'Social media Links', 1, '[{\r\n\"facebook\":\"facebook\",\r\n\"google\":\"google\",\r\n\"twitter\":\"twitter\",\r\n\"linkedin\":\"linkedin\",\r\n\"youtube\":\"youtube\"\r\n}]');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slide_index` int(11) NOT NULL DEFAULT 0,
  `image` varchar(128) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `content_align` varchar(8) NOT NULL DEFAULT 'left',
  `link` varchar(255) DEFAULT NULL,
  `link_text` varchar(128) DEFAULT NULL,
  `created_on` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slide_index`, `image`, `content`, `content_align`, `link`, `link_text`, `created_on`) VALUES
(1, 1, '1586329451v.png', '<div style=\"line-height: 3;\"><font color=\"#efefef\"><span style=\"font-size: 28px;\">Your 21</span><sup><span style=\"font-size: 28px;\">st</span></sup><span style=\"font-size: 28px;\"> century representation</span></font></div><div style=\"line-height: 3;\"><span style=\"font-size: 28px;\"><font color=\"#efefef\">and communication agency</font></span>\r\n<br class=\"Apple-interchange-newline\"></div>', 'left', 'https://gateway-scandinavia.com/site/about/', 'About Us', '2019-02-18 14:36:28'),
(2, 2, '15863294311.png', '<h3 style=\"line-height: 3;\"><font color=\"#efefef\"><span style=\"font-size: 28px;\">Harnessing the power of </span><br><span style=\"font-size: 28px;\">research & big data analytics </span><span style=\"font-size: 28px;\">\r\n</span></font><br class=\"Apple-interchange-newline\"></h3>', 'left', 'https://gateway-scandinavia.com/site/team/', 'Our Team', '2019-02-18 14:45:47'),
(3, 3, '15863247787.png', '<h4 style=\"line-height: 3;\"><font color=\"#fccd09\"><span style=\"font-size: 28px;\">Tailored, perfectly targeted</span><br><span style=\"font-size: 28px;\">and latest solutions</span></font></h4>', 'left', 'https://gateway-scandinavia.com/site/contact/', 'Contact Us', '2019-02-18 14:47:32'),
(4, 0, '15863250421.png', '<p>set<br></p>', 'right', 'https://www.google.com/', 'etests', NULL),
(6, 0, '1586397342t.png', '<p>Slider<br></p>', 'right', 'https://app.asana.com/0/1159109502936406/board', 'Slider', '2020-04-09 11:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `social_media` longtext DEFAULT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `image`, `name`, `position`, `email`, `phone`, `description`, `social_media`, `created_on`) VALUES
(3, '1552110608s.jpg', 'Lars Braedstrup-Holm', 'Partner', 'lars@gateway-scandinavia.com', '', '<p>Our Danish / Swedish marketing specialist! Previous experience from Visit Sweden in Denmark and Norway, the city of Malmo and director of sales and marketing in the hotel industry. Expert knowledge within MICE, leisure, events, communication and project management. Lived and worked in Miami for years. Loves to play golf.<br></p>', '', '2019-02-18 18:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` varchar(64) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `info` longtext DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `content` longtext NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `info`, `position`, `content`, `created_on`) VALUES
(3, '1585896910t.jpg', 'as', 'fdas', 'fas', 'asadfd', '0000-00-00 00:00:00'),
(4, '1585896910t.jpg', 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(5, '1585896910t.jpg', 'test', '', 'test', 'test', '2020-04-09 17:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `incorrect_login` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified` tinyint(4) NOT NULL DEFAULT 0,
  `email_verification` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `incorrect_login`, `name`, `role`, `username`, `image`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `email_verified`, `email_verification`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Administrator1', 'admin', 'admin', '1586306512c.png', 'vyAwpvilLlp-vtuio5Vw2Gb37fD4nmuY', '$2y$13$xCdL76J2wvJUj9.vnECW6OzGdR8v5.TSVObBJ4WbSL1IpMqCSeg8m', 'XFVPGOajemsNKNOqPvjBPNUGKs0qwPm4_1546762267', 'chetan.rajbhandari@gmail.com1', 1, NULL, 10, '2019-01-08 12:40:51', '0000-00-00 00:00:00'),
(2, 0, 'Operator', 'operator', 'operator', '1586306512c.png', 'qgseEVHxpCEJSQL8BwR2EB-HVmZG2y9m', '$2y$13$xCdL76J2wvJUj9.vnECW6OzGdR8v5.TSVObBJ4WbSL1IpMqCSeg8m', '2nqk_u5Uae0ermCpHA4OWu95EkTsdxSF_1546496698', 'chetan.rajbhandari@gmail.com', 1, NULL, 10, '2019-01-08 12:42:43', '0000-00-00 00:00:00'),
(4, 0, 'Customer', 'customer', 'customer', '15873712065.jpg', 'vyAwpvilLlp-vtuio5Vw2Gb37fD4nmuY', '$2y$13$xCdL76J2wvJUj9.vnECW6OzGdR8v5.TSVObBJ4WbSL1IpMqCSeg8m', '', 'chetan.rajbhandari@gmail.com', 1, NULL, 0, '2019-01-08 12:40:51', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_id` (`blog_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `blog_translation`
--
ALTER TABLE `blog_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `language_code` (`language_code`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_translation`
--
ALTER TABLE `city_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `language_code` (`language_code`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faq_created_by` (`created_by`),
  ADD KEY `faq_updated_by` (`updated_by`);

--
-- Indexes for table `faq_translation`
--
ALTER TABLE `faq_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faq_id` (`faq_id`),
  ADD KEY `language_code` (`language_code`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Created_by` (`created_by`),
  ADD KEY `FK_category` (`category`);

--
-- Indexes for table `package_category`
--
ALTER TABLE `package_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_category_translation`
--
ALTER TABLE `package_category_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_category_id` (`package_category_id`),
  ADD KEY `lamguage_code` (`lamguage_code`);

--
-- Indexes for table `package_request`
--
ALTER TABLE `package_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_review`
--
ALTER TABLE `package_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_translation`
--
ALTER TABLE `package_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `language_code` (`language_code`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`,`name`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page` (`page`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`,`slug`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `blog_translation`
--
ALTER TABLE `blog_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `city_translation`
--
ALTER TABLE `city_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faq_translation`
--
ALTER TABLE `faq_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package_category`
--
ALTER TABLE `package_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `package_category_translation`
--
ALTER TABLE `package_category_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_request`
--
ALTER TABLE `package_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package_review`
--
ALTER TABLE `package_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package_translation`
--
ALTER TABLE `package_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_translation`
--
ALTER TABLE `blog_translation`
  ADD CONSTRAINT `blog_translation_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`),
  ADD CONSTRAINT `blog_translation_ibfk_2` FOREIGN KEY (`language_code`) REFERENCES `language` (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
