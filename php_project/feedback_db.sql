-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 04:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `body`, `Date`) VALUES
(1, 'Aditya Mishra', 'adityamaster2525@gamil.com', 'I liked your feedback project made using \r\nhtml, css, javascript and php. But you need to improve your skills further to work and develop efficiently. Thank You.', '2023-01-02 11:16:23'),
(12, 'Mohini', 'aditya@gmail.com', 'This is a feedback.', '2023-01-02 16:35:54'),
(13, 'Vishal Yadav', 'adityamishra9124@gmail.com', 'This is a feedback for our website project.\r\nMade using html css js and php.', '2023-01-02 20:20:44'),
(14, 'manvi ', 'manvi121@gogalbaba.com', 'I don&#039;t know about this site so I can&#039;t comment happy new year ', '2023-01-02 20:23:31'),
(15, 'Rohit d pandey', 'adityamishra@eng.rizvi.edu.in', 'I liked your feedback project made using html, css, javascript and php. But you need to improve your skills further to work and develop efficiently. Thank You.', '2023-01-02 20:26:29'),
(16, 'John Doe', 'jhon@gamil.com', 'This site can&rsquo;t be reachedwww.freecodecamp.org&rsquo;s server IP address could not be found.\r\nTry:\r\n\r\nChecking the connection\r\nChecking the proxy, firewall, and DNS configuration\r\nRunning Windows Network Diagnostics', '2023-01-03 09:41:51'),
(17, 'Ben Richard Williamson', 'benny1414@gmail.com', 'This is test feedback.', '2023-01-03 18:24:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
