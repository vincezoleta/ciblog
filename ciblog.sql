-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 05:27 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`) VALUES
(1, 2, 'Business', '2018-09-18 01:22:43'),
(3, 2, 'KPOP', '2018-09-18 07:07:44'),
(4, 3, 'TUP', '2018-09-18 08:21:40'),
(6, 3, 'COS', '2018-09-19 02:11:03'),
(7, 1, 'COS', '2018-09-25 03:23:49'),
(8, 1, 'CIT', '2018-09-25 03:23:55'),
(9, 1, 'COE', '2018-09-25 03:23:59'),
(10, 1, 'CIE', '2018-09-25 03:24:02'),
(11, 1, 'CLA', '2018-09-25 03:24:07'),
(12, 1, 'CAFA', '2018-09-25 03:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 29, 'asdasd', 'asdasd@yahoo.com', 'asdasdsa\r\n', '2018-09-19 00:49:49'),
(2, 29, 'asdasd', 'asdasd@yahoo.com', 'asdasdsa\r\n', '2018-09-19 00:51:38'),
(3, 29, 'CorrosiveRouter', 'Corrosive@gmail.com', 'Awesome picture bro! ', '2018-09-19 01:06:13'),
(4, 31, 'Vince', 'vince@yahoo.com', 'BOBO KA ', '2018-09-20 08:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created _at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `created _at`) VALUES
(20, 5, 1, 'asdasd', 'asdasd', '<p>adasdsadsa</p>\r\n', '1964971_605664706192785_132940439_n.jpg', '2018-09-18 03:00:10'),
(26, 4, 2, 'Post malOne', 'Post-malOne', '<p>LOREM IPSUM&nbsp;<br />\r\n&nbsp;</p>\r\n', 'noimage.png', '2018-09-18 08:47:17'),
(27, 3, 2, 'LOWELL', 'LOWELL', '<p>POGI SI LOWELL</p>\r\n', 'lowell.jpg', '2018-09-18 08:57:59'),
(29, 1, 3, 'Blog Post 1 ', 'Blog-Post-1', '<p>This is a Blog Post&nbsp;</p>\r\n', 'BLACKANDWHITE.PNG', '2018-09-18 09:11:59'),
(31, 3, 1, 'ASAWA KO ', 'ASAWA-KO', '<p>Jennie Kim from BLACKPINK</p>\r\n', 'JennieBlink2.jpg', '2018-09-20 08:32:44'),
(32, 2, 1, 'SADASDASD', 'SADASDASD', '<p>ASDASDSADASDSA</p>\r\n', 'noimage.png', '2018-09-20 08:38:21'),
(34, 4, 1, 'SAD', 'SAD', '<p>MALOKO</p>\r\n', 'Maloko.PNG', '2018-09-25 03:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_data`) VALUES
(1, 'CorrosiveRouter', '1409', 'Corrosive@gmail.com', 'webmaster', '81dc9bdb52d04dc20036dbd8313ed055', '2018-09-19 03:26:22'),
(2, 'Alanceli', '1111', 'Alanceli@email.com', 'Alanceli123', '827ccb0eea8a706c4c34a16891f84e7b', '2018-09-19 03:27:17'),
(3, 'COS', '123', 'COS@yahoo.com', 'COS', '81dc9bdb52d04dc20036dbd8313ed055', '2018-09-19 07:13:41'),
(4, '123', '123', '123@gmail.com', '123', '202cb962ac59075b964b07152d234b70', '2018-09-19 07:42:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
