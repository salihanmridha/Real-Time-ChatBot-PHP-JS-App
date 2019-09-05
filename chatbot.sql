-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2019 at 04:01 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `user_id`, `message`, `created_at`) VALUES
(129, 11, 'hello', '2018-12-02 19:52:10'),
(130, 11, 'hi', '2018-12-02 19:52:25'),
(131, 9, 'yes', '2018-12-02 19:52:57'),
(132, 9, 'I am here', '2018-12-02 19:52:59'),
(133, 11, 'how is this chatbot?', '2018-12-02 19:53:24'),
(134, 9, 'it is fantastic', '2018-12-02 19:53:32'),
(135, 11, 'thank you so much', '2018-12-02 19:53:49'),
(136, 11, 'hello', '2018-12-04 12:23:00'),
(137, 9, 'hi', '2018-12-04 12:23:05'),
(138, 9, 'I am fine', '2018-12-04 12:23:22'),
(139, 11, 'how are you', '2018-12-04 12:23:34'),
(140, 9, 'hi', '2019-01-21 04:00:09'),
(141, 9, 'how are you?', '2019-01-21 04:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(9, 'smridha', 'salihanmridha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'tmridha', 'ocean9292@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'admin', 'a@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
