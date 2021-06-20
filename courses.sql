-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 02:53 PM
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
  `description` varchar(1000) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `video_link` varchar(1000) NOT NULL,
  `video_thumb` varchar(255) NOT NULL,
  `vid_duration` varchar(255) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category`, `heading`, `description`, `instructor`, `video_link`, `video_thumb`, `vid_duration`, `added_at`) VALUES
(1, 'Artificial Intelligence', 'Uniform Cost Search Algorithm', 'Uniform-cost search is a searching algorithm used for traversing a weighted tree or graph. This algorithm comes into play when a different cost is available for each edge. The primary goal of the uniform-cost search is to find a path to the goal node which has the lowest cumulative cost. Uniform-cost search expands nodes according to their path costs form the root node. It can be used to solve any graph/tree where the optimal cost is in demand. A uniform-cost search algorithm is implemented by the priority queue. It gives maximum priority to the lowest cumulative cost. Uniform cost search is equivalent to BFS algorithm if the path cost of all edges is the same.', 'Prof.Neha Mogre', 'https://youtu.be/IsbP7s6uqXU', 'robot.png', '33.47 minute', '2021-06-06 16:19:15'),
(2, 'Artificial Intelligence', 'A* Algorithm With Example', 'What is A* Search Algorithm? \r\nA* Search algorithm is one of the best and popular technique used in path-finding and graph traversals.\r\nWhy A* Search Algorithm ? \r\nInformally speaking, A* Search algorithms, unlike other traversal techniques, it has “brains”. What it means is that it is really a smart algorithm which separates it from the other conventional algorithms. This fact is cleared in detail in below sections. \r\nAnd it is also worth mentioning that many games and web-based maps use this algorithm to find the shortest path very efficiently (approximation). ', 'Prof.Neha Mogre', 'https://youtu.be/Yn66j1Ug8nY', 'say-hello-to-new-people.png', '54.36 minute', '2021-06-06 16:19:15'),
(5, 'Operating System Concepts', 'Types of Operating System (Multiprogramming, Multitasking, Multiprocessor, Distributed, Real Time)', 'Following are the popular types of OS (Operating System):\r\n\r\nBatch Operating System\r\nMultitasking/Time Sharing OS\r\nMultiprocessing OS\r\nReal Time OS\r\nDistributed OS\r\nNetwork OS\r\nMobile OS', 'Prof.Vijay Bagdi', 'https://youtu.be/AhIJZNsSXbA', 'retro-television.jpg', '38.04 minute', '2021-06-06 16:21:13'),
(6, ' Information &  Cyber Security', 'Issue & Need of Information Security', 'Information system means to consider available countermeasures or controls stimulated through uncovered vulnerabilities and identify an area where more work is needed. The purpose of data security management is to make sure business continuity and scale back business injury by preventing and minimising the impact of security incidents. The basic principle of Information Security is:\r\n\r\nConfidentially\r\nAuthentiacation\r\nNon-Repudiation\r\nIntergrity', 'Prof.Priyanka Bhende', 'https://youtu.be/CgR6muYmqM8', 'gpu.png', '7.33 minute', '2021-06-06 16:24:53'),
(7, 'Operating System Concepts', 'Context switching', 'A context switching is a process that involves switching of the CPU from one process or task to another. In this phenomenon, the execution of the process that is present in the running state is suspended by the kernel and another process that is present in the ready state is executed by the CPU.', 'Prof.Vijay Bagdi', 'https://youtu.be/qLZ9BC8TwYs', 'hard-disk-drive.png', '4.28 minute', '2021-06-06 16:24:53'),
(8, ' Operating System', 'Singhal’s Heuristics Algorithm Part-1', 'Singhal’s algorithm allows a site to enter CS without communicating with every site in the system. In low to moderate loads, the message traffic is N/2 because a site needs to send REQUEST to approximately half the sites on average', 'Prof. Jayant Adhikari', 'https://youtu.be/KTEGFMUmHPo', 'desktop.png', '20 minute', '2021-06-06 16:24:53'),
(9, ' Operating System', 'Types of Scheduler', 'There are three types of process scheduler. \r\n \r\n\r\n1) Long Term or job scheduler 2)Short term or CPU scheduler 3)Medium-term scheduler :', 'Prof.Vijay Bagdi', 'https://youtu.be/_BCEgonbWkg', 'devices.png', '5.13 minute', '2021-06-06 16:24:53'),
(10, 'Cloud Computing', 'Role of Web Services in Cloud Computing', 'Web service is a standardized medium to propagate communication between the client and server applications on the World Wide Web. A web service is a software module that is designed to perform a certain set of tasks.\r\n\r\nWeb services in cloud computing can be searched for over the network and can also be invoked accordingly.\r\nWhen invoked, the web service would be able to provide the functionality to the client, which invokes that web service.', 'Prof.Neha Mogre', 'https://youtu.be/LjY4URjtf6c', 'cloud-network.png', '26.10 minute', '2021-06-06 16:30:30'),
(11, 'Software Engineering', 'Unit Testing', 'A unit test is a way of testing a unit - the smallest piece of code that can be logically isolated in a system. In most programming languages, that is a function, a subroutine, a method or property. The isolated part of the definition is important. In his book \"Working Effectively with Legacy Code\", author Michael Feathers states that such tests are not unit tests when they rely on external systems: “If it talks to the database, it talks across the network, it touches the file system, it requires system configuration, or it can\'t be run at the same time as any other test.\"', 'Prof. Vidya Bodhe', 'https://youtu.be/0oqVa7GiFTE', 'indian-female-reading-emails-in-her-computer.png', '16.29 minute', '2021-06-06 16:30:30'),
(12, 'Information Security', 'Data Encryption Standard (DES) Algorithm', 'Data Encryption Standard (DES) is a block cipher algorithm that takes plain text in blocks of 64 bits and converts them to ciphertext using keys of 48 bits. It is a symmetric key algorithm, which means that the same key is used for encrypting and decrypting ​data.', 'Prof.Priyanka Bhende', 'https://youtu.be/4HwLsrDkU9Q', 'cyber-criminal.png', '9.46 minute', '2021-06-06 16:30:30'),
(13, 'Operating System', 'Singhal’s Heuristics Algorithm Part-2', 'Singhal’s algorithm allows a site to enter CS without communicating with every site in the system. In low to moderate loads, the message traffic is N/2 because a site needs to send REQUEST to approximately half the sites on average', 'Prof. Jayant Adhikari', 'https://youtu.be/fuGP2ydQ1aw', 'pc.png', '21.31 minute', '2021-06-06 16:30:30'),
(14, 'Cloud Computing', 'Cloud Deployment Models', 'A cloud deployment model defines where the servers you’re using are and who manages them. It defines what your cloud infrastructure looks like, what you can change yourself, and whether the services are provided to you or you need to build everything yourself. Cloud deployment models also define relationships between the infrastructure and your users (what users are allowed to change or implement).1)Public Cloud   2)Private Cloud 3) Hybrid cloud 4)Multi-cloud 5)Community cloud', 'Prof.Neha Mogre', 'https://youtu.be/4ErCalWktrA', 'profile-data.png', '35.44 minute', '2021-06-06 16:30:30'),
(15, 'Operating System', 'How to Calculate Mod Value', '', 'Prof.Priyanka Bhende', 'https://youtu.be/H4zE1EoxgJQ', 'wacom.png', '5.25 minute', '2021-06-06 16:33:03'),
(16, 'Software Engineering & Project Management', 'Introduction of SEPM', 'Symantec Endpoint Protection is a security software suite that includes intrusion prevention, firewall, and anti-malware features.According to SC Magazine, Endpoint Protection also has some features typical of data loss prevention software.It is typically installed on a server running Windows, Linux, or macOS. As of 2018, Version 14 is the only currently-supported release.', 'Prof. Vidya Bodhe', 'https://youtu.be/xEKUXfU_iwk', 'businessman.png', '15.27 minute', '2021-06-06 16:33:03'),
(17, 'Software Engineering & Project Management', 'Hill Cipher', 'Hill cipher is a polygraphic substitution cipher based on linear algebra.Each letter is represented by a number modulo 26. Often the simple scheme A = 0, B = 1, …, Z = 25 is used, but this is not an essential feature of the cipher. To encrypt a message, each block of n letters (considered as an n-component vector) is multiplied by an invertible n × n matrix, against modulus 26. To decrypt the message, each block is multiplied by the inverse of the matrix used for encryption.\r\n\r\nThe matrix used for encryption is the cipher key, and it should be chosen randomly from the set of invertible n × n matrices (modulo 26).', 'Prof.Priyanka Bhende', 'https://youtu.be/w1YQjS5N59c', 'freelancer.png', '6.29 minute', '2021-06-06 16:35:00'),
(18, 'Experiment Video', 'Experiment No 1 (Factory Design Pattern)', 'Experiment Video', '', 'https://youtu.be/czj2OdviAJA', 'science-and-research.png', '15.18 minuet', '2021-06-06 16:35:00'),
(19, 'Experiment Video', 'Experiment No 01', 'Experiment No 01', 'Prof. Vidya Bodhe', 'https://youtu.be/gexSecqqDAQ', 'science-and-research.png', '8.14 minute', '2021-06-06 16:36:24'),
(20, 'Experiment Video', 'Experiment No 3 DSPD', 'Experiment No 3 DSPD', 'Prof. Vidya Bodhe', 'https://youtu.be/VtqDPNDGmv4', 'science-and-research.png', '10.14 minute', '2021-06-06 16:36:24'),
(21, 'Experiment Video', 'Experiment No 2 (Abstract Factory Design Pattern)', 'Experiment No 2 (Abstract Factory Design Pattern)', '', 'https://youtu.be/ccUENPvGj_Y', 'science-and-research.png', '36.37 minute', '2021-06-06 16:40:01'),
(22, 'Experiment Video', 'DSPD EXPERIEMENT NO 5', 'DSPD EXPERIEMENT NO 5', 'Prof. Vidya Bodhe', 'https://youtu.be/11_KagWIPmE', 'science-and-research.png', '11.16 minute', '2021-06-06 16:40:01'),
(23, 'Experiment Video', 'Experiment No. 3 (Builder Design pattern)', 'Experiment No. 3 (Builder Design pattern)', '', 'https://youtu.be/u7nbhCV8EAA', 'science-and-research.png', '37.57 minute', '2021-06-06 16:40:01'),
(24, 'Experiment Video', 'Experiment No.4 (Adapter Design Pattern)', 'Experiment No.4 (Adapter Design Pattern)', '', 'https://youtu.be/rtj9FlJQIlg', 'science-and-research.png', '26.21 minute', '2021-06-06 16:40:01');

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
