-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 07:40 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tgp`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `video_link` varchar(1000) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category`, `heading`, `description`, `video_link`, `added_at`) VALUES
(1, 'Artificial Intelligence', 'Uniform Cost Search Algorithm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit se eiusmod tempor incididunt ut labore et dolore magna asin lute enim ad minim veniam quis', 'https://youtu.be/IsbP7s6uqXU', '2021-06-06 16:19:15'),
(2, 'Artificial Intelligence', 'A* Algorithm With Example', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit se eiusmod tempor incididunt ut labore et dolore magna asin lute enim ad minim veniam quis', 'https://youtu.be/Yn66j1Ug8nY', '2021-06-06 16:19:15'),
(3, 'Artificial Intelligence', 'AO* Algorithm with Example', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit se eiusmod tempor incididunt ut labore et dolore magna asin lute enim ad minim veniam quis', 'https://youtu.be/YR5jVSzyUzc', '2021-06-06 16:19:15'),
(4, 'Artificial Intelligence', 'Uniform Cost Search Algorithm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit se eiusmod tempor incididunt ut labore et dolore magna asin lute enim ad minim veniam quis', 'https://youtu.be/IsbP7s6uqXU', '2021-06-06 16:21:13'),
(5, 'Operating System Concepts', 'Types of Operating System (Multiprogramming, Multitasking, Multiprocessor, Distributed, Real Time)', 'Complete Operating System Concepts\r\nTypes of Operating System | Loosly Coupled System | Tightly Coupled System | Closely Coupled System\r\nBy Vijay Bagdi', 'https://youtu.be/AhIJZNsSXbA', '2021-06-06 16:21:13'),
(6, ' Information &  Cyber Security', 'Issue & Need of Information Security', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit se eiusmod tempor incididunt ut labore et dolore magna asin lute enim ad minim veniam quis', 'https://youtu.be/CgR6muYmqM8', '2021-06-06 16:24:53'),
(7, 'Operating System Concepts', 'Context switching', 'Operating System Concepts - Multitasking - Concept of Context Switching - Process Control Block', 'https://youtu.be/qLZ9BC8TwYs', '2021-06-06 16:24:53'),
(8, ' Operating System', 'Singhal’s Heuristics Algorithm Part-1', 'Distributed Operating System', 'https://youtu.be/KTEGFMUmHPo', '2021-06-06 16:24:53'),
(9, ' Operating System', 'Types of Scheduler', 'Operating System Concepts - Types of Scheduler - Long Term Scheduler - Short Term Scheduler - Medium Term Scheduler', 'https://youtu.be/_BCEgonbWkg', '2021-06-06 16:24:53'),
(10, 'Cloud Computing', 'Role of Web Services in Cloud Computing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit se eiusmod tempor incididunt ut labore et dolore magna asin lute enim ad minim veniam quis', 'https://youtu.be/LjY4URjtf6c', '2021-06-06 16:30:30'),
(11, 'Software Engineering', 'Unit Testing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit se eiusmod tempor incididunt ut labore et dolore magna asin lute enim ad minim veniam quis', 'https://youtu.be/0oqVa7GiFTE', '2021-06-06 16:30:30'),
(12, 'Information Security', 'Data Encryption Standard (DES) Algorithm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit se eiusmod tempor incididunt ut labore et dolore magna asin lute enim ad minim veniam quis', 'https://youtu.be/4HwLsrDkU9Q', '2021-06-06 16:30:30'),
(13, 'Operating System', 'Singhal’s Heuristics Algorithm Part-2', 'Subject: Distributed Operating System', 'https://youtu.be/fuGP2ydQ1aw', '2021-06-06 16:30:30'),
(14, 'Cloud Computing', 'Cloud Deployment Models', 'Subject: Clustering & Cloud Computing\r\n', 'https://youtu.be/4ErCalWktrA', '2021-06-06 16:30:30'),
(15, 'Operating System', 'How Calculate Mod Value', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit se eiusmod tempor incididunt ut labore et dolore magna asin lute enim ad minim veniam quis', 'https://youtu.be/H4zE1EoxgJQ', '2021-06-06 16:33:03'),
(16, 'Software Engineering & Project Management', 'Introduction of SEPM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit se eiusmod tempor incididunt ut labore et dolore magna asin lute enim ad minim veniam quis', 'https://youtu.be/xEKUXfU_iwk', '2021-06-06 16:33:03'),
(17, 'Software Engineering & Project Management', 'Hill Cipher', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit se eiusmod tempor incididunt ut labore et dolore magna asin lute enim ad minim veniam quis', 'https://youtu.be/w1YQjS5N59c', '2021-06-06 16:35:00'),
(18, 'Experiment Video', 'Experiment No 1 (Factory Design Pattern)', 'Experiment Video', 'https://youtu.be/czj2OdviAJA', '2021-06-06 16:35:00'),
(19, 'Experiment Video', 'Experiment No 01', 'Experiment No 01', 'https://youtu.be/gexSecqqDAQ', '2021-06-06 16:36:24'),
(20, 'Experiment Video', 'Experiment No 3 DSPD', 'Experiment No 3 DSPD', 'https://youtu.be/VtqDPNDGmv4', '2021-06-06 16:36:24'),
(21, 'Experiment Video', 'Experiment No 2 (Abstract Factory Design Pattern)', 'Experiment No 2 (Abstract Factory Design Pattern)', 'https://youtu.be/ccUENPvGj_Y', '2021-06-06 16:40:01'),
(22, 'Experiment Video', 'DSPD EXPERIEMENT NO 5', 'DSPD EXPERIEMENT NO 5', 'https://youtu.be/11_KagWIPmE', '2021-06-06 16:40:01'),
(23, 'Experiment Video', 'Experiment No. 3 (Builder Design pattern)', 'Experiment No. 3 (Builder Design pattern)', 'https://youtu.be/u7nbhCV8EAA', '2021-06-06 16:40:01'),
(24, 'Experiment Video', 'Experiment No.4 (Adapter Design Pattern)', 'Experiment No.4 (Adapter Design Pattern)', 'https://youtu.be/rtj9FlJQIlg', '2021-06-06 16:40:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
