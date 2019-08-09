-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 04:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messenger`
--

-- --------------------------------------------------------

--
-- Table structure for table `clean`
--

CREATE TABLE `clean` (
  `id` int(11) NOT NULL,
  `clean_message_id` int(11) NOT NULL,
  `clean_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clean`
--

INSERT INTO `clean` (`id`, `clean_message_id`, `clean_user_id`) VALUES
(4, 88, 14),
(5, 86, 2),
(6, 56, 15),
(7, 86, 2),
(8, 88, 14);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `msg_type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `user_id` int(11) NOT NULL,
  `msg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `message`, `msg_type`, `user_id`, `msg_time`) VALUES
(1, 'amr saied essa is my name whats yours', 'text', 2, '2019-07-15 15:26:57'),
(2, 'bla bla bla lba', 'text', 2, '2019-07-15 15:30:56'),
(3, 'bla bla bla lba', 'text', 2, '2019-07-15 15:30:57'),
(4, 'sadasd', 'text', 2, '2019-07-15 15:31:14'),
(5, 'اسمي عمرو وانت ؟', 'text', 2, '2019-07-15 15:32:25'),
(6, 'اسمي عمرو وانت ؟', 'text', 2, '2019-07-15 15:36:45'),
(7, 'عمرو', 'text', 2, '2019-07-15 15:37:06'),
(8, 'عمرو', 'text', 2, '2019-07-15 15:38:10'),
(14, 'mu nmae', 'text', 2, '2019-07-15 15:47:12'),
(15, 'Answer for Chapter One IS.pdf', 'pdf', 2, '2019-07-16 21:26:15'),
(16, 'assets/img/emoji/emoji11.png', 'emoji', 2, '2019-07-17 13:08:38'),
(17, 'assets/img/emoji/emoji5.png', 'emoji', 2, '2019-07-17 13:19:54'),
(18, 'I&#39;m the one who knocks!', 'text', 11, '2019-07-17 17:01:46'),
(20, 'Hi', 'text', 2, '2019-07-18 21:31:09'),
(22, 'amr saie essas', 'text', 2, '2019-07-18 21:41:43'),
(23, 'amr ooooooo', 'text', 2, '2019-07-18 21:41:48'),
(24, 'asdfjkl', 'text', 2, '2019-07-18 21:41:51'),
(25, 'my new message', 'text', 14, '2019-07-18 21:42:54'),
(26, 'ksf;lskd;f', 'text', 14, '2019-07-18 21:49:05'),
(27, 'Hey dude!', 'text', 14, '2019-07-18 23:19:22'),
(28, 'mr-error.jpg', 'jpg', 14, '2019-07-18 23:25:33'),
(29, 'DQsofkjU8AAF3IP.jpg', 'jpg', 14, '2019-07-18 23:28:39'),
(30, 'Answer for Chapter One IS.pdf', 'pdf', 14, '2019-07-19 00:34:07'),
(31, 'TPS Report.zip', 'zip', 14, '2019-07-19 00:37:41'),
(32, 'Amr Saied.rar', 'rar', 14, '2019-07-19 00:43:57'),
(33, 'assets/img/emoji/emoji12.png', 'emoji', 14, '2019-07-19 01:38:08'),
(34, 'assets/img/emoji/emoji16.png', 'emoji', 14, '2019-07-19 01:43:20'),
(35, 'Oooo  way down we goo, waaaaay down!', 'text', 2, '2019-07-19 19:02:28'),
(36, 'Hey body!', 'text', 2, '2019-07-19 19:30:19'),
(37, 'hey bitch!', 'text', 14, '2019-07-19 19:30:49'),
(38, 'mr-error.jpg', 'jpg', 2, '2019-07-19 19:46:52'),
(39, 'Answer for Chapter One IS.pdf', 'pdf', 2, '2019-07-19 19:52:04'),
(40, 'Amr Saied.rar', 'rar', 2, '2019-07-19 19:52:12'),
(41, 'TPS Report.zip', 'zip', 2, '2019-07-19 19:52:26'),
(42, 'assets/img/emoji/emoji11.png', 'emoji', 2, '2019-07-19 19:54:02'),
(43, 'assets/img/emoji/emoji14.png', 'emoji', 2, '2019-07-19 20:02:22'),
(44, 'MY NAME TOMAS FUCKIN SHELPY!', 'text', 2, '2019-07-20 22:59:44'),
(45, 'no just my is amr', 'text', 2, '2019-07-21 00:25:49'),
(46, 'what are you doing right now ?', 'text', 2, '2019-07-21 15:03:23'),
(47, 'heyy!', 'text', 2, '2019-07-21 15:03:39'),
(48, 'youuu!', 'text', 2, '2019-07-21 15:04:19'),
(49, 'my name is amr', 'text', 2, '2019-07-21 15:04:27'),
(50, 'what are you doing', 'text', 2, '2019-07-21 15:04:39'),
(53, 'assets/img/emoji/emoji10.png', 'emoji', 2, '2019-07-21 15:05:07'),
(54, 'Amr Saied.rar', 'rar', 2, '2019-07-21 15:16:30'),
(55, 'assets/img/emoji/emoji16.png', 'emoji', 2, '2019-07-21 15:16:57'),
(56, 'Hi my name is ahmed bahgat!!', 'text', 15, '2019-07-21 15:18:18'),
(57, 'hi ahmed', 'text', 2, '2019-07-21 15:22:34'),
(58, 'hi users!', 'text', 2, '2019-07-21 15:23:16'),
(59, 'no just my name1', 'text', 2, '2019-07-21 15:23:31'),
(60, 'hi', 'text', 2, '2019-07-21 15:32:34'),
(61, 'amr', 'text', 2, '2019-07-21 15:33:02'),
(62, 'my name is amr , i meant', 'text', 2, '2019-07-21 15:33:34'),
(63, 'yeah', 'text', 2, '2019-07-21 15:33:50'),
(64, 'Hi amr!, what are you doing?', 'text', 15, '2019-07-21 15:43:34'),
(65, 'I&#39;m fine man .. and you ?', 'text', 2, '2019-07-21 15:45:24'),
(66, 'assets/img/emoji/emoji2.png', 'emoji', 15, '2019-07-21 15:45:52'),
(67, 'Whay brooo?', 'text', 2, '2019-07-21 15:46:19'),
(68, 'Hiii', 'text', 15, '2019-07-21 15:50:25'),
(69, 'hii', 'text', 2, '2019-07-21 15:50:36'),
(70, 'what are you doing', 'text', 2, '2019-07-21 15:50:53'),
(71, 'what are you doing', 'text', 2, '2019-07-21 15:51:19'),
(72, 'hii', 'text', 2, '2019-07-21 15:51:22'),
(73, 'ya broo', 'text', 2, '2019-07-21 15:51:28'),
(74, 'yes ???', 'text', 15, '2019-07-21 15:51:36'),
(75, 'amr', 'text', 2, '2019-07-21 16:06:48'),
(76, 'amr', 'text', 2, '2019-07-21 16:06:53'),
(77, 'amr', 'text', 2, '2019-07-21 16:07:17'),
(78, 'hel', 'text', 15, '2019-07-21 16:07:21'),
(79, 'TPS Report.zip', 'zip', 15, '2019-07-21 16:13:26'),
(80, 'TPS Report.zip', 'zip', 15, '2019-07-21 16:14:22'),
(81, 'amr', 'text', 15, '2019-07-21 16:15:28'),
(82, 'my name is amt', 'text', 15, '2019-07-21 16:15:32'),
(83, 'ÙŠØ§Ø¨Ù†ÙŠ', 'text', 15, '2019-07-21 17:04:55'),
(84, 'Ø¨Ù‚ÙˆÙ„Ùƒ', 'text', 15, '2019-07-21 18:08:18'),
(85, 'Ø§Ù†Øª Ø¹Ù†Ø¯Ùƒ ÙƒØ§Ù… Ø³Ù†Ø© ØŸ', 'text', 15, '2019-07-21 18:08:27'),
(86, 'Ok', 'text', 2, '2019-07-22 19:30:04'),
(87, 'Hi', 'text', 2, '2019-07-22 19:30:07'),
(88, 'Hello From new chat app!', 'text', 14, '2019-07-22 19:45:57'),
(89, 'Word Session 1.docx', 'docx', 2, '2019-07-25 20:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `clean_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `status`, `clean_status`) VALUES
(2, 'waydown', 'amro@gmail.com', '$2y$10$I7BS0ek3esPgS6xdpNSEfuB8t0BKGxPhQE840O1oS2TebOS3ZW8E2', 'DQsofkjU8AAF3IP.jpg', 1, 1),
(9, 'keinname', 'keinname@gmail.com', '$2y$10$lEsSh0rdaLeq7CYdNjO6EetBRZHtMHx0oMsUXWgaAuntdYdbZ8/Pi', 'gargantua_blackhole_hd_5k-wide.jpg', 0, 0),
(10, 'moaz', 'moaz@gmail.com', '$2y$10$GLGNfNchZDCSOAthYKMAQu7Nt35t0UoifG.7AgdPl2KM1XQ7balyO', 'gargantua_blackhole_hd_5k-wide.jpg', 0, 0),
(11, 'amro', 'error@gmail.com', '$2y$10$9IraXV4rFEoKpefogP.TzemzZtONILsfuRKRuH.zypVDwxRl0QPAK', 'gargantua_blackhole_hd_5k-wide.jpg', 0, 0),
(14, 'test', 'test@gmail.com', '$2y$10$9IraXV4rFEoKpefogP.TzemzZtONILsfuRKRuH.zypVDwxRl0QPAK', 'DQsofkjU8AAF3IP.jpg', 0, 1),
(15, 'ahmed', 'bahgat@gmail.com', '$2y$10$M8xAS9mmI7bC8D6zW1RP/u/JArXVtAC9.VEkL45POqXB3pKgrN9J2', 'Slack-for-iOS-Upload.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_activities`
--

CREATE TABLE `users_activities` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_activities`
--

INSERT INTO `users_activities` (`id`, `user_id`, `login_time`) VALUES
(1, 2, '1564088042'),
(2, 14, '1563824708'),
(3, 15, '1563748185');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clean`
--
ALTER TABLE `clean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_activities`
--
ALTER TABLE `users_activities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clean`
--
ALTER TABLE `clean`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users_activities`
--
ALTER TABLE `users_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
