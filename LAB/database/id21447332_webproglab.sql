-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2023 at 10:51 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21447332_webproglab`
--

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `task` varchar(50) NOT NULL,
  `done` tinyint(1) NOT NULL,
  `progress` varchar(15) NOT NULL,
  `user_id` int(11) NOT NULL,
  `due_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`task`, `done`, `progress`, `user_id`, `due_date`) VALUES
('Do home chores', 1, 'Done', 1, '2023-10-21'),
('Do homework', 1, 'Done', 1, '2023-10-24'),
('Eat pizza with family', 0, 'Waiting on', 1, '2023-11-02'),
('Have fun', 0, 'Not yet started', 1, '2023-10-12'),
('Sleep and cry for days', 0, 'Waiting on', 1, '2023-10-26'),
('tes', 1, 'Done', 3, '2023-10-25'),
('Tidur', 0, 'Waiting on', 4, '2023-10-25'),
('Traktir satu kelas', 0, 'Not yet started', 2, '2023-10-31'),
('Watch Netflix', 0, 'Waiting on', 1, '2023-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'bryan', 'ngetes', 'bryan@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'mark', 'metew', 'tetew@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Met', 'Tes', 'met@gmail.com', 'b8b4b727d6f5d1b61fff7be687f7970f'),
(4, 'Mark', 'By', 'mark.vincent@student.umn.ac.ida', 'ea82410c7a9991816b5eeeebe195e20a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`task`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
