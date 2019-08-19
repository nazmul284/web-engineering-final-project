-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 06:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_desc` text NOT NULL,
  `cat_icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_desc`, `cat_icon`) VALUES
(16, 'Web Engineering', 'This category create for test.', 'https://fontawesome.com/icons/browser?style=light'),
(17, 'Android', 'Android is a mobile operating system developed by Google. It is based on a modified version of the Linux kernel and other open source software, and is designed primarily for touchscreen mobile devices such as smartphones and tablets.', 'https://fontawesome.com/icons/android?style=brands');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `user_id` int(100) NOT NULL,
  `user_fname` text NOT NULL,
  `user_lname` text NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_email`, `user_pass`, `about`, `admin`) VALUES
(9, 'Admin', 'Admin', 'admin', 'admin@admin.com', 'admin', 'New Instructor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `learners`
--

CREATE TABLE `learners` (
  `luser_fname` varchar(20) NOT NULL,
  `luser_lname` varchar(20) NOT NULL,
  `luser_email` varchar(20) NOT NULL,
  `luser_name` varchar(20) NOT NULL,
  `luser_pass` varchar(20) DEFAULT '12345'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learners`
--

INSERT INTO `learners` (`luser_fname`, `luser_lname`, `luser_email`, `luser_name`, `luser_pass`) VALUES
('Nazmul', 'Hasan', 'admin@admin.com', 'nazmul', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_date` text NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_keywords` text NOT NULL,
  `post_image` text NOT NULL,
  `post_content` longtext NOT NULL,
  `video_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `cat_id`, `post_title`, `post_date`, `post_author`, `post_keywords`, `post_image`, `post_content`, `video_link`) VALUES
(28, 16, 'HTML basic', '19-08-19', 'Admin', 'HTML', 'html5.png', 'HTML is hyper text markup language.\r\n', 'https://www.youtube.com/watch?v=UB1O30fR-EE'),
(29, 17, 'Android Tutorial ', '19-08-19', 'Admin', 'Android, JDK ', 'android.png', 'Introduction and Installing and Configuring Java JDK', 'https://www.youtube.com/watch?v=EknEIzswvC0&list=PLS1QulWo1RIbb1cYyzZpLFCKvdYV_yJ-E');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(100) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_image`) VALUES
(7, 'banner.png'),
(8, 'banner2.png'),
(9, 'banner3.png'),
(10, 'banner4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
