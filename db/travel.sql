-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 09:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `title` longtext NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `content` longtext NOT NULL,
  `author` varchar(128) DEFAULT NULL,
  `category` varchar(128) NOT NULL DEFAULT 'uncategorized',
  `visibility` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, '1554454657o.jpg', 'kodiak travel, south africa', '', '', 1, 1, '2019-02-18 11:36:33'),
(2, '15504691241.png', 'mice24, tyrol, germany, austria, switzerland', '', 'https://mssag.ch/en/jobs.php', 1, 1, '2019-02-18 11:37:04'),
(3, '1550469152o.png', 'true japan tours, japan', NULL, 'https://truejapantours.com/', 1, 0, '2019-02-18 11:37:32'),
(4, '15504691861.png', 't.i.m.e. international travel management solutions, portugal', NULL, 'https://time-itms.com/wp/#home_section', 1, 1, '2019-02-18 11:38:06'),
(5, '1550469213o.png', 'ulisse tour operator, sicily', NULL, 'http://www.ulissetouroperator.com/en/about-us/', 1, 0, '2019-02-18 11:38:33'),
(6, '1550469238o.jpg', 'balkan-adriatic dmc', NULL, 'https://www.facebook.com/balkanadriatic/?tn-str=k*f', 1, 1, '2019-02-18 11:38:58'),
(7, '1550469609e.png', 'silver tray', NULL, 'http://www.silver-tray.com', 1, 0, '2019-02-18 11:45:09'),
(8, '1550469651o.png', 'american guests usa, partner and sales office', NULL, 'http://www.americanguestusa.com/en/', 1, 0, '2019-02-18 11:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `message` longtext NOT NULL,
  `is_new` tinyint(4) NOT NULL DEFAULT 1,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `url`, `message`, `is_new`, `created_on`) VALUES
(5, 'Omar Caldwell', 'hehaw@tegik.com', NULL, NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '0000-00-00 00:00:00'),
(7, 'Rhonda Hensley', 'wymuduxeha@jidijikusebok.com', NULL, NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '0000-00-00 00:00:00'),
(8, 'Lance Schroeder', 'lymufogal@gogokovasemutas.com', NULL, NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '0000-00-00 00:00:00'),
(9, 'Chetan', 'wybe@xubaf.com', NULL, NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '2019-04-03 17:13:03'),
(10, 'Guy Levine', 'hogiriz@cyhuzoluf.com', NULL, NULL, 'Quaerat qui est atqu', 1, '2019-04-03 17:14:50'),
(11, 'Amethyst Rowe', 'furahohiju@gapetohenu.com', NULL, NULL, 'Sint occaecat non do', 1, '2019-04-03 17:15:12'),
(12, 'Amethyst Rowe', 'furahohiju@gapetohenu.com', NULL, NULL, 'Sint occaecat non doContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '2019-04-03 17:15:29'),
(13, 'Shannon Joseph', 'kygor@bolotuvexyhov.com', NULL, NULL, 'Deleniti omnis ut es', 1, '2019-04-03 17:16:06'),
(14, 'Shannon Joseph', 'kygor@bolotuvexyhov.com', NULL, NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, '2019-04-03 17:16:19'),
(15, 'Amethyst Hays', 'depycu@jozovogemafe.com', NULL, NULL, 'Explicabo Ut est do', 1, '2019-04-03 17:19:32'),
(16, 'Kyra Pruitt', 'tyduk@qyjetowam.com', NULL, NULL, 'Obcaecati eum est eo', 1, '2019-04-03 19:31:47'),
(17, 'Kyra Pruitt', 'tyduk@qyjetowam.com', NULL, NULL, 'Obcaecati eum est eo', 1, '2019-04-03 19:31:56'),
(18, 'Kyra Pruitt', 'tyduk@qyjetowam.com', NULL, NULL, 'Obcaecati eum est eo', 1, '2019-04-03 19:32:48'),
(19, 'Kareem Lowe', 'jikifubug@nosyfiqebyn.com', NULL, NULL, 'Temporibus est enim', 1, '2019-04-03 19:34:26'),
(20, 'Kareem Lowe', 'jikifubug@nosyfiqebyn.com', NULL, NULL, 'Temporibus est enim', 1, '2019-04-03 19:36:11'),
(21, 'Whoopi Woodward', 'sogol@tehaxabeb.com', NULL, NULL, 'Qui sunt quaerat iur', 1, '2019-04-03 20:11:14'),
(22, 'Burton Goff', 'nuwetudufa@vapizob.com', NULL, NULL, 'Quia laudantium sim', 1, '2019-04-03 20:18:27'),
(23, 'Stephanie Richmond', 'wejum@lynitigovopojic.com', NULL, NULL, 'Qui repellendus Et', 1, '2019-04-03 20:24:14'),
(24, 'Stephanie Richmond', 'wejum@lynitigovopojic.com', NULL, NULL, 'Qui repellendus Et', 1, '2019-04-03 20:24:26'),
(25, 'Xander Benson', 'dynigab@xicojoxola.com', NULL, NULL, 'Qui ex in iure quam', 1, '2019-04-03 20:29:55'),
(26, 'Xander Benson', 'dynigab@xicojoxola.com', NULL, NULL, 'Qui ex in iure quam', 1, '2019-04-03 20:30:52'),
(27, 'Xander Benson', 'dynigab@xicojoxola.com', NULL, NULL, 'Qui ex in iure quam', 1, '2019-04-03 20:32:13'),
(28, 'Barbara Colon', 'lizogy@sijigabeneg.com', NULL, NULL, 'Esse commodo modi s', 1, '2019-04-03 20:32:27'),
(29, 'Barbara Colon', 'lizogy@sijigabeneg.com', NULL, NULL, 'Esse commodo modi s', 1, '2019-04-03 21:43:53'),
(30, 'Test', 'chetan.rajbhandari@gmail.com', NULL, NULL, 'Testing', 1, '2019-04-13 01:34:21'),
(31, 'Test', 'chetan.rajbhandari@gmail.com', NULL, NULL, 'Testing', 1, '2019-04-13 01:34:21'),
(32, 'Test', 'chetan.rajbhandari@gmail.com', NULL, NULL, 'Testing', 1, '2019-04-13 01:34:22'),
(33, 'Test', 'chetan.rajbhandari@gmail.com', NULL, NULL, 'Testing', 1, '2019-04-13 01:34:26'),
(34, 'sdaf', 'asdf@asdf.sda', NULL, NULL, '1234', 1, '2019-04-13 01:46:32');

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
(2, 'about', 'About Us', '1550649807t.jpg', 'mdi-account-box', 1, 1, '2019-02-20 12:34:49'),
(3, 'services', 'Our Services', '1550653400s.jpg', 'mdi-creation', 1, 1, '2019-02-20 12:34:49'),
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
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `page`, `section_order`, `title`, `sub_title`, `content`, `button_text`, `button_link`, `button_position`, `image`, `image_position`, `created_on`) VALUES
(3, 'team', 0, 'We like to exceed expectations', '', '<span style=\"color: rgb(83, 83, 83); font-size: 16px; letter-spacing: 0.96px; text-align: center;\">Our team consists of three different but yet very compatible members. Each of us possess expertise in different fields enabling us to solve all your challenges.</span>', '', '', 'right', '', 'right', '2019-02-19 15:29:16'),
(4, 'home', 0, 'WELCOME TO GATEWAY SCANDINAVIA', 'Your 21st century nordic representation and communication agency with a unique blend of 50+ years of industry experience and infotech. We take advantage of digitization and expertise to help our clients get smarter.', '<p>With more than 50 years of experience of the travel trade and tourism industry we are experts on the Scandinavian markets and can assist you in any field of business you need to develop. We welcome all kind of business–small or big. Whether you are a destination ,a boutique-hotel ,a resort, a hotel-group,an attraction,a cruise Line or an airline, we will find a solution tailor made just for you.</p><p>Together,we will create solid strategies based on our unique analysing tools to build brand awareness around your products and deliver the expected ROI. Our nature is innovative and we like thinking out of the box,so researching new prospects and strengthening your presence in the scandic market will be our utmost concern. We are open to strategic partnerships and we look forward to co-create with you. Gateway Scandinavia stands in such grounds where we are highly capable of showing results,therefore we guarantee!! Our array of tailored solutions gives you the freedom to choose between the services we offer according to your necessity. We offer flexible pricing with no long term commitment basis,all solutions depending on your preference.</p>', 'About Us', 'https://gateway-scandinavia.com/site/about/', 'center', NULL, 'left', '2019-02-19 15:33:01'),
(5, 'about', 0, 'TAILORED, TARGETED AND LATEST SOLUTIONS', '', '<p>Our mission is to help international destinations and companies within the tourism industry to increase sales and maximize media exposure in the Nordic countries. Our main focus is to establish and maximize our client´s online visibility in Scandinavia. We maximize our client\'s presence through our virtual destination concept, a digital platform for all kinds of communication on the Scandinavian markets. Our concept of using big data and other advanced analyzing tools in the process gives us an in-depth understanding of our client\'s products, providing us the knowledge needed to provide our clients with outstanding online and offline strategies.</p><p>All in all we represent, market and sell your destination and products in all the Scandinavian countries. With a combined experience of more than 50 years in the Scandinavian travel industry, we know how to increase sales and visibility even for you.</p>', '', '', 'left', NULL, 'left', '2019-02-19 15:41:32');

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
(1, 'Analyse Big Data', 'Big Data', 'Big Data – Big Knowledge', 'To know where to go you have to know where you are.', '<div>We use advanced digital analysis tools in order to present you with a data-driven market analysis. The results lay the foundation for your online as well as offline strategy.</div><div><br></div><ul><li>Text mining and keyword analysis</li><li>Statistical analysis</li><li>Touch-point analysis</li><li>Online data & presence analysis</li><li>Predictions</li><li>Customer behavioral analysis</li><li>Strategy building and implementation based on real facts and figures</li></ul><div><br></div>', '15505565333.jpg', '2019-02-19 11:53:53'),
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
('d65e63d712ce04779523cf1f0f4b83ea', 1561914761, 0x5f5f666c6173687c613a303a7b7d),
('dbfd74f0b06189de8e3ab58f8320e9aa', 1561914762, 0x5f5f666c6173687c613a303a7b7d),
('bace147a6a47e37fd78b739a61e67a5d', 1561914761, 0x5f5f666c6173687c613a303a7b7d),
('84cd12494f355472c5275e10f973d8ce', 1561914760, 0x5f5f666c6173687c613a303a7b7d),
('6c9baa5d2d6fd7946b9bb3903cba1757', 1561914759, 0x5f5f666c6173687c613a303a7b7d),
('64d3fc03769d09b740d17b80c39d8b05', 1561914759, 0x5f5f666c6173687c613a303a7b7d),
('a3159203008804ee69647529d8384e37', 1561914758, 0x5f5f666c6173687c613a303a7b7d),
('8afc75f622463fd58aaeb35de4e06af5', 1561914758, 0x5f5f666c6173687c613a303a7b7d),
('d9bc25820fa21a0e2f9085242ced9408', 1561914744, 0x5f5f666c6173687c613a303a7b7d),
('afc49702ff34eccdff826deabb01a880', 1561913491, 0x5f5f666c6173687c613a303a7b7d),
('bd1a89de53f36459fd08f5aa1b6f41c5', 1561912325, 0x5f5f666c6173687c613a303a7b7d),
('65a038d16110776756d32e98b40a5654', 1561910723, 0x5f5f666c6173687c613a303a7b7d),
('c143fd6a4dc2703eeb7e0c0d8610d4e8', 1561905748, 0x5f5f666c6173687c613a303a7b7d),
('7d253b00129e2672723affa551763102', 1561905740, 0x5f5f666c6173687c613a303a7b7d),
('1ab4dce4990cf91f992485a78bc9e908', 1561897327, 0x5f5f666c6173687c613a303a7b7d),
('2471373477f380b58f4e61334787d42f', 1561897317, 0x5f5f666c6173687c613a303a7b7d),
('6556479b418438c9a22f3c5d2ec0973b', 1561889817, 0x5f5f666c6173687c613a303a7b7d),
('519caaea8bada9bf288d7bf27f557a5d', 1561888359, 0x5f5f666c6173687c613a303a7b7d),
('8fb11a14b256225d608743f0b9839a42', 1561878293, 0x5f5f666c6173687c613a303a7b7d),
('be34d35b3576710ce45b813e22b517f2', 1561876667, 0x5f5f666c6173687c613a303a7b7d),
('bb876adb57931a163212edaf9162f482', 1561856943, 0x5f5f666c6173687c613a303a7b7d),
('459e8e1e3229167186d9669b7e024ff2', 1561855177, 0x5f5f666c6173687c613a303a7b7d),
('eb962da11e20b83ed989df49ddbfd6c3', 1561855176, 0x5f5f666c6173687c613a303a7b7d),
('18bbc75c75100eab054dd652fad2e441', 1561854453, 0x5f5f666c6173687c613a303a7b7d),
('f53f9085078df4f6e5c7f61d81a4f60a', 1561853256, 0x5f5f666c6173687c613a303a7b7d),
('6ce917c8653fc5f23c80c0ba5af06f99', 1561845448, 0x5f5f666c6173687c613a303a7b7d),
('74a57fcd4ad903d3a8a5ac30aceadbc9', 1561845447, 0x5f5f666c6173687c613a303a7b7d),
('034317d3efe40f30b9f67114b48f839b', 1561845072, 0x5f5f666c6173687c613a303a7b7d),
('57fddb73e33a573ecb9a08edfccd9c08', 1561845071, 0x5f5f666c6173687c613a303a7b7d),
('fd7f58e8e8ae3a2a10dc700d6b7405e6', 1561845036, 0x5f5f666c6173687c613a303a7b7d),
('56465d10c3ad8f7a1820f21c6ef3f7ed', 1561832523, 0x5f5f666c6173687c613a303a7b7d),
('ffed4e0fe75ca9f781f29c6270ca84c8', 1561830932, 0x5f5f666c6173687c613a303a7b7d),
('9822b8e3fb8973b1d53648a25d62650c', 1561825814, 0x5f5f666c6173687c613a303a7b7d),
('4b6bc3b481c8db30090f88ed81c1d49c', 1561821379, 0x5f5f666c6173687c613a303a7b7d),
('69ba996bae55f8fa91385f12a0867080', 1561820785, 0x5f5f666c6173687c613a303a7b7d),
('19cdffabae764334a5bd6744089ffc02', 1561820770, 0x5f5f666c6173687c613a303a7b7d),
('fe282c3483f741624155b3954f3db053', 1561795643, 0x5f5f666c6173687c613a303a7b7d),
('274f691d55a123ae8048cc8265bb5d7a', 1561794382, 0x5f5f666c6173687c613a303a7b7d),
('38e83c5fdf194211139978f235750f93', 1561793900, 0x5f5f666c6173687c613a303a7b7d),
('a36fb536cbbfd8af5860f2e9be30cc9b', 1561789931, 0x5f5f666c6173687c613a303a7b7d),
('37cc1d4da697b8757c86563bd12c40d4', 1561789892, 0x5f5f666c6173687c613a303a7b7d),
('42e30bcc6b962dfe8ca04a7b25d2a381', 1561789347, 0x5f5f666c6173687c613a303a7b7d),
('d3fcbc693945f261d527079edf691a50', 1561789340, 0x5f5f666c6173687c613a303a7b7d),
('cefc4b78819ec917de91d2c83ee1d10a', 1561789340, 0x5f5f666c6173687c613a303a7b7d),
('07e82d7c4c133500a6ae5a94eef2e3e5', 1561789037, 0x5f5f666c6173687c613a303a7b7d),
('a4822232a60869ee744adeaace613b28', 1561788185, 0x5f5f666c6173687c613a303a7b7d),
('68dde1ea212a6babafcceaab2ae3f008', 1561788117, 0x5f5f666c6173687c613a303a7b7d),
('ebd8d1194b1c0f709f342cb2f1acfbc0', 1561788102, 0x5f5f666c6173687c613a303a7b7d),
('4f7c4354544d1c620f1804abcaf55bbc', 1561778742, 0x5f5f666c6173687c613a303a7b7d),
('ecc9477ee3d5fb604985132aaf807ad4', 1561778740, 0x5f5f666c6173687c613a303a7b7d),
('8decdbed30ec337b56f98f6e50a31ba2', 1561778738, 0x5f5f666c6173687c613a303a7b7d),
('9fde810b0367bac7217c7e5929c09d6f', 1561778736, 0x5f5f666c6173687c613a303a7b7d),
('84cec08f766fe601bb1a456aa8f6105d', 1561778735, 0x5f5f666c6173687c613a303a7b7d),
('73d8f70ab420ffdd4fe6dfc835a45acf', 1561778733, 0x5f5f666c6173687c613a303a7b7d),
('01e7015076bd5ffdebfe4e48298946a4', 1561778731, 0x5f5f666c6173687c613a303a7b7d),
('9a0b6594b5de95aee7835f4e6bb0be1b', 1561778729, 0x5f5f666c6173687c613a303a7b7d),
('0545273b984b8b8fac8ab31ec2c2a35d', 1561778728, 0x5f5f666c6173687c613a303a7b7d),
('d10ce90547c72e6a77065c93d16d6de0', 1561778726, 0x5f5f666c6173687c613a303a7b7d),
('6f22e80847e099f0dc0690e378ba485e', 1561778724, 0x5f5f666c6173687c613a303a7b7d),
('72e97a615c663673949252a0e6cbe58d', 1561778723, 0x5f5f666c6173687c613a303a7b7d),
('104c4043d39d2ea763ffcdb4163c0184', 1561778721, 0x5f5f666c6173687c613a303a7b7d),
('23b39ec4a96560f55de7303b407d7fcf', 1561778719, 0x5f5f666c6173687c613a303a7b7d),
('3754f176ef72062e6f531c29c6b72582', 1561778717, 0x5f5f666c6173687c613a303a7b7d),
('3b0d06423e9bdee224ad83c3bc4a4b1e', 1561778716, 0x5f5f666c6173687c613a303a7b7d),
('674f0f3eeb4969645cce0ba397de7002', 1561778714, 0x5f5f666c6173687c613a303a7b7d),
('2c1cd1dbc9d0fb1e17ebbf1cbd37646f', 1561778712, 0x5f5f666c6173687c613a303a7b7d),
('2a30aaebb4b5388ed4c528e26e7e61c6', 1561778711, 0x5f5f666c6173687c613a303a7b7d),
('c87f3bb8625d4b5e0ea8377acfe7ea3a', 1561778709, 0x5f5f666c6173687c613a303a7b7d),
('683c5437da20464c814ee2273db81e1a', 1561778708, 0x5f5f666c6173687c613a303a7b7d),
('cb5889b70b6d9b326c326a2baf613b23', 1561778706, 0x5f5f666c6173687c613a303a7b7d),
('800589b8a9432af1cfb39de18537c908', 1561778704, 0x5f5f666c6173687c613a303a7b7d),
('e05226960e21a07d2cf3d33d523ed4f5', 1561778703, 0x5f5f666c6173687c613a303a7b7d),
('1231dc147149cb00622fff494dd9f217', 1561778701, 0x5f5f666c6173687c613a303a7b7d),
('c61ffc07229ff7071ebad45aa05aedba', 1561778699, 0x5f5f666c6173687c613a303a7b7d),
('6e69efb748043c911c25d4c290c25831', 1561778695, 0x5f5f666c6173687c613a303a7b7d),
('ed40bc2bcb5a9fe0012a9f6da5afa7e6', 1561778693, 0x5f5f666c6173687c613a303a7b7d),
('d5d2e87ef3b5093a8a72f7ad3b62502a', 1561778692, 0x5f5f666c6173687c613a303a7b7d),
('1c9042e18394a0fd0f6785eddb56da53', 1561778690, 0x5f5f666c6173687c613a303a7b7d),
('4c172d64f1c7215ac72aef5c3edebd07', 1561778688, 0x5f5f666c6173687c613a303a7b7d),
('3dbfb6f6dfa873ce72f126003b1935be', 1561778687, 0x5f5f666c6173687c613a303a7b7d),
('0c80218885d07b88ea1b3e347d7cc400', 1561778685, 0x5f5f666c6173687c613a303a7b7d),
('d8c542da7b05fac50df739baa8dfed59', 1561778684, 0x5f5f666c6173687c613a303a7b7d),
('28b00c27350e0c192ab501911b520904', 1561778682, 0x5f5f666c6173687c613a303a7b7d),
('1deba6c73db203699fb2ef11568dc9ab', 1561778680, 0x5f5f666c6173687c613a303a7b7d),
('c0f194513fde66a5d085394540fd7ef1', 1561778679, 0x5f5f666c6173687c613a303a7b7d),
('bee687a6d2d06e8dddf7221cb18a4726', 1561778677, 0x5f5f666c6173687c613a303a7b7d),
('21033849cb3f9c3a2979a94d38d73378', 1561778675, 0x5f5f666c6173687c613a303a7b7d),
('adee02d5208448a9267880d0444cb190', 1561778673, 0x5f5f666c6173687c613a303a7b7d),
('6193fd44ba8131f8ff88e27f6e00adb4', 1561778671, 0x5f5f666c6173687c613a303a7b7d),
('193d7a6a047eb2c7a97604cc042eeb63', 1561778670, 0x5f5f666c6173687c613a303a7b7d),
('bff3c96d0dc670bf84edd4e758b6b898', 1561778668, 0x5f5f666c6173687c613a303a7b7d),
('1f904d7f63515f273f7233dc35bcab66', 1561778666, 0x5f5f666c6173687c613a303a7b7d),
('5ed3b19a2452522c1d139d374dade28e', 1561778664, 0x5f5f666c6173687c613a303a7b7d),
('467d01e9628f3079bb313944f870054b', 1561778662, 0x5f5f666c6173687c613a303a7b7d),
('7d3d7f378c5ba120b10f284f73dd65f4', 1561778661, 0x5f5f666c6173687c613a303a7b7d),
('b6383e20b74b08cea0e9ce8f47d2a760', 1561778659, 0x5f5f666c6173687c613a303a7b7d),
('259e1522961c08cc379cb717b783d558', 1561778657, 0x5f5f666c6173687c613a303a7b7d),
('8ddd379b75c0d2150dc20f8118ea2d3e', 1561778656, 0x5f5f666c6173687c613a303a7b7d),
('81af7f041d655feef92c35b44ff43715', 1561778654, 0x5f5f666c6173687c613a303a7b7d),
('8062afd9942eaeca140fd6d645a1cf60', 1561778653, 0x5f5f666c6173687c613a303a7b7d),
('bfb03387f1ff4fa7f614dca2877f5c8e', 1561778651, 0x5f5f666c6173687c613a303a7b7d),
('6f71a07be106c0884830418047cb7a2f', 1561778650, 0x5f5f666c6173687c613a303a7b7d),
('092108f5df28b2597036f06b1b0be24e', 1561778648, 0x5f5f666c6173687c613a303a7b7d),
('cedaa640805c6aee230856393e175c8c', 1561778646, 0x5f5f666c6173687c613a303a7b7d),
('32774e4d189b8afca6dc7376916a6ea2', 1561778644, 0x5f5f666c6173687c613a303a7b7d),
('90765ab504c01c770baa3fa21ec18665', 1561778642, 0x5f5f666c6173687c613a303a7b7d),
('281de3e4b41da1674132386f0443c163', 1561778640, 0x5f5f666c6173687c613a303a7b7d),
('9afd440f02a65d7b5d62121b1d583f56', 1561778639, 0x5f5f666c6173687c613a303a7b7d),
('be4c58f84ea96c6724807715533c7fc9', 1561778638, 0x5f5f666c6173687c613a303a7b7d),
('454e0edd344fb9b0b8b191276baa8e9c', 1561778637, 0x5f5f666c6173687c613a303a7b7d),
('b1082cdaec96a3701a8ffd97a83af7a1', 1561778636, 0x5f5f666c6173687c613a303a7b7d),
('4049fc9642c50f9e73cdb72222aeadaf', 1561778635, 0x5f5f666c6173687c613a303a7b7d),
('12a00da9c3bc6fb78a8d6e0626a50af3', 1561778633, 0x5f5f666c6173687c613a303a7b7d),
('79239dcd292ae1f4717f390d61ab7641', 1561778632, 0x5f5f666c6173687c613a303a7b7d),
('c3e3b841b16170ea3f65a8f9ede00dd5', 1561778631, 0x5f5f666c6173687c613a303a7b7d),
('dffb9d3de06a1509747bdd343dc8af89', 1561778630, 0x5f5f666c6173687c613a303a7b7d),
('0b203fc65762028a74cf685c7bcaceff', 1561778629, 0x5f5f666c6173687c613a303a7b7d),
('1f9147083ca668c7d8e4e7deeeb025ec', 1561778628, 0x5f5f666c6173687c613a303a7b7d),
('21dff031e67baa6150ee5eea0cb3f56f', 1561778626, 0x5f5f666c6173687c613a303a7b7d),
('b16b16d197549043cc89a571819e4dd7', 1561778625, 0x5f5f666c6173687c613a303a7b7d),
('21eea83f92f5e626abd52077333696b0', 1561778624, 0x5f5f666c6173687c613a303a7b7d),
('a32a4577c5c4aa346cf40cf357121f6d', 1561778623, 0x5f5f666c6173687c613a303a7b7d),
('8dff986306a7307bb292113bfead35c3', 1561778622, 0x5f5f666c6173687c613a303a7b7d),
('fc1126c3e2b11c5088723a55f136bcd4', 1561778621, 0x5f5f666c6173687c613a303a7b7d),
('4172cfaf0093bffdbae07f3fab433347', 1561778620, 0x5f5f666c6173687c613a303a7b7d),
('08ed244feaed793dc3961ce1e101713f', 1561778619, 0x5f5f666c6173687c613a303a7b7d),
('176e9b89b331bfee76719f617f78971e', 1561778617, 0x5f5f666c6173687c613a303a7b7d),
('1c2ac14271eaf1267aaa9ae85afd3d26', 1561778616, 0x5f5f666c6173687c613a303a7b7d),
('b594a4396f1be78e5c6747ec19b5001e', 1561778615, 0x5f5f666c6173687c613a303a7b7d),
('4f6147b7ffd7278f9acfc00aefab38fe', 1561778613, 0x5f5f666c6173687c613a303a7b7d),
('dd9440f9744eb5ca795890b5ac0ce021', 1561778612, 0x5f5f666c6173687c613a303a7b7d),
('bc128b853f34d77f2a53d2f881458ab1', 1561778607, 0x5f5f666c6173687c613a303a7b7d),
('d5d7c22797cbc4ad1aa6a7f76b41e45c', 1561778606, 0x5f5f666c6173687c613a303a7b7d),
('2e9afbe3a6365ebd1e32608964990093', 1561778605, 0x5f5f666c6173687c613a303a7b7d),
('1aaab1217aa9b98772d2c407654cf432', 1561778604, 0x5f5f666c6173687c613a303a7b7d),
('cc116624ef0b949f425633809f6be849', 1561778603, 0x5f5f666c6173687c613a303a7b7d),
('6baada6af2664563d57bb5dd4be94555', 1561778602, 0x5f5f666c6173687c613a303a7b7d),
('8583f80f9aec1a80090257f89cdacc54', 1561778600, 0x5f5f666c6173687c613a303a7b7d),
('2051bdd15012fccf10cfa1c7edd6e58e', 1561778599, 0x5f5f666c6173687c613a303a7b7d),
('2a194cb8bcef7f29294a8f988c3e7adf', 1561778598, 0x5f5f666c6173687c613a303a7b7d),
('163800730d8a8feabda1ad4489482f27', 1561778597, 0x5f5f666c6173687c613a303a7b7d),
('35f4786c8d61a4b81d93f01e19d82724', 1561778596, 0x5f5f666c6173687c613a303a7b7d),
('442625ddb9b43a9fa33eb019f284158e', 1561778292, 0x5f5f666c6173687c613a303a7b7d),
('844265317a04543ad0c0965189993137', 1561778290, 0x5f5f666c6173687c613a303a7b7d),
('2a9d21c1cd16631710b91245051dbd6f', 1561778289, 0x5f5f666c6173687c613a303a7b7d),
('3055f727687efab3f23f226e4d16ce9e', 1561778288, 0x5f5f666c6173687c613a303a7b7d),
('6ae827da45ebea7c7cf46acfa8bee4f3', 1561778287, 0x5f5f666c6173687c613a303a7b7d),
('d8b3993b0e78ce6d489343765c7c347d', 1561778286, 0x5f5f666c6173687c613a303a7b7d),
('b70908ad0264caeedd402b5b928e5ac1', 1561778285, 0x5f5f666c6173687c613a303a7b7d),
('3e4a5e771da67dcdb0d12e61b7f56e0d', 1561778283, 0x5f5f666c6173687c613a303a7b7d),
('9a19511ea376526032d24143df502bb9', 1561778281, 0x5f5f666c6173687c613a303a7b7d),
('6a46b027638dfd52da8f63800aa22de3', 1561778280, 0x5f5f666c6173687c613a303a7b7d),
('eb6414d052824928f65427a8d8900ec8', 1561778279, 0x5f5f666c6173687c613a303a7b7d),
('d9757eb9e2ff7770714fbb1db092083d', 1561778278, 0x5f5f666c6173687c613a303a7b7d),
('0d7f347c643b08548b2c59500261d0e5', 1561778276, 0x5f5f666c6173687c613a303a7b7d),
('20cea228536aedc6633d9c6d42bcb753', 1561778275, 0x5f5f666c6173687c613a303a7b7d),
('76c8b6beb6a352e80a0779941139c28f', 1561778274, 0x5f5f666c6173687c613a303a7b7d),
('06e3188a12098c4d01e81f863a172bd2', 1561778273, 0x5f5f666c6173687c613a303a7b7d),
('57f1f7c584d10b50c99ad9f564bd7f85', 1561778272, 0x5f5f666c6173687c613a303a7b7d),
('7907be10f68ef4bfd645e811553424cf', 1561778270, 0x5f5f666c6173687c613a303a7b7d),
('2829a0500f7da1585216931c67908dfc', 1561778269, 0x5f5f666c6173687c613a303a7b7d),
('5baab0c8d508a282072920cab8bf91e3', 1561778254, 0x5f5f666c6173687c613a303a7b7d),
('c0ca9c6ed4c6de7ea4686b2147157b8c', 1561772904, 0x5f5f666c6173687c613a303a7b7d),
('ddc7f7f08ea71d2c30e74ad3fcd41ed5', 1561768753, 0x5f5f666c6173687c613a303a7b7d),
('1a36817b7b6a188f4a74e50312ca623d', 1561763703, 0x5f5f666c6173687c613a303a7b7d),
('0457a97108af93f2efb5441a3c9216ac', 1561762255, 0x5f5f666c6173687c613a303a7b7d),
('994f68efb1bf5e2eeed0adb5f17ca513', 1561761503, 0x5f5f666c6173687c613a303a7b7d),
('5a26db6d20adc3a9cdd25bcf7abf2d8e', 1561761502, 0x5f5f666c6173687c613a303a7b7d),
('a9f70e00ddd9baab5736a5482122e09f', 1561760429, 0x5f5f666c6173687c613a303a7b7d),
('51d7272ae26d168340677496e72785f7', 1561760429, 0x5f5f666c6173687c613a303a7b7d),
('b988e1168ca5ff11ca505442b0ad5b97', 1561760395, 0x5f5f666c6173687c613a303a7b7d),
('4e696ade3ab5acc2ce1d364a1bb5b9d9', 1561757916, 0x5f5f666c6173687c613a303a7b7d),
('d3faaf8d3f918218e59f38aeafc29fb2', 1561757901, 0x5f5f666c6173687c613a303a7b7d),
('8501a996564a0d30ec9dd846a029e1aa', 1561754867, 0x5f5f666c6173687c613a303a7b7d),
('7de8d4ce8587f8dac6c90c977c774383', 1561754254, 0x5f5f666c6173687c613a303a7b7d),
('6cc560fed0fd306178695cf5729f14b8', 1561754253, 0x5f5f666c6173687c613a303a7b7d),
('a3f816536598927175cb05c1fa22b2aa', 1561753547, 0x5f5f666c6173687c613a303a7b7d),
('d8517c4ab81609438887e9363792c8d6', 1561753544, 0x5f5f666c6173687c613a303a7b7d),
('358d93a0567523d5fc0b09dda352baeb', 1561753533, 0x5f5f666c6173687c613a303a7b7d),
('65258ff875cb46491e1c453505c18752', 1561747223, 0x5f5f666c6173687c613a303a7b7d),
('2398f38125b47c69b760ca702d0c6db7', 1561741228, 0x5f5f666c6173687c613a303a7b7d),
('23c2b8d570fe8e41665207074f3e3546', 1561740064, 0x5f5f666c6173687c613a303a7b7d),
('78fa2795a4e3129f64f077afb7b810cf', 1561739884, 0x5f5f666c6173687c613a303a7b7d),
('99ce61b614ac0bc6c987cf21158292d2', 1561739784, 0x5f5f666c6173687c613a303a7b7d),
('990ad875cc77353dafc2caea1ffaabab', 1561739261, 0x5f5f666c6173687c613a303a7b7d),
('cea7c1a50c91e5234f7f5a4cd0593514', 1561736869, 0x5f5f666c6173687c613a303a7b7d),
('2fba16f21bf9660a70d7ac91145ca80b', 1561929291, 0x5f5f666c6173687c613a303a7b7d),
('2953554c7a2534544fa6a5605b8347d8', 1561724094, 0x5f5f666c6173687c613a303a7b7d),
('6fb2360e6b1fb98bf8bb8dd5c7c85e95', 1561718529, 0x5f5f666c6173687c613a303a7b7d),
('336646e2a2ca9f12073b19434f163cf4', 1561712606, 0x5f5f666c6173687c613a303a7b7d),
('7a2ab288a8f7882ac3b979f490037fe4', 1561712606, 0x5f5f666c6173687c613a303a7b7d),
('c91c048125415d68991c6d7e1444f9fc', 1561712605, 0x5f5f666c6173687c613a303a7b7d),
('c8903ba903e1a2fa61901f57977ce6d9', 1561709458, 0x5f5f666c6173687c613a303a7b7d),
('f47622346ea50ec2abe4326aaa778a80', 1561702914, 0x5f5f666c6173687c613a303a7b7d),
('ad5774c3086e5ab992030b24f6a43b58', 1561693666, 0x5f5f666c6173687c613a303a7b7d),
('78c12c42e8331a97f69d93e4be14912d', 1561690877, 0x5f5f666c6173687c613a303a7b7d),
('4401d6bd79f4d79070463f74dca860a1', 1561688288, 0x5f5f666c6173687c613a303a7b7d),
('f4d7afb09e65bf35b530e90254a5a442', 1561688278, 0x5f5f666c6173687c613a303a7b7d),
('57771b207c66fffc6404c6056fb9e408', 1561679979, 0x5f5f666c6173687c613a303a7b7d),
('06dd04be2820e82b1f69b18f5af26b5c', 1561677969, 0x5f5f666c6173687c613a303a7b7d),
('c2376d454190f382b48f8caf8d4ddf60', 1561671821, 0x5f5f666c6173687c613a303a7b7d),
('1b379bbbc92221401112e20138c2fe19', 1561670370, 0x5f5f666c6173687c613a303a7b7d),
('bb0861dfd06081764331bbe568e8d0fb', 1561664213, 0x5f5f666c6173687c613a303a7b7d),
('a99f60c1c9291d41bede42e1388be684', 1561660382, 0x5f5f666c6173687c613a303a7b7d),
('23fd3a8ec38219fab2593d76fb79c7ff', 1561660374, 0x5f5f666c6173687c613a303a7b7d),
('4171b3a6dab539d2f965f98bdda214e4', 1561658647, 0x5f5f666c6173687c613a303a7b7d),
('1b2e9674b9b91f8d32f375e998ba9534', 1561658616, 0x5f5f666c6173687c613a303a7b7d),
('70f32863a61c4c304303ffb18eff1705', 1561656710, 0x5f5f666c6173687c613a303a7b7d),
('5d8efc943a87280c5278d57db5bc600b', 1561645111, 0x5f5f666c6173687c613a303a7b7d),
('2263d42a2667e137a0040ea77ef138c6', 1561639246, 0x5f5f666c6173687c613a303a7b7d),
('3422828dd1fc4b6d999a940937a3d1bb', 1561636902, 0x5f5f666c6173687c613a303a7b7d),
('5b802b13ab163f2ec98e06a537531969', 1561636893, 0x5f5f666c6173687c613a303a7b7d),
('7e7ef1c934fa537296c28ed6be241e91', 1561632125, 0x5f5f666c6173687c613a303a7b7d),
('f55a7a8c73c3c1109398be1f15d7e1ac', 1561631903, 0x5f5f666c6173687c613a303a7b7d),
('238929ece441691012ec79f2a2e89018', 1561626336, 0x5f5f666c6173687c613a303a7b7d),
('6bc498555cde4227c60248173dd40ab3', 1561626276, 0x5f5f666c6173687c613a303a7b7d),
('b1bdf47230518a07fddb5f0d256154bb', 1561616235, 0x5f5f666c6173687c613a303a7b7d),
('ff2672d1f2102d26d610ff8281b20dfd', 1561609221, 0x5f5f666c6173687c613a303a7b7d),
('d79ce56771a8ef889a98080458911fdd', 1561609165, 0x5f5f666c6173687c613a303a7b7d),
('b08228c6b5b78bc9dd1c03c914dc9d44', 1561609166, 0x5f5f666c6173687c613a303a7b7d),
('91e1d41a7c75431044e53ffd487dc873', 1561601790, 0x5f5f666c6173687c613a303a7b7d),
('8729a7e4fcbe1d657836693078fb3a91', 1561601774, 0x5f5f666c6173687c613a303a7b7d),
('54664c04c00e06b3a97e75c7650bca8e', 1561593311, 0x5f5f666c6173687c613a303a7b7d),
('f12ec803b49b8fe08108beb4271097e4', 1561570960, 0x5f5f666c6173687c613a303a7b7d),
('5af1562dc4416c7e00c556d65e0bbe70', 1561570951, 0x5f5f666c6173687c613a303a7b7d),
('206d3c75949d2313f9af52b076a85f47', 1561559852, 0x5f5f666c6173687c613a303a7b7d),
('23d4133b08c43ee1e3df376dfdcbb908', 1561554061, 0x5f5f666c6173687c613a303a7b7d),
('ef138d585b6f0f1150658ca1808e3f45', 1561548153, 0x5f5f666c6173687c613a303a7b7d),
('7e00923147bddbdc4dab4c8af8cf0cd8', 1561525587, 0x5f5f666c6173687c613a303a7b7d),
('c05f6a303f17bee53eb5079d763bc90b', 1561522060, 0x5f5f666c6173687c613a303a7b7d),
('4daf9164b0aa6dafd9df8240d2cb4238', 1561522045, 0x5f5f666c6173687c613a303a7b7d),
('fe99bbe3a33bcf829e9ddf13091e6449', 1561520233, 0x5f5f666c6173687c613a303a7b7d),
('71594f429f32f07a7f5a2cfbb3444cf5', 1561520226, 0x5f5f666c6173687c613a303a7b7d),
('2bbea518a8cf8e1fb72ca0b7de48ba9c', 1561520224, 0x5f5f666c6173687c613a303a7b7d),
('bf95eec0004d39989ee9f9d10b0203ff', 1561519471, 0x5f5f666c6173687c613a303a7b7d),
('221c7acdb5e5a1b7af152090bf8e4d4f', 1561518377, 0x5f5f666c6173687c613a303a7b7d),
('7fe69f38b8a927134decf9b18ac9085a', 1561502138, 0x5f5f666c6173687c613a303a7b7d),
('9278deed236dd0301308df650152c45a', 1561489226, 0x5f5f666c6173687c613a303a7b7d),
('014e22207ed682fa860b0bb3c2469135', 1561489226, 0x5f5f666c6173687c613a303a7b7d),
('e93f7d4562ca56273f33cf194a82bca1', 1561489200, 0x5f5f666c6173687c613a303a7b7d),
('a84597f485df1a27fe8c20f851e29799', 1561488787, 0x5f5f666c6173687c613a303a7b7d),
('6ec50c32d0a08306eca681760a06b894', 1561487768, 0x5f5f666c6173687c613a303a7b7d),
('ec9d109afcc7df96aee60195fd05469f', 1561487759, 0x5f5f666c6173687c613a303a7b7d),
('ce55d588bd1b5b62c16bc4cea9fc0661', 1561483164, 0x5f5f666c6173687c613a303a7b7d),
('097da5a5665cd49f76bc8b18dd413dd7', 1561483432, 0x5f5f666c6173687c613a303a7b7d),
('f2dd5dae1571a2dfe1fb812ecfda6767', 1561482017, 0x5f5f666c6173687c613a303a7b7d),
('32f35d8132f0d664a046e1e6e478ccfe', 1561482008, 0x5f5f666c6173687c613a303a7b7d),
('8e89c4e135ccb0971f89587fa8687446', 1561480874, 0x5f5f666c6173687c613a303a7b7d),
('eacc36ba574b9139e2fd22cffbafc66f', 1561480021, 0x5f5f666c6173687c613a303a7b7d),
('ee94c4ef7057ed5e8e7de338f662d0e1', 1562332637, 0x5f5f666c6173687c613a303a7b7d5f5f72657475726e55726c7c733a373a222f6170706c6574223b5f5f69647c693a313b),
('ee08e9cee0bae69a76b12b35f2db56c2', 1562335288, 0x5f5f666c6173687c613a303a7b7d),
('9a789fa842098aae88bdb1fc58c91e52', 1561468146, 0x5f5f666c6173687c613a303a7b7d),
('cf471a6ea32f023a96ccc11849a3de48', 1561459752, 0x5f5f666c6173687c613a303a7b7d),
('8180f3f95c9fe1142b831842057aabd3', 1561457585, 0x5f5f666c6173687c613a303a7b7d),
('2ad8b5dfc31f5c4cb358645b2f037efe', 1561453035, 0x5f5f666c6173687c613a303a7b7d),
('4c77ae833814cd3888359d92ee0ae64e', 1561449250, 0x5f5f666c6173687c613a303a7b7d),
('96354b9a4f1a25b1923539198ec3f89d', 1561443410, 0x5f5f666c6173687c613a303a7b7d),
('f50ce4206a1a546367e23b376d82c0da', 1561442220, 0x5f5f666c6173687c613a303a7b7d),
('73c0e6ec39769bf63cced71194bbc01b', 1561438894, 0x5f5f666c6173687c613a303a7b7d),
('d9ba642b9611c16850e0c47de52b65e5', 1561438648, 0x5f5f666c6173687c613a303a7b7d),
('dfecb4fdb4044c307d6baa9c7c218a66', 1561437021, 0x5f5f666c6173687c613a303a7b7d),
('caa0344b32337a613e4c6255aec45934', 1561437013, 0x5f5f666c6173687c613a303a7b7d),
('2afc2e01d674939f092c5510d6a17195', 1561432150, 0x5f5f666c6173687c613a303a7b7d),
('e68a742910e9906b25d145a5bea797a2', 1561431927, 0x5f5f666c6173687c613a303a7b7d),
('af23d5489914415921ffa9c7c4765cff', 1561424499, 0x5f5f666c6173687c613a303a7b7d),
('ef250b89b6f8c79c8217c3d22fc9ba45', 1561424487, 0x5f5f666c6173687c613a303a7b7d),
('fcb5c823a29ad46053a2123c97415e16', 1561424486, 0x5f5f666c6173687c613a303a7b7d),
('ff9e9bd72627d3cf891e3206624f00c8', 1561421275, 0x5f5f666c6173687c613a303a7b7d),
('196c61b00f754079db1c6ed80c29936c', 1561407969, 0x5f5f666c6173687c613a303a7b7d),
('6ea52b60d132a25a38c133a143791d1d', 1561399911, 0x5f5f666c6173687c613a303a7b7d),
('49aa8a5e3248728014cc93bf9353f4db', 1561399902, 0x5f5f666c6173687c613a303a7b7d),
('a405457225161e31057592614b196948', 1561396867, 0x5f5f666c6173687c613a303a7b7d),
('1791f7982473da0674e720c2217c2050', 1561395974, 0x5f5f666c6173687c613a303a7b7d),
('c53552e1f0fdc6147a6f28bed11c1984', 1561394163, 0x5f5f666c6173687c613a303a7b7d),
('19668546a38cc2d955fde46e7f2285ae', 1561382791, 0x5f5f666c6173687c613a303a7b7d),
('7172568d6ca47bf740374858edb700f6', 1561379945, 0x5f5f666c6173687c613a303a7b7d),
('d804cc9cb5524aa9eade75821528dbed', 1561379875, 0x5f5f666c6173687c613a303a7b7d),
('71a4c873f073f1b4053f3ba6d2674c72', 1561376936, 0x5f5f666c6173687c613a303a7b7d),
('2e30eadfd248b3d26603cc31ac020d62', 1561373671, 0x5f5f666c6173687c613a303a7b7d),
('81444d011ba5a407404b8df941255cb8', 1561358355, 0x5f5f666c6173687c613a303a7b7d),
('def51420c65f495811b9d72f53a5e9cd', 1561335941, 0x5f5f666c6173687c613a303a7b7d),
('70115ceead535dd2edd9f8b46bf1897e', 1561327175, 0x5f5f666c6173687c613a303a7b7d),
('d116cfe6b54c94680ab884cdcf339733', 1561323903, 0x5f5f666c6173687c613a303a7b7d),
('50f6ad008975e13cc278ecf8fda0e917', 1561323889, 0x5f5f666c6173687c613a303a7b7d),
('495a749993184f612dbe2e6c4792f841', 1561311906, 0x5f5f666c6173687c613a303a7b7d),
('90f4a4dadbbc906c6303ffccbd043ddd', 1561311905, 0x5f5f666c6173687c613a303a7b7d),
('b602d1bc948f978ce0cce094f0b213cc', 1561309971, 0x5f5f666c6173687c613a303a7b7d),
('ea9010da479da902ac991dc4031168da', 1561305070, 0x5f5f666c6173687c613a303a7b7d),
('1b4861edd4f84810943af645d46b91ea', 1561302017, 0x5f5f666c6173687c613a303a7b7d),
('0517caa05cf2e00e240063915acde279', 1561302011, 0x5f5f666c6173687c613a303a7b7d),
('15b50cc026accdb40f1d0d38e4e91561', 1561302010, 0x5f5f666c6173687c613a303a7b7d),
('41152e6a28420fd284e9ef901ca311ae', 1561301820, 0x5f5f666c6173687c613a303a7b7d),
('a3089aa1b064d779a3ce1833b95d374b', 1561301819, 0x5f5f666c6173687c613a303a7b7d),
('eaf0e9115a59e1b5a25c81fae6a17a2e', 1561296604, 0x5f5f666c6173687c613a303a7b7d),
('7a4d1ad813036eb570c680631c59f9ff', 1561277444, 0x5f5f666c6173687c613a303a7b7d),
('675df696095b9c5db963e93a7f5260fa', 1561270660, 0x5f5f666c6173687c613a303a7b7d),
('b021d7f5738f436365788d8b5546d4f2', 1561270643, 0x5f5f666c6173687c613a303a7b7d),
('383adc02bf9d10a2f2ba5fe2ef41e58b', 1561255983, 0x5f5f666c6173687c613a303a7b7d),
('d4a96e73121bf81aa42c68ab9b73c4cf', 1561255980, 0x5f5f666c6173687c613a303a7b7d),
('b9cfb87bd37eefb07880b66a0ce3755f', 1561255976, 0x5f5f666c6173687c613a303a7b7d),
('b14cd2b62c3b9763cf59dc1371b86cfc', 1561255975, 0x5f5f666c6173687c613a303a7b7d),
('b0c29f1d5cbc0edfc4e093df7ca26567', 1561249305, 0x5f5f666c6173687c613a303a7b7d),
('b55db9355b23c82229e47de652768f4a', 1561249303, 0x5f5f666c6173687c613a303a7b7d),
('c1dd4ac7234145cce1253a7f50dd282c', 1561249302, 0x5f5f666c6173687c613a303a7b7d),
('e3e87745263c7cf939badc4a1301846b', 1561248235, 0x5f5f666c6173687c613a303a7b7d),
('2be770e638c7bc6dfeb43fe908516366', 1561230850, 0x5f5f666c6173687c613a303a7b7d),
('2d609c846e0ce4b340219e86d4a0912d', 1561227336, 0x5f5f666c6173687c613a303a7b7d),
('3cc97eef6de77d417b8d90ea29ef7c57', 1561227336, 0x5f5f666c6173687c613a303a7b7d),
('b6aba7dfb812fa5c0c7078a73e690248', 1561226567, 0x5f5f666c6173687c613a303a7b7d),
('eea3dd4077e347c3e587c1ffe5333dbb', 1561221707, 0x5f5f666c6173687c613a303a7b7d),
('20cbf4a3af18e51fa67439c656e1d461', 1561217680, 0x5f5f666c6173687c613a303a7b7d),
('04862a72874c959743a4bba799fbefcd', 1561217679, 0x5f5f666c6173687c613a303a7b7d),
('785a9a33699ba79ef1e7eef626f49ddd', 1561215439, 0x5f5f666c6173687c613a303a7b7d),
('fd041555f6f955dbd335d4741002b27a', 1561215434, 0x5f5f666c6173687c613a303a7b7d),
('56a0b9d2dce88e6751385e3f2a7fa4bc', 1561215419, 0x5f5f666c6173687c613a303a7b7d),
('e4f6c593416937a83f9f56a53bd9f0af', 1561208221, 0x5f5f666c6173687c613a303a7b7d),
('59e123cf7b557a8653ba8fd1882f73ad', 1561204687, 0x5f5f666c6173687c613a303a7b7d),
('ceeaa9f515632839e39547c54f78bc83', 1561201908, 0x5f5f666c6173687c613a303a7b7d),
('2b5b80bc0dd14dfa5cf814fb1c959a35', 1561201900, 0x5f5f666c6173687c613a303a7b7d),
('bf06c8856f3598918adcefcebdd59af5', 1561174109, 0x5f5f666c6173687c613a303a7b7d),
('b451fbdfd2198321f44fe3daa2be2dbf', 1561164012, 0x5f5f666c6173687c613a303a7b7d),
('bcf9dd89807cad7d1789ff99967dcf7d', 1561156126, 0x5f5f666c6173687c613a303a7b7d),
('dce9972f021a000d31292db6a6fad3c0', 1561155390, 0x5f5f666c6173687c613a303a7b7d),
('1c7eada6617c8c1da57e2759bc1aa56f', 1561155388, 0x5f5f666c6173687c613a303a7b7d),
('0969abd1d7f642bca103c40e86d4cf5d', 1561155386, 0x5f5f666c6173687c613a303a7b7d),
('a6a49ea8488b5ad728e0e724b77663db', 1561155374, 0x5f5f666c6173687c613a303a7b7d),
('816579e2b2ca28013caa02433353a133', 1561155368, 0x5f5f666c6173687c613a303a7b7d),
('bf0eb80204e8ad8ccc487767b69a2704', 1561150245, 0x5f5f666c6173687c613a303a7b7d),
('13c31f85207bdaaa62989e227697b8e2', 1561145477, 0x5f5f666c6173687c613a303a7b7d),
('c6db91a0a665a92f4db57227552e4446', 1561145476, 0x5f5f666c6173687c613a303a7b7d),
('fa5d4e4a54a505da905e2f872b6b120b', 1561145472, 0x5f5f666c6173687c613a303a7b7d),
('11c69544097b38bdaf77a94cb7885cd6', 1561141895, 0x5f5f666c6173687c613a303a7b7d),
('32bd6a8e3c946505098bbc5bd8629713', 1561134607, 0x5f5f666c6173687c613a303a7b7d),
('a4e4482629b911c7267dc8267ce8a5b3', 1561133537, 0x5f5f666c6173687c613a303a7b7d),
('b9a5aab298ed040bd1192610d94cf51b', 1561115206, 0x5f5f666c6173687c613a303a7b7d),
('a461e203a175f56cd28103ec68085800', 1561108743, 0x5f5f666c6173687c613a303a7b7d),
('635eaa9a0a18e9fea73f17dd927bd0e8', 1561097833, 0x5f5f666c6173687c613a303a7b7d),
('c0a1be7813e24f43943c9731f53998cd', 1561090568, 0x5f5f666c6173687c613a303a7b7d),
('6b0fce549c72f8adb6949d6aa51d3f87', 1561075987, 0x5f5f666c6173687c613a303a7b7d),
('f9bc5672eccb271769f8b8f5516c2743', 1561075978, 0x5f5f666c6173687c613a303a7b7d),
('309d59da5ad5ec69313eca273423bc94', 1561067206, 0x5f5f666c6173687c613a303a7b7d),
('a8e4f72278d7986df69d365ca11c9a52', 1561063029, 0x5f5f666c6173687c613a303a7b7d),
('4545be6872d2338ef840aea6639694cc', 1561062976, 0x5f5f666c6173687c613a303a7b7d),
('8acd3c7871c4327fc15ff0e89db28938', 1561055765, 0x5f5f666c6173687c613a303a7b7d),
('269d121b397e2b42331f081b1eae3d75', 1561055740, 0x5f5f666c6173687c613a303a7b7d),
('8b38c012fe69961e0bf821084219345f', 1561055732, 0x5f5f666c6173687c613a303a7b7d),
('07fc7b4b1db7be9abba209eec5a27545', 1561052084, 0x5f5f666c6173687c613a303a7b7d),
('c9c52abbe3acfb919dcde63c741cfb2d', 1561041873, 0x5f5f666c6173687c613a303a7b7d),
('e61f770a16d0bc8b97d9b526a93a8564', 1561041871, 0x5f5f666c6173687c613a303a7b7d),
('8ec08e89576514cc6d5a39acc93c61c4', 1561041870, 0x5f5f666c6173687c613a303a7b7d),
('b0ede8a2cbcb93011d27cc7319f16896', 1561040846, 0x5f5f666c6173687c613a303a7b7d),
('1e83314705fdc7415ac9699f60cdd410', 1561039214, 0x5f5f666c6173687c613a303a7b7d),
('6cf51a3ce56fb8c158937f15793ec37a', 1561036823, 0x5f5f666c6173687c613a303a7b7d),
('253290c60590da6e41460803bb323e0b', 1561026927, 0x5f5f666c6173687c613a303a7b7d),
('8fed8e367a194848d05aebf95e059e52', 1561026917, 0x5f5f666c6173687c613a303a7b7d),
('e0f4689324b3686d703475e181d5d8d4', 1561009933, 0x5f5f666c6173687c613a303a7b7d),
('32736382f0ae320a85e4e023115e4525', 1561003513, 0x5f5f666c6173687c613a303a7b7d),
('cbd1e0005a60d36ff081f5ed7e1cc1cd', 1561000461, 0x5f5f666c6173687c613a303a7b7d),
('b7c1c79928bab0687c67aae9120084eb', 1560999527, 0x5f5f666c6173687c613a303a7b7d),
('8e58726befbdfba2fb72b87e26d69b3a', 1560996946, 0x5f5f666c6173687c613a303a7b7d),
('674bd56bcba3168c530f07af9ae8758b', 1560993651, 0x5f5f666c6173687c613a303a7b7d),
('aa68e154d15ccd08c31b71e0bfe0415c', 1560993644, 0x5f5f666c6173687c613a303a7b7d),
('94b08b064c135620e12ce77b7a7cd5c0', 1560993622, 0x5f5f666c6173687c613a303a7b7d),
('a1ff71c688d7d7787acde6d2eb35fcc4', 1560993211, 0x5f5f666c6173687c613a303a7b7d),
('f3219d270f36f4fe11b544cdff2071aa', 1560990912, 0x5f5f666c6173687c613a303a7b7d),
('b0d58ac080ea9b1ab570280d8b15e246', 1560989868, 0x5f5f666c6173687c613a303a7b7d),
('76badaf417cccee0f64857fb4426d8c9', 1560989860, 0x5f5f666c6173687c613a303a7b7d),
('9274b15a76d34bbb3021006d877ebd46', 1560984583, 0x5f5f666c6173687c613a303a7b7d),
('00d370dfc05d965ea89a6c257d7ae1e6', 1560984582, 0x5f5f666c6173687c613a303a7b7d),
('2e3a118ad157c2f2ecf9a1450df32ced', 1560984562, 0x5f5f666c6173687c613a303a7b7d),
('7f85268e1d5e0c07ade02bd03b918126', 1560983414, 0x5f5f666c6173687c613a303a7b7d),
('b39db39055eb52a44c039ed9f6a5c4f1', 1560971721, 0x5f5f666c6173687c613a303a7b7d),
('045582a9cfdc76138e1e226fca36ee64', 1560968471, 0x5f5f666c6173687c613a303a7b7d),
('7249879c4b7a0955bcabb28c068a108f', 1560968470, 0x5f5f666c6173687c613a303a7b7d),
('02fd4275956cea250d5de53d6a4c8abd', 1560966447, 0x5f5f666c6173687c613a303a7b7d),
('745676da98552068162a65f607c68369', 1560962384, 0x5f5f666c6173687c613a303a7b7d),
('de03cb786b894ea42a5171a0f5ca6155', 1560962370, 0x5f5f666c6173687c613a303a7b7d),
('8bbff426b0263ab04a91a12c29a777d6', 1560949743, 0x5f5f666c6173687c613a303a7b7d),
('b8e2c594ea80b733abde68dba21b6de6', 1560948833, 0x5f5f666c6173687c613a303a7b7d),
('7da8e3f5cf9b2e8a25c87c010e970a45', 1561037591, 0x5f5f666c6173687c613a303a7b7d),
('2a885f2bc41ac2445e5ccd01d21ee640', 1560935619, 0x5f5f666c6173687c613a303a7b7d),
('4e867614e43b184122d3c86638c6206c', 1560935605, 0x5f5f666c6173687c613a303a7b7d),
('204551fc1da8d75a628a3a6ccf8bbd00', 1560929160, 0x5f5f666c6173687c613a303a7b7d),
('2e2f604bef16237c52da3ede807062e0', 1560927239, 0x5f5f666c6173687c613a303a7b7d),
('b2589a8f28054db2d2381e77ca3ba161', 1560925033, 0x5f5f666c6173687c613a303a7b7d),
('3e909f3711b9acdb67248158574559b1', 1560918092, 0x5f5f666c6173687c613a303a7b7d),
('38306461a52450245f31e90b46858723', 1560916817, 0x5f5f666c6173687c613a303a7b7d),
('23b1549f8cc5fdd63d3c58746d715f1c', 1560898047, 0x5f5f666c6173687c613a303a7b7d),
('ec7f6998f297d2bacbcffae3b88c34b7', 1560896595, 0x5f5f666c6173687c613a303a7b7d),
('03afd34c412fdb7a9c51c8ab39e3a39b', 1560890896, 0x5f5f666c6173687c613a303a7b7d),
('96f36a1656553d402e1243056833f797', 1560890251, 0x5f5f666c6173687c613a303a7b7d),
('ee5baf551f1eafbdb9cc052a8e71f1c1', 1560890242, 0x5f5f666c6173687c613a303a7b7d),
('8ba59441ef1c8e1917a8e50702f024d6', 1560885842, 0x5f5f666c6173687c613a303a7b7d),
('b95d286707c1ddd84559036fda2eb447', 1560879424, 0x5f5f666c6173687c613a303a7b7d),
('af3a7906d6ba33a924ad74c5db95deaa', 1560879434, 0x5f5f666c6173687c613a303a7b7d),
('1a11a995d24b3bd89ecd2ad9834a4c29', 1560879421, 0x5f5f666c6173687c613a303a7b7d),
('91a591bbf4d3e9d05a3c4f616fc4026c', 1560870562, 0x5f5f666c6173687c613a303a7b7d),
('d556f82c3a414ef996c21d382e7b79d3', 1560870101, 0x5f5f666c6173687c613a303a7b7d),
('a5dd7610cd2afd524e6da913ffa20419', 1560869224, 0x5f5f666c6173687c613a303a7b7d),
('2b070f573a743e6ef4d046944bd4045e', 1560869215, 0x5f5f666c6173687c613a303a7b7d),
('d5e13890cd833eb1519bfed2ccdcf27c', 1560864688, 0x5f5f666c6173687c613a303a7b7d),
('2f6ce30e4aaebf1fdc44ea57f952d253', 1560852472, 0x5f5f666c6173687c613a303a7b7d),
('78ca808fdfc0d91a4697905e830103e4', 1560850532, 0x5f5f666c6173687c613a303a7b7d),
('db763cf76c5866a5156f893782790bbf', 1560850510, 0x5f5f666c6173687c613a303a7b7d),
('2daae86d1f29b9e1583b6032af4f1647', 1560850510, 0x5f5f666c6173687c613a303a7b7d),
('083195bbee5add1038db69d5516eabd0', 1560835612, 0x5f5f666c6173687c613a303a7b7d),
('7e117c33bc28277cd45ce5e708c47fa6', 1560835605, 0x5f5f666c6173687c613a303a7b7d),
('6fbe91a203e485b0ca7d4e6c06cb7432', 1560833906, 0x5f5f666c6173687c613a303a7b7d),
('6cce086bac68e1a8cc4578d7a2e12b35', 1560825333, 0x5f5f666c6173687c613a303a7b7d),
('6059e16c952e91b1e0758ff6fc79cc42', 1560825321, 0x5f5f666c6173687c613a303a7b7d),
('ce0ef998cd1dfdc9de4fce4e592b0847', 1560825306, 0x5f5f666c6173687c613a303a7b7d),
('d32427da94f3a6c93563de8675d5f8a2', 1560813802, 0x5f5f666c6173687c613a303a7b7d),
('1d2a39dbf118d3e06872ff2faaef7da5', 1560813801, 0x5f5f666c6173687c613a303a7b7d),
('27876b6a578096168024014aba441b80', 1560813788, 0x5f5f666c6173687c613a303a7b7d),
('8ea8bec3f33e481794662e912ee7df7b', 1560799019, 0x5f5f666c6173687c613a303a7b7d),
('1055bd6ba03888418a817c5de2abbf54', 1560797196, 0x5f5f666c6173687c613a303a7b7d),
('df9a7f65b3e7a27d28a8827bca011da9', 1560795675, 0x5f5f666c6173687c613a303a7b7d),
('198d81aa782601340ded52d6569f99d8', 1560795666, 0x5f5f666c6173687c613a303a7b7d),
('538cdcc42553775c5003171bf6e0ebac', 1560795448, 0x5f5f666c6173687c613a303a7b7d),
('f9e36f6245afa340f1fc49776a0bcb41', 1560793919, 0x5f5f666c6173687c613a303a7b7d),
('b90a452ec29afbe9339784c446151f68', 1560791937, 0x5f5f666c6173687c613a303a7b7d),
('10f52fe0d342dc3863ae61f100b7716c', 1560783718, 0x5f5f666c6173687c613a303a7b7d),
('c34a14f1e77808d13e9031e9c3c0d22e', 1560779918, 0x5f5f666c6173687c613a303a7b7d),
('a4ea2fb8b48e10188f99be72fa6bac4f', 1560778984, 0x5f5f666c6173687c613a303a7b7d),
('043611bc91d8645dfeca26eaa811bb2a', 1560773612, 0x5f5f666c6173687c613a303a7b7d),
('8e38b479be3cf061ebb63e5e02b69b77', 1560769335, 0x5f5f666c6173687c613a303a7b7d),
('10af6fb2c32f8813910ea2ba30894b2c', 1560769055, 0x5f5f666c6173687c613a303a7b7d),
('7092780454a184c33b4c25d84af5cb3e', 1560758126, 0x5f5f666c6173687c613a303a7b7d),
('8a5b92a990240c2c137bc2cd506e564d', 1560756784, 0x5f5f666c6173687c613a303a7b7d),
('7508ff1449f2fcce644b6b4d223d7a5e', 1560752231, 0x5f5f666c6173687c613a303a7b7d),
('2d453313e63b2f6bd7dd7588b4556ec2', 1560735887, 0x5f5f666c6173687c613a303a7b7d),
('69dd42ac487e4aa2842765e7740a1ab5', 1560735434, 0x5f5f666c6173687c613a303a7b7d),
('80b61b4d596a9863bcf0cd8ba6c340df', 1560735255, 0x5f5f666c6173687c613a303a7b7d),
('5063e2683d81ee25ce6ba3e84dc2441f', 1560733368, 0x5f5f666c6173687c613a303a7b7d),
('5b5ec604cd1def79ec2e41cd72da98a0', 1560724846, 0x5f5f666c6173687c613a303a7b7d),
('d569cc5071f2c482468292986278a606', 1560720671, 0x5f5f666c6173687c613a303a7b7d),
('7955a5a51816b4ae5102e78b5fe983e7', 1560706847, 0x5f5f666c6173687c613a303a7b7d),
('c2da5bdf1b38ba902db36972e7ed4a89', 1560706847, 0x5f5f666c6173687c613a303a7b7d),
('8a2cf8ea49ee54c8bc2e2aeb674e2373', 1560706746, 0x5f5f666c6173687c613a303a7b7d),
('1aaf684893c3df536315bcc5594de7b4', 1560689798, 0x5f5f666c6173687c613a303a7b7d),
('cc11ebb287e733aea103146159940cb5', 1560684959, 0x5f5f666c6173687c613a303a7b7d),
('0ad57bbdb5adb721c663cfccb48af0ac', 1560684957, 0x5f5f666c6173687c613a303a7b7d),
('38371676de9e6a584ef95b3ec2738e9a', 1560684387, 0x5f5f666c6173687c613a303a7b7d),
('f33e1564c380a479db2208f4d63da172', 1560680307, 0x5f5f666c6173687c613a303a7b7d),
('533e7258c0f506cbc3e61b54f52d2767', 1560677345, 0x5f5f666c6173687c613a303a7b7d),
('af849d662394144298614b5c589f216f', 1560674098, 0x5f5f666c6173687c613a303a7b7d),
('bb3f5e876e2eaa3b5ff6ca0a732a48cb', 1560672099, 0x5f5f666c6173687c613a303a7b7d),
('796241bcc468d6f05efb471720602f68', 1560664975, 0x5f5f666c6173687c613a303a7b7d),
('3e3375fd2f39e866189e8e4b1c114e4c', 1560664974, 0x5f5f666c6173687c613a303a7b7d),
('28739a84d1dff1bfbd513f568d572c07', 1560664642, 0x5f5f666c6173687c613a303a7b7d),
('80b3b6cc9ce86c8a6d3785effee54cf1', 1560647914, 0x5f5f666c6173687c613a303a7b7d),
('976e699472936d053ecdeab45379b048', 1560647893, 0x5f5f666c6173687c613a303a7b7d),
('51babce80c680d7d36384a3bf87dc75f', 1560647893, 0x5f5f666c6173687c613a303a7b7d),
('4899098ff6ea692a8c2f4d67bdae5e9c', 1560642521, 0x5f5f666c6173687c613a303a7b7d),
('9d21ae6bc92dc6221011afa157ecdc7f', 1560642521, 0x5f5f666c6173687c613a303a7b7d),
('3fcdd3403f3a0c7a1fc08ec677ee1cfa', 1560642520, 0x5f5f666c6173687c613a303a7b7d),
('02b796930192b1a4f75ad4ca87dfac03', 1560642520, 0x5f5f666c6173687c613a303a7b7d),
('c2fe2b45905993694b78c7c79aa7cbf5', 1560642519, 0x5f5f666c6173687c613a303a7b7d),
('c7e7055fdd7a8807a68bd6333cdea8c3', 1560642519, 0x5f5f666c6173687c613a303a7b7d),
('74985213f4f5f64985e35ce9a4d86142', 1560642518, 0x5f5f666c6173687c613a303a7b7d),
('591e278b9e0024b67244f8fe7ce2c9bd', 1560642518, 0x5f5f666c6173687c613a303a7b7d),
('2f6b7398e2b8d21af6c8fa304802330c', 1560642517, 0x5f5f666c6173687c613a303a7b7d),
('5873d15aa26b6f6fee484151fdd3d3f7', 1560642517, 0x5f5f666c6173687c613a303a7b7d),
('756b456ba3a506a4cb269ad50959cab5', 1560641105, 0x5f5f666c6173687c613a303a7b7d),
('7965fbbadb17721aa9a67245b775a603', 1560628223, 0x5f5f666c6173687c613a303a7b7d),
('d25a15a76fe8eb36179c1df4fb7bae89', 1560619359, 0x5f5f666c6173687c613a303a7b7d),
('84549048b49dc50938e20c29912e3d41', 1560619366, 0x5f5f666c6173687c613a303a7b7d),
('17f0dcf119238f5c9ac972502059667f', 1560618022, 0x5f5f666c6173687c613a303a7b7d),
('747b48456aab1822d593fe7385f97dc2', 1560618021, 0x5f5f666c6173687c613a303a7b7d),
('de8dded2be7d8e10f9ad786dae186934', 1560615513, 0x5f5f666c6173687c613a303a7b7d),
('1b7ad16c0171ea9f5929579b4320a229', 1560615508, 0x5f5f666c6173687c613a303a7b7d),
('6a34fb4ab43a0ac6bd82fac7745d69e8', 1560615500, 0x5f5f666c6173687c613a303a7b7d),
('2c6ef4834cf5052aa11bc2c86f9b19f5', 1560615494, 0x5f5f666c6173687c613a303a7b7d),
('07b7685cfa7a9bbe46fc3df31ee76a23', 1560614972, 0x5f5f666c6173687c613a303a7b7d),
('e05b97d0234f923d74faa318ac29d590', 1560594474, 0x5f5f666c6173687c613a303a7b7d),
('b602767e812d4e7e49b55691421f96a6', 1560593767, 0x5f5f666c6173687c613a303a7b7d),
('97220d8a2e0055688ec40afd0a81df1c', 1560592138, 0x5f5f666c6173687c613a303a7b7d),
('042edb96ec357ccc7732646926b7cabf', 1560587460, 0x5f5f666c6173687c613a303a7b7d),
('05b4160c21de9e9acb20dcc0c10f5d49', 1560587459, 0x5f5f666c6173687c613a303a7b7d),
('d22f3c6c1d09d8d73d9fd1404feb43b1', 1560586435, 0x5f5f666c6173687c613a303a7b7d),
('79d3efc20d755c805f9aa8af6e53b772', 1560583893, 0x5f5f666c6173687c613a303a7b7d),
('ffd4b3af5d368cf69ca7befb049f18e0', 1560583892, 0x5f5f666c6173687c613a303a7b7d),
('1151831edc8ca2b4ca59bd9c4c726cf1', 1560579429, 0x5f5f666c6173687c613a303a7b7d),
('6ef5eb33b90265aeeacca942b015c5d9', 1560577899, 0x5f5f666c6173687c613a303a7b7d),
('29b10e9f493768734bb56fdef03e99bc', 1560565784, 0x5f5f666c6173687c613a303a7b7d),
('005f3d268cdae23eda288291f31eeb91', 1560561381, 0x5f5f666c6173687c613a303a7b7d),
('d647f5fe0345f61d6089cac768df1cc9', 1560545196, 0x5f5f666c6173687c613a303a7b7d),
('8d1f8000ebfb096454bc3dec331e6213', 1560534620, 0x5f5f666c6173687c613a303a7b7d),
('6e7e2e4ce5511e8948bdb54bc107050d', 1560531664, 0x5f5f666c6173687c613a303a7b7d),
('d1b5f67c958bee42b0f0058a31899436', 1560531655, 0x5f5f666c6173687c613a303a7b7d),
('b8340b5aef380be432b559155c44f383', 1560527226, 0x5f5f666c6173687c613a303a7b7d),
('c577f73866ba111c2e756cff655f47ff', 1560527220, 0x5f5f666c6173687c613a303a7b7d),
('00cb90faee55cc52be28617d7ac83799', 1560527215, 0x5f5f666c6173687c613a303a7b7d),
('fd6761f2eef0444feeef77ca6b7d7b94', 1560527210, 0x5f5f666c6173687c613a303a7b7d),
('94d5e23077272fcf07c4015133c463fc', 1560527206, 0x5f5f666c6173687c613a303a7b7d),
('4f61a98b523d1124c33242cc7351b75d', 1560525028, 0x5f5f666c6173687c613a303a7b7d),
('0e56c0530cfcc07a67e7f77363b3f037', 1560517731, 0x5f5f666c6173687c613a303a7b7d),
('781891f27a5580df4f14f83c74c55d66', 1560517730, 0x5f5f666c6173687c613a303a7b7d),
('fa9bdbefc4ce16959608f959e874510f', 1560517722, 0x5f5f666c6173687c613a303a7b7d),
('65cd34f106ab98100425077256c4206f', 1560517721, 0x5f5f666c6173687c613a303a7b7d),
('7c70580601dfd474a7dc2659f7209d63', 1560517713, 0x5f5f666c6173687c613a303a7b7d),
('3b3696bbbd9fc727b6f797ca758ab731', 1560517341, 0x5f5f666c6173687c613a303a7b7d),
('63c604c5279c77cb556e63ef9f3c5556', 1560509844, 0x5f5f666c6173687c613a303a7b7d),
('3dfae1953e580d76340edc2391efeec2', 1560496254, 0x5f5f666c6173687c613a303a7b7d),
('a4cccacdb417105293abce4bf25e240e', 1560496243, 0x5f5f666c6173687c613a303a7b7d),
('dd67d44655b0c64bad79bac4e67e20b5', 1560491279, 0x5f5f666c6173687c613a303a7b7d),
('0bd6f5d8730ab4de494e223da5251068', 1560480663, 0x5f5f666c6173687c613a303a7b7d),
('dfddc0dfdce3cb5d194afeadc8d88625', 1560476080, 0x5f5f666c6173687c613a303a7b7d),
('88ffcf88a45650ad54ee3429add6f85b', 1560473158, 0x5f5f666c6173687c613a303a7b7d),
('0d082f83fc4c53635158e60c7905e94b', 1560470986, 0x5f5f666c6173687c613a303a7b7d),
('723f839fc001ff90a667db0a7588e135', 1560470983, 0x5f5f666c6173687c613a303a7b7d),
('69f0df2867f4560a3f86b760ba8bb960', 1560470983, 0x5f5f666c6173687c613a303a7b7d),
('0f1c9fef8279f0925f5ce62590ca61b6', 1560470727, 0x5f5f666c6173687c613a303a7b7d),
('4fa2b1070934af85ede48984d7cc72ce', 1560467245, 0x5f5f666c6173687c613a303a7b7d),
('a99805e8f4cc16a9d76db9ff9a581d5b', 1560464149, 0x5f5f666c6173687c613a303a7b7d),
('afb31e051c09d30574269a9780f6d0e5', 1560460264, 0x5f5f666c6173687c613a303a7b7d),
('a4a8c3dc1b068bf0bb70a602ec7facb1', 1560458699, 0x5f5f666c6173687c613a303a7b7d),
('833b7af1e88de6de7efd8a4c3fc99083', 1560458100, 0x5f5f666c6173687c613a303a7b7d),
('fede501d2358ca8b93b36f21be526448', 1560451013, 0x5f5f666c6173687c613a303a7b7d),
('14a479ea335a3718ef4ce43c35e8ba79', 1560449884, 0x5f5f666c6173687c613a303a7b7d),
('20b57715166e3e0048eb12e74249d884', 1560449876, 0x5f5f666c6173687c613a303a7b7d),
('1a965415debbfe56591a47098bff2e58', 1560449873, 0x5f5f666c6173687c613a303a7b7d),
('bdc3adcb5e52c512ddb5746ec79bf7b2', 1560449870, 0x5f5f666c6173687c613a303a7b7d),
('fcf2bf777345c913a9ece4936787d534', 1560449863, 0x5f5f666c6173687c613a303a7b7d),
('d60ce814f38885f871f121e703fce316', 1560449854, 0x5f5f666c6173687c613a303a7b7d),
('d65e21fa65a8120476c68e4737e7e620', 1560449852, 0x5f5f666c6173687c613a303a7b7d),
('a83a596968f9a6e938f4acd2156e0c1f', 1560449783, 0x5f5f666c6173687c613a303a7b7d),
('961fea365593d2ee79be371163f604f9', 1560449776, 0x5f5f666c6173687c613a303a7b7d),
('505254f8880355bf7b9016efee5aaa11', 1560449772, 0x5f5f666c6173687c613a303a7b7d),
('290d7f91bfa988a6c42d560ebe8c51cb', 1560449770, 0x5f5f666c6173687c613a303a7b7d),
('1ba5971d4efd6923be8f1e85fec85c52', 1560449762, 0x5f5f666c6173687c613a303a7b7d),
('5b4ffa61f46e7a72884ce0554146b5f8', 1560449758, 0x5f5f666c6173687c613a303a7b7d),
('68af887b09594733d75fa27db14ad886', 1560449751, 0x5f5f666c6173687c613a303a7b7d),
('ceefaccfd2c0095065f9f86caf8a56c7', 1560449748, 0x5f5f666c6173687c613a303a7b7d),
('e67534babbf4d0f41a2427c9cb6412e6', 1560449743, 0x5f5f666c6173687c613a303a7b7d),
('d3b3cc267e2602d5d1e40ae59acb5c81', 1560449741, 0x5f5f666c6173687c613a303a7b7d),
('7205857ae25749ac77f7aa2e3a3fa19e', 1560449734, 0x5f5f666c6173687c613a303a7b7d),
('6ea1b073b3f2a8111dc035062a9fcf66', 1560449727, 0x5f5f666c6173687c613a303a7b7d),
('ebc8d29b35595aab460ebb03705bf245', 1560449724, 0x5f5f666c6173687c613a303a7b7d),
('35ac901d10bd7d012464ee87180ae8df', 1560449717, 0x5f5f666c6173687c613a303a7b7d),
('95544d390c35fef8f0ef39033cdddce9', 1560449715, 0x5f5f666c6173687c613a303a7b7d),
('e405d25ae18dab7951aa7ce8d4cb17aa', 1560449708, 0x5f5f666c6173687c613a303a7b7d),
('875203332f166f6c4bb40307c4142662', 1560449566, 0x5f5f666c6173687c613a303a7b7d),
('d8b0c81b0753c300f7eb78e796073960', 1560449553, 0x5f5f666c6173687c613a303a7b7d),
('e2319650c6e09bfba6228cb17adf633c', 1560449551, 0x5f5f666c6173687c613a303a7b7d),
('aafb2b99c32d5f0657a6d02015877658', 1560449550, 0x5f5f666c6173687c613a303a7b7d),
('6ac60cf73a1a6b2a557438bc18c6ad7c', 1560449548, 0x5f5f666c6173687c613a303a7b7d),
('cd789bf55352d618678b26e3c1af698d', 1560449544, 0x5f5f666c6173687c613a303a7b7d),
('cfa542e4e03f434aba85b32cf97b8790', 1560449537, 0x5f5f666c6173687c613a303a7b7d),
('21d68ed4069a25ba5afe437b74dcb7c4', 1560449535, 0x5f5f666c6173687c613a303a7b7d),
('5ea8460c8b51d08799f8632d361965aa', 1560449533, 0x5f5f666c6173687c613a303a7b7d),
('cda8058a05e03437311195139a0dc5c5', 1560449531, 0x5f5f666c6173687c613a303a7b7d),
('61f3152ef2dae8d1c97e88a93917b0cb', 1560449483, 0x5f5f666c6173687c613a303a7b7d),
('4d9b24ea469c098460c57db7baeeb3df', 1560449481, 0x5f5f666c6173687c613a303a7b7d),
('38405f2e3539d111f15123151dffaef0', 1560449448, 0x5f5f666c6173687c613a303a7b7d),
('836f233651d823a4d488901d48671ff2', 1560449442, 0x5f5f666c6173687c613a303a7b7d),
('a5001162f694560e64643e203bb6ae0b', 1560449440, 0x5f5f666c6173687c613a303a7b7d),
('7ef9a22aeb94b6434d5f3d0cf3c20719', 1560449328, 0x5f5f666c6173687c613a303a7b7d),
('633de55e6c875b1567e74a031e5dab1d', 1560449324, 0x5f5f666c6173687c613a303a7b7d),
('7a149462d3a0a0dd57dffe98b9b3c06c', 1560449322, 0x5f5f666c6173687c613a303a7b7d),
('a1f2f439eb768cf0a6427259434d9385', 1560449320, 0x5f5f666c6173687c613a303a7b7d),
('8589948e54b2036f1e090fd85151d211', 1560449212, 0x5f5f666c6173687c613a303a7b7d),
('422f9aa65762d4cb1ffc07ddc38a0670', 1560449205, 0x5f5f666c6173687c613a303a7b7d),
('dd27f4b0bfabc2a6616a3aa6a95b884e', 1560449204, 0x5f5f666c6173687c613a303a7b7d),
('dffe07e455fbe7b98a5fe51a655f09a7', 1560449202, 0x5f5f666c6173687c613a303a7b7d),
('d3f8a20877872740fac5c4ad72742bfc', 1560449200, 0x5f5f666c6173687c613a303a7b7d),
('7312d8954b7f7e073dc7468ae86babf7', 1560449146, 0x5f5f666c6173687c613a303a7b7d),
('36fc63506deeead5c201a91a30d4d8e8', 1560449145, 0x5f5f666c6173687c613a303a7b7d),
('8826713b3f51fe7fa61fe35d289ac9be', 1560449143, 0x5f5f666c6173687c613a303a7b7d),
('f15a5cb68abfb444f901155b0460afd4', 1560449141, 0x5f5f666c6173687c613a303a7b7d),
('36c80b78f854da192451cc838d04b52a', 1560449138, 0x5f5f666c6173687c613a303a7b7d),
('df3c232cc6f4696e53e15be2dff4548f', 1560449131, 0x5f5f666c6173687c613a303a7b7d),
('3d8d6d05e8034666ca3716cbe50b69b3', 1560449130, 0x5f5f666c6173687c613a303a7b7d),
('63b6ea091e1feaf41bc94aedb853993e', 1560449129, 0x5f5f666c6173687c613a303a7b7d),
('17e50ddf844ed77b37eeb72059888415', 1560449077, 0x5f5f666c6173687c613a303a7b7d),
('98b6360d24f71b1c842a9b69b16f0590', 1560449019, 0x5f5f666c6173687c613a303a7b7d),
('28594b5a337b7d73d2977a2b19e92682', 1560448982, 0x5f5f666c6173687c613a303a7b7d),
('8740bc1e4404096f1b672b2d1d252792', 1560448847, 0x5f5f666c6173687c613a303a7b7d),
('9aa2d4eb3bfe61b1bfda87d1f3ea93bf', 1560448845, 0x5f5f666c6173687c613a303a7b7d),
('cba5ab0d46d48b9f8ab2dfee5f777fcb', 1560448843, 0x5f5f666c6173687c613a303a7b7d),
('fe17f1cda94c8c74aa0d7a6f76337cad', 1560448841, 0x5f5f666c6173687c613a303a7b7d),
('ac9d7d02c59e741918ce4d8bdc08e5fe', 1560448840, 0x5f5f666c6173687c613a303a7b7d),
('efef82a3814ce29c71d4423e61b9d6bc', 1560448838, 0x5f5f666c6173687c613a303a7b7d),
('54d0e63c7d353d9ee25db2eed5c763be', 1560448835, 0x5f5f666c6173687c613a303a7b7d),
('6f0a1f0fbe4911a3be9938f7aae5d347', 1560448833, 0x5f5f666c6173687c613a303a7b7d),
('2d9defb9beb5e534e2b2d933ce98eb5b', 1560448826, 0x5f5f666c6173687c613a303a7b7d),
('15e2d13d43da85334f2d2b81c5cfa4fa', 1560448783, 0x5f5f666c6173687c613a303a7b7d),
('5612d832dedc3981656d4c3e1a1703fa', 1560448771, 0x5f5f666c6173687c613a303a7b7d),
('b48be45e5c5c48aa335fc427cdd86a38', 1560448770, 0x5f5f666c6173687c613a303a7b7d),
('9129e959af5dd017fa834b250a63b3fc', 1560448760, 0x5f5f666c6173687c613a303a7b7d),
('ac1cd6c3882ea0713d2be61b7f8d8d5a', 1560448667, 0x5f5f666c6173687c613a303a7b7d),
('c1157940e98b96f1a6d9b954f082b6d4', 1560448666, 0x5f5f666c6173687c613a303a7b7d),
('a7bc75a1831c9857145069bb57bae6e0', 1560448663, 0x5f5f666c6173687c613a303a7b7d),
('578b6f3f63eb02fcadc0f06366909706', 1560448660, 0x5f5f666c6173687c613a303a7b7d),
('91890d9d89c529368755fc813a721033', 1560448658, 0x5f5f666c6173687c613a303a7b7d),
('e766d82cce59b720bd7053a32f4ba86b', 1560448651, 0x5f5f666c6173687c613a303a7b7d),
('8618067b5f226f9f1a96286b66157ec4', 1560448649, 0x5f5f666c6173687c613a303a7b7d),
('f7fec439b752744224f73d8b7eef027d', 1560448642, 0x5f5f666c6173687c613a303a7b7d),
('b3248cf46a9386a3864637cb727acfe3', 1560448640, 0x5f5f666c6173687c613a303a7b7d),
('5a37f1f629ef116a6fd8d5a38300a435', 1560448638, 0x5f5f666c6173687c613a303a7b7d),
('841d4991c9ee32ec7e4e46bad58bf5a9', 1560448636, 0x5f5f666c6173687c613a303a7b7d),
('afdee3cc543b4f6dd6396dcee3bd9b7f', 1560448631, 0x5f5f666c6173687c613a303a7b7d),
('bb8d09fba6a5bf461b3c982094ad8fe1', 1560448589, 0x5f5f666c6173687c613a303a7b7d),
('b0785691c1ea617a3b935cd9dc598eb1', 1560448586, 0x5f5f666c6173687c613a303a7b7d),
('253c675b9260cfb155e32cb3f8f1fd76', 1560448579, 0x5f5f666c6173687c613a303a7b7d),
('ba889f3b70e595c2c4595e53e036e201', 1560448577, 0x5f5f666c6173687c613a303a7b7d),
('41dbd927e75e54fd091a3d8de725f165', 1560448575, 0x5f5f666c6173687c613a303a7b7d),
('030faced8524bca57d57e01312c7d850', 1560448568, 0x5f5f666c6173687c613a303a7b7d),
('cb562af1084c9e0e4a0f12018d27cdf1', 1560448566, 0x5f5f666c6173687c613a303a7b7d),
('5c0e9373b19c3b143556ec4ab7c5a5ff', 1560448557, 0x5f5f666c6173687c613a303a7b7d),
('60455a65f2cc906938b4afc3bb73470a', 1560448555, 0x5f5f666c6173687c613a303a7b7d),
('24c60602b68f45730d4d28852552f4de', 1560448548, 0x5f5f666c6173687c613a303a7b7d),
('7dc91b8808c706e98e269224c7a541f8', 1560448546, 0x5f5f666c6173687c613a303a7b7d),
('63086ca36d6ccef70786f4480928136b', 1560448433, 0x5f5f666c6173687c613a303a7b7d),
('9e4e2b1bb49fd288ed765df6a072d124', 1560448430, 0x5f5f666c6173687c613a303a7b7d),
('fdc3296fb8adc5bc868b8c8b85439a93', 1560448327, 0x5f5f666c6173687c613a303a7b7d),
('ae8974d9231a79c583c628757c4242db', 1560448304, 0x5f5f666c6173687c613a303a7b7d),
('ae8cc9160099f95ee49e31152a9d201b', 1560448302, 0x5f5f666c6173687c613a303a7b7d),
('533268c24ced3879aa8bfb60b94ddaee', 1560448128, 0x5f5f666c6173687c613a303a7b7d),
('3109bc5942e13d4fafbbc3539e480ed9', 1560448126, 0x5f5f666c6173687c613a303a7b7d),
('2355e367509044d85e045ffe128dc732', 1560448122, 0x5f5f666c6173687c613a303a7b7d),
('29ea426ba5b70e876cc7ab0c899e274b', 1560448113, 0x5f5f666c6173687c613a303a7b7d),
('464ade35369bba4770bc6a100796c1a0', 1560448111, 0x5f5f666c6173687c613a303a7b7d);
INSERT INTO `session` (`id`, `expire`, `data`) VALUES
('cba3bbfc27077794458ab3e8a44f27c9', 1560448110, 0x5f5f666c6173687c613a303a7b7d),
('e4d444cd87224311e1f7411aac5f1543', 1560448098, 0x5f5f666c6173687c613a303a7b7d),
('902eb080f14ef2c2792c5442fa22893b', 1560448091, 0x5f5f666c6173687c613a303a7b7d),
('08b7534ff01587f4f488c0e63dd3a80b', 1560448077, 0x5f5f666c6173687c613a303a7b7d),
('563b5a56bb47f81a29a2a0ff4a9db608', 1560448060, 0x5f5f666c6173687c613a303a7b7d),
('6e18acaa72dc6c1c213af5ca4968b6a8', 1560448042, 0x5f5f666c6173687c613a303a7b7d),
('30c5e66ff956f43ffaefaf14d1c9473e', 1560448039, 0x5f5f666c6173687c613a303a7b7d),
('1fc773c163b4e672724c574a35494a37', 1560448037, 0x5f5f666c6173687c613a303a7b7d),
('78d0e553324326c7aa63d70a195ce264', 1560448035, 0x5f5f666c6173687c613a303a7b7d),
('ab2b90802366a9404d11c91535e12b62', 1560448029, 0x5f5f666c6173687c613a303a7b7d),
('e17914c98f7f2797210e3f128469967e', 1560448027, 0x5f5f666c6173687c613a303a7b7d),
('b1baabdfc9b3894c401b89b5e75b6a56', 1560448026, 0x5f5f666c6173687c613a303a7b7d),
('de82a5ef4eb2494f54ad9bba7079abae', 1560448008, 0x5f5f666c6173687c613a303a7b7d),
('b7672b03b3efd1111f0bee2da45a0c89', 1560448006, 0x5f5f666c6173687c613a303a7b7d),
('cbd1d66e985e869746d667102b935f73', 1560448004, 0x5f5f666c6173687c613a303a7b7d),
('95d41f995a7e032ee2057aede6dd11e0', 1560448002, 0x5f5f666c6173687c613a303a7b7d),
('614a6d42b25642805bb510a4611c191e', 1560448000, 0x5f5f666c6173687c613a303a7b7d),
('77fff21cc313ced5a99017f3c543d0fd', 1560447999, 0x5f5f666c6173687c613a303a7b7d),
('c265352c8f4cbfcc6e0e73fb04bc7aad', 1560447996, 0x5f5f666c6173687c613a303a7b7d),
('c2ad8d1e3cb85ffb4efa21025e2d48b5', 1560447995, 0x5f5f666c6173687c613a303a7b7d),
('c259f8fdd3de09c647ad1bfd55c9fe57', 1560447982, 0x5f5f666c6173687c613a303a7b7d),
('c9b8ed726fd0fa85771a1ee62a6fe22e', 1560447980, 0x5f5f666c6173687c613a303a7b7d),
('a7d5ff33c6ea05b466efad36d8157fa2', 1560447978, 0x5f5f666c6173687c613a303a7b7d),
('dffd79badadf88a8774ffc425540f39c', 1560447976, 0x5f5f666c6173687c613a303a7b7d),
('5f2f66ae70f8ac10561e9a361c7710c8', 1560447974, 0x5f5f666c6173687c613a303a7b7d),
('8c9d62698e416947d49f3fbf70b0e740', 1560447972, 0x5f5f666c6173687c613a303a7b7d),
('f5cc1b00bca2772162c9243a268c8711', 1560447970, 0x5f5f666c6173687c613a303a7b7d),
('bb5bd6961f7c3d93a14b644fb54888e3', 1560447949, 0x5f5f666c6173687c613a303a7b7d),
('55251ed611ff405b06c487470c25e74e', 1560447941, 0x5f5f666c6173687c613a303a7b7d),
('d99fe3f09f256e9de432efc5b523eb04', 1560447939, 0x5f5f666c6173687c613a303a7b7d),
('c8854f7ac4645c2029bedcf4197e7652', 1560447926, 0x5f5f666c6173687c613a303a7b7d),
('3866520d94d2f0bd8029dff8a6d4c471', 1560447924, 0x5f5f666c6173687c613a303a7b7d),
('a8d65547ff80b71ea7a850eee1437eb6', 1560447917, 0x5f5f666c6173687c613a303a7b7d),
('f6bd9106c0a6a5aca3950c2dd9314d5a', 1560447915, 0x5f5f666c6173687c613a303a7b7d),
('f1a54b457a6ac6ba8f592f842dd8f6c8', 1560447525, 0x5f5f666c6173687c613a303a7b7d),
('29dbeffe6758f6c5ff9dfd78d7e9e06e', 1560447540, 0x5f5f666c6173687c613a303a7b7d),
('284cd3e81aade3f52a8264942efe067d', 1560447702, 0x5f5f666c6173687c613a303a7b7d),
('d6d1c3c6adfe3d7e9ce4b7118f9fdb0b', 1560447707, 0x5f5f666c6173687c613a303a7b7d),
('5ae83c14e9f2f9c5caebe36c06ec4974', 1560447708, 0x5f5f666c6173687c613a303a7b7d),
('343bc56a6b509758e4ef0f2c16592d01', 1560447710, 0x5f5f666c6173687c613a303a7b7d),
('15ba21fd15f9f9da7f86185580c935a8', 1560447712, 0x5f5f666c6173687c613a303a7b7d),
('20a54305ff556b0d01f0d7d078b33a91', 1560447714, 0x5f5f666c6173687c613a303a7b7d),
('60f2df46c5ecd4041f381cea0a51b7b6', 1560447721, 0x5f5f666c6173687c613a303a7b7d),
('2eb2fca3a716110d77ad76946d8c0f7a', 1560447722, 0x5f5f666c6173687c613a303a7b7d),
('ad1e6ea0a962ffa23c4c8cee591a6d3a', 1560447724, 0x5f5f666c6173687c613a303a7b7d),
('1635eef69f36ef1a9105d456108a023f', 1560447726, 0x5f5f666c6173687c613a303a7b7d),
('bbad6202f1a9bcc5775fa63530be5741', 1560447727, 0x5f5f666c6173687c613a303a7b7d),
('13a2da28905f1ec71f47c812db9d4101', 1560447729, 0x5f5f666c6173687c613a303a7b7d),
('70a60c0c182c7c8b63415009d6c5b818', 1560447730, 0x5f5f666c6173687c613a303a7b7d),
('a1b6d840fe68e96c75110c824030dd15', 1560447733, 0x5f5f666c6173687c613a303a7b7d),
('98b9ded944cca8e3dfb25f60316e9e2f', 1560447735, 0x5f5f666c6173687c613a303a7b7d),
('083bf4d2df22dc2b836140395b3edf19', 1560447742, 0x5f5f666c6173687c613a303a7b7d),
('dfd42499cbee65d6ac74646836c168ab', 1560447754, 0x5f5f666c6173687c613a303a7b7d),
('fc83860e2677fd9fc09d6d63c66e43b9', 1560447756, 0x5f5f666c6173687c613a303a7b7d),
('012e990e4ec3ffe092c0742b6ee476fd', 1560447757, 0x5f5f666c6173687c613a303a7b7d),
('f2c986efe13b6e362f15b9280fc2c7a9', 1560447760, 0x5f5f666c6173687c613a303a7b7d),
('392c838a1c12a9fd3a7da142a8a88dde', 1560447762, 0x5f5f666c6173687c613a303a7b7d),
('448e7cb008c01e1c197ad43c94e8f20d', 1560447765, 0x5f5f666c6173687c613a303a7b7d),
('d5f6ef0292244b9e7b339986f670937c', 1560447767, 0x5f5f666c6173687c613a303a7b7d),
('92f095f048a6ce169d1b2cbbd2fd1d7a', 1560447774, 0x5f5f666c6173687c613a303a7b7d),
('32390979cc1d21ca4f494add3e45095c', 1560447777, 0x5f5f666c6173687c613a303a7b7d),
('8bcf913efb568a83db033ab1d11cac1a', 1560447779, 0x5f5f666c6173687c613a303a7b7d),
('0e240d6daeb3e4e49136260f2a49c731', 1560447780, 0x5f5f666c6173687c613a303a7b7d),
('472ff2d1c227abc24238114e8d5ee57d', 1560447782, 0x5f5f666c6173687c613a303a7b7d),
('ae17ce384acbe752f634b20e8d8d635b', 1560447783, 0x5f5f666c6173687c613a303a7b7d),
('086bdad24a207891aaf6395c1b786572', 1560447785, 0x5f5f666c6173687c613a303a7b7d),
('fa02f6e3c1d4eb7b798ab00474a77e32', 1560447787, 0x5f5f666c6173687c613a303a7b7d),
('a4684c00376987399b9a8fdf27978820', 1560447789, 0x5f5f666c6173687c613a303a7b7d),
('8c6a604c756ac6156ee968126975aeb7', 1560447790, 0x5f5f666c6173687c613a303a7b7d),
('b434a43fa5f6eb49c7c138b385446046', 1560447792, 0x5f5f666c6173687c613a303a7b7d),
('adc09b4376be6ff868a3efdce0f99693', 1560447794, 0x5f5f666c6173687c613a303a7b7d),
('9fe67be9f2b114681dd980a00a164bb1', 1560447796, 0x5f5f666c6173687c613a303a7b7d),
('de6d25193972b3d839af0e582f00aad2', 1560447799, 0x5f5f666c6173687c613a303a7b7d),
('c39b0764f5d32ff59491a4f6e551974c', 1560447802, 0x5f5f666c6173687c613a303a7b7d),
('959e3dc5edb7c36193b45ad86f9cb9ed', 1560447809, 0x5f5f666c6173687c613a303a7b7d),
('4aa9fce3b43d9d07bcb7ff944e6fdec5', 1560447810, 0x5f5f666c6173687c613a303a7b7d),
('e4a09a5a7ab65a9186235619edcf9ce0', 1560447812, 0x5f5f666c6173687c613a303a7b7d),
('3140a778b316cf67f649027e8961ebc0', 1560447814, 0x5f5f666c6173687c613a303a7b7d),
('1bed76dde0a832fe38d7e3000ad42729', 1560447815, 0x5f5f666c6173687c613a303a7b7d),
('2b83d83a335fb6e4aff187905a1c5e09', 1560447819, 0x5f5f666c6173687c613a303a7b7d),
('ed6922845df49bec5715e69442d2da05', 1560447821, 0x5f5f666c6173687c613a303a7b7d),
('76d93e394cbc587de166bd21eef255a8', 1560447828, 0x5f5f666c6173687c613a303a7b7d),
('21262b058a3ced75f04ef8febfe2fc49', 1560447832, 0x5f5f666c6173687c613a303a7b7d),
('4b66b1a142b465ad6b5854666d2b72a5', 1560447834, 0x5f5f666c6173687c613a303a7b7d),
('fb0f918861f5b3d4ab33b205302d1071', 1560447837, 0x5f5f666c6173687c613a303a7b7d),
('12ff2831bd9b14cefcf3f869b6c2ad3f', 1560447840, 0x5f5f666c6173687c613a303a7b7d),
('187b02c07104b5512e6fb0d800d4dcc6', 1560447841, 0x5f5f666c6173687c613a303a7b7d),
('32722e0ff309cc1f62d2fb61600d74ab', 1560447845, 0x5f5f666c6173687c613a303a7b7d),
('60ede676426b62661221fe3b07c42ade', 1560447852, 0x5f5f666c6173687c613a303a7b7d),
('697905cf78196c19483b346203aa1333', 1560447855, 0x5f5f666c6173687c613a303a7b7d),
('8ab455618e836ee35103dbb595415628', 1560447878, 0x5f5f666c6173687c613a303a7b7d),
('ec6950de859548801c60a4851187c99e', 1560447880, 0x5f5f666c6173687c613a303a7b7d),
('907bd3e15067ba759b1c9e49cb7f5710', 1560447887, 0x5f5f666c6173687c613a303a7b7d),
('2cff343af963126a2d5436986ee4e081', 1560447889, 0x5f5f666c6173687c613a303a7b7d),
('263a8f2b1e7852ebf2104c08ecd9feb1', 1560447890, 0x5f5f666c6173687c613a303a7b7d),
('359ec97740035c2bb661b1605b30499b', 1560447892, 0x5f5f666c6173687c613a303a7b7d),
('c9b0fe21673b7bab337902cc9897c251', 1560447894, 0x5f5f666c6173687c613a303a7b7d),
('5bbf42e3d450cace5233155f0f700df9', 1560447896, 0x5f5f666c6173687c613a303a7b7d),
('c14d4a62b5e4ad7b0c8be91072850e48', 1560447898, 0x5f5f666c6173687c613a303a7b7d),
('e41601abadffb7b11f0a81a01df7ef5a', 1560447900, 0x5f5f666c6173687c613a303a7b7d),
('21d5fd0c59584e2f5c225db899bc60bf', 1560447902, 0x5f5f666c6173687c613a303a7b7d),
('880fee59fbd3e3a8528c718ecc88916d', 1561914763, 0x5f5f666c6173687c613a303a7b7d),
('2eb7b4c326e4fa64fda52d246f9c191d', 1561914763, 0x5f5f666c6173687c613a303a7b7d),
('a9f344dea5968db45167b8f09b413ab0', 1561914764, 0x5f5f666c6173687c613a303a7b7d),
('dda6c13c94ddd54f52e8fca0ae80898e', 1561914764, 0x5f5f666c6173687c613a303a7b7d),
('8424387a9691cb81dd0f64f43b359656', 1561914765, 0x5f5f666c6173687c613a303a7b7d),
('a1993a94680b6578d0735bb0188370c4', 1561914766, 0x5f5f666c6173687c613a303a7b7d),
('10a4b4263ab10d1b514aef78ea066a91', 1561914766, 0x5f5f666c6173687c613a303a7b7d),
('622e1db384a2f3e3c1cc75fa825ee902', 1561914767, 0x5f5f666c6173687c613a303a7b7d),
('bfd655ea6502b34ee28a2fb2aabac612', 1561914768, 0x5f5f666c6173687c613a303a7b7d),
('959f3a855ec36dfcfca0e203346c8a04', 1561914768, 0x5f5f666c6173687c613a303a7b7d),
('c6863638aec751da0f428fa7168fb730', 1561914769, 0x5f5f666c6173687c613a303a7b7d),
('d1ed1b9b660322c46aee90bf4d48009f', 1561915004, 0x5f5f666c6173687c613a303a7b7d),
('001258ae0be9e7cdd2fd09b03e4cbb9d', 1561915070, 0x5f5f666c6173687c613a303a7b7d),
('0c9c88f11be168ae97659e7eb5a2efe7', 1561915071, 0x5f5f666c6173687c613a303a7b7d),
('63220410da2521ef43fea58f357f3876', 1561915071, 0x5f5f666c6173687c613a303a7b7d),
('927efc5e64acf53b1d702234c9bf1895', 1561915072, 0x5f5f666c6173687c613a303a7b7d),
('d4338112a81783c53d6f37e20a9abdf0', 1561915073, 0x5f5f666c6173687c613a303a7b7d),
('fb2d78befa62920de8ccb3a255ed8ca5', 1561915073, 0x5f5f666c6173687c613a303a7b7d),
('b8e6978cac21ea5da5da34e3ceb3854a', 1561915074, 0x5f5f666c6173687c613a303a7b7d),
('5605eb360d04ef176cb3cb28edccc026', 1561915075, 0x5f5f666c6173687c613a303a7b7d),
('f8e1458ce1ddff80492a146685ebb814', 1561915075, 0x5f5f666c6173687c613a303a7b7d),
('c0a195f4cecd753eefe3a4990c981cf0', 1561915076, 0x5f5f666c6173687c613a303a7b7d),
('7a478f889b7638fd34032a8de3788899', 1561915076, 0x5f5f666c6173687c613a303a7b7d),
('2969deb609c416f703a5dde1c21e15c7', 1561915079, 0x5f5f666c6173687c613a303a7b7d),
('203e63e7e543b41ba54f9be6f52e9439', 1561915079, 0x5f5f666c6173687c613a303a7b7d),
('bc7393293f39a3153593188c0029c917', 1561915100, 0x5f5f666c6173687c613a303a7b7d),
('4608ce0895321ad5e249d9e3cfacf914', 1561915101, 0x5f5f666c6173687c613a303a7b7d),
('8d477ba7b2af58dec17628d614aca391', 1561915101, 0x5f5f666c6173687c613a303a7b7d),
('fd3c20449ea20731ed9436d61a4da9fd', 1561915102, 0x5f5f666c6173687c613a303a7b7d),
('9743383978851ae3a1de0dd9890f1ca2', 1561915103, 0x5f5f666c6173687c613a303a7b7d),
('1e9ae93d9103ab317b7a4b964af8c064', 1561915103, 0x5f5f666c6173687c613a303a7b7d),
('9a78d2d16c8d5e396f781255631eba54', 1561915104, 0x5f5f666c6173687c613a303a7b7d),
('b5fffd90e13efe0c5cc186d1383b4411', 1561915105, 0x5f5f666c6173687c613a303a7b7d),
('417f532c84a430d175337465a820838b', 1561915105, 0x5f5f666c6173687c613a303a7b7d),
('b6426da3514b2c270920fc7f1818fd06', 1561915106, 0x5f5f666c6173687c613a303a7b7d),
('443fa2b759abdfb37ed32911284ccc22', 1561915107, 0x5f5f666c6173687c613a303a7b7d),
('f66fa80538f2bd48831aa0cdf692d809', 1561915107, 0x5f5f666c6173687c613a303a7b7d),
('01e788afa4a33d62e8b72d28a721c8f4', 1561915108, 0x5f5f666c6173687c613a303a7b7d),
('138233374ba9a2f90614722832ae7b93', 1561915108, 0x5f5f666c6173687c613a303a7b7d),
('975c6b794c932eb30d51caf4c1bc10f3', 1561915109, 0x5f5f666c6173687c613a303a7b7d),
('369043b8a5e017f62f3930b1c3b47ef9', 1561915110, 0x5f5f666c6173687c613a303a7b7d),
('10a7a2f010fd1fbf07b2b243bd7e8961', 1561915110, 0x5f5f666c6173687c613a303a7b7d),
('623fee443fd59e284feb0b68aafdeb2c', 1561915111, 0x5f5f666c6173687c613a303a7b7d),
('8d86cdee4a064b0ec799c0663734be84', 1561915112, 0x5f5f666c6173687c613a303a7b7d),
('4679555b6dedc27f2b2e91f08cb75696', 1561915112, 0x5f5f666c6173687c613a303a7b7d),
('8ef47b3151dc2c4736d52788c7e7ade1', 1561915113, 0x5f5f666c6173687c613a303a7b7d),
('87c176c79780dcbcc80a9d7ad7247f18', 1561915113, 0x5f5f666c6173687c613a303a7b7d),
('f7f6234f72e72f131b343c81a7d62eb3', 1561915114, 0x5f5f666c6173687c613a303a7b7d),
('770483b2a37e7b7497f27413d61bd3a6', 1561915115, 0x5f5f666c6173687c613a303a7b7d),
('a2c1667fb3027349dcc97c03ffc26b5b', 1561915116, 0x5f5f666c6173687c613a303a7b7d),
('30bf370f2cca7a3d7f5b6f32771b54c9', 1561915117, 0x5f5f666c6173687c613a303a7b7d),
('d4f0e3b551566d5d7a1d7a6df730e80c', 1561915117, 0x5f5f666c6173687c613a303a7b7d),
('d2569e07209d605cca7a340ec4023b81', 1561915118, 0x5f5f666c6173687c613a303a7b7d),
('f248678b0390c72dfad3ab6e551688b6', 1561915119, 0x5f5f666c6173687c613a303a7b7d),
('fa2f2518677920c110b213bc7dd90360', 1561915120, 0x5f5f666c6173687c613a303a7b7d),
('6b8184b82eff16c9e06503291b342ff7', 1561915120, 0x5f5f666c6173687c613a303a7b7d),
('8590d300f58ce72233f34b7aceee32d7', 1561915121, 0x5f5f666c6173687c613a303a7b7d),
('0bca8218882386f1e3eef4084a84ddeb', 1561915122, 0x5f5f666c6173687c613a303a7b7d),
('ef51b3b7f86c6b9fd90ae4fbc03b28a8', 1561915123, 0x5f5f666c6173687c613a303a7b7d),
('670b9384d2bf86ea43204b50d5b5586e', 1561915124, 0x5f5f666c6173687c613a303a7b7d),
('97696bb06f400a90b0c225559f46c17d', 1561915124, 0x5f5f666c6173687c613a303a7b7d),
('942e12a4caa091b7c188b443f860e97f', 1561915125, 0x5f5f666c6173687c613a303a7b7d),
('693b9b549aaa18a68e75421bc985368a', 1561915126, 0x5f5f666c6173687c613a303a7b7d),
('bf259e460867eeee3664b1d3196f65b0', 1561915127, 0x5f5f666c6173687c613a303a7b7d),
('f1e508b7eb10d5221c22665d079ea0e3', 1561915128, 0x5f5f666c6173687c613a303a7b7d),
('dfde15f5747234eeae9a183d52e35266', 1561915128, 0x5f5f666c6173687c613a303a7b7d),
('730b154b71155cbfd2fdeb10814a3f4e', 1561915129, 0x5f5f666c6173687c613a303a7b7d),
('619d112973bb7233f1923be933eadc01', 1561915130, 0x5f5f666c6173687c613a303a7b7d),
('97aa1ad58a365c286f437889c2aabebb', 1561915131, 0x5f5f666c6173687c613a303a7b7d),
('44ec020764e0fbf0df4cc7cb4983bd8a', 1561915132, 0x5f5f666c6173687c613a303a7b7d),
('95b0208a15d0f498b109e7502933bbb1', 1561915133, 0x5f5f666c6173687c613a303a7b7d),
('432c153098f6624189794470268efb72', 1561915133, 0x5f5f666c6173687c613a303a7b7d),
('2831e03fddb323e8a56c220c691d1df5', 1561915134, 0x5f5f666c6173687c613a303a7b7d),
('b6c640876035af5f39a9ffb16e84c7c2', 1561915135, 0x5f5f666c6173687c613a303a7b7d),
('c97669504c104029c20acadd0a1dbaa3', 1561915136, 0x5f5f666c6173687c613a303a7b7d),
('7a66d2e745a8803fd1d03fd0da93fb87', 1561915137, 0x5f5f666c6173687c613a303a7b7d),
('88e1d873dd4e320895ab219e87f1c215', 1561915137, 0x5f5f666c6173687c613a303a7b7d),
('73a26cf60db7c5fb8bdac383d12dd4fb', 1561915138, 0x5f5f666c6173687c613a303a7b7d),
('63b75a9a14b65d7e167947be5147b347', 1561915139, 0x5f5f666c6173687c613a303a7b7d),
('dcee87d0825f663c96ef3acce22f97ff', 1561915140, 0x5f5f666c6173687c613a303a7b7d),
('04359a966ef871471060d02f5f688a27', 1561915141, 0x5f5f666c6173687c613a303a7b7d),
('e6876f066f79f86a5a059a98a571872a', 1561915142, 0x5f5f666c6173687c613a303a7b7d),
('f934042db1b0494325984ca6e044ec23', 1561915143, 0x5f5f666c6173687c613a303a7b7d),
('db87af8140cdb622465f5736c6cfb86f', 1561915144, 0x5f5f666c6173687c613a303a7b7d),
('53ba1f9e0e8c7a9096fc5833976fcb71', 1561915145, 0x5f5f666c6173687c613a303a7b7d),
('5511f8fbcea5d3c19ebc33ece8d024a6', 1561915146, 0x5f5f666c6173687c613a303a7b7d),
('1c33aa4dcda13ab154739d7c788dc682', 1561915146, 0x5f5f666c6173687c613a303a7b7d),
('e15d07c0f9487751e085f9b0323d0b13', 1561915147, 0x5f5f666c6173687c613a303a7b7d),
('33170aa83bed7e6e9c07028e8277f4dd', 1561915148, 0x5f5f666c6173687c613a303a7b7d),
('38fc84d6710b6dfd611b06e3d6b0f276', 1561915149, 0x5f5f666c6173687c613a303a7b7d),
('27c72155d67060420d37037caa3ab41b', 1561915150, 0x5f5f666c6173687c613a303a7b7d),
('a54c9c5a0b3eed21b859a6bd89375d93', 1561915150, 0x5f5f666c6173687c613a303a7b7d),
('10604731648909889ff8c6181af15ca3', 1561915151, 0x5f5f666c6173687c613a303a7b7d),
('7ce8fec16b7191a72b2189809be69e75', 1561915152, 0x5f5f666c6173687c613a303a7b7d),
('b5b581a25d0ada7343fcaee35654a43a', 1561915153, 0x5f5f666c6173687c613a303a7b7d),
('f425ff2452a7870266cbaf4630ed6f30', 1561915154, 0x5f5f666c6173687c613a303a7b7d),
('1d184eda1831964016c29c7ce47669bc', 1561915155, 0x5f5f666c6173687c613a303a7b7d),
('aa32bceebbbb5df0b373dce1671d8843', 1561915155, 0x5f5f666c6173687c613a303a7b7d),
('27da457859cec85933163926ad081533', 1561915156, 0x5f5f666c6173687c613a303a7b7d),
('722c1e50672e8eb4929b6b4d01578480', 1561915157, 0x5f5f666c6173687c613a303a7b7d),
('10b31b73832aa30bfc1bb8aeff76d91a', 1561915158, 0x5f5f666c6173687c613a303a7b7d),
('53cd43221cfedaf5fcd8665b307891b1', 1561915159, 0x5f5f666c6173687c613a303a7b7d),
('b6de96ba091a8d559adba39d971c234a', 1561915160, 0x5f5f666c6173687c613a303a7b7d),
('f251dcc76bbc00c1ba98396603ba272c', 1561915160, 0x5f5f666c6173687c613a303a7b7d),
('2b8980a90f2e54d54064e201e1ef7f05', 1561915161, 0x5f5f666c6173687c613a303a7b7d),
('f693595eea7444d6a2037b0dc30779e9', 1561915162, 0x5f5f666c6173687c613a303a7b7d),
('fe3af759c6ec59b10241231deb3afec7', 1561922197, 0x5f5f666c6173687c613a303a7b7d),
('60e5e2c8002823a336f74dad4493814d', 1561925648, 0x5f5f666c6173687c613a303a7b7d),
('a2cf247f0399de4aed696f19e6c3c737', 1561926572, 0x5f5f666c6173687c613a303a7b7d),
('0e8c40c62792ed1e823c8c09849b569e', 1561926578, 0x5f5f666c6173687c613a303a7b7d),
('40bc65197a5525eabecb68b068ef2259', 1561930953, 0x5f5f666c6173687c613a303a7b7d),
('ac220c38a01a2011dd2532678e76610c', 1561932902, 0x5f5f666c6173687c613a303a7b7d),
('5bca76e068b0e0a3a29c81a46a91f04d', 1561933834, 0x5f5f666c6173687c613a303a7b7d),
('a1e300e1e768c27af85ef72f7e6b57ac', 1561933856, 0x5f5f666c6173687c613a303a7b7d),
('103392717146d3d56eac6db32aa9d759', 1561933856, 0x5f5f666c6173687c613a303a7b7d),
('3810f9806108781764d4b919f69cda5f', 1561934428, 0x5f5f666c6173687c613a303a7b7d),
('452f90ca020b02f524c5ba0c7cf032ca', 1561938993, 0x5f5f666c6173687c613a303a7b7d),
('8206bf0fa077a696adc161d5bc4bb4c4', 1561941328, 0x5f5f666c6173687c613a303a7b7d),
('308bd7f3d30150f79c82667c060a9a30', 1561943059, 0x5f5f666c6173687c613a303a7b7d),
('6215f0a7f8fee8c0408f5830d0f39a4d', 1561953848, 0x5f5f666c6173687c613a303a7b7d),
('3cd25d8c157bc05f5d81607ea0d4ab2a', 1561961852, 0x5f5f666c6173687c613a303a7b7d),
('8bff3c76686fa634e97800d4a576bf23', 1561973087, 0x5f5f666c6173687c613a303a7b7d),
('b96e37a13a4729053a1159fe62b67894', 1561975378, 0x5f5f666c6173687c613a303a7b7d),
('3f8ea269c6e5810b1f38c1718f59676f', 1561980813, 0x5f5f666c6173687c613a303a7b7d),
('44952fa736daf91705bb665adc9d1d22', 1561980813, 0x5f5f666c6173687c613a303a7b7d),
('f79b18bb692333732294a67ef826ce22', 1561980836, 0x5f5f666c6173687c613a303a7b7d),
('b95eb371c005cf9f48df8e937a713c38', 1561982713, 0x5f5f666c6173687c613a303a7b7d),
('6b4dfc4d6aeebbe367a6ab02af9847cd', 1561982831, 0x5f5f666c6173687c613a303a7b7d),
('36e5662f3d8216bee678b57559b85646', 1561982835, 0x5f5f666c6173687c613a303a7b7d),
('6effe1f14404fed105b181f8f295b6e7', 1561982867, 0x5f5f666c6173687c613a303a7b7d),
('7a0847d8d2b86bd98284802de8894cec', 1561982891, 0x5f5f666c6173687c613a303a7b7d),
('64b355547352b6e759a8699bf8d77bfb', 1561990945, 0x5f5f666c6173687c613a303a7b7d),
('09c7bc784c767a9f5e28bff5454c896b', 1561991742, 0x5f5f666c6173687c613a303a7b7d),
('8d9bffe6e45be32a2aea28d33542b5ad', 1561992175, 0x5f5f666c6173687c613a303a7b7d),
('dde07855aa4425c4f1da7b8f445ce093', 1561997906, 0x5f5f666c6173687c613a303a7b7d),
('3e899178ce92b2b15899e4a2939cb473', 1561998281, 0x5f5f666c6173687c613a303a7b7d),
('70f8be8c23574a832d3acecb75fd856a', 1562003000, 0x5f5f666c6173687c613a303a7b7d),
('52a78f13063755828e48d9003cee48ef', 1562003017, 0x5f5f666c6173687c613a303a7b7d),
('f33676dfa77cf51fe2965afeaa137f9f', 1562003022, 0x5f5f666c6173687c613a303a7b7d),
('a2e8e765d3f1bbabf273f9ffb76c0f51', 1562003031, 0x5f5f666c6173687c613a303a7b7d),
('58fefdac3630a8fc2558c36b53afa5d7', 1562013090, 0x5f5f666c6173687c613a303a7b7d),
('4feddaf29754a72a65faa0da9f180521', 1562013099, 0x5f5f666c6173687c613a303a7b7d),
('62d22ed06b73b66a26cc405c65955e47', 1562013100, 0x5f5f666c6173687c613a303a7b7d),
('ef260bd11345315b9bc0782a5b0c2ebe', 1562013100, 0x5f5f666c6173687c613a303a7b7d),
('553b1017c92049c4e5ed7ec73ec0a0cc', 1562013101, 0x5f5f666c6173687c613a303a7b7d),
('d0d79bf58fc53f68d4471465c3c420fe', 1562017485, 0x5f5f666c6173687c613a303a7b7d),
('a30d8fe247b570972684bc2cc8934848', 1562017489, 0x5f5f666c6173687c613a303a7b7d),
('4dc2809df05b500476cee5486e5f243c', 1562017499, 0x5f5f666c6173687c613a303a7b7d),
('34bbb242e932a7632fc3cc824b812b14', 1562021907, 0x5f5f666c6173687c613a303a7b7d),
('3bd5677c1c3ad69ed2be68abbfe2b825', 1562039555, 0x5f5f666c6173687c613a303a7b7d),
('aa7a8b582d34ba683148b3a62f91b527', 1562040204, 0x5f5f666c6173687c613a303a7b7d),
('d78b67fec0964602116b920105ccc50e', 1562040205, 0x5f5f666c6173687c613a303a7b7d),
('c733c61fc96cd2cdff25a8cda25ea923', 1562057919, 0x5f5f666c6173687c613a303a7b7d),
('60720dfed3ef6595cc4413d0120dc0dc', 1562060090, 0x5f5f666c6173687c613a303a7b7d),
('55b6fe767dadbc07bad65fe0bc7aa8dd', 1562060121, 0x5f5f666c6173687c613a303a7b7d),
('d6d4834efdcc2453f3c49191a3f1ad2e', 1562067653, 0x5f5f666c6173687c613a303a7b7d),
('8a1e42d8a10398da6c1854c95605dba9', 1562067282, 0x5f5f666c6173687c613a303a7b7d),
('034e97aca2fa9f92cd923d364090c66b', 1562069712, 0x5f5f666c6173687c613a303a7b7d),
('151e88692bfd3a991b42be3fd6d7d0cb', 1562069989, 0x5f5f666c6173687c613a303a7b7d),
('4f996d7ecd1146ea346208613a7e5093', 1562070216, 0x5f5f666c6173687c613a303a7b7d),
('61e0f7e3fb0a7e17557ed69302e4d64e', 1562070217, 0x5f5f666c6173687c613a303a7b7d),
('4134953c8f7419fd13cfbeba819c04d2', 1562070217, 0x5f5f666c6173687c613a303a7b7d),
('0041f8ec3ce942d89fef28c04fab189c', 1562070218, 0x5f5f666c6173687c613a303a7b7d),
('467c5fcfb0dccd53362f1509e162d5a5', 1562070218, 0x5f5f666c6173687c613a303a7b7d),
('631ea5c9822c34d0e5ba0bd0e25b9db9', 1562070219, 0x5f5f666c6173687c613a303a7b7d),
('4ded3db3245ac1ff30cc2e5205aac123', 1562070219, 0x5f5f666c6173687c613a303a7b7d),
('eb802891827014280212892894afcbac', 1562070219, 0x5f5f666c6173687c613a303a7b7d),
('491d0980b3846f398e9df8cad01c0bd5', 1562070219, 0x5f5f666c6173687c613a303a7b7d),
('9e66a1e26771fe775810d186e12a411a', 1562070220, 0x5f5f666c6173687c613a303a7b7d),
('a2d2ce74d1695451d09aca9205b255aa', 1562070220, 0x5f5f666c6173687c613a303a7b7d),
('84ad007a4dcf99ef2f736f79817c855d', 1562070221, 0x5f5f666c6173687c613a303a7b7d),
('8c0d3e43af1368b938b747754cce96c9', 1562070851, 0x5f5f666c6173687c613a303a7b7d),
('a4e48c32907548250ef8d81f8b3e5d95', 1562077719, 0x5f5f666c6173687c613a303a7b7d),
('b6a308f2903acb80da01447235cd21a1', 1562079284, 0x5f5f666c6173687c613a303a7b7d),
('3e12a557773ce040f57bfb4cb4db3dc6', 1562085033, 0x5f5f666c6173687c613a303a7b7d),
('0824a09411aef8afc8c5e697ab9b5b4c', 1562085051, 0x5f5f666c6173687c613a303a7b7d),
('8d16550592f503ca2fb9454fedbba410', 1562086181, 0x5f5f666c6173687c613a303a7b7d),
('807a08f8cc91e60f10fcb6f5db6fbb48', 1562087532, 0x5f5f666c6173687c613a303a7b7d),
('be2d90e4a6b4087fb68cc83203b26d4e', 1562087533, 0x5f5f666c6173687c613a303a7b7d),
('3ef35ca29d1257cc7ae78c07854cb2fb', 1562087832, 0x5f5f666c6173687c613a303a7b7d),
('f312a3310133845d5fbf751b29a48a96', 1562090492, 0x5f5f666c6173687c613a303a7b7d),
('82959764f56f3e37667fc1560af9a2fc', 1562093382, 0x5f5f666c6173687c613a303a7b7d),
('86bbdc2b1cd2cc41782819a8c7a19754', 1562096700, 0x5f5f666c6173687c613a303a7b7d),
('e40d8e89cb83112738113df44ee46ba7', 1562096708, 0x5f5f666c6173687c613a303a7b7d),
('028fe08861274fde795eb737ffccbb9c', 1562105767, 0x5f5f666c6173687c613a303a7b7d),
('95b3bf65a4dcb463543ffb24589aea91', 1562113206, 0x5f5f666c6173687c613a303a7b7d),
('665e4c0ad8938463b8b66d70fb024eda', 1562114764, 0x5f5f666c6173687c613a303a7b7d),
('6da494c85c3e860d776b35ffc6d51d74', 1562114765, 0x5f5f666c6173687c613a303a7b7d),
('ecc01feb1492795c2a5b6f8f4525cd64', 1562121415, 0x5f5f666c6173687c613a303a7b7d),
('fc75a08428911aa82090e2d6d6fc11a5', 1562125561, 0x5f5f666c6173687c613a303a7b7d),
('7c527d5525c22f0cf2c26c3ccfae99ce', 1562126841, 0x5f5f666c6173687c613a303a7b7d),
('2dd9774981ce7bdff6992d035485d0a5', 1562126845, 0x5f5f666c6173687c613a303a7b7d),
('73866c05e3a1795775c34d92dfcd3237', 1562128660, 0x5f5f666c6173687c613a303a7b7d),
('c87e4c5f014ff9116aef9fa67d6e58ec', 1562129844, 0x5f5f666c6173687c613a303a7b7d),
('45e9f162e2ea87c1edc341a08a5af471', 1562133297, 0x5f5f666c6173687c613a303a7b7d),
('cee33c938aaf4224e0a89f8f615d6602', 1562133298, 0x5f5f666c6173687c613a303a7b7d),
('654fde552336ef1f6b66f745dfb29b4b', 1562133298, 0x5f5f666c6173687c613a303a7b7d),
('66393794a9991af35b5e21c1401203ce', 1562133299, 0x5f5f666c6173687c613a303a7b7d),
('fd30478194382f7f922403d7cce4c17f', 1562133299, 0x5f5f666c6173687c613a303a7b7d),
('ba23ac3ef541c093e0f1faf41603c730', 1562133299, 0x5f5f666c6173687c613a303a7b7d),
('24f9dd0e571baad60ceb9b86cf436f7c', 1562133300, 0x5f5f666c6173687c613a303a7b7d),
('3620f98d2675bd741612065828133c4a', 1562133300, 0x5f5f666c6173687c613a303a7b7d),
('f2a8f6c3318a34d6653bb6a0cf2a77f6', 1562133300, 0x5f5f666c6173687c613a303a7b7d),
('f3395f190533b6e7985d0d6c7335160d', 1562133301, 0x5f5f666c6173687c613a303a7b7d),
('c801f1dba6f3b4b760d6ef9d2f9dfa87', 1562133301, 0x5f5f666c6173687c613a303a7b7d),
('b4c945c5eff953eaa1cd5cdde1ca64e2', 1562133301, 0x5f5f666c6173687c613a303a7b7d),
('9291b8f7a44a950e3251fad2c76ece3c', 1562133302, 0x5f5f666c6173687c613a303a7b7d),
('407489313d818da33524877c78479197', 1562133302, 0x5f5f666c6173687c613a303a7b7d),
('8e4a1bae4ebfc6035cb934ad70d84f5a', 1562133303, 0x5f5f666c6173687c613a303a7b7d),
('e3e6e22caae25e1fa7080bd525d95645', 1562133303, 0x5f5f666c6173687c613a303a7b7d),
('dfe88acc72d90f5bacf6b4016b286ada', 1562133304, 0x5f5f666c6173687c613a303a7b7d),
('57300299c7681138e4359239ab747e49', 1562133304, 0x5f5f666c6173687c613a303a7b7d),
('3b280fbd28a19e082cd54e60aecf1ca4', 1562133304, 0x5f5f666c6173687c613a303a7b7d),
('2343f4fb606c87b2ce2ee047ed201d66', 1562133305, 0x5f5f666c6173687c613a303a7b7d),
('6af7b1e2fa3e22b777964d824f05f6c3', 1562133305, 0x5f5f666c6173687c613a303a7b7d),
('958fde2922cf47caffef5e147763e7b3', 1562133306, 0x5f5f666c6173687c613a303a7b7d),
('6aebabb592e1b6a7552b7d310d724ac5', 1562133306, 0x5f5f666c6173687c613a303a7b7d),
('20372e532babaebb2c8553404936e7d0', 1562133306, 0x5f5f666c6173687c613a303a7b7d),
('8e8742f367bec75e8ee690b910c994e0', 1562133307, 0x5f5f666c6173687c613a303a7b7d),
('035817146cec553bff289d1073df394e', 1562133307, 0x5f5f666c6173687c613a303a7b7d),
('3ae7a87917f9772cf49e8afe8e6416b9', 1562133308, 0x5f5f666c6173687c613a303a7b7d),
('9679778f53f5c3b17c2543f490ab2399', 1562133308, 0x5f5f666c6173687c613a303a7b7d),
('ea29445161aabfeba22a9db28735f6ab', 1562133308, 0x5f5f666c6173687c613a303a7b7d),
('a75aeb1c3f67044803352825e722a162', 1562133309, 0x5f5f666c6173687c613a303a7b7d),
('c94683eef31054ffe297ed246ea3664a', 1562134650, 0x5f5f666c6173687c613a303a7b7d),
('387a46ee312cc1cd9f59c931286796e5', 1562141900, 0x5f5f666c6173687c613a303a7b7d),
('810a161d0655292a7f122472829cdc34', 1562144296, 0x5f5f666c6173687c613a303a7b7d),
('f653887bb0070dab560686cfd9860380', 1562144426, 0x5f5f666c6173687c613a303a7b7d),
('67638e7c90e6496434f1ec514f2a75d6', 1562153655, 0x5f5f666c6173687c613a303a7b7d),
('74b3d8e012cf33af403de0a49d6509c0', 1562155605, 0x5f5f666c6173687c613a303a7b7d),
('af296f89f80d3bb0f31a6301b54af529', 1562157547, 0x5f5f666c6173687c613a303a7b7d),
('1a394154668b3336c3c8a07f3851f3e1', 1562157562, 0x5f5f666c6173687c613a303a7b7d),
('04a354ecf7e339d1b1dda5d49e8836b1', 1562160836, 0x5f5f666c6173687c613a303a7b7d),
('73e06b95c7bd79e4d2f832fd836a2830', 1562161759, 0x5f5f666c6173687c613a303a7b7d),
('b6c85b0621a86ee193e56aada5b1d9f3', 1562168783, 0x5f5f666c6173687c613a303a7b7d),
('fb14b731edae35575c011f2fd859903e', 1562170731, 0x5f5f666c6173687c613a303a7b7d),
('5142c479c943fbc079567049aaa0ccda', 1562176445, 0x5f5f666c6173687c613a303a7b7d),
('456dd785d59f7c0078831ebd2b4322eb', 1562176451, 0x5f5f666c6173687c613a303a7b7d),
('219c62c59ca60b148f12dbb21acedbe3', 1562176462, 0x5f5f666c6173687c613a303a7b7d),
('918fb8477d54db3e6d4c48133dc1733b', 1562177173, 0x5f5f666c6173687c613a303a7b7d),
('b4a7503f87db2fdce841accbeef07813', 1562178216, 0x5f5f666c6173687c613a303a7b7d),
('a17c6ee3cebc99420f032fde0d9a7fa2', 1562179646, 0x5f5f666c6173687c613a303a7b7d),
('7179d6f62198e3633b797a4586545860', 1562181875, 0x5f5f666c6173687c613a303a7b7d),
('a71afc34eaf3e7bfce3ca61d32e107e2', 1562182068, 0x5f5f666c6173687c613a303a7b7d),
('b916ef167722d9d1fb3e3ada0eea3436', 1562182796, 0x5f5f666c6173687c613a303a7b7d),
('15267e72f45d7a99ac0a718d70231359', 1562183536, 0x5f5f666c6173687c613a303a7b7d),
('8751e2ddbbbc01562714262774f2a52e', 1562183538, 0x5f5f666c6173687c613a303a7b7d),
('195c4db74223d6245cf1df237c988cbd', 1562183543, 0x5f5f666c6173687c613a303a7b7d),
('5f6668ec3a7a837b3a457e0eb23f7501', 1562184166, 0x5f5f666c6173687c613a303a7b7d),
('de8d2fb743162ae2663ea5f9e6b99845', 1562184728, 0x5f5f666c6173687c613a303a7b7d),
('38ff42c3817eee8aa7bdd92665cadf95', 1562184733, 0x5f5f666c6173687c613a303a7b7d),
('3f794b1f8e0ce6112de2e3b74101354c', 1562190931, 0x5f5f666c6173687c613a303a7b7d),
('681beec271f73859d2e675384c734579', 1562195527, 0x5f5f666c6173687c613a303a7b7d),
('ee1363bdc698267470d40869038c927a', 1562195543, 0x5f5f666c6173687c613a303a7b7d),
('f43e123bb20b4f4c6598cfc597a893da', 1562195547, 0x5f5f666c6173687c613a303a7b7d),
('61dc3877f3a3292694891a2fd5762e27', 1562195550, 0x5f5f666c6173687c613a303a7b7d),
('72c70d60df8aaacf0cdfb6da9793f4f1', 1562195555, 0x5f5f666c6173687c613a303a7b7d),
('cad72e7496233a7edc1fed0d14c4ace4', 1562195559, 0x5f5f666c6173687c613a303a7b7d),
('918b4676648f0b6ef50d71913f35cba4', 1562195562, 0x5f5f666c6173687c613a303a7b7d),
('5ebabad42e12719fb2723aa069de2405', 1562195565, 0x5f5f666c6173687c613a303a7b7d),
('a820dd1c7b7e2e8e1d844b23f663bad3', 1562195568, 0x5f5f666c6173687c613a303a7b7d),
('34bd82c2553ad49d2c33314891d3384f', 1562195570, 0x5f5f666c6173687c613a303a7b7d),
('e2fcb4c303860ced5bc8f84a7ea347a7', 1562195577, 0x5f5f666c6173687c613a303a7b7d),
('bcf7436304be9c2617722be0946c25cf', 1562195581, 0x5f5f666c6173687c613a303a7b7d),
('6f1a3fd6e12174ad63db454d4dde62af', 1562195585, 0x5f5f666c6173687c613a303a7b7d),
('3306f7b55d68aa551df0e9371aca91be', 1562195589, 0x5f5f666c6173687c613a303a7b7d),
('445826236505e859b76ca92312be8aba', 1562195595, 0x5f5f666c6173687c613a303a7b7d),
('a87921eb4849f4d6eae000f7155a0762', 1562195600, 0x5f5f666c6173687c613a303a7b7d),
('ce09b97542dd0f6cda22acf2e799aa46', 1562195606, 0x5f5f666c6173687c613a303a7b7d),
('94a1757d6d2b9762dd848380508c1988', 1562195609, 0x5f5f666c6173687c613a303a7b7d),
('d2db257f7ddc2f182d3375af17f05ed1', 1562195614, 0x5f5f666c6173687c613a303a7b7d),
('cacd8760c998b14586582d79b4d867eb', 1562195625, 0x5f5f666c6173687c613a303a7b7d),
('4d8b1a0b131f19a3b58c9c3280059f59', 1562195633, 0x5f5f666c6173687c613a303a7b7d),
('69019a32932952d8ded0cd2bbba04b29', 1562195640, 0x5f5f666c6173687c613a303a7b7d),
('a6ffcbced1ed1a83f99f064fa16d7872', 1562195659, 0x5f5f666c6173687c613a303a7b7d),
('90e74fa3265a273e37977c615ff34bc0', 1562195663, 0x5f5f666c6173687c613a303a7b7d),
('545cd65519875359a9c37389adecf169', 1562195667, 0x5f5f666c6173687c613a303a7b7d),
('06c4c0167cbb32c34285f7e932073410', 1562195670, 0x5f5f666c6173687c613a303a7b7d),
('fa5a0014c870a149724d5943cf167ba8', 1562195674, 0x5f5f666c6173687c613a303a7b7d),
('4e420f907e54c03c8aa700d3b8a8974b', 1562195678, 0x5f5f666c6173687c613a303a7b7d),
('6ead3f2b51a8a6a31ebec1ff0f7be4b8', 1562195681, 0x5f5f666c6173687c613a303a7b7d),
('a58791b0358159e69d501cc41be40ed4', 1562195685, 0x5f5f666c6173687c613a303a7b7d),
('e6c71df19f438c51a1d08f673b1cd8a1', 1562209933, 0x5f5f666c6173687c613a303a7b7d),
('53d819749142f6143072ddac1b2b5de5', 1562216942, 0x5f5f666c6173687c613a303a7b7d),
('39c1482c9b53c8d2f1add027310c7786', 1562221844, 0x5f5f666c6173687c613a303a7b7d),
('33e585f7b8e6a085d170e1b8185bfc55', 1562221853, 0x5f5f666c6173687c613a303a7b7d),
('bd910e9b73c6a228796ed3122da08a7c', 1562234101, 0x5f5f666c6173687c613a303a7b7d),
('f7326a7972cf29c1727cff92175f9646', 1562242476, 0x5f5f666c6173687c613a303a7b7d),
('6c0d99ef62d4e8f63718cb6ed83f6377', 1562246860, 0x5f5f666c6173687c613a303a7b7d),
('22ab5231e7c7209fb9a5cdc1ed62f269', 1562247094, 0x5f5f666c6173687c613a303a7b7d),
('75589f0390c58544e19edfadbb696706', 1562247338, 0x5f5f666c6173687c613a303a7b7d),
('0c9086e034033846c9157f4cd07b5914', 1562249613, 0x5f5f666c6173687c613a303a7b7d),
('e1c9fbcf597809e82afaa1dedf8099b8', 1562251139, 0x5f5f666c6173687c613a303a7b7d),
('edffcc3e3a14e7d7532d0ca70ac74851', 1562252374, 0x5f5f666c6173687c613a303a7b7d),
('600100d9918cdc0285e786fcccd15e23', 1562253592, 0x5f5f666c6173687c613a303a7b7d),
('8c46fd64cbea4788b60164ec51370c5f', 1562256678, 0x5f5f666c6173687c613a303a7b7d),
('8ae45da1a1916cff9e9ef70867807b19', 1562259521, 0x5f5f666c6173687c613a303a7b7d),
('b69cbd29d0dd6870898aa18d5f90a912', 1562263606, 0x5f5f666c6173687c613a303a7b7d),
('d03745bffbaf670b8b7d2c52a21b0498', 1562265064, 0x5f5f666c6173687c613a303a7b7d),
('2f5063ffbfd0b5aacde484de080b743d', 1562265066, 0x5f5f666c6173687c613a303a7b7d),
('a9954e6632cfb6c200cd09d60b6a440f', 1562272168, 0x5f5f666c6173687c613a303a7b7d),
('a02c3226def51e0e141189b84f00b5e1', 1562272169, 0x5f5f666c6173687c613a303a7b7d),
('10a43d04b60cc178773132c7c19f0798', 1562272186, 0x5f5f666c6173687c613a303a7b7d),
('25e1a65a1fb771c197771cb1d9b7db20', 1562276853, 0x5f5f666c6173687c613a303a7b7d),
('4dd99cb489ab84246330b1ffd37ff4a9', 1562277951, 0x5f5f666c6173687c613a303a7b7d),
('fc76c065da16964222483663e979d56b', 1562279471, 0x5f5f666c6173687c613a303a7b7d),
('49b695be731a10fe614082c974a22c43', 1562279472, 0x5f5f666c6173687c613a303a7b7d),
('6a8140885b05ede4ebb1cfde3a954e81', 1562292098, 0x5f5f666c6173687c613a303a7b7d),
('0836ab561db3d47f870c1793321cdc06', 1562305751, 0x5f5f666c6173687c613a303a7b7d),
('9e70b48d39e65726bdc97d45a28a4be3', 1562307422, 0x5f5f666c6173687c613a303a7b7d),
('e577de1f7d673fc89febfb7e8ab13e6f', 1562307932, 0x5f5f666c6173687c613a303a7b7d),
('267477f23cc95c0f60b53320b98834b7', 1562311816, 0x5f5f666c6173687c613a303a7b7d),
('5ab5f868588df0d7e7271f03d0d5e6cf', 1562314859, 0x5f5f666c6173687c613a303a7b7d),
('c8b0a43344c36dbf0766008f893be933', 1562318781, 0x5f5f666c6173687c613a303a7b7d),
('6294281b31c07ebda3c78b5151522357', 1562320073, 0x5f5f666c6173687c613a303a7b7d),
('03216d3b9fa50ea2edad23c896485e5b', 1562332703, 0x5f5f666c6173687c613a303a7b7d),
('abfc166466e7be66d512553d443c34ba', 1562333610, 0x5f5f666c6173687c613a303a7b7d),
('892a932a8f91aa2157b893bc64f4a0a1', 1562335043, 0x5f5f666c6173687c613a303a7b7d),
('6fef973e74bc0da1e15b6ff005043019', 1562336399, 0x5f5f666c6173687c613a303a7b7d),
('495334aa26016f14ff1fff784f8f759c', 1562348647, 0x5f5f666c6173687c613a303a7b7d),
('b70ac7332a5497505eb343d64d46de73', 1562355979, 0x5f5f666c6173687c613a303a7b7d),
('7e1d3b113629ff2cb24e3fa252381b14', 1562356010, 0x5f5f666c6173687c613a303a7b7d),
('50148218dde53ed404289261b4fd3e79', 1562356045, 0x5f5f666c6173687c613a303a7b7d),
('324824a692158e0cd438bd3f8bbcb991', 1562356060, 0x5f5f666c6173687c613a303a7b7d),
('163d24862f4e3fd05f00e7f558cce23f', 1562358420, 0x5f5f666c6173687c613a303a7b7d),
('03f55ade0a09e55187ffd065f12c7a74', 1562364398, 0x5f5f666c6173687c613a303a7b7d),
('9b3f124d3f80144d2d536c0654f3ee39', 1562364406, 0x5f5f666c6173687c613a303a7b7d),
('9cf525eb7ee128c6d8823149e502f317', 1562366312, 0x5f5f666c6173687c613a303a7b7d),
('666640fffbae306f789dbc53dc96225b', 1562369681, 0x5f5f666c6173687c613a303a7b7d),
('5bad8fdefd7bca933acf18ab39b4060c', 1562384702, 0x5f5f666c6173687c613a303a7b7d),
('e80b91d054878c9a79abdeef3e7af5d4', 1562384961, 0x5f5f666c6173687c613a303a7b7d),
('66cf89bf01b2f6bd1da6971514e22a1e', 1562384966, 0x5f5f666c6173687c613a303a7b7d),
('f8a2c08bfb36be11d0313367262bd09f', 1562399338, 0x5f5f666c6173687c613a303a7b7d),
('77b922b706e43045bc166f5e9cc93df9', 1562399978, 0x5f5f666c6173687c613a303a7b7d),
('773754040f10bfd21a3458fea9757ba6', 1562409441, 0x5f5f666c6173687c613a303a7b7d),
('072608ed46de12eb8080df9fb6be74dc', 1562419819, 0x5f5f666c6173687c613a303a7b7d),
('2db9a0df06cbe5131e8d37feebdd742c', 1562427128, 0x5f5f666c6173687c613a303a7b7d),
('6486b75633e8ab7c941b9df6ec501ed4', 1562469268, 0x5f5f666c6173687c613a303a7b7d),
('e2c8187b3cd4a38d6f6fa3c0f0fc7177', 1562442984, 0x5f5f666c6173687c613a303a7b7d),
('68ecb9d06f9eed27b84ec022c7ad3e87', 1562453504, 0x5f5f666c6173687c613a303a7b7d),
('8338d8da5279c6307e2dc4af0233d9da', 1562454511, 0x5f5f666c6173687c613a303a7b7d),
('93dce0a73d47e31b1c3d444ecdad4c84', 1562454511, 0x5f5f666c6173687c613a303a7b7d),
('25c6d8b99c8e93539ef7091b2a6ac77b', 1562454515, 0x5f5f666c6173687c613a303a7b7d),
('90072b161985f1cf364f0f3e575255a2', 1562454533, 0x5f5f666c6173687c613a303a7b7d),
('a59830f50620b8a9d5c2554587298fce', 1562457004, 0x5f5f666c6173687c613a303a7b7d),
('467dec9a3e92f963d845794e0ba13a45', 1562459052, 0x5f5f666c6173687c613a303a7b7d),
('120ebe66b8f20c69fcea61704851db3e', 1562460133, 0x5f5f666c6173687c613a303a7b7d),
('c883d40ec5eeee35875e070687897290', 1562461619, 0x5f5f666c6173687c613a303a7b7d),
('70fe405d0bc9fb87cb718ceac65cd438', 1562461620, 0x5f5f666c6173687c613a303a7b7d),
('209a7fbc4e846922648de7ce9e7237c0', 1562469130, 0x5f5f666c6173687c613a303a7b7d),
('efolrsj3a3r3vvdfjcfchk8626', 1562472689, 0x5f5f666c6173687c613a303a7b7d),
('n196jd8st51lcu8a69155off48', 1567418433, 0x5f5f666c6173687c613a303a7b7d),
('v45b0dpunjselukt0hidjkjr04', 1571917967, 0x5f5f666c6173687c613a303a7b7d),
('u0fbeo74ke47f80di864io0cv2', 1585578670, 0x5f5f666c6173687c613a303a7b7d),
('o4lg6rtge95sm9b3rj6kbq1n72', 1585579582, 0x5f5f666c6173687c613a303a7b7d),
('tef5sa77ftj3s5skl0jq83eono', 1585816360, 0x5f5f666c6173687c613a303a7b7d);

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
(1, 'address', 'json', 'Address(es) used in the contact page', 0, '[{\"title\":\"We\'re here in Denmark\",\"subtitle\":\"Looking for us ?\",\"email\":\"info@gateway-scandinavia.com\",\"phone\":\"+45 61 80 01 14 \",\"on_footer\":\"0\",\"address\":\"Ravnsborg Tv\\u00e6rgade 2, 1,\\r\\nDK-2200 Copenhagen N\"},{\"title\":\"And America too\",\"subtitle\":\"See u soon !\",\"email\":\"sales@gateway-scandinavia.com\",\"phone\":\"+45 61 80 01 14 \",\"on_footer\":\"0\",\"address\":\"330 Seventh Avenue, Suite 1001 , New York, NY 10001\"}]'),
(2, 'social_media', 'json', 'Social Media icon(s) on the footer of the site', 0, ''),
(3, 'video', 'text', 'Link to video on the about us page', 1, ''),
(4, 'show_blog', 'boolean', 'Show / Hide the blog', 1, '0'),
(5, 'blog_count', 'boolean', 'Maximum number of blog posts in the homepage', 1, '6'),
(7, 'show_slider', 'boolean', 'Show / Hide revolution slider', 1, '1'),
(8, 'fonts', 'text', 'Fonts that will be used throughout the website', 0, '{\"main\":{\"name\":\"Poppins\",\"size\":\"18\",\"weight\":\"300\",\"type\":\"sherif\"}}');

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
  `created_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slide_index`, `image`, `content`, `content_align`, `link`, `link_text`, `created_on`) VALUES
(1, 1, '15504798881.jpg', '<div style=\"line-height: 3;\"><font color=\"#efefef\"><span style=\"font-size: 28px;\">Your 21</span><sup><span style=\"font-size: 28px;\">st</span></sup><span style=\"font-size: 28px;\"> century representation</span></font></div><div style=\"line-height: 3;\"><span style=\"font-size: 28px;\"><font color=\"#efefef\">and communication agency</font></span>\r\n<br class=\"Apple-interchange-newline\"></div>', 'left', 'https://gateway-scandinavia.com/site/about/', 'About Us', '2019-02-18 14:36:28'),
(2, 2, '15504804472.jpg', '<h3 style=\"line-height: 3;\"><font color=\"#efefef\"><span style=\"font-size: 28px;\">Harnessing the power of </span><br><span style=\"font-size: 28px;\">research &amp; big data analytics&nbsp;</span><span style=\"font-size: 28px;\">\r\n</span></font><br class=\"Apple-interchange-newline\"></h3>', 'left', 'https://gateway-scandinavia.com/site/team/', 'Our Team', '2019-02-18 14:45:47'),
(3, 3, '15504805523.jpg', '<h4 style=\"line-height: 3;\"><font color=\"#fccd09\"><span style=\"font-size: 28px;\">Tailored, perfectly targeted</span><br><span style=\"font-size: 28px;\">and latest solutions</span></font></h4>', 'left', 'https://gateway-scandinavia.com/site/contact/', 'Contact Us', '2019-02-18 14:47:32');

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
(1, '1552110523r.jpg', 'Peer Kjaer', 'Partner', 'peer@gateway-scandinavia.com', '+45 61 80 01 14', '<p>Our incoming specialist with a global outreach! 30 years in managerial positions with Tumlare, Kuoni, Carlson Wagolit and Liberty international Tourism Group – in all seven Nordic countries! Lived and worked many years in Japan and speaks fluent Japanese!</p>', '', '2019-02-18 18:29:10'),
(2, '1552110538i.jpg', 'Dewashree Koirala', 'Partner', 'dewashree@gateway-scandinavia.com', '+45 53 31 15 88', '<p>Our Nepalese big data and social media expert! Expertise within big data analysis, research, strategy building, online presence and SEO. Speaks five languages fluently and loves to dance and host events.</p>', '', '2019-02-18 18:30:56'),
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
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `info`, `position`, `content`, `created_on`) VALUES
(1, '15504743231.jpg', 'Richard Williams', 'American Guest', 'Chief Executive - American Guest', 'Peer is the kind of professional we all look to work with…knowledgeable, reliable with a great amount of integrity. Personable and easy to work with, he is an expert for the Scandinavian countries and beyond.', '2019-02-18 13:04:39');

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

INSERT INTO `user` (`id`, `incorrect_login`, `name`, `role`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `email_verified`, `email_verification`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Administrator', 'UBhcWtaIva', 'admin', 'vyAwpvilLlp-vtuio5Vw2Gb37fD4nmuY', '$2y$13$xCdL76J2wvJUj9.vnECW6OzGdR8v5.TSVObBJ4WbSL1IpMqCSeg8m', 'XFVPGOajemsNKNOqPvjBPNUGKs0qwPm4_1546762267', 'chetan.rajbhandari@gmail.com', 1, NULL, 10, '2019-01-08 12:40:51', '0000-00-00 00:00:00'),
(2, 0, 'Administrator', 'QrWjSeWasD', 'operator', 'qgseEVHxpCEJSQL8BwR2EB-HVmZG2y9m', '$2y$13$xCdL76J2wvJUj9.vnECW6OzGdR8v5.TSVObBJ4WbSL1IpMqCSeg8m', '2nqk_u5Uae0ermCpHA4OWu95EkTsdxSF_1546496698', 'chetan.rajbhandari@gmail.com', 1, NULL, 10, '2019-01-08 12:42:43', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_ibfk_1` FOREIGN KEY (`page`) REFERENCES `pages` (`name`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
